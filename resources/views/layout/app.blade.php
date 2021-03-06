<!DOCTYPE html>
<html lang="it">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
          integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
          crossorigin="anonymous"/>
    <!-- JQuery cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
            integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
            crossorigin="anonymous"></script>
    <!-- Google fonts cdn -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <!-- My custom style -->
    @if($route->uri == '/')
        <link rel="stylesheet" href="css/app.css">
    @else
        <link rel="stylesheet" href="../css/app.css">
    @endif


    <meta charset="UTF-8">
    <title>laravel-comics</title>
</head>
<body>
    <header>
        @include('partials.nav')
        @include('partials.jumbo')
    </header>

        @yield('main')

    <footer>
        @include('partials.footer')
    </footer>



<!-- My custom JS script -->
    @if($route->uri == '/')
        <script src="js/app.js"></script>
    @else
        <script src="../js/app.js"></script>
    @endif

</body>
<!-- laravel-comics - 12/05/21
 Author: lorenzobernini -->
</html>
