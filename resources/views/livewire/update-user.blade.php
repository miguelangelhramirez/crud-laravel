<div>
    <h1 class="text-4xl mb-4 text-center">Actualizar usuario</h1>
    <form wire:submit.prevent="update" class="max-w-sm mx-auto">
        <div class="mb-5">
            <label for="nombre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre</label>
            <input type="text" wire:model="nombre" id="nombre" name="nombre" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
            <div>
                @error('nombre')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Error: </span> {{ $message }} </p>
                @enderror
            </div>
        </div>
        <div class="mb-5">
            <label for="apellido" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Apellido</label>
            <input type="text" wire:model="apellido" id="apellido" name="apellido" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
            @error('apellido')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Error: </span> {{ $message }} </p>
            @enderror
        </div>
        <div class="mb-5">
            <label for="correo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Correo</label>
            <input type="email" wire:model="correo" id="correo" name="correo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
            @error('correo')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Error: </span> {{ $message }} </p>
            @enderror
        </div>
        <div class="mb-5">
            <label for="telefono" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Telefono</label>
            <input type="number" wire:model="telefono" id="telefono" name="telefono" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
            @error('telefono')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Error: </span> {{ $message }} </p>
            @enderror
        </div>
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Actualizar</button>
    </form>
</div>