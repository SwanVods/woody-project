<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Xendit\Xendit;
use Xendit\EWallets;
use Xendit\VirtualAccounts;

class XenditController extends Controller
{
    private $token = "xnd_development_IwjBf4frk6Z5wsornimrwlvO61HtCfAZZwN0kNKtrqVF7hu9m3FhGq09xdBjK";
    
    public function getListVA()
    {
        Xendit::setApiKey($this->token);
        $getVABanks = VirtualAccounts::getVABanks();
        return response()->json([
            'data' => $getVABanks
        ])->setStatusCode(200);
    }

    public function createva(Request $request)
    {
        Xendit::setApiKey($this->token);
        $params = [
            "external_id" => "VA_fixed-12341234",
            "bank_code" => "MANDIRI",
            "name" => "Feira"
        ];

        $createVA = \Xendit\VirtualAccounts::create($params);
        return view('invoice', $createVA);
    
    }
}
