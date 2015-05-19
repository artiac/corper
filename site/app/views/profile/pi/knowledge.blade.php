@include('profile.adv')
<div class="portlet light">
  <div class="portlet-body">
    <ul class="nav nav-tabs profile-tab">
      <li @if($tab == 1) class="active" @endif>
        <a href="#tab_1_1" data-toggle="tab">
        Knowledge Bank </a>
      </li>
      <li @if($tab == 2) class="active" @endif>
        <a href="#tab_1_2" data-toggle="tab">
        Ask a question? </a>
      </li>
    </ul>
    <div class="tab-content">
      <div class="tab-pane fade @if($tab == 1) active in @endif" id="tab_1_1">
        <div class="portlet-body">
          <ul class="nav nav-pills">
            <li class="active">
              <a href="#tab_2_1" data-toggle="tab">
              General</a>
            </li>
            <li>
              <a href="#tab_2_2" data-toggle="tab">
              Registration</a>
            </li>
            <li>
              <a href="#tab_2_3" data-toggle="tab">
              Camp </a>
            </li>
            <li>
              <a href="#tab_2_4" data-toggle="tab">
              Serving </a>
            </li>
            <li>
              <a href="#tab_2_5" data-toggle="tab">
              Passing out </a>
            </li>
             <li>
              <a href="#tab_2_6" data-toggle="tab">
              Terms and Definitions  </a>
            </li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane fade active in" id="tab_2_1">
              <div class="qus_ans">
                <div class="qus">What Is Nysc?</div>
                <div class="ans">
                  <ul>
                    <li>
                      We are guessing you’re new here, Welcome! NYSC stands for  National Youth Service Corps. It was initiated on May 1973 as way to unite the people of this country following the civil war. It has since been repurposed as a means to allow graduates  to help build our nation and become patriotic.
                    </li>
                  </ul>
                </div>              
                <div class="qus">What if I lose my NYSC ID card?</div>
                  <div class="ans">
                    <ul>
                      <li>
                        Better start re-applying for next batch. Haha just kidding. Report to your state secretariat to get issued a new one, you may be told to pay a fine and expect the process to be long. 
                      </li>
                    </ul>
                  </div>
                <div class="qus">What happens If I’m caught Breaking rules </div>
                  <div class="ans">
                    <ul>
                      <li>
                        Depends. Punishment ranges from fines and extension of service to even police arrest depending on how bad you messed up. Save yourself stress and…...dont be wrong!
                      </li>
                    </ul>
                  </div>
                <div class="qus">I need to travel abroad</div> 
                <div class="ans">
                  <ul>
                    <li>
                      We would recommend getting written permission from your state coordinator however, try letting your LGI (Local Government Inspector) know first…..hopefully you guys are pals.
                    </li>
                  </ul>
                </div>              
              </div>
            </div>
            <div class="tab-pane fade" id="tab_2_2">
              <div class="qus_ans">
               <div class="qus">Where do I register for NYSC</div>
                <div class="ans">
                  <ul>
                    <li>If you attended a Nigerian university:  you’ll take care of your NYSC Registration before graduation. If you’re not registered then maybe your graduation wasn’t legit.
                        If you attended a foreign university: you’ll have to go to Abuja for your NYSC Registration (sucks for you). Check out our Official CorperLIfe™ NYSC Registration Guide & Checklist, it just might save you from having to make this trip multiple times.</li>
                  </ul>
                </div>
                <div class="qus">What if I lost my passport or academic credentials</div>
                <div class="ans">
                  <ul>
                      <li>You have to get a police report from the country where you lost it, or ask really nicely from our local police 
                     You also have to get a sworn affidavit saying that you lost it 
                     You will also require documents that confirm your identity and show information that was in the lost document</li>
                  </ul>
                </div>
                <div class="qus">What happens if I am Married</div>
                <div class="ans">
                  <ul>
                    <li>
                      You will be posted to the same state where you spouse resides. You have to take your marriage certificate and evidence of change of name. We also advise that you take documents that prove your spouse does indeed reside in the state you want to be posted to e.g utility bills.
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="tab_2_3">
              <div class="qus_ans">
                     <div class="qus">Is it safe to take my Smartphone to camp</div>
                <div class="ans">
                  <ul>
                    <li>
                      Definately!! just dont leave it unattended. Camp can be pretty boring sometimes so you’ll  need a quick fix of angry birds ® or Fruit Ninja ®… More importantly how else are you going to use CorperLife™!?!?!?!
                    </li>
                  </ul>
                </div>
                <div class="qus">I forgot to bring (insert item here) to camp</div>
                <div class="ans">
                  <ul>
                    <li>
                      Where there’s Mami….there’s a way. You can honestly find everything you need at Mami Market. We know a guy who went with only his documents, atm card and a bucket and survived.. true story.
                    </li>
                  </ul>
                </div>
                <div class="qus">What Shouldn't I bring to Camp?</div> 
                <div class="ans">
                  <ul>
                    <li> Alcohol, Laptops, heavy duty hair equipment (e.g blower, flat-iron, dryer), Pressing Iron, weapons (obviously) </li>
                  </ul>
                </div>
                <div class="qus">Can I “sleep-in” during morning parade?</div>
                <div class="ans"> 
                  <ul>
                    <li>
                      CorperLife™ cannot endorse skipping parade as it is part of the experience. If you’re caught you might have water poured on you and/or your bed…. true story. A good option is joining a special group on camp like red cross or OBS and you might sit it out.
                    </li>
                  </ul>
                </div>
                <div class="qus">Camp food sucks.. what do I do</div>
                <div class="ans"> 
                  <ul>
                    <li>
                       Two options….Go to  Mami Market, you can find almost everything you want there. from cotton candy to pepper soup. Your second option is to call it quits and go collect Exeat!
                    </li>
                  </ul>
                </div>
                <div class="qus"></div>What do I do when my “Kit don't fit”
                <div class="ans">
                  <ul>
                    <li> 
                      First of all, try to find another Corper With same issue and see if you can swap kits. If you can't do this, there are tailors and Cobblers in Mami Market that can alter anything.
                    </li>
                  </ul>
                </div>
                <div class="qus">I’m pregnant! What happens now?</div>
                <div class="ans">
                  <ul>
                    <li>CONGRATULATIONS!! Hopefully you didn't get pregnant in camp lol! 
                      Camp is no place for pregnant/nursing mothers, so you’ll probably get decamped within the first couple of days. Ask around and go to the office to collect an exeat.
                    </li>
                   </ul>
                </div>
                <div class="qus">I have lost my (insert item here)</div>
                <div class="ans"> 
                  <ul>
                    <li> 
                      Hopefully your (insert item here) isn’t valuable enough to have been stolen. There is a good chance that a good samaritan has picked up your (insert item here) and given it to OBS (Orientation Broadcasting service). This is why you must make you right your ID number on your things.
                    </li>
                   </ul>
                </div>
                <div class="qus">How do I clean my shoes?</div>
                  <div class="ans"> 
                    <ul>
                      <li> If they get to dirt you can soak them bleach and then scrub out the dirt later. Please do yourself a favour, put away your state issued shoes and buy the white rubber shoes sold in the mami market. They are super easy to clean.
                           The jungle boots can take a beating…..just scrub the hell out of it. Use polish on the soles if you care to look excessively clean.
                      </li>
                    </ul>
                  </div>
                  <div class="qus">I am truly feeling sick. what do I do?</div>
                    <div class="ans">
                      <ul>
                        <li>Sorry to hear this! :(Head over to the clinic ASAP. It is staffed with a collaboration of Corpers who graduated from medical school and some professional medics. Treatment and medication are free. 
                          If you still aren’t feeling 100% you should consider grabbing an exeat so you can go recuperate at home. hope you feel better soon.
                        </li>
                      </ul>
                    </div>
                    <div class="qus">How do I leave camp?</div>
                  <div class="ans"> 
                    <ul>
                      <li>
                        First of all, are you sure you want to leave? No NYSC experience is complete without camp and you really don't want to miss out on this opportunity to make new friends and grow your network. If you’re just not “feeling it” or have a legitimate reason for wanting to leave then by all means go home.You just go to the office and give them a reason. It is pretty easy to get an exeat, they almost hand those things out.
                       </li>
                    </ul>
                  </div>
                  <div class="qus">How do I “fix” my PPA?</div>
                  <div class="ans">
                    <ul>
                      <li> Get a couple of companies that you know will guarantee you a position. (the job you’re going for MUST be related to your degree) Get an Introduction Letter from the company of you choice, saying that they have an opening would love to have you.
                         There should be an office in your camp that you can submit the letter and hopefully get it approved.
                      </li>
                    </ul>
                  </div>
                </div>
                  <div class="disclaim">(Disclaimer:-This is not 100% effective as the Government has been quite strict about posting corpers to schools lately, but it is worth a shot)
                  </div>
              </div>
             <div class="tab-pane fade" id="tab_2_4">
              <div class="qus_ans">
                     <div class="qus">I got Rejected from my PPA, what do I do?</div>
                <div class="ans"> 
                  <ul>
                    <li>
                      Take the rejection letter to your local Government office. You might have to go out and find another PPA yourself. Hint….. You local government could be a good start, they usually give corpers ample time to engage in personal projects that can boost your career. 
                    </li>
                  </ul>
                </div>
                <div class="qus">I got Accepted by my PPA, what do I do?</div>
              <div class="ans">
                <ul>
                  <li>
                   take the acceptance letter directly to your LG. Make sure you make photocopies of your posting and acceptance letter for both your records and your Lg. You should also carry the rest of the things listed on the Official CorperLife™ serving (PPA) Checklist.
                  </li>
                </ul>
              </div>
              <div class="qus">Who Gives me money?</div>
              <div class="ans"> 
                <ul>
                  <li>
                    Corpers Get paid from two sources; the Federal government, and their PPA (salaree just kidding its Salary).</li>
                </ul>
              </div>
              <div class="qus">How do I get Paid?</div>
                <div class="ans">
                  <ul>
                    <li>
                      Your allowee is deposited in your assigned bank. You typically find out which bank this is during camp and go there afterwards to register your account. Make sure your account number is easily accessible to you because you will need to write it down everytime you do clearance to get paid.
                      Your Salary comes from you PPA. Check the HR or accounting office to find out where and when you get paid.</li>
                  </ul>
                </div>
                <div class="qus">What do I wear, now that I’m serving?</div>
              <div class="ans"> 
                <ul>
                  <li>
                    When you start working at your PPA you can wear normal clothes (Mufti). However when ever you have business to take care of in you Local govt office (e.g clearance or CD) wear your NYSC kit i.e either white shoes or jungle boots, a white round neck shirt and khaki pants. The crested shirt, Khaki jacket and cap are optional.
                  </li>
                </ul>
              </div>
              <div class="qus">I havent gotten My Allowee, what do I do?</div>
              <div class="ans"> 
                <ul>
                  <li>
                    Corpers don’t mess with Allowee. This could be caused by a number of issues like failure to do clearance and incorrect bank info written on clearance form.  First of all check to see if other corpers with the same bank have gotten an alert. If they haven't, let you LGI know and you can quickly diagnose and fix the problem. Do this as soon as you notice so that you don't miss another one.
                  </li>
                </ul>
              </div>
              <div class="qus">I need to travel out</div>
              <div class="ans">
                <ul>
                  <li>
                    Don't just leave!! you will cause a lot of stress for yourself, tell your LGI (hopefully you followed our advice and became really good friends), they will best know how to handle the issue and save you stress and sometimes money. Make sure you plan ahead and don’t miss any important days. 
                  </li>
                </ul>
              </div>               
            </div>
            </div>
            <div class="tab-pane fade" id="tab_2_5">
              <div class="qus_ans">
                     <div class="qus">What do I need to do?</div>
                <div class="ans"> 
                  <ul>
                    <li> Everything you need to know about Passing Out will be found in the CorperLife™ Guide.</li>
                  </ul>
                </div>
                <div class="qus">Where is my POP ceremony</div>
                <div class="ans"> 
                  <ul>
                    <li>
                      Wow, if you are really asking this then you are still an Otondo! Contact your LGi, a friend or post it on the forum and find out. Be responsible and don't miss it!
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="tab_2_6">
                <div class="terms">
                <ul>
                  <li><b>Allowee</b>:-  Allowance paid every month from Government</li>
                  <li><b>Book of Life</b>:- Its is a real, huge book signed in camp by all corpers.</li>
                  <li><b>CD</b>:- Community Development by an individual, couple or group.</li>
                  <li><b>CD card</b>:- A card you attach a passport pic to, that is signed by LGI after CD day is over.</li>
                  <li><b>Clearance</b>:- Turning in a letter from your employer every month to get paid</li>
                  <li><b>LGI</b>:- Local Government Inspector</li>
                  <li><b>OBS</b>:- Orientation Broadcasting service (Camp announcement group)</li>
                  <li><b>POP</b>:- (Passing Out Parade) the end of your NYSC year.</li>
                  <li><b>Platoon</b>:- In camp corpers are split into groups called platoons</li>
                  <li><b>Posting Letter</b>:- This letter tells you where you have originally been posted.</li>
                  <li><b>PPA</b>:- Place of Primary Assignment</li>
                  <li><b>NYSC</b>:- National Youth Service Corps……..thats what your doing!</li>
                  <li><b>Otondo</b>:- Friendly word for new Corper but some say it actually means Mumu</li>
                  <li><b>SAED</b>:- Skills Acquisition and Entrepreneurship Development</li>
                  <li><b>“You are wrong”</b>:- Used in camp by soldiers if you're in the wrong place or doing the wrong thing.</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane fade @if($tab == 2) active in @endif " id="tab_1_2">
        {{Form::open(array('url'=>'/knowledge/askquestion','method' => 'POST','class'=>'form-horizontal'))}}
          <div class="form-body">
            @if(Session::has('mail-send'))
              <div class="alert alert-success">{{Session::get('mail-send')}}</div>
            @endif
            <div class="form-group">
              {{ Form::label('', 'Your Name', array('class' => 'col-md-3 control-label')) }}                   
              <div class="col-md-9">
                {{Form::text('name',Auth::user()->firstname.' '.Auth::user()->lastname,array("class"=>"form-control"))}}
                <span class="error">{{$errors->first('name')}}</span>
              </div>
            </div>

            <div class="form-group">
              {{ Form::label('', 'Your Message', array('class' => 'col-md-3 control-label')) }}                   
              <div class="col-md-9">
                {{Form::textarea('message','',array("class"=>"form-control"))}}
                <span class="error">{{$errors->first('message')}}</span>
              </div>
            </div>

            <div class="form-group">
              {{ Form::label('', '', array('class' => 'col-md-3 control-label')) }}                   
              <div class="col-md-9">
                {{Form::submit('Submit',array("class"=>"btn blue"))}}
              </div>
            </div>
          </div>
        {{Form::close()}}
      </div>
    </div>
  </div>
</div>