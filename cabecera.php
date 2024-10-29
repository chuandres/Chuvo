  <div class="bg-info text-white" style="padding: 30px; text-align:left; ">
      <div class="row" style="height: 60px;">
        <div class="col-md-7">
          <div class="btn bg-light" style="
          margin: -30px;
          padding: 15px;
          border-radius: 4em 1em 1em 0em;
          background-image: linear-gradient(
          to bottom,
          #ffffff,
          #51d7f9
        );
          ">
            <h1 style="color: black;"><i  class="fa fa-shopping-cart"></i> Inversiones Guaraguao center C.A</h1> 
          <p style="margin: 0;color: black; text-align: left;"><b>Versión 2.0</b></p>
          </div> 
        </div>
       <!-- Contenedor para alinear elementos -->
       <div class="col-md-5">
          <div class="row d-flex justify-content-end" style="margin: 0; padding: 0;">
            
            <!-- Fecha de cabecera -->
            <div class="col-md-6" style="text-align: left; margin: 0; padding: 0; color: black;">
              <p id="fecha" style="font-size: 26px;"></p>
            </div>
            
            <!-- Formulario para hacer el backup -->
            <div class="col-md-3" style="text-align: right; margin: 0; padding: 0;">
              <form action="php/backup.php" method="post">
                <button type="submit" name="backup" class="btn btn-primary">Hacer Respaldo</button>
              </form>
            </div>
            
            <!-- Botón de regalo -->
            <div class="col-md-3" style="text-align: right; font-size: 70px; margin: 0; padding: 0;">
              <a href="#" data-toggle="modal" data-target="#modalAgradecimiento" style="background-color: transparent;color: black;">
                <i type="button" id="abrir-sidebar" class="fa fa-gift"></i>
              </a>
            </div>
            
          </div>
        </div>  

          <!-- Botón para abrir el sidebar -->
           <!-- <a href="#" style="background-color: transparent;color: black;"><i type="button" id="abrir-sidebar" class=" fa fa-list"></i></a>  -->

            <script>
              setInterval(() => {
                document.getElementById('abrir-sidebar').click();
              }, 3600000);
            </script>

            <!-- Modal -->
            <div class="modal fade" id="modalAgradecimiento" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agradecimiento</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body" style="color: black; text-align: center;">
                    <!-- Fuente: Open Sans -->
                    <link href="(link unavailable)" rel="stylesheet">

                    <!-- Estilo -->
                    <style>
                      .contenedor {
                        text-align: center;
                        padding: 0px;
                        background-color: #f7f7f7;
                      }
                      
                      .titulo {
                        font-family: 'Open Sans', sans-serif;
                        font-weight: 600;
                        font-size: 48px;
                        color: #333;
                        margin-bottom: 20px;
                      }
                      
                      .imagen {
                        width: 50%;
                        height: 500px;
                        object-fit: cover;
                        border-radius: 10px;
                        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
                      }
                      
                      .descripcion {
                        font-family: 'Open Sans', sans-serif;
                        font-size: 30px;
                        color: #666;
                        margin-top: 20px;
                      }
                    </style>

                    <div class="contenedor">
                      <h1 class="titulo">Muchas gracias por usar mi sistema</h1>
                      <img src="fonts/padre.png" alt="Regalo" class="imagen">
                      <p class="descripcion">Fué dedicado inicialmente para mi padre, lo usó durante 2 años y ahora está libre para el mundo.</p>
                    </div>
                    <img src="fonts/regalo.gif" alt="Regalo" style="width: 300px; height: 300px; margin-top: 0;">
                    <p style="font-size: 30px;">El sistema es totalmente gratuito, pero si deseas donar algo puedes hacerlo a estas direcciónes:</p>

                    <!-- Numeros de cuenta -->
                    <div class="container">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="card">
                          <div class="card-header">
                             <img src="fonts/bcodevenezuela.jpg" alt="Banco de venezuela (VES)" class="imagen" style="width: 100%; height: 120px;">
                          </div>
                          <div class="card-body">
                            <p class="card-text">Número de cuenta: 01020671540000123039</p>
                            <p class="card-text">Cedula: V 26887964</p>
                            <p class="card-text">Cuenta Corriente: Jesús Andrés Millán Narváez</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <div class="row mt-3">
                      <div class="col-md-12">
                        <div class="card">
                          <div class="card-header">
                             <img src="fonts/binance.jpg" alt="Binance Pay" class="imagen" style="width: 100%; height: 120px;">
                          </div>
                          <div class="card-body">
                            <p class="card-text">ID de cuenta: 395 985 73</p>
                            <p class="card-text">Nombre de cuenta: Chuvo</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <div class="row mt-3">
                      <div class="col-md-12">
                        <div class="card">
                          <div class="card-header">
                             <img src="fonts/paypal.jpg" alt="Paypal" class="imagen" style="width: 100%; height: 120px;">
                          </div>
                          <div class="card-body">
                            <p class="card-text">Correo electrónico: chuandres11@gmail.com</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <style>
                    .card {
                      border: none;
                      border-radius: 10px;
                      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                    }

                    .card-header {
                      background-color: #f7f7f7;
                      padding: 10px;
                      border-bottom: none;
                    }

                    .card-body {
                      padding: 20px;
                    }

                    .card-text {
                      font-weight: bold;
                      font-size: 18px;
                    }

                    .fa {
                      margin-right: 10px;
                    }  

                  </style>
                  </div>
                </div>
              </div>
            </div>
            <style>
              .modal-backdrop.show {
                opacity: 0.5;
                background-color: #000;
              }
            </style>
            <!--  -->
        </div>
      </div>
    </div> 