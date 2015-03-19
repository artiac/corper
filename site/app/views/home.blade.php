 <div class="container-fluid" style="background-image:url(assets/img/bgimg.jpg); min-height:400px; margin-top:-25px;">
    <div class="container">
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
          <div class="col-md-4">
            <div style="background:rgba(0,0,0,0.7); padding:20px; margin:55px 0 30px 0;">
              @if(Session::has('fail'))
               <span style="background:#f00; color:white">{{Session::get('fail')}}</span>
              @endif
              {{Form::open(array("url"=>"/signup", "method" => "POST","class"=>"login-form"))}}
              <h3 class="form-title" style="color:#fff;">Sign Up</h3>
              <div class="alert alert-danger display-hide">
                <button class="close" data-close="alert"></button>
                <span>
                Enter any username and password. </span>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Firstname</label>
                    {{Form::text('firstname','',array("class"=>"form-control form-control-solid placeholder-no-fix", "autocomplete"=>"off","placeholder"=>"First name","id"=>"Firstname"))}}
                    <span>{{$errors->first('firstname')}}</span>
                  </div> 
                </div> 
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Lastname</label>
                    {{Form::text('lastname','',array("class"=>"form-control form-control-solid placeholder-no-fix", "autocomplete"=>"off","placeholder"=>"Last name","id"=>"Lastname"))}}
                    <span>{{$errors->first('lastname')}}</span>
                  </div> 
                </div> 
              </div>             
              <div class="form-group">
                {{Form::text('email','',array("class"=>"form-control form-control-solid placeholder-no-fix","autocomplete"=>"off","placeholder"=>"E-mail","id"=>"email"))}}
                <span>{{$errors->first('email')}}</span>
              </div>
              <div class="form-group" style="margin-bottom:15px;">
                <label class="control-label visible-ie8 visible-ie9">Password</label>
                {{Form::password('password', array("class"=>"form-control form-control-solid placeholder-no-fix","autocomplete"=>"off","placeholder"=>"New Password","id"=>"password"))}}
                <span>{{$errors->first('password')}}</span>
              </div>
              <div class="row">
                <div class="col-md-4" style="margin-bottom:10px;">
                  {{Form::select('gender',array("0"=>"Gender","1"=>"Male","2"=>"Female"),'',array("class"=>"form-control"))}}
                </div>
                <div class="col-md-4" style="margin-bottom:10px;">
                  {{Form::select('year',array("0"=>"Year","1"=>"2014","2"=>"2015"),'',array("class"=>"form-control"))}}
                </div>
                <div class="col-md-4">
                  {{Form::select('Batch',array("0"=>"Batch","1"=>"2015","2"=>"2016"),'',array("class"=>"form-control"))}}
                </div>
              </div>
              <div class="form-actions" style="padding-right:0px; margin-bottom:10px;">
                <a href="javascript:;" id="forget-password" class="forget-password" style="color:#eee;">* Forgot Password?</a><br>                                               
              </div>
              <div class="row"> 
                <div class="col-md-8">         
                  <div class="login-options" style="margin-top:8px;">               
                      <a href="#">{{HTML::image('assets/img/fb3.png','Facebook')}}</a>
                  </div>
                </div>
                <div class="col-md-4" style="margin-top:7px;">
                  {{Form::submit('Join Now',array("class"=>"btn btn-success uppercase","style"=>"background-color:#ABC351; float:right"))}}    
                </div>
              </div>
                <label class="rememberme check" style="color:#fff; margin:5px;">
               {{Form::checkbox('agree')}} I dont want to subscribe </label>
              {{Form::close()}}              
          </div>
        </div>
       </div>
      </div>
    </div>
    
     <!-- END DIV -->

    <div class="main home-service">
      <div class="container" style="padding:10px 0 20px 0;">
        <!-- BEGIN SERVICE BOX -->   
        <div class="row service-box">
          <div class="col-md-4 col-sm-4">
            <div class="service-box-heading">
              <em><i class="fa fa-location-arrow blue"></i></em>
              <a href="{{url('/profile')}}"><span style="color:#B6C876">The</span><span>Dashboard</span></a>
            </div> 
             <p>The section of the CorperLife<sup>TM</sup> site is dedicated to all currently serving Corpers. We are proud to say we have the deepest and best organized cache of information and tool to make the NYSC Journey a breeze.Corper'WE'Lcome!</p>
              <div style="text-align:center"><a href="{{url('/profile')}}" class="btn green">Click Here</a></div>
          </div>
          <div class="col-md-4 col-sm-4">
            <div class="service-box-heading">
              <em><i class="fa fa-check red"></i></em>
              <a href="{{url('/whycorperlife')}}"><span  style="color:#B6C876">Why</span><span>Corperlife</span></a>
            </div>
            <p>CorperLife<sup>TM</sup> is custom built to aid Corper and job Seekers through "the best time of their lives".Find out what you can expect from each area of the site and what makes it awesome.</p>
              <div style="text-align:center"><a class="btn green" href="{{url('/whycorperlife')}}">Click Here</a>  </div>
          </div>     
          <div class="col-md-4 col-sm-4">
            <div class="service-box-heading">
              <em><i class="fa fa-compress green"></i></em>
              <a href="{{url('/cvbuilder')}}"><span  style="color:#B6C876">The</span><span>Career Centre</span></a>
            </div>
             <p>The section of the CorperLife<sup>TM</sup> site is filled with free tools and resources for all people who are in the process of job hunting. Make this your first stop on the path to having a great career!</p>
              <div style="text-align:center"><a class="btn green" href="{{url('/cvbuilder')}}">Click Here</a>  </div>
          </div>
        </div>
        <!-- END SERVICE BOX -->
      </div>
    </div>