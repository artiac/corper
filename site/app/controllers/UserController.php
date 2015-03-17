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
            'password' => Input::get('password')
        ];
        $rules = [
            'firstname' => 'required',
            'lastname' => 'required',             
            'username' => 'required|email|unique:users,username',
            'password' => 'required|min:8',
        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){
            if(Input::get('password') === Input::get('confirmpassword')){
                $password = Hash::make(Input::get('password'));
                $id = DB::table("users")->insertGetID(array('firstname'=>Input::get("firstname"),'lastname'=>Input::get("lastname"),'username'=>Input::get("username"),'password' => $password));
                Auth::loginUsingId($id);
                return Redirect::to('/profile');
            } else {
                return Redirect::Back()->with('fail','Both passwords do not match')->withErrors($validator)->withInput();
            }            
        } else {
            return Redirect::Back()->withErrors($validator)->withInput();
        }
    }
    public function getLogin(){
       return View::make('login');
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