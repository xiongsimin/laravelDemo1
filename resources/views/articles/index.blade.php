<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>articles</h2>
    @foreach($articles as $article)
    <h3><a href="{{url('articles',$article->id)}}">{{ $article->title }}</a></h3>
    <h4>
        {{$article->content}}
    </h4>
    @endforeach
</body>
</html>