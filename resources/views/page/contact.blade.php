@extends('dashboardLayout.master')

@section('title','Content Us')


@section('content')
<form action="{{ route('contact.store') }}"  method="post" >
@csrf
<div class="form-group">
    <label>Name :</label>
    <input type="text" name="name" class="form-control">
</div>
    <div class="form-group">
        <label>Email :</label>
        <input type="text" name="email" class="form-control">
    </div>
    <div class="form-group">
        <label>Message :</label>
        <textarea name="message" class="form-control"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
    @endsection