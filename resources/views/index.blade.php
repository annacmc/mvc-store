@extends('layouts.app')

@section('content')


        <div class="viewing-alert alert alert-info alert-dismissible fade show" role="alert"><strong>Currently Viewing:</strong> {{$sub_title}}

        </div>
        <div class="container-fluid">
    <div class="row top-15">
        <div class="col">
        <div class="row">
        @foreach($products as $product)
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card">
                    <img class="card-img-top" src="{{asset($product->getImageAttribute())}}" style="object-fit:cover" height="250px" alt="{{ $product->name }}">
                    <div class="card-body">
                        <h4 class="card-title">{{$product->name}}</h4>
                        <p class="card-text">{{$product->description}}</p>
                        <div class="row">
                            <div class="col">
                                <p class="btn btn-outline-info btn-block">${{$product->price}}</p>
                            </div>
                            <div class="col">
                                <form method="POST" action="{{route('cart.add')}}" class="form-inline my-2 my-lg-0" >
                                    @csrf
                                    <input name="id" type="hidden" value="{{$product->id}}">
                                    <button class="btn btn-success btn-block" type="submit">Add to cart</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
