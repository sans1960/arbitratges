<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Tarjetas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if ($message = Session::get('success'))
                    <div class="p-6 text-white bg-green-500">
                       <p> {{$message}}</p>

                    </div>
                    @endif
                    <div class="flex justify-end mt-5 ">
                        <a href="{{ route('tarjetas.create')}}" class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-white uppercase transition duration-150 ease-in-out bg-gray-800 border border-transparent rounded-md hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25">Añadir Tarjeta</a>
                    </div>
                </div>
            </div>
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <table class="w-full table-auto min-w-max">
                    <thead>
                        <tr class="text-sm leading-normal text-gray-600 uppercase bg-gray-200">
                            <th class="px-6 py-3 text-center">Partido</th>
                            <th class="px-6 py-3 text-center">Categoria</th>
                            <th class="px-6 py-3 text-center">Equipo  </th>
                            <th class="px-6 py-3 text-center">Jugador</th>
                            <th class="px-6 py-3 text-center">Minuto</th>
                            <th class="px-6 py-3 text-center">Tipo</th>
                            <th class="px-6 py-3 text-center">Motivo</th>

                            <th class="px-6 py-3 text-center">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>

                </table>
            </div>
        </div>
    </div>
</x-app-layout>
