let pathme = window.location.pathname;
if(pathme === '/Agenda') {   
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

    //javasxcript para cargar las horas  dependiendo el usuario que seleccionen
    let usuario =document.querySelector('#usuarios');
    usuario.addEventListener('change',(event) =>{
          //obtener el seleccionado
          
           let seleccionado = parseInt(event.target.value);
          //obtenems la fecha
          let fecha = document.getElementById('fecha').value;
          //comprobamos si la fecha existe
          if(fecha) {
             $.ajax({
                url :'/obtenerEvento/'+seleccionado,
                type: 'GET',
                success : function(response) {
                      let horaInicio  =  response.user.tiempo;
                      let partesHora = horaInicio.split(':'); 
                      let minutos = parseInt(partesHora[1]);
                      if(minutos == 29) {
                        document.getElementById('tiempoLabel').innerHTML = '<label for="Fecha" class="block mb-1 mx-10 my-0 text-sm font-medium text-gray-900 text-white">Hora</label> ';
                        document.getElementById('tiempo').innerHTML = `
                             <select id="tiempo" name="tiempo" class="bg-gray-50 border border-gray-300 mx-auto my-0  text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
                                    <option selected>Seleccione la hora</option>
                                    <option id="optsi" value="09:30:00">09:30 AM</option>
                                    <option id="optsi" value="10:00:00">10:00 AM</option>
                                    <option id="optsi" value="10:30:00">10:30 AM</option>
                                    <option id="optsi" value="11:00:00">11:00 AM</option>
                                    <option id="optsi" value="11:30:00">11:30 AM</option>
                                    <option id="optsi" value="12:00:00">12:00 PM</option>
                                    <option id="optsi" value="12:30:00">12:30 PM</option>
                                    <option id="optsi" value="13:00:00">01:00 PM</option>
                                    <option id="optsi" value="13:30:00">01:30 PM</option>
                                    <option id="optsi" value="14:00:00">02:00 PM</option>
                                    <option id="optsi" value="14:30:00">02:30 PM </option>
                                    <option id="optsi" value="15:00:00">03:00 PM</option>
                                    <option id="optsi" value="15:30:00">03:30 PM</option>
                                    <option id="optsi" value="16:00:00">04:00 PM</option>
                                    <option id="optsi" value="16:30:00">04:30 PM</option>
                                    <option id="optsi" value="17:00:00">05:00 PM</option>
                                    <option id="optsi" value="17:30:00">05:30 PM</option>
                                    <option id="optsi" value="18:00:00">06:00 PM</option>
                                    <option id="optsi" value="18:30:00">06:30 PM</option>
                                    <option id="optsi" value="19:00:00">07:00 PM</option>
                                    <option id="optsi" value="19:30:00">07:30 PM</option>
                                    <option id="optsi" value="20:00:00">08:00 PM</option>
                                    <option id="optsi" value="20:30:00">08:30 PM</option>
                             </select>
                         `;
                      } else if(minutos =59) {
                        document.getElementById('label').innerHTML = '<label for="Fecha" class="block mb-1 mx-10 my-0 text-sm font-medium text-gray-900 text-white">Hora</label> ';
                        document.getElementById('hora').innerHTML = `
                        <select id="tiempo" name="tiempo" class="bg-gray-50 border border-gray-300 mx-auto my-0  text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-3/4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" style"width: 75%;margin: 0px auto;">
                                <option selected>Seleccione la hora</option>
                                <option id="optsi" value="10:00:00">10:00 AM</option>
                                <option id="optsi" value="11:00:00">11:00 AM</option>
                                <option id="optsi" value="12:00:00">12:00 PM</option>
                                <option id="optsi" value="13:00:00">01:00 PM</option>
                                <option id="optsi" value="14:00:00">02:00 PM</option>
                                <option id="optsi" value="15:00:00">03:00 PM</option>
                                <option id="optsi" value="16:00:00">04:00 PM</option>
                                <option id="optsi" value="17:00:00">05:00 PM</option>
                                <option id="optsi" value="18:00:00">06:00 PM</option>
                                <option id="optsi" value="19:00:00">07:00 PM</option>
                                <option id="optsi" value="20:00:00">08:00 PM</option>
                            </select>
                        `;
                      }
                }
             })
          }
    });

    //javascript para el tiempo final
    usuario.addEventListener('change',(event) =>{
      //obtener el seleccionado
      
       let seleccionado = parseInt(event.target.value);
      //obtenems la fecha
      let fecha = document.getElementById('fecha').value;
      //comprobamos si la fecha existe
      if(fecha) {
         $.ajax({
            url :'/obtenerEvento/'+seleccionado,
            type: 'GET',
            success : function(response) {
                  let horaInicio  =  response.user.tiempo;
                  let partesHora = horaInicio.split(':'); 
                  let minutos = parseInt(partesHora[1]);
                  if(minutos == 29) {
                    document.getElementById('tiempoFinalLabel').innerHTML = '<label for="Fecha" class="block mb-1 mx-10 my-0 text-sm font-medium text-gray-900 text-white">Hora Final</label> ';
                    document.getElementById('tiempoFinal').innerHTML = `
                         <select id="tiempoFinal" name="tiempoFinal" class="bg-gray-50 border border-gray-300 mx-auto my-0  text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
                                <option selected>Seleccione la hora</option>
                                <option id="optsi" value="09:30:00">09:30 AM</option>
                                <option id="optsi" value="10:00:00">10:00 AM</option>
                                <option id="optsi" value="10:30:00">10:30 AM</option>
                                <option id="optsi" value="11:00:00">11:00 AM</option>
                                <option id="optsi" value="11:30:00">11:30 AM</option>
                                <option id="optsi" value="12:00:00">12:00 PM</option>
                                <option id="optsi" value="12:30:00">12:30 PM</option>
                                <option id="optsi" value="13:00:00">01:00 PM</option>
                                <option id="optsi" value="13:30:00">01:30 PM</option>
                                <option id="optsi" value="14:00:00">02:00 PM</option>
                                <option id="optsi" value="14:30:00">02:30 PM </option>
                                <option id="optsi" value="15:00:00">03:00 PM</option>
                                <option id="optsi" value="15:30:00">03:30 PM</option>
                                <option id="optsi" value="16:00:00">04:00 PM</option>
                                <option id="optsi" value="16:30:00">04:30 PM</option>
                                <option id="optsi" value="17:00:00">05:00 PM</option>
                                <option id="optsi" value="17:30:00">05:30 PM</option>
                                <option id="optsi" value="18:00:00">06:00 PM</option>
                                <option id="optsi" value="18:30:00">06:30 PM</option>
                                <option id="optsi" value="19:00:00">07:00 PM</option>
                                <option id="optsi" value="19:30:00">07:30 PM</option>
                                <option id="optsi" value="20:00:00">08:00 PM</option>
                                <option id="optsi" value="20:30:00">08:30 PM</option>
                         </select>
                     `;
                  } else if(minutos = 59) {
                    document.getElementById('tiempoFinalLabel').innerHTML = '<label for="tiempoFinalLabel" class="block mb-1 mx-10 my-0 text-sm font-medium text-gray-900 text-white">Hora Final</label> ';
                    document.getElementById('tiempoFinal').innerHTML = `
                    <select id="tiempoFinal" name="tiempoFinal" class="bg-gray-50 border border-gray-300 mx-auto my-0  text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-3/4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" style"width: 75%;margin: 0px auto;">
                            <option selected>Seleccione la hora</option>
                            <option id="optsi" value="10:00:00">10:00 AM</option>
                            <option id="optsi" value="11:00:00">11:00 AM</option>
                            <option id="optsi" value="12:00:00">12:00 PM</option>
                            <option id="optsi" value="13:00:00">01:00 PM</option>
                            <option id="optsi" value="14:00:00">02:00 PM</option>
                            <option id="optsi" value="15:00:00">03:00 PM</option>
                            <option id="optsi" value="16:00:00">04:00 PM</option>
                            <option id="optsi" value="17:00:00">05:00 PM</option>
                            <option id="optsi" value="18:00:00">06:00 PM</option>
                            <option id="optsi" value="19:00:00">07:00 PM</option>
                            <option id="optsi" value="20:00:00">08:00 PM</option>
                        </select>
                    `;
                  }
            }
         })
      }
});

    
}