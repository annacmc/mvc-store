@extends("layout")

@section("content")

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
                        <label>Description</label> <textarea name="description" rows="3"></textarea>
                    </div>

                    <div class="form-group">
                        <label>Count</label> <input type="number" name="count">
                    </div>

                    <div class="form-group">
                        <label>Price</label> <input type="number" step="any" name="price">
                    </div>
                    <div class="form-group">
                        <label>Product Image</label>
                        <input id="cover_image" type="file" class="form-control" name="cover_image">
                    </div>

                    <button type="submit">Submit</button>
                </form>

@endsection
