
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proyecto 1 - {{ $title ?? ''}}</title>
    <meta name="description" content="{{ $metaDescription ?? 'Default meta Description' }}"/>
    <!--<link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/materialize.css">-->
    @vite(['resources/css/app.css','resources/css/materialize.css'])
    <script src="js/materialize.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="shortcut icon" type="image/png" href="{{ asset('favicon.png') }}">
    <link rel="shortcut icon" sizes="192x192" href="{{ asset('favicon.png') }}">
</head>

<body>
    <br>
    <x-layouts.alert/>
    <br>
    {{ $slot }}
</body>

</html>
