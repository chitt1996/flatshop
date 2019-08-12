<!DOCTYPE html>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" href="/assets/client/images/favicon.png">
      <title>@yield('title') | FlatShop</title>
      <link href="/assets/client/css/bootstrap.css" rel="stylesheet">
      <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,500italic,100italic,100' rel='stylesheet' type='text/css'>
      <link href="/assets/client/css/font-awesome.min.css" rel="stylesheet">
      <link rel="stylesheet" href="/assets/client/css/flexslider.css" type="text/css" media="screen"/>
      <link href="/assets/client/css/sequence-looptheme.css" rel="stylesheet" media="all"/>
      <link href="/assets/client/css/style.css" rel="stylesheet">
      <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script><![endif]-->
   </head>
   <body id="home">
      <div class="wrapper">
         {{-- Begin Header --}}
         @include('client.layouts.header')
         {{-- End Header --}}
         <div class="clearfix"></div>
         {{-- Begin Slider --}}
         @include('client.layouts.slider')
         {{-- End Slider --}}
         <div class="clearfix"></div>
         {{-- Begin Main --}}
         @yield('content')
         {{-- End Main --}}
         <div class="clearfix"></div>
         @include('client.layouts.footer')
      </div>
      <!-- Bootstrap core JavaScript==================================================-->
	  <script type="text/javascript" src="/assets/client/js/jquery-1.10.2.min.js"></script>
	  <script type="text/javascript" src="/assets/client/js/jquery.easing.1.3.js"></script>
	  <script type="text/javascript" src="/assets/client/js/bootstrap.min.js"></script>
	  <script type="text/javascript" src="/assets/client/js/jquery.sequence-min.js"></script>
	  <script type="text/javascript" src="/assets/client/js/jquery.carouFredSel-6.2.1-packed.js"></script>
	  <script defer src="/assets/client/js/jquery.flexslider.js"></script>
	  <script type="text/javascript" src="/assets/client/js/script.min.js" ></script>
   </body>
</html>