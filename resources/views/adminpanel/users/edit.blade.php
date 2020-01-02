
@extends('adminpanel.layout')
@section('content')
    <div class="content-wrapper">
        <div class="container-fluid px-xl-5">
            <section class="py-5">
                <div class="row">
                @include('adminpanel.notification')
                <div class="col-lg-12 mb-5">
                    <div class="card">
                    <div class="card-header">
                        <h3 class="h6 text-uppercase mb-0">Update User</h3>
                    </div>
                    <div class="card-body">
                        <form class="form-horizontal" method="post" action="{{ route('users.update', $user->id) }}">
                        @csrf
                        @method('put')
                            <div class="form-group row">
                            <label class="col-md-3 form-control-label">User Name</label>
                            <div class="col-md-9">
                                <input type="text" name="name" placeholder="User Name"
                                class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" value="{{ $user->name }}" required>

                                @if($errors->has('name'))
                                <div class="invalid-feedback ml-3">{{ $errors->first('name') }}</div>
                                @endif
                            </div>
                            </div>

                            <div class="form-group row">
                            <label class="col-md-3 form-control-label">Email</label>
                            <div class="col-md-9">
                                <input type="text" name="email" value="{{ $user->email }}" placeholder="User Email"
                                class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" >

                                @if($errors->has('email'))
                                <div class="invalid-feedback ml-3">{{ $errors->first('email') }}</div>
                                @endif
                            </div>
                            </div>

                            <div class="form-group row">
                            <label class="col-md-3 form-control-label">Password</label>
                            <div class="col-md-9">
                                <input type="password" name="password" placeholder="******"
                                class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" required value="{{ old('password') }}" >

                                @if($errors->has('password'))
                                <div class="invalid-feedback ml-3">{{ $errors->first('password') }}</div>
                                @endif
                            </div>
                            </div>

                            <div class="form-group row">
                            <label class="col-md-3 form-control-label">Confirm Password</label>
                            <div class="col-md-9">
                                <input type="password" name="password_confirmation" required placeholder="******"
                                class="form-control {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}" value="{{ old('password_confirmation') }}">

                                @if($errors->has('password_confirmation'))
                                <div class="invalid-feedback ml-3">{{ $errors->first('password_confirmation') }}</div>
                                @endif
                            </div>
                            </div>

                            <div class="form-group row">
                            <div class="col-md-9 ml-auto">
                                <a href="{{ route('users.index') }}" class="btn btn-secondary">Cancel</a>
                                <button type="submit" class="btn btn-primary">Update changes</button>
                            </div>
                            </div>
                        </form>
                    </div>
                    </div>
                </div>
                </div>
            </section>
        </div>
    </div>
@endsection
@section('scripts')
<script src="{{ asset('assets/js/sweetalert/sweetalert.js') }}"></script>
@endsection
