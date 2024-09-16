<div class="py-4 container mx-auto ">
                <form action="{{Route('imagen.store')}}" method="POST"  id="formImage"  enctype='multipart/form-data'>
                  @csrf
                    <label for="uploadFile1"
                    class="flex bg-gray-800 hover:bg-gray-700 text-white text-base px-5 py-3 outline-none rounded w-max ml-4 cursor-pointer font-[sans-serif]">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 mr-2 fill-white inline" viewBox="0 0 32 32">
                      <path
                        d="M23.75 11.044a7.99 7.99 0 0 0-15.5-.009A8 8 0 0 0 9 27h3a1 1 0 0 0 0-2H9a6 6 0 0 1-.035-12 1.038 1.038 0 0 0 1.1-.854 5.991 5.991 0 0 1 11.862 0A1.08 1.08 0 0 0 23 13a6 6 0 0 1 0 12h-3a1 1 0 0 0 0 2h3a8 8 0 0 0 .75-15.956z"
                        data-original="#000000" />
                      <path
                        d="M20.293 19.707a1 1 0 0 0 1.414-1.414l-5-5a1 1 0 0 0-1.414 0l-5 5a1 1 0 0 0 1.414 1.414L15 16.414V29a1 1 0 0 0 2 0V16.414z"
                        data-original="#000000" />
                    </svg>
                    Upload
                    <input type="file" id='uploadFile1' name="image" class="hidden" />
                   
                  </label>
                  <input type=" " class="hidden">
                </form>
               
                <div class="grid grid-cols-1  md:grid-cols-3 gap-4 ml-4 mt-4 content-center">
                            @foreach ($imagenes as  $img)
                                    <div class="w-full relative max-w-sm mx-auto h-auto ">
                                         <form action="{{ Route('imagen.delete', $img->id) }}" method="POST"  id="deleteImagen" >
                                             @csrf
                                            @method('DELETE')
                                                <img src="{{ asset('img/dash/'.$img->imagenes)}}"  id="deleteImg" alt="image" class="w-full max-w-sm mx-auto h-52  relative z-0">
                                                 
                                                  <button type="submit"   class="absolute w-full h-full top-0 left-0 bg-white opacity-0 z-10 transition-opacity duration-300 hover:opacity-50 " >
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-12 ml-36 mt-16">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                                      </svg>  
                                                  </button>
                                               
                                         </form>
                                    </div>
                                 @endforeach
                           </div>
               
             
           </div>
        