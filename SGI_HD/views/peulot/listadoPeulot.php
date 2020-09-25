<?php
include '../../header.php';
include_once ($_SERVER["DOCUMENT_ROOT"] . '../dao/dao.php');
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
                                        <a href="agregarPeula.html" class="btn btn-success"><i class="fa fa-plus"></i> Agregar peula</a>
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
                                    <?php foreach(dao::obtenerPeulotPorKvutza() as $item){ ?>
                                        <tbody>
                                        <tr>
                                            <td><?php echo $item->modulo; ?></td>
                                            <td><?php echo $item->tema; ?></td>
                                            <td><?php echo $item->fecha; ?></td>
                                            <td>
                                                <a href="#" class="btn btn-warning"><i class="fa fa-eye"></i> Ver</a>
                                                <a href="#" class="btn btn-primary"><i class="fa fa-edit"></i> Editar</a>
                                                <a href="#" class="btn btn-danger"><i class="fa fa-trash-o"></i> Eliminar</a>
                                            </td>
                                        </tr>
                        
                                        </tbody>
                                       
									<?php } ?>
                                   
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

        <script src="../../vendors/jquery/dist/jquery.min.js"></script>
        <script src="../../vendors/popper.js/dist/umd/popper.min.js"></script>
        <script src="../../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="../../assets/js/main.js"></script>
        <script src="../../assets/js/javascript.js"></script>
    
        <script src="../../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="../../vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="../../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="../../vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
        <script src="../../vendors/jszip/dist/jszip.min.js"></script>
        <script src="../../vendors/pdfmake/build/pdfmake.min.js"></script>
        <script src="../../vendors/pdfmake/build/vfs_fonts.js"></script>
        <script src="../../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="../../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="../../vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
        <script src="../../assets/js/init-scripts/data-table/datatables-init.js"></script>
    
</body>
    
</html>

<?php
//include '../../bottom.php';
?>

