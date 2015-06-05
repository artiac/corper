<?php
    class Mail {
        public function __construct(){
            $this->headers = "MIME-Version: 1.0" . "\r\n";
            $this->headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $this->headers .= 'From: info@corperlife.com' . "\r\n";;
        }

        public function registration_mail($first_name,$email){
            $this->subject = "Corper Life Registration";
            $this->message = "Hey ".$first_name."
            <p style='margin-top:20px'>
            The corperlife team is small group of already employed ex-corpers. We came together to help others get through the experience and start their careers. Here are the basic things you need to know about the corperlife™ website.</p>
                
            <p>There are 2 main areas:-<br>
            The Dashboard: This section is exclusively for corpers. It is where you’ll find all the resources you need to get through the NYSC service year. You will also be able to communicate with other corpers using the forums and find your saved CV’s.</p>
            <p>
            The Career Centre: This section will help you prepare to get a job after NYSC. You can use our online CV maker to create, download and print epic CVs. We also provide other resources like tips and guides to help you get the job you want.</p>

            <p>
            The best part is, everything is is Free!<br>
            So don’t carry last, use the corperlife™ website and be great!</p>

            <p>Best wishes,<br>
            Team Corperlife</p>";


            $this->to = $email;
        }

        public function cv_mail($full_name,$code,$emails){
            $this->subject = "CV - ".$code." | CorperLife Career Center";
            $this->message = 'Hey '.$full_name.'
            <p style="margin-top:20px">
                Your CV with code <b>'.$code.'</b> is attached with this email. This code with be helpful for you to retrieve this CV. You can also find this CV in your CV list, if you have signed up with CorperLife™.
            </p>
            <p>Best wishes,<br>
            Team Corperlife</p>';
            
            return $this->message;
        }

        public function send_mail(){
            mail($this->to, $this->subject, $this->message, $this->headers);
        }
    }
