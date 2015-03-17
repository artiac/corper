@include('profile.adv')
<div class="page-content" style="padding-top:0px; background: #fff;">
  <!-- BEGIN PAGE CONTENT INNER -->
  <div class="row">
    <div class="col-md-8" style="padding-right:0px;">
      <!-- BEGIN PORTLET-->
      <div class="portlet light">             
         <div class="portlet-body">            
            <div class="row">
              <div class="col-md-6">
                 <h4 style="padding: 3px 0 15px 0; margin: 0 0 15px 0; font-family: 'Source Sans Pro', sans-serif; font-weight: 600;
                    font-size: 1.4em;">{{$topic->title}}
                <br>
                Category: {{$topic->category_name}}
                </h4>
              </div>
              <div class="col-md-6" style="float: right; padding: 0px 0px 0px 40px;">
                <a href="{{url("/cvbuilder/cv/".$topic->user_id)}}" class="pull-left" style="padding-right: 10px;">{{HTML::image('assets/img/avatar4.jpg','img')}}</a>
                <div class="media-body">
                  <a href="{{url("/forum/forum-page/".$topic->id)}}"><h4 class="media-heading"> {{$topic->title}}</h4></a> 
                  <span>Posted by <a href="#">{{$topic->username}}</a></span>
                </div>
              </div>
            </div>            
            <p style="border:1px solid #dbdbdb; padding:15px;">{{$topic->content}}</p>
            <div class="portlet-body form">
              {{Form::open(array("url"=>"/forum/forum-page/savereply/".$topic->id,"method" => "POST","role"=>"form"))}}                    
                <div class="form-group">
                  <h3><b>Reply</b></h3>
                  @if(Session::has('success'))
                    <div class="alert alert-success">
                <strong>Success!</strong> The page has been added.
              </div>
                  @endif

                    {{Form::textarea('reply','',array("class"=>"form-control", "placeholder"=>"Description"))}}            
                </div>
                <div>
                <button type="submit" class="btn green">Submit</button>
                </div>
              {{Form::close()}}
            </div>  
            <div style="border:1px solid #dbdbdb; padding:15px; margin-top:10px;">  
            @foreach($replies as $reply)              
                <div class="row" style="margin-top:10px;">  
                 <div class="col-md-2" style="padding-right:0px; max-width: 60px;">{{HTML::image('assets/img/avatar4.jpg','img')}}</div>    
                 <div class="col-md-10"><p style="margin-bottom:5px;"><strong>{{$reply->username}}</strong> {{$reply->reply}}</p>{{ date("d-M-y H:i:s", strtotime($reply->created_at)) }}<hr> </div>     

                </div>
              
             @endforeach
        </div>  
      </div>
      </div>
      <!-- END PORTLET-->
    </div>  
   @include('profile.pi.category-tab')   
  </div>
  <!-- END PAGE CONTENT INNER -->
</div>