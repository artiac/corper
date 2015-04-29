<html>
<head>  
  <style type="text/css">
  @page {
    margin: 23px auto auto auto;
  }
  .container_cv{
    font-size: 14px;
    width: 740px;    
    margin: 0 auto;
    font-family: Georgia;
  }
    .text4{
      font-size:2em;
      text-transform: uppercase;
      margin-top: 50px;
      font-weight: 800;
    }
    .container_cv hr{
      border-color: black;
      border-width: 2px;
      margin-top: 0px;
    }
    .section_cv{
    margin-top: 50px;
    display: inline-block;
  }
    .left{
      width: 100px;
      float: left;
      font-weight: 700; 
      padding: 0px 0px 8px 0px;
      min-width: 100px;
      margin-right: 20px;
  }
  .right{
    width: 620px;
    float: left;
  }
  
  
   .right-1{
   float: left;
    width: 50%;

  }
  .right-2{
    display: inline-block;
    float: right;
    width: 49%;
    text-align: right;
  }
  .clear{
    clear: both;
    height: 0;
  }
    
  </style>
</head>
  <body>
    <div class="container_cv">
       <div class="text4">{{$cv->full_name}}</div>
       <hr>  
           <div class="section_cv">            
              <div class="left">Contact</div>
              <div class="right">
               <div class="right-1">{{$cv->add_line1}}<br>{{$cv->add_line2}}</div>
               <div class="right-2"><b>E-mail:</b> {{$cv->email}}<br><b>Website:</b> {{$cv->website}}<br><b>Phone:</b> {{$cv->phone_num}}</div>
              </div>             
            </div> 
       <div class="clear"></div>
      @foreach($sections as $section)
        @if($section->type == 0) 
          @if($section->content !== '')
            <div class="section_cv">
              <div class="left">{{$section->section_name}}</div>
              <div class="right">{{$section->content}}</div>
              <div class="clear"></div>
            </div>
            <div class="clear"></div>
          @endif
        @elseif($section->type == 1)
          @if(sizeof($workex)>0)
            <div class="section_cv">            
              <div class="left">{{$section->section_name}}</div>
              <div class="right">
                <table style="width:100%;">
                  @foreach($workex as $work)
                    <tr>
                        <td><b>{{$work->company}}, {{$work->location}}</b></td>
                        <td align="right"><b>{{$work->startdate}} - {{$work->enddate}}</b></td> 
                      </tr>  
                      <tr>  <td colspan="2">   
                      <span>{{$work->title}}</span><br>
                      {{$work->otherinfo}}</td>
                    </tr>
                  @endforeach
                </table>
              </div>             
            </div>
             <div class="clear"></div>
          @endif
        @elseif ($section->type == 2)
           @if(sizeof($education)>0) 
           <div class="section_cv">
              <div class="left">{{$section->section_name}}</div>
              <div class="right">
                <table style="width:100%;">
                @foreach($education as $edu) 
                    <tr>
                       <td><b>{{$edu->coursename}}</b></td>
                      <td align="right"><b>{{$edu->startdate}} - {{$edu->enddate}}</b></td>
                    </tr>
                      <tr>  <td colspan="2">   
                      <span>{{$edu->institutename}}, {{$edu->location}}</span><br>
                      {{$edu->otherinfo}}</td>
                    </tr>
                @endforeach
              </table>
            </div>
            </div>
             <div class="clear"></div>            
          @endif
        @elseif ($section->type == 3)
            @if(sizeof($nysc)>0)
             <div class="section_cv">
                <div class="left">{{$section->section_name}}</div>
                <div class="right">
                  <table style="width:100%;">
                   @foreach($nysc as $ny)
                   <tr>
                      <td><b>{{$ny->ppa}}</b></td>
                       <td align="right"><b>{{$ny->start_date}} - {{$ny->end_date}}</b></td>
                   </tr>   
                    @endforeach
                    </table>
             <div class="clear"></div>
                 </div>             
            </div>
             <div class="clear"></div>            
           @endif
            @elseif ($section->type == 4)
            @if(sizeof($language)>0)
             <div class="section_cv">
                <div class="left">{{$section->section_name}}</div>
                <div class="right">
                  <table style="width:100%;">
                    @foreach($language as $lang)                   
                      <tr>
                        <td style="width:30%"><b>{{$lang->language}}</b></td>
                        <td style="width:30%">{{$lang->ability}}</td>
                        <td align="right">{{$lang->level}}</td>
                      </tr>     
                    @endforeach
                  </table>
                    <div class="clear"></div>            
                </div>             
            </div>
            <div class="clear"></div>            
           @endif
         @endif
        @endforeach 
    </div>
  </body>
</html>