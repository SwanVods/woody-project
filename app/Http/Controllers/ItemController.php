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
}
