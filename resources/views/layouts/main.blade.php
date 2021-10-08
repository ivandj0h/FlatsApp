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
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,900' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/css/customs.css') !!}">
</head>
<body>

@include('partials.navbar')

      <div class="container mt-4">
            @yield('container')
      </div>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/fontawesome-iconpicker/3.1.0/js/fontawesome-iconpicker.min.js"></script>
</body>
</html>