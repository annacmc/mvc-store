<!doctype html>
  <html lang="{{ app()->getLocale() }}">
  <head>
      <title>View Products | Product Store</title>
      <!-- Styles etc. -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <!-- Custom fonts-->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <!-- Load fontawesome Icon Kit -->
    <script src="https://kit.fontawesome.com/99c6a2ffe2.js" crossorigin="anonymous"></script>
    <!-- Custom stylesheets-->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" type="text/css" >

  </head>
  <body>
<div class="container">

      <!-- begin blog header content -->
      <header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
        <a class="blog-small-logo" href="#">A</a>
      </div>
      <div class="col-4 text-center">
        <a class="blog-header-logo text-dark" href="#">Anna's Travel Guides</a>
      </div>
        <!-- begin login menu area -->
      <div class="col-4 d-flex justify-content-end align-items-center">
<a class="btn btn-outline-secondary btn-sm" href="{{ config('app.url')}}/products/create">Create Product</a>
<a class="btn btn-outline-secondary btn-sm" href="{{ config('app.url')}}/products/create">Log In</a>
<a class="btn btn-outline-secondary btn-sm" href="{{ config('app.url')}}/products/create">Register</a>
<!-- begin dropdown login button -->
<div class="dropdown">
  <a class="btn btn-sm btn-outline-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Hi, Anna!
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
      <a class="dropdown-item" href="#">
  Shopping Cart</a>
    <a class="dropdown-item" href="#">
My Profile</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Logout</a>
  </div>

<!-- end dropdown button link -->


</div>
</div>
  </header>
  <!-- end blog header content -->
  <!--begin navigation-->
  <nav class="navbar navbar-expand-lg">


    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
       <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Browse by Destination
       </a>
       <div class="dropdown-menu" aria-labelledby="navbarDropdown">
         <a class="dropdown-item" href="#">Action</a>
         <a class="dropdown-item" href="#">Another action</a>
         <div class="dropdown-divider"></div>
         <a class="dropdown-item" href="#">Something else here</a>
       </div>
     </li>
        <li class="nav-item ">
        <a class="nav-link" href="#"><strong>$0.00</strong>&emsp;<span class=""> 0 items </span>&emsp;<i class="fas fa-shopping-basket"></i></a>
      </li>
      </ul>

      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search All Guides" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
  <!--end navigation-->
   <!--begin main site content-->

      <div class="flex-center position-ref full-height">
          <div class="content">
              <!--begin container for products-->
              <div class="container">
                  <div class="row">
                      @foreach ($allProducts as $product)

                      <!--output each product as a bootstrap card-->
                              <div class="col-md-4">
                                <div class="card mb-4 shadow-sm">
                                  <img src="{{ $product->cover_image }}" class="card-img-top" style="object-fit:cover" height="250px" alt="{{ $product->name }}">
                                  <div class="card-body">
                                    <h5 class="card-title">{{ $product->name }} | {{ $product->category }}</h5>
                                    <p class="card-text">{{ $product->description }}</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                      <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Add to Cart</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit Product</button>
                                      </div>
                                      <small class="text-muted">${{ $product->price }}</small>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!--end product card-->
                      @endforeach
                      <!--end products row & container-->
            </div>
        </div>
    </div>
</div>
</div>
<div class="container-fluid">
    <footer class="blog-footer">
      <p>Site by Anna McPhee.</p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>
</div>
<!-- Bootstrap Javascript Includes -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
  </html>
