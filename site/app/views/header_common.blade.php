<!-- BEGIN HEADER -->
<div class="header">
  <div class="container">                  
    <a class="site-logo" href="{{url('/')}}">{{HTML::image('assets/img/logos/Final-Logo1.png','logo')}}</a>
    <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>
    <!-- BEGIN NAVIGATION -->
    <div class="header-navigation pull-right font-transform-inherit">
      <ul>
        <li class="close-button"><a href="{{url('/')}}" class="close-menu"><i class="fa fa-remove"></i></a></li>
        <li><a href="{{url('/')}}">Home</a></li>                     
        <li><a href="{{url('/ourstory')}}">Our Story</a></li>
         <li><a href="{{url('/faq')}}">FAQ</a></li>    
        <!-- BEGIN TOP SEARCH -->
        @if(Auth::check())
        <li>
            <a href="{{URL('/profile')}}" style="color:#1caf9a">{{HTML::image('assets/img/avatar1.jpg','logo',array("class"=>"img-circle hidden-xs hidden-sm pull-right","style"=>"margin-top:-5px;height:30px; margin-left:10px"))}}
            <span class="username">{{Auth::user()->username}}</span></a>
        </li>
        @endif
        <!-- END TOP SEARCH -->
      </ul>
    </div>  
    <!-- END NAVIGATION -->
  </div>
</div>
<!-- Header END -->