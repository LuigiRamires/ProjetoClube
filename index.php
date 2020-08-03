<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- Meta tags Obrigatórias -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="style/styleCarousel.css" />
  <link rel="stylesheet" href="style/styleFooter.css" />
  <link rel="stylesheet" href="style/styleLocais.css" />
  <link rel="stylesheet" href="style/styleModalides.css" />
  <link rel="stylesheet" href="style/styleNavbar.css" />
  <link rel="shortcut icon" href="img/club-logo.ico" />
  <link href="https://fonts.googleapis.com/css2?family=Kulim+Park:wght@600&display=swap" rel="stylesheet">

  <title>Clube SPEtec</title>
</head>

<body>
  <!--Navbar -->
  <nav class="navbar navbar-expand-lg navbar-fundo">

    <div class="container">

      <a class="navbar-brand h1 mt-2" href="#">Clube SPEtec</a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSite">

        <ul class="navbar-nav ml-auto mt-1 mb-4">

          <li class="nav-item marginItens">
            <a class="nav-link nav-tamanho" href="#">Início</a>
          </li>
          <li class="nav-item marginItens">
            <a class="nav-link nav-tamanho" href="#">Planos</a>
          </li>
          <li class="nav-item marginItens">
            <a class="nav-link nav-tamanho" href="indexLogin.php">Login</a>
          </li>
        </ul>

      </div>

    </div>

  </nav>
  <section>
    <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="6000">
      <ol class="carousel-indicators">
        <li data-target="#carousel" data-slide-to="0" class="active"></li>
        <li data-target="#carousel" data-slide-to="1"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <picture>
            <img srcset="img/Carousel1.png" alt="responsive image" class="d-block img-fluid">
          </picture>
          <div class="carousel-caption">
            <div>
              <span class="btn btn-carousel"><a href="indexSociosCadastrar.php">CADASTRE-SE</a></span>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <picture>
            <img srcset="img/Carousel2.png" alt="responsive image" class="d-block img-fluid">
          </picture>

          <div class="carousel-caption justify-content-center align-items-center">
            <div>
              <span class="btn btn-carousel"><a href="#infraestrutura">Conheça nossa infraestrutura</a></span>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
  </section>
  <!--/.Navbar -->

  <section cid="gallery">
    <div class="container mt-5">
      <div class="row col-12 mt-2 mb-3">
        <center>
          <ul>
            <li style="font-size: 30px;">
              <p class="infraTexto" id="infraestrutura">Nossa infraestrutura</p>
            </li>
          </ul>
        </center>
      </div>
      <div class="row">
        <div class="col-lg-3 mb-4">
          <div class="card">
            <img src="https://www.ccgrass.com/pt/wp-content/uploads/2017/03/Wodonga-Australia-x-1000x660.jpg" alt=""
              class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Campos de tênis</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum similique repellat a
                laborum, rerum voluptates ipsam eos quo tempore iusto dolore modi dolorum in pariatur. Incidunt
                repellendus praesentium quae!</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 mb-4">
          <div class="card">
            <img
              src="https://img.stpu.com.br/?img=https://s3.amazonaws.com/pu-mgr/default/a0RG000000sOE2iMAG/5aaae5fae4b04d230bc5fed5.jpg&w=710&h=462"
              alt="" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Piscina</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum similique repellat a
                laborum, rerum voluptates ipsam eos quo tempore iusto dolore modi dolorum in pariatur. Incidunt
                repellendus praesentium quae!</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 mb-4">
          <div class="card">
            <img src="https://www.juventus.com.br/wp-content/uploads/2011/08/campo-associado.jpg" alt=""
              class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Campo de futebol</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum similique repellat a
                laborum, rerum voluptates ipsam eos quo tempore iusto dolore modi dolorum in pariatur. Incidunt
                repellendus praesentium quae!</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 mb-4">
          <div class="card">
            <img
              src="https://images.squarespace-cdn.com/content/v1/561903c1e4b076f7054b9c34/1530025973981-LNPTB5M28GANZ1VX9Y8Q/ke17ZwdGBToddI8pDm48kPqQfq0L3n3wpHIsRapTfg8UqsxRUqqbr1mOJYKfIPR7LoDQ9mXPOjoJoqy81S2I8N_N4V1vUb5AoIIIbLZhVYxCRW4BPu10St3TBAUQYVKczo5Zn4xktlpMsMj-QlHXeMfNK6GwvtVkYEWiR8XAPyD3GfLCe_DXOSC_YcAacWL_/HORIZONTES+ARQUITETURA-+PAVILHAO+ESPORTIVO+MINAS+NAUTICO+TENIS+CLUTE+-+CREDITO+FOTOS+GUSTAVO+XAVIER+%2812%29.jpg"
              alt="" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Pavilhão esportivo</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum similique repellat a
                laborum, rerum voluptates ipsam eos quo tempore iusto dolore modi dolorum in pariatur. Incidunt
                repellendus praesentium quae!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
	<section>
  <footer style="background-color: #2b2e4a; color:white;">
    <div class="container py-5">
      <div class="row py-4">
        <div class="col-lg-5 col-md-6 mb-4 mb-lg-0"><img src="img/logo.png" alt="" width="180" class="mb-3">
          <p class="font-italic">Programadores e artistas são os únicos profissionais que tem como hobby a própria profissão.<footer><i>- Rafael Lain</i></footer></p>
          <ul class="list-inline mt-4">
            <li class="list-inline-item"><a href="https://www.twitter.com" target="_blank" title="twitter"><i class="fa fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="https://www.facebook.com" target="_blank" title="facebook"><i class="fa fa-facebook"></i></a></li>
            <li class="list-inline-item"><a href="https://www.instagram.com/_ramireszz" target="_blank" title="instagram"><i class="fa fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="https://www.pinterest.com" target="_blank" title="pinterest"><i class="fa fa-pinterest"></i></a></li>
            <li class="list-inline-item"><a href="https://www.vimeo.com" target="_blank" title="vimeo"><i class="fa fa-vimeo"></i></a></li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
          <h6 class="text-uppercase font-weight-bold mb-4">Nosso clube</h6>
          <ul class="list-unstyled mb-0">
            <li class="mb-2"><a href="#infraestrutura" class="footer-text">Infraestrutura</a></li>
            <li class="mb-2"><a href="#" class="footer-text">Topo</a></li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
          <h6 class="text-uppercase font-weight-bold mb-4">Associados</h6>
          <ul class="list-unstyled mb-0">
            <li class="mb-2"><a href="indexLogin.php" class="footer-text">Login</a></li>
            <li class="mb-2"><a href="#" class="footer-text">Cadastre-se</a></li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Copyrights -->
    <div class="py-4" style="background-color: #e84545; color: white;">
      <div class="container text-center">
        <p class="mb-0 py-2">© 2020 <a style="font-weight: bold;" href="https://www.linkedin.com/in/luigi-de-oliveira-ab0111197/">Luigi de Oliveira</a> , All rights reserved.</p>
      </div>
    </div>
  </footer>
  <!-- End -->
	</section>


  <!-- JavaScript (Opcional) -->
  <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/a31af2c148.js" crossorigin="anonymous"></script>
  <script>
    $(document).ready(function () {
      $('[data-toggle="popover"]').popover();
    });
  </script>
</body>

</html>