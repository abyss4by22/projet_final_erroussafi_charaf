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

    <h1 class="text-center">Products</h1>
    <div class="d-flex justify-content-center ">
    <a href="{{route("admin.createProducts.page")}}" class="btn btn-primary"> add product</a>
</div>
<section>
    @foreach ($products as $product)
    <div>
    <h1>{{$product->name}}</h1>
    <img src="{{asset("storage/img/".$product->img)}}" alt="">
    <form action="{{route("product.destroy", $product->id)}}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">delete</button>
    </form>
    <a href="{{route("admin.updateProducts.page",$product->id)}}" class="btn btn-secondary">update product</a>
    </div>
    @endforeach
</section>
</body>
</html>