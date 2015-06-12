<html>
<head>
  <style type="text/css">
  @page {
    margin: 23px auto auto auto;
  }
  .container_cv{
    font-size: 14px;
    width: 700px;
    margin: 0 auto;
    font-family: Georgia, serif !important;
    padding: 20px 0;
  }

  .cv-name{
      font-size: 36px;
      font-weight: bold;
      text-transform: uppercase;
      text-align: center;
      color:#888;
  }
  .text5{
    font-weight: bold;
    font-size: 28px;
    margin: 0 0 5px 0;
    color:#555;
    text-align: center;
  }
  .container_cv hr{
      margin-top: 0px;
      border-width: 1px;
      border-color: #555;
  }

  .section_cv{
    margin-top: 30px;
  }
   .cv-image{
      width: 22% !important;
      text-align: left;
      display: inline-block;
    float: left;
    }
    .cv-image img{
      width: 150px;
      height: 150px;
      border: 2px solid #EEE;
      padding: 2px;
    }
  .left{
    width: 35%;
    display: inline-block;
    float: left;
  }
  .right{
    display: inline-block;
    float: right;
    text-align: right;
    min-width: 100px;
  }
  .center{
    display: inline-block;
    text-align: center;
    width: 292px;
  }
  .cv-detail-1{
    display: inline-block;
    text-align: center;
    width: 45%;
    float: left;
  }
  .cv-detail-2{
    float: left;
    text-align: right;
    width: 33%;
  }
  .left-1{
    width: 51%;
    display: inline-block;
  }
  .right-1{
    width: 49%;
    display: inline-block;
    float: right;
    text-align: right;
  }
  .data-inner{
    clear: both;
  }
  .cont-inner{
    margin-top: 10px;
  }
  .clear{
    clear: both;
    height: 0;
  }
  .bold{
    font-weight: bold;
  }
  .text1{
    font-size: 16px;
  }
  .text2{
    font-size: 18px;
  }
  .text3{
    font-style: italic;
  }
  .lang-1{
    width: 30%;
    display: inline-block;
    float: left;
  }
  .lang-2{
    width: 30%;
    float: left;
    display: inline-block;
  }
  </style>
</head>
  <body>
    <div class="container_cv">
        <div class="cv-name">{{$cv->full_name}}</div> 
          <div class="section_cv">
              @if($cv->show_profile_pic == 1)
                <div class="cv-image">{{HTML::image($cv->profile_image,'cv picture')}}</div>
              @endif
            <div class="cv-detail-1">
              <span class="bold text1">Address:</span> {{$cv->add_line1}}<br>{{$cv->add_line2}}<br>
              <span class="bold text1">Email:</span> {{$cv->email}}<br>
              <span class="bold text1">Website:</span> {{$cv->website}}<br>
              <span class="bold text1">Phone:</span> {{$cv->phone_num}}
            </div>
            <div class="cv-detail-2">
              <span class="bold text1">State of Origin:</span> {{$cv->state}}<br>
              <span class="bold text1">Religion:</span> {{$cv->religion}}<br>
              <span class="bold text1">Local Government:</span> {{$cv->local_government}}            
            </div>           
          </div>
           <div class="clear"></div>
        @foreach($sections as $section)
          @if($section->type == 0)
            @if($section->content !== '')
            <div class="section_cv">
              <div class="text5">{{$section->section_name}}</div>
               <hr>
              <p>{{$section->content}}</p>
            </div>        
            @endif
          @elseif($section->type == 1)
            @if(sizeof($workex)>0)
              <div class="section_cv">
                <div class="text5">{{$section->section_name}}</div> 
                <hr>    
                @foreach($workex as $work)
                <div class="cont-inner">
                  <div class="left-1"><span class="bold text2">{{$work->company}}, {{$work->location}}</span></div>
                  <div class="right-1"><span class="bold text3">{{$work->startdate}} - {{$work->enddate}}</span></div>        
                  <div class="data-inner">
                    <span class="bold text1">{{$work->title}}</span><br>
                    {{$work->otherinfo}}       
                  </div>
                </div>
                 @endforeach
              </div>
            @endif
          @elseif ($section->type == 2)
           @if(sizeof($education)>0)
              <div class="section_cv">
                <div class="text5">{{$section->section_name}}</div>          
                <hr>
                  @foreach($education as $edu)
                  <div class="cont-inner">
                    <div class="left-1"><span class="bold text2">{{$edu->coursename}}</span></div>
                    <div class="right-1"><span class="bold text3">{{$edu->startdate}} - {{$edu->enddate}}</span></div>
                    <div class="data-inner">
                    <span class="bold text1">{{$edu->institutename}}, {{$edu->location}}</span><br>
                    {{$edu->otherinfo}}
                    </div>
                  </div>    
                @endforeach
                </div> 
                <div class="clear"></div>
            @endif
          @elseif ($section->type == 3)
             @if(sizeof($nysc)>0)
             <div class="section_cv">
              <div class="text5">{{$section->section_name}}</div>
              <hr>
            @foreach($nysc as $ny)
              <div class="cont-inner-1">
                <div class="left-1"><span class="bold text1">{{$ny->ppa}}</span></div>
                <div class="right-1"><span class="bold text3">Batch: {{$ny->batch}} <br>Year: {{$ny->year}}</span></div>              
              </div>
            @endforeach
            <div class="clear"></div>
             </div>
          @endif
             @elseif ($section->type == 4)
             @if(sizeof($language)>0)
             <div class="section_cv">
              <div class="text5">{{$section->section_name}}</div>
              <hr>
            @foreach($language as $lang)
              <div class="cont-inner-1">
                <div class="lang-1"><span class="bold text1">{{$lang->language}}</span></div>
                <div align="center" class="lang-2"><span class="bold text3">{{$lang->ability}}</span></div>
                <div align="right"><span class="bold text3">{{$lang->level}}</span></div>              
              </div>
            @endforeach
            <div class="clear"></div>
             </div>
          @endif
        @endif
        @endforeach   
    </div>
  </body>
</html>
