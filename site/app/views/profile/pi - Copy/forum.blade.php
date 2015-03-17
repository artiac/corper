<div class="page-container">


  <!-- BEGIN PAGE HEAD -->
  <div class="page-head">
    <div class="container">
      <!-- BEGIN PAGE TITLE -->
      <div class="page-title">
        <h1>Forum</h1>
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
          {{ HTML::link('/profile/forum','Home') }}
          <i class="fa fa-circle"></i>
        </li>       
        <li class="active">
         Forum
        </li>         
      </ul>
      <!-- END PAGE BREADCRUMB -->

      <!-- BEGIN PAGE CONTENT INNER -->
      <div class="row">
        <div class="col-md-8">
          <!-- BEGIN SAMPLE FORM PORTLET-->
          <div class="portlet light">
            <div class="portlet-title">
              <div class="caption">
                <i class="fa fa-cogs font-green-sharp"></i>
                <span class="caption-subject font-green-sharp bold uppercase">Forum tab</span>
                <!-- BEGIN SAMPLE TABLE PORTLET-->
              </div>
            </div> 
             <div class="portlet-body">
                <?php $count = 0; ?>
                @foreach($topics as $topic)
                  <div class="row" style="background:#EEE; margin:10px 0; padding:10px 0">
                    <div class="col-md-9">
                      <div class="media" style="">
                        <a href="{{url("/cvbuilder/cv/".$topic->user_id)}}" class="pull-left"><img class="user-pic" src="assets/img/avatar4.jpg"></a>
                        <div class="media-body">
                         <a href="{{url("/forum/forum-page/".$topic->id)}}"><h4 class="media-heading">[{{$topic->category_name}}] {{$topic->title}}</h4></a> 
                          <span>Posted by <a href="#">{{$topic->username}}</a></span>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">{{ date("d-M-y H:i:s", strtotime($topic->created_at)) }}</div>
                  </div>
                @endforeach  
            </div> 
          </div>
        </div>
        <div class="col-md-4">
          <!-- BEGIN SAMPLE FORM PORTLET-->
          <div class="portlet light">
            <div class="portlet-title">
              <div class="caption">
                <i class="fa fa-cogs font-green-sharp"></i>
                <span class="caption-subject font-green-sharp bold uppercase">Start Discussion</span>
              </div>
            </div>
            <div class="portlet-body form">
                {{Form::open(array("url"=>"/forum/savetopic","method" => "POST","role"=>"form"))}}                    
                <div>                                   
                   <div class="form-group">
                    {{ Form::label('', 'Select Catagory') }}                         
                      {{Form::select('category_id',$categories,'',array("class"=>"form-control"))}}
                      <span>{{$errors->first('category')}}</span>
                   </div> 
                    <div class="form-group">
                      <label>Forum Title</label> 
                      {{Form::text('title','',array("class"=>"form-control", "placeholder"=>"Forum Title"))}}
                        <span>{{$errors->first('title')}}</span>
                    </div>                   
                   <div class="form-group">
                    {{ Form::label('', 'Topic') }}
                      {{Form::textarea('content','',array("class"=>"form-control", "placeholder"=>"Description"))}}            
                   </div>
                </div>
                 <div>
                  <button type="submit" class="btn green btn-block ">Submit</button>
                </div>
                {{Form::close()}}
            </div>
          </div>

        </div>
      </div>
      <!-- END PAGE CONTENT INNER -->
    </div>
  </div>
  <!-- END PAGE CONTENT -->
</div>