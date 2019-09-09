@extends('layout.index')

@section('title','Client Profile')
@section('header')
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

@endsection
@section('content')
     Hi client {{\Illuminate\Support\Facades\Auth::user()->name}}
    @endsection