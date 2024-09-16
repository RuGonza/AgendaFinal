<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="">
                <div class="py-4 text-gray-900">
                        <button id="abrirModal" class="float-right">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                        </button>
                        <x-modal.modal-cortes/>
                     </div>
                <div class="py-4">
                     <div id="calendar"></div>
                </div>
            </div>
           
        </div>
    </div>
</x-app-layout>
