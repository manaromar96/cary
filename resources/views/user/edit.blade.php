@extends('dashboardLayout.master')
@section('header')
<style>
    .card{
        background-color:honeydew;

    }
    .manager_form{
        margin-top: 103px;
        background-color:honeydew;
    }
</style>
@section('content')
    <div class="card manager_form">
        <div class="card-header">
            <strong>Client</strong> Edit Form
        </div>
        <div class="card-body card-block">
            <form action="{{ route('manager.update'),$user->id }}"  method="post" enctype="multipart/form-data method=" class="">
                {{ method_field('put') }}
                @csrf
                <div class="form-group"><label for="nf-name" class=" form-control-label">Name :</label><input type="text" id="nf-name" name="nf-name" placeholder="Enter Name.." class="form-control"><span class="help-block">Please enter your name</span></div>
                <div class="form-group"><label for="nf-email" class=" form-control-label">Email :</label><input type="email" id="nf-email" name="nf-email" placeholder="Enter Email.." class="form-control"><span class="help-block">Please enter your email</span></div>
                <div class="form-group"><label for="nf-password" class=" form-control-label">Password :</label><input type="password" id="nf-password" name="nf-password" placeholder="Enter Password.." class="form-control"><span class="help-block">Please enter your password</span></div>
                <div class="form-group"><label for="password" class=" form-control-label">Phone :</label><input type="number" id="phone" name="phone" placeholder="Enter Phone no. .." class="form-control"><span class="help-block">Please enter your phone</span></div>
                <div class="form-group"><label for="avatar" class=" form-control-label">Avatar:</label><input type="file" id="avatar" name="avatar"  class="form-control"><span class="help-block">Please choose your Image</span></div>

                 <button type="submit" class="btn btn-primary">update</button>
                <button type="reset" class="btn btn-danger">Reset</button>
            </form>


        </div>
    </div>

@endsection