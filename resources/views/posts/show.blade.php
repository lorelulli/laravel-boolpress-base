<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <div class="container">
    <div class="row">
      <div class="col-12">
        <h2>{{$post->title}}</h2>
        <small>Scritto da {{$post->author}}</small>
        <div>
          {{$post->body}}
        </div>
        <img src="{{$post->img}}" alt="{{$post->title}}">
      </div>
    </div>
  </div>

    </body>
</html>
