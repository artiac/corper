<div class="page-container">


  <!-- BEGIN PAGE HEAD -->
  <div class="page-head">
    <div class="container">
      <!-- BEGIN PAGE TITLE -->
      <div class="page-title">
        <h1>CV</h1>
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
          {{ HTML::link('/profile/cv-page','Home') }}
          <i class="fa fa-circle"></i>
        </li>       
        <li class="active">
         CV
        </li>     
      </ul>
      <!-- END PAGE BREADCRUMB -->

      <!-- BEGIN PAGE CONTENT INNER -->
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
      
      <!-- BEGIN PAGE CONTENT INNER -->
        <div class="row">
        <div class="col-md-9">
          <!-- BEGIN SAMPLE TABLE PORTLET-->
          <div class="portlet light">
            <div class="portlet-title">
              <div class="caption">
                <i class="fa fa-cogs font-green-sharp"></i>
                <span class="caption-subject font-green-sharp bold uppercase">CVs Created by You</span>
              </div>
            </div>
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
        <div class="col-md-3">
          <!-- BEGIN BORDERED TABLE PORTLET-->
          <div class="portlet light">
            <div class="portlet-title">
              <div class="caption">
                <i class="fa fa-cogs font-green-sharp"></i>
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

    </div>
  </div>
  <!-- END PAGE CONTENT -->
</div>