<!doctype html>
<html>
<head>
    <title></title>
</head>
    <body>
        <h1>Birdboard</h1>
      <ul>
          @forelse($projects as $project)
              <a href="{{$project->path()}}">{{$project->title}}</a>

          @empty
              <li>No Projects here</li>

          @endforelse
      </ul>
    </body>
</html>
