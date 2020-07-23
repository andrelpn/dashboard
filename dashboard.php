<!DOCTYPE html>
<!-- saved from url=(0054)https://getbootstrap.com/docs/4.5/examples/dashboard/# -->
<html lang="en">

<head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
      <meta name="generator" content="Jekyll v4.0.1">


      <title>Primeiro DashBoard</title>

      <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/dashboard/">

      <!-- Bootstrap core CSS -->
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <!-- Custom styles for this template -->
      <link href="css/dashboard.css" rel="stylesheet">

      <meta name="msapplication-config" content="/docs/4.5/assets/img/favicons/browserconfig.xml">
      <meta name="theme-color" content="#563d7c">


      <style>
            .bd-placeholder-img {
                  font-size: 1.125rem;
                  text-anchor: middle;
                  -webkit-user-select: none;
                  -moz-user-select: none;
                  -ms-user-select: none;
                  user-select: none;
            }

            @media (min-width: 768px) {
                  .bd-placeholder-img-lg {
                        font-size: 3.5rem;
                  }
            }
      </style>

</head>

<body>
      <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
            <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="https://getbootstrap.com/docs/4.5/examples/dashboard/#">André Nagahiro</a>
            <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
            </button>
            <ul class="navbar-nav px-3">
                  <li class="nav-item text-nowrap">
                        <a class="nav-link" href="https://getbootstrap.com/docs/4.5/examples/dashboard/#">Sign out</a>
                  </li>
            </ul>
      </nav>

      <div class="container-fluid">
            <div class="row">
                  <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                        <div class="sidebar-sticky pt-3">
                              <ul class="nav flex-column">
                                    <li class="nav-item">
                                          <a class="nav-link active" href="#">
                                                Dashboard <span class="sr-only">(current)</span>
                                          </a>
                                    </li>
                                    <li class="nav-item">
                                          <a class="nav-link" href="?pagina=pedidos">

                                                Pedidos
                                          </a>
                                    </li>
                                    <li class="nav-item">
                                          <a class="nav-link" href="?pagina=produtos">

                                                Produtos
                                          </a>
                                    </li>
                                    <li class="nav-item">
                                          <a class="nav-link" href="?pagina=vendas">

                                                Cadastro de Vendas
                                          </a>
                                    </li>

                              </ul>


                        </div>
                  </nav>


                  <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                              <h1 class="h2">Dashboard</h1>
                              <div class="btn-toolbar mb-2 mb-md-0">
                                    <div class="btn-group mr-2">

                                    </div>

                              </div>
                        </div>

                        <?php

                        if (isset($_GET['pagina'])) {

                              switch ($_GET['pagina']) {
                                    case 'pedidos':
                                          echo '<h2>Pedidos</h2>';
                                          include 'graficos/graficoArea.php';
                                          break;
                                    case 'produtos':
                                          echo '<h2>Produtos</h2>';
                                          break;
                                    case 'vendas':
                                          include 'cadastro_vendas.php';
                                          break;
                                    default:

                                          echo "NENHUMA OPÇÃO ESCOLHIDA";
                                          break;
                              }
                        }

                        ?>

                  </main>
            </div>
      </div>

      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>

</html>