<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ItemController extends Controller
{
    public function __construct() {
        $this->product = new Product();
    }

    public function index()
    {
        
        return Product::with('categories:id,name')->get();
    }

    public function newIndex()
    {
        $data = ['products' => $this->product->getAllData()];
        return view('index', $data); 
    }
    public function furniture()
    {
        $data = ['products' => $this->product->getAllData()];
        return view('furniture', $data); 
    }

    public function show($id)
    {
        $data = ['products' => $this->product->getData($id)];
        return view('details', $data);
    }

    public function addCart($productId)
    {
        $product = Product::find($productId);

        // add to cart
        \Cart::session(auth()->id())->add(array(
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => 1,
            'attributes' => array(
                'size' => 'L',
                'img' => $product->img,
            ),
            'associatedModel' => $product,

        ));
        return redirect()->route('cart');
    }

    public function showCart()
    {
        $condition = new \Darryldecode\Cart\CartCondition(array(
            'name' => 'PPN',
            'type' => 'tax',
            'target' => 'subtotal', // this condition will be applied to cart's subtotal when getSubTotal() is called.
            'value' => '10%',
            
        ));
        $items = [
            'items' => \Cart::session(auth()->id())->condition($condition)->getContent(),
            'subtotal' => \Cart::session(auth()->id())->condition($condition)->getSubTotal(),
            'total' => \Cart::session(auth()->id())->condition($condition)->getTotal(),
        ];
        // dd($items);
        return view('cart', $items);
    }

    public function destroyItem($id)
    {
        \Cart::session(auth()->id())->remove($id);
        return back();
    }

    public function updateItem($id)
    {
        \Cart::session(auth()->id())->update($id, [
            'quantity' => +1,
        ]);
        return back();
    }
}
