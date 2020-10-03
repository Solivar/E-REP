<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\UserRepository;

class UserController extends Controller {
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    function getProfile() {
        $users = $this->userRepository->allUsers();

        return "ok";
    }
}
