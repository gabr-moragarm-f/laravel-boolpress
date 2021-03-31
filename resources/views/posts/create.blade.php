<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>
<body>
  <form action="{{route('posts.store')}}" method="post">
    @csrf

    @method('POST')

    <div class="form-group">
      <label for="author_id">Author</label>
      <select class="form-control" name="author_id">
        @foreach ($authors as $author)
          <option value="{{$author->id}}">{{$author->name}}</option>
        @endforeach
      </select>
    </div>

    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control" name="title" placeholder="Title">
    </div>

    <div class="form-group">
      <label for="post_body">Post body</label>
      <textarea placeholder="Post body" class="form-control" name="post_body" rows="8" cols="80"></textarea>
    </div>

    <div class="form-group">
      <label for="tags[]">Tags</label>
      <select class="form-control" name="tags[]" multiple>
        @foreach ($tags as $tag)
          <option value="{{$tag->id}}">{{$tag->tag_name}}</option>
        @endforeach
      </select>
    </div>

    <input type="submit" value="Create!">
  </form>
</body>
</html>
