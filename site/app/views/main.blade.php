<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Head BEGIN -->
<head>
  <meta charset="utf-8">
  <title>{{$title}}</title>

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
  {{ HTML::style("assets/fancybox/source/jquery.fancybox.css")}}         
  {{ HTML::style("assets/css/bootstrap.min.css")}}       
  {{ HTML::style("assets/css/components.css")}}       
  {{ HTML::style("assets/css/style.css")}}       
  {{ HTML::style("assets/css/gallery.css")}}       
  {{ HTML::style("assets/css/portfolio.css")}}       
  {{ HTML::style("assets/css/style-responsive.css")}}       
  {{ HTML::style("assets/css/owl.carousel.css")}}       
  {{ HTML::style("assets/css/owl.theme.css")}}       
  
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
                        <li><i class="fa fa-phone"></i><span>+23-965535668787</span></li>
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
            <li><a href="{{url('/')}}" class="close-menu"><i class="fa fa-remove"></i></a></li>
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
    {{$main}}
    @include('footer_common')
    <div class="overlay">
    </div>
    <!-- Load javascripts at bottom, this will reduce page load time -->
    <!-- BEGIN CORE PLUGINS (REQUIRED FOR ALL PAGES) -->
    <!--[if lt IE 9]>
    <script src=".assets/.assets/assets/global/plugins/respond.min.js"></script>
    <![endif]-->
    {{ HTML::script("assets/js/jquery.min.js")}}
    {{ HTML::script("assets/js/jquery-migrate.min.js")}}
    {{ HTML::script("assets/fancybox/source/jquery.fancybox.pack.js")}}    
    {{ HTML::script("assets/js/bootstrap.min.js")}}      
    {{ HTML::script("assets/js/back-to-top.js")}}
    {{ HTML::script("assets/js/owl.carousel.min.js")}}
    {{ HTML::script("assets/js/owl.carousel.js")}}
    <!-- END CORE PLUGINS -->

    {{ HTML::script("assets/js/layout.js")}}
    <script type="text/javascript">
        jQuery(document).ready(function() {
            Layout.init(); 
        });
         $(document).ready(function() {

          $("#owl-example").owlCarousel({
            'items':3
          });
 
            });
    </script>
    <!-- END PAGE LEVEL JAVASCRIPTS -->
  </body>
<!-- END BODY -->
</html>