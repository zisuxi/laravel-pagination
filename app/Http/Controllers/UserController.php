<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function getUser() {
        $user = User::paginate(15); // Retrieve 15 users per page
        return view('user', compact('user'));
    }  

}
