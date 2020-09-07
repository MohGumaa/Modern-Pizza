<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name', 'Modern Pizza')}}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" href="/css/main.css">
            
    </head>
    <body>

        @yield('content')

        <footer>
            Copyright @php echo date('Y') @endphp Modern Pizza
        </footer>
    </body>
</html>