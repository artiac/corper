@include('header')
<!-- BEGIN PAGE CONTAINER -->
<div class="page-container">
	<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<div class="container">
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<h1>Create User Account <small>user account page </small></h1>
			</div>
			<!-- END PAGE TITLE -->
		</div>
	</div>
	<!-- END PAGE HEAD -->
	<!-- BEGIN PAGE CONTENT -->
	<div class="page-content">
		<div class="container">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">Modal title</h4>
						</div>
						<div class="modal-body">
							 Widget settings form goes here
						</div>
						<div class="modal-footer">
							<button type="button" class="btn blue">Save changes</button>
							<button type="button" class="btn default" data-dismiss="modal">Close</button>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			<!-- /.modal -->
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN PAGE BREADCRUMB -->
			<ul class="page-breadcrumb breadcrumb">
			   <li>
                 {{ HTML::link('/profile2','Home') }}
                   <i class="fa fa-circle"></i>
	           </li>       
	        <li class="active">
	           Cv Builder
	          </li>  			
			</ul>
		</div>
	</div>
			<!-- END PAGE BREADCRUMB -->
			<!-- BEGIN PAGE CONTENT INNER -->
	{{Form::open(array("url"=>"/saveinfo","method" => "PUT"))}}	
	<div class="container">
		<div class="row margin-top-10">
			<!-- BEGIN PROFILE CONTENT -->
			<div class="profile-content">
				<div class="row">					
					<div class="col-md-12">
						<div class="portlet light">
							<div class="portlet-title tabbable-line">
								<div class="caption caption-md">
									<i class="icon-globe theme-font hide"></i>
									<span class="caption-subject font-blue-madison bold uppercase">Profile Account</span>
								</div>
								<ul class="nav nav-tabs">
									<li class="active">
										<a href="profile" data-toggle="tab">Personal Info</a>
									</li>
									<li>
										<a href="profile" data-toggle="tab"><span class="glyphicon glyphicon-floppy-disk" style="color:#04b2cc"></span> Save</a>
									</li>
									<li>
										<a href="#tab_1_3" data-toggle="tab"><span class="glyphicon glyphicon-ok" style="color:#04b2cc"></span> Download</a>
									</li>
									<li>
										<a href="#tab_1_4" data-toggle="tab">Privacy Settings</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="portlet-body">										
					<!-- PERSONAL INFO TAB -->
					<div class="row">
						
					@if(Session::has('success'))
						{{Session::get('success')}}
					@endif
					<!-- BEGIN SAMPLE FORM PORTLET-->
							<div class="portlet light">
								<div class="portlet-body form">
									<div class="col-md-12">
										
									 <div id="col12">								
									   <div class="col-md-4">
										   <div style="background:#EEE; padding:5px 10px; text-align:center; font-size:14px; margin-bottom:1px; border-radius:25px;" class="section_link" data-show="#prop-1">Basic Information</div>
										   <div>Drag to arrange the order of sections</div>
										   <div id="sortable1">
										   	@foreach($sections as $section)
											   <div style="background:#EEE; padding:5px 10px; text-align:center; font-size:14px; margin-bottom:1px" class="section_link" data-show="#prop{{$section->id}}"><input type="checkbox" name="section[]" id="" value="{{$section->id}}" checked>{{$section->section_name}}</div>
											@endforeach 
										   </div>
										   <div class="btn btn-primary" data-toggle="modal" data-target="#Modal" id="add_new_section" style="border-radius:25px !important; margin-top:25px;"> + Add new section</div> 	    
									   </div>                                        											                        
										<div class="col-md-8" id="section_panel">											
											<div class="col-md-12 section" id="prop-1">												 
												<h2>Basic Information</h2>
												<div class="col-md-6">
													<div class="form-group">
														<label>User Name</label>
													    {{Form::text('username',$user->username,array("class"=>"form-control", "placeholder"=>"Email Address","readonly"=>"readonly", "style"=>"border-radius:5px !important"))}}
													</div>
													<div class="form-group">
														<label>Email</label>	
														 {{Form::text('email','',array("class"=>"form-control", "placeholder"=>"Email", "style"=>"border-radius:5px !important"))}}		
														<span>{{$errors->first('email')}}</span>
													</div>
													 <div class="form-group">
														<label>Web Site</label>
														{{Form::text('website','',array("class"=>"form-control", "placeholder"=>"Enter Web Site", "style"=>"border-radius:5px !important"))}}	
													</div>
												</div>
												<div class="col-md-6">
													  <div class="form-group">
													    <label>Name</label>	
														{{Form::text('name',$user->firstname,array("class"=>"form-control", "placeholder"=>"Enter Full Name", "style"=>"border-radius:5px !important"))}}	  			
													  </div>
		                                              <div class="form-group">
														<label>Phone</label>	
														{{Form::text('phone',$user->phone,array("class"=>"form-control", "placeholder"=>"Enter Phone Number", "style"=>"border-radius:5px !important"))}}	
														
													  </div>
												</div>		                  
		                                    </div>
		                                    @foreach($sections as $section)
		                                    	@if($section->type == 0)
				                                    <div class="col-md-12 section hide_panel" id="prop{{$section->id}}">								    
				                                    	<h2>{{$section->section_name}}</h2>														
														<div class="col-md-11">
														  <div class="form-group">
																<label>{{$section->section_name}}</label>
																{{ Form::textarea('section_'.$section->id,$section->content,["class"=>"form-control"])}}		
														  </div>
														</div>
													</div>
												@elseif($section->type == 1)
													  <div class="col-md-12 section hide_panel" id="prop{{$section->id}}">
													  		<h2>{{$section->section_name}}</h2>
			                                                <div class="btn btn-primary" data-toggle="modal" data-target="#Modal" id="add_new_work_ex" style=" 
			                                                    border-radius:25px !important; margin-top:25px;"> + Add New Entry</div>
			                                               <div style="margin-top:20px" id="work_ex_panel">
				                                               	@foreach($workex as $work)
			                                               		<div style="padding:10px; background:#EEE; margin-bottom:10px;">
			                                               			<input type="checkbox" name="work_ex[]" value="{{$work->id}}" checked>
			                                               			{{$work->title}}
			                                               		</div>			                                               		
				                                               	@endforeach
			                                               </div>
												       </div>
												@elseif ($section->type == 2)
													<div class="col-md-12 section hide_panel" id="prop{{$section->id}}">
														<h2>{{$section->section_name}}</h2>	
		                                                 <div class="btn btn-primary" data-toggle="modal" data-target="#Modal" id="add_new_education" style="border-radius:25px !important; margin-top:25px;"> + Add New Entry</div> 	        
		                                                  <div style="margin-top:20px" id="education_panel">

		                                               	@foreach($education as $edu)

		                                               		<div style="padding:10px; background:#EEE; margin-bottom:10px;">
		                                               		<input type="checkbox" name="education[]" value="{{$edu->id}}" checked>
		                                               			{{$edu->coursename}}
		                                               		</div>
		                                               		
		                                               	@endforeach
		                                               </div>        
			                                       </div>
												@endif
		                                    @endforeach
		                                </div>  				                                    
										</div>                          
                                                                                     											                        
										
								</div>
							</div>
						</div>									
					</div>
				</div>
			</div>
      </div>
	<button type="submit" style="border-radius:25px !important;">Submit</button>	

	</div>	
	{{Form::close()}}
<!--new section-->
	<div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="ModalLabel"></h4>
	      </div>
	      	<div class="modal-body-main">
	      		
			</div>
	      </div>
	  </div>
	</div>
	<!-- end new section-->
@include('footer')