<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Dashboard Template for Bootstrap</title>
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
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- <link rel="stylesheet" type="text/css" href="{{mix()}}css/main.min.css"> --}}

    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <!--[if IE]>
    <link href="https://cdn.jsdelivr.net/gh/coliff/bootstrap-ie8/css/bootstrap-ie9.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/g/html5shiv@3.7.3"></script>
    <![endif]-->
    <!--[if lt IE 9]>
    <link href="https://cdn.jsdelivr.net/gh/coliff/bootstrap-ie8/css/bootstrap-ie8.min.css" rel="stylesheet">
    <![endif]-->
</head>
<body>
@include('layout.back.header')
<div class="container-fluid">
    <div class="row">
        @include('layout.back.sidebar')
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
            @yield('content')
        </main>
    </div>
</div>
@include('layout.back.footer')

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>

<!-- Icons -->
<script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
<script>
    feather.replace()
</script>

<!-- Graphs -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
<script>
    var ctx = document.getElementById("myChart");
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
            datasets: [{
                data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
                lineTension: 0,
                backgroundColor: 'transparent',
                borderColor: '#007bff',
                borderWidth: 4,
                pointBackgroundColor: '#007bff'
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: false
                    }
                }]
            },
            legend: {
                display: false,
            }
        }
    });
</script>
</body>
</html>

