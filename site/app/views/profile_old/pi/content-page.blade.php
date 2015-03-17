<div class="page-container">


  <!-- BEGIN PAGE HEAD -->
  <div class="page-head">
    <div class="container">
      <!-- BEGIN PAGE TITLE -->
      <div class="page-title">
        <h1>Content Page</h1>
      </div>
      <!-- END PAGE TITLE -->
    </div>
  </div>
  <!-- END PAGE HEAD -->


  <!-- BEGIN PAGE CONTENT -->
  <div class="page-content">
    <div class="container">

      <!-- BEGIN PAGE BREADCRUMB -->
    <ul class="page-breadcrumb breadcrumb">       
            <li>
          {{ HTML::link('/profile/content-page','Home') }}
          <i class="fa fa-circle"></i>
        </li>       
        <li class="active">
         Forum
        </li> 
         <li class="active">
         Content
        </li>          
      </ul>
      <!-- END PAGE BREADCRUMB -->

      <!-- BEGIN PAGE CONTENT INNER -->
      <div class="row">
         <div class="col-md-4">
          <!-- BEGIN SAMPLE FORM PORTLET-->
          <div class="portlet light">
            <div class="portlet-title">
              <div class="caption">
                <i class="fa fa-cogs font-green-sharp"></i>
                <span class="caption-subject font-green-sharp bold uppercase"></span>
              </div>
            </div>
            <div class="portlet-body">
              <a href="#" style="position: relative; width: 100%; display: block; padding: 8px 13px; color: #444; font-family:sans-serif;">Topics</a><br>
              <a href="#" style="position: relative; width: 100%; display: block; padding: 8px 13px; color: #444; font-family:sans-serif;">Topics</a><br>
              <a href="#" style="position: relative; width: 100%; display: block; padding: 8px 13px; color: #444; font-family:sans-serif;">Topics</a><br>
              <a href="#" style="position: relative; width: 100%; display: block; padding: 8px 13px; color: #444; font-family:sans-serif;">Topics</a><br>
              <a href="#" style="position: relative; width: 100%; display: block; padding: 8px 13px; color: #444; font-family:sans-serif;">Topics</a>
            </div>
          </div>

        </div>
        <div class="col-md-8">
          <!-- BEGIN SAMPLE FORM PORTLET-->
          <div class="portlet light">
            <div class="portlet-title">
              <div class="caption">
                <i class="fa fa-cogs font-green-sharp"></i>
                <span class="caption-subject font-green-sharp bold uppercase">Forum</span>
                <!-- BEGIN SAMPLE TABLE PORTLET-->
              </div>
            </div> 
             <div class="portlet-body">
            <h4 style="padding: 3px 0 15px 0; margin: 0 0 15px 0; font-family: 'Source Sans Pro', sans-serif; font-weight: 600;
                 border-bottom: 1px solid #cdcdcd; font-size: 1.4em;">Discussion</h4> 
                 @foreach($topics as $topic)
                 <p>{{$topic->content}}</p>
                 @endforeach
            </div> 
          </div>
        </div>       
      </div>
      <!-- END PAGE CONTENT INNER -->
    </div>
  </div>
  <!-- END PAGE CONTENT -->
</div>