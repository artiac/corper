<div class="container-fluid" style="text-align:center; background:#839742; color:#FFF;  padding:50px 0;">
  <div class="container quotes" style="">
    <div class="visible">
      <p class="quote" style="font-size:32px;">"Our greatest weakness lies in giving up. The most certain way to succeed is always to try just one more time."</p>
        <p class="author" style="font-size:20px; margin-bottom:30px">Thomas A. Edison (Inventor, buisnessan)</p>
    </div>
    <div>
      <p class="quote" style="font-size:32px;">"2Our greatest weakness lies in giving up. The most certain way to succeed is always to try just one more time."</p>
        <p class="author" style="font-size:20px; margin-bottom:30px">Thomas A. Edison (Inventor, buisnessan)</p>
    </div>
    <div>
      <p class="quote" style="font-size:32px;">"3Our greatest weakness lies in giving up. The most certain way to succeed is always to try just one more time."</p>
        <p class="author" style="font-size:20px; margin-bottom:30px">Thomas A. Edison (Inventor, buisnessan)</p>
    </div>
  </div>
</div>

<div class="page-container">
  <!-- BEGIN PAGE CONTENT -->
  <div class="page-content" style="padding:0; background:#fff">
    <div class="container">   
                  <!-- BEGIN PAGE CONTENT INNER -->
                  <div class="row">
                    <div class="col-md-12" style="padding:0; margin-top:30px">
                      <!-- BEGIN TAB PORTLET-->
                      <div class="portlet">
                        <div class="portlet-body">
                          <div class=" portlet-tabs">
                            <ul class="nav nav-tabs corper-life-tab">
                              <li class="active col-md-6 align-center">
                                <a href="#portlet_tab1" data-toggle="tab">
                                  CV Builder 
                                </a>
                              </li>
                              <li class="col-md-6 align-center">
                                <a href="#portlet_tab2" data-toggle="tab">
                                Job Seeker Resource </a>
                              </li>
                            </ul>
                            <div class="tab-content">
                              <div class="tab-pane active" id="portlet_tab1">
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
                              <div class="tab-pane" id="portlet_tab2">
                                <p class="para_big"> 
                                  Job seeker resources
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