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
              <h6 class="text-uppercase mb-0">Products<a href="{{ route('products.create') }}" class="btn btn-sm btn-dark float-right">Create New</a></h6>
          </div>
          <div class="card-body table-responsive">
              <table class="table table-striped table-sm card-text" id="products">
                <thead class="thead-light text-center">
                  <tr>
                     <th>#</th>
                     <th>Title</th>
                     <th>Discription</th>
                     <th>Category</th>
                     <th>Main Picture</th>
                     <th>Active</th>
                     <th>Edit</th>
                     <th>Delete</th>
                 </tr>
             </thead>
                <tbody class="text-center">
                @if($products)
                @php $no=1 @endphp
                @foreach($products as $p)
                <tr>
                    <th scope="row">{{$no++}}</th>
                    <td>{{ $p->title }}</td>
                    <td>{{ strip_tags($p->description) }}</td>
                    <td>
                        <?php $category_name = category_name($p->category_id); ?>
                        {{ $category_name->title }}
                    </td>
                    <td>{{ $p->is_active == 1 ? 'Active' : 'Not Active' }}</td>
                    <td><a href="{{ route('products.edit', $p->id) }}"><i class="fa fa-edit"></i></a></td>
                    <td>
                    <a class="delete" data-id="{{ $p->id }}" href="#"><i class="fa fa-trash"></i></a>
                    <form id="deleteForm{{$p->id}}" method="post" action="{{ route('products.destroy', $p->id) }}">
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
            text: "You want to delete User!",
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
                swal("Deleted!", "User has been deleted.", "success");
            }, 2000);
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#products').DataTable();
        setTimeout(function() {
           $('.alert').fadeOut('slow');
       }, 2000);
    });
</script>
@endsection
