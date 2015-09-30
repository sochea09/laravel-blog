<doctype <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<!-- IE Compatibility Meta-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- First Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bootstrap 3</title>
	<!--include CSS-->
	<link rel="stylesheet" type="text/css" href="{{URL::to('css/bootstrap.css')}}">
  <link rel="stylesheet" type="text/css" href="{{URL::to('css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{URL::to('css/style.css')}}">
  <link rel="stylesheet" type="text/css" href="{{URL::to('css/media.css')}}">
  <link rel="stylesheet" type="text/css" href="{{URL::to('css/default_theme.css')}}">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="{{URL::to('js/html5shiv.min.js')}}"></script>
      <script src="{{URL::to('js/respond.min.js')}}"></script>
    <![endif]-->
</head>
<body>
<!--Start navbar-->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container"><!--container-fluid-->
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#ournav" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Elzero <span>Inc.</span></a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="ournav">
      <ul class="nav navbar-nav navbar-right">
        <li @if(Request::is('/')) class="active" @endif><a href="/"><span style="font-size: 16px; padding-bottom: 5px;" class="glyphicon glyphicon-home"></span></a></li>
        @foreach($menus as $menu)

            <li @if(Request::is('page/'.$menu->pag_slug.'*')) class="active" @endif><a href="{{URL::to('page/'.$menu->pag_slug) }}">{{ $menu->pag_name }}</a></li>
        @endforeach
        <li><a href="#">Map</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!--End navbar-->

@yield('content')

<!-- Start Ultimate Footer Section -->
<section class="footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6">
        <h3>Sitemap</h3>
        <ul class="list-unstyled three-columns">
          <li>Home</li>
          <li>About</li>
          <li>Compnay</li>
          <li>Code</li>
          <li>Design</li>
          <li>Host</li>
          <li>Solutions</li>
          <li>Sitemap</li>
          <li>Contact</li>
        </ul>
        <ul class="list-unstyled social-list">
          <li><img src="{{URL::to('/')}}/images/social-bookmarks/facebook.png" alt="Facebook"></li>
          <li><img src="{{URL::to('/')}}/images/social-bookmarks/gplus.png" alt="Google Plus"></li>
          <li><img src="{{URL::to('/')}}/images/social-bookmarks/twitter.png" alt="Twitter"></li>
          <li><img src="{{URL::to('/')}}/images/social-bookmarks/pinterest.png" alt="Pinterest"></li>
          <li><img src="{{URL::to('/')}}/images/social-bookmarks/rss.png" alt="Rss"></li>
          <li><img src="{{URL::to('/')}}/images/social-bookmarks/email.png" alt="Email"></li>
        </ul>
      </div>
      <div class="col-lg-4 col-md-6">
        <h3>Latest Articles</h3>
        <div class="media">
          <a class="pull-left" href="#">
            <img class="media-object" src="{{URL::to('/')}}/images/articles/01.jpg" alt="Image 01" />
          </a>
          <div class="media-body">
            <h4 class="media-heading">
              Programming
            </h4>
            This Is Some Text About Programming Describe The Media Of Bootstrap 3.3.5
          </div>
        </div>
        <div class="media">
          <a class="pull-left" href="#">
            <img class="media-object" src="{{URL::to('/')}}/images/articles/02.jpg" alt="Image 02" />
          </a>
          <div class="media-body">
            <h4 class="media-heading">
              Coding
            </h4>
            This Is Some Text About Programming Describe The Media Of Bootstrap 3.3.5
          </div>
        </div>
        <div class="media">
          <a class="pull-left" href="#">
            <img class="media-object" src="{{URL::to('/')}}/images/articles/03.jpg" alt="Image 03" />
          </a>
          <div class="media-body">
            <h4 class="media-heading">
              Web Design
            </h4>
            This Is Some Text About Programming Describe The Media Of Bootstrap 3.3.5
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <h3>Our Awesome Work</h3>
        <img class="img-thumnail" src="{{URL::to('/')}}/images/work/01.jpg" alt="Image 01" />
        <img class="img-thumnail" src="{{URL::to('/')}}/images/work/02.jpg" alt="Image 02" />
        <img class="img-thumnail" src="{{URL::to('/')}}/images/work/03.jpg" alt="Image 03" />
        <img class="img-thumnail" src="{{URL::to('/')}}/images/work/04.jpg" alt="Image 04" />
      </div>
    </div>
  </div>
  <div class="copyright text-center">
    Copyright &copy; 2014 <span>Your Template Name</span> .Inc
  </div>
</section>
<!-- End Ultimate Footer Section -->
<!-- Start Scroll To Top -->
<div id="scroll-top">
  <i class="fa fa-chevron-up fa-3x"></i>
</div>
<!-- End Scroll To Top -->

<!--include jquery script-->
<script type="text/javascript" src="{{URL::to('js/jquery.js')}}"></script>
<script type="text/javascript" src="{{URL::to('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{URL::to('js/plugins.js')}}"></script>
</body>
</html>