<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ItemController extends Controller
{
    public function __construct( )
    {
        $this->product= new Product();
    }
    public function index()
    {
        $data=[
            'product' => $this->product->getAllData(),
        ];
        return view('products',$data);
    }

    public function create()
    {
        return view('Admin/mahasiswa/v_add_mahasiswa');
    }
    public function store(Request $request)
    {
        //input to table product
        $product = new Product;
        $data = $request->all();
        $product->nama_product = $data['nama_product'];
        $product->nama_tim = $data['nama_tim'];
        $product->deskripsi_product = $data['deskripsi_product'];
        $product->save();

                //input to table foto_product
                if($request->hasfile('foto_product'))
                {
                    foreach($request->file('foto_product') as $key => $file)
                    {
                            $fname = $file->getClientOriginalName();
                            $file->move(public_path('Img/product') , $fname);
                            $data3 = array(
                                'product_id' => $product->id,
                                'foto_product' => $fname,
                            );
                            fotoProduct::insert($data3);
                        }
                
                }

                //input to table mahasiswa
                if($request->hasfile('foto_mahasiswa'))
                {
                   foreach($request->file('foto_mahasiswa') as $key => $file)
                   {
                        $fname = $file->getClientOriginalName();
                        $file->move(public_path('Img/mahasiswa') , $fname);
                        $data2 = array(
                            'id_product' => $product->id,
                            'nama_mahasiswa' => $request->nama_mahasiswa[$key],
                            'kelas' => $request->kelas[$key],
                            'foto_mahasiswa' => $fname
                        );
                        mahasiswa::insert($data2);
                    }
                   
                }
        return redirect()->route('mahasiswa')->with('pesan','data berhasil di tambahkan');
    }

    public function show($id)
    {
        if (!$this->mahasiswa->detailData($id)) {
            abort(404);
        }
        $data=[
            'dataKarya' => $this->product->detailData($id),
            'fotoKarya' => $this->fotoProduct->detailData($id),
        ];
        return view('Admin/mahasiswa/v_detail_mahasiswa',$data);
    }
    public function edit($id)
    {
        if (!$this->mahasiswa->detailData($id)) {
            abort(404);
        }
        $data=[
            'mahasiswa' => $this->mahasiswa->detailData($id)
        ];
        return view('Admin/mahasiswa/v_edit_mahasiswa',$data);
    }
    public function update(Request $request, $id)
    {
        
    }
    public function destroy($id)
    {
        $this->product->deleteData($id);
        $this->mahasiswa->deleteData($id);
        $this->fotoProduct->deleteData($id);
        return redirect()->route('industri')->with('pesan','Data berhasil dihapus');
    }
}
