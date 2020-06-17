@extends('site.master.layout')

@section('content')

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
        <div class="container">
          <div class="carousel-caption text-left">
            <h1>Criação De Site Profissional.</h1>
            <?php
            if (date('H') >= 0 && date('H')<=12){
              echo "<p>Bom dia!</p>";
            } elseif (date('H') >= 13 && date('H')<=18) {
              echo "<p>Boa tarde!</p>";
            } else {
              echo "<p>Boa noite!</p>";
            }
            ?>
            <p>Criamos seu site profissional. Desenvolvemos os serviços nessários para uma boa usabilidade com o que você deseja trabalhar.</p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
        <div class="container">
          <div class="carousel-caption">
            <h1>Criação de Lojas Virtuais.</h1>
            <p>Auxiliamos na criação de sua loja virtual, possibilitando a integração com os principais meios de pagamento online.</p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
        <div class="container">
          <div class="carousel-caption text-right">
            <h1>Consultoria</h1>
            <p>Realizamos consultoria para melhorar o desempenho de seu site. Trabalhamos para tornar seu site seguro e rentável.</p>
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


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
        <h2>Desenvolvimento</h2>
        <p>Desenvolvemos seu site com diversoes frameworks de sua preferência e auxiliamos com sua hospedagem.</p>
        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
        <h2>Frameworks</h2>
        <p>Utilizamos Django, Spring, Laravel, Node.js, entre outras.</p>
        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
        <h2>Aplicações</h2>
        <p>Desenvolvemos o software que você necessita nas mais variadas linguagens de programação de acordo com sua necessidade, desde Java, Python, C e outras.</p>
        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Diversos exemplos de código no GitHub <span class="text-muted">disponíveis.</span></h2>
        <p class="lead">Se deseja transparância e acesso a uma base que demonstre como funciona um site ou uma banco de dados basta acessar meu perfil GitHub.</p>
        <p><a class="btn btn-secondary" href="https://github.com/Eduardo-Baranowski/" role="button">Clique e saiba mais &raquo;</a></p>
      </div>
      <div class="col-md-5">
        <img class="featurette-image img-fluid mx-auto" src="git.png"  width="100" height="100" alt="Generic placeholder image">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Quer trocar uma ideia ? <span class="text-muted">Me siga no Instagram.</span></h2>
        <p><a class="btn btn-secondary" href="https://www.instagram.com/eduardobaranowski/" role="button">Clique e saiba mais &raquo;</a></p>
      </div>
      <div class="col-md-5 order-md-1">
        <img class="featurette-image img-fluid mx-auto" src="insta.png"  width="100" height="100" alt="Generic placeholder image">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">No LinkedIn. <span class="text-muted">o perfil se encontra logo abaixo! </span></h2>
        <p><a class="btn btn-secondary" href="https://www.linkedin.com/in/eduardo-baranowski-091760127/" role="button">Clique e saiba mais &raquo;</a></p>
      </div>
      <div class="col-md-5">
        <img class="featurette-image img-fluid mx-auto" src="linkedin.png"  width="100" height="100" alt="Generic placeholder image">
      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->
@endsection