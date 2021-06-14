@extends('layouts.app')

@section('index-content')
    <!-- banner section start -->
    <div class="banner_section layout_padding">
      <div class="container-fluid">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row">
                <div class="col-sm-1">
                  <p class="number_tetx">02/3</p>
                  <div class="line"><img src={{asset("images/linr-icon.png")}}></div>
                  <p class="number_tetx">02/3</p>
                  <div class="left_img"><img src={{asset("images/img-2.png")}}></div>
                </div>
                <div class="col-sm-5">
                  <h1 class="furniture_text">2019</h1>
                  <h1 class="trends_text">TRENDS</h1>
                  <h1 class="furniture_text">FURNITURE</h1>
                  <P class="lorem_text">It is a long established fact that a reader will be distracted by the readable
                    content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                    more-or-less normal distribution of letters, </P>
                  <button class="more_bt">MORE INFO</button>
                  <button class="furniture_bt">FURNITURE</button>
                </div>
                <div class="col-sm-6">
                  <div><img src={{asset("images/img-1.png")}}></div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col-sm-1">
                  <p class="number_tetx">02/3</p>
                  <div class="line"><img src={{asset("images/linr-icon.png")}}></div>
                  <p class="number_tetx">02/3</p>
                  <div class="left_img"><img src={{asset("images/img-2.png")}}></div>
                </div>
                <div class="col-sm-5">
                  <h1 class="furniture_text">2019</h1>
                  <h1 class="trends_text">TRENDS</h1>
                  <h1 class="furniture_text">FURNITURE</h1>
                  <P class="lorem_text">It is a long established fact that a reader will be distracted by the readable
                    content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                    more-or-less normal distribution of letters, </P>
                  <button class="more_bt">MORE INFO</button>
                  <button class="furniture_bt">FURNITURE</button>
                </div>
                <div class="col-sm-6">
                  <div><img src={{asset("images/img-1.png")}}></div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col-sm-1">
                  <p class="number_tetx">02/3</p>
                  <div class="line"><img src={{asset("images/linr-icon.png")}}></div>
                  <p class="number_tetx">02/3</p>
                  <div class="left_img"><img src={{asset("images/img-2.png")}}></div>
                </div>
                <div class="col-sm-5">
                  <h1 class="furniture_text">2019</h1>
                  <h1 class="trends_text">TRENDS</h1>
                  <h1 class="furniture_text">FURNITURE</h1>
                  <P class="lorem_text">It is a long established fact that a reader will be distracted by the readable
                    content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                    more-or-less normal distribution of letters, </P>
                  <button class="more_bt">MORE INFO</button>
                  <button class="furniture_bt">FURNITURE</button>
                </div>
                <div class="col-sm-6">
                  <div><img src={{asset("images/img-1.png")}}></div>
                </div>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

      </div>
    </div>
    <!-- banner section end -->
@endsection

@section('content')
  <!-- about section start -->
  <div class="layout_padding about_section ">
    <div class="container">
      <h1 class="about_taital">About <span style="background-color: #fee421; color: #fff; padding: 0px 5px;">Us</span>
      </h1>
      <p class="market_text">making it look like readable English. Many desktop publishing</p>
      <div class="about_bg">
        <div class="row">
          <div class="col-md-8">
            <p class="about_long_text">It is a long established fact that a reader will be distracted by the readable
              content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less
              normal distribution o
              f letters, a
              s opposed to using 'Content h
              ere, content here', making it look like readable English. Many desktop publishing packages and web</p>
            <button class="about_bt">ABOUT MORE</button>
          </div>
          <div class="col-md-4">
            <div class="table_img"><img src={{asset("images/about-img.png")}}></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- about section end -->
  <!-- our furniture section start -->
  <div class="our_furniture_section layout_padding">
    <div class="container">
      <h1 class="about_taital">Our <span
          style="background-color: #fee421; color: #fff; padding: 0px 5px;">Funitures</span></h1>
      <p class="market_text">page when looking at its layout. The point of using Lorem Ipsum is that it has a
        more-or-less normal distribution o</p>
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
            <div class="image_9"><img src={{asset("images/img-9.png")}}></div>
            <div class="new_text">NEW DESIGN</div>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="image"><img src={{asset("images/img-4.png")}}></div>
      </div>
      <div class="col-sm-3">
        <div class="image"><img src={{asset("images/img-5.png")}}></div>
      </div>
    </div>
    <div class="images_section_2">
      <div class="row">
      @foreach ($products as $item)
      <div class="col-sm-4">
        <a class="image_6" href="#"><img src={{asset("images/img-6.png")}}></a>
      </div>
      @endforeach  
      </div>
    </div>
  </div>
  <!-- our furniture section end -->
  <!-- testi monial section start -->
  <div class="testi_monial_section layout_padding">
    <div class="container">
      <div id="my_carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <h1 class="testi_monila_text">Testi <span
                style="background-color: #fee421; color: #fff; padding: 0px 5px;">Monial</span></h1>
            <div class="testimonila_inner">
              <div class="testing_img"><img src={{asset("images/img-10.png")}}></div>
              <h2 class="helina_text">Helina</h2>
              <p class="dolor_text">It is a long established fact that a reader will be distracted by the readable
                content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it
                look</p>
            </div>
          </div>
          <div class="carousel-item">
            <h1 class="testi_monila_text">Testi <span
                style="background-color: #fee421; color: #fff; padding: 0px 5px;">Monial</span></h1>
            <div class="testimonila_inner">
              <div class="testing_img"><img src={{asset("images/img-10.png")}}></div>
              <h2 class="helina_text">Helina</h2>
              <p class="dolor_text">It is a long established fact that a reader will be distracted by the readable
                content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it
                look</p>
            </div>
          </div>
          <div class="carousel-item">
            <h1 class="testi_monila_text">Testi <span
                style="background-color: #fee421; color: #fff; padding: 0px 5px;">Monial</span></h1>
            <div class="testimonila_inner">
              <div class="testing_img"><img src={{asset("images/img-10.png")}}></div>
              <h2 class="helina_text">Helina</h2>
              <p class="dolor_text">It is a long established fact that a reader will be distracted by the readable
                content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it
                look</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#my_carousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#my_carousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
  <!-- testi monial section end -->
  <!-- contact section start -->
  <div class="layout_padding contact_section">
    <div class="container">
      <div class="contact_section_inner">
        <div class="contact_main">
          <h1 class="contact_text">Contact Us</h1>
          <div class="input_main">
            <div class="row">
              <div class="col-sm-6 col-lg-3">
                <div class="form-group">
                  <input type="text" class="email-bt" placeholder="Name" name="Email">
                </div>
              </div>
              <div class="col-sm-6 col-lg-3">
                <div class="form-group">
                  <input type="text" class="email-bt" placeholder="Phone Number" name="Email">
                </div>
              </div>
              <div class="col-sm-6 col-lg-3">
                <div class="form-group">
                  <input type="text" class="email-bt" placeholder="Email" name="Email">
                </div>
              </div>
              <div class="col-sm-6 col-lg-3">
                <div class="social_icon">
                  <ul>
                    <li><img src={{asset("images/fb-icon.png")}}></li>
                    <li><img src={{asset("images/twitter-icon.png")}}></li>
                    <li><img src={{asset("images/in-icon.png")}}></li>
                    <li><img src={{asset("images/instagram-icon.png")}}></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="massage_box">
            <div class="row">
              <div class="col-sm-8">
                <form action="/action_page.php">
                  <div class="form-group">
                    <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="text"></textarea>
                  </div>
                </form>
              </div>
              <div class="col-sm-4">
                <button class="send_bt">Send</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
