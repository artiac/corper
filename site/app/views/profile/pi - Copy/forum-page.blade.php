<div class="page-container">


  <!-- BEGIN PAGE HEAD -->
  <div class="page-head">
    <div class="container">
      <!-- BEGIN PAGE TITLE -->
      <div class="page-title">
        <h1>Forum Page</h1>
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
          {{ HTML::link('/profile/forum-page','Home') }}
          <i class="fa fa-circle"></i>
        </li>       
        <li class="active">
         Forum
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
              Showing: <a href="#" style="margin-left:10px;">ALL</a> <a href="#" style="margin-left:10px;">Open</a> <a href="#" style="margin-left:10px;">Solved</a>
               <?php $count = 0; ?>
                @foreach($topics as $topic)
                  <div class="row" style="background:#EEE; margin:10px 0; padding:10px 0">
                    <div class="col-md-9">
                      <div class="media">
                        <a href="#" class="pull-left"><img class="user-pic" src="assets/img/avatar4.jpg"></a>
                        <div class="media-body">
                         <a href="{{url("/forum/content-page/".$topic->id)}}" style="color: #444; text-decoration: none;"><h4 class="media-heading">[{{$topic->category_name}}] {{$topic->title}}</h4></a> 
                          <span>Posted by <a href="#">{{$topic->username}}</a></span>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <a href="#" class="comment-count" style="background: #cdcdcd; min-width: 25px; float: right; padding: 5px; margin: 7px 0 0 0;
                      text-align: center; color: white;">0</a>
                    </div>
                  </div>
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