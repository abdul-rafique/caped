<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caped</title>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" differ></script>
</head>
<body class="">
    <x-app-bar />
    <div class="min-h-screen flex flex-col items-center justify-center">
        <h1 class="text-5xl mb-5">Home Page</h1>
        <a href="/products" class="text-lg">Go To Products Page &rightarrow;</a>
    </div>
</body>
</html>