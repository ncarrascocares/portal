<?php require 'inc/cabecera.inc'; ?>
    
    <div class="container-fluid">
        <div class="row"> 
            <div class=" col med-12 text-center">
            <h3>Portal Web</h3> 
            </div>
            
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 caja col-centrar">

                <?php 

                    if ($_POST) {

                        //Convirtiendo array en variables
                        extract($_POST, EXTR_OVERWRITE);

                        //condicional para crear carpeta en caso de no existir
                        if (!file_exists("fotos")) {
                            mkdir("fotos", 0777);
                        }

                        $nombre = strtolower($nombre);

                        if(validarFoto($nombre)){
                            echo "<img src='$rutaSubida' alt=''>";
                        }
                    
                    }
                
                ?>
                <form action="" enctype="multipart/form-data" method="POST" role="form">
                    <legend>Registrarse</legend>
                
                    <div class="form-group">
                        <input name="usuario" type="text" class="form-control" id="" placeholder="Usuario">
                    </div>
                    <div class="form-group">
                        <input name="contrasena" type="password" class="form-control" id="" placeholder="Contraseña">
                    </div>
                    <div class="form-group">
                        <input name="nombre" type="text" class="form-control" id="" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                        <input name="apellido" type="text" class="form-control" id="" placeholder="Apellido">
                    </div>
                    <div class="form-group">
                        <input name="cedula" type="text" class="form-control" id="" placeholder="cedula">
                    </div>
                    <div class="form-group">
                        <input name="telefono" type="text" class="form-control" id="" placeholder="Telefono">
                    </div>
                    <div class="form-group">
                        <input name="direccion" type="text" class="form-control" id="" placeholder="Dirección">
                    </div>
                    <div class="form-group">
                        <input name="edad" type="text" class="form-control" id="" placeholder="Edad">
                    </div>
                    <div class="form-group">
                        <input name="ciudad" type="text" class="form-control" id="" placeholder="Ciudad">
                    </div>
                    <div class="form-group">
                        <input name="departamento" type="text" class="form-control" id="" placeholder="Departamento">
                    </div>
                    <div class="form-group">
                        <input name="codigopostak" type="text" class="form-control" id="" placeholder="Codigo postal">
                    </div>
                    <div class="form-group">
                        <label for="">Selecciona tu foto de perfil</label>
                        <input name="foto" type="file" class="form-control" id="">
                    </div>
                    <button type="submit" class="btn btn-primary">Registrarse</button>
                    <a class="pull-right" href="index.php">Ya tengo cuenta!</a>
                </form>
                
                
            </div>
        </div>
        
    </div>
    
    <?php require 'inc/footer.inc'; ?>













