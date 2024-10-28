 <?php if(!$_GET):?>
    <form action="php/calcular.php">
      <div class="container contenido">
        <div class="row" style="overflow: hidden; margin-top: 30px; background-color: #f1f1f1; ">
          <div class="col-md-12">
            <div class="row" style="margin: 0px; padding: 25px;">
              <div class="row" >
                 
                <div class="col-md-6">
                    <!-- FORMULARIO PARA COLOCAR EL VALOR DEL DOLAR -->
                  <form method="GET" action="php/calcular.php?id=<?php echo $resultado2[0]['id']?>">
                    <div class="row" style="width: 100%; text-align: center;">
                      <div class="col-md-8">
                        <button style="font-size: 30px" class="btn btn-secondary" type="submit"><i class="fa fa-dollar"></i> Valor dolar o euro </button>
                      </div>
                       <div class="col-md-4 col-lg-4 col-xl-4 col-sm-4">
                        <input type="hidden" value="1" class="form-control" name="id">
                        <input style="font-size: 32px;text-align: left;" name="valor" id="dolarDia" class="form-control" type="text" placeholder="en Bs.." value="<?php echo $resultado2[0]['valor'] ?>" 
                        >
                      </div>
                    </div>
                  </form>
     
                  <!--<div class="row" style="width: 100%;">
                        <div class="col-md-8">
                        </div>
                      </div> -->

                  <div class="row" style="width: 100%;font-size: 42px; width: 350px; height: 80px;">&nbsp;</div>

                   <!-- 
                   <div class="row">
                       <div class="col-md-6" style="text-align: left;">
                      <a href="listaagotados.php" style="margin:10px ;font-size: 29px; width: 250px; height: 60px;" class="btn btn-secondary btn-sm" type="button"><i class="fa fa-list"></i> Agotados </a>
                     </div>
                     <div class="col-md-6" style="text-align: left;">
                      <button data-toggle="modal" data-target="#modalReportes" style="margin:10px ;font-size: 29px; width: 250px; height: 60px;" class="btn btn-secondary btn-sm" type="button"> <i class="fa fa-list"></i> Reportes</button>
                       <?/* php include 'reportes.php'; */?> 
                     </div>
                    </div> -->
                   
                  <!-- 
                  <form action="buscarfactura.php" method="POST">
                     <div class="row">
                      <div class="col-md-6" style="text-align: left;">
                        <a href="facturas.php" style="font-size: 29px; width: 250px; height: 60px;" class="btn btn-warning" type="button"><i class="fa fa-th-list"></i> Facturar </a>
                      </div>
                       <div class="col-md-4" style="text-align: right; padding-right: 0;">
                        <input type="number" style="font-size: 29px;" placeholder="#nroFac" class="form-control" name="buscarFactura" required>
                      </div>
                       <div class="col-md-2" style="text-align: left; padding-left: 0;">
                        <button style="font-size: 29px;" class="btn btn-info" type="submit"><i class="fa fa-search"></i> </button>
                      </div>
                    </div>
                  </form> -->
                </div>

                <div class="col-md-6 text-right">
                  <!-- RELOG -->
                 <div class="col-md-6 text-right">
                    <form name="form_reloj">
                      <input type="text" id="subir" name="reloj" size="10" style="font-size: 77px;background-color: rgba(0,0,0,0);font-family: fantasy; border: aliceblue;" disabled>
                    </form>
                  </div>

                  <!--   <div class="col-md-12 col-lg-12 col-xl-12 col-sm-12"style="text-align: center;">
                      <div style="max-height: 250px ;  overflow-y: scroll;">
                           <a class="twitter-timeline" href="https://twitter.com/MonitorDolarOf?ref_src=twsrc%5Etfw">Tweets by MonitorDolarOf</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                        </div> 
                    </div> -->
                </div>
                <div class="row  "style="margin-top: 20px; width: 100%;">
                  <div class="col-md-4 col-lg-4 col-xl-4 col-sm-4">
                    <button onclick="crearTabla2()" style="font-size: 42px; width: 100%; height: 80px;" class="btn btn-success" type="button"><i class="fa fa-cart-plus"></i> Añadir </button>
                  </div>
                  <div class="col-md-4 col-lg-4 col-xl-4 col-sm-4">
                    <button   onclick="superFind()" style="font-size: 37px; width: 100%; height: 80px;" class="btn btn-primary" type="button"><i class="fa fa-search"></i> Buscar: F3</button>
                  </div>
                  <div class="col-md-4 col-lg-4 col-xl-4 col-sm-4">
                    <a href="index.php" style="font-size: 37px; width: 100%; height: 80px;" class="btn btn-info" type="button"><i class="fa fa-refresh"></i> Actualizar </a>
                  </div>  
                    
                  <div class="col-md-4 col-lg-4 col-xl-4 col-sm-4" style=" text-align: center;">
                  </div>  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
<div style="position:fixed; right:20px; bottom:20px;">
  <a href="#" class="btn btn-warning" onclick="subirPantalla()">
    <i class="fa fa-arrow-up"></i>
  </a>
</div>
  <?php endif ?>

  <?php if($_GET):?>
    <form method="GET" action="php/editar.php">
      <div class="container" style="overflow: hidden; margin-top: 30px; background-color: #f1f1f1; ">
        <div class="row" style="margin: 0px; padding: 25px;">
              <div class="row text-center">
                <div class="col-md-12" style="font-size: 60px;">
                  <b><?php echo $resultado_unico['nombre'] ?></b>
                </div>
              </div>
          <div class="row" style="margin-top: 20px">
            <div class="row" style="width: 100%; margin-bottom: 10px">
              <div class="col-md-2">
                <h3>Nombre</h3>
              </div>
              <div class="col-md-10">
                 <input style="font-size: 32px;text-align: left;" name="nombre" class="form-control" type="text" value="<?php echo $resultado_unico['nombre'] ?>"></h3>
              </div>
            </div>
            <div class="col-md-6">
              <div class="row" style="width: 100%;">
                <div class="col-md-3">
                  <h3>Costo$</h3>
                </div>
                <div class="col-md-9">
                   <input style="font-size: 32px;text-align: left;" class="form-control d-none" type="text" name="id" value="<?php echo $resultado_unico['id'] ?>">
                   <input style="font-size: 32px;text-align: left;" name="costodolar" class="form-control" type="text" value="<?php echo $resultado_unico['costodolar'] ?>"></h3>
                </div>
              </div>
              <div class="row" style="width: 100%;">
                <div class="col-md-3">
                  <h3>Precio</h3>
                </div>
                <div class="col-md-9">
                   <input style="font-size: 32px;text-align: left;" name="precio" class="form-control" type="text" value="<?php echo $resultado_unico['precio'] ?>"></h3>
                </div>
              </div>
              <div class="row" style="width: 100%;">
                <div class="col-md-3">
                  <h3>Estado:</h3>
                </div>
                <div class="col-md-9">
                  <?php if($resultado_unico['estado']==1): ?>
                   <input style="font-size: 32px;text-align: left; color: green;" name="precio" class="form-control" type="text" value="EXISTENTE" disabled>
                  <?php endif ?>
                   <?php if($resultado_unico['estado']==0): ?>
                   <input style="font-size: 32px;text-align: left; color: red;" name="precio" class="form-control" type="text" value="AGOTADO" disabled>
                  <?php endif ?>
                </div>
               
              </div>
            </div>
            <!-- Columna 2 -->
            <div class="col-md-6">
                 <div class="row" style="width: 100%;">
                    <div class="col-md-3">
                      <h3>Gan.%</h3>
                    </div>
                    <?php $ganUnica = ($resultado_unico['ganancia']  * (-100)) + 100;?>
                    <div class="col-md-3">
                       <input style="font-size: 32px;text-align: left;" name="ganancia" class="form-control" placeholder="0-99" type="text" value="<?php echo $ganUnica ?>"></h3>
                    </div>
                  </div>
                  <div class="row" style="width: 100%;">
                    <div class="col-md-3">
                      <h3>Almacen</h3>
                    </div>
                    <div class="col-md-9">
                     <select class="form-control form-control-lg" name="almacen">
                      <option value="<?php echo $resultado_unico['almacen']; ?>"><b>Actual:<?php echo $resultado_unico['almacen']; ?></b></option>
                      <?php foreach($resultadoAlmacen as $datoAlmacen):  ?>
                        <option value="<?php echo $datoAlmacen['nombre']; ?>"><?php echo $datoAlmacen['nombre']; ?></option>
                      <?php endforeach ?>  
                      </select>
                    </div>
                  </div>
                   <div class="col-md-12" >
               <?php if($resultado_unico['estado']==1): ?>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <input name="estado" value="0" type="checkbox" aria-label="Checkbox for following text input">
                        <input name="aux" value="1" type="hidden">
                      </div>
                    </div>
                    <input style="font-size: 32px; font-family: Arial Black; color: red;" type="text" class="form-control" aria-label="Text input with checkbox" value="Deshabilitar?" disabled>
                  </div>
               <?php endif ?>
                <?php if($resultado_unico['estado']==0): ?>
                  <div class="input-group mb-12">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <input name="estado" value="1" type="checkbox" aria-label="Checkbox for following text input">
                        <input name="aux" value="0" type="hidden">
                      </div>
                    </div>
                    <input style="font-size: 32px; font-family: Arial Black; color: green;" type="text" class="form-control" aria-label="Text input with checkbox" value="Habilitar?" disabled>
                  </div>
               <?php endif ?>
                </div>
            </div>

            <div class="row  "style="margin-top: 20px; width: 100%;">
              <div class="col-md-6"style="text-align: center;">
                <button style="font-size: 42px; width: 350px; height: 80px;" class="btn btn-primary" type="btn"><i class="fa fa-save"></i> Guardar </button>
              </div>
              <div class="col-md-6"style="text-align: center;">
                <a href="index.php" style="font-size: 42px; width: 350px; height: 80px;" class="btn btn-danger" type="button"><i class="fa fa-times"></i>Regresar</a>
              </div>
            </div>
          </div>
            
        </div>
      </div>
    </form>
  <?php endif ?>