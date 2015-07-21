<?php

class UserprofileController extends BaseController {
    
    protected $layout = 'profile.layout';

    public function getProfile(){
        $this->layout->title = 'Corpers Profile';
        $this->layout->description = 'NYSC corpers can personalise their experience by logging into the Dashboard and editing their Corperlife profiles.';
        $this->layout->keywords = 'the Dashboard, corpers, corperlife profiles';
        $this->layout->top_active = 2;
        $states = DB::table('states')->lists('state','id');
        $user = User::find(Auth::id());
        if($user->profile_pic == '') $user->profile_pic = 'assets/avatars/default.png';
        $this->layout->main = View::make("profile.pi.index",array("states"=>$states,"user"=>$user));
    }

   
    public function getChecklistGuide(){
        $this->layout->title = 'Corpers Resources';
        $this->layout->description = 'These are official Corperlife Tips and guides provided to help corpers through the NYSC experience.';
        $this->layout->keywords = 'NYSC Guides, NYSC tips, Corpers';
        $this->layout->top_active = 3;
        $this->layout->main = View::make("profile.pi.checklist");
    }

    public function getknowledge(){
        $this->layout->title = 'Corpers Knowledge Bank';
        $this->layout->description = 'Visit the Corperlife knowledge bank to get all NYSC related questions answered.';
        $this->layout->keywords = 'NYSC, questions, knowledge bank';
        $this->layout->top_active = 5;
        $categories = DB::table('qus_category')->get();
        $questions = DB::table('member_qus')->orderBy('member_qus.category_id','asc')->get();
        $terms = DB::table('terms_definitions')->get();
        if(Input::has('tab')) $tab = Input::get('tab');
        else $tab = 1;
        if(Input::has('query') && Input::has('query')!= '' ){
            $query = Input::get('query');
            $query_results = DB::table('member_qus')->where('question','LIKE',"%".$query."%")->orWhere('answer','LIKE',"%".$query."%")->get();
            $term_results = DB::table('terms_definitions')->where('term','LIKE',"%".$query."%")->orWhere('definition','LIKE',"%".$query."%")->get();
        } else {
            $query = '';
            $query_results = [];
            $term_results = [];
        }
        $this->layout->main = View::make("profile.pi.knowledge",["tab"=>$tab,"categories"=>$categories,"questions" => $questions,'terms'=>$terms,'query'=>$query,'query_results'=>$query_results,'term_results'=>$term_results]);
    }
     public function getcvpage(){
        $this->layout->title = 'Your Saved CVs';
        $this->layout->description = 'Find the CVs/resumes you created using the Corperlife CV builder here.';
        $this->layout->keywords = 'CV builder, CVs, corperlife';
        $this->layout->top_active = 6;
        $cvs = Cv::where('user_id',Auth::id())->get();
        $this->layout->main = View::make("profile.pi.cv-page",['cvs'=>$cvs]);
    }

    public function putSavePI(){
        $cre = [
            'firstname' => Input::get('firstname'),
            'sex' => Input::get('sex')      
        ];
        $rules = [
            'firstname' => 'required',
            'sex' => 'required|not_in:0' 
        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){
                $user = User::find(Auth::id());
                $user->firstname = Input::get('firstname');
                $user->lastname = Input::get('lastname');
                $user->profilename = Input::get('profilename');
                $user->sex = Input::get('sex');
                $user->serv_state = Input::get('serv_state');
                $user->origin_state = Input::get('origin_state');
                $user->state_code = Input::get('state_code');
                $user->lg = Input::get('lg');
                $user->profile_pic = Input::get('profile_pic');
                $user->save();
                return Redirect::to('/profile');
                      
         }else {
            return Redirect::Back()->withErrors($validator)->withInput();
        }
    }

    public function deleteCV($code){
        $cv = Cv::where('cv_code',$code)->first();
        if($cv->exists){
            if($cv->user_id != Auth::id()){
                return Redirect::Back()->with('fail','You are not authorized to delete this CV');
            } else {
                $cv_id = $cv->id;
                Cv::find($cv_id)->delete();
                Education::where('cv_id',$cv_id)->delete();
                Language::where('cv_id',$cv_id)->delete();
                Nysc::where('cv_id',$cv_id)->delete();
                Section::where('cv_id',$cv_id)->delete();
                WorkExperience::where('cv_id',$cv_id)->delete();
                return Redirect::Back()->with('success','CV is successfully deleted');
            }
        } else {
            return Redirect::Back()->with('fail','You are not authorized to delete this CV');
        }
    }

    public function postsave(){
        $cre = [
            'username' => Input::get('username'),
            'password' => Input::get('password'),
            'name' => Input::get('name'),
            'email' => Input::get('email'),
            'phone' => Input::get('phone'),
            'website' => Input::get('website'),            
        ];
        $rules = [
           
        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){

                $id = DB::table("account")->insertGetID(array('firstname'=>Input::get("firstname"),'lastname'=>Input::get("lastname"),'sex'=>Input::get("sex"),
                    'phone'=>Input::get("phone"),'address'=>Input::get("address"),'city'=>Input::get("city"),'homestate'=>Input::get("homestate"),'degree'=>Input::get("degree")));
               
                return Redirect::to('/account');
                      
         }else {
            return Redirect::Back()->withErrors($validator)->withInput();
        }
    }

    public function postAskQuestion(){
        $cre = [
            'name' => Input::get('name'),
            'message' => Input::get('message')          
        ];
        $rules = [
           'name' => 'required',
            'message' => 'required'
        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){

            require app_path().'/mail.php';
            require app_path().'/libraries/PHPMailerAutoload.php';
            $mail = new PHPMailer;
            $mail_text = new Mail;
            $mail->isMail();
            $mail->setFrom('info@corperlife.com', 'Corper Life');
            $mail->addAddress('questions@corperlife.com');
            $mail->isHTML(true);
            $mail->Subject = "Ask Question | Corper Life";
            $mail->Body = $mail_text->ask_question(Input::get("name"),Auth::user()->username, Input::get("message"));
            if(!$mail->send()) {
                return 'Mailer Error: ' . $mail->ErrorInfo;
            }
            return Redirect::to('/knowledge?tab=2')->with('mail-send','Your Message has been successfully received by us.');
         }else {
            return Redirect::to('/knowledge?tab=2')->withErrors($validator)->withInput();
        }
    }

    public function nyscDetails(){
        $title = 'Corpers Profile | NYSC Details';
        $description = 'NYSC corpers can personalise their experience by logging into the Dashboard and editing their Corperlife profiles';
        $keywords = 'the Dashboard, corpers, corperlife profiles';
        $this->layout->top_active = 2;
        $states = DB::table('states')->lists('state','id');
        $user = User::find(Auth::id());
        return View::make('main',array("main"=>View::make('profile.nysc-details'),"title"=>$title,"description"=>$description,"keywords"=>$keywords));
    }

    public function putnyscDetails(){
        $cre = [
            'serv_year' => Input::get('service_year'),
            'batch' => Input::get('batch')      
        ];
        $rules = [
            'serv_year' => 'required|not_in:0',
            'batch' => 'required|not_in:0'
        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){
            $user = User::find(Auth::id());
            $user->serv_year = Input::get('service_year');
            $user->batch = Input::get('batch');
            $user->save();
            return Redirect::to('/profile');            
        } else {
            return Redirect::Back()->withErrors($validator)->withInput();
        }
    }

    public function changePassword(){
        $this->layout->title = 'Corpers Profile | Change password';
        $this->layout->description = 'NYSC corpers can personalise their experience by logging into the Dashboard and editing their Corperlife profiles.';
        $this->layout->keywords = 'the Dashboard, corpers, corperlife profiles';
        $this->layout->top_active = 2;
        $user = User::find(Auth::id());
        if($user->profile_pic == '') $user->profile_pic = 'assets/avatars/default.png';
        $this->layout->main = View::make("profile.pi.change-password",array("user"=>$user));
    }

    public function putChangePassword(){
        $credentials = [
            'old_password' => Input::get('old_password'),
            'new_password' => Input::get('new_password'),
            're_new_password' => Input::get('re_new_password')
        ];
        $rules = [
            'old_password' => 'required',
            'new_password' => array('required', 'min:8'),
            're_new_password' => array('required')
        ];
        $validator = Validator::make($credentials, $rules);
        if ($validator->passes()) { 
            if (Hash::check(Input::get('old_password'), Auth::user()->password )) {
                if(Input::get('new_password') === Input::get('re_new_password')){
                    $password = Hash::make(Input::get('new_password'));
                    $user = User::find(Auth::id());
                    $user->password = $password;
                    $user->save();
                    return Redirect::back()->withInput()->with('success', 'Password successfully changed');
                } else return Redirect::back()->withInput()->with('failure', 'New passwords does not match.');
            } else {
                return Redirect::back()->withInput()->with('failure', 'Old password does not match.');
            }
        } else {
            return Redirect::back()->withErrors($validator)->withInput();
        }
    }
}
    