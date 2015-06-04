<?php

Route::get('/', function(){
	$main = View::make('home');
	return View::make('main',["title"=>"Corper Life","main"=>$main]);
});
Route::get('/logout', function(){
	Auth::logout();
	return Redirect::to('/');
});
Route::post('/subscribe', 'UserController@postSubscribe');

Route::get('/interview-questions', function(){
	$main = View::make('cvbuilder.interview_qus');
	return View::make('main',["title"=>"Corper Life","main"=>$main]);
});
Route::get('/interview-tips', function(){
	$main = View::make('cvbuilder.interview_tips');
	return View::make('main',["title"=>"Corper Life","main"=>$main]);
});
Route::get('/cv-tips', function(){
	$main = View::make('cvbuilder.cv_tips');
	return View::make('main',["title"=>"Corper Life","main"=>$main]);
});
Route::get('/cover-letters', function(){
	$main = View::make('cvbuilder.cover_letter');
	return View::make('main',["title"=>"Corper Life","main"=>$main]);
});
Route::get('/advertise', function(){
	$main = View::make('add');
	return View::make('main',["title"=>"Corper Life","main"=>$main]);
});
Route::get('/faq', 'GeneralController@faq');
Route::post('/faq', 'GeneralController@faqsubmit');
Route::get('/whycorperlife', function(){
	$main = View::make('whycorper');
	return View::make('main',["title"=>"Why Corper Life?","main"=>$main]);
});
Route::get('/ourstory', function(){
	$main = View::make('ourstory');
	return View::make('main',["title"=>"Our Story","main"=>$main]);
});

Route::get('/career-center', function(){
	$main = View::make('career-center.career');
	return View::make('main',["title"=>"Career Center","main"=>$main]);
});
Route::get('/career-center-cv', function(){
	$main = View::make('career-center.center');
	return View::make('main',["title"=>"Career Center","main"=>$main]);
});
Route::get('/website-rules', function(){
	$main = View::make('rules');
	return View::make('main',["title"=>"Website Rules","main"=>$main]);
});

Route::post('/advertise/saveadd', 'UserController@postSaveadd');

Route::get('/login', 'UserController@getLogin');
Route::get('/fblogin', 'UserController@getFBLogin');

Route::get('/career-document', 'CVController@getcareer');

Route::post('/login', 'UserController@postLogin');

Route::post('/signup', 'UserController@postSignup');

Route::group(['prefix' => 'profile', 'before' => 'auth'], function () {
	Route::get('/', 'UserprofileController@getProfile');
	Route::put('/savepi', 'UserprofileController@putSavePI');
	Route::post('/uploadprofilepic', 'UserMediaController@uploadProfilePic');
});

Route::group(['prefix' => 'checklist-guide', 'before' => 'auth'], function () {
	Route::get('/', 'UserprofileController@getChecklistGuide');
});


Route::group(['prefix' => 'forum', 'before' => 'auth'], function () {
	Route::get('/', 'ForumController@getForum');
	Route::post('/savetopic', 'ForumController@postSaveTopic');
	Route::get('/category/{id}', 'ForumController@getcategory');
	Route::post('/search/', 'ForumController@postSearch');
     
	Route::group(['prefix' => 'forum-page'], function () {
		Route::get('/{id}', 'ForumController@getForumpage');
		Route::post('/savereply/{id}', 'ForumController@postSaveReply');
	});

	Route::group(['prefix' => 'content-page'], function () {
		Route::get('/{id}', 'ForumController@getcontentpage');
	    
	});
});


Route::group(['prefix' => 'knowledge', 'before' => 'auth'], function () {
	Route::get('/', 'UserprofileController@getknowledge');
	Route::post('/askquestion', 'UserprofileController@postAskQuestion');
});
Route::group(['prefix' => 'cv-page', 'before' => 'auth'], function () {
	Route::get('/', 'UserprofileController@getcvpage');
	Route::get('/delete/{code}', 'UserprofileController@deleteCV');
});

Route::group(['prefix' => 'content-page', 'before' => 'auth'], function () {
	Route::get('/', 'ForumController@getcontentpage');
});

Route::group(['prefix' => 'cvbuilder'], function () {
	Route::get('/', 'CVController@getIndex');
	Route::post('/createnew', 'CVController@postCreateNew');
	Route::post('/uploadCvPic/{code}', 'UserMediaController@uploadCvPic');

	Route::post('/editcv', function(){

		$count= Cv::where('cv_code',Input::get('cvcode'))->count();
		if($count == 0){
			return Redirect::to('/cvbuilder');
		} else {
			return Redirect::to('/cvbuilder/cv/'.Input::get('cvcode'));
		}
	});
	Route::get('/cv/{id}', 'CVController@getCV');
	Route::post('/saveinfo/{id}', 'CVController@putSaveInfo');
	Route::get('/fetch_workex', function(){
		return View::make('cvbuilder.section_views.workex');
	});
		Route::get('/fetch_education', function(){
		return View::make('cvbuilder.section_views.education');
	});
		Route::get('/fetch_nysc', function(){
		return View::make('cvbuilder.section_views.nysc');
	});
		Route::get('/fetch_language', function(){
			$langs = DB::table('langs')->lists('language','id');
			$levels = DB::table('levels')->lists('level','id');
			$abilities = DB::table('abilities')->lists('ability','id');
		return View::make('cvbuilder.section_views.language',array("langs"=>$langs,"levels"=>$levels,"abilities"=>$abilities));
	});
	Route::post('/fetch_workex', 'CVController@postWorkex');
	Route::post('/fetch_education', 'CVController@postEducation');
	Route::post('/fetch_nysc', 'CVController@postNysc');
	Route::post('/fetch_language', 'CVController@postLanguage');
	Route::post('/save', 'CVController@postProfile');

	Route::get('/fetch_ui_section', function(){
		return View::make('cvbuilder.section_views.add_new_section');
	});
	Route::get('/edit_ui_section/{id}', function($id){
		$section = Section::find($id);
		return View::make('cvbuilder.section_views.edit_new_section', ['section'=>$section]);
	});
    Route::get('/edit_ui_workex/{id}', function($id){
		$work = WorkExperience::find($id);
		return View::make('cvbuilder.section_views.edit_work', ['work'=>$work]);
	});
	 Route::get('/edit_ui_education/{id}', function($id){
		$education = Education::find($id);
		return View::make('cvbuilder.section_views.edit_education', ['edu'=>$education]);
	});
	  Route::get('/edit_ui_nysc/{id}', function($id){
		$nysc = Nysc::find($id);
		return View::make('cvbuilder.section_views.edit_nysc', ['nysc'=>$nysc]);
	});
	  Route::get('/edit_ui_language/{id}', function($id){
		$language = Language::find($id);
		$langs = DB::table('langs')->lists('language','id');
		$levels = DB::table('levels')->lists('level','id');
		$abilities = DB::table('abilities')->lists('ability','id');
		return View::make('cvbuilder.section_views.edit_language', ['lang'=>$language,'langs'=>$langs,'levels'=>$levels,'abilities'=>$abilities]);
	});

	Route::post('/fetch_addsection', 'CVController@postSection');
	Route::post('/edit_section', 'CVController@putSection');

	Route::post('/edit_work', 'CVController@putwork');
	Route::post('/edit_education', 'CVController@puteducation');

	Route::post('/edit_nysc', 'CVController@putnysc');

	Route::post('/edit_language', 'CVController@putlanguage');

	Route::post('/edit_profile', 'CVController@putprofile');

	Route::get('/preview/{code}/{style}/{type}', 'CVController@getPreview');

	Route::get('/pdf/{type}/{code}/{style}', 'CVController@getPDF');
	Route::post('/pdf/{type}/{code}/{style}', 'CVController@getPDF');

	Route::post('/remove_work/{id}/{code}', 'CVController@deleteWork');

	Route::post('/remove_education/{id}/{code}', 'CVController@deleteEducation');

	Route::post('/remove_nysc/{id}/{code}', 'CVController@deleteNysc');

	Route::post('/remove_language/{id}/{code}', 'CVController@deleteLanguage');

	Route::post('/remove_section/{id}/{code}', 'CVController@deleteSection');
});


Route::group(['before'=> 'auth'], function(){

	Route::post('/proaccount', 'UseraccountController@postLogin');
	Route::get('/account',function(){
		return View::make('account');
	});

});
	

Route::post('/profilesave', 'UserprofileController@postsave');

Route::get('/userprofile', function(){
	return View::make('userprofile');
});

Route::get('/logout', function(){
	Auth::logout();
	return Redirect::to('/');
});

Route::get('/userprofile',function(){
	return View::make('userprofile');
});


Route::get('/user/{id}', function(){
	return View::make('main');
});

Route::post('/user/{id}', function(){
	return 'Post';
});

Route::post('/', function(){
	return 'This is the post request';
});


