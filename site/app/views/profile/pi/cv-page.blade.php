@include('profile.adv')
  <div class="page-content" style="padding-top:0px;">
      <!-- BEGIN PAGE CONTENT INNER -->
    <div class="row">
      <div class="col-md-8" style="padding-right:0px;">
          <!-- BEGIN SAMPLE TABLE PORTLET-->
        <div class="portlet light">

          <div class="portlet-body">
            <div class="table-scrollable">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>
                       #
                    </th>
                    <th>
                       CV Code
                    </th>
                    <th>
                       Created on
                    </th>
                    <th>
                      Edit
                    </th>                 
                  </tr>
                </thead>
                <tbody>
                  <?php $count = 0; ?>
                  @foreach($cvs as $cv)
                  <tr>
                    <td>
                       {{++$count}}
                    </td>
                    <td>
                       {{$cv->cv_code}}
                    </td>
                    <td>
                       {{date("H:i:s d-M-y", strtotime($cv->created_at))}}
                    </td>
                    <td>
                       <a href="{{url("/cvbuilder/cv/".$cv->cv_code)}}"> <span class="label label-lg label-success">
                      Edit</span></a>
                    </td>                 
                  </tr>
                 @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
          <!-- END SAMPLE TABLE PORTLET-->
      </div>
      <div class="col-md-4" style="padding-left:1px;">
        <!-- BEGIN BORDERED TABLE PORTLET-->
        <div class="portlet light">
          <div class="portlet-title">
            <div class="caption">
              <span class="caption-subject font-green-sharp bold uppercase">Stats</span>
            </div>
          </div>
          <div class="portlet-body" align="center">              
            <span class="caption-subject font-green-sharp bold" style="font-size:24px">Created by You</span> <br>             
            <span class="" style="margin:10px 90px; font-size:36px;">{{sizeof($cvs)}}</span> 
              {{Form::open(array("url"=>"cvbuilder/createnew","method"=>"POST"))}}         
              <button href="#" type="submit" class="btn green">Create New</button>  
              {{Form::close()}}              
          </div>
        </div>
          <!-- END BORDERED TABLE PORTLET-->
      </div>
    </div>
      <!-- END PAGE CONTENT INNER -->
  </div>
</div>

      <!-- END PAGE CONTENT INNER -->
