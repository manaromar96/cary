<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestEmail;
use App\User;
use App\Events\UserRegistrationEvent;
use App\ContactUs;
use Illuminate\Support\Facades\Auth;


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

//    public function store(Request $request)
//    {
//
//        $this->validate($request, [
//            'name' => 'required',
//            'email' => 'required|email',
//            'message' => 'required'
//        ]);
//        ContactUS::create($request->all());
//        Mail::send('mail.mail',
//            array(
//                'name' => $request->get('name'),
//                'email' => $request->get('email'),
//                'user_message' => $request->get('message')
//            ), function($message)
//            {
//                $message->from('carylara2019@gmail.com');
//                $message->to('eng.manar.2016@gmail.com', 'Admin')->subject(' Feedback');
//            });
//        return back()->with('success', 'Thanks for contacting us!');
//    }
    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);
        ContactUS::create($request->all());
        Mail::send('mail.mail',
            array(
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'user_message' => $request->get('message')
            ), function($message)
            {

                $message->from('carylara2019@gmail.com');
                $message->to(Auth::user()->email, 'Admin')->subject(' Feedback');
            });
        return back()->with('success', 'Thanks for contacting us!');
    }
    function sendEmail()
    {

//        $user = User::first();
        //  $email = Mail::to('eng.manar.2016@gmail.com')->send(new TestEmail($user));
        //dd($email);
        $event =event(new UserRegistrationEvent());
        dd($event);


    }




}
