<?php

class GeneralController extends BaseController {
    
    public function faq(){
        $main = View::make('faq');
        return View::make('main',["title"=>"FAQ","main"=>$main]);
    }

    public function faqsubmit(){
        $cre = [
            'name' => Input::get('name'),
            'email' => Input::get('email'),
            'question' => Input::get('question')
        ];
        $rules = [
            'name' => 'required',
            'email' => 'required|email',
            'question' => 'required'
        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){
            if(Input::get('antispam') == ''){
                return Redirect::Back()->with('success','Your question has been submitted. We will respond to it asap.');                
            }
        } else {
            return Redirect::Back()->withErrors($validator)->withInput();
        }
    }
}