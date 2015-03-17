<div class="col-md-4" style="padding-left:1px;">
        <!-- BEGIN SAMPLE FORM PORTLET-->
        <div class="portlet light">
          <div class="portlet-title">
            <div class="caption">
              <span class="caption-subject font-green-sharp bold uppercase">Categories</span>
            </div>
          </div>
          <div class="portlet-body form">
                                
            <div>                                   
              <div class="form-group">                  
                {{ Form::label('', 'Select Category') }}   
                     <ol>
                @foreach($category_get as $category)                  
                <li><a href="{{url('/forum/category/'.$category->id)}}">{{$category->category_name}}</a></li>
                @endforeach
              </ol> 

                   <!-- BEGIN TOP SEARCH -->
                    <div class="menu-search">
                      <span class="sep"></span>
                      <div class="search-box">
                         {{Form::open(array("url"=>"/forum/search", "method" => "POST"))}}
                          <div class="input-group">
                            <input type="text" name="topic_q" placeholder="Search Topic" class="form-control">
                            <span class="input-group-btn">
                            <button class="btn btn-primary" type="submit">Search</button>
                            </span>
                          </div>
                        {{Form::close()}}
                      </div> 
                    </div>
                    <!-- END TOP SEARCH -->


                </div> 
                {{Form::open(array("url"=>"/forum/savetopic","method" => "POST","role"=>"form"))}}
                <div class="form-group">
                    <label>Forum Title</label> 
                    {{Form::text('title','',array("class"=>"form-control", "placeholder"=>"Forum Title"))}}
                      <span>{{$errors->first('title')}}</span>
                </div>                   
                <div class="form-group">
                  {{ Form::label('', 'Topic') }}
                    {{Form::textarea('content','',array("class"=>"form-control", "placeholder"=>"Description"))}}            
                </div>
              </div>
              <div>
                <button type="submit" class="btn green btn-block ">Submit</button>
              </div>
              {{Form::close()}}
          </div>
        </div>
      </div>