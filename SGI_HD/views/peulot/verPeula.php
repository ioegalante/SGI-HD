<?php
    include 'header.php';

    include 'dao.php';

    $pdo = connect();

    $idPeula = $_GET['id'];

    $stmt = $pdo -> prepare("CALL ObtenerPeulaPorID($idPeula)");

    $stmt -> execute();

    $peula = $stmt -> fetchAll(PDO::FETCH_ASSOC);
    $mod = $peula[0]['modulo'];

    $pdo2 = connect();
    $stmt2 = $pdo2 -> prepare("CALL ObtenerModuloPorID($mod)");

    $stmt2 -> execute();

    $modulo = $stmt2 -> fetchAll(PDO::FETCH_ASSOC);
    
?>

<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Ver Peula</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Inicio</a></li>
                            <li><a href="#">Peulot</a></li>
                            <li class="active">Ver</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>


        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-lg-12">
                            <div class="card">

                                <div class="card-body card-block">
                                    

                                        <div class="text-center">
                                            <h5 class=""><?php echo $modulo[0]['nombre'] ?> </h5>
                                            <h1 class=""><?php echo $peula[0]['tema'] ?></h1>

                                            
                                        </div>
                                        <?php if($peula[0]['subtema'] != null){ ?>
                                        <div class="row form-group ml-3 mt-3">
                                            <p><strong>Subtema: </strong><?php echo $peula[0]['subtema'] ?></p>
                                        </div>
                                        <?php }?>

                                        <div class="row form-group ml-3 mt-3 mr-2">
                                            <p><strong>Racional: </strong><?php echo $peula[0]['racional'] ?></p>
                                        </div>

                                        <div class="row form-group ml-3 mt-3 mr-2">
                                            <p><strong>Objetivos: </strong><?php echo $peula[0]['objetivos'] ?></p>
                                        </div>

                                        <div class="row form-group ml-3 mt-3 mr-2">
                                            <p><strong>Metodología: </strong><?php echo $peula[0]['metodologia'] ?></p>                                            
                                        </div>

                                        <div class="row form-group ml-3 mt-3 mr-2">
                                            <p><strong>Jomer: </strong><?php echo $peula[0]['jomer'] ?></p>                        
                                        </div>
                                        <div class="row form-group ml-3 mt-3 mr-2">
                                            <p><strong>Fecha: </strong></p>  
                                            <div class="col-sm-4">
                                                <input type="date" name="fPeula" step="1" min="2019-01-01" disabled="true" value="<?php echo $peula[0]['fecha'] ?>">
                                            </div>                      
                                        </div>
                                        
                                        <div class="card-footer text-right">
                                            <a href="agregarPeula.php?id=<?php echo $peula[0]['idPeula']?>" class="btn btn-primary"><i class="fa fa-edit"></i> Editar</a>
                                        </div>


                                </div>
                            </div>
                        </div>
                    </div><!-- .animated -->
                </div><!-- .content -->



















<?php
include '../../bottom.php';
?>