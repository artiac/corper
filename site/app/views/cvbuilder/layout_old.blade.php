<!DOCTYPE html>
<!-- 
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>{{$title}}</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="description"/>
<meta content="corperlife.com" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css">
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN THEME STYLES -->
  {{ HTML::style("assets/plugins/font-awesome/css/font-awesome.min.css")}}       
  {{ HTML::style("assets/css/bootstrap.min.css")}}       
  {{ HTML::style("assets/css/components.css")}}       
  {{ HTML::style("assets/css/style.css")}}       
  {{ HTML::style("assets/css/style-responsive.css")}}  
  {{ HTML::style("assets/css/profile.css")}}       
  {{ HTML::style("assets/css/tasks.css")}}       
  {{ HTML::style("assets/css/cropper.min.css")}}             
  {{ HTML::style("assets/css/crop-avatar.css")}}             
  {{ HTML::style("assets/css/components-rounded.css")}}             
  {{ HTML::style("assets/css/layout.css")}}       
  {{ HTML::style("assets/css/themes/default.css")}}       
  {{ HTML::style("assets/css/custom.css")}}       
  {{ HTML::style("assets/css/main.css")}}       
  {{ HTML::style("assets/css/bootstrap-wysihtml5.css")}}       

<!-- END THEME STYLES -->
<link rel="shortcut icon" href="{{url('/assets/img/favi.png')}}">
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-menu-fixed" class to set the mega menu fixed  -->
<!-- DOC: Apply "page-header-top-fixed" class to set the top menu fixed  -->
<body>
<!-- BEGIN HEADER -->
<div class="pre-header">
  <div class="container">
      <div class="row">
          <!-- BEGIN TOP BAR LEFT PART -->
          <div class="col-md-6 col-sm-6 additional-shop-info">
              <ul class="list-unstyled list-inline">
                  <li><i class="fa fa-phone"></i><span>9634628573</span></li>
                  <li><i class="fa fa-envelope-o"></i><span>info@corperlife.com</span></li>
              </ul>
          </div>
          <!-- END TOP BAR LEFT PART -->
      </div>
  </div>        
</div>
<!-- END TOP BAR -->

<!-- BEGIN HEADER -->
<div class="page-header">
  <!-- BEGIN HEADER TOP -->
  <div class="page-header-top">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12" style="min-height:56px;">
          <!-- BEGIN LOGO -->           
            <div class="page-logo">
              <a href="{{url('/')}}">{{HTML::image('assets/img/logos/Final-Logo1.png','logo')}}</a>
            </div>
          <!-- END LOGO -->
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12 pull-right" style="min-height:56px;">
          <!-- BEGIN TOP NAVIGATION MENU -->
          <div class="top-menu">
            <ul class="nav navbar-nav pull-right">
              <!-- BEGIN USER LOGIN DROPDOWN -->
              @if(Auth::check())
                <li class="dropdown dropdown-user dropdown-dark">
                  <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                    {{HTML::image('assets/img/avatar1.jpg','logo',array("class"=>"img-circle"))}}
                  <span class="username">{{Auth::user()->username}}</span>
                  </a>
                </li>
              @endif
              <!-- END USER LOGIN DROPDOWN -->
            </ul>
           <a href="javascript:;" class="menu-toggler"></a>
          </div>
          <!-- END TOP NAVIGATION MENU -->
        </div>
      </div>
    </div>
  </div>
  <!-- END HEADER TOP -->
  @if(Auth::check())
  <!-- BEGIN HEADER MENU -->
  <div class="page-header-menu">
    <div class="container">
      <!-- BEGIN HEADER SEARCH BOX -->
      <form class="search-form" action="extra_search.html" method="GET">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search" name="query">
          <span class="input-group-btn">
          <a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>
          </span>
        </div>
      </form>
      <!-- END HEADER SEARCH BOX -->
      <!-- BEGIN MEGA MENU -->
      <!-- DOC: Apply "hor-menu-light" class after the "hor-menu" class below to have a horizontal menu with white background -->
      <!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the dropdown opening on mouse hover -->
          <div class="hor-menu ">
        <ul class="nav navbar-nav">
          <li>
            {{link_to('/#','Dashboard')}}
          </li>
          <li @if($top_active == 2)class="active"@endif;>
            {{link_to('/profile','Personal Information')}}
          </li>
          <li @if($top_active == 3)class="active"@endif;>
            {{link_to('/checklist-guide','Checklist &amp; Guide')}}
          </li>
          <li @if($top_active == 4)class="active"@endif;>         
            {{link_to('/forum','Forum')}}
          </li>
          <li>
          <li @if($top_active == 5)class="active"@endif;>         
            {{link_to('/knowledge','Knowledge Bank')}}
          </li>
          <li>
          <li @if($top_active == 6)class="active"@endif;>         
            {{link_to('/cv-page','CV')}}
          </li>        
          <li>
            {{link_to('/logout','Logout')}}
          </li>
        </ul>
      </div>
      <!-- END MEGA MENU -->
    </div>
  </div>
  <!-- END HEADER MENU -->
  @endif
</div>
<!-- END HEADER -->
{{$main}}
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
              California, US<br>
              Phone: 300 323 3456<br>
              Fax: 300 323 1456<br>
              Email: <a href="#">info@corperlife.com</a><br>
              Skype: <a href="#">corperlife</a>
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
<div class="scroll-to-top">
  <i class="icon-arrow-up"></i>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script type="text/javascript">
  var base_url = '{{URL::to('/')}}';
</script>
    {{ HTML::script("assets/js/jquery.min.js")}}
    {{ HTML::script("assets/js/jquery-migrate.min.js")}}
    {{ HTML::script("assets/js/bootstrap.min.js")}}   
    {{ HTML::script("assets/js/jquery-ui.js")}}   
    {{ HTML::script("assets/js/back-to-top.js")}}
    {{ HTML::script("assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js")}}
    {{ HTML::script("assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js")}}
    {{ HTML::script("assets/js/jquery.cokie.min.js")}}
    {{ HTML::script("assets/js/metronic.js")}}
    {{ HTML::script("assets/js/layout.js")}}
    {{ HTML::script("assets/js/layoutpro.js")}}
    {{ HTML::script("assets/js/demo.js")}}
    {{ HTML::script("assets/js/cropper.min.js")}}
    {{ HTML::script("assets/js/crop-avatar.js")}}
    {{ HTML::script("assets/js/profile.js")}}
    {{ HTML::script("assets/js/wysihtml5-0.3.0.js")}}
    {{ HTML::script("assets/js/bootstrap-wysihtml5.js")}}
    {{ HTML::script("assets/js/custom.js")}}
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {     
  $("#sortable1").sortable();
  $("#sortable1").disableSelection();
    $("#work_ex_panel").sortable();
  $("#work_ex_panel").disableSelection();
    $("#education_panel").sortable();
  $("#education_panel").disableSelection();
   $("#nysc_panel").sortable();
  $("#nysc_panel").disableSelection();
    // initiate layout and plugins
  Metronic.init(); // init metronic core components
  Layout.init();
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>