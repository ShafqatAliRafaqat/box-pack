@extends('adminpanel.layout')
@section('content')
<div class="content-wrapper">
<div class="container-fluid px-xl-5">
 <section class="py-5">
   <div class="row">
      @include('adminpanel.notification')
      <div class="col-lg-12">
          <div class="card">
            <div class="card-header">
              <h6 class="text-uppercase mb-0">Blogs<a href="{{ route('blogs.create') }}" class="btn btn-sm btn-dark float-right">Create New</a></h6>
          </div>
          <div class="card-body table-responsive">
              <table class="table table-striped table-sm card-text" id="users">
                <thead class="thead-light text-center">
                  <tr>
                     <th>#</th>
                     <th>Title</th>
                     <th>Description</th>
                     <th>Images</th>
                     <th>Active</th>
                     <th>Actions</th>
                 </tr>
                </thead>
                <tbody class="text-center">
                @if($blogs)
                @php $no=1 @endphp
                @foreach($blogs as $b)
                <tr>
                    <th scope="row">{{$no++}}</th>
                    <td>{{ $b->title }}</td>
                    <td>{{ strip_tags($b->description) }}</td>
                    <td>
                    <a type="button" class="btn bt-sm" style="color:#007bff;" data-toggle="modal" data-target="#otherImagesModal_{{$b->id}}">
                        Images
                    </a>
					</td>
                    <td>{{ $b->is_active == 1 ? 'Active' : 'Not Active' }}</td>
                    <td><a href="{{ route('blogs.edit', $b->id) }}"><i class="fa fa-edit mr-2"></i></a>
                    <a class="delete" data-id="{{ $b->id }}" href="#"><i class="fa fa-trash"></i></a>
                    <form id="deleteForm{{$b->id}}" method="post" action="{{ route('blogs.destroy', $b->id) }}">
                        @csrf @method('delete')
                    </form>
                    </td>
                    </tr>
                    <div class="modal fade" id="otherImagesModal_{{$b->id}}" tabindex="-1" role="dialog" aria-labelledby="otherImagesModalLabel_{{$b->id}}" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="otherImagesModalLabel_{{$b->id}}">{{$b->title}}  Images</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <?php $images = BlogImages($b->id); ?>
                                <div class="row">
                                    @foreach($images as $image)
                                    <div class="col-4">
                                        <img src="{{ asset('uploads/blogs/'. $image->picture) }}" width="200px" height="200px" />
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @endif
                </tbody>
            </table>
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
<script>
    $(document).on('click', '.delete', function(){
        var id = $(this).data('id');
        swal({
            title: "Are you sure?",
            text: "You want to delete Blog!",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "btn-danger",
            cancelButtonClass: "btn-primary",
            confirmButtonText: "Yes, delete it!",
            closeOnConfirm: false,
            showLoaderOnConfirm: true
        },
        function(){
            setTimeout(function () {
                $('#deleteForm'+id).submit();
                swal("Deleted!", "Blog has been deleted.", "success");
            }, 2000);
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#users').DataTable();
        setTimeout(function() {
           $('.alert').fadeOut('slow');
       }, 2000);
    });
</script>
@endsection
