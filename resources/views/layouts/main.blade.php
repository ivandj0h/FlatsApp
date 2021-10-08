<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <title>{{ $title }}</title>
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/css/bootstrap.css') !!}">
</head>
<body>

@include('partials.navbar')

      <div class="container mt-4">
            @yield('container')
      </div>
</body>
</html>