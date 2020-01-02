@extends('adminpanel.layout')
@section('title', 'Home')
@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            @include('adminpanel.dashboard')
        </div>
    </div>
@endsection

