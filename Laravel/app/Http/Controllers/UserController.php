<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
class UserController extends Controller
{
    //
    public function index(Request $request)
    {
        # code...
        $name = "siva";
        $age = 26;

        UserModel::create($request->all());

        $users = UserModel::all();
        
        return view('user',compact('name','age','users'));
    }
}
