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
              <h6 class="text-uppercase mb-0">Categories<a href="{{ route('category.create') }}" class="btn btn-sm btn-dark float-right">Create New</a></h6>
          </div>
          <div class="card-body table-responsive">
              <table class="table table-striped table-sm card-text" id="category">
                <thead class="thead-light text-center">
                  <tr>
                     <th>#</th>
                     <th>Title</th>
                     <th>Type</th>
		             <th>Picture</th>
                     <th>Active</th>
                     <th>Show in Menu</th>
                     <th>Edit</th>
                     <th>Delete</th>
                 </tr>
                </thead>
                <tbody class="text-center">
                @if($categories)
                @php $no=1 @endphp
                @foreach($categories as $c)
                <tr>
                    <th scope="row">{{$no++}}</th>
                    <td>{{ $c->title }}</td>
                    <td>{{ $c->type }}</td>
                    <td>
						<img src="{{ asset('uploads/categories/'. $c->picture) }}" width="50" height="50" />
					</td>
                    <td>{{ $c->is_active == 1 ? 'Active' : 'Not Active' }}</td>
                    <td>{{ $c->in_menu == 1 ? 'Show in Menu' : 'Dont Show in menu '}}</td>
                    <td><a href="{{ route('category.edit', $c->id) }}"><i class="fa fa-edit"></i></a></td>
                    <td>
                    <a class="delete" data-id="{{ $c->id }}" href="#"><i class="fa fa-trash"></i></a>
                    <form id="deleteForm{{$c->id}}" method="post" action="{{ route('category.destroy', $c->id) }}">
                        @csrf @method('delete')
                    </form>
                    </td>
                    </tr>
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
            text: "You want to delete Category!",
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
                swal("Deleted!", "Category has been deleted.", "success");
            }, 2000);
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#category').DataTable();
        setTimeout(function() {
           $('.alert').fadeOut('slow');
       }, 2000);
    });
</script>
@endsection
