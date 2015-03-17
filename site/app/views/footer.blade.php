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
              Email: <a href="mailto:info@metronic.com">info@metronic.com</a><br>
              Skype: <a href="skype:metronic">metronic</a>
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
	// Layoutpro.init(); // init current layout
	// Layout.init();
	// Demo.init(); // init demo features\
	// Profile.init(); // init page demo

});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>