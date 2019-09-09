@extends('layout.index')

@section('title','Client Profile')
@section('header')
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

@endsection
@section('content')


    <div>

    <h3> Welcome to  {{\Illuminate\Support\Facades\Auth::user()->name}} Profile</h3>

<br>
             <h5> Personal Information :</h5>

                <br>
                 <!-- Personal Info -->
                 <ul class="personal-info">
                     <li>
                         <p> <span> Name : </span>client->name</p>
                     </li>
                     <li>
                         <p> <span> Phone : </span>client->phone</p>
                     </li>
                     <li>
                         <p> <span> E-mail : </span> <a href="#.">client->email</a> </p>
                     </li>
                 </ul>

    </div>

@endsection