<html>
<head>

  <style type="text/css">
  @page {
    margin: 23px auto auto auto;
  }
 @font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: normal;
  src: local('Open Sans'), local('OpenSans'), url(http://themes.googleusercontent.com/static/fonts/opensans/v7/yYRnAC2KygoXnEC8IdU0gQLUuEpTyoUstqEm5AMlJo4.ttf) format('truetype');
}
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: bold;
  src: local('Open Sans Bold'), local('OpenSans-Bold'), url(http://themes.googleusercontent.com/static/fonts/opensans/v7/k3k702ZOKiLJc3WVjuplzMDdSZkkecOE1hvV7ZHvhyU.ttf) format('truetype');
}
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: normal;
  src: local('Open Sans Italic'), local('OpenSans-Italic'), url(http://themes.googleusercontent.com/static/fonts/opensans/v7/O4NhV7_qs9r9seTo7fnsVCZ2oysoEQEeKwjgmXLRnTc.ttf) format('truetype');
}
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: bold;
  src: local('Open Sans Bold Italic'), local('OpenSans-BoldItalic'), url(http://themes.googleusercontent.com/static/fonts/opensans/v7/PRmiXeptR36kaC0GEAetxrQhS7CD3GIaelOwHPAPh9w.ttf) format('truetype');
}

  .container_cv{
    font-size: 14px;
    width: 740px;
    margin: 0 auto;
    font-family: 'Open Sans';
    line-height: 1.2;
    font-weight: normal;
  }
  .container_cv p{
    line-height: 1.5;
    text-align: justify;
  }
  .text4{
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
  }
  .container_cv hr{
      margin-top: 0px;
      border-width: 1px;
  }

  .section_cv{
    margin-top: 10px;
  }
  .left{
    width: 50%;
    display: inline-block;
    float: left;
  }
  .right{
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
  </style>
</head>
  <body>
    <div class="container_cv">
        <div class="text4">{{$cv->full_name}}</div> 
          <div class="section_cv">
            <div class="left">
              <span class="bold text1">E-mail:</span> {{$cv->email}} <br>
              <span class="bold text1">Phone:</span> {{$cv->phone_num}}
            </div>
            <div class="right">
              <span class="bold text1">Website:</span> {{$cv->website}}<br>
              <span class="bold text1">Address:</span> {{$cv->add_line1}}<br>{{$cv->add_line2}}
            </div>
            <div class="clear"></div>
          </div>
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
                  <div class="left"><span class="bold text2">{{$work->company}}, {{$work->location}}</span></div>
                  <div class="right"><span class="bold text3">{{$work->startdate}} - {{$work->enddate}}</span></div>        
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
                    <div class="left"><span class="bold text2">{{$edu->coursename}}</span></div>
                    <div class="right"><span class="bold text3">{{$edu->startdate}} - {{$edu->enddate}}</span></div>
                    <div class="data-inner">
                    <span class="bold text1">{{$edu->institutename}}, {{$edu->location}}</span><br>
                    {{$edu->otherinfo}}
                    </div>
                  </div>    
                @endforeach
                </div> 
            @endif
          @elseif ($section->type == 3)
             @if(sizeof($nysc)>0)
             <div class="section_cv">
              <div class="text5">{{$section->section_name}}</div>
              <hr>
            @foreach($nysc as $ny)
              <div class="cont-inner">
                <div class="left"><span class="bold text1">{{$ny->ppa}}</span></div>
                <div class="right"><span class="bold text3">{{$ny->start_date}} - {{$ny->end_date}}</span></div>
              </div>
            @endforeach
             </div> 
          @endif
           @elseif ($section->type == 4)
             @if(sizeof($language)>0)
             <div class="section_cv">
              <div class="text5">{{$section->section_name}}</div>
              <hr>
            @foreach($language as $lang)
              <div class="cont-inner">
                <div class="left"><span class="bold text1">{{$lang->language}}</span></div>
                <div align="center"><span class="bold text3">{{$lang->ability}}</span></div>
                <div class="right"><span class="bold text3"> {{$lang->level}}</span></div>
              </div>
            @endforeach
             </div> 
          @endif
        @endif
        @endforeach 
    </div>
  </body>
</html>