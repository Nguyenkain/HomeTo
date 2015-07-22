@extends('layouts.default_admin')

{{-- Page title --}}
@section('title', 'About')

{{-- Page styles --}}
@section('styles')
@stop

{{-- Page content --}}
@section('content')
    <div class="col-md-4 col-md-offset-4">

        <img src="{{asset('assets/site/img/logo.png')}}" alt="Logo">

        <div class="login-banner text-center">

        </div>
        <div class="portlet portlet-green">
            <div class="portlet-heading login-heading">
                <div class="portlet-title">
                    <h4><strong>Đăng Nhập</strong>
                    </h4>
                </div>
                <div class="portlet-widgets">
                    &nbsp;
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="portlet-body">
                @if(Session::has('error'))
                    <div class="error">{{Session::get('error')}}</div>
                @endif
                <form method="post" action="{{URL::to('admin/login')}}" role="form">
                    <fieldset>
                        <div class="form-group">
                            <input class="form-control" placeholder="Email" name="email" type="text" autofocus="" value="{{Input::old('email')}}">
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Mật Khẩu" name="password" type="password" value="">
                        </div>
                        <br>
                        <input type="submit" class="btn btn-lg btn-green btn-block" value="Đăng Nhập">
                        <!-- CSRF Token -->
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                    </fieldset>
                    <br>
                    <p class="small">

                    </p>
                </form>
            </div>
        </div>
    </div>
@stop
