<html>
<head>

    <title>@yield('title')</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{url('/js/popper.min.js')}}"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- <link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}"> -->
    <link rel="stylesheet" href="{{URL::asset('css/custome.css')}}"> 
    <!-- <script src="{{url('/js/bootstrap.min.js')}}"></script> -->
</head>

<body>
 @include('layout.menu')

 @yield('content')

 @include('layout.footer')


<script src="{{asset('js/jquery-3.5.1.slim.min.js')}}"></script>
<script src="{{asset('js/custome.js')}}"></script> 
</body>


</html>