<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<ul>
    <li>
        <a href="{{route('posts.store'),['post'=>1]}}">Post 1</a>

{{--        <a href="{{route('posts.edit'),['edit'=>1]}}">Edit</a>--}}
    </li>
    <li>
        <a href="{{route('posts.store'),['post'=>2]}}">Post 2</a>

{{--        <a href="{{route('posts.edit'),['edit'=>1]}}">Edit</a>--}}
    </li>
    <li>
        <a href="{{route('posts.store'),['post'=>3]}}">Post 3</a>

{{--        <a href="{{route('posts.edit'),['edit'=>1]}}">Edit</a>--}}
    </li>
</ul>
<form action="" method="post">
    @csrf
    <input type="text" name="title">
    <button type="submit"></button>
</form>

</body>
</html>
