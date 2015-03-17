<div class="main" style="padding:40px">
      <div class="container">
        <ul class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li class="active">Career Center cv</li>
        </ul>
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
          <!-- BEGIN CONTENT -->
          <div class="col-md-12 col-sm-12">
            <h1 style="text-align:center; height: 80px">ADVERTISEMENT SPACE</h1>
            <div class="content-page">
                <div class="page-container">
  <!-- BEGIN PAGE HEAD -->
  <!-- END PAGE HEAD -->
  <!-- BEGIN PAGE CONTENT -->
  <div class="page-content">
    <div class="container">   
      <!-- BEGIN PAGE CONTENT INNER -->
<div class="row">
        <div class="col-md-12" style="padding:0; margin-top:30px">
          <!-- BEGIN TAB PORTLET-->
          <div class="portlet">

            <div class="portlet-body">
              <div class=" portlet-tabs">
                <ul class="nav nav-tabs" style="margin-bottom:20px">
                  <li class="active col-md-6">
                    <a href="#portlet_tab1" data-toggle="tab">
                    Cv Builder </a>
                  </li>
                  <li class="col-md-6">
                    <a href="#portlet_tab2" data-toggle="tab">
                    Job seeker resources </a>
                  </li>                 
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="portlet_tab1">
                  
                     <div class="container-fluid" style="background-image:url(assets/img/bgimg.jpg); min-height:400px;">
      <div class="container">
       <div class="row">
        <div class="col-md-2"></div>

        <div class="col-md-4">
          <div style="background:rgba(0,0,0,0.8); padding:20px; margin:55px 0 30px 0;">
            @if(Session::has('fail'))
              <span style="background:#f00; color:white">{{Session::get('fail')}}</span>
            @endif
              {{Form::open(array("url"=>"/", "method" => "POST","class"=>"login-form"))}}
              <h3 class="form-title" style="color:#fff;">Create New CV</h3>
              <h5 class="form-title" style="color:#fff; font-size:20px;">Are you a corper?</h5>
              <div class="alert alert-danger display-hide">
                <button class="close" data-close="alert"></button>
                <span>
                Enter any username and password. </span>
              </div>
              <div class="col-md-12" style="margin:0px 0px 15px 0px; padding: 0px;">
                {{Form::submit('Sign Up For New Account',array("class"=>"btn btn-success uppercase","style"=>"background-color:#ABC351;"))}}    
              </div>
               {{Form::close()}} 

                {{Form::open(array("url"=>"cvbuilder/createnew","method"=>"POST"))}} 
               <h5 class="form-title" style="color:#fff; margin-top:5px;">Or Continue Without Registering</h5>
               <div class="col-md-12" style="padding-left:0px;">
                 <div class="col-md-9" style="padding-left:0px;">
                  <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Username</label>
                    {{Form::text('email','',array("class"=>"form-control form-control-solid placeholder-no-fix", "autocomplete"=>"off","placeholder"=>"Enter E-mail id","style"=>"color:#555"))}}
                <span>{{$errors->first('email')}}</span>
                  </div>
                </div>
                <div class="col-md-3" style="padding-left:0px;">
                    {{Form::submit('Proceed',array("class"=>"btn btn-success uppercase","style"=>"background-color:#ABC351;"))}}  
                </div>
              </div>     
                <label class="rememberme check" style="color:#fff; margin:5px;">
              {{Form::close()}}           
          </div>
        </div>
        <div class="col-md-4">
                  <div style="background:rgba(0,0,0,0.8); padding:20px; margin:55px 0 30px 0;">
            @if(Session::has('fail'))
              <span style="background:#f00; color:white">{{Session::get('fail')}}</span>
            @endif
              {{Form::open(array("url"=>"/login", "method" => "POST","class"=>"login-form"))}}
              <h3 class="form-title" style="color:#fff;">Update Your CV</h3>
              <h5 class="form-title" style="color:#fff; font-size:20px;">Login</h5>         
              <div class="form-group">
                <label class="control-label visible-ie8 visible-ie9">Username</label>
                {{Form::text('username','',array("class"=>"form-control form-control-solid placeholder-no-fix", "autocomplete"=>"off","placeholder"=>"Username","id"=>"Username"))}}
                <span>{{$errors->first('username')}}</span>
              </div>
              <div class="form-group">
                <label class="control-label visible-ie8 visible-ie9">Password</label>
                {{Form::password('password',array("class"=>"form-control form-control-solid placeholder-no-fix","autocomplete"=>"off","placeholder"=>"Password","id"=>"password"))}}
                <span>{{$errors->first('password')}}</span>
              </div>
               {{Form::submit('Login',array("class"=>"btn btn-success uppercase","style"=>"background-color:#ABC351; float:right"))}} 
               {{Form::close()}}      
              <div class="row">
                  {{Form::open(array("url"=>"/cvbuilder/editcv", "method" => "POST","class"=>"login-form"))}}

                <div class="col-md-12">
                  <span style="color:#fff;">Or Use CV-Retrieval Code</span>
                </div>              
                <div class="col-md-8" style="margin-top: 8px;">         
                  <div class="form-group">
                    {{Form::text('cvcode','',array("class"=>"form-control form-control-solid placeholder-no-fix", "autocomplete"=>"off","placeholder"=>"Enter Retrieval Code","style"=>"color:#555"))}}
                  </div>
                </div>
                <div class="col-md-4" style="margin-top:7px;">                
                    {{Form::submit('Update',array("class"=>"btn btn-success uppercase","style"=>"background-color:#ABC351; float:right"))}}    
                </div>
                {{Form::close()}}
              </div>             
                           
             </div>
           </div>
        <div class="col-md-2"></div>

         </div>
        </div>
      </div> 


                  </div>
                  <div class="tab-pane" id="portlet_tab2">
                    <p>
                      Text 2
                    </p>
                    
                  </div>
                
                </div>
              </div>
            </div>
          </div>
          <!-- END TAB PORTLET-->     
          
        </div>
</div>
      <!-- END PAGE CONTENT INNER -->
    </div>
  </div>
  <!-- END PAGE CONTENT -->
</div>
            </div>
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- BEGIN SIDEBAR & CONTENT -->
      </div>
    </div>