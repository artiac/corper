<div class="modal-body row">
	<form id="editnysc_form" action="" method="POST">
			
			<div class="form-group col-md-6">
				<label>Batch</label>																	
				{{Form::text('batch',$nysc->batch,array("class"=>"form-control", "placeholder"=>"Batch"))}}
			</div>
			<div class="form-group col-md-6">
				<label>Year</label>																	
				{{Form::text('year',$nysc->year,array("class"=>"form-control", "placeholder"=>"Year"))}}
			</div>
			<div class="form-group col-md-6">
				<label>Place of primary assignment</label>
				{{Form::text('ppa',$nysc->ppa,array("class"=>"form-control", "placeholder"=>"Place of primary assignment"))}}	
			</div>		  
		     <div class="form-group col-md-6">
				<label>CD/SAED GROUP</label>																	
				{{Form::text('cd',$nysc->cd,array("class"=>"form-control", "placeholder"=>"CD"))}}
			</div>	
		    <div class="form-group col-md-11">
			    <label>Other Information</label>																	
				{{ Form::textarea('otherinfo',$nysc->otherinfo,["class"=>"form-control"])}}		
			 </div>	  
		
	</form>
</div>
  <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    <button type="button" onclick="editnysc_submit({{$nysc->id}})" class="btn btn-primary">Update</button>
  </div>
