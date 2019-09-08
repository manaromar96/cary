<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestEmail;
use App\User;

class PagesController extends Controller
{
    public function index() {
        //$data = 'This is my data';
        // return view('page.index')->with('data', $data );
        // return view('page.index', ['data'=>$data ] );
        //return view('page.index', compact('data') );
        return view('page.index');
    }
    public function stores(){
        return view('page.stores');
    }
    public function cars() {
        return view('page.cars');
    }
    public function about(){
        return view('page.about');
    }
    public function contact() {
        return view('page.contact');
    }

    function sendEmail()
    {
        $user = User::first();
        $email = Mail::to('eng.manar.2016@gmail.com')->send(new TestEmail($user));
        dd($email);
    }



}
