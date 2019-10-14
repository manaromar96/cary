@extends('dashboardLayout.master')
@section('header')
<style>
     .order-table tr th:last-child{
         text-align: left;
     }
     .order-table tr td:last-child{
         text-align: left;
     }
</style>
@endsection
@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="contentTable">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Clients Table</strong>
                        </div>
                        <div class="table-stats order-table ov-h">
                            <table class="table ">
                                <thead>
                                    <tr>
                                         <th class="serial">#</th>
                                         <th class="avatar">Avatar</th>
                                         <th>Name</th>
                                         <th>email</th>
                                         <th>phone</th>
                                     </tr>
                                </thead>
                                <tbody>

                                    @if(count($users)>0)
                                         @foreach($users as $user)
                                             @if($user->role_id == 2)
                                              <tr>
                                                   <td>{{$user->id}}</td>
                                                    <td class="avatar">
                                                    <div class="round-img">
                                                        @if ($user->avatar!=null)
                                                            <a href="#"><img class="rounded-circle" src="{{asset('storage/'.$user->avatar )}}" alt=""></a>
                                                        @else
                                                            <img class="user-avatar rounded-circle" src="{{asset('dashboard/assets/images/avatar/2.jpg' )}}" alt="User Avatar">
                                                        @endif                                                      </div>
                                                    </td>
                                                    <td>  <span>{{$user->name}}</span> </td>
                                                    <td>
                                                        <span>{{$user->email}}</span>
                                                     </td>
                                                     <td>

                                                         <span>{{$user->phone}}</span>
                                                     </td>

                                                </tr>
                                              @endif
                                         @endforeach
                                    @else
                                                 <tr>
                                                     <td colspan="3">No data</td>
                                                </tr>
                                     @endif
                                </tbody>
                            </table>

{{--                                <tr>--}}
{{--                                    <td class="serial">2.</td>--}}
{{--                                    <td class="avatar">--}}
{{--                                        <div class="round-img">--}}
{{--                                            <a href="#"><img class="rounded-circle" src="{{asset('dashboard/assets/images/avatar/2.jpg')}}" alt=""></a>--}}
{{--                                        </div>--}}
{{--                                    </td>--}}
{{--                                    <td>  <span class="name">Gregory Dixon</span> </td>--}}
{{--                                    <td> <span class="product">iPad</span> </td>--}}
{{--                                    <td>--}}
{{--                                        <span>Complete</span>--}}
{{--                                    </td>--}}
{{--                                    <td><span class="count">250</span></td>--}}

{{--                                </tr>--}}
{{--                                <tr>--}}
{{--                                    <td class="serial">3.</td>--}}
{{--                                    <td class="avatar">--}}
{{--                                        <div class="round-img">--}}
{{--                                            <a href="#"><img class="rounded-circle" src="{{asset('dashboard/assets/images/avatar/3.jpg')}}" alt=""></a>--}}
{{--                                        </div>--}}
{{--                                    </td>--}}
{{--                                    <td>  <span class="name">Catherine Dixon</span> </td>--}}
{{--                                    <td> <span class="product">SSD</span> </td>--}}
{{--                                    <td>--}}
{{--                                        <span>Complete</span>--}}
{{--                                    </td>--}}
{{--                                    <td><span class="count">250</span></td>--}}

{{--                                </tr>--}}
{{--                                <tr>--}}
{{--                                    <td class="serial">4.</td>--}}
{{--                                    <td class="avatar">--}}
{{--                                        <div class="round-img">--}}
{{--                                            <a href="#"><img class="rounded-circle" src="{{asset('dashboard/assets/images/avatar/4.jpg')}}" alt=""></a>--}}
{{--                                        </div>--}}
{{--                                    </td>--}}
{{--                                    <td>  <span class="name">Mary Silva</span> </td>--}}
{{--                                    <td> <span class="product">Magic Mouse</span> </td>--}}
{{--                                    <td>--}}
{{--                                        <span>Pending</span>--}}
{{--                                    </td>--}}
{{--                                    <td><span class="count">250</span></td>--}}

{{--                                </tr>--}}
{{--                                </tbody>--}}
{{--                            </table>--}}
                        </div> <!-- /.table-stats -->
                    </div>
                </div>






            </div>
        </div><!-- .animated -->
    </div><!-- .content -->

@endsection