<?php
    include 'header.php';

  include 'dao.php';

  $pdo = connect();

  $stmt = $pdo -> prepare("SELECT * FROM Peulot");

  $stmt -> execute();

  $peulot = $stmt -> fetchAll(PDO::FETCH_ASSOC);

  
  
    

?>


<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Peulot</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Inicio</a></li>
                            <li><a href="#">Peulot</a></li>
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
                                        <a href="Peula-AgregarEditar.php" class="btn btn-success"><i class="fa fa-plus"></i> Agregar peula</a>
                                    </div>

                                </div>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Módulo</th>
                                            <th>Tojnit</th>
                                            <th>Fecha</th>
                                            <th> </th>
                                        </tr>
                                    </thead>
                                    <?php
                                        for ($i = 0; $i < count($peulot); $i++) {
                                            
                                            $nombre = traerNombreModulo($peulot[$i]['modulo'])
                                            ?>
                                            <tr>
                                                
                                                <td><?php echo $nombre[0]['nombre'] ?></td>
                                                <td><?php echo $peulot[$i]['tema'] ?></td>
                                                <td><?php echo $peulot[$i]['fecha'] ?></td>
                                                

                                                <td>
                                                    <a href="Peula-Ver.php?id=<?php echo $peulot[$i]['idPeula']?>" class="btn btn-warning"><i class="fa fa-eye"></i> Ver</a>
                                                    <a href="Peula-AgregarEditar.php?id=<?php echo $peulot[$i]['idPeula']?>" class="btn btn-primary"><i class="fa fa-edit"></i> Editar</a>
                                                    <a href="Peula-Delete.php?id=<?php echo $peulot[$i]['idPeula']?>" class="btn btn-danger"><i class="fa fa-trash-o"></i> Eliminar</a>
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

