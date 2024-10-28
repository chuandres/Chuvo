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
          <p style="margin: 0;color: black; text-align: left;"><b>J-40431566-7</b></p>
          </div> 
        </div>
        <!-- Fecha de cabecera -->
        <div class="col-md-4" style=" text-align: bottom; margin: 0; padding: 0; color: black;">
            <p id="fecha" style="font-size: 26px;"></p>
        </div>
        <div class="col-md-1" style="text-align: right; font-size: 70px">
          <!-- Botón para abrir el sidebar -->
           <!-- <a href="#" style="background-color: transparent;color: black;"><i type="button" id="abrir-sidebar" class=" fa fa-list"></i></a>  -->
            <!-- Sidebar -->
            <div id="sidebar" class="sidebar">
              <h2>Menú</h2>
              <button id="boton-sidebar">Botón del Sidebar</button>
            </div>
            <div class="fondo-oscuro"></div>

            <style>
                           .sidebar {
                position: fixed;
                top: 0;
                right: -250px; 
                width: 250px;
                height: 100vh;
                background-color: #f1f1f1;
                transition: right 0.5s;
                padding: 20px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
                z-index: 1000; 
              }

              .sidebar.active {
                right: 0; 
              }

              .fondo-oscuro {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100vh;
                background-color: rgba(0, 0, 0, 0.5); 
                z-index: 999;
                display: none;
              }

              .contenido {
                transition: opacity 0.5s;
              }

              .fondo-oscuro.active + .contenido {
                opacity: 0.5;
              }

              .fondo-oscuro.active {
                display: block;
              }

              .fondo-oscuro.active ~ * {
                opacity: 0.5;
              }
            </style>
        </div>
      </div>
    </div> 