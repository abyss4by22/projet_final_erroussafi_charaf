<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>aranoz</title>
        <link rel="icon" href="{{ asset('img/favicon.png') }}">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <!-- animate CSS -->
        <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
        <!-- owl carousel CSS -->
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
        <!-- font awesome CSS -->
        <link rel="stylesheet" href="{{ asset('css/all.css') }}">
        <!-- flaticon CSS -->
        <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
        <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
        <!-- font awesome CSS -->
        <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
        <!-- swiper CSS -->
        <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
        <!-- style CSS -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
<body>
    @include("partials.admin.navbar")
    <h1 class="text-center">all users</h1>
    
    <ul class="list-group">
        @foreach ($users as $user)
            @if ($user->email !== 'you@shallnotpass.com')
                <li class="list-group-item d-flex justify-content-between">
                    {{ $user->name }}
                    {{ $user->role_id }}
                    <div>
                        <form action="{{route("user.destroy", $user->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit"  class="btn btn-danger">delete</button>
                        </form>
                        <form action="{{ route('admin.user.updateRole',$user->id) }}" method="POST">
                            @csrf
                            <select class="form-control float-right" style="width: 150px;" name="role"onchange="this.form.submit()">
                                @foreach ($roles as $role)
                                    @if ($role->id !== 1)
                                        <option value="{{ $role->name }}" {{ $user->hasRole($role->name) ? 'selected' : '' }}>
                                            {{ $role->name }}
                                        </option>
                                    @endif
                                @endforeach
                            </select>
                        </form>
                    </div>
                    
                </li>
            @endif
        @endforeach
    </ul>


    
</body>
</html>