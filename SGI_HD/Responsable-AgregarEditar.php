

<?php
  include('dao.php');
  include('header.php');
  
  
    $janij = obtenerJanijPorID($_GET['id']);
    

  if (isset($_GET['res'])) {
    $responsable = obtenerResponsablePorID($_GET['id']);
  } else {
    $responsable = array(
    
      "idResponsable"=> "",
      "nombre" => '',
      "apellido" => '',
      "relacion" => '',
      "telefono" => '',
      "mail" => '',
      "observaciones" => ''
    );
    
  }
?>
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Agregar Responsable</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Inicio</a></li>
                            <li><a href="#">Janij</a></li>
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
                                    <form action="Janij-Insert.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    
                                        <div class="text-center"> 
                                            <h1> Responsable de <?php echo $_GET['id'] ?> </h1>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nombre</label></div>
                                            <div class="col-12 col-md-9"><input type="text"  value="<?php echo $responsable['nombre']; ?>" name="nombre"  class="form-control"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Apellido</label></div>
                                            <div class="col-12 col-md-9"><input type="text" value="<?php echo $responsable['apellido']; ?>" name="apellido"  class="form-control"></div>
                                        </div>
                                        <?php if(!isset($_GET['id'])){ ?>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">DNI</label></div>
                                            <div class="col-12 col-md-9"><input type="text" value="<?php echo $responsable['idJanij']; ?>" name="idJanij"  class="form-control"></div>
                                        </div>
                                        <?php } else{?>
                                            <input type="hidden" name="idJanij" value="<?php echo $responsable['idJanij']; }?>">
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Fecha de Nacimiento</label></div>
                                            <div class="col-sm-4">
                                                <input type="date" name="fechaNac" step="1" min="2000-01-01" value="<?php echo $responsable['fechaNac']; ?>">
                                            </div> 
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Escuela</label></div>
                                            <div class="col-12 col-md-9"><input type="text" value="<?php echo $responsable['escuela']; ?>" name="escuela"  class="form-control"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Teléfono</label></div>
                                            <div class="col-12 col-md-9"><input type="text" value="<?php echo $responsable['telefono']; ?>" name="telefono"  class="form-control"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Mail</label></div>
                                            <div class="col-12 col-md-9"><input type="text" value="<?php echo $responsable['mail']; ?>" name="mail"  class="form-control"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Observaciones</label></div>
                                            <div class="col-12 col-md-9"><textarea name="observaciones"  rows="9"  class="form-control"><?php echo $responsable['observaciones']; ?></textarea></div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="row">
                                               
                                                <input type="hidden" name="kvutza" value="<?php echo $_SESSION['kvutza'] ?>">
                                        
                                                <div class="col-lg-12 text-right">
                                                <?php
                                               
                                                if (isset($_GET['id'])) {
                                                    $accion = 'Guardar'; 
                                                  } else {
                                                    $accion = 'Insertar';
                                                }?>
                                                    <input type="hidden" name="accion" value="<?php echo $accion ?>">
                                                    <input type="submit" class="btn btn-success" value="<?php echo $accion?>"> 
                                                </div>

                                                
                                            </div>
                                                    
                                        </div>
                                           
                                    </form>
                                </div>
                    </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

        


       
    
</body>
    
</html>


<?php
// echo 'aaaa';
include 'bottom.php';
?>