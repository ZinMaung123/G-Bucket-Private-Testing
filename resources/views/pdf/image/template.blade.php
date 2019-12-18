<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Image Pdf</title>
</head>
<body>
    <table>
        <thead style="background: red;">
            <tr>
                <th>ID</th>
                <th>URL</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $image->id }}</td>
                <td>
                    <img src="{{ $image->url }}">
                </td>
            </tr>
        </tbody>
    </table>
</body>
</html>