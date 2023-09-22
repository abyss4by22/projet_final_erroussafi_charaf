<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach ($users as $user)
    @if ($user->hasRole('admin'))
        <div>
          <h1> Welcome {{$user->name}}</h1>  
        </div>
    @endif
@endforeach

<a href="{{route("admin.users")}}">all users</a>
</body>
</html>