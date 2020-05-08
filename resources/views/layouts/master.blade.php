<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.3.0/css/bulma.min.css">
    <link rel="stylesheet" href="/css/app.css">
    <title>My App</title>

</head>

<body>
    </div id="app">
    <router-link to="/">Home</router-link>
    <router-link to="/about">About</router-link>
    <router-view></router-view>
    </div>
    <script src="/resources/assets/js/app.js"></script>
</body>

</html>