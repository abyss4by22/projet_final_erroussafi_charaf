<!doctype html>
<html lang="zxx">

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
    <!--::header part start::-->
    @include('partials.header')
    <!-- Header part end-->

    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="banner_slider owl-carousel">
                        @php
                            $randomProducts = $products->random(3);
                        @endphp
                        @foreach ($randomProducts as $product)
                            <div class="single_banner_slider">
                                <div class="row">
                                    <div class="col-lg-5 col-md-8">
                                        <div class="banner_text">
                                            <div class="banner_text_iner">
                                                <h1>{{ $product->name }}</h1>
                                                <p>{{ $product->price }}</p>
                                                <p>Stock: {{ $product->stock }}</p>
                                                <a href="{{ route('product.show', $product) }}" class="btn_2">buy now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="banner_img d-none d-lg-block">
                                        <img src="{{ asset('img/my-product-img/' . $product->img) }}" alt="">
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="slider-counter"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->

    <!-- feature_part start-->
    <section class="feature_part padding_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section_tittle text-center">
                        <h2>Featured Category</h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-between">
                @foreach ($products as $key => $product)
    @if ($key == 0)
        <div class="col-lg-7 col-sm-6">
            <div class="single_feature_post_text">
                <p>Premium Quality</p>
                <h3>{{ $product->name }}</h3>
                <a href="{{route("product.show",$product->id)}}" class="feature_btn">EXPLORE NOW <i class="fas fa-play"></i></a>
                <img src="{{ asset('img/my-product-img/' . $product->img) }}">
            </div>
        </div>
    @endif
@endforeach

@foreach ($products as $key => $product)
@if ($key == 13)
    <div class="col-lg-5 col-sm-6">
        <div class="single_feature_post_text">
            <p>Premium Quality</p>
            <h3>{{ $product->name }}</h3>
            <a href="{{route("product.show",$product->id)}}" class="feature_btn">EXPLORE NOW <i class="fas fa-play"></i></a>
            <img src="{{ asset('img/my-product-img/' . $product->img) }}">
        </div>
    </div>
@endif
@endforeach

@foreach ($products as $key => $product)
@if ($key == 5)
    <div class="col-lg-5 col-sm-6">
        <div class="single_feature_post_text">
            <p>Premium Quality</p>
            <h3>{{ $product->name }}</h3>
            <a href="{{route("product.show",$product->id)}}" class="feature_btn">EXPLORE NOW <i class="fas fa-play"></i></a>
            <img src="{{ asset('img/my-product-img/' . $product->img) }}">
        </div>
    </div>
@endif
@endforeach

                
             
                
                @foreach ($products as $key => $product)
                @if ($key == 9)
                    <div class="col-lg-7 col-sm-6">
                        <div class="single_feature_post_text">
                            <p>Premium Quality</p>
                            <h3>{{ $product->name }}</h3>
                            <a href="{{route("product.show",$product->id)}}" class="feature_btn">EXPLORE NOW <i class="fas fa-play"></i></a>
                            <img src="{{ asset('img/my-product-img/' . $product->img) }}">
                        </div>
                    </div>
                @endif
            @endforeach
                
            </div>
        </div>
    </section>
    <!-- upcoming_event part start-->
    <!-- product_list start-->
    <section class="product_list section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section_tittle text-center">
                        <h2>awesome <span>shop</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="product_list_slider owl-carousel">
                        <div class="single_product_list_slider">
                            <div class="row align-items-center justify-content-between">
                                @foreach ($products as $key => $product)
                                    @if ($key < 8)
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="single_product_item">
                                                <img src="{{ asset('img/my-product-img/' . $product->img) }}">
                                                <div class="single_product_text">
                                                    <h4>{{ $product->name }}</h4>
                                                    <h3>{{ $product->price }}</h3>
                                                    <a href="{{route("product.show",$product->id)}}" class="feature_btn">EXPLORE NOW <i class="fas fa-play"></i></a>
                                                    <a class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="single_product_list_slider">
                            <div class="row align-items-center justify-content-between">
                                @foreach ($products as $key => $product)
                                    @if ($key < 8)
                                        @continue
                                    @endif
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="single_product_item">
                                            <img src="{{ asset('img/my-product-img/' . $product->img) }}">
                                            <div class="single_product_text">
                                                <h4>{{ $product->name }}</h4>
                                                <h3>{{ $product->price }}</h3>
                                                <a href="{{route("product.show",$product->id)}}" class="feature_btn">EXPLORE NOW <i class="fas fa-play"></i></a>
                                                <a class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product_list part start-->

    <!-- awesome_shop start-->
    <section class="our_offer section_padding">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6 col-md-6">
                    <div class="offer_img">
                        @php
                        $randomProduits = $products->random(1);
                    @endphp
                    @foreach ($randomProduits as $item)
                    <img src="{{ asset('img/my-product-img/' . $item->img) }}" alt="">
                    @endforeach
                        
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="offer_text">
                        <h2>Weekly Sale on
                            60% Off All Products</h2>
                        <div class="date_countdown">
                            <div id="timer">
                                <div id="days" class="date"></div>
                                <div id="hours" class="date"></div>
                                <div id="minutes" class="date"></div>
                                <div id="seconds" class="date"></div>
                            </div>
                        </div>
                        <div class="input-group d-flex">
                            <form action="{{route("newsletter.store")}}" method="POST">
                                @csrf
                            <input type="email" class="form-control" placeholder="enter email address"
                                aria-label="Recipient's username" aria-describedby="basic-addon2" name="email" id="email">
                                
                            <button type="submit" class="btn btn primary">subscribe to newsletter</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- awesome_shop part start-->

    <!-- product_list part start-->
    <section class="product_list best_seller section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section_tittle text-center">
                        <h2>Best Sellers <span>shop</span></h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-12">
                    <div class="best_product_slider owl-carousel">
                        @foreach ($products as $product)
    @if ($product->stock < 5)
        <div class="single_product_item">
            <img src="{{ asset('img/my-product-img/' . $product->img) }}">
            <div class="single_product_text">
                <h4>{{ $product->name }}</h4>
                <h3>{{ $product->price }}</h3>
                <a href="{{route("product.show",$product->id)}}" class="feature_btn">EXPLORE NOW <i class="fas fa-play"></i></a>

            </div>
        </div>
    @endif
@endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product_list part end-->

    <!-- subscribe_area part start-->
    <section class="subscribe_area section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="subscribe_area_text text-center">
                        <h5>Join Our Newsletter</h5>
                        <h2>Subscribe to get Updated
                            with new offers</h2>
                            <form action="{{route("newsletter.store")}}" method="POST">
                                @csrf
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="enter email address"
                                aria-label="Recipient's username" aria-describedby="basic-addon2" name="email" id="email">
                              
                            <div class="input-group-append">
                               
                                <button type="submit" class="input-group-text btn_2" id="basic-addon2">subscribe now</button>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::subscribe_area part end::-->

    <!-- subscribe_area part start-->
    <section class="client_logo padding_top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="single_client_logo">
                        <img src="img/client_logo/client_logo_1.png" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="img/client_logo/client_logo_2.png" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="img/client_logo/client_logo_3.png" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="img/client_logo/client_logo_4.png" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="img/client_logo/client_logo_5.png" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="img/client_logo/client_logo_3.png" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="img/client_logo/client_logo_1.png" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="img/client_logo/client_logo_2.png" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="img/client_logo/client_logo_3.png" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="img/client_logo/client_logo_4.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::subscribe_area part end::-->

    @include('partials.footer')

    <!-- jquery plugins here-->
    <script src="{{ asset('js/jquery-1.12.1.min.js') }}"></script>
    <!-- popper js -->
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <!-- bootstrap js -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- easing js -->
    <script src="{{ asset('js/jquery.magnific-popup.js') }}"></script>
    <!-- swiper js -->
    <script src="{{ asset('js/swiper.min.js') }}"></script>
    <!-- masonry js -->
    <script src="{{ asset('js/masonry.pkgd.js') }}"></script>
    <!-- particles js -->
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
    <!-- slick js -->
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('js/waypoints.min.js') }}"></script>
    <script src="{{ asset('js/contact.js') }}"></script>
    <script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('js/jquery.form.js') }}"></script>
    <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('js/mail-script.js') }}"></script>
    <!-- custom js -->
    <script src="{{ asset('js/custom.js') }}"></script>
</body>

</html>
