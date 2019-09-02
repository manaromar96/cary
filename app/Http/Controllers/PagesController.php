<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        //$data = 'This is my data';
        // return view('pages.index')->with('data', $data );
        // return view('pages.index', ['data'=>$data ] );
        //return view('pages.index', compact('data') );
        return view('pages.index');
    }
    public function stores(){
        return view('pages.stores');
    }
    public function cars() {
        return view('pages.cars');
    }
    public function about(){
        return view('pages.about');
    }
    public function contact() {
        return view('pages.contact');
    }



}
