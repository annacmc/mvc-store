@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                    <div class="container">
                        @if(isset($details))
                            <p> The Search results for your query <b> {{ $query }} </b> are :</p>
                        <h2>Sample User details</h2>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($details as $product)
                                <tr>
                                    <td>{{$product->name}}</td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
