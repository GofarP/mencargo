<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('partials.partials-css.css-dashboard')
</head>
<body>

    @livewire('testing.testing-index')
    @include('partials.partials-javascript.javascript-dashboard')
    <x:pharaonic-select2::scripts />

</body>
</html>
