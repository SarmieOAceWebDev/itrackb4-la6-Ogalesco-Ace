<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1>the Subject Management System</h1>

 @include('partials._nav')


        <p>Prepared by: Ace Sarmiento Ogalesco</p>
        @yield('content')

    </div>

</body>
</html>