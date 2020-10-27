<?php
    include 'header.php';

    include 'dao.php';
    
    $janijim = obtenerJanijimPorKvutza($_SESSION['kvutza']);
    $kvutza = obtenerKvutza($_SESSION['kvutza']);
    
  
?>


<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Janijimot <?php echo $kvutza[0]['nombre'] ?></h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Inicio</a></li>
                            <li><a href="#">Janijimot</a></li>
                            <li class="active">Listado</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-6">
                                        <strong class="card-title"></strong>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <a href="Janij-AgregarEditar.php" class="btn btn-success"><i class="fa fa-plus"></i> Agregar janij</a>
                                    </div>

                                </div>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Apellido</th>
                                            <th>Nombre</th>
                                            <th>Cumpleaños</th>
                                            <th> </th>
                                        </tr>
                                    </thead>
                                    <?php
                                        for ($i = 0; $i < count($janijim); $i++) {
                                            ?>
                                            <tr>
                                                
                                                <td><?php echo $janijim[$i]['apellido'] ?></td>
                                                <td><?php echo $janijim[$i]['nombre'] ?></td>
                                                <td><?php echo $janijim[$i]['fechaNac'] ?></td>
                                                

                                                <td>
                                                    <a href="Janij-Ver.php?id=<?php echo $janijim[$i]['idJanij']?>" class="btn btn-warning"><i class="fa fa-eye"></i> Ver</a>
                                                    <a href="Janij-AgregarEditar.php?id=<?php echo $janijim[$i]['idJanij']?>" class="btn btn-primary"><i class="fa fa-edit"></i> Editar</a>
                                                    <a href="Janij-Delete.php?id=<?php echo $janijim[$i]['idJanij']?>" class="btn btn-danger"><i class="fa fa-trash-o"></i> Eliminar</a>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                   
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
    
        <div class="content mt-3" >
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                    </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

    
       

<?php
    include 'bottom.php';
?>

