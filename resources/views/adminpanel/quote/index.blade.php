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
              <h6 class="text-uppercase mb-0">Quote</h6>
          </div>
          <div class="card-body table-responsive">
              <table class="table table-striped table-sm card-text" id="quote">
                <thead class="thead-light text-center">
                  <tr>
                     <th>#</th>
                     <th>Name</th>
                     <th>Email</th>
		             <th>Phone</th>
                     <th>Company Name</th>
                     <th>Box Type</th>
                     <th>Comment</th>
                     <th>File</th>
                     <th>More Details</th>
                     <th>Delete</th>
                 </tr>
                </thead>
                <tbody class="text-center">
                @if($quotes)
                @php $no=1 @endphp
                @foreach($quotes as $q)
                <tr>
                    <th scope="row">{{$no++}}</th>
                    <td>{{ $q->name }}</td>
                    <td>{{ $q->email }}</td>
                    <td>{{ $q->phone }}</td>
                    <td>{{ $q->company_name }}</td>
                    <td> {{$q->box_type}} </td>
                    <td>{{ $q->comment }}</td>
                    <td>
                        @if($q->file_type =='image')
                        <a href="{{ asset('uploads/quote/'. $q->file) }}" target="_blank"><img src="{{ asset('uploads/quote/'. $q->file) }}" width="50" height="50" /></a>
                        @else
                        <a href="{{ asset('uploads/quote/'. $q->file) }}" target="_blank"> {{$q->file}}</a>
                        @endif
                    </td>
                    <td>
                        <a type="button" class="btn bt-sm" style="color:#007bff;" data-toggle="modal" data-target="#moreDetails_{{$q->id}}">
                            More Details
                        </a>
                    </td>
                    <td>
                    <a class="delete" data-id="{{ $q->id }}" href="#"><i class="fa fa-trash"></i></a>
                    <form id="deleteForm{{$q->id}}" method="post" action="{{ route('delete_quote', $q->id) }}">
                        @csrf @method('post')
                    </form>
                    </td>
                    </tr>

                    <div class="modal fade" id="moreDetails_{{$q->id}}" tabindex="-1" role="dialog" aria-labelledby="moreDetailsLable_{{$q->id}}" aria-hidden="true">
                        <div class="modal-dialog " role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="moreDetailsLable_{{$q->id}}">{{$q->name}} </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                                <div class="modal-body">
                                    <div class="card-body table-responsive">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <ul>
                                                    <li><b>Unit :     </b> <span class="ml-5"> {{ $q->unit }}    </span></li>
                                                    <li><b>Color :    </b> <span class="ml-5"> {{ $q->color }}   </span></li>
                                                    <li><b>Width :    </b> <span class="ml-5"> {{ $q->width }}   </span></li>
                                                    <li><b>Height :   </b> <span class="ml-5"> {{ $q->height }}  </span></li>
                                                    <li><b>Length :   </b> <span class="ml-5"> {{ $q->length }}  </span></li>
                                                    <li><b>Quantity : </b> <span class="ml-5"> {{ $q->quantity }}</span></li>
                                                    <li><b>Quantity1 :</b> <span class="ml-5"> {{ $q->quantity1 }}</span></li>
                                                    <li><b>Quantity2 :</b> <span class="ml-5"> {{ $q->quantity2 }}</span></li>
                                                </ul>
                                            </div>
                                        </div>
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
            text: "You want to delete Quote!",
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
                swal("Deleted!", "Quote has been deleted.", "success");
            }, 2000);
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#quote').DataTable();
        setTimeout(function() {
           $('.alert').fadeOut('slow');
       }, 2000);
    });
</script>
@endsection
