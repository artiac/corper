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
<meta content="" name="author"/>
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
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-menu-fixed" class to set the mega menu fixed  -->
<!-- DOC: Apply "page-header-top-fixed" class to set the top menu fixed  -->
<body>
  
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
<div class="page-header">
  <!-- BEGIN HEADER TOP -->
  <div class="page-header-top">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12" style="min-height:60px; ">
          <!-- BEGIN LOGO -->           
            <div class="page-logo">
              <a href="#">{{HTML::image('assets/img/logos/Final-Logo1.png','logo')}}</a>
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
</div>
<!-- END HEADER -->
<!-- BEGIN HEADER -->
<div class="pre-header">
  <div class="container">
      <div class="row">
          <!-- BEGIN TOP BAR LEFT PART -->
          <div class="col-md-12" style="text-align:center; height: 80px">
            <h2>ADVERTISEMENT SPACE</h2>
          </div>
          <!-- END TOP BAR LEFT PART -->
      </div>
  </div>        
</div>
<!-- END TOP BAR -->

{{$main}}
@include('footer_common')
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