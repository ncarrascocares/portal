<?php require 'inc/cabecera.inc'; ?>
    
    <div class="container-fluid">
        <div class="row"> 
            <div class=" col med-12 text-center">
            <h3>Portal Web</h3> 
            </div>
            
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 caja col-centrar">
              
                
                <form action="admin.php" method="POST" role="form">
                    <legend>Logeate</legend>
                
                    <div class="form-group">
                        <input type="text" class="form-control" id="" placeholder="Ingresa tu usuario">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="" placeholder="Ingresa tu contraseña">
                    </div>
                
                    <button type="submit" class="btn btn-primary">Ingresar</button>
                    <a class="pull-right" href="registrarse.php">Registrar</a>
                </form>
                
                
            </div>
        </div>
        
    </div>
    
    <?php require 'inc/footer.inc'; ?>













