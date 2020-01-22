@extends("layout")

@section("content")

           <!--begin container for products-->
           <div class="container">
               <div class="row">
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


@endsection
