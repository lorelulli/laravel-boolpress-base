<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

        <form class="" action="{{route('posts.update', $post->id)}}" method="post">
            @csrf
            @method('PUT')
            <div>
     <label for="title">Titolo</label>
     <input type="text" placeholder="Inserisci i titolo" name="title" value= '{{$post->title}}'>
     @error('title')
       <div class="alert alert-danger">{{ $message }}</div>
    @enderror
   </div>
   <div>
     <label for="title">Testo</label>
     <textarea name="body" cols="30" rows="10">{{$post->body}}</textarea>
   </div>
   <div>
     <label for="title">Autore</label>
     <input type="text" placeholder="Inserisci il nome dell'autore" name="author" value= '{{$post->author}}' >
   </div>
   <div>
     <label for="title">Location</label>
     <input type="text" placeholder="La tua posizione" name="location" value= '{{$post->location}}'>
   </div>
   <div>
     <label for="title">Immagine</label>
     <input type="text" placeholder="Inserisci il path" name="img" value= '{{$post->img}}'>
   </div>
   <div>
     <label for="not-published">Non Pubblicato</label>
     <input type="radio" id="not-published" name="published" value="0" {{($post->published == 0) ? 'checked' : ''}}>
     <label for="published">Pubblicato</label>
     <input type="radio" id="published" name="published" value="1" {{($post->published == 1) ? 'checked' : ''}}>
   </div>
   <div>
     <input type="submit" value="Salva">
   </div>

        </form>

    </body>
</html>
