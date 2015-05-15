
<!-- BEGIN PAGE CONTAINER -->
<div class="page-container" >
	<!-- BEGIN PAGE CONTENT -->
	<div class="page-content" style="background:#f7f7f7;padding:30px 0">		
	<!-- BEGIN PAGE CONTENT INNER -->
	{{Form::open(array("class"=>"builderForm"))}}
	{{Form::hidden('cv_id',$cv->id,["id"=>"cv_id","readonly"=>"readonly"])}}
	{{Form::hidden('cv_code',$cv->cv_code,["id"=>"cv_code","readonly"=>"readonly"])}}
	<div class="container" style="">
		<div class="row">
			<!-- BEGIN PROFILE CONTENT -->									
					<!-- PERSONAL INFO TAB -->
			<div class="col-md-12">
				<div class="row cv" style="margin-bottom:10px">
					<div class="col-md-6">
						<h3>CV Code : {{$cv->cv_code}} <a href="#" class="ttip" data-toggle="tooltip" data-placement="left" title="Tooltip on left">
							<i class="fa fa-question-circle" style="font-size:24px; font-weight:normal; color:#1caf9a"></i>
						</a></h3>
						
					</div>
					<div class="col-md-6">
						<a href="{{url('/cvbuilder/pdf/'.$cv->cv_code.'/executive')}}" class="btn red pull-right" target="_blank">Done!</a>
						<button type="button" class="btn red pull-right" data-toggle="modal" data-target="#style-modal">Preview</button>
						<button type="button" class="btn red pull-right submit-form">Save</button>
					</div>
				</div>
				<!-- BEGIN SAMPLE FORM PORTLET-->					
				<div class="portlet">
					<div class="portlet-body cv-portal form">
						<div class="row">	
							<div class="col-md-3 section-names">
								<div class="cv-toggle">
						              asdsad
						              <a href="javascript:void(0);" class="pull-right" style="color:#FFF"><i class="fa fa-bars"></i></a>
						            </div>
								<div id="sortable1" class="cv-links">
								<div class="section_link active start" data-show="#prop-1">Basic Information<span class="selected"></span></div>										
									@foreach($sections as $section)
									<div class="section_link" data-show="#prop{{$section->id}}">
										<span class="selected"></span>
										<input type="checkbox" name="section[]" id="" value="{{$section->id}}" checked>
										<span id="section{{$section->id}}">{{$section->section_name}}</span>
										@if($section->default == 0)
										<a href="javascript:;" data-id="{{$section->id}}" class="remove-section">x</a>
										@endif
										<a href="javascript:;" data-id="{{$section->id}}" data-toggle="modal" data-target="#Modal" class="edit-section"><i class="fa fa-edit"></i></a>
									</div>
									@endforeach 
								</div>
								<div class="drag">Drag to arrange the order of sections</div>

								<div class="new"> <a class="btn green" href="#" data-toggle="modal" data-target="#Modal" id="add_new_section">+ Add new section</a></div>     
							</div>                      
							<div class="col-md-9" id="section_panel" style="min-height:500px">			
								<div class="row section" id="prop-1">			 
									<h2>Basic Information</h2>
									<div class="col-md-12">
										<div class="form-group col-md-6">
											<label>Full Name</label>
											{{Form::text('full_name',$cv->full_name,array("class"=>"form-control", "placeholder"=>"Full Name"))}}
										</div>
										<div class="form-group col-md-6">
											<label>Email</label>
											{{Form::text('email',$cv->email,array("class"=>"form-control", "placeholder"=>"Email"))}}	
											<span>{{$errors->first('email')}}</span>
										</div>
										<div class="form-group col-md-6 ">
											<label>D.O.B</label>
											<div class="row dob">
												<div class="col-md-3">
													{{Form::selectRange('dob_date', 1, 31,$dob[2],["class"=>"form-control"])}}
												</div>													    	
												<div class="col-md-4">
													{{Form::selectMonth('dob_month',$dob[1],array("class"=>"form-control"))}}
												</div>													    	
												<div class="col-md-4">
													{{Form::selectYear('dob_year',1970, 2010, $dob[0], ['class' => 'form-control'])}}
												</div>
											</div>
										</div>
										<div class="form-group col-md-6">
											{{ Form::label('', 'Marital Status') }} 							                       
											{{Form::select('marital_status',array("0"=>"Select","1"=>"Married","2"=>"UnMarried"),$cv->marital_status,array("class"=>"form-control"))}}
											<span>{{$errors->first('marital_status')}}</span>							                    
										</div>
										<div class="form-group col-md-6">
											<label>Address line 1</label>
											{{Form::text('add_line1',$cv->add_line1,array("class"=>"form-control", "placeholder"=>"Enter Address"))}}												
										</div>
										<div class="form-group col-md-6">
											<label>Address line 2</label>	
											{{Form::text('add_line2',$cv->add_line2,array("class"=>"form-control", "placeholder"=>"Enter Address"))}}								
										</div>
										<div class="form-group col-md-6">
											<label>Phone Number</label>	
											{{Form::text('phone_num',$cv->phone_num,array("class"=>"form-control", "placeholder"=>"Enter Phone Number"))}}
										</div>													
										<div class="form-group col-md-6">
											<label>Web Site</label>	
											{{Form::text('website',$cv->website,array("class"=>"form-control", "placeholder"=>"Web Site"))}}
										</div>
										<div class="form-group col-md-6">
											{{ Form::label('', 'Sex') }} 							                       
											{{Form::select('sex',array("0"=>"Select","1"=>"Male","2"=>"Female"),$cv->sex,array("class"=>"form-control"))}}
											<span>{{$errors->first('sex')}}</span>							                    
										</div>	
										<div class="form-group col-md-6">
											{{ Form::label('', 'State Origin') }} 							                       
											{{Form::select('state_origin',array("0"=>"Select","1"=>"Male","2"=>"Female"),$cv->state_origin,array("class"=>"form-control"))}}
											<span>{{$errors->first('state_origin')}}</span>							                    
										</div>	
										<div class="form-group col-md-6">
											{{ Form::label('', 'Religion') }} 							                       
											{{Form::select('religion',array("0"=>"Select","1"=>"Male","2"=>"Female"),$cv->religion,array("class"=>"form-control"))}}
											<span>{{$errors->first('religion')}}</span>							                    
										</div>	
										<div class="form-group col-md-6">
											<label>Local Government</label>	
											{{Form::text('local_government',$cv->local_government,array("class"=>"form-control", "placeholder"=>"Local Government"))}}
										</div>                                              
									</div>
								</div>
								@foreach($sections as $section)
								@if($section->type == 0)
								<div class="row section hide_panel" id="prop{{$section->id}}">	
									<h2>{{$section->section_name}}</h2>		
									<div class="col-md-11">
										<div class="form-group">
											{{ Form::textarea('section_'.$section->id,$section->content,["class"=>"form-control textarea"])}}		
										</div>
									</div>
								</div>
								@elseif($section->type == 1)
								<div class="row section hide_panel" id="prop{{$section->id}}">
									<h2>{{$section->section_name}}</h2>
									<div class="btn btn-primary section-button" data-toggle="modal" data-target="#Modal" id="add_new_work_ex"> + Add New Entry</div>
									<div class="margin-top-20" id="work_ex_panel">
										@foreach($workex as $work)
										<div class="workex-item">
											<div class="row" style="padding:10px 0">
												<div class="col-md-10" id="work">
													<input type="checkbox" name="work_ex[]" value="{{$work->id}}" checked>
													<div class="row" style="padding:0" id="work{{$work->id}}">
														<div class="col-md-4">
															<span class="small-text">Position</span><br>
															<b>{{$work->title}}</b>
														</div>
														<div class="col-md-4">
															<span class="small-text">Company</span><br>
															<b>{{$work->company}}</b>
														</div>
														<div class="col-md-4">
															<span class="small-text">Duration</span><br>
															<b>{{$work->startdate}} - {{$work->enddate}}</b>
														</div>
													</div>
												</div>
												<div class="col-md-2">
													<div class="edit">
														<a href="javascript:;" data-id="{{$work->id}}" data-toggle="modal" data-target="#Modal" class="edit-work"><i class="fa fa-edit"></i></a>
														<a href="javascript:;" data-id="{{$work->id}}" class="remove-work">x</a>
													</div>
												</div> 
											</div>
										</div>			                                               		
										@endforeach
									</div>
								</div>
								@elseif ($section->type == 2)
								<div class="row section hide_panel" id="prop{{$section->id}}">
									<h2>{{$section->section_name}}</h2>	
									<div class="btn btn-primary section-button" data-toggle="modal" data-target="#Modal" id="add_new_education"> + Add New Entry</div> 	        
									<div class="margin-top-20" id="education_panel">
										@foreach($education as $edu)
										<div class="education-item">
											<div class="row">
												<div class="col-md-10" id="edu">
													<input type="checkbox" name="education[]" value="{{$edu->id}}" checked>
													<div class="row" style="padding:0" id="edu{{$edu->id}}">
														<div class="col-md-4">
															<span class="small-text">Course</span><br>
															<b>{{$edu->coursename}}</b>
														</div>
														<div class="col-md-4">
															<span class="small-text">Institute</span><br>
															<b>{{$edu->institutename}}</b>                                  
														</div>
														<div class="col-md-4">
															<span class="small-text">Duration</span><br>
															<b>{{$edu->startdate}} - {{$edu->enddate}}</b>
														</div>			                                         			
													</div>	
												</div>
												<div class="col-md-2">
													<div class="edit-edu">
														<a href="javascript:;" data-id="{{$edu->id}}" data-toggle="modal" data-target="#Modal" class="edit-education"><i class="fa fa-edit"></i></a>
														<a href="javascript:;" data-id="{{$edu->id}}" class="remove-education">x</a>
													</div>
												</div> 
											</div> 
										</div>                                               		
										@endforeach		                                                     
									</div>
								</div>
								@elseif ($section->type == 3)
								<div class="row section hide_panel" id="prop{{$section->id}}">
									<h2>{{$section->section_name}}</h2>	
									<div class="btn btn-primary section-button" data-toggle="modal" data-target="#Modal" id="add_new_nysc" > + Add New Entry</div> 	        
									<div  id="nysc_panel">
										@foreach($nysc as $nysc)
										<div class="nysc-item" class="margin-top-20">
											<div class="row">
												<div class="col-md-12" id="nysc">
													<input type="checkbox" name="nysc[]" value="{{$nysc->id}}" checked>
													<div class="row" style="padding:0" id="nysc{{$nysc->id}}">  
														<div class="col-md-3">
															<span class="small-text">Batch</span><br>
															<b>{{$nysc->batch}}</b>
														</div>
														<div class="col-md-3">
															<span class="small-text">Year</span><br>
															<b>{{$nysc->year}}</b>
														</div>     
														<div class="col-md-4">
															<span class="small-text">PPA</span><br>
															<b>{{$nysc->ppa}}</b>
														</div>
														<div class="col-md-2">
															<div class="edit-edu">
																<a href="javascript:;" data-id="{{$nysc->id}}" data-toggle="modal" data-target="#Modal" class="edit-nysc"><i class="fa fa-edit"></i></a>
																<a href="javascript:;" data-id="{{$nysc->id}}" class="remove-nysc">x</a>
															</div>
														</div> 
													</div>  	                 			
												</div>
											</div>	
										</div>                                       		
										@endforeach
									</div>    
								</div>
								@elseif ($section->type == 4)
								<div class="row section hide_panel" id="prop{{$section->id}}">
									<h2>{{$section->section_name}}</h2>	
									<div class="btn btn-primary section-button" data-toggle="modal" data-target="#Modal" id="add_new_language"> + Add New Entry</div> 	        
									<div class="margin-top-20" id="language_panel">
										@foreach($language as $lang)
										<div class="language-item">
											<div class="row">
												<div class="col-md-10" id="lang">
													<input type="checkbox" name="language[]" value="{{$lang->id}}" checked>
													<div class="row" style="padding:0" id="lang{{$lang->id}}">
														<div class="col-md-4">
															<span class="small-text">Language Name</span><br>
															<b>{{$lang->language}}</b>
														</div>
														<div class="col-md-4">
															<span class="small-text">Ability</span><br>
															<b>{{$lang->ability}}</b>                                  
														</div>
														<div class="col-md-4">
															<span class="small-text">Level</span><br>
															<b>{{$lang->level}}</b>
														</div>			                                         			
													</div>	
												</div>
												<div class="col-md-2">
													<div class="edit-lang">
														<a href="javascript:;" data-id="{{$lang->id}}" data-toggle="modal" data-target="#Modal" class="edit-language"><i class="fa fa-edit"></i></a>
														<a href="javascript:;" data-id="{{$lang->id}}" class="remove-language">x</a>
													</div>
												</div> 
											</div> 
										</div>                                               		
										@endforeach		                                                     
									</div>
								</div>
								@elseif ($section->type == 5)
								{{Form::close()}}
								<div class="row section hide_panel" id="prop{{$section->id}}">	
									<h2>{{$section->section_name}}</h2>	
										<div class="portlet-body form" style="border:1px solid #ddd; border-right:none; padding-bottom: 30px !important;">               
						              <div id="crop-avatar">
						                 <!-- Current avatar -->
						                <div class="avatar-view">
						                  <?php 
						                    if($cv->profile_image == '') $profile_image = 'assets/avatars/default.png';
						                    else $profile_image = $cv->profile_image;  ?>
						                  {{HTML::image($profile_image,'cv picture')}}
						                </div>
						                <div style="text-align:center">
											<button type="button" class="btn" data-toggle="modal" data-target="#avatar-modal">Upload Image</button> 	        

						                </div>
						                	<!-- Cropping modal -->
											    <div class="modal fade" id="avatar-modal" aria-hidden="true" aria-labelledby="avatar-modal-label" role="dialog" tabindex="-1">
											      <div class="modal-dialog modal-lg">
											        <div class="modal-content">
											          <form class="avatar-form" id="profileForm" action="{{url('/cvbuilder/uploadCvPic/'.$cv->cv_code)}}" enctype="multipart/form-data" method="post">
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
											                  <div class="col-md-12">
											                    <div class="avatar-wrapper"></div>
											                  </div>
											                </div>
											              </div>
											            </div>
											            <div class="modal-footer">
											              <button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
											              <button class="btn btn-primary avatar-save" type="button" onclick="$('#profileForm').submit()" >Save</button>
											            </div>
											          </form>
											        </div>
											      </div>
											    </div><!-- /.modal -->
						                <div class="loading" aria-label="Loading" role="img" tabindex="-1"></div>
						              </div>    
						            </div>			            		

								</div>
								{{Form::open(array("class"=>"builderForm"))}}
								@endif							           		
								@endforeach
							</div>
						</div>
					</div>
				</div>								
			</div>
		</div>
	</div>
	{{Form::close()}}
	</div>
</div>
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

	<!--new section-->
	<div class="mod">
		<div class="modal fade" id="Preview_Modal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
			<div class="modal-dialog" style="width:90%;">
				<div class="modal-content cont1">		      
				</div>
			</div>
		</div>   
		<!-- end new section-->
		<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="style-modal">
			<div class="modal-dialog modal-sm">
				<div class="modal-content" style="padding:20px;">
					<div class="form-group">
						<label>Style</label>
						<hr style="border-width:3px;">
						<div class="radio-list">
							<label><input type="radio" name="cvstyle" value="bold" checked> Bold</label>
							
							<label><input type="radio" name="cvstyle" value="elegant"> Elegant </label>
							<label><input type="radio" name="cvstyle" value="executive"> Executive </label>
							<label><input type="radio" name="cvstyle" value="literateur"> Literateur </label>
							<label><input type="radio" name="cvstyle" value="finesse"> Finesse </label>
						</div>
					</div>
					<div class="modal-footer">
						<button class="btn preview green">Preview</button>
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>												    
					</div>
				</div>
			</div>
		</div>
	</div>

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

	