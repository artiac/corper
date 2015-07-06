    <!-- BEGIN PRE-FOOTER -->
    <div class="pre-footer" style="background-color:#839742;">
      <div class="container">
        <div class="row">
          <!-- BEGIN BOTTOM ABOUT BLOCK -->
          <div class="col-md-3 col-sm-6 pre-footer-col">
            <h2>About Us</h2>
            <p style="text-align:justify">Corperlife is run by a small group of ex-corpers who wish to help others maximise their post grad years. We provide Free tools and resources to help Nigerian youths through the NYSC program and into starting their careers.</p>
             <div class="row">
              <div class="col-md-12">
           <!--  <div class="photo-stream">
              <h2>Photos Stream</h2>
              <ul class="list-unstyled">
                  {{HTML::image('assets/img/people/img5-small.jpg','people')}}
                  {{HTML::image('assets/img/works/img1.jpg','people')}}
                  {{HTML::image('assets/img/people/img4-large.jpg','people')}}
                  {{HTML::image('assets/img/works/img6.jpg','people')}}
              </ul>                    
            </div> -->
            </div>
            </div>
          </div>
          <!-- END BOTTOM ABOUT BLOCK -->

          <!-- BEGIN BOTTOM CONTACTS -->
          <div class="col-md-3 col-sm-6 pre-footer-col">
            <h2>Like Us</h2>              
              <div class="fb-like" data-href="https://www.facebook.com/pages/Corperlife/137990536376099" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>     
          </div>
          <!-- END BOTTOM CONTACTS -->

          <!-- BEGIN TWITTER BLOCK --> 
          <div class="col-md-3 col-sm-6 pre-footer-col">
              <h2 style="margin:0px;"> Advertise</h2>            
            <a class="twitter-timeline" href="{{url('/advertise')}}" data-chrome="noheader nofooter noscrollbar noborders transparent" style="">
            Click here</a> <span style="color:#F0FDC6;">to post your ad with us.</span>
                  
             <div class="row" style="margin-top:20px;">
             <div class="col-md-12">
            <div class="pre-footer-subscribe-box pre-footer-subscribe-box-vertical">
              <h2>Newsletter</h2>
              <p>Subscribe to our newsletter and stay up to date with the latest news and deals!</p>
                <div class="input-group">
                  {{Form::text('email_sub','',array("placeholder"=>"youremail@mail.com","class"=>"form-control"))}}
                  <span class="input-group-btn">
                    <button class="btn btn-primary" type="button" onclick="subscribe()" id="subscribe_btn" >Subscribe</button>
                  </span>
                </div>
                <span class="error error-sub"></span>
            </div>
             </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 pre-footer-col">           
            <h2 class="margin-bottom-0">Latest Tweets</h2>
            <!-- END TWITTER BLOCK -->         
        </div>
      </div>
    </div>
    </div>
    <!-- END PRE-FOOTER -->

    <!-- BEGIN FOOTER -->
    <div class="footer" style="background-color:#4C5826">
      <div class="container">
        <div class="row">
          <!-- BEGIN COPYRIGHT -->
          <div class="col-md-6 col-sm-6 padding-top-10">
            2014 © Corper Life Shop UI. ALL Rights Reserved. <a href="{{url('/website-rules')}}">Privacy Policy</a> | <a href="{{url('/website-rules')}}">Terms of Service</a>
          </div>
          <!-- END COPYRIGHT -->
          <!-- BEGIN PAYMENTS -->
          <div class="col-md-6 col-sm-6">
            <ul class="social-footer list-unstyled list-inline pull-right">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-skype"></i></a></li>
              <li><a href="#"><i class="fa fa-github"></i></a></li>
              <li><a href="#"><i class="fa fa-youtube"></i></a></li>
              <li><a href="#"><i class="fa fa-dropbox"></i></a></li>
            </ul>  
          </div>
          <!-- END PAYMENTS -->
        </div>
      </div>
    </div>
    <!-- END FOOTER -->