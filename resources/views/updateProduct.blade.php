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
    
    <h1 class="text-center">Add Product</h1>

     <!-- Modal -->
     {{-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                </div>
                <div class="modal-body">
                    <form action='{{ route('backend.storproduit') }} ' method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Titre</label>
                            <input type="text" name="titre" class="form-control" id="titre"
                                aria-describedby="titre">
                        </div>

                        <div class="mb-3">
                            <label for="prix" class="form-label">Prix</label>
                            <input name="prix" type="number" min="0" class="form-control"
                                id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" name="image" class="form-control" id="image"
                                aria-describedby="image">
                        </div>

                        <div class="mb-3">
                            <label for="stock" class="form-label">Stock</label>
                            <input name="stock" type="number" min="0" class="form-control"
                                id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3 d-none">
                            <input name="createur" type="number" min="0" value="{{ $createur }}"
                                class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>

                        <select name="categorie" class="form-select" aria-label="Default select example">
                            @foreach ($categories as $categorie)
                                <option value="{{ $categorie->name }} "> {{ $categorie->name }}</option>
                            @endforeach
                        </select>


                        <div class="modal-footer">
                            <div class="mb-3">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success">Ajouter</button>
                            </div>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div> --}}

    <form action="{{ route('product.update', $product) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="{{ old('name', $product->name) }}">
        </div>
        <div>
            <label for="price">Price</label>
            <input type="number" name="price" id="price" value="{{ old('price', $product->price) }}">
        </div>
        <div>
            <label for="stock">Stock</label>
            <input type="number" name="stock" id="stock" value="{{ old('stock', $product->stock) }}">
        </div>
        <div>
            <label for="desc">Description</label>
            <input type="text" name="desc" id="desc" value="{{ old('desc', $product->desc) }}">
        </div>
        <div>
            <label for="img">Image</label>
            <input type="file" name="img" id="img">
        </div>
        <button type="submit">Update Product</button>
    </form>

     <!-- jquery plugins here-->
  <!-- jquery -->
  <script src="js/jquery-1.12.1.min.js"></script>
  <!-- popper js -->
  <script src="js/popper.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.min.js"></script>
  <!-- easing js -->
  <script src="js/jquery.magnific-popup.js"></script>
  <!-- swiper js -->
  <script src="js/swiper.min.js"></script>
  <!-- swiper js -->
  <script src="js/masonry.pkgd.js"></script>
  <!-- particles js -->
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.nice-select.min.js"></script>
  <!-- slick js -->
  <script src="js/slick.min.js"></script>
  <script src="js/jquery.counterup.min.js"></script>
  <script src="js/waypoints.min.js"></script>
  <script src="js/contact.js"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="js/jquery.form.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/mail-script.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
</body>
</html>