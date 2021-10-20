<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
       <!-- CORE CSS FRAMEWORK - START -->
  <link href="{{asset('assets/plugins/pace/pace-theme-flash.css')}}" rel="stylesheet" type="text/css" media="screen" />
  <link href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('assets/plugins/bootstrap/css/bootstrap-theme.min.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('assets/fonts/font-awesome/css/font-awesome.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('assets/fonts/webfont/cryptocoins.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('assets/fonts/webfont/cryptocoins.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('assets/css/animate.min.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" type="text/css" />
  <!-- CORE CSS TEMPLATE - START -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet" type="text/css" />
    <!-- CORE CSS TEMPLATE - END -->
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />
    <script src="{{ mix('/js/app.js') }}" defer></script>
  </head>
  <body>
    @inertia

        <!-- CORE JS FRAMEWORK - START -->
  <script src="{{asset('assets/js/jquery.min.js')}}"></script>
  <script src="{{asset('assets/js/jquery.easing.min.js')}}"></script>
  <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
  {{-- <script src="{{asset('assets/plugins/pace/pace.min.js')}}"></script> --}}
  <script src="{{asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
  <script src="{{asset('assets/plugins/viewport/viewportchecker.js')}}"></script>

  <script src="{{asset('assets/js/scripts.js')}}"></script> 
  </body>
</html>