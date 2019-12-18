<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Images</title>
</head>
<body>
    @foreach ($images as $image)
        <p>{{ $image->id }}</p>
        <img src="{{ $image->url }}" >
    @endforeach
</body>
</html>