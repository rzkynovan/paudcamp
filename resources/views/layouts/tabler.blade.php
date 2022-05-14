<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="{{asset('tabler/css/tabler.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('tabler/css/demo.min.css')}}" type="text/css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <title>Paudcamp by rzkynovan</title>
</head>

<body>
    <div class="page">
        @include('components.headtabler')

        @include('components.navtabler')

        @yield('content')
    </div>
   


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="{{ asset('tabler/js/tabler.min.js') }}"></script>
    <script src="{{ asset('tabler/js/demo.min.js') }}"></script>
    
    

</body>

</html>