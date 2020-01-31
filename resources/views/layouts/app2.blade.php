<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{$title}}</title>
    <!-- Styles etc. -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Custom fonts-->
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
  <!-- Load fontawesome Icon Kit -->
  <script src="https://kit.fontawesome.com/99c6a2ffe2.js" crossorigin="anonymous"></script>
  <!-- Custom stylesheets-->
  <link href="{{ asset('css/styles.css') }}" rel="stylesheet" type="text/css" >

</head>
    <body>
    <!-- begin jumbotron to make header full width -->
    <div class="jumbotron-fluid">
          <nav class="navbar navbar-light bg-light">
          <a class="blog-small-logo" href="#">A</a>
          <a class="blog-header-logo text-dark" href="#">Anna's Travel Guides</a>
          <!-- begin login menu area -->

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
             Hi, {{ Auth::user()->name }}! <span class="caret"></span>
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

            <li class="nav-item dropdown">
           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Manage Products
           </a>
           <div class="dropdown-menu" aria-labelledby="navbarDropdown">
             <a class="dropdown-item" href="{!! url('/createproduct'); !!}">Add Product</a>
              <a class="dropdown-item" href="#">Remove Products</a>
               <a class="dropdown-item" href="#">Edit Products</a>
           </div>
        </li>


    @endguest
</ul>
</nav>
</div>
    <!-- end to make header full width -->
    <!-- end blog header content -->

      <!--begin navigation-->
      <nav class="navbar navbar-expand-lg">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Browse by Destination
           </a>
           <div class="dropdown-menu" aria-labelledby="navbarDropdown">
             <a class="dropdown-item" href="#">Action</a>
             <a class="dropdown-item" href="#">Another action</a>
             <div class="dropdown-divider"></div>
             <a class="dropdown-item" href="#">Something else here</a>
           </div>
         </li>
         <!-- shopping cart info -->
            <li class="nav-item ">
            <a class="nav-link" href="#"><strong>$0.00</strong>&emsp;<span class=""> 0 items </span>&emsp;<i class="fas fa-shopping-basket"></i></a>
          </li>
          <!-- end shopping cart -->
          </ul>
        </div>
      </nav>
      <!--end navigation-->

</div>


    <div class="container">
         @yield("content")
   </div>


<div class="container-fluid">
    <footer class="blog-footer">
      <p>Site by Anna McPhee | All content & images by Anna McPhee unless otherwise specified.</p>
      <p>
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
