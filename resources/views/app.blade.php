<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mr X</title>
    <link rel="icon" type="image/x-icon" href="{{ asset("favicon.ico") }}">
    <link rel="stylesheet" href="{{ asset("css/bootstrap.css") }}">
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">
    <script src="{{ asset("js/axios.min.js") }}"></script>
</head>

<body class="d-flex flex-column h-100">

    @include("componants.navbar")
    @include("componants.loader")

    <div class="" id="content-div">
        @yield('contents')
    </div>   
    
    @include("componants.footer")


    <script src="{{ asset("js/bootstrap.bundle.min.js") }}"></script>
    

</body>
</html>