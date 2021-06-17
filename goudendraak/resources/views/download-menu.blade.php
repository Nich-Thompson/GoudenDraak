<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menu</title>

    <style>
        .dish {
            margin-bottom: 2rem;
        }
    </style>
</head>
<body>
<h1>Menu</h1>
@foreach($categories as $category)
    <h2>{{$category->name}}</h2>

    @foreach($category->dishes as $dish)
        <div class="dish">

            <h4>{{$dish->name}}</h4>
            @if($dish->description != null)
                <p>{{$dish->description}}</p>
            @endif
        </div>
    @endforeach
@endforeach
</body>
</html>
