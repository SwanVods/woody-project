<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    use HasFactory;

    public function getAllData()
    {
        DB::table('products')->get();
    }

    public function getData($id)
    {
        DB::table('products')->where('id', '=', $id)->get();
    }
}
