<!DOCTYPE html>
<html lang="ar">

<head>
    <title>
        Green Harvest
    </title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div>
        @include('layout.header')
    </div>
    <div class="main">
        @yield('content')
    </div>
    </div>
    @include('layout.footer')
    </div>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
