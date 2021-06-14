@extends('layouts.app')
@section('content')
    <!-- our furniture section start -->
  <div class="our_furniture_section layout_padding">
    <div class="container">
      <h1 class="about_taital">Our <span style="background-color: #fee421; color: #fff; padding: 0px 5px;">Funitures</span></h1>
      <p class="market_text">page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution o</p>
    </div>
  </div>
  <div class="our_section_2">
    <div class="row">
      <div class="col-sm-5">
        <div class="images_bt">
          <div class="image_left">
            <button class="seemore_bt">SEE MORE</button>
          </div>
          <div class="image_right">
            <div class="image_9"><img src="images/img-9.png"></div>
            <div class="new_text">NEW DESIGN</div>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="image"><img src="images/img-4.png"></div>
      </div>
      <div class="col-sm-3">
        <div class="image"><img src="images/img-5.png"></div>
      </div>
    </div>
    <div class="images_section_2">
      <div class="row">
        
      @foreach ($products as $item)
        <div class="col-sm-4">
          <a class="image_6" href="#"><img src={{asset("images/".$item->img)}}></a>
        </div>
      @endforeach  
      </div>
    </div>
  </div>
  <!-- our furniture section end -->
@endsection