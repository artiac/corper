<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Head BEGIN -->
<head>
  <meta charset="utf-8">
  <title>Corper Life</title>

  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <meta content="Metronic Shop UI description" name="description">
  <meta content="Metronic Shop UI keywords" name="keywords">
  <meta content="keenthemes" name="author">

  <meta property="og:site_name" content="-CUSTOMER VALUE-">
  <meta property="og:title" content="-CUSTOMER VALUE-">
  <meta property="og:description" content="-CUSTOMER VALUE-">
  <meta property="og:type" content="website">
  <meta property="og:image" content="-CUSTOMER VALUE-"><!-- link to image for socio -->
  <meta property="og:url" content="-CUSTOMER VALUE-">

  <link rel="shortcut icon" href="favicon.ico">

  <!-- Fonts START -->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|PT+Sans+Narrow|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css">
  <!-- Fonts END -->

  <!-- Global styles START -->
  {{ HTML::style("assets/plugins/font-awesome/css/font-awesome.min.css")}}       
  {{ HTML::style("assets/css/bootstrap.min.css")}}       
  {{ HTML::style("assets/css/components.css")}}       
  {{ HTML::style("assets/css/style.css")}}       
  {{ HTML::style("assets/css/style-responsive.css")}}       
  
  <!-- Theme styles END -->
</head>
<!-- Head END -->

<!-- Body BEGIN -->
<body class="corporate">


    <!-- BEGIN TOP BAR -->
    <div class="pre-header">
        <div class="container">
            <div class="row">
                <!-- BEGIN TOP BAR LEFT PART -->
                <div class="col-md-6 col-sm-6 additional-shop-info">
                    <ul class="list-unstyled list-inline">
                        <li><i class="fa fa-phone"></i><span>+23-123456789</span></li>
                        <li><i class="fa fa-envelope-o"></i><span>info@corperlife.com</span></li>
                    </ul>
                </div>
                <!-- END TOP BAR LEFT PART -->
                <!-- BEGIN TOP BAR MENU -->
                <div class="col-md-6 col-sm-6 additional-nav">
                    <ul class="list-unstyled list-inline pull-right">
                        <li><a href="{{url("/login")}}">Log In</a></li>
                        <li><a href="{{url("/cvbuilder")}}">CV Builder</a></li>
                    </ul>
                </div>
                <!-- END TOP BAR MENU -->
            </div>
        </div>        
    </div>
    <!-- END TOP BAR -->
    <!-- BEGIN HEADER -->
    <div class="header">
      <div class="container">
                  
        <a class="site-logo" href="{{url('/')}}">{{HTML::image('assets/img/logos/Final-Logo1.png','logo')}}</a>

        <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>

        <!-- BEGIN NAVIGATION -->
        <div class="header-navigation pull-right font-transform-inherit">
          <ul>
            <li><a href="{{url('/')}}">Home</a></li>                     
            <li><a href="{{url('/ourstory')}}">Our Story</a></li>   
            <li><a href="{{url('/faq')}}">FAQ</a></li>   
            <!-- BEGIN TOP SEARCH -->
            <li class="menu-search">
              <span class="sep"></span>
              <i class="fa fa-search search-btn"></i>
              <div class="search-box">
                {{Form::open(array("url"=>"/user/1", "method" => "POST"))}}
                  <div class="input-group">
                    <input type="text" placeholder="Search" class="form-control">
                    <span class="input-group-btn">
                      <button class="btn btn-primary" type="submit">Search</button>
                    </span>
                  </div>
                {{Form::close()}}
              </div> 
            </li>
            <!-- END TOP SEARCH -->
          </ul>
        </div>
        <!-- END NAVIGATION -->
      </div>
    </div>
    <!-- Header END -->

    <!-- BEGIN DIV -->
    <div class="container-fluid" style="background-image:url(assets/img/bgimg.jpg); margin-top:0px;">
      <div class="container">
       <div class="row">
        <div class="col-md-4"></div>
       
        <div class="col-md-4">
          <div style="background:rgba(0,0,0,0.8); padding:20px; margin:30px 0;">
            @if(Session::has('fail'))
              <span style="background:#f00; color:white">{{Session::get('fail')}}</span>
            @endif
              {{Form::open(array("url"=>"/login", "method" => "POST","class"=>"login-form"))}}
              <h3 class="form-title" style="color:#fff;">Login</h3>
              <div class="alert alert-danger display-hide">
                <button class="close" data-close="alert"></button>
                <span>
                Enter any username and password. </span>
              </div>
              <div class="form-group">
                <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                <label class="control-label visible-ie8 visible-ie9">Username</label>
                {{Form::text('username','',array("class"=>"form-control form-control-solid placeholder-no-fix", "autocomplete"=>"off","placeholder"=>"Username","id"=>"Username"))}}
                <span>{{$errors->first('username')}}</span>
                <!-- <input class=" type="text" autocomplete="off" placeholder="Username" name="username"/> -->
              </div>
              <div class="form-group">
                <label class="control-label visible-ie8 visible-ie9">Password</label>
                {{Form::password('password',array("class"=>"form-control form-control-solid placeholder-no-fix","autocomplete"=>"off","placeholder"=>"Password","id"=>"password"))}}
                <span>{{$errors->first('password')}}</span>

                <!--<input class="" type="password"   name="password"/>-->
              </div>
              <div class="form-actions">
                * <a href="javascript:;" id="forget-password" class="forget-password" style="color:#eee;">Forgot Password?</a><br>                                               
              </div>
                            <div class="row"> 
              <div class="col-md-8">         
              <div class="login-options" style="margin-top:8px;">               
                  {{HTML::image('assets/img/fb3.png','Facebook')}}
              </div>
              </div>
              <div class="col-md-4" style="margin-top:7px;">
                {{Form::submit('Login',array("class"=>"btn btn-success uppercase","style"=>"background-color:#ABC351; float:right"))}}    
              </div>
              </div>
              <div class=""  style="margin-top:18px; text-align:center">
                <p>
                  <a href="{{url('/')}}" id="register-btn"  style="color:#fff"><h4>Not a User? Sign Up now!!</h4></a>
                </p>
              </div>
              {{Form::close()}}  
            
            </div>
          </div>
          <div class="col-md-4"></div>
        </div>
      </div>
    </div>    
     <!-- END DIV -->

    <!-- BEGIN PRE-FOOTER -->
    <div class="pre-footer" style="background-color:#839742;">
      <div class="container">
        <div class="row">
          <!-- BEGIN BOTTOM ABOUT BLOCK -->
          <div class="col-md-4 col-sm-6 pre-footer-col">
            <h2>About us</h2>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam sit nonummy nibh euismod tincidunt ut laoreet dolore magna aliquarm erat sit volutpat.</p>
            <div class="row">
              <div class="col-md-12">
                <div class="photo-stream">
                  <h2>Photos Stream</h2>
                  <ul class="list-unstyled">
                    {{HTML::image('assets/img/people/img5-small.jpg','people')}}
                    {{HTML::image('assets/img/works/img1.jpg','people')}}
                    {{HTML::image('assets/img/people/img4-large.jpg','people')}}
                    {{HTML::image('assets/img/works/img6.jpg','people')}}
                    {{HTML::image('assets/img/works/img3.jpg','people')}}
                  </ul>                    
                </div>
              </div>
            </div>
          </div>
              <!-- END BOTTOM ABOUT BLOCK -->
          <!-- BEGIN BOTTOM CONTACTS -->
          <div class="col-md-4 col-sm-6 pre-footer-col">
            <h2>Our Contacts</h2>
            <address class="margin-bottom-40">
              35, Lorem Lis Street, Park Ave<br>
              Lagos, Nigeria<br>
              Phone: 300 323 3456<br>
              Fax: 300 323 1456<br>
              Email: <a href="mailto:info@corperlife.com">info@corperlife.com</a><br>
              Skype: <a href="skype:corperlife">corperlife</a>
            </address>            
          </div>
          <!-- END BOTTOM CONTACTS -->

          <!-- BEGIN TWITTER BLOCK --> 
          <div class="col-md-4 col-sm-6 pre-footer-col">           
            <div class="pre-footer-subscribe-box pre-footer-subscribe-box-vertical">
              <h2> Advertise</h2><br>             
            <a class="twitter-timeline" href="{{url('/advertise')}}" data-chrome="noheader nofooter noscrollbar noborders transparent" style="">
            Click here</a> to post your ad with us.
          </div>
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
          2014 © Corper Life Shop UI. ALL Rights Reserved. <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a>
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

    <!-- Load javascripts at bottom, this will reduce page load time -->
    <!-- BEGIN CORE PLUGINS (REQUIRED FOR ALL PAGES) -->
    <!--[if lt IE 9]>
    <script src=".assets/.assets/assets/global/plugins/respond.min.js"></script>
    <![endif]-->
    {{ HTML::script("assets/js/jquery.min.js")}}
    {{ HTML::script("assets/js/jquery-migrate.min.js")}}
    {{ HTML::script("assets/js/bootstrap.min.js")}}      
    {{ HTML::script("assets/js/back-to-top.js")}}
    <!-- END CORE PLUGINS -->

    {{ HTML::script("assets/js/layout.js")}}
    <script type="text/javascript">
        jQuery(document).ready(function() {
            Layout.init();
        });
    </script>
    <!-- END PAGE LEVEL JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>