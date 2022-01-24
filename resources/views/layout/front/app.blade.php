<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Album - Your Favorite Stuffs</title>
    <!-- Required meta tags always come first -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Album - Photo Collection Template , Responsive Bootstrap 4 template , bootstrap 4 starter template, bootstrap4 template, Album template, Photography Template">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" lang="en" content="Simple Bootstrap 4 Photography template , Responsive and Modern HTML5 Template made from bootstrap 4.">
    <meta name="keywords" lang="en" content="photography template, bootstrap 4 template,bootstrap 4 album template, responsive bootstrap 4 template, bootstrap 4, bootstraping, bootstrap4, oribitthemes, othemes">
    <meta name="robots" content="index, follow">
    <link rel="shortcut icon" href="{{url('storage/img/favicon.ico')}}" type="image/x-icon" />
    <meta name="description" content="">
    <!--Font Awesome-->
    {{-- <link rel="stylesheet" href="dist/font-awesome/css/font-awesome.min.css" /> --}}
    <!-- Custom CSS -->
    {{-- <link rel="stylesheet" type="text/css" href="{{mix()}}css/main.min.css"> --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!--[if IE]>
      <link href="https://cdn.jsdelivr.net/gh/coliff/bootstrap-ie8/css/bootstrap-ie9.min.css" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/g/html5shiv@3.7.3"></script>
    <![endif]-->
    <!--[if lt IE 9]>
      <link href="https://cdn.jsdelivr.net/gh/coliff/bootstrap-ie8/css/bootstrap-ie8.min.css" rel="stylesheet">
    <![endif]-->
</head>
<body>
    <div class="loader"></div>
    <header id="header">
        <div class="collapse bg-dark" id="navbarHeader">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-7 py-4">
                        <h4>About</h4>
                        <p class="text-muted">Album is a contemporary template that's perfect for anyone looking to make a big first impression.
                            With beautiful headline and navigation elements, Album ensures that your content always looks
                            stunning.
                        </p>
                    </div>
                    <div class="col-sm-4 offset-md-1 py-4" id="contact-info">
                        <h4>Contact</h4>
                        <ul class="list-unstyled">
                            <li>
                                <a href="https://twitter.com/orbitThemes">
                                    <i class="fa fa-twitter"></i> Follow on Twitter</a>
                            </li>
                            <li>
                                <a href="https://facebook.com/orbitThemes">
                                    <i class="fa fa-facebook"></i> Like on Facebook</a>
                            </li>
                            <li>
                                <a href="mailto:themesorbit@gmail.com?Subject=Hello" target="_top">
                                    <i class="fa fa-envelope"></i> Email me</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar navbar-dark bg-dark box-shadow">
            <div class="container d-flex justify-content-between">
                <a href="#" class="navbar-brand d-flex align-items-center">
{{--                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>--}}
                    <img class="card-img-top" src="{{url('storage/img/auction.svg')}}" alt="Card image cap"  width="40" height="50">
                    <strong> LETS-BID </strong>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </header>
    <main id="main" role="main">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="first-slide" src="{{url('storage/img/macbook.jpg')}}" alt="First slide">
                    <div class="container">
                        <div class="carousel-caption text-left">
                            <h1>Example headline.</h1>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="second-slide" src="{{url('storage/img/xiaomi.jpg')}}" alt="Second slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Another example headline.</h1>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="third-slide" src="{{url('storage/img/playstation.jpg')}}" alt="Third slide">
                    <div class="container">
                        <div class="carousel-caption text-right">
                            <h1>One more for good measure.</h1>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        @yield('content')
    </main>
    <!-- Footer -->
  @include('layout.front.footer')
    <!-- jQuery first, then Bootstrap JS. -->
    {{-- <script src="dist/jquery/jquery.min.js"></script>
    <script src="dist/popper/popper.min.js" integrity=""></script>
    <script src="dist/bootstrap/js/bootstrap.min.js"></script> --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
