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
          <div class="card" style="width: 18rem;">
            <h2><strong>Title:</strong>{{$post->title}}</h2>
            <div class="card-body">
              <p class="card-text">
                <strong>Body:</strong>{{$post->post_body}}
                <h6><strong>Author:</strong>{{$post->author->name}}</h6>
              </p>
            </div>
          </div>
      </div>
    </body>
</html>
