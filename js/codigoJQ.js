
 var locarArr = new Array(), locarArr2;

 $(document).ready(function() {
  $(document).on('click', '', function() {
    var button_id = $(this).attr("id");
    var button_id2 = $(this).attr("value");

  });
  });

// function crearTabla2() {
//   $.confirm({
//     title: 'Añadir producto',
//     content: 
//       '<form method="POST">' +
//       '<div class="container" style="overflow: hidden; margin-top: 30px; background-color: #f1f1f1;">' +
//       '<div class="row">' +
//       '<div class="col-md-12">' +
//       '<h3>Nombre</h3>' +
//       '<input name="nombre" class="form-control" type="text" style="font-size: 32px;" required>' +
//       '<h3>Tasa $/€ factura (Bs)</h3>' +
//       '<input name="costodolar" class="form-control" type="text" style="font-size: 32px;" required>' +
//       '<h3>Precio del producto (Bs)</h3>' +
//       '<input name="precio" class="form-control" type="text" style="font-size: 32px;" required>' +
//       '</div>' +
//       '<div class="col-md-12">' +
//       '<h3>Ganancia</h3>' +
//       '<input name="ganancia" class="form-control" type="text" style="font-size: 32px;" required>' +
//       '<h3>Almacén</h3>' +
//       '<input name="almacen" class="form-control" type="text" style="font-size: 32px;" value="SIN ASIGNAR" disabled>' +
//       '<input name="almacen" value="SIN ASIGNAR" type="hidden" required>' +
//       '</div>' +
//       '<div class="row" style="margin-top: 20px; width: 100%">' +
//       '<div class="col-md-12" style="text-align: center">' +
//       '<button id="btnAgregar" class="btn btn-primary" style="font-size: 42px; width: 350px; height: 80px; display:none;">Agregar</button>' +
//       '</div>' +
//       '<div class="col-md-12" style="text-align: center">' +
//       '' +
//       '</div>' +
//       '</div>' +
//       '</div>' +
//       '</div>' +
//       '</form>',
//     buttons: {
//       Agregar: {
//         text: '',
//         btnClass: 'btn-primary',
//         action: function() {$("#btnAgregar").trigger("click");
//         }
//       }, cerrar: {
//         text: '',
//         btnClass: 'btn-secondary',
//         action: function() {

//         }
//       }
//     }
//   });
// }

// $(document).ready(function() {
//   $('#añadirProductoModal').on('submit', 'form', function(event) {
//     event.preventDefault();
//     // Aquí puedes agregar la lógica para manejar el formulario
//     // Puedes utilizar AJAX para enviar los datos al servidor
//   });
// });

function subirPantalla() {
   console.log("Función ejecutada");
  window.scrollTo(0, 0);
}

 function superFind() { 
  alert('Presiona la tecla F3')
    } 

   function modalEditar(){
              $.confirm({
              title: 'Editar',
              content: '' +
              '<form action="" class="formName">' +
              '<div class="form-group">' +
              '<label  style="font-size: 20px; text-align: center;"> Precio $</label>' +
              '<input type="text" id="id1" class="Codigo" style="font-size: 30px" placeholder="$$.." class="Codigo form-control" required />' +
              '<label  style="font-size: 20px; text-align: center;"> Nombre Nuevo</label>' +
              '<input type="text" id="id2" class="Nombre" style="font-size: 30px" placeholder="Nombre.." class="Nombre form-control" required />' +
              '<label  style="font-size: 20px; text-align: center;"> Precio Nuevo</label>' +
              '<input type="text" id="id3" class="Precio" style="font-size: 30px" placeholder="99,99Bs.. " class="precio form-control" required />' +
              '</div>' +
              '</form>',
              buttons: {
                  formSubmit: {
                      text: 'Guardar',
                      btnClass: 'btn-blue',
                      action: function () {
                          var codigo = this.$content.find('.Codigo').val();
                          var nombre = this.$content.find('.Nombre').val();
                          var precio = this.$content.find('.Precio').val();
                          sessionStorage.setItem('codigo', codigo);
                          if(!precio){
                              $.alert('Introduce un Precio');
                              return false;
                          }

                         var db = dataBase.result;
                          var objectStore = db.transaction(["producto"], "readwrite").objectStore("producto");
                          var request = objectStore.get(verdadero);

                          request.onerror = function(event) {

                          };
                          request.onsuccess = function(event) {
                            var codigo = sessionStorage.getItem('codigo');
                            var data = request.result; 

                            var precioReal = parseFloat(precio);
                            var codigoReal = codigo.toString();
                            var codigo = codigoReal;

                            data.codigo = parseInt(codigo);
                            data.nombre = nombre;
                            data.precio = precio;
                            var requestUpdate = objectStore.put(data);

                             requestUpdate.onerror = function(event) {
                               // Do something with the error
                             };
                             requestUpdate.onsuccess = function(event) {
                               // Success - the data is updated!
                                refreshTable();

                             };

                           };

                          // $.alert('Your name is ' + name);
                      }
                  },
                  cancelar: function () {
                      //close
                  },
              },
          });
   }
   
