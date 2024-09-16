let pathme = window.location.pathname;
if(pathme === "/dashboard") {

                           //input de archivo
                           let fileInput = document.querySelector('#uploadFile1');

                           fileInput.addEventListener('change', (e) => {
                                   e.preventDefault();
                                   if(fileInput.files.length > 0) {
                                           let file = fileInput.files[0];
                                           let typeFile = file.type;
                                           let allowtype = ['image/jpeg','image/png'];
          
                                           if(allowtype.includes(typeFile)) {
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
                                                                   document.getElementById('formImage').submit();
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
                                           }else {
                                           alert("Archivo no valido");
                                           }
                                   } else {
                                           alert("No se ha seleccionado ningún archivo.");
                                   }
                           });
          
          
          //javascript para eliminar la imagane agregada
          let deleteImage = document.querySelectorAll('form#deleteImagen');
          // console.log(deleteImage[1].action);
          deleteImage.forEach((deleteImage) => {
                  deleteImage.addEventListener('click',function(e) {
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
                                        deleteImage.submit();
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

                /** codigo para mostrar y ocultar navegacion  */
                let navegacion = document.querySelector('.nav-buttom');


                 navegacion.addEventListener('click', function() {
                 let aside = document.querySelector('#aside');
                 if(aside.classList.contains('block')) {
                         aside.classList.replace('block', 'hidden');
                 } else if (aside.classList.contains('hidden')) {
                         aside.classList.replace('hidden','block');
                 }
                 });

                let dropdownMenuButton2 = document.querySelector('#dropdownMenuButton2');

                dropdownMenuButton2.addEventListener('click',function() {
                        let dropdown = document.querySelector('#dropdown');
                        if(dropdown.classList.contains('hidden')) {
                                dropdown.classList.replace('hidden','block');
                        }else {
                                dropdown.classList.replace('block', 'hidden');
                        }
                });

     

