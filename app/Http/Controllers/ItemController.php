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
        $data['products'] = $this->product->getAllData();
        return view('index', $data); 
    }

    public function show($id)
    {
        $data['product'] = $this->product->getData($id);
        return view('product.detail.'.$id, $data);
    }
}
