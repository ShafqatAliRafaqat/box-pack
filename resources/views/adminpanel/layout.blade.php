<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Ansonika">
  <title>Admin dashboard</title>
  <!-- Favicons-->
  <link rel="shortcut icon" href="{{ asset('website/favicon.ico') }}" type="image/x-icon">
  <link rel="apple-touch-icon" type="image/x-icon" href="assets/img/apple-touch-icon-57x57-precomposed.png">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="assets/img/apple-touch-icon-72x72-precomposed.png">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="assets/img/apple-touch-icon-114x114-precomposed.png">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="assets/img/apple-touch-icon-144x144-precomposed.png">
	
  <!-- Bootstrap core CSS-->
  <link href="{{ asset('assets/js/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- Icon fonts-->
  <link href="{{ asset('assets/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
  <!-- Plugin styles -->
  <link href="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/js/sweetalert/sweetalert.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('assets/js/datatables/css/datatables.min.css') }}">
  <!-- Main styles -->
  <link href="{{ asset('assets/css/admin.css') }}" rel="stylesheet">
  <!-- Your custom styles -->
  <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">
	
</head>

<body class="fixed-nav sticky-footer" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-default fixed-top" id="mainNav">
    <a class="navbar-brand" href="{{route('adminDashboard')}}"><img src="{{asset('assets/img/logo.png')}}" data-retina="true" alt="" width="163" height="36"></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="{{route('adminDashboard')}}">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Category">
          <a class="nav-link {{ Request::segment(2) == 'category' ? 'active' : ''}}" href="{{ route('category.index') }}">
            <i class="fa fa-list-alt"></i>
            <span class="nav-link-text">Category</span>
          </a>
        </li>
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Products">
            <a class="nav-link {{ Request::segment(2) == 'labs' ? 'products' : ''}}" href="{{ route('products.index') }}">
            <i class="fa fa-product-hunt"></i>
            <span class="nav-link-text">Products</span>
          </a>
        </li>
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Blogs">
            <a class="nav-link {{ Request::segment(2) == 'blogs' ? 'active' : ''}}" href="{{ route('blogs.index') }}">
            <i class="fa fa-newspaper-o"></i>
            <span class="nav-link-text">Blogs</span>
          </a>
        </li>
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Quote">
            <a class="nav-link {{ Request::segment(2) == 'quotes' ? 'active' : ''}}" href="{{ route('quotes') }}">
            <i class="fa fa-question-circle"></i>
            <span class="nav-link-text">Quote</span>
          </a>
    </li>
    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Product Faq">
          <a class="nav-link {{ Request::segment(2) == 'product_faq' ? 'active' : ''}}" href="{{ route('product_faq') }}">
          <i class="fa fa-question-circle"></i>
          <span class="nav-link-text">Product Faq</span>
        </a>
    </li>
    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Contacts">
        <a class="nav-link {{ Request::segment(2) == 'contacts' ? 'active' : ''}}" href="{{ route('contacts') }}">
        <i class="fa fa-address-book"></i>
        <span class="nav-link-text">Contacts</span>
      </a>
    </li>
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Users">
            <a class="nav-link {{ Request::segment(2) == 'users' ? 'active' : ''}}" href="{{ route('users.index') }}">
            <i class="fa fa-users fa-plus-circle"></i>
            <span class="nav-link-text">Users</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-envelope"></i>
            <span class="d-lg-none">Messages
              <span class="badge badge-pill badge-primary">12 New</span>
            </span>
            <span class="indicator text-primary d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <?php $quotes = Quote();?>
          <div class="dropdown-menu" aria-labelledby="messagesDropdown">
            <h6 class="dropdown-header">New Messages:</h6>
            <div class="dropdown-divider"></div>
            @if(count($quotes)>0)
              @foreach($quotes as $data)
              <a class="dropdown-item" href="/admin/quote">
                <strong>{{ $data->name}}</strong>
                <span class="small float-right text-muted">{{$data->created_at}}</span>
                <div class="dropdown-message small">{{$data->comment}}</div>
              </a>
              <div class="dropdown-divider"></div>
              @endforeach
            @endif
            <a class="dropdown-item small" href="/admin/quote">View all Quotes</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-bell"></i>
            <span class="d-lg-none">Alerts
              <span class="badge badge-pill badge-warning">6 New</span>
            </span>
            <span class="indicator text-warning d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <?php $product_faq = ProductFaq();?>
          <div class="dropdown-menu" aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">New Product Faqs</h6>
            <div class="dropdown-divider"></div>
            @if(count($product_faq)>0)
              @foreach($product_faq as $data)
              <a class="dropdown-item" href="/admin/product_faq">
                <strong>{{$data->name}}</strong>
                <span class="small float-right text-muted">{{$data->created_at}}</span>
                <div class="dropdown-message small">{{$data->comment}}</div>
              </a>
              <div class="dropdown-divider"></div>
              @endforeach
            @endif
            <a class="dropdown-item small" href="/admin/product_faq">View all Product Faq</a>
          </div>
        </li>
        <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group">
              <input class="form-control search-top" type="text" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#logoutModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- /Navigation-->
  @yield('content')
  <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Box Pack 2020</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="logoutModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('assets/js/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{ asset('assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <!-- Page level plugin JavaScript-->
    <script src="{{ asset('assets/vendor/chart.js/Chart.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ asset('assets/vendor/retina-replace.min.js') }}"></script>
    <script src="{{ asset('assets/js/sweetalert/sweetalert.js') }}"></script>
    <script src="{{ asset('assets/js/fileupload.js') }}" ></script>    
    <script src="{{ asset('assets/js/fileupload2.js') }}" ></script>
    <script src="{{ asset('assets/js/tinymce/js/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-inputmask.min.js') }}"></script>
    <script src="{{ asset('assets/js/tinymce-config.js') }}" ></script>
    <script src="{{asset('assets/js/bootstrap-imageupload.js')}}"></script>

	  <script src="{{ asset('assets/vendor/jquery.magnific-popup.min.js') }}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{ asset('assets/js/admin.js') }}"></script>
	  <!-- Custom scripts for this page-->
    <script src="{{ asset('assets/js/admin-charts.js') }}"></script>
	@yield('scripts')
</body>
</html>
