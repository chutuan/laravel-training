<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    public function getDangNhapAdmin() {
        return view('admin.login');
    }

    public function postDangNhapAdmin(Request $request) {
        echo $request->name;
        echo $request->password;
    }
}
