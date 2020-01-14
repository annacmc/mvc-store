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
<a class="btn btn-sm btn-outline-secondary" href="{{ config('app.url')}}/products/create">Log In</a>



      </div>
    </div>
  </header>
  <!-- end blog header content -->
  <!--begin navigation-->
<div class="nav-scroller py-1 mb-2">
  <nav class="nav d-flex">

          <a class="p-2 text-muted" href="index.php?i=home">Home</a>

  </nav>
</div>
  <!--end navigation-->

      <div class="flex-center position-ref full-height">
          <div class="content">
        <div class="flex-center position-ref full-height">
            <div class="content">
                <form method="POST" action="{{ config('app.url')}}/products" enctype="multipart/form-data">
                    <!-- CSRF Token -->
                    @csrf

                    <h1> Enter Details to create a product</h1>
                    <div class="form-group">
                        <label>Name</label> <input type="text" name="name">
                    </div>

                    <div class="form-group">
                        <label>Category</label> <input type="text" name="category">
                    </div>

                    <div class="form-group">
                        <label>Description</label> <input type="text" name="description">
                    </div>

                    <div class="form-group">
                        <label>Count</label> <input type="number" name="count">
                    </div>

                    <div class="form-group">
                        <label>Price</label> <input type="number" step="any" name="price">
                    </div>
                    <div class="profile_image">
                        <label>Product Image</label>
                        <input id="cover_image" type="file" class="form-control" name="cover_image">
                    </div>

                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </body>
    </html>
