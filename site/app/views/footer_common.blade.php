    <!-- BEGIN PRE-FOOTER -->
    <div class="pre-footer">
      <div style="background-image:url('http://www.transparenttextures.com/patterns/az-subtle.png');">
        <div class="container">
          <div class="row">
            <!-- BEGIN BOTTOM ABOUT BLOCK -->
            <div class="col-md-3 col-sm-6 pre-footer-col">
              <h2>About Us</h2>
              <p style="text-align:justify">Corperlife<sup>TM</sup> is run by a small group of ex-corpers who wish to help others maximise their post grad years. We provide Free tools and resources to help Nigerian youths through the NYSC program and into starting their careers.</p>
            </div>
        <!-- END BOTTOM ABOUT BLOCK -->

        <!-- BEGIN BOTTOM CONTACTS -->
        <div class="col-md-3 col-sm-6 pre-footer-col like-us">
          <h2>Like Us</h2>              
          <div class="fb-like" data-href="https://www.facebook.com/pages/Corperlife/137990536376099" data-layout="standard" data-action="like" data-show-faces="true" data-share="true" data-width="250px"></div> 
        </div>
        <!-- END BOTTOM CONTACTS -->

        <!-- BEGIN TWITTER BLOCK --> 
        <div class="col-md-3 col-sm-6 pre-footer-col">
          <h2 >Advertise</h2>            
          <p><a class="twitter-timeline" href="{{url('/advertise')}}" data-chrome="noheader nofooter noscrollbar noborders transparent" style="">Click here</a> to post your ad with us.</p>

            <div class="row" style="margin-top:20px;">
             <div class="col-md-12">
              <div class="pre-footer-subscribe-box pre-footer-subscribe-box-vertical">
                <h2>Newsletter</h2>
                <p>Subscribe to our newsletter and stay up to date with the latest news and deals!</p>
                <div class="input-group">
                  {{Form::text('email_sub','',array("placeholder"=>"youremail@mail.com","class"=>"form-control","style"=>"border:1px solid #CCC"))}}
                  <span class="input-group-btn">
                    <button class="btn green" type="button" onclick="subscribe()" id="subscribe_btn" >Subscribe</button>
                  </span>
                </div>
                <span class="error error-sub"></span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 pre-footer-col">           
          <h2>Latest Tweets</h2>
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
</div>
<!-- END PRE-FOOTER -->

<!-- BEGIN FOOTER -->
<div class="footer">
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