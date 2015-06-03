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
            return Redirect::to('/knowledge?tab=2')->with('mail-send','Your Message has been successfully received by us.');
         }else {
            return Redirect::to('/knowledge?tab=2')->withErrors($validator)->withInput();
        }
    }
}
    