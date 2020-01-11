<!doctype html>
  <html lang="{{ app()->getLocale() }}">
  <head>
      <title>View Products | Product Store</title>
      <!-- Styles etc. -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>
  <body>
      <div class="flex-center position-ref full-height">
          <div class="content">
              <h1>Here's a list of available products</h1>
              <!--begin container for products-->
              <div class="container">
                  <div class="row">
                      @foreach ($allProducts as $product)
                      <!--output each product as a bootstrap card-->
                              <div class="col-md-4">
                                <div class="card mb-4 shadow-sm">
                                  <img src="#" class="card-img-top" style="object-fit:cover" height="250px" alt="{{ $product->name }}">
                                  <div class="card-body">
                                    <h5 class="card-title">{{ $product->name }}</h5>
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



  </body>
  </html>
