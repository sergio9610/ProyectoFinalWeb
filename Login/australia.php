<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Australia</title>
    <link rel="stylesheet" href="">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../Css/style_australia.css">
</head>
<body>
    <div class="container">
           <nav class="menuPrincipal navbar fixed-top navbar-expand-md">
                <a href="home_login.php" class="tituloPrincipal navbar-brand mt-1"><img src="../img/logo_2.png" alt="Logo" class="logo"></a>
                <div id="menu" class="collapse navbar-collapse">
                    <ul class="navbar-nav mr-auto">

                        <li class="nav-item dropdown active">
                            <a href="home_login.php" class="home nav-link btn">Inicio</a>
                        </li>

                        <li class="nav-item dropdown active">
                            <a href="#" class="teams nav-link dropdown-toggle btn" data-toggle="dropdown">Equipos</a>
                            <div class="menuDesplegable dropdown-menu navbar-dark">
                                <a href="argentina.php" class="dropdown-item">
                                    Argentina
                                </a>    
                                <a href="australia.php" class="lista dropdown-item">
                                    Australia
                                </a>
                                 <a href="bolivia.php" class="lista dropdown-item">
                                    Bolivia
                                </a>
                                <a href="brasil.php" class="dropdown-item">
                                    Brasil
                                </a> 
                                <a href="chile.php" class="dropdown-item">
                                    Chile
                                </a>
                                <a href="colombia.php" class="dropdown-item">
                                    Colombia
                                </a>
                                <a href="ecuador.php" class="dropdown-item">
                                    Ecuador
                                </a>
                                <a href="paraguay.php" class="dropdown-item">
                                    Paraguay
                                </a>
                                <a href="peru.php" class="dropdown-item">
                                    Per??
                                </a>
                                <a href="qatar.php" class="dropdown-item">
                                    Qatar
                                </a>
                                <a href="uruguay.php" class="dropdown-item">
                                    Uruguay
                                </a>
                                <a href="venezuela.php" class="dropdown-item">
                                    Venezuela
                                </a>
                            </div>
                        </li>

                        <?php
                            session_start();
                            require_once "./Controllers_Login/controller_login.php";
                            if(isset($_SESSION['user_id'])){
                                $mvc = new MvcController();
                                $mvc -> NavLogout();
                            }
                            else{
                                $mvc = new MvcController();
                                $mvc -> NavLogin();
                            }
                        ?>
                    </ul>
                </div>
            </nav>
        </div> <br><br>



  <!-- Page Content -->
  <div class="container">

    <!-- Heading Row -->
    <div class="row align-items-center my-5">
        <div class="col-lg-6">
            <div class="row align-items-center my-5">
                <div class="col-lg-3">
                    <img class="imagenBandera img-fluid" src="../img/Australia_rounded_200px.webp" alt="">
                </div>
                <div class="col-lg-3">
                    <p><strong class="tituloBandera"><h3>Australia</h3></strong></p>
                </div>
            </div>
        </div>
        <div class="col-lg-5">
           <img class="imagenEscudo img-fluid" src="../img/escudo_australia.png" alt="">
        </div>
    </div>
        

    <div class="row align-items-center my-5">
      <div class="col-lg-7">
        <img class="imagenPrincipal img-fluid" src="../img/AUSTRALIA.webp" alt="">
      </div>
      <!-- /.col-lg-8 -->
      <div class="col-lg-5">
        <p class="texto">El combinado australiano participar?? de la CONMEBOL Copa Am??rica 2021 como invitada, se convertir?? en la d??cima selecci??n fuera de CONMEBOL en disputar este certamen (Catar, M??xico, Costa Rica, Estados Unidos, Honduras, Panam??, Jap??n, Jamaica y Hait?? son las otras nueve). Su ??ltimo trofeo a nivel selecciones fue la Copa Asi??tica 2015, en la ??ltima edici??n cay?? en cuartos de final.
        </p>
        
      </div>
    
    </div>
    </div>

</body>
</html>