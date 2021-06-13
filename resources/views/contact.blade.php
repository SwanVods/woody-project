@extends('layouts.app')
@section('content')
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
                      <li><img src="images/fb-icon.png"></li>
                      <li><img src="images/twitter-icon.png"></li>
                      <li><img src="images/in-icon.png"></li>
                      <li><img src="images/instagram-icon.png"></li>
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

  <!-- contact section end -->
@endsection