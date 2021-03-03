<!DOCTYPE html>
<head>
   <title>App name - @yield('title')</title>
   <link ref="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    @section('sidebar')
    This is the master sidebar.
    @show

    <div class="container">
        @yield('content')
    </div>

</body>
</html>
