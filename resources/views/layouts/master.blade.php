<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8" />

<head>
    <title> Furbook </title>
    <link rel = "stylesheet" href="{{ asset(css/bootstrap.min.css) }}">
</head>
<body>
    <div class = "container">
        <div class="page-header">
            @yield('header')
        </div>

        @if(Session::has('success'))
            <div class="alert alert-sucess">
                {{ Session::get('sucess') }}
            </div>
        @endif
        yield('content')
    </div>
</body>
</html>