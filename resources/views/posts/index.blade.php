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
            <th>Pulsanti</th>
          </thead>
          <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{$post->title}}</td>
                    <td>Scritto da {{$post->author}}</td>
                    <td> <a href="{{route('posts.show', $post->id)}}">Visualizza</a> </td>
                    <td> <a href="{{route('posts.edit', $post->id)}}">Modifica</a> </td>
                    <td> <form  action="{{route('posts.destroy', $post->id)}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" name="button">Elimina</button>

                    </form> </td>
                </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

    </body>
</html>
