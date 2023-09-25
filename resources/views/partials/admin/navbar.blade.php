{{-- navbar start --}}
<nav class="navbar navbar-expand-lg bg-body-tertiary ">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse w-75 " id="navbarNav">
        <ul class="navbar-nav d-flex ">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route("admin.index")}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route("admin.products")}}">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route("admin.users")}}">Users</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route("home.index")}}">Site</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
{{-- navbar end --}}