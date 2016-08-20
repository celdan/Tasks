<!DOCTYPE html>
<html lang="en" >
<head>

  <meta charset="utf-8" />
  <meta name="author" content="Script Tutorials" />
  <title>Task Scheduler</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <!-- css srs -->
  <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  <link rel="stylesheet" href="{{ asset('js/jquery-ui/jquery-ui.min.css') }}" type="text/css" />
  <link rel="stylesheet" type="text/css" href="{{ asset('DataTables/media/css/jquery.datatables.min.css') }}"/>
  <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
  <!-- end -->

  <!-- script src -->
  <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.8.4/moment.min.js"></script>
  <script type="text/javascript" src="{{ asset('js/jquery-1.11.3.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/jquery-ui/jquery-ui.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('DataTables/media/js/jquery.datatables.min.js')}}"></script>
</head>
	<body>
	@include('layouts.nav-bar')
  @include('layouts.menu')
	@yield('content')


</body>
</html>