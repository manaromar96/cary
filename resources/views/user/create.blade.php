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
            <form action="{{ route('user.store') }}"  method="post" enctype="multipart/form-data" >
                @csrf

                <div class="form-group"><label for="name" class=" form-control-label">Name :</label><input type="text" id="name" name="name" placeholder="Enter Name.." class="form-control"><span class="help-block">Please enter your name</span></div>
                <div class="form-group"><label for="email" class=" form-control-label">Email :</label><input type="email" id="email" name="email" placeholder="Enter Email.." class="form-control"><span class="help-block">Please enter your email</span></div>
                <div class="form-group"><label for="password" class=" form-control-label">Password :</label><input type="password" id="password" name="password" placeholder="Enter Password.." class="form-control"><span class="help-block">Please enter your password</span></div>
                <div class="form-group"><label for="store" class=" form-control-label">Store :</label><input type="text" id="store" name="store" placeholder="Enter Store.." class="form-control"><span class="help-block">Please enter your store name</span></div>
                <div class="form-group"><label for="address" class=" form-control-label">Address :</label><input type="text" id="address" name="address" placeholder="Enter Store Address.." class="form-control"><span class="help-block">Please enter your store address</span></div>
                <div class="form-group"><label for="carNo." class=" form-control-label">Car No. :</label><input type="number" id="carNo." name="carNo." placeholder="Enter Store Car Number.." class="form-control"><span class="help-block">Please enter your cars no.</span></div>
                <form action="/action_page.php">
                    Select your avatar: <input type="file" name="avatar"><br><br>
                </form>

            </form>
                <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-danger">Reset</button>

        </div>
    </div>

@endsection