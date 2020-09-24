<?php
include '../../header.php';
include_once ($_SERVER["DOCUMENT_ROOT"] . 'dao/dao.php');
?>

<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Agregar Peula</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Inicio</a></li>
                            <li><a href="#">Peulot</a></li>
                            <li class="active">Agregar</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        
        
        <div class="content mt-3" >
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-lg-12">
                            <div class="card">
                                
                                <div class="card-body card-block">
                                    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="select" class=" form-control-label">Módulo</label></div>
                                            <div class="col-12 col-md-9">
                                                <select name="select" id="select" class="form-control">
                                                <?php foreach(dao::obtenerModulosPorTzevet() as $item){ ?>
                                                    <option value="<?php $item->id; ?>"><?php echo $item->nombre; ?></option>
                                                <?php } ?>
                                                </select>
                                            </div>
                                           
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tojnit</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="text-input"  class="form-control"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Enfoque</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="text-input"  class="form-control"></div>
                                        </div>
                                        
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Racional</label></div>
                                            <div class="col-12 col-md-9"><textarea name="textarea-input" id="textarea-input" rows="9"  class="form-control"></textarea></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Objetivos</label></div>
                                            <div class="col-12 col-md-9"><textarea name="textarea-input" id="textarea-input" rows="9"  class="form-control"></textarea></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Metodología</label></div>
                                            <div class="col-12 col-md-9"><textarea name="textarea-input" id="textarea-input" rows="9"  class="form-control"></textarea></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Jomer</label></div>
                                            <div class="col-12 col-md-9"><textarea name="textarea-input" id="textarea-input" rows="9"  class="form-control"></textarea></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Fecha</label></div>
                                            <div class="col-sm-4">
                                                <input type="date" name="fPeula" step="1" min="2019-01-01">
                                            </div> 
                                        </div>
                                        <div class="card-footer">
                                            <div class="row">
                                               
                                                <div class="col-lg-9 text-right">
                                                    <a href="#" class="btn btn-success"><i class="ti-export"></i> Agregar</a>
                                                </div>
                                            </div>
                                           
                                        </div>
                                           
                                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

















<?php
include '../../bottom.php';
?>