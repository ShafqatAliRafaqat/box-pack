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
                        <h3 class="h6 text-uppercase mb-0">Create User</h3>
                    </div>
                    <div class="card-body">
                        <form class="form-horizontal" method="post" action="{{ route('users.store') }}">
                            @csrf
                            <div class="form-group row">
                            <label class="col-md-3 form-control-label">User Name</label>
                            <div class="col-md-9">
                                    <input type="text" name="name" placeholder="User Name"
                                    class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" value="{{ old('name') }}" required>

                                @if($errors->has('name'))
                                    <div class="invalid-feedback ml-3">{{ $errors->first('name') }}</div>
                                @endif
                            </div>
                            </div>

                            <div class="form-group row">
                            <label class="col-md-3 form-control-label">Email</label>
                            <div class="col-md-9">
                                <input type="email" name="email" placeholder="Email"
                                class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" value="{{ old('email') }}" required>

                                @if($errors->has('email'))
                                <div class="invalid-feedback ml-3">{{ $errors->first('email') }}</div>
                                @endif
                            </div>
                            </div>

                            <div class="form-group row">
                            <label class="col-md-3 form-control-label">Password</label>
                            <div class="col-md-9">
                                <input type="password" name="password" placeholder="******"
                                class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" value="{{ old('password') }}" required>

                                @if($errors->has('password'))
                                <div class="invalid-feedback ml-3">{{ $errors->first('password') }}</div>
                                @endif
                            </div>
                            </div>

                            <div class="form-group row">
                            <label class="col-md-3 form-control-label">Confirm Password</label>
                            <div class="col-md-9">
                                <input type="password" name="password_confirmation" placeholder="******"
                                class="form-control {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}" value="{{ old('password_confirmation') }}" required>

                                @if($errors->has('password_confirmation'))
                                <div class="invalid-feedback ml-3">{{ $errors->first('password_confirmation') }}</div>
                                @endif
                            </div>
                            </div>

                            <div class="form-group row">
                            <div class="col-md-9 ml-auto">
                                <button type="submit" class="btn btn-primary">Save User</button>
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
