@extends('layouts.app')
@section('title') Reset Password @endsection

@section('content')
    <div class="container" id="reset-password">
        @if(Session::has('message'))
            <h3 class="alert-danger">{{ Session::get('message') }}</h3>
        @else
            <h3>Reset Password</h3>
            @include('elements.change_password')
        @endif
    </div>
@endsection
