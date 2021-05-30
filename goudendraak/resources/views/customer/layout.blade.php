<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Klant Bestelpagina</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
          crossorigin="anonymous">
</head>

<body>
<div id="app">
    <navbar :categories="{{ $categories }}"></navbar>
    <main class="container mt-4">
        @yield('content')
    </main>
</div>
<script src={{asset("../js/app.js")}} defer></script>
</body>
</html>
