@extends('layouts.app')

@section('content')
      <!-- Breadcrumbs -->
  <div class="container mt-5">
    <nav>
      <ol class="breadcrumb bg-transparent pl-0">
        <li class="breadcrumb-item"><a href="#">Category</a></li>
        <li class="breadcrumb-item active" aria-current="page">Single Product</li>
      </ol>
    </nav>
  </div>

  <!-- Single Product -->
  <section class="single-product">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <figure class="figure">
            <img src="{{asset('images/single/1.png')}}" class="figure-img img-fluid">
            <figcaption class="figure-caption product-thumbnail-container d-flex justify-content-between">
              <a href="">
                <img src="{{asset('images/single/thumbnail/1.png')}}">
              </a>
              <a href="">
                <img src="{{asset('images/single/thumbnail/2.png')}}">
              </a>
              <a href="">
                <img src="{{asset('images/single/thumbnail/3.png')}}">
              </a>
              <a href="">
                <img src="{{asset('images/single/thumbnail/4.png')}}">
              </a>
            </figcaption>
          </figure>
        </div>

        <div class="col-lg-4">
          <h3>Jeans: Giordano XI</h3>
          <p class="text-muted">IDR 290.000.000</p>
          <button type="button" class="btn btn-sm" style="background-color: #EAEAEF; color: white;"><i
              class="fa fa-minus-circle"></i></button>
          <span class="mx-2">20</span>
          <button type="button" class="btn btn-sm btn-success" style="color: white;"><i
              class="fa fa-plus-circle"></i></button>

          <div class="btn-product">
            <a href="" class="btn btn-warning text-white">Add to Cart</a>
            <a href="" class="btn" style="background-color: #EAEAEF; color: #ADADAD;">Add to Wishlist</a>
          </div>

          <div class="designed-by">
            <h5>Designed by</h5>
            <div class="row">
              <div class="col-2">
                <img src="{{asset('images/single/2.png')}}">
              </div>
              <div class="col">
                <h4>Anne Mortgery</h4>
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


  <!-- Similar Product -->
  <section class="similar-product">
    <div class="container">
      <div class="row mb-3">
        <div class="col">
          <h3>Similar Products</h3>
          <p>Pakaian pelengkap produk di atas</p>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-4">
          <figure class="figure">
            <img src="{{asset('images/single/similar/1.png')}}" class="figure-img img-fluid">
            <figcaption class="figure-caption">
              <div class="row">
                <div class="col">
                  <h4>Hatty Bomb</h4>
                  <p>Match 20%</p>
                </div>
                <div class="col align-items-center d-flex justify-content-end">
                  <p style="font-size: 18px;">IDR. 209.000</p>
                </div>
              </div>
            </figcaption>
          </figure>
        </div>
        <div class="col-sm-4">
          <figure class="figure">
            <img src="{{asset('images/single/similar/2.png')}}" class="figure-img img-fluid">
            <figcaption class="figure-caption">
              <div class="row">
                <div class="col">
                  <h4>White Pure</h4>
                  <p>Match 20%</p>
                </div>
                <div class="col align-items-center d-flex justify-content-end">
                  <p style="font-size: 18px;">IDR. 209.000</p>
                </div>
              </div>
            </figcaption>
          </figure>
        </div>
        <div class="col-sm-4">
          <figure class="figure">
            <img src="{{asset('images/single/similar/3.png')}}" class="figure-img img-fluid">
            <figcaption class="figure-caption">
              <div class="row">
                <div class="col">
                  <h4>Hatty Bomb</h4>
                  <p>Match 20%</p>
                </div>
                <div class="col align-items-center d-flex justify-content-end">
                  <p style="font-size: 18px;">IDR. 209.000</p>
                </div>
              </div>
            </figcaption>
          </figure>
        </div>
      </div>
    </div>
  </section>
  <!-- Akhir Similar Product -->
@endsection