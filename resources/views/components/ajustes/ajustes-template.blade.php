<div class="container w-3/4 mx-auto">
        <form action="{{ Route('Ajustes.store') }}" method="POST" id="setings"  enctype='multipart/form-data'>
            @csrf   
             <div class="py-2">
                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Texto descriptivo</label>
                    <textarea id="message" name="mensaje" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Digite tu texto descriptivo.."></textarea>
             </div>
             <div class="grid grid-cols-2">
                        <div class="">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="small_size">Logotipo</label>
                            <input class="block w-full mb-5 text-xs text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="logotipo" name="logotipo" type="file">
                        </div>
                        <div class="">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="small_size">Icono</label>
                            <input class="block w-full mb-5 text-xs text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="icon" type="file">
                        </div>
                        <div>
                            <img src="" class="w-2/4 mx-auto" alt="Logotipo">
                        </div>
                        <div>
                            <img src="" class="w-2/4 mx-auto" alt="Icon">
                        </div>
             </div>
             <div class="py-2 grid grid-cols-2">
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="small_size">Template - Plantilla</label>
                    <select id="plantilla" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>Seleccione la plantilla</option>
                            <option value="1">Predeterminada</option>
                            <option value="2" >Plantilla 1</option>
                        </select>
                </div>
             </div>
             <button type="submit" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Guardar</button>
        </form>
</div>
