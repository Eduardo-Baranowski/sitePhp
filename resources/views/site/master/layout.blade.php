<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Eduardo Baranowski</title>
  <link rel="stylesheet" href="style.css">
  <!--<link rel="canonical" href="https://getbootstrap.com/docs/4.1/examples/carousel/">-->

  <!-- Bootstrap core CSS -->
  <link href="../../../dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <!--<link href="carousel.css" rel="stylesheet">-->

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <style>
    /* GLOBAL STYLES
-------------------------------------------------- */
/* Padding below the footer and lighter body text */
body {
    padding-top: 3rem;
    padding-bottom: 3rem;
    color: #5a5a5a;
}
/* CUSTOMIZE THE CAROUSEL
-------------------------------------------------- */
/* Carousel base class */
.carousel {
    margin-bottom: 4rem;
}
/* Since positioning the image, we need to help out the caption */
.carousel-caption {
    bottom: 3rem;
    z-index: 10;
}
/* Declare heights because of positioning of img element */
.carousel-item {
    height: 32rem;
    background-color: #777;
}
.carousel-item > img {
    position: absolute;
    top: 0;
    left: 0;
    min-width: 100%;
    height: 32rem;
}
/* MARKETING CONTENT
-------------------------------------------------- */
/* Center align the text within the three columns below the carousel */
.marketing .col-lg-4 {
    margin-bottom: 1.5rem;
    text-align: center;
}
.marketing h2 {
    font-weight: 400;
}
.marketing .col-lg-4 p {
    margin-right: 0.75rem;
    margin-left: 0.75rem;
}
/* Featurettes
------------------------- */
.featurette-divider {
    margin: 5rem 0; /* Space out the Bootstrap <hr> more */
}
/* Thin out the marketing headings */
.featurette-heading {
    font-weight: 300;
    line-height: 1;
    letter-spacing: -0.05rem;
}
/* RESPONSIVE CSS
-------------------------------------------------- */
@media (min-width: 40em) {
    /* Bump up size of carousel content */
    .carousel-caption p {
        margin-bottom: 1.25rem;
        font-size: 1.25rem;
        line-height: 1.4;
    }
    .featurette-heading {
        font-size: 50px;
    }
}
@media (min-width: 62em) {
    .featurette-heading {
        margin-top: 7rem;
    }
}
  </style>
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="{{ route('site.home')}}">Eduardo Baranowski</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item {{ (Route::current()->getName() === 'site.home' ? 'active' : '') }}">
            <a class="nav-link" href="{{ route('site.home')}}">Home</a>
          </li>
          <li class="nav-item {{ (Route::current()->getName() === 'site.sobre' ? 'active' : '') }}">
            <a class="nav-link" href="{{ route('site.sobre')}}">Sobre</a>
          </li>
          <li class="nav-item {{ (Route::current()->getName() === 'site.contact' ? 'active' : '') }}">
            <a class="nav-link" href="{{ route('site.contact')}}">Contato</a>
          </li>
          <li class="nav-item {{ (Route::current()->getName() === 'site.portfolio' ? 'active' : '') }}">
            <a class="nav-link" href="{{ route('site.portfolio')}}">Portfólio</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <main role="main">
  @yield('content')


    <!-- FOOTER -->
    <footer class="container">
      <p class="float-right"><a href="#">Back to top</a></p>
      <p>&copy; <?=date('Y') ?> &middot; <a href="#"><span class="text-muted">Desenvolvido por Eduardo Baranowski.</span></a></p>
      
    </footer>
  </main>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.js"></script>
  <script src='/js/javascript.js'></script>
</body>
</html>