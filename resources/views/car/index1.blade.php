@extends('layout.master')

@section('title','List of Cars')

@section('header')
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

@endsection

@section('content')
    <td class="td-card white_bg">
        <div class="card">
            <div class="center-image">
                <div class="card-featured-image center-image">
                    <a target="_self" href="##">
                        <img src="{{asset('public/carImages/kia.jpg' )}}" width="200px" height="200px">

                        <img alt="KIA" src="/public/carImages/kia.jpg"></a>
                </div>
                <div class="card-featured-text">
                    <p class="featureds-title"><a target="_self" href="##">KIA Details</a></p>
                    <p>price : </p>
                    <p>color : </p>
                    <p></p>
                </div>
            </div>
        </div>
    </td>
    @endsection

@section('footer')
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function () {
            $('.cars').DataTable();
        });
    </script>
@endsection