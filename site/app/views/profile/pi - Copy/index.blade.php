<div class="page-container">


  <!-- BEGIN PAGE HEAD -->
  <div class="page-head">
    <div class="container">
      <!-- BEGIN PAGE TITLE -->
      <div class="page-title">
        <h1>Personal Information</h1>
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
          {{ HTML::link('/profile','Home') }}
          <i class="fa fa-circle"></i>
        </li>       
        <li class="active">
          Personal Information
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
                <span class="caption-subject font-green-sharp bold uppercase">Corper Profile</span>
              </div>
            </div>
            <div class="portlet-body form">
                {{Form::open(array("url"=>"/profile/savepi","method" => "PUT","class"=>"form-horizontal","role"=>"form"))}}                    
                <div class="form-body">
                  <div class="form-group">                 
                    {{ Form::label('', 'First Name', array('class' => 'col-md-3 control-label')) }}
                    <div class="col-md-9">                                     
                      {{Form::text('firstname',$user->firstname,array("class"=>"form-control", "placeholder"=>"Enter First Name"))}}
                      <span>{{$errors->first('firstname','Please provide your first name')}}</span> 
                    </div>
                  </div>
                  <div class="form-group">
                    {{ Form::label('', 'Last Name', array('class' => 'col-md-3 control-label')) }}                   
                    <div class="col-md-9">
                      {{Form::text('lastname',$user->lastname,array("class"=>"form-control", "placeholder"=>"Enter Last Name"))}}                                 
                    </div>
                  </div>
                  <div class="form-group">
                    {{ Form::label('', 'Profile Name', array('class' => 'col-md-3 control-label')) }}                    
                    <div class="col-md-9">
                      {{Form::text('profilename',$user->profilename,array("class"=>"form-control", "placeholder"=>"Enter Profile Name"))}}
                      <span>{{$errors->first('profilename')}}</span>
                    </div>
                  </div>
                    <div class="form-group">
                    {{ Form::label('', 'Sex', array('class' => 'col-md-3 control-label')) }}                 
                    <div class="col-md-9">
                      {{Form::select('sex',array("0"=>"Select","1"=>"Male","2"=>"Female"),$user->sex,array("class"=>"form-control"))}}
                      <span>{{$errors->first('sex')}}</span>
                    </div>
                  </div>
                   <div class="form-group">
                    {{ Form::label('', 'Serving State', array('class' => 'col-md-3 control-label')) }}                   
                    <div class="col-md-9">
                      {{Form::select('serv_state',$states,$user->serv_state,array("class"=>"form-control"))}}
                    </div>
                  </div>
                   <div class="form-group">
                    {{ Form::label('', 'Origin State', array('class' => 'col-md-3 control-label')) }}                   
                    <div class="col-md-9">
                      {{Form::select('origin_state',$states,$user->origin_state,array("class"=>"form-control"))}}
                    </div>
                  </div>                  
                  <div class="form-group">
                    {{ Form::label('', 'State Code', array('class' => 'col-md-3 control-label')) }}
                    <div class="col-md-9">
                      {{Form::text('state_code',$user->state_code,array("class"=>"form-control", "placeholder"=>"Enter State Code"))}}                              
                    </div>
                  </div>
                  <div class="form-group">
                    {{ Form::label('', 'LG', array('class' => 'col-md-3 control-label')) }}                   
                    <div class="col-md-9">
                      {{Form::text('lg',$user->lg,array("class"=>"form-control", "placeholder"=>"Enter LG"))}}                                  
                    </div>
                  </div>
                </div>
                 <div class="form-actions right1">
                  <button type="button" class="btn default">Cancel</button>
                  <button type="submit" class="btn default">Submit</button>
                </div>
                {{Form::close()}}
            </div>            
          </div>
        </div>

          <div class="col-md-4">
                  <!-- BEGIN SAMPLE FORM PORTLET-->
            <div class="portlet light">
                    <div class="portlet-title">
                      <div class="caption">
                        <i class="fa fa-cogs font-green-sharp"></i>
                        <span class="caption-subject font-green-sharp bold uppercase">Profile Picture</span>
                      </div>
                    </div>
                 <div class="portlet-body form">               
                    <div id="crop-avatar">
                      <!-- Current avatar -->
                      <div class="avatar-view" title="Change the avatar">
                      {{HTML::image($user->profile_pic,'people')}}
                      </div>
                      <div style="font-style:italic; text-align:center">
                        Click on the image to change profile picture
                      </div>
                      <!-- Cropping modal -->
                      <div class="modal fade" id="avatar-modal" aria-hidden="true" aria-labelledby="avatar-modal-label" role="dialog" tabindex="-1">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <form class="avatar-form" action="{{url('/profile/uploadprofilepic')}}" enctype="multipart/form-data" method="post">
                              <div class="modal-header">
                                <button class="close" data-dismiss="modal" type="button">&times;</button>
                                <h4 class="modal-title" id="avatar-modal-label">Change Avatar</h4>
                              </div>
                              <div class="modal-body">
                                <div class="avatar-body">

                                  <!-- Upload image and data -->
                                  <div class="avatar-upload">
                                    <input class="avatar-src" name="avatar_src" type="hidden">
                                    <input class="avatar-data" name="avatar_data" type="hidden">
                                    <label for="avatarInput">Local upload</label>
                                    <input class="avatar-input" id="avatarInput" name="avatar_file" type="file">
                                  </div>

                                  <!-- Crop and preview -->
                                  <div class="row">
                                    <div class="col-md-9">
                                      <div class="avatar-wrapper"></div>
                                    </div>
                                    <div class="col-md-3">
                                      <div class="avatar-preview preview-lg"></div>
                                      <div class="avatar-preview preview-md"></div>
                                      <div class="avatar-preview preview-sm"></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
                                <button class="btn btn-primary avatar-save" type="submit">Save</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div><!-- /.modal -->

                      <!-- Loading state -->
                      <div class="loading" aria-label="Loading" role="img" tabindex="-1"></div>
                    </div>    
                 </div>            
              </div> 
            </div>               
         </div>
      <!-- END PAGE CONTENT INNER -->
    </div>
  </div>
  <!-- END PAGE CONTENT -->
</div>