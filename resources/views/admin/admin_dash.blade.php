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
            <h4>User Info:</h4>
            <p>Name: {{ $user->name }}</p>
            <p>Email: {{ $user->email }}</p>
            <p>Role: Admin</p>
        </div>
    @endif
@endforeach
</body>
</html>