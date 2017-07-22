<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
<!-- Bootstrap Core CSS -->
{{-- <link href="{{ url('css/bootstrap/bootstrap.css') }}" rel="stylesheet"> --}}
<!-- Latest compiled and minified CSS -->

{{ Html::style('assets/libraries/slick/slick.css') }}
{{ Html::style('assets/libraries/slick/slick-theme.css') }}
{{ Html::style('assets/css/trackpad-scroll-emulator.css') }}
{{ Html::style('assets/css/chartist.min.css') }}
{{ Html::style('assets/css/jquery.raty.css') }}
{{ Html::style('assets/fonts/font-awesome/css/font-awesome.min.css') }}
{{ Html::style('assets/css/nouislider.min.css') }}
{{ Html::style('assets/css/explorer.css') }}
{{ Html::style('css/override.css') }}

<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

<title>Klean Nham - @yield('title')</title>

@yield("stylesheet")