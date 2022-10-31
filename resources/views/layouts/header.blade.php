<html>
</head>    
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Corner Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('theme/vendors/feather/feather.css')}}">
  <link rel="stylesheet" href="{{asset('theme/vendors/ti-icons/css/themify-icons.css')}}v">
  <link rel="stylesheet" href="{{asset('theme/vendors/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{asset('theme/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
  <link rel="stylesheet" href="{{asset('theme/vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('theme/js/select.dataTables.min.css')}}">
  <link rel="stylesheet" href="{{asset('theme/vendors/select2/select2.min.css')}}">
  <link rel="stylesheet" href="{{asset('theme/vendors/select2-bootstrap-theme/select2-bootstrap.min.css')}}">
  <!-- End plugin css for this page -->
   <!-- Custom css -->
   <link rel="stylesheet" href="{{asset('theme/css/custom.css')}}">
   <link rel="stylesheet" href="{{asset('theme/css/add_items.css')}}">

  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('theme/css/vertical-layout-light/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('theme/images/favicon.png')}}" />
</head>
<body>
    <div class="container-scroller">

        @include('layouts.navbar')
        <div class="container-fluid page-body-wrapper">

            @include('layouts.sidebar')
            @include('layouts.setting')
            @yield('content')
        </div>
        @include('layouts.footer')
    </div>
</body>
</html>
