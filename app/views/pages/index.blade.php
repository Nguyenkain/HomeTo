@extends('layouts.default_admin')

{{-- Content --}}
@section('content')

    <div class="col-lg-12">
        {{Form::open(array('url' => URL::to('apartment'), 'method' => 'GET'))}}
        <div class="portlet portlet-default">
            <div class="portlet-heading">
                <div class="portlet-title">
                    <h4>{{Lang::get('title.project_ơwner')}}</h4>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="portlet-body">

                <div class="form-group {{$errors->has('project') ? "has-error" : false}}">
                    <div class="row">
                        {{Form::label('project', Lang::get('title.project').' *', array('class' => 'col-sm-2 control-label'));}}
                        <div class="col-sm-8">
                            {{Form::select('project', $projects ,null, array('class' => 'form-control'))}}
                            {{ $errors->first('project', "<span for='project' class='help-block'><i class='fa fa-warning'></i> :message</span>")}}
                        </div>
                        <div class="col-sm-2">
                            <a href="{{URL::to('project')}}" class="btn btn-blue"> {{Lang::get('title.create')}} </a>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-offset-2 col-sm-10">
                            <input class="btn btn-success" type="submit" value="{{Lang::get('title.submit')}}">
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.portlet-body -->
        </div>
        <!-- /.portlet -->

        {{Form::close()}}


    </div>
    <!-- /.col-lg-12 -->
@stop
