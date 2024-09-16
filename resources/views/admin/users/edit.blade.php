<x-app-layout>
    <div class="">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="">
                <div class="p-6 text-gray-900">
                    <h1 class="text-center text-2xl font-bold">Editar Usuario</h1>
                </div>
                <form action="{{ Route('Users.update', $userAll->id) }}" method="POST" class="w-2/4 mx-auto">
                    @csrf
                    @method('PATCH')
                        <div class="grid grid-cols-2">
                                <div>
                                    <x-input-label for="name" :value="__('Name')" />
                                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name',$userAll->name)" required autofocus autocomplete="name" />
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </div>
                            
                                   <!-- Email Address -->
                                <div class="">
                                    <x-input-label for="email" :value="__('Email')" />
                                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email',$userAll->email)" required autocomplete="username" />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>
                        </div>
                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Imagen Perfil</label>
                            <input type="file" name="imagen" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"   >
                            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG</p>
                                <img src="{{ asset('img/perfil/'.$userAll->icono) }}" class="w-10 h-10 rounded-sm" alt="logotipo">
                        </div>
                    <div class="py-2">
                         <label for="rol" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Rol</label>
                        <select id="rol" name="rol" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>Seleccione el rol</option>
                            <option value="Administrador" {{ $userAll->roles->contains('name', 'Administrador') ? 'selected' : '' }} >Administrador</option>
                            <option value="colaborador" {{ $userAll->roles->contains('name', 'Colaborador') ? 'selected' : '' }}>Colaborador</option>
                        </select>
                    </div>
                    {{$userAll->tiempo}}
                    <div class="py-2">
                    <label for="Tiempo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Selecione el Tiempo</label>
                            <select id="tiempo" name="tiempo" size="2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="00:29" {{ $userAll->tiempo == '00:29' ? 'selected' : '' }}  >30 Minutos</option>
                                <option value="00:59" {{ $userAll->tiempo == "00:59" ? 'selected' : '' }}  >1 Hora</option>
                            </select>
                    </div>
                        <!-- Password -->
                        <div class="mt-4">
                            <x-input-label for="password" :value="__('Password')" />

                            <x-text-input id="password" class="block mt-1 w-full"
                                            type="password"
                                            name="password"
                                            required autocomplete="new-password" />

                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                      

                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ms-4">
                                {{ __('Actualizar') }}
                            </x-primary-button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>