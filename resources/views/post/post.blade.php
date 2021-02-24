<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>


    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-1.4.1.min.js"></script>

    <script src="https://www.themehorse.com/preview/newscard/wp-content/themes/newscard/assets/library/sticky/jquery.sticky.js?ver=1.0.4"></script>

    <script src="https://www.themehorse.com/preview/newscard/wp-content/themes/newscard/assets/library/sticky/jquery.sticky-settings.js?ver=5.5.1"></script>
    {{--  --}}

    <link rel="stylesheet" href="{{ asset('front-end/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('front-end/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front-end/css/classy-nav.css') }}">
    <link rel="stylesheet" href="{{ asset('front-end/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('front-end/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('front-end/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front-end/css/themify-icons.css') }}">

    <link rel="stylesheet" href="{{ asset('front-end/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('front-end/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front-end/css/css1/style.css') }}">
    <link rel="stylesheet" href="{{ asset('front-end/js/css/customize-controls.css') }}">

     <link rel="stylesheet" href="{{ asset('front-end/js/library/font-awesome/css/font-awesome.css') }}">
     <link rel="stylesheet" href="{{ asset('front-end/js/library/owl-carousel/owl.carousel.css') }}">
     <link rel="stylesheet" href="{{ asset('front-end/js/library/owl-carousel/owl.carousel.min.css') }}">

    {{--  --}}

    </head>

    <body class="me page-template page-template-templates page-template-front-page-template page-template-templatesfront-page-template-php page page-id-5 theme-body">
       <div class="container">
        {{-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('post.create') }}">Create a Recomendation</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </li>

              </ul>

            </div>
          </nav> --}}

          <div class="container">

                @yield('content')

          </div>





       </div>



       <script src="https://kit.fontawesome.com/8458af41f8.js" crossorigin="anonymous"></script>

       <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

       <script src="https://cdnjs.cloudflare.com/ajax/libs/web-animations/2.2.2/web-animations.min.js"></script>
      <script src="{{ asset('front-end/js/bootstrap/popper.min.js') }}"></script>
      <script src="{{ asset('front-end/js/plugins/plugins.js') }}"></script>
      <script src="{{ asset('front-end/js/active.js') }}"></script>
      <script src="{{ asset('front-end/bootstrap/js/bootstrap.js') }}"></script>
      <script src="{{ asset('front-end/bootstrap/js/bootstrap.min.js') }}"></script>
      <script src="{{ asset('front-end/js/library/jquery.marquee/jquery.marquee.js') }}"></script>
      <script src="{{ asset('front-end/js/library/jquery.marquee/jquery.marquee.min.js') }}"></script>
      <script src="{{ asset('front-end/js/library/jquery.marquee/jquery.marquee-settings.js') }}"></script>
      <script src="{{ asset('front-end/js/library/owl-carousel/owl.carousel.js') }}"></script>
      <script src="{{ asset('front-end/js/library/owl-carousel/owl.carousel.min.js') }}"></script>
      <script src="{{ asset('front-end/js/library/owl-carousel/owl.carousel-settings.js') }}"></script>
      <script src="{{ asset('front-end/js/js/html5.js') }}"></script>
      <script src="{{ asset('front-end/js/js/scripts.js') }}"></script>
      <script src="{{ asset('front-end/js/js/skip-link-focus-fix.js') }}"></script>
      <script src="{{ asset('front-end/js/js/customizer.js') }}"></script>
      <script src="{{ asset('front-end/js/js/customizer-control.js') }}"></script>
    </body>
</html>
