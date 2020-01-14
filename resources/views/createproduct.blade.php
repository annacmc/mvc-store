<!doctype html>
    <html lang="{{ app()->getLocale() }}">
    <head>

      <title>Create Product | Product Store</title>
      <!-- styling etc. -->
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <form method="POST" action="{{ config('app.url')}}/products" enctype="multipart/form-data">
                    <!-- CSRF Token -->
                    @csrf

                    <h1> Enter Details to create a product</h1>
                    <div class="form-input">
                        <label>Name</label> <input type="text" name="name">
                    </div>

                    <div class="form-input">
                        <label>Category</label> <input type="text" name="category">
                    </div>

                    <div class="form-input">
                        <label>Description</label> <input type="text" name="description">
                    </div>

                    <div class="form-input">
                        <label>Count</label> <input type="number" name="count">
                    </div>

                    <div class="form-input">
                        <label>Price</label> <input type="number" step="any" name="price">
                    </div>

                    <div class="form-group row">

                        <label for="profile_image" class="col-md-4 col-form-label text-md-right">Profile Image</label>

                        <input id="cover_image" type="file" class="form-control" name="cover_image">

                    </div>
                    </div>

                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </body>
    </html>
