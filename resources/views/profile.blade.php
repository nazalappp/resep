@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <b>Profile</b>
                        <ul class="navbar-nav align-items-center d-none d-md-flex">
                            <li class="nav-item dropdown">
                                <div class="row">
                                    <div class="col-md-12">
                                        <span class="avatar avatar-sm rounded-circle">
                                            <img class="rounded-circle border border-primary shadow-sm" alt="Image placeholder" src="{{asset('assets/images/pp.png')}}" width="100" height="100">
                                        </span>
                                    </div>
                                </div>
                                <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{-- <div class="d-flex justify-content-center mt-3">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="media-body ml-2 d-none d-lg-block">
                                                    <span class="text-sm mx-auto font-weight-bold">{{Auth::user()->name }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                </a>

                                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                        <i class="ni ni-user-run"></i>
                                        <span>Logout</span>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        {{-- didieu tempelkeunna --}}
                        <div class="row">
                            {{-- <div class="col-sm-12 col-md-6 col-lg-3">
                                <img class="img-profile rounded-circle"
                                    src="{{ asset(auth()->user()->image()) }}" width="200px">
                            </div> --}}
                            <div class="col-sm-12 col-md-6 col-lg-9">
                                <h1>{{ auth()->user()->name }}</h1>
                                {{-- {{ auth()->user()->name }} --}}
                                <p>
                                    <i class="bi bi-envelope "></i> <a href="https://mail.google.com/">{{ auth()->user()->email }}</a>
                                    {{-- {{ auth()->user()->role }} --}}
                                </p>
                            </div>
                        </div>
                        <h2 class="my-4">Account</h2>
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <h5>Email</h5>
                            </div>
                            <div class="col-md-4 col-lg-5">
                                <input type="text" value="{{ auth()->user()->email }}" disabled class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <h5>Password</h5>
                            </div>
                            <div class="col-md-4 col-lg-5">
                                <input type="password" value="{{ auth()->user()->password }}" disabled class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <h5>Full Name</h5>
                            </div>
                            <div class="col-md-4 col-lg-5">
                                <input type="text" value="{{ auth()->user()->name }}" disabled class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <h5>Role</h5>
                            </div>
                            <div class="col-md-4 col-lg-5">
                                <input type="text" value="{{ auth()->user()->role }}" disabled class="form-control">
                            </div>
                        </div>
                        {{-- <div class="row pb-5">
                            <div class="col-sm-12 col-md-6 col-lg-3">
                                <h5>Username</h5>
                                <br>
                                <h5>Email</h5>
                                <br>
                                <h5>Password</h5>
                                <br>
                                <h5>Full Name</h5>
                                <br>
                                <h5>Role</h5>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-5">
                                <input type="text" value="{{ auth()->user()->username }}" disabled class="form-control">
                                <br>
                                <input type="text" value="{{ auth()->user()->email }}" disabled class="form-control">
                                <br>
                                <input type="password" value="{{ auth()->user()->password }}" disabled class="form-control">
                                <br>
                                <input type="text" value="{{ auth()->user()->name }}" disabled class="form-control">
                                <br>
                                <input type="text" value="{{ auth()->user()->role }}" disabled class="form-control">
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
