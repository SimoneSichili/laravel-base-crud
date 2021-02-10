<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- my css --}}
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
    <title>Laravel CRUD</title>
</head>
<body>
    <div class="container">
        <h1 class="mt-5 text-center"><a href="{{ route("beers.index") }}">Vai alle mie birre</a></h1>
    </div>
</body>
</html>