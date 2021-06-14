@extends('layouts.app')
@section('content')
     <div class="container cart-header">
    <div class="row mt-5 text-center">
      <div class="col">
        <h3>Your Cart</h3>
        <p>Pastikan barang anda terbayar lunas</p>
      </div>
    </div>
  </div>

  <!-- Breadcrumbs -->
  <div class="container">
    <nav>
      <ol class="breadcrumb bg-transparent pl-0 cart-breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Cart Checkout</li>
      </ol>
    </nav>
  </div>


  <!-- Checkout -->
  <section class="checkout">
    <div class="container">
      <div class="row justify-content-between" style="margin-bottom: 100px;">
        <div class="col-lg-6">
          <h4 class="mb-4">Your Items</h4>
          <div class="row mb-4">
            <div class="col-2">
              <img src="{{asset('images/cart/item1.png')}}">
            </div>
            <div class="col-4">
              <h5 class="m-0">Jeans Papp</h5>
              <p class="m-0" style="color:#B7B7B7;">IDR 280.000.100</p>
            </div>
            <div class="col-4">
              <button type="button" class="btn btn-sm" style="background-color: #EAEAEF; color: white;"><i
                  class="fa fa-minus-circle"></i></button>
              <span class="mx-2">20</span>
              <button type="button" class="btn btn-sm btn-success" style="color: white;"><i
                  class="fa fa-plus-circle"></i></button>
            </div>
            <div class="col-2 text-right">
              <button type="button" class="btn btn-sm btn-danger" style="color: white;"><i
                  class="fa fa-times-circle"></i></button>
            </div>
          </div>
          <div class="row mb-4">
            <div class="col-2">
              <img src="{{asset('images/cart/item1.png')}}">
            </div>
            <div class="col-4">
              <h5 class="m-0">Jeans Papp</h5>
              <p class="m-0" style="color:#B7B7B7;">IDR 280.000.100</p>
            </div>
            <div class="col-4">
              <button type="button" class="btn btn-sm" style="background-color: #EAEAEF; color: white;"><i
                  class="fa fa-minus-circle"></i></button>
              <span class="mx-2">20</span>
              <button type="button" class="btn btn-sm btn-success" style="color: white;"><i
                  class="fa fa-plus-circle"></i></button>
            </div>
            <div class="col-2 text-right">
              <button type="button" class="btn btn-sm btn-danger" style="color: white;"><i
                  class="fa fa-times-circle"></i></button>
            </div>
          </div>
          <div class="row mb-4">
            <div class="col-2">
              <img src="{{asset('images/cart/item1.png')}}">
            </div>
            <div class="col-4">
              <h5 class="m-0">Jeans Papp</h5>
              <p class="m-0" style="color:#B7B7B7;">IDR 280.000.100</p>
            </div>
            <div class="col-4">
              <button type="button" class="btn btn-sm" style="background-color: #EAEAEF; color: white;"><i
                  class="fa fa-minus-circle"></i></button>
              <span class="mx-2">20</span>
              <button type="button" class="btn btn-sm btn-success" style="color: white;"><i
                  class="fa fa-plus-circle"></i></button>
            </div>
            <div class="col-2 text-right">
              <button type="button" class="btn btn-sm btn-danger" style="color: white;"><i
                  class="fa fa-times-circle"></i></button>
            </div>
          </div>

          <h4 class="mb-3" style="margin-top: 100px;">Your Address</h4>

          <form>
            <div class="form-group">
              <label for="address">Address</label>
              <input type="text" class="form-control" id="address" placeholder="Alamat lengkap">
            </div>
            <div class="form-group">
              <label for="address2">Address II</label>
              <input type="text" class="form-control" id="address2" placeholder="Alamat tambahan">
            </div>
            <div class="form-group">
              <label for="city">City</label>
              <select class="custom-select">
                <option selected>Select City</option>
                <option value="1">Bandung</option>
                <option value="2">Jakarta</option>
                <option value="3">Surabaya</option>
              </select>
            </div>
            <div class="form-group">
              <label for="country">Country</label>
              <select class="custom-select">
                <option selected>Select Country</option>
                <option value="1">Indonesia</option>
                <option value="2">Malaysia</option>
                <option value="3">Singapore</option>
              </select>
            </div>
          </form>
        </div>

        <div class="col-lg-5">
          <div class="card rounded-0 checkout-detail">
            <div class="card-body">
              <h5 class="card-title">Informasi Biaya</h5>
              <div class="row mb-3">
                <div class="col">
                  <h6 class="m-0">Jeans Papp</h6>
                  <small style="color: #B7B7B7;">2 Items</small>
                </div>
                <div class="col d-flex justify-content-end">
                  <h6 class="m-0 align-self-center text-success">IDR 600.000.000</h6>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col">
                  <h6 class="m-0">Jeans Papp</h6>
                  <small style="color: #B7B7B7;">2 Items</small>
                </div>
                <div class="col d-flex justify-content-end">
                  <h6 class="m-0 align-self-center text-success">IDR 600.000.000</h6>
                </div>
              </div>

              <hr>

              <div class="row mb-3">
                <div class="col">
                  <h6 class="m-0">Courier</h6>
                  <small style="color: #B7B7B7;">JNT Express</small>
                </div>
                <div class="col d-flex justify-content-end">
                  <h6 class="m-0 align-self-center text-success">IDR 201.000</h6>
                </div>
              </div>

              <div class="row mb-3">
                <div class="col">
                  <h6 class="m-0">Tax</h6>
                  <small style="color: #B7B7B7;">Negara 20%</small>
                </div>
                <div class="col d-flex justify-content-end">
                  <h6 class="m-0 align-self-center text-success">IDR 1.799.000</h6>
                </div>
              </div>

              <div class="row mb-3">
                <div class="col">
                  <h6 class="m-0">Eid Promo</h6>
                  <small style="color: #B7B7B7;">10% OFF</small>
                </div>
                <div class="col d-flex justify-content-end">
                  <h6 class="m-0 align-self-center text-danger">-IDR 50.000.000</h6>
                </div>
              </div>

              <div class="row mb-3">
                <div class="col">
                  <h6 class="m-0">Total Harga</h6>
                </div>
                <div class="col d-flex justify-content-end">
                  <h6 class="m-0 align-self-center text-primary">IDR 1.520.940.300</h6>
                </div>
              </div>

            </div>
          </div>

          <div class="row mt-3">
            <div class="col">
              <button type="button" class="btn btn-block"
                style="background-color: #EAEAEF; color: #ADADAD;">Cancel</button>
            </div>
            <div class="col">
              <button type="button" class="btn btn-warning btn-block text-white" data-toggle="modal"
                data-target="#checkoutModal">Checkout</button>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
  <!-- Akhir Checkout -->


  <!-- Modal -->
  <div class="modal fade checkout-modal-success" id="checkoutModal" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body text-center">
          <img src="{{asset('images/cart/sukses_checkout.png')}}" class="mb-5">
          <h3>Checkout Berhasil</h3>
          <p>Anda akan mendapatkan barang anda <br> dalam beberapa hari</p>
          <button type="button" class="btn mt-3" style="background-color: #EAEAEF; color: #ADADAD;"
            data-dismiss="modal">Home</button>
        </div>
      </div>
    </div>
  </div>

@endsection