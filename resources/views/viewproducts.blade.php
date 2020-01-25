@extends('layouts.app')

@section("content")

           <!--begin container for products-->
           <div class="container">
               <div class="row">

<!-- if logged in provide admin tools to add a new product -->
@auth
<div class="col-md-4">
  <div class="card mb-4 shadow-sm">
    <img src="" class="card-img-top" style="object-fit:cover" height="250px" alt="Add a new product">
    <div class="card-body">
      <h5 class="card-title">Admin Tool : Add a new product</h5>
      <p class="card-text">You're logged in as an Admin, you can add a new product here</p>
      <div class="d-flex justify-content-between align-items-center">
        <div class="btn-group">
          <button type="button" class="btn btn-sm btn-outline-secondary">Add a New Product</button>
        </div>
      </div>
    </div>
  </div>
</div>
@endauth
<!-- end admin tools to add new product -->

       @foreach ($allProducts ?? '' as $product)

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
                                    <!--Admins can edit tool-->
                                    @auth <button type="button" class="btn btn-sm btn-outline-secondary">Admin tool: Edit Product</button>
                                    @endauth
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


@endsection
