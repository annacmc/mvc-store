<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="{{asset('images/favicon.png')}}" sizes="16x16" type="image/png">
    <!-- Styles etc. -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Custom fonts-->
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
  <!-- Load fontawesome Icon Kit -->
  <script src="https://kit.fontawesome.com/99c6a2ffe2.js" crossorigin="anonymous"></script>
  <!-- Custom stylesheets-->
  <link href="{{ asset('css/styles.css') }}" rel="stylesheet" type="text/css" >    <style>
        .top-10 {
            margin-top: 10px;
        }
        .top-15 {
            margin-top: 15px;
        }
    </style>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>{{$title ?? ''}}</title>
</head>
<body>

    <div class="container-fluid">
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container">
                <a class="blog-small-logo" href="#">A</a>
                <a class="navbar-brand" href="{{route('home')}}">{{ config('app.name') }}</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
                        </li>



                    </ul>


<!-- begin login / admin toolbar -->

                      <ul class="nav">
              <!-- Authentication Links -->
              @guest
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                  </li>
                  @if (Route::has('register'))
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                      </li>
                  @endif
              @else



                  <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                       Hi, {{ Auth::user()->name }}!                  <!-- show admin badge if user is admin -->
                                         @if (Auth::user()->isAdmin())
                               <span class="badge badge-pill badge-info">Admin</span>
                               @endif
                               <!-- End admin badge if user is admin --><span class="caret"></span>
                      </a>

                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf

                  </li>


                  @if (Auth::user()->isAdmin())

                    <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Manage Products
                     </a>
                     <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                         <a class="nav-link" href="{{route('create')}}">Create Product</a>

                     </div>
                  </li>
                  @endif



<!-- end if guest login links -->
              @endguest
          </ul>
<!-- end login / admin toolbar -->
                </div>
            </div>
            </nav>
<!-- end top nav bar -->
<!-- start secondary nav bar -->
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
    <div class="container">
 <strong> <a class="nav-link" href="#">Filter by:</a></strong>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">

      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Categories
      </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              @foreach($items['categories'] as $category)
              <a class="dropdown-item" href="{{route('categories',['url' => $category->url])}}">{{$category->title}}</a>
              @endforeach
          </div>
      </li>
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Series
      </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              @foreach($items['brands'] as $brand)
              <a class="dropdown-item" href="{{route('brands',['url' => $brand->url])}}">{{$brand->title}}</a>
              @endforeach
          </div>
      </li>

      <li class="nav-item">
          <!-- begin shopping cart button & count display -->

                              <a class="btn btn btn-outline-info ml-3" href="{{route('cart.checkout')}}">
                                  <i class="fa fa-shopping-cart"></i> Cart Total Qty
                                  <span class="badge badge-light">{{Cart::getTotalQuantity()}}</span>
                              </a>

          <!-- end shopping cart button & count display -->
      </li>
    </ul>
  </div>
</div>
</nav>
<!-- end secondary nav bar -->


        </header>
            <div class="container container-body">
        @include('messages')
        @yield('content')

    </div>
</div>

    <div class="container-fluid">
        <footer class="blog-footer">
                <p> {{ config('app.name') }} Copyright {{ date('Y') }} | All rights reserved | All content & images by Anna McPhee unless otherwise specified.</p>
            <a href="#">Back to top</a>
          </p>
        </footer>
    </div>
    <!-- Bootstrap Javascript Includes -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
