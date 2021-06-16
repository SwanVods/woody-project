@extends('layouts.app') @section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          {{$external_id}}
        </div>
        <div class="row mx-0">
          <div class="card col-4">
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Status</li>
              <li class="list-group-item">Nama Bank</li>
              <li class="list-group-item">Kode Merchant</li>
              <li class="list-group-item">A/N</li>
              <li class="list-group-item">No. Rekening</li>
              <li class="list-group-item">Batas Waktu</li>


            </ul>
          </div>
          <div class="card col">
            <ul class="list-group list-group-flush">
              <li class="list-group-item">{{$status}}</li>
              <li class="list-group-item">{{$bank_code}}</li>
              <li class="list-group-item">{{$merchant_code}}</li>
              <li class="list-group-item">{{$name}}</li>
              <li class="list-group-item">{{$account_number}}</li>
              <li class="list-group-item">{{date('Y-m-d H:i:s', strtotime($expiration_date))}}</li>
            </ul>
        </div>
      </div>
    </div>
  </div>
  @endsection
</div>