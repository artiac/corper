<?php

class CVController extends BaseController {

    protected $layout = 'cvbuilder.layout';

    public function getIndex(){
        $user_id = Auth::id();
        $this->layout->title = 'CV Builder';
        $this->layout->top_active = 0;
        $this->layout->main = View::make('cvbuilder.index');         
    }
     public function getcareer(){
        $user_id = Auth::id();
        $this->layout->title = 'Career Center Document';
        $this->layout->main = View::make('cvbuilder.career-doc');         
    }

    public function postCreateNew(){
        $cv = new Cv;
        do {
            $random = str_random(10);
            $count = Cv::where('cv_code',$random)->count();
        } while($count != 0);

        $cv->cv_code = $random;
        if(Auth::check()){
            $cv->user_id = Auth::id();
        }
        $cv->save();
        $cv_id = $cv->id;
        DB::table('sections')->insert(array(
            array("cv_id"=>"$cv_id","section_name"=>"Work Experience","type"=>"1","priority"=>"1","default"=>"1"),
            array("cv_id"=>"$cv_id","section_name"=>"Qualfications","type"=>"0","priority"=>"2","default"=>"1"),
            array("cv_id"=>"$cv_id","section_name"=>"Education","type"=>"2","priority"=>"3","default"=>"1"),
            array("cv_id"=>"$cv_id","section_name"=>"NYSC","type"=>"3","priority"=>"4","default"=>"1"),
            array("cv_id"=>"$cv_id","section_name"=>"Interests","type"=>"0","priority"=>"5","default"=>"1"),
            array("cv_id"=>"$cv_id","section_name"=>"References","type"=>"0","priority"=>"6","default"=>"1"),
        ));
        return Redirect::to('/cvbuilder/cv/'.$cv->cv_code);
    }

    public function getCV($id){

        $cv = Cv::where('cv_code',$id)->first();
        $cv_id = $cv->id;
        $dob = explode('-', $cv->dob);
        $workex = WorkExperience::where('cv_id',$cv_id)->orderBy('priority')->get();
        $education = Education::where('cv_id',$cv_id)->orderBy('priority')->get();
        $nysc = Nysc::where('cv_id',$cv_id)->orderBy('priority')->get();
        $sections = Section::where('cv_id',$cv_id)->orderBy('priority')->get();
        $topic = Section::where('cv_id',$cv_id)->orderBy('priority')->get();

        $this->layout->title = 'CV Builder';
        $this->layout->top_active = 6;
        $this->layout->main = View::make('cvbuilder.cv',array(
            "cv" => $cv,
            "sections" => $sections,
            "workex" => $workex,
            "education" => $education,
            "dob" => $dob,
            "nysc" => $nysc
        ));          
    }

    public function putSaveInfo($id){

        $cv = Cv::where('cv_code',$id)->first();
        $cv_id = $cv->id;
        $section_order=Input::get ('section');
        $count = 1;

            foreach ($section_order as $section_id) {
                Section::where('id',$section_id)->where('cv_id',$cv_id)->update(array('priority'=>$count));
                $count++;
            }

            $cv->full_name = Input::get("full_name");
            $cv->email = Input::get("email");
            $cv->phone_num = Input::get("phone_num");
            $cv->website = Input::get("website");
            $cv->add_line1 = Input::get("add_line1");
            $cv->add_line2 = Input::get("add_line2");
            $cv->dob = Input::get("dob_year").'-'.Input::get("dob_month").'-'.Input::get("dob_date");
            $cv->marital_status = Input::get("marital_status");
            $cv->save();

            $count = 1;
            $work_ex_order = Input::get('work_ex');
            if($work_ex_order){
                foreach ($work_ex_order as $work_ex_id) {
                    WorkExperience::where('id',$work_ex_id)->where('cv_id',$cv_id)->update(array('priority'=>$count));
                    $count++;
                }
            }

            $count = 1;
            $education_order = Input::get('education');

            if($education_order){
                foreach ($education_order as $education_id) {
                    Education::where('id',$education_id)->where('cv_id',$cv_id)->update(array('priority'=>$count));
                    $count++;
                }
            }
            

            $count = 1;
            $nysc_order = Input::get('nysc');
            if($nysc_order){
                foreach ($nysc_order as $nysc_id) {
                    Nysc::where('id',$nysc_id)->where('cv_id',$cv_id)->update(array('priority'=>$count));
                    $count++;
                }
            }

            $sections = Section::where('cv_id',$cv_id)->orderBy('priority')->get();

            foreach ($sections as $section) {
                if($section->type == 0){
                    $content = Input::get("section_".$section->id);
                    Section::where('id',$section->id)->where('cv_id',$cv_id)->update(array('content'=>$content));
                }
            }
            
            return 'success';           
    }


     public function postWorkex(){
       
        $cre = [
            'title' => Input::get('title'),
            'company' => Input::get('company')
        ];
        $rules = [
            'title' => 'required',
            'company' => 'required'
        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){
            $workex = new WorkExperience;
            $workex->cv_id = Input::get('cv_id');
            $workex->title = Input::get('title');
            $workex->company = Input::get('company');
            $workex->location = Input::get('location');
            $workex->startdate = Input::get('startdate');
            $workex->enddate = Input::get('enddate');
            $workex->otherinfo = Input::get('otherinfo');
            $workex->save();
            $insert_id = $workex->id;
            $data["message"] = 'Work ex Succefully added';
            $data["title"] = Input::get('title');
            $data["company"] = Input::get('company');
            $data["location"] = Input::get('location');
            $data["startdate"] = Input::get('startdate');
            $data["enddate"] = Input::get('enddate');
            $data["id"] = $insert_id;
            return json_encode($data);
        } else {
            return 'Please fill all the inputs';
        }
    }

    public function putWork(){       
        $cre = [
            'title' => Input::get('title'),
            'company' => Input::get('company')
        ];
        $rules = [
            'title' => 'required',
            'company' => 'required'
        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){

            $workex = WorkExperience::find(Input::get('work_id'));
            $cv = Cv::select('id')->where('cv_code',Input::get('cv_code'))->first();
            if($cv->id == $workex->cv_id){
                $workex->title = Input::get('title');
                $workex->company = Input::get('company');
                $workex->location = Input::get('location');
                $workex->startdate = Input::get('startdate');
                $workex->enddate = Input::get('enddate');
                $workex->otherinfo = Input::get('otherinfo');         
                $workex->save();
                $data["message"] = 'Work ex Succefully updated';
                $data["title"] = Input::get('title');
                $data["company"] = Input::get('company');
                $data["location"] = Input::get('location');
                $data["startdate"] = Input::get('startdate');
                $data["enddate"] = Input::get('enddate');
            }
            else {
                $data["message"] = 'Error in editing work';
            }
            return json_encode($data);
        } 
        else {
            return 'Please fill all the inputs';
        }
    }


     public function postEducation(){
       
        $cre = [
            'coursename' => Input::get('coursename'),
            'institutename' => Input::get('institutename')
        ];
        $rules = [
            'coursename' => 'required',
            'institutename' => 'required'
        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){
            $education = new Education;
            $education->cv_id = Input::get('cv_id');
            $education->coursename = Input::get('coursename');
            $education->institutename = Input::get('institutename');
            $education->add_line1 = Input::get('add_line1');
            $education->add_line2 = Input::get('add_line2');
            $education->startdate = Input::get('startdate');
            $education->enddate = Input::get('enddate');
            $education->otherinfo = Input::get('otherinfo');
            $education->save();
            $insert_id = $education->id;
            $data["message"] = 'education details Succefully added';
            $data["title"] = Input::get('title');
            $data["id"] = $insert_id;
            $data["coursename"] = Input::get('coursename');
            $data["institutename"] = Input::get('institutename');              
            $data["startdate"] = Input::get('startdate');
            $data["enddate"] = Input::get('enddate');

            return json_encode($data);
        } else {
            return 'Please fill all the inputs';
        }
    }

    public function putEducation(){
       
        $cre = [
            'coursename' => Input::get('coursename'),
            'institutename' => Input::get('institutename')
        ];
        $rules = [
            'coursename' => 'required',
            'institutename' => 'required'
        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){
            $education = Education::find(input::get('education_id'));
            $cv=CV::select('id')->where('cv_code',Input::get('cv_code'))->first();
            if($cv->id==$education->cv_id){
                $education->coursename = Input::get('coursename');
                $education->institutename = Input::get('institutename');
                $education->add_line1 = Input::get('add_line1');
                $education->add_line2 = Input::get('add_line2');
                $education->startdate = Input::get('startdate');
                $education->enddate = Input::get('enddate');
                $education->otherinfo = Input::get('otherinfo');
                $education->save();
                $data["message"] = 'education details Succefully updated';
                $data["coursename"] = Input::get('coursename');
                $data["institutename"] = Input::get('institutename');              
                $data["startdate"] = Input::get('startdate');
                $data["enddate"] = Input::get('enddate');
            }
            else {
                $data["message"] = 'Error in editing work';
               
            }
            return json_encode($data);
        }
         else {
            return 'Please fill all the inputs';
        }
    }
    
    public function postNysc(){
       
        $cre = [
            'ppa' => Input::get('ppa')
        ];
        $rules = [
            'ppa' => 'required'
        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){
            $nysc = new Nysc;
            $nysc->cv_id = Input::get('cv_id');
            $nysc->batch = Input::get('batch');
            $nysc->year = Input::get('year');
            $nysc->ppa = Input::get('ppa');
            $nysc->cd = Input::get('cd');
            $nysc->otherinfo = Input::get('otherinfo');     
            $nysc->save();
            $insert_id = $nysc->id;
            $data["message"] = 'nysc details Succefully added';
            $data["title"] = Input::get('title');
            $data["id"] = $insert_id;
            $data["batch"] = Input::get('batch');
            $data["year"] = Input::get('year');
            $data["ppa"] = Input::get('ppa');
            return json_encode($data);
        } else {
            return 'Please fill all the inputs';
        }
    }
      public function putNysc(){
       
        $cre = [
            'ppa' => Input::get('ppa')
        ];
        $rules = [
            'ppa' => 'required'
        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){

            $nysc = Nysc::find(input::get('nysc_id'));
            $cv=CV::select('id')->where('cv_code',Input::get('cv_code'))->first();
            if($cv->id==$nysc->cv_id){
            $nysc->batch = Input::get('batch');
            $nysc->year = Input::get('year');
            $nysc->ppa = Input::get('ppa');
            $nysc->cd = Input::get('cd');    
            $nysc->save();
            $data["message"] = 'nysc details Succefully updated';
            $data["batch"] = Input::get('batch');
            $data["year"] = Input::get('year');
            $data["ppa"] = Input::get('ppa');
        }
        else{            
            $data["message"] = 'Error in editing work';

        } return json_encode($data);
    }
        else 
        {
            return 'Please fill all the inputs';
        }
    }

    public function postSection(){
       
        $cre = [
            'section_name' => Input::get('section_name')
        ];
        $rules = [
            'section_name' => 'required'
        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){
            $section = new Section;
            $section->cv_id = Input::get('cv_id');
            $section->section_name = Input::get('section_name');
            $section->type = 0;
            $section->priority = DB::table('sections')->where('cv_id',Input::get('cv_id'))->max('priority') + 1;
            $section->save();
            $insert_id = $section->id;

            $data["message"] = 'Section is Succefully added';
            $data["section_name"] = Input::get('section_name');
            $data["id"] = $insert_id;
            return json_encode($data);
        } else {
            return 'Please fill all the inputs';
        }
    }

    public function putSection(){
       
        $cre = [
            'section_name' => Input::get('section_name')
        ];
        $rules = [
            'section_name' => 'required'
        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){

            $section = Section::find(Input::get('section_id'));
            $cv = Cv::select('id')->where('cv_code',Input::get('cv_code'))->first();
            if($cv->id == $section->cv_id){
                $section->section_name = Input::get('section_name');
                $section->save();

                $data["message"] = 'Section is Succefully added';
                $data["section_name"] = Input::get('section_name');
            } else {
                $data["message"] = 'Error in editing section';
            }
            return json_encode($data);
        } else {
            return 'Please fill all the inputs';
        }
    }

    public function getPreview($code,$style){

        $cv = Cv::where('cv_code',$code)->first();
        $cv_id = $cv->id;
        $dob = explode('-', $cv->dob);
        $workex = WorkExperience::where('cv_id',$cv_id)->orderBy('priority')->get();
        $education = Education::where('cv_id',$cv_id)->orderBy('priority')->get();
        $nysc = Nysc::where('cv_id',$cv_id)->orderBy('priority')->get();
        $sections = Section::where('cv_id',$cv_id)->orderBy('priority')->get();
        $topic = Section::where('cv_id',$cv_id)->orderBy('priority')->get();

        return View::make('cvbuilder.templates.'.$style,array(
            "cv" => $cv,
            "sections" => $sections,
            "workex" => $workex,
            "education" => $education,
            "dob" => $dob,
            "nysc" => $nysc
        ));          
    }

    public function getPDF($code,$style){

        include(app_path().'/dompdf/dompdf_config.inc.php');
        $dompdf = new DOMPDF();

        $cv = Cv::where('cv_code',$code)->first();
        $cv_id = $cv->id;
        $dob = explode('-', $cv->dob);
        $workex = WorkExperience::where('cv_id',$cv_id)->orderBy('priority')->get();
        $education = Education::where('cv_id',$cv_id)->orderBy('priority')->get();
        $nysc = Nysc::where('cv_id',$cv_id)->orderBy('priority')->get();
        $sections = Section::where('cv_id',$cv_id)->orderBy('priority')->get();
        $topic = Section::where('cv_id',$cv_id)->orderBy('priority')->get();

        $html =  View::make('cvbuilder.templates.'.$style,array(
            "cv" => $cv,
            "sections" => $sections,
            "workex" => $workex,
            "education" => $education,
            "dob" => $dob,
            "nysc" => $nysc
        ));

        $dompdf->load_html($html);
        $dompdf->render();
        $dompdf->stream("hello_world.pdf",array('Attachment'=>0));
    }

    public function deleteWork($work_id,$code){
        $cv = Cv::where('cv_code',$code)->first();
        $cv_id = $cv->id;
        WorkExperience::where('id',$work_id)->where('cv_id',$cv_id)->delete();
        $data["success"] = 1;
        $data["message"] = "Succefully deleted";
        return json_encode($data);
    }

    public function deleteEducation($education_id,$code){
        $cv = Cv::where('cv_code',$code)->first();
        $cv_id = $cv->id;
        Education::where('id',$education_id)->where('cv_id',$cv_id)->delete();
        $data["success"] = 1;
        $data["message"] = "Succefully deleted";
        return json_encode($data);
    }

    public function deleteNysc($nysc_id,$code){
        $cv = Cv::where('cv_code',$code)->first();
        $cv_id = $cv->id;
        Nysc::where('id',$nysc_id)->where('cv_id',$cv_id)->delete();
        $data["success"] = 1;
        $data["message"] = "Succefully deleted";
        return json_encode($data);
    }

    public function deleteSection($section_id,$code){
        $cv = Cv::where('cv_code',$code)->first();
        $cv_id = $cv->id;
        Section::where('id',$section_id)->where('cv_id',$cv_id)->delete();
        $data["success"] = 1;
        $data["message"] = "Succefully deleted";
        return json_encode($data);
    }

}    