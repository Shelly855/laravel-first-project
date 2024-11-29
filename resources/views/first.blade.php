<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>This is our first laravel view</h1>

    <!--Curly braces are for php-->
    <!--returns Route::get('/group-test', function(){
        return 'Hello Admin';
    })->name('first'); -->
    <a href="{{ route('admin.first') }}">Test</a>
</body>
</html>
