<?php
    include 'header.php';

    include 'dao.php';

    $pdo = connect();

    $idJanij = $_GET['id'];

    $janij = obtenerJanijPorID($idJanij);
    $responsables = obtenerResponsablePorJanij($idJanij);

    

    
?>

<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Ver Janij/a</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Inicio</a></li>
                            <li><a href="#">Janij</a></li>
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
                                    <div class="col-md-12 mt-3 text-right">
                                        <a href="Responsable-AgregarEditar.php?id=<?php echo $janij['idJanij']?>" class="btn btn-success"><i class="fa fa-plus"></i> Agregar Responsable</a>
                                    </div>
                                <div class="card-body card-block">
                                    
                                        <div class="text-center">
                                            <h1 class=""><?php echo $janij['nombre'] .' ' .$janij['apellido'] ?></h1>
                                        </div>
                                       
                                        <div class="ml-3">
                                            <h3 class="">Datos Personales</h3>
                                        </div>
                                        
                                        <div class="row form-group ml-3 mt-3 mr-2">
                                            <p><strong>Fecha de Nacimiento: </strong></p>  
                                            <div class="col-sm-4">
                                                <input type="date" name="fPeula" step="1" disabled="true" value="<?php echo $janij['fechaNac'] ?>">
                                            </div>                      
                                        </div>

                                        <div class="row form-group ml-3 mt-3 mr-2">
                                            <p><strong>DNI: </strong><?php echo $janij['idJanij'] ?></p>                        
                                        </div>

                                        <?php if ($janij['telefono'] != NULL){?>
                                        <div class="row form-group ml-3 mt-3">
                                            <p><strong>Telefono: </strong><?php echo $janij['telefono'] ?></p>
                                        </div>
                                        <?php } 
                                        if ($janij['mail'] != NULL){?>
                                        <div class="row form-group ml-3 mt-3 mr-2">
                                            <p><strong>Mail: </strong><?php echo $janij['mail'] ?></p>
                                        </div>
                                        <?php } ?>

                                        <div class="row form-group ml-3 mt-3 mr-2">
                                            <p><strong>Escuela: </strong><?php echo $janij['escuela'] ?></p>
                                        </div>

                                        <?php if ($janij['observaciones'] != NULL){?>
                                                <div class="row form-group ml-3 mt-3">
                                                    <p><strong>Observaciones: </strong><?php echo $janij['observaciones'] ?></p>
                                                </div>
                                        <?php }

                                        for ($i = 0; $i < count($responsables); $i++) 
                                        {   ?>
                                            <div class="ml-3">
                                                <h3 class="">Datos Responsable: <?php echo $responsables[$i]['relacion'] ?></h3>
                                            </div>

                                            <div class="row form-group ml-3 mt-3 mr-2">
                                                <p><strong>Nombre: </strong><?php echo $responsables[$i]['nombre'] .' ' .$responsables[$i]['apellido']?></p>
                                            </div>
                                            <div class="row form-group ml-3 mt-3 mr-2">
                                                <p><strong>Teléfono: </strong><?php echo $responsables[$i]['telefono'] ?></p>
                                            </div>
                                            <div class="row form-group ml-3 mt-3 mr-2">
                                                <p><strong>Mail: </strong><?php echo $responsables[$i]['mail'] ?></p>
                                            </div>

                                            <?php if ($responsables[$i]['observaciones'] != NULL){?>
                                                <div class="row form-group ml-3 mt-3">
                                                    <p><strong>Observaciones: </strong><?php echo $responsables[$i]['observaciones'] ?></p>
                                                </div>
                                            <?php } ?>
                                            



                                        <?php } ?>
                                        
                                        
                                        <div class="card-footer text-right">
                                            <a href="Janij-AgregarEditar.php?id=<?php echo $janij['idJanij']?>" class="btn btn-primary"><i class="fa fa-edit"></i> Editar Janij</a>
                                            <a href="Responsable-AgregarEditar.php?=id<?php echo $janij['idJanij']?>" class="btn btn-primary"><i class="fa fa-edit"></i> Editar Responsable(s)</a>
                                        </div>


                                </div>
                            </div>
                        </div>
                    </div><!-- .animated -->
                </div><!-- .content -->



















<?php
    include 'bottom.php';
?>