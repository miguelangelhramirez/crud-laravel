<div>
    @if (session('action'))
    <div class="p-4 mb-4 mt-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 alert" role="alert">
        <span class="font-medium">Correcto!</span> {{ session('action') }}
    </div>
    @endif
    @if (session('error'))
    <div class="p-4 mb-4 mt-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 alert" role="alert">
        <span class="font-medium">Error:</span> {{ session('error') }}
    </div>
    @endif
    @php
        session()->forget('action');
    @endphp

    <h1 class="text-4xl mb-4">Lista de usuarios</h1>
    <a href="users/create" wire:navigate type="button" class="w-48 flex select-none items-center gap-3 rounded-lg bg-gray-900 py-2 px-4 mb-2 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-gray-900/10 transition-all hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"
            stroke-width="2" class="w-4 h-4">
            <path
              d="M6.25 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM3.25 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM19.75 7.5a.75.75 0 00-1.5 0v2.25H16a.75.75 0 000 1.5h2.25v2.25a.75.75 0 001.5 0v-2.25H22a.75.75 0 000-1.5h-2.25V7.5z">
            </path>
          </svg>
          Agregar usuario
    </a>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Nombre
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Correo
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Telefono
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Acciones
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $user->nombre }} {{ $user->apellido }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $user->correo }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $user->telefono }}
                    </td>
                    <td class="px-6 py-4">
                        <a wire:navigate href="/users/{{ $user->id }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar</a>
                        <a wire:click="deleteUser({{ $user->id }})" class="font-medium text-red-600 ml-6 dark:text-red-500 cursor-pointer hover:underline">Eliminar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
