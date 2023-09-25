<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
       <!-- Bootstrap CSS -->
       <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
    @include("partials.admin.navbar")
    @foreach ($users as $user)
    @if ($user->hasRole('admin'))
        <div>
          <h1 class="text-center"> Welcome {{$user->name}}</h1>  
        </div>
    @endif
@endforeach


</body>
</html>