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
            <strong>Manager</strong> Form
        </div>
        <div class="card-body card-block">
            <form action="#" method="post" class="">
                <div class="form-group"><label for="nf-name" class=" form-control-label">Name :</label><input type="text" id="nf-name" name="nf-name" placeholder="Enter Name.." class="form-control"><span class="help-block">Please enter your name</span></div>
                <div class="form-group"><label for="nf-email" class=" form-control-label">Email :</label><input type="email" id="nf-email" name="nf-email" placeholder="Enter Email.." class="form-control"><span class="help-block">Please enter your email</span></div>
                <div class="form-group"><label for="nf-password" class=" form-control-label">Password :</label><input type="password" id="nf-password" name="nf-password" placeholder="Enter Password.." class="form-control"><span class="help-block">Please enter your password</span></div>
                <div class="form-group"><label for="nf-store" class=" form-control-label">Store :</label><input type="text" id="nf-store" name="nf-store" placeholder="Enter Store.." class="form-control"><span class="help-block">Please enter your store name</span></div>
                <div class="form-group"><label for="nf-address" class=" form-control-label">Address :</label><input type="text" id="nf-address" name="nf-address" placeholder="Enter Store Address.." class="form-control"><span class="help-block">Please enter your store address</span></div>
                <div class="form-group"><label for="nf-carNo." class=" form-control-label">Car No. :</label><input type="number" id="nf-carNo." name="nf-carNo." placeholder="Enter Store Car Number.." class="form-control"><span class="help-block">Please enter your cars no.</span></div>


            </form>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-danger">Reset</button>

        </div>
    </div>

@endsection