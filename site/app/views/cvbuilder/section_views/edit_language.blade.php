<div class="modal-body row">
	<form id="editlanguage_form" action="" method="POST">			
		<div class="form-group col-md-6">
		   {{ Form::label('', 'Select Language') }} 							                       
	       {{Form::select('language_id',array("0"=>"Select","1"=>"Hindi","2"=>"English","2"=>"Franch"),$lang->language_id,array("class"=>"form-control"))}}
	       <span>{{$errors->first('language_id')}}</span>	
		</div>
	    <div class="form-group col-md-6">
		  {{ Form::label('', 'Language') }} 							                       
	      {{Form::text('language_name',$lang->language_name,array("class"=>"form-control", "placeholder"=>"Enter Address"))}}	
	       <span>{{$errors->first('language_name')}}</span>	
		</div>
	    <div class="form-group col-md-6">
		   {{ Form::label('', 'Ability') }} 							                       
	       {{Form::select('ability',array("0"=>"Select","1"=>"Speak","2"=>"Write"),$lang->ability,array("class"=>"form-control"))}}
	       <span>{{$errors->first('ability')}}</span>	
	    </div>
	     <div class="form-group col-md-6">
		   {{ Form::label('', 'Level') }} 							                       
	       {{Form::select('level',array("0"=>"Select","1"=>"Beginner","2"=>"Intermediate","2"=>"Expert"),$lang->level,array("class"=>"form-control"))}}
	       <span>{{$errors->first('level')}}</span>	
		</div>			
	</form>
</div>
<div class="modal-footer">
	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	<button type="button" onclick="editlanguage_submit({{$lang->id}})" class="btn btn-primary">Update</button>
</div>
