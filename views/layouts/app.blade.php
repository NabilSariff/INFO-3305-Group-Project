<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoeniverse App</title>

    <link rel="stylesheet" href="/css/app.css">
</head>

<body>
    @include('inc.navbar')

    <div class="container">
            @if (Request::is('*home', '*products')) 
            @include('inc.showcase')
            @endif

        <div class="row">
            <div class="col-md-8 col-lg-8">
            @if(count($errors) > 0)
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">
                    {{$error}}
                    </div>
                @endforeach
            @endif
            @yield('content')
            </div>
            <div class="col-md-4 col-lg-4">
            @if (Request::is('*home','*products'))
            @include('inc.sidebar')
            @endif
            </div>
        </div>
    </div>

<style>
    .container1{
        justify-content:space-between;
        display: flex;
        flex-direction: row;
        align-items: center;
    }
    .container2{
        justify-content:space-between;
        display: flex;
        flex-direction: row;
        align-items: center;
    }

</style>

    <footer id="footer" class="text-center">

    <p> Copyright 2021 &copy; Shoeniverse </p> 
    
    </footer>
</body>
</html>
