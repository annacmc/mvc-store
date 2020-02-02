@extends('layouts.app') @section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create a new Product</div>

                <div class="card-body">

                <form method="POST" action="{{ config('app.url')}}/products" enctype="multipart/form-data">
                    <!-- CSRF Token -->
                    @csrf
                    <div class="form-group">
                        <label>Name</label> <input type="text" name="name">
                    </div>

                    <h1> VAR DUMP 1 HERE: </h2>
            <?php var_dump($items); ?>
                    <div class="form-group">
                        <label>Category</label> <input type="text" name="category_id" value="3">
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Series</label> <input type="text" name="brand_id" value="3">
                    </div>

                    <div class="form-group">
                        <label>Description</label> <textarea name="description" rows="3"></textarea>
                    </div>

                    <div class="form-group">
                        <label>Price</label> <input type="number" step="any" name="price" value="5.00">
                    </div>
                    <div class="form-group">
                        <label>Product Image</label>
                        <input id="image" type="file" class="form-control" name="image">
                    </div>

                    <button type="submit">Submit</button>
                </form>

            </form>
        </div>
    </div>
</div>
</div>
</div>
@endsection
