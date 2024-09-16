

let pathme = window.location.pathname;
if(pathme === '/Users' ) {
    // Ventana modal
      var modal = document.getElementById("ventanaModal");

      // Botón que abre el modal
      var boton = document.getElementById("abrirModal");


      // // Hace referencia al elemento <span> que tiene la X que cierra la ventana
      var span = document.getElementsByClassName("cerrar")[0];

      // // Cuando el usuario hace click en el botón, se abre la ventana
      boton.addEventListener("click",function() {
        modal.style.display = "block";
      });

      // // Si el usuario hace click en la x, la ventana se cierra
      span.addEventListener("click",function() {
        modal.style.display = "none";
      });

      // // Si el usuario hace click fuera de la ventana, se cierra.
      window.addEventListener("click",function(event) {
        if (event.target == modal) {
          modal.style.display = "none";
        }
      });


      //delete users
      let deleteUsers = document.querySelectorAll('form#deleteUsers');
      deleteUsers.forEach((deleteUsers) => {
          deleteUsers.addEventListener('click', (e) => {
              e.preventDefault();
              const swalWithBootstrapButtons = Swal.mixin({
                      customClass: {
                      confirmButton: "btn-success",
                      cancelButton: "btn-danger"
                      },
                      buttonsStyling: false
              });
              swalWithBootstrapButtons.fire({
                      title: "Decea Almacenar la Imagen?",
                      text: "",
                      icon: "warning",
                      showCancelButton: true,
                      confirmButtonText: "Si, Guardar!",
                      cancelButtonText: "No, Cancelar!",
                      reverseButtons: true
              }).then((result) => {
                      if (result.isConfirmed) {
                        deleteUsers.submit();
                      } else if (
                      /* Read more about handling dismissals below */
                      result.dismiss === Swal.DismissReason.cancel
                      ) {
                      swalWithBootstrapButtons.fire({
                      title: "Cancelado",
                      text: "",
                      icon: "error"
                      });
                      }
              });
          });
      });


}
