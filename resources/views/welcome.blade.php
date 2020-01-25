@extends('layouts.app')

@section("content")

           <!--begin container for products-->
           <div class="container">
               <div class="row">
                 <?php  Route::get('products', function() {
                       return view('viewproducts');
                   });
                   ?>
         </div>
     </div>


@endsection
