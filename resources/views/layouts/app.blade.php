<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Tech Blogs by expert info team">
    <meta name="author" content="vishnu">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">

    <title>{{ config('app.name') }} {{ $title }}</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ url('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ url('css/blog/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ url('css/blog/templatemo-stand-blog.css') }}">
    <link rel="stylesheet" href="{{ url('css/blog/owl.css') }}">
<!--

TemplateMo 551 Stand Blog

https://templatemo.com/tm-551-stand-blog

-->
  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="{{ route('home') }}"><img width="auto" height="120px" src="{{ "/storage/" . $siteSetting->firstWhere('name','Site Logo')->image }}" /> </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                @foreach($menus['Header Menu'] as $menu)
                <li class="nav-item {{ request()->is($menu->link) ?  'active' : '' }}">
                    <a class="nav-link" href="{{ route($menu->link) }}">{{ $menu->title }}</a>
                  </li>
                @endforeach
               
              {{-- <li class="nav-item">
                <a class="nav-link" href="about.html">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="blog.html">Blog Entries</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="post-details.html">Post Details</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact Us</a>
              </li> --}}
            </ul>
          </div>
        </div>
      </nav>
    </header>

{{ $slot }}
<footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <ul class="social-icons">
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Behance</a></li>
            <li><a href="#">Linkedin</a></li>
            <li><a href="#">Dribbble</a></li>
          </ul>
        </div>
        <div class="col-lg-12">
          <div class="copyright-text">
            <p>{!! $siteSetting->firstWhere('name','copyright')->value !!}</p>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="{{ url('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ url('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Additional Scripts -->
  <script src="{{ url('js/blog/custom.js') }}"></script>
  <script src="{{ url('js/blog/owl.js') }}"></script>
  <script src="{{url('js/blog/slick.js')}}"></script>
  <script src="{{url('js/blog/isotope.js')}}"></script>
  <script src="{{url('js/blog/accordions.js')}}"></script>

  <script language = "text/Javascript"> 
    cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
    function clearField(t){                   //declaring the array outside of the
    if(! cleared[t.id]){                      // function makes it static and global
        cleared[t.id] = 1;  // you could use true and false, but that's more typing
        t.value='';         // with more chance of typos
        t.style.color='#fff';
        }
    }
  </script>

</body>
</html>