<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>Sunflower Sprout</title>

    <!-- <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap-theme.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Kanit&subset=thai,latin' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ URL::asset('assets/css/sweetalert.css') }}"> -->

    <link href="{{ url::asset('https://fonts.googleapis.com/css?family=Kanit&subset=thai,latin') }}" rel="stylesheet">

    <!-- Bootstrap Core CSS -->
    <link href="{{ url::asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ url::asset('bower_components/metisMenu/dist/metisMenu.min.css') }}" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="{{ url::asset('dist/css/timeline.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ url::asset('dist/css/sb-admin-2.css') }}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{ url::asset('bower_components/morrisjs/morris.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ url::asset('bower_components/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <!-- addSlider -->
    <!-- <link href="{{ url::asset('addSlider.min.css') }}" rel="stylesheet" type="text/css"> -->

    <!-- Slider Bar -->
    <link href="{{ url::asset('nouislider.min.css') }}" rel="stylesheet" type="text/css">

    <script src="https://use.fontawesome.com/35b861f9fb.js"></script>

    <style>
      body {
        font-family: 'Kanit', sans-serif;
        background-image: url("{{ url('images/background/halftone.png') }}");
      }
    </style>

  </head>
  <body>

    <div class="container">

      <div class="row" style="margin-top: 20px;">

        <div class="col-md-12">
          <ul class="nav nav-tabs">
            @if (Session::get('active_menu') == 'food')
              <li role="presentation" class="active">
            @else
              <li role="presentation">
            @endif
              <a href="{{ url('/food') }}" style="font-size: 20px;"><i class="fa fa-book"></i> เมนูต้นอ่อน</a>
            </li>
            @if (Session::get('active_menu') == 'home')
              <li role="presentation" class="active">
            @else
              <li role="presentation">
            @endif
              <a href="{{ url('/home') }}" style="font-size: 20px;"><i class="fa fa-desktop"></i> ระบบจัดการตัวเครื่อง</a>
            </li>
            <li role="presentation"><a href="{{ url('/logout') }}" style="font-size: 20px;"><i class="fa fa-sign-out"></i> ออกจากระบบ</a></li>
          </ul>
        </div>

      @yield('content')

      </div>

    </div>

  </body>
</html>
