<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\Services\UserService;

class UserController extends Controller {
    private $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    function getProfile(User $user) {
        $profile = $this->userService->getProfile($user->id);

        return $profile;
    }

    function postVote() {

    }

    function postProfileImage() {

    }

    function deleteProfileImage() {

    }

    function patchUserInfo() {

    }
}
