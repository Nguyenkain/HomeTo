@extends('layouts.default_admin')

{{-- Page title --}}
@section('title', Lang::get('title.sign_up'))

{{-- Page styles --}}
@section('styles')
@stop

{{-- Page content --}}
@section('content')
    <div class="col-lg-12">
        <div class="portlet portlet-default">
            <div class="portlet-heading">
                <div class="portlet-title">
                    <h4>{{Lang::get('title.sign_up')}}</h4>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="portlet-body">
                {{ Form::open(['route' => 'account.store']) }}

                        <!-- name -->
                <div class="form-group {{ $errors->has('full_name') ? ' has-error' : '' }}">
                    {{ Form::label('full_name', 'Name:') }}
                    {{ Form::text('full_name', null, ['class' => 'form-control', 'required' => 'required']) }}
                    {{ $errors->first('full_name', '<span class="help-block error">:message</span>') }}
                </div>

                <!-- email -->
                <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                    {{ Form::label('email', 'Email:') }}
                    {{ Form::text('email', null, ['class' => 'form-control', 'required' => 'required']) }}
                    {{ $errors->first('email', '<span class="help-block error">:message</span>') }}
                </div>

                <!-- phone -->
                <div class="form-group {{ $errors->has('phone') ? ' has-error' : '' }}">
                    {{ Form::label('phone', 'Điện thoại:') }}
                    {{ Form::text('phone', null, ['class' => 'form-control', 'required' => 'required']) }}
                    {{ $errors->first('phone', '<span class="help-block error">:message</span>') }}
                </div>

                <!-- password -->
                <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                    {{ Form::label('password', 'Password:') }}
                    {{ Form::password('password', ['class' => 'form-control', 'required' => 'required']) }}
                    {{ $errors->first('password', '<span class="help-block error">:message</span>') }}
                </div>

                <!-- password confirm-->
                <div class="form-group">
                    {{ Form::label('password_confirmation', 'Xác nhận Password:') }}
                    {{ Form::password('password_confirmation', ['class' => 'form-control', 'required' => 'required']) }}
                </div>

                <div class="form-group">
                    {{ Form::submit(Lang::get('title.submit'), ['class' => 'btn btn-primary']) }}
                </div>

                {{ Form::close() }}
            </div>
        </div>
    </div>

@stop
