<?php

class UserController extends BaseController {
    public function postLogin(){
        $cre = [
            'username' => Input::get('username'),
            'password' => Input::get('password')
        ];
        $rules = [
            'username' => 'required|email',
            'password' => 'required'
        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){
            if(Auth::attempt($cre)){
                return Redirect::to('/profile');
            } else {
                return  Redirect::Back()->withErrors($validator)->withInput()->with('fail','Username and password does not match');
            }
            
        } else {
            return Redirect::Back()->withErrors($validator)->withInput();
        }
    }
     public function postSignup(){
        $cre = [
            'firstname' => Input::get('firstname'),
            'lastname' => Input::get('lastname'),
            'email' => Input::get('email'),
            'password' => Input::get('password'),
            'gender' => Input::get('gender'),
            'serv_year' => Input::get('serv_year'),
            'batch' => Input::get('batch')
        ];
        $rules = [
            'firstname' => 'required',
            'lastname' => 'required',             
            'email' => 'required|email|unique:users,username',
            'password' => 'required|min:8',
            'gender' => 'required',
            'serv_year' => 'required',
            'batch' => 'required'
        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){
                $password = Hash::make(Input::get('password'));
                $id = DB::table("users")->insertGetID(array('firstname'=>Input::get("firstname"),'lastname'=>Input::get("lastname"),'username'=>Input::get("email"),'password' => $password));
                Auth::loginUsingId($id);
                return Redirect::to('/profile');           
        } else {
            return Redirect::Back()->withErrors($validator)->withInput();
        }
    }
    public function getLogin(){
        if(Auth::check()){
            return Redirect::to('/profile');
        } else {
            $main = View::make('login');
            return View::make('main',["title"=>"Login | Corper Life","main"=>$main]);
        }
        
    }

    public function getFBLogin(){

        if(Auth::check()){
            return Redirect::to('/profile');
        } else {
        
            require app_path().'/fb/src/facebook.php';  // Include facebook SDK file
            $facebook = new Facebook(array(
              'appId'  => '1616910621872702',   // Facebook App ID 
              'secret' => 'ca502f2286b98512247c4a8a91e5e1ff',  // Facebook App Secret
              'cookie' => true, 
            ));

            $user = $facebook->getUser();

            if ($user) {
                try {
                    $user_profile = $facebook->api('/me');
                    $fbid = $user_profile['id'];                
                    $first_name = $user_profile['first_name']; 
                    $last_name = $user_profile['last_name'];
                    $gender = $user_profile['gender'];
                    $fbfullname = $user_profile['name'];
                    $femail = $user_profile['email'];   
                    $flink = $user_profile['link'];   
                    $fpicture = "https://graph.facebook.com/".$fbid."/picture?type=large";

                    $check_exists = User::select('id','username')->where('facebook_id',$fbid)->count();

                    if($check_exists == 0){

                    $check2 = User::select('id')->where('username',$femail)->count();
                    if($check2 == 0){
                        $new_user = new User;
                        $new_user->firstname = $first_name;
                        $new_user->lastname = $last_name;
                        $new_user->username = $femail;
                        $new_user->password = -1;
                        $new_user->facebook_id = $fbid;
                        $new_user->facebook_link = $flink;
                        $new_user->facebook_picture_link = $fpicture;
                        $new_user->save();
                        Auth::loginUsingId($new_user->id);
                        return Redirect::to('/profile');
                        
                    } else {
                        return Redirect::to('/')->with('fail', $femail.' is alredy registered with Corper Life');
                    }      
                } else {
                    $user_to_login = User::select('id')->where('facebook_id',$fbid)->first();
                    Auth::loginUsingId($user_to_login->id);
                    return Redirect::to('/profile');
                }
              } catch (FacebookApiException $e) {
                error_log($e);
                $user = null;
              }
            }

            if ($user) {
                return Redirect::to('/profile');
            } else {
                $loginUrl = $facebook->getLoginUrl(array(
                    'scope'     => 'email', // Permissions to request from the user
                ));
               return Redirect::to($loginUrl);
            }

        }
        
    }

    public function postSaveadd(){
        $cre = [
            'name' => Input::get('name'),
            'email' => Input::get('email'),         
            'enquiry' => Input::get('enquiry')            
        ];
        $rules = [
            'name' => 'required',
            'email' => 'required',   
            'enquiry' => 'required'   
        ];
        $validator = Validator::make($cre,$rules);

        if($validator->passes()){
            $add = new Add;
            $add->name = Input::get('name');
            $add->email =  Input::get('email');
            $add->enquiry =  Input::get('enquiry');
            $add->phone =  Input::get('phone');
            $add->message =  Input::get('message');
            $add->save();
            return Redirect::to('/advertise/');
                      
         }else {
            return Redirect::Back()->withErrors($validator)->withInput();
        }
    }
}