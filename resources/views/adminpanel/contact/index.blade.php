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
              <h6 class="text-uppercase mb-0">Contact Query</h6>
          </div>
          <div class="card-body table-responsive">
              <table class="table table-striped table-sm card-text" id="contact_us">
                <thead class="thead-light text-center">
                  <tr>
                     <th>#</th>
                     <th>Name</th>
                     <th>Email</th>
		             <th>Phone</th>
                     <th>Comments</th>
                     <th>Delete</th>
                 </tr>
                </thead>
                <tbody class="text-center">
                @if($contacts)
                @php $no=1 @endphp
                @foreach($contacts as $c)
                <tr>
                    <th scope="row">{{$no++}}</th>
                    <td>{{ $c->name }}</td>
                    <td>{{ $c->email }}</td>
                    <td>{{ $c->phone }}</td>
                    <td>{{ $c->comment }}</td>
                    <td>
                    <a class="delete" data-id="{{ $c->id }}" href="#"><i class="fa fa-trash"></i></a>
                    <form id="deleteForm{{$c->id}}" method="post" action="{{ route('delete_contact', $c->id) }}">
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
            text: "You want to delete contact!",
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
                swal("Deleted!", "Data has been deleted.", "success");
            }, 2000);
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#contact_us').DataTable();
        setTimeout(function() {
           $('.alert').fadeOut('slow');
       }, 2000);
    });
</script>
@endsection
