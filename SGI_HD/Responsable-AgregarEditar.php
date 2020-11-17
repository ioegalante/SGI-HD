

<?php
  include('dao.php');
  include('header.php');
  
  
    $janij = obtenerJanijPorID($_GET['j']);

  if (isset($_GET['r'])) {
    $responsable = obtenerRespPorID($_GET['r']);
    
  } else {
    $responsable = array(
    
      "idResponsable"=> "",
      "nombreR" => '',
      "apellidoR" => '',
      "relacionR" => '',
      "telefonoR" => '',
      "mailR" => '',
      "observacionesR" => '',
      "fechaNacR" => ''
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
                            <li><a href="#">Responsable</a></li>
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
                                    <form action="Responsable-Insert.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    
                                     <input type="hidden" id="relacionJS" value="<?php echo $responsable['relacionR'] ?>">
                                        <div class="text-center mb-3"> 
                                            <h1> Responsable de <?php echo $janij['nombre'] .' ' .$janij['apellido'] ?> </h1>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nombre</label></div>
                                            <div class="col-12 col-md-9"><input type="text"  value="<?php echo $responsable['nombreR']; ?>" name="nombre"  class="form-control"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Apellido</label></div>
                                            <div class="col-12 col-md-9"><input type="text" value="<?php echo $responsable['apellidoR']; ?>" name="apellido"  class="form-control"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">DNI</label></div>
                                            <div class="col-12 col-md-9"><input type="text" value="<?php echo $responsable['idResponsable']; ?>" name="idresponsable"  class="form-control"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Fecha de Nacimiento</label></div>
                                            <div class="col-sm-4">
                                                <input type="date" name="fechaNac" step="1" min="1900-01-01" value="<?php echo $responsable['fechaNacR']; ?>">
                                            </div> 
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="select" class=" form-control-label">Relación</label></div>
                                            <div class="col-12 col-md-9">
                                                <select name="relacion" id="relacion" class="form-control">
                                                    <option value="Madre">Madre</option>
                                                    <option value="Padre">Padre</option>
                                                    <option value="Tutor">Tutor</option>
                                                </select>
                                            </div>
                                            </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Teléfono</label></div>
                                            <div class="col-12 col-md-9"><input type="text" value="<?php echo $responsable['telefonoR']; ?>" name="telefono"  class="form-control"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Mail</label></div>
                                            <div class="col-12 col-md-9"><input type="text" value="<?php echo $responsable['mailR']; ?>" name="mail"  class="form-control"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Observaciones</label></div>
                                            <div class="col-12 col-md-9"><textarea name="obs"  rows="9"  class="form-control"><?php echo $responsable['observacionesR']; ?></textarea></div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="row">
                                                                                       
                                                <div class="col-lg-12 text-right">
                                                <input type="hidden" name="dniViejo" value="<?php echo $responsable['idResponsable'] ?>">
                                                <input type="hidden" name="idJanij" value="<?php echo $janij?>">
                                                <?php
                                               
                                                if (isset($_GET['r'])) {
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

        
        <script>
        
        var control = document.getElementById("relacion");
        control.addEventListener("change", function() {
        
        });
        var r = document.getElementById("relacionJS");
        document.getElementById("relacion").value = r;
        
    
    
    
    
    
        </script>
           
       
    
</body>
    
</html>


<?php
// echo 'aaaa';
include 'bottom.php';
?>