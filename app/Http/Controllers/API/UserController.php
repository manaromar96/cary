<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
        $user =User::first();
        return response()->json([
            'data' => $user
        ],401);
    }

}
