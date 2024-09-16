<div id="ventanaModal" class="modal">
    <div class="contenido-modal">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Crear Horas no Trabajadas
                </h3>
                <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white cerrar" >
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5">
                <form method="POST" action="{{ Route('agenda.admin') }}">
                        @csrf
                    <div class="grid grid-cols-2">
                        <div>
                            <label for="user" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fecha</label>
                            <input type="date" name="fecha"  class="w-full" id="fecha">
                        </div> 

                        <div>
                            <label for="user" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Usuario</label>
                                <select id="usuarios" name="usuarios" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected>Seleccione el Usuario</option>
                                    @foreach ($user  as $usr )
                                        <option value="{{$usr->id}}">{{$usr->name}}</option>
                                    @endforeach
                                </select>  
                        </div>  
                        
                    </div>
                      <div class="grid grid-cols-2">
                        <div>
                            <label for="" id="tiempoLabel"></label>
                            <div id="tiempo"></div>
                        </div>  
                        <div class="">
                            <label for="tiempoFinalLabel" id="tiempoFinalLabel"></label>
                            <div id="tiempoFinal"></div>
                        </div>   
                      </div>         
                      <button type="submit" class="text-white mt-4 bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Guardar</button>
                </form>
            </div>
    </div>
 </div>