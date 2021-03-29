<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
      <div class="d-flex flex-wrap justify-content-between">
        @foreach ($posts as $post)
          <div class="card" style="width: 18rem;">
            <h2>{{$post->title}}</h2>
            <div class="card-body">
              <p class="card-text">
                {{$post->post_body}}
                <h6>{{$post->author->name}}</h6>
              </p>
            </div>
          </div>
        @endforeach
      </div>
    </body>
</html>
