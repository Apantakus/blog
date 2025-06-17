<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>

<body class="container">
    <h1>@yield('heading')</h1>
    <div class="row mt-5">
        <div class="col-md-4">
            <div class="list-group">
                <b class="list-group-item"> MENU</b>
                <a class="list-group-item" href="/">Home</a>
                <a class="list-group-item" href="/about">About</a>
                <a class="list-group-item" href="/contact">Contact</a>
            </div>
        </div>
        <div class="col-md-8 border-left">
            @yield('content')
        </div>


    </div>




    
</body>

</html>