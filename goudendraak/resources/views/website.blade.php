<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Golden Dragon</title>

    <link rel="stylesheet" href="/css/bootstrap-grid.css">
    <link rel="stylesheet" href="/css/website.css">
</head>
<body>
<div>
    <div id="app">
        <website-header></website-header>
        <content-wrapper>
            @yield('content')
        </content-wrapper>
    </div>
</div>
<script src={{asset("../js/app.js")}} defer></script>
</body>
</html>
