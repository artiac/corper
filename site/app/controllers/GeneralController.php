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

                require app_path().'/mail.php';
                require app_path().'/libraries/PHPMailerAutoload.php';
                $mail = new PHPMailer;
                $mail_text = new Mail;
                $mail->isMail();
                $mail->setFrom('info@corperlife.com', 'Corper Life');
                $mail->addAddress('questions@corperlife.com');
                $mail->isHTML(true);
                $mail->Subject = "FAQ Question | Corper Life";
                $mail->Body = $mail_text->faq_question(Input::get("name"),Input::get("email"), Input::get("question"));
                if(!$mail->send()) {
                    return 'Mailer Error: ' . $mail->ErrorInfo;
                } else {
                    return Redirect::Back()->with('success','Your question has been submitted. We will respond to it asap.');                
                }
            }
        } else {
            return Redirect::Back()->withErrors($validator)->withInput();
        }
    }
}