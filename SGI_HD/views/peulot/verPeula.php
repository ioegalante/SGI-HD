<?php
include '../../header.php';
include_once ($_SERVER["DOCUMENT_ROOT"] . 'dao/dao.php');
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
                                    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">

                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="select" class=" form-control-label">Módulo</label></div>
                                            <div class="col-12 col-md-9">
                                                <select name="select" id="select" class="form-control" disabled="true">
                                                    <option value="0">p.modulo</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tojnit</label></div>
                                            <div class="col-12 col-md-9"><input placeholder="p.tema" type="text" id="text-input" name="text-input" disabled="true" class="form-control"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Enfoque</label></div>
                                            <div class="col-12 col-md-9"><input placeholder="p.Subtema" type="text" disabled="true" id="text-input" name="text-input" class="form-control"></div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Racional</label></div>
                                            <div class="col-12 col-md-9">
                                                <textarea placeholder="p.Racional" name="textarea-input" disabled="true" id="textarea-input" rows="9" class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Objetivos</label></div>
                                            <div class="col-12 col-md-9">
                                                <textarea placeholder="p.Objetivos" name="textarea-input" disabled="true" id="textarea-input" rows="9" class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Metodología</label></div>
                                            <div class="col-12 col-md-9">
                                                <textarea placeholder="p.Metodologia" name="textarea-input" disabled="true" id="textarea-input" rows="9" class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Jomer</label></div>
                                            <div class="col-12 col-md-9"><textarea placeholder="p.Jomer" name="textarea-input" disabled="true" id="textarea-input" rows="9" class="form-control"></textarea></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Fecha</label></div>
                                            <div class="col-sm-4">
                                                <input type="date" name="fPeula" step="1" min="2019-01-01" disabled="true" value="p.Fecha">
                                            </div>
                                        </div>
                                        <div class="card-footer text-right">
                                            <a href="#" class="btn btn-primary"><i class="fa fa-edit"></i> Editar</a>
                                        </div>



                                    </form>
                                </div>
                            </div>
                        </div>
                    </div><!-- .animated -->
                </div><!-- .content -->



















<?php
include '../../bottom.php';
?>