<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Order extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function initOrder($userid)
    {
        DB::table('orders')->insert([
            'user_id' => $userid,
            'total_price' => 0,
            'invoice' => 'INV'.rand(0, 9).'X'.$userid,
            'status' => 0,
        ]);
    }

    public function getOrder($id)
    {
        return DB::table('orders')->get($id);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot('quantity');
    }
}
