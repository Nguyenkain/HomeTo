@extends('layouts.default')

{{-- Page title --}}
@section('title', 'About')

{{-- Page styles --}}
@section('styles')
@stop

{{-- Page content --}}
@section('content')
<div class="container">
    <div class="page-header">
        <h1>Account: </h1>
    </div>
    <p>Name: {{ Auth::user()->name }}</p>
    <p>Email: {{ Auth::user()->email }}</p>
</div>
@stop
