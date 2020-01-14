<!doctype html>
  <html lang="{{ app()->getLocale() }}">
  <head>
      <title>View Products | Product Store</title>
      <!-- Styles etc. -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <!-- Custom fonts-->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <!-- Custom stylesheets-->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" type="text/css" >

  </head>
  <body>
      <!-- begin blog header content -->
      <header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
        <a class="blog-small-logo" href="#">A</a>
      </div>
      <div class="col-4 text-center">
        <a class="blog-header-logo text-dark" href="#">Anna's Travel Guides</a>
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
<a class="btn btn-sm btn-outline-secondary" href="{{ config('app.url')}}/products/create">Create Product</a>


      </div>
    </div>
  </header>
  <!-- end blog header content -->
  <!--begin navigation-->
<div class="nav-scroller py-1 mb-2">
  <nav class="nav d-flex">

          <a class="p-2 text-muted" href="index.php?i=home">Home</a>

      @foreach ($allProducts as $product)
      <!--output each category as a menu item-->
        <a class="p-2 text-muted" href="index.php?i=cat">{{ $product->category }}</a>

      @endforeach
  </nav>
</div>
  <!--end navigation-->

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

    <footer class="blog-footer">
      <p>Site by Anna McPhee.</p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>

  </body>
  </html>
