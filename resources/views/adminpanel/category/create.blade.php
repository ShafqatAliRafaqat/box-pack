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
                        <h3 class="h6 text-uppercase mb-0">Create Category</h3>
                    </div>
                    <div class="card-body">
                        <form class="form-horizontal" method="post" action="{{ route('category.store') }}">
                            @csrf
                            <div class="form-group row">
                            <label class="col-md-2 form-control-label">Title</label>
                            <div class="col-md-10">
                                    <input type="text" name="title" placeholder="Enter Category Title"
                                    class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" value="{{ old('title') }}" required>

                                @if($errors->has('title'))
                                    <div class="invalid-feedback ml-3">{{ $errors->first('title') }}</div>
                                @endif
                            </div>
                            </div>

                            <div class="form-group row">
                            <label class="col-md-2 form-control-label">Picture</label>
                            <div class="col-md-4">
                                <input type="file" name="picture" placeholder="Picture"
                                class="form-control {{ $errors->has('picture') ? 'is-invalid' : '' }}" value="{{ old('picture') }}" required>

                                @if($errors->has('picture'))
                                <div class="invalid-feedback ml-3">{{ $errors->first('picture') }}</div>
                                @endif
                            </div>
                            <label class="col-md-2 form-control-label">Type</label>
                            <div class="col-md-4">
                                <select name="type" class="form-control selectpicker">
                                    <option value="">Select Catagory Type</option>
                                    <option value="Type1">Type 1</option>
                                    <option value="Type2">Type 2</option>
                                    <option value="Type3">Type 3</option>
                                </select>
                                @if($errors->has('type'))
                                    <div class="invalid-feedback ml-3">{{ $errors->first('type') }}</div>
                                @endif
                            </div>
                            </div>
                            <div class="form-group row">
                            <label class="col-md-2 form-control-label">Active</label>
                            <div class="col-md-4">
                                <div class="custom-control custom-checkbox">
                                <input id="is_active" value="1" type="checkbox" name="is_active" class="custom-control-input">
                                <label for="is_active" class="custom-control-label">Check to Active the Treatment</label>
                                </div>
                            </div>
                            <label class="col-md-2 form-control-label">Show in Menu</label>
                            <div class="col-md-4">
                                <div class="custom-control custom-checkbox">
                                <input id="show_in_menu" value="1" type="checkbox" name="show_in_menu" class="custom-control-input">
                                <label for="show_in_menu" class="custom-control-label">Show in Main Menu</label>
                                </div>
                            </div>
                            </div>
                            <div class="form-group row">
                            <label class="col-md-2 form-control-label">Article</label>
                            <div class="col-md-10">
                                <textarea placeholder="Enter Details" class="form-control tiny" name="discription"  cols="30" rows="10">{{ old('article') }}</textarea>
                                @if($errors->has('article'))
                                <div class="invalid-feedback ml-3">{{ $errors->first('article') }}</div>
                                @endif
                            </div>
                            </div>

                            <div class="form-group row">
                            <div class="col-md-9 ml-auto">
                                <button type="submit" class="btn btn-primary">Save Category</button>
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
<script src="{{ asset('assets/js/tinymce/js/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('assets/js/tinymce-config.js') }}" ></script>
<script src="{{ asset('assets/js/sweetalert/sweetalert.js') }}"></script>
@endsection
