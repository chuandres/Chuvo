 <table  id="mytable" class="table table-bordered table-hover ">
      <tr>
        <th  style="font-size: 25px; width: 11%" >Operacion</th>
        <th style="width: 5%;">$</th>
        <th style="width: 5%">Bs.P</th>
        <th style="width: 57%" id="ncol33">Nombre</th>
        <th style="width: 5%">V.$</th>
        <th style="width: 4%">%.$</th>
        <th style="width: 4%">Dolar</th>
        <th  style="font-size: 30px; color: green; text-align: center; width: 9%"><b>Total Bs</b></th>
      </tr>
      <?php 
      foreach($resultado as $dato): 
      $dolarDia = $resultado2[0]['valor'];
      $gananciaMia = $dato['ganancia'];
      $dolarProducto = $dato['costodolar'];
      $precioProducto = $dato['precio'];
      $nombreProducto = $dato['nombre'];

      $diferenciaBs = ((($dolarDia-$dolarProducto)*100/$dolarProducto)*($precioProducto/100));
      
      $diferenciaUsd = (($precioProducto / $dolarDia)+($diferenciaBs/$dolarDia));

      $ventaEnUsd = ($diferenciaUsd / $gananciaMia);

      $ventaEnBs = ($ventaEnUsd * $dolarDia);

      $porcentajeDif = ($gananciaMia * (-100)) + 100;

        ?>
  
      <tr>
        <th>
        <?php if($dato['estado']): ?>
          <a href="php/cambiarestado.php?id=<?php echo $dato['id']?>T<?php echo $dato['estado']?>" 
             value="<?php echo $dato['estado']?>" 
             name="estado" 
             class="btn btn-danger btn-sm" 
             title="Inhabilitar Producto">
            <i class="fa fa-power-off"></i>
          </a>
        <?php endif ?>

        <?php if(!$dato['estado']): ?>
          <a href="php/cambiarestado.php?id=<?php echo $dato['id']?>T<?php echo $dato['estado']?>" 
             value="<?php echo $dato['estado']?>" 
             name="estado" 
             class="btn btn-success btn-sm" 
             title="Habilitar Producto">
            <i class="fa fa-power-off"></i>
          </a>
        <?php endif ?>

        <button 
          data-toggle="modal" 
          data-target="#exampleModal<?php echo $dato['id'] ?>" 
          title="Eliminar Producto" 
          class="btn btn-danger btn-sm">
          <i class="fa fa-trash"></i>
        </button>

        <button 
          data-toggle="modal" 
          data-target="#editarModal<?php echo $dato['id'] ?>" 
          title="Editar Producto" 
          type="button" 
          class="btn btn-info btn-sm">
          <b><i class="fa fa-edit "></i></b>
        </button>
          <!-- <a href="index.php"  class="btn btn-info btn-sm"title="Actualizar" type="button"><i class="fa fa-refresh"></i></a> -->
        </th>

        <?php if(!$dato['estado']): ?>
        <th style="background-color: #dc3545;">---</th>
        <th style="background-color: #dc3545;">---</th>
        <th style="font-size: 30px; font-family: Arial Black; background-color: #dc3545;"><b><?php echo $dato['nombre']?></b></th>
        <th style="background-color: #dc3545;">---</th>
        <th style="background-color: #dc3545;">---</th>
        <th style="font-size: 30px; color: black; background-color: #dc3545;">---</th>
        <th style="font-size: 30px; color: black; text-align: right; background-color: #dc3545;">AGOTADO</th>
        <?php endif ?>

        <?php if($dato['estado']): ?>
        <th><?php echo $dato['costodolar']?></th>
        <th><?php echo $dato['precio']?></th>
        <th style="font-size: 30px; font-family: Arial Black;"><b><?php echo $dato['nombre']?></b></th>
        <th style="font-size: 20px; color: black; text-align: center;">+<?php echo number_format((float)$porcentajeDif, 0, '.', ','); ?>%</th>
        <th><?php echo number_format((float)$diferenciaUsd, 2, '.', ',');  ?></th>
        <th style="font-size: 30px; color: green;">$<?php echo number_format((float)$ventaEnUsd , 2, '.', ',');?></th>
        <th style="font-size: 30px; color: green; text-align: right;"><?php echo number_format((float)$ventaEnBs , 2, '.', ','); ?></th>
        <?php endif ?>
      </tr>

          <!-- Modal Eliminar-->
          <div class="modal fade" id="exampleModal<?php echo $dato['id'] ?>"role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">¿Esta seguro de eliminar?</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  Confirme
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                  <a href="php/eliminar.php?id=<?php echo $dato['id'] ?>" type="button" class="btn btn-primary" name="remove"  value="<?php echo $dato['id']?>" id="<?php echo $dato['id']?>">Aceptar</a>
                </div>
              </div>
            </div>
          </div>
  
        <form action="php/editar.php?id=<?php echo $dato['id'] ?>" method="GET">
          <!-- Modal Editar-->
          <div class="modal fade" id="editarModal<?php echo $dato['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Editar Producto</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                   <div class="row" style="margin: 0px; padding: 25px;">
              <div class="row text-center">
                <div class="col-md-12" style="font-size: 30px;">
                  <b><?php echo $dato['nombre'] ?></b>
                </div>
              </div>
              <div class="row" style="margin-top: 20px">
                <div class="row" style="width: 100%; margin-bottom: 10px">
                  <div class="col-md-12">
                     <input style="font-size: 32px;text-align: left;" placeholder="Nombre" name="nombre" class="form-control" type="text" value="<?php echo $dato['nombre'] ?>"></h3>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="row" style="width: 100%;">
                    <div class="col-md-12">
                       <input style="font-size: 32px;text-align: left;" class="form-control d-none" type="text" name="id" value="<?php echo $dato['id'] ?>">
                       <input placeholder="Costo$" style="font-size: 32px;text-align: left;" name="costodolar" class="form-control" type="text" value="<?php echo $dato['costodolar'] ?>"></h3>
                    </div>
                  </div>
                  <div class="row" style="width: 100%;">
                    <div class="col-md-12">
                       <input style="font-size: 32px;text-align: left;" name="precio" class="form-control" placeholder="Precio" type="text" value="<?php echo $dato['precio'] ?>"></h3>
                    </div>
                  </div>
                  <div class="row" style="width: 100%;">
                    <?php $ganUnica = ($dato['ganancia']  * (-100)) + 100;?>
                    <div class="col-md-12">
                       <input style="font-size: 32px;text-align: left;" name="ganancia" class="form-control" placeholder="Gan%:0-99" type="text" value="<?php echo $ganUnica ?>"></h3>
                    </div>
                  </div>
                  <div class="row" style="width: 100%;">
                    <div class="col-md-12">
                     <select class="form-control form-control-lg" name="almacen">
                      <option value="<?php echo $dato['almacen']; ?>"><b>Almacen: <?php echo $dato['almacen']; ?></b></option>
                      <?php foreach($resultadoAlmacen as $datoAlmacen):  ?>
                        <option value="<?php echo $datoAlmacen['nombre']; ?>"><?php echo $datoAlmacen['nombre']; ?></option>
                      <?php endforeach ?>  
                      </select>
                    </div>
                  </div>
                  <div class="row" style="width: 100%;">
                    <div class="col-md-12">
                      <?php if($dato['estado']==1): ?>
                       <input style="font-size: 32px;text-align: left; color: green;" name="precio" class="form-control" type="text" value="EXISTENTE" disabled>
                      <?php endif ?>
                       <?php if($dato['estado']==0): ?>
                       <input style="font-size: 32px;text-align: left; color: red;" name="precio" class="form-control" type="text" value="AGOTADO" disabled>
                      <?php endif ?>
                    </div>
                  </div>
                  <div class="row" style="width: 100%">
                    <div class="col-md-12" >
                       <?php if($dato['estado']==1): ?>
                          <div class="input-group mb-12">
                            <div class="input-group-prepend">
                              <div class="input-group-text">
                                <input name="estado" value="0" type="checkbox" aria-label="Checkbox for following text input">
                                <input name="aux" value="1" type="hidden">
                              </div>
                            </div>
                            <input style="font-size: 32px; font-family: Arial Black; color: red;" type="text" class="form-control" aria-label="Text input with checkbox" value="Deshabilitar?" disabled>
                          </div>
                       <?php endif ?>
                        <?php if($dato['estado']==0): ?>
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
                </div>
              </div>
            </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                  <button  type="submit" class="btn btn-primary">Guardar</button>
                </div>
              </div>
            </div>
          </div>
        </form>

    <?php endforeach?>
    </table>


