<?php

class UserprofileController extends BaseController {
    protected $layout = 'profile.layout';

    public function getProfile(){
        $this->layout->title = 'Corper Life | User Profile';
        $this->layout->top_active = 2;
        $states = DB::table('states')->lists('state','id');
        $user = User::find(Auth::id());
        if($user->profile_pic == '') $user->profile_pic = 'assets/avatars/default.png';
        $this->layout->main = View::make("profile.pi.index",array("states"=>$states,"user"=>$user));
    }

    public function getChecklistGuide(){
        $this->layout->title = 'Corper Life | Checklist & Guide';
        $this->layout->top_active = 3;
        $this->layout->main = View::make("profile.pi.checklist");
    }

    public function getknowledge(){
        $this->layout->title = 'Corper Life | Knowledge Bank';
        $this->layout->top_active = 5;
        $this->layout->main = View::make("profile.pi.knowledge");
    }
     public function getcvpage(){
        $this->layout->title = 'Corper Life | CV';
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
}
    