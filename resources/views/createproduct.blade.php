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
                    <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Name</label>
                        <input type="text" name="name">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Price</label>
                        <input type="number" step="any" name="price" >
                    </div>
                </div>

                    <div class="form-group">
                    <input type="hidden"  name="category_id" value="1">

                    </div>

                    <div class="form-group">
                        <input type="hidden" name="brand_id" value="1">
                    </div>

                    <div class="form-group">
                        <p><label>Description</label></p> <textarea name="description" rows="3"></textarea>
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
