<?php require 'inc/cabecera.inc'; ?>
    
    <div class="container-fluid">
        <div class="row"> 
            <div class=" col med-12 text-center">
            <h3>Portal Web</h3> 
            </div>
            
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 caja col-centrar">

                <?php 

                require_once('lib/config.php');
                spl_autoload_register(function($clase){
                    require_once "lib/$clase.php";
                });

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


                    #instanciando una variable de la clase Database. Con esto me permite poder utilizar todas las funcionalidades de las conexiones con la bd
                    $db = new Database(DB_HOST, DB_USER, DB_PASS, DB_NAME);

                    #preprar() y ejecutar() son funciones creadas Database.php
                   $db->preparar("SELECT nombre, apellido, email FROM usuarios ");
                   $db->ejecutar();

                   #con bind_result() se deben crear las mismas variables que se recibiran desde la consulta, en este caso la consulta nos devolvera 3 datos y bind_result() recibira 3 variables ($num, $ape, $em) tener en cuenta que si se agregan mas valores en la consulta se deben crear la misma cantodad de variables en bind_result().
                   $db->prep()->bind_result($nom, $ape, $em);

                   echo "<table class='table table-cell'>
                            <thead>
                                <tr>
                                    <td>Nombre</td>
                                    <td>Apellido</td>
                                    <td>Usuario</td>
                                </tr>
                                <tbody>";

                         while ($db->resultado()) {
                            echo "<tr>
                                    <td>$nom</td>
                                    <td>$ape</td>
                                    <td>$em</td>
                                  </tr>";
                         }

                         echo "</tbody></table>";

                         echo $db->validarDatos('apellido', 'usuarios', 'Carrasco');

                   /* echo "<table class='table table-cell'>
                            <thead>
                                <tr>
                                    <td>id</td>
                                    <td>Nombre</td>
                                    <td>Apellido</td>
                                    <td>email</td>
                                    <td>contrasena</td>
                                    <td>cedula</td>
                                    <td>telefono</td>
                                    <td>direccion</td>
                                    <td>edad</td>
                                    <td>ciudad</td>
                                    <td>departamento</td>
                                    <td>codigo postal</td>
                                </tr>
                            </thead>
                                <tbody>";
                                echo "<tr>";
                                foreach($array as $v){
                                  
                              
                                        echo "<td>$v</td>";
                                
                                   
                                }
                                echo "</tr>";
                            echo " </tbody>
                            </table>";*/

                    //var_dump($array);
                
                ?>
                <!-- <form action="" enctype="multipart/form-data" method="POST" role="form">
                    <legend>Registrarse</legend>
                
                    <div class="form-group">
                        <input name="nombre" type="text" class="form-control" id="" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                        <input name="apellido" type="text" class="form-control" id="" placeholder="Apellido">
                    </div>
                    <div class="form-group">
                        <input name="email" type="email" class="form-control" id="" placeholder="email">
                    </div>
                    <div class="form-group">
                        <input name="contrasena" type="password" class="form-control" id="" placeholder="Contrasena">
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
                </form> -->
                
                
            </div>
        </div>
        
    </div>
    
    <?php require 'inc/footer.inc'; ?>













