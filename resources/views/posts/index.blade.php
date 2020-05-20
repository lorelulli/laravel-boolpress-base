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
        <table class="table">
          <thead>
            <th>Titolo</th>
            <th>Autore</th>
          </thead>
          <tbody>
            @foreach ($posts as $post)
                <tr>
                <td><a href="{{route('posts.show', $post->slug)}}">{{$post->title}}</a></td>
                  <td>Scritto da {{$post->author}}</td>
                </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

    </body>
</html>
