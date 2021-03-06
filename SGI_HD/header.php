<?php

    
    session_start();
    
    if($_SESSION['idUsuario'] == null){
       header('location: Login-Ingresar.php');
    }

?>

<!doctype html>
<html class="no-js" lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="images/logo3.ico" />
    <title>SGI HD</title>
    <meta name="description" content="SGI HD ;)">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">


    
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/estilos.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel" style="background-color: #ff0000; color: #FFF;">
        <nav class="navbar navbar-expand-sm navbar-default" style="background-color:#ff0000; color: white;">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="index.php"><img src="images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse " >
                <ul class="nav navbar-nav">
                    <?php if ($_SESSION['tafkid'] == 1 || $_SESSION['tafkid'] == 6) {?>
                    <li>
                        <a href="Peula-Listar.php" > <i class="menu-icon fa ti-write  " style="color: white;"></i>Peulot</a>
                    </li>
                    <li>
                        <a href="Janij-Listar.php" style="color: white;"> <i class="menu-icon fa fa-users " style="color: white;"></i>Janijimot</a>
                    </li>
                    <?php } ?>
                    <li>
                        <a href="#" > <i class="menu-icon fa ti-basketball  " style="color: white;"></i>Sábados</a>
                    </li>
                    <li>
                        <a href="#"> <i class="menu-icon fa fa-usd  " style="color: white;"></i>Guizbarut</a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa ti-archive  " style="color: white;"></i>Vaadot</a>
                        <ul class="sub-menu children dropdown-menu" style="background-color: #ff0000; color: white;">
                            <li><a href="#">Harjavá</a></li>
                            <li><a href="#">Jinuj</a></li>
                            <li><a href="#">Ecología</a></li>
                            <li><a href="#">Feminismo</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" > <i class="menu-icon fa fa-exclamation  " style="color: white;"></i>Noticias</a>
                    </li>
                    <li>
                        <a href="#" > <i class="menu-icon fa ti-calendar " style="color: white;"></i>Luaj tnuatí</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel" style="background-color: #FFB2B2;">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    
                </div>
                        <!-- session -->
                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                    
                        <a class="mr-2" ><?php echo $_SESSION['nombre'] ." " .$_SESSION['apellido'] ?></a>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/avatar/avatar.png" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa-user"></i> Mi perfil</a>
                            <!-- <a class="nav-link" href="#"><i class="fa fa-cog"></i> Ajustes</a> -->
                            <a class="nav-link" href="Logout.php"><i class="fa fa-power-off"></i> Cerrar sesión</a>
                        </div>
                    </div>
                </div>
            </div>
   
        </header><!-- /header -->
        <!-- Header-->
        <!-- <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Añadir producto</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Inicio</a></li>
                            <li><a href="#">Productos</a></li>
                            <li class="active">Añadir</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>-->
        <div class="content mt-3" >
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                    </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->