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
            <h2>Contact Us</h2>
            <address class="margin-bottom-40">
              Dolphine Estate<br>
              111A Ilupeju Street<br>
              Ikoyi<br>
              Lagos, Nigeria<br>
              Email: <a href="mailto:info@corperlife.com">info@corperlife.com</a><br>
            </address>            
          </div>
          <!-- END BOTTOM CONTACTS -->

          <!-- BEGIN TWITTER BLOCK --> 
          <div class="col-md-3 col-sm-6 pre-footer-col">
              <h2 style="margin:0px;"> Advertise</h2>            
            <a class="twitter-timeline" href="{{url('/advertise')}}" data-chrome="noheader nofooter noscrollbar noborders transparent" style="">
            Click here</a> to post your ad with us.
                  
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
            <?php
              include(app_path().'/tweet/TweetPHP.php');
              $TweetPHP = new TweetPHP(array(
                'consumer_key'              => 'Aid8wJIxT9XoXDHbz3sUu7Gra',
                'consumer_secret'           => 'DACkmTZMi5g2WjsCNidFDdvnF1JFAhetJSbB2UHy46yNTAqk8z',
                'access_token'              => '1951411668-8hmpZoQGH93aiWUBGx7CjKVcLuUU02bolljHg0z',
                'access_token_secret'       => 'M8Uzul9imCGVFiQheF0DfKRHcXdkwlUicsKUTwjhQu4e8',
                'twitter_screen_name'       => 'uzoma_diamond'
              ));
              echo $TweetPHP->get_tweet_list();
            ?>
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