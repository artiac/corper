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
<meta content="{{$description}}" name="description">
<meta content="{{$keywords}}" name="keywords">
<meta content="corperlife.com" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css">
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN THEME STYLES -->
  {{ HTML::style("assets/plugins/font-awesome/css/font-awesome.min.css")}}       
  {{ HTML::style("assets/css/bootstrap.css")}}       
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
              <li class="dropdown dropdown-user dropdown-dark">
                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                  {{HTML::image('assets/img/avatar1.jpg','logo',array("class"=>"img-circle"))}}
                <span class="username">{{Auth::user()->username}}</span>
                </a>
              </li>
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
</div>
<!-- END HEADER -->
{{$main}}

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
    // initiate layout and plugins
  Metronic.init(); // init metronic core components
  Layout.init();
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>