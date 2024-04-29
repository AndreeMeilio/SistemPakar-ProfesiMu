<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserProfileController extends Controller {

    public function index() {
        $profile = Auth::user();
        $data = ['profile' => $profile];

        return view('pages.profile.index', $data);
    }
}
