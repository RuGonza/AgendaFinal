<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('General') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Acualiza tus datos generales') }}
        </p>
    </header>
    <form action="#" method="post" class=" ml-2 mt-6">
            @csrf
            @method('patch')
            <div class="">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload file</label>
                <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">      
            </div>
            <div>
                <x-input-label for="Rol" value="Roles" />
                <select id="Rol" name="Rol" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                      <option value="Administrador">Administrador</option>
                      <option value="Colaborador">Colaborador</option>
                </select>
            </div>
        </div>
        <div class="flex items-center gap-4 mt-2">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>

</section>
