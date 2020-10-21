<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use App\User;

class DashboardController extends Controller {
    public function index() {
        $userId = Auth::id();
        return redirect("/profile/{$userId}");
    }

    public function profile(User $user) {
        return view('dashboard')->with([
            'authUserId' => Auth::id(),
            'profileId' => $user->id,
        ]);
    }
}
