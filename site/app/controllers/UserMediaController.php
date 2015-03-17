<?php

class UserMediaController extends BaseController {

    public function uploadProfilePic(){
        include(app_path().'/crop-avatar.php');
        $user = User::find(Auth::id());
        $user->profile_pic = $crop -> getResult();
        $user->save();
        echo json_encode($response);
    }
}
    