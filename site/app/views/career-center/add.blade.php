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
            <li><a href="#">Our Story</a></li>
             <li><a href="#">FAQ</a></li>    
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
    

   <div class="container-fluide" style="display: block; background:#444d58;">
    <div class="container">
    <h2 style="color:#fff; padding-top: 10px;">Advertise with us</h2>
    </div>
  </div>

    <div class="container" style="margin-top:50px;">
      <div class="col-md-10">
      <p>Advertising on jobberman.com will help you gain exposure to a large audience of viewers and jobseekers.
       take advantage of Jobberman's High traffic and give your brand maximum awareness and increased conversion through any of 
       the following channels</p>
      <ul style="list-style: none;">
        <li style="padding-top: 4px; padding-bottom: 4px; list-style-image:url(assets/img/icon_check.png);">Banner Ads on our internet properties (website, blog and mobile website)</li>
        <li style="padding-top: 4px; padding-bottom: 4px; list-style-image:url(assets/img/icon_check.png);">Banner Ads or text mentions in Email Job Alerts</li>
        <li style="padding-top: 4px; padding-bottom: 4px; list-style-image:url(assets/img/icon_check.png);">Social Media Engagement</li>
        <li style="padding-top: 4px; padding-bottom: 4px; list-style-image:url(assets/img/icon_check.png);">Banner Ads in Weekly Newsletter</li>
        <li style="padding-top: 4px; padding-bottom: 4px; list-style-image:url(assets/img/icon_check.png);">Lead Generation Campaigns</li>        
      </ul>
        <div style="border:solid 1px; min-height: 300px; margin-top:20px;"></div>
        <div style="border:solid 1px; min-height: 300px; margin-top:20px;"></div>
         <p style="margin:40px 0px;">If you would like more information of you would like to book one of our available ad placements, Please use the form below and we will get back to you as soon as possible. We also can offer customized advertising packages which offer even more exposure, to learn more simply fill and submit the form below.</p>
          <div class="col-md-8">
           <div class="portlet-body form">
                {{Form::open(array("url"=>"/advertise/saveadd","method" => "POST","role"=>"form"))}}                    
                <div> 
                   <div class="form-group">
                      <label>Your name:</label> 
                      {{Form::text('name','',array("class"=>"form-control", "placeholder"=>"Your name"))}}
                       <span>{{$errors->first('name')}}</span>
                    </div>  
                    <div class="form-group">
                      <label>Your e-mail:</label> 
                      {{Form::text('email','',array("class"=>"form-control", "placeholder"=>"Your email"))}}
                       <span>{{$errors->first('email')}}</span>
                    </div> 

                   <div class="form-group">
                    <label>Type of Enquiry:</label>
                     {{Form::select('enquiry',array("0"=>"Select","1"=>"General Enquiry","2"=>"Advertising on Site",
                     "3"=>"Technical Support","4"=>"Partnership","5"=>"Suggestions","6"=>"Complaints"),'',array("class"=>"form-control"))}}   
                       <span>{{$errors->first('enquiry')}}</span>
                  </div>
                    <div class="form-group">
                      <label>Contact Phone:</label> 
                      {{Form::text('phone','',array("class"=>"form-control", "placeholder"=>"Phone"))}}
                    </div>                   
                   <div class="form-group">
                    {{ Form::label('', 'Message:') }}
                      {{Form::textarea('message','',array("class"=>"form-control", "placeholder"=>"Description"))}}            
                   </div>
                </div>
                 <div style="margin:20px;">
                  <button type="submit" class="btn green btn-block ">Submit</button>
                </div>
                {{Form::close()}}
            </div>
            </div>
    </div>
    <div class="col-md-2" style="border:solid 1px; min-height: 200px;"></div>
      </div>


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
                  
                    
               <!-- <li><a href="#"><img alt="" src="assets/img/people/img5-small.jpg"></a></li>
                <li><a href="#"><img alt="" src="assets/img/works/img1.jpg"></a></li>
                <li><a href="#"><img alt="" src="assets/img/people/img4-large.jpg"></a></li>
                <li><a href="#"><img alt="" src="assets/img/works/img6.jpg"></a></li>
                <li><a href="#"><img alt="" src="assets/img/works/img3.jpg"></a></li>-->
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