<?php

namespace App\Http\Controllers\API;
use App\User;
Use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;




class AuthenticationController extends Controller
{
    public $successStatus = 200;


    function login(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            $token = $user->createToken('gsg training')->accessToken;
            return response()->json($token, 200);
        }
        return response()->json('email or password is not correct', 402);
    }

    function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'password_confirmation' => 'required|same:password',
            'role_id' =>'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 401);
        }

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            $user = Auth::user();
            $token = $user->createToken('gsg training')->accessToken;
            return response()->json($token,200);

        }
//        $input = $request->all();
//        $input['password'] = bcrypt($input['password']);
//        $user = User::create($input);
//        $success['token'] = $user->createToken('myApp')-> accessToken;
//        $success['name'] = $user->name;
//        return response()->json(['success'=>$success], 200);
    }
}
