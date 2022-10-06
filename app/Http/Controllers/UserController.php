<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUsers(Request $request) {
        //dd($request->headers->Bearer);
        $users = User::all();
        return response()->json(['users' => $users]);
    }
}
