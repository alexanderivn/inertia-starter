<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{config('app.name', 'Laravel')}}</title>
    @routes
    @vite('resources/js/app.js')
    @inertiaHead
</head>
<body class="antialiased">
@inertia
</body>
</html>
