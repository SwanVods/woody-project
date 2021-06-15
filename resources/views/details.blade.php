@extends('layouts.app')

@section('content')
      <!-- Breadcrumbs -->
  <div class="container mt-5">
    <nav>
      <ol class="breadcrumb bg-transparent pl-0">
        <li class="breadcrumb-item"><a href="#">Furnitures</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{$products[0]->slug}}</li>
      </ol>
    </nav>
  </div>

  <!-- Single Product -->
  <section class="single-product">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <figure class="figure">
            <img src="{{asset('images/'.$products[0]->img)}}" class="figure-img img-fluid">
            <figcaption class="figure-caption product-thumbnail-container d-flex justify-content-between">
              <a href="">
                <img src="{{asset('images/'.$products[0]->img)}}">
              </a>
              <a href="">
                <img src="{{asset('images/'.$products[0]->img)}}">
              </a>
              <a href="">
                <img src="{{asset('images/'.$products[0]->img)}}">
              </a>
            </figcaption>
          </figure>
        </div>

        <div class="col-lg-4">
          <h3>{{$products[0]->name}}</h3>
          <p class="text-muted" style="margin: 0">IDR {{number_format((int)$products[0]->price, 0, ',','.')}}</p>

          <div class="btn-product" style="margin:0">
            <a href="{{route('cart.add', ['id' => $products[0]->id])}}" class="btn btn-warning" style="color: black;">Buy</a>
            <a href="" class="btn" style="background-color: #EAEAEF; color: #ADADAD;">Add to Wishlist</a>
          </div>

          <div class="designed-by">
            <h5>Designed by</h5>
            <div class="row">
              <div class="col-2">
                <img class="profile" src="{{asset('images/single/2.png')}}">
              </div>
              <div class="col">
                <h4>Haruka Yuuki</h4>
                <p>14.2K <span>Followers</span></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Product Description & Review -->
  <section class="product-description p-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-9">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab"
                aria-controls="description" aria-selected="true">Product Description</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review"
                aria-selected="false">Reviews (20)</a>
            </li>
          </ul>
          <div class="tab-content p-3" id="myTabContent">
            <div class="tab-pane fade show active product-review" id="description" role="tabpanel"
              aria-labelledby="description-tab">
              <p>Payday is finally here and you’ve got some extra cash to help you stock up your summer
                wardrobe. Not sure where to start? ASOS Stylist Beccy Goldsworthy is here with the best of what’s
                new, from 80s-inspired tracksuits to some seriously fresh trainers. Check out her picks below
                and watch the video for more.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In nec felis metus. Vivamus eu urna
                tempor, pretium erat quis, volutpat eros. Cras consectetur dolor at venenatis feugiat. Fusce
                nunc risus, finibus eget augue ac, ornare gravida turpis. Morbi consequat, nisi sit amet viverra
                feugiat, lacus mauris ornare erat, at pharetra odio dolor id elit. Pellentesque eu aliquet ex.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="tab-pane fade product-review" id="review" role="tabpanel" aria-labelledby="review-tab">
              <div class="row">
                <div class="col-1 d-none d-md-block">
                  <img src="{{asset('images/single/review/1.png')}}">
                </div>
                <div class="col">
                  <h5>Joe Mackenzie</h5>
                  <p>Produknya bagus dan bahannya juga rapih cocok untuk kulit</p>
                </div>
              </div>
              <div class="row">
                <div class="col-1 d-none d-md-block">
                  <img src="{{asset('images/single/review/2.png')}}">
                </div>
                <div class="col">
                  <h5>Brian Smith</h5>
                  <p>Produknya bagus dan bahannya juga rapih cocok untuk kulit</p>
                </div>
              </div>
              <div class="row">
                <div class="col-1 d-none d-md-block">
                  <img src="{{asset('images/single/review/1.png')}}">
                </div>
                <div class="col">
                  <h5>Joe Mackenzie</h5>
                  <p>Produknya bagus dan bahannya juga rapih cocok untuk kulit</p>
                </div>
              </div>
              <div class="row">
                <div class="col-1 d-none d-md-block">
                  <img src="{{asset('images/single/review/2.png')}}">
                </div>
                <div class="col">
                  <h5>Brian Smith</h5>
                  <p>Produknya bagus dan bahannya juga rapih cocok untuk kulit</p>
                </div>
              </div>
              <div class="row">
                <div class="col-1 d-none d-md-block">
                  <img src="{{asset('images/single/review/1.png')}}">
                </div>
                <div class="col">
                  <h5>Joe Mackenzie</h5>
                  <p>Produknya bagus dan bahannya juga rapih cocok untuk kulit</p>
                </div>
              </div>
              <div class="row">
                <div class="col-1 d-none d-md-block">
                  <img src="{{asset('images/single/review/2.png')}}">
                </div>
                <div class="col">
                  <h5>Brian Smith</h5>
                  <p>Produknya bagus dan bahannya juga rapih cocok untuk kulit</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Akhir Product Description & Review -->


 
@endsection