@extends('adminpanel.layout')
@section('styles')
<link rel="stylesheet" href="{{ asset('backend/css/fileupload.css') }}">
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
@endsection
@section('content')
    <div class="content-wrapper">
        <div class="container-fluid px-xl-5">
            <section class="py-5">
                <div class="row">
                @include('adminpanel.notification')
                <div class="col-lg-12 mb-5">
                    <div class="card">
                    <div class="card-header">
                        <h3 class="h6 text-uppercase mb-0">Edit Product</h3>
                    </div>
                    <div class="card-body">
                        <form class="form-horizontal" method="post" action="{{ route('products.update', $product->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label class="col-md-2 form-control-label">Select Category <span class="asterisk"> *</span></label>
                                <div class="col-md-10">
                                <select name="category_id" class="form-control selectpicker">
                                    <option value="">Select Catagory</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}" {{($category->id == $product->category_id)? 'selected':''}}>{{$category->title}}</option>
                                    @endforeach
                                </select>
                                    @if($errors->has('title'))
                                        <div class="invalid-feedback ml-3">{{ $errors->first('title') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 form-control-label">Title <span class="asterisk"> *</span></label>
                                <div class="col-md-10">
                                        <input type="text" name="title" placeholder="Enter Product Title"
                                        class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" value="{{ $product->title }}" required>

                                    @if($errors->has('title'))
                                        <div class="invalid-feedback ml-3">{{ $errors->first('title') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                            <label class="col-md-2 form-control-label">Picture</label>
                            <div class="col-md-4">
                                <input type="file" name="picture" placeholder="Picture"
                                class="form-control {{ $errors->has('picture') ? 'is-invalid' : '' }}" value="">

                                @if($errors->has('picture'))
                                <div class="invalid-feedback ml-3">{{ $errors->first('picture') }}</div>
                                @endif
                            </div>
                            <label class="col-md-2 form-control-label">Other Picture</label>
                            <div class="col-md-4">
                                <input type="file" name="other_picture[]" placeholder="Picture"
                                class="form-control {{ $errors->has('other_picture') ? 'is-invalid' : '' }}" value="">

                                @if($errors->has('other_picture'))
                                <div class="invalid-feedback ml-3">{{ $errors->first('other_picture') }}</div>
                                @endif
                            </div>
                            </div>
                            <div class="form-group row">
                            <label class="col-md-2 form-control-label">Active</label>
                            <div class="col-md-4">
                                <div class="custom-control custom-checkbox">
                                <input id="is_active" value="1" type="checkbox" name="is_active" class="custom-control-input" {{($product->is_active == 1)? 'checked':''}}>
                                <label for="is_active" class="custom-control-label">Check to Active the Treatment</label>
                                </div>
                            </div>
                            <label class="col-md-2 form-control-label">Show in Menu</label>
                            <div class="col-md-4">
                                <div class="custom-control custom-checkbox">
                                <input id="in_menu" value="1" type="checkbox" name="in_menu" class="custom-control-input" {{($product->in_menu == 1)? 'checked':''}}>
                                <label for="in_menu" class="custom-control-label">Show in Main Menu</label>
                                </div>
                            </div>
                            </div>
                            <div class="form-group row">
                            <label class="col-md-2 form-control-label">description</label>
                            <div class="col-md-10">
                                <textarea placeholder="Enter Details" class="form-control" id="description" name="description"  cols="30" rows="10">{{ $product->description }}</textarea>
                                <input name="image" type="file" id="upload" class="hidden" onchange="">
                                @if($errors->has('description'))
                                <div class="invalid-feedback ml-3">{{ $errors->first('description') }}</div>
                                @endif
                            </div>
                            </div>

                            <div class="form-group row">
                            <div class="col-md-9 ml-auto">
                                <button type="submit" class="btn btn-primary">Update Product</button>
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
<!-- <script src="https://cdn.tiny.cloud/1/APIKEY/tinymce/5/tinymce.min.js"></script> -->
<script>
    $(document).ready(function() {
        tinymce.init({
          selector: "#description",
          theme: "modern",
          height: 700,
          paste_data_images: true,
          plugins: [
            "advlist autolink lists link image charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars code fullscreen",
            "insertdatetime media nonbreaking save table contextmenu directionality",
            "emoticons template paste textcolor colorpicker textpattern"
          ],
          toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
          toolbar2: "print preview media | forecolor backcolor emoticons",
          image_advtab: true,
          file_picker_callback: function(callback, value, meta) {
            if (meta.filetype == 'image') {
                
              $('#upload').trigger('click');
              $('#upload').on('change', function() {
                var file = this.files[0];
                var reader = new FileReader();
                reader.onload = function(e) {
                  callback(e.target.result, {
                    alt: ''
                  });
                };
                reader.readAsDataURL(file);
              });
            }
          },
          templates: [{
            title: 'Test template 1',
            content: 'Test 1'
          }, {
            title: 'Test template 2',
            content: 'Test 2'
          }]
        });
      });
</script>
@endsection
