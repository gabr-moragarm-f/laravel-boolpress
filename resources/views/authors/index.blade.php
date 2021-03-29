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
      <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Bio</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Avatar</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($authors as $author)
            <tr>
              <th scope="row">{{$author->id}}</th>

              <td>{{$author->name}}</td>

              <td>{{$author->email}}</td>

              @if ($author->details !== null)
                <td>{{$author->details->bio}}</td>

                <td>{{$author->details->phone_number}}</td>

                <td><img src="{{asset($author->details->avatar)}}" alt="{{$author->name}}" height="150"></td>
              @endif
            </tr>
          @endforeach
        </tbody>
      </table>
    </body>
</html>
