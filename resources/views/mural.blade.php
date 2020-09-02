<!DOCTYPE html>
<html lang="en">
<head><?php $posts ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Meu mural</title>
</head>
<body>
    <div class="container">
        <h1 class="title mt-4">Mural</h1>
        <ul class="list-group">
            @foreach($posts as $post)
            <li class="list-group-item">
                <h2>{{ $post['user'] }}</h2>
                <p>
                    {{ $post['texto'] }}
                </p>
            </li>
            @endforeach
        </ul>
    </div>
</body>
</html>