@extends('themes::layouts.master')

@section('content')

    <div class="page-wrapper p-0" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
        <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
            <div class="d-flex align-items-center justify-content-center w-100">
                <div class="card auth-card mb-0 mx-3">
                    <div class="card-body">
                        <a href="{{url('')}}" class="text-nowrap logo-img text-center d-block py-3 w-100">
                            <img src="{{url('assets/xelenic.png')}}" width="180" alt="{{config('app.name')}}">
                        </a>
                        <form action="{{url('register')}}" method="post">
                            {{ csrf_field()}}
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">{{__('Name')}}</label>
                                <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                @if ($errors->has('name'))
                                    <div class="error" style="background: #df5454;color: white;padding: 4px;margin-top: 7px;border-radius: 3px;padding-left: 10px;padding-right: 10px;margin-left: 10px;margin-right: 10px;">{{ $errors->first('name') }}</div>
                                @endif
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">{{__('Username')}}</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                @if ($errors->has('email'))
                                    <div class="error" style="background: #df5454;color: white;padding: 4px;margin-top: 7px;border-radius: 3px;padding-left: 10px;padding-right: 10px;margin-left: 10px;margin-right: 10px;">{{ $errors->first('email') }}</div>
                                @endif
                            </div>
                            <div class="mb-4">
                                <label for="exampleInputPassword1" class="form-label">{{__('Password')}}</label>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                                @if ($errors->has('password'))
                                    <div class="error" style="background: #df5454;color: white;padding: 4px;margin-top: 7px;border-radius: 3px;padding-left: 10px;padding-right: 10px;margin-left: 10px;margin-right: 10px;">{{ $errors->first('password') }}</div>
                                @endif
                            </div>
                            <div class="mb-4">
                                <label for="exampleInputPassword1" class="form-label">{{__('Password')}}</label>
                                <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1">
                                @if ($errors->has('password'))
                                    <div class="error" style="background: #df5454;color: white;padding: 4px;margin-top: 7px;border-radius: 3px;padding-left: 10px;padding-right: 10px;margin-left: 10px;margin-right: 10px;">{{ $errors->first('password') }}</div>
                                @endif
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <div class="form-check">
                                    <input class="form-check-input primary" type="checkbox" value="" id="flexCheckChecked" checked="">
                                    <label class="form-check-label text-dark" for="flexCheckChecked">
                                        {{__('Remember this Device')}}
                                    </label>
                                </div>
                                <a class="text-primary fw-bold" href="./index.html">{{__('Forgot Password ?')}}</a>
                            </div>
                            <button type="submit" class="btn btn-primary w-100 fs-4 mb-4">{{__('Sign In')}}</button>
                            <div class="d-flex align-items-center justify-content-center">
                                <p class="fs-4 mb-0 fw-bold">New to {{config('app.name')}}?</p>
                                <a class="text-primary fw-bold ms-2" href="{{url('login')}}">{{__('Already have a account')}}</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
