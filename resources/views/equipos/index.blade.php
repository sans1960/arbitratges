<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Equipos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if ($message = Session::get('success'))
                    <div class="bg-green-500 text-white p-6">
                       <p> {{$message}}</p>

                    </div>
                    @endif
                    <div class="flex justify-end mt-5 ">
                        <a href="{{route('equipos.create')}}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">Añadir Equipo</a>
                    </div>
                </div>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <table class="min-w-max w-full table-auto">
                    <thead>
                        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                            <th class="py-3 px-6 text-center">Nom</th>
                            <th class="py-3 px-6 text-center">Camp</th>
                            <th class="py-3 px-6 text-center">Escut</th>

                        </tr>
                    </thead>
                    <tbody>
                         @foreach ($equipos as $equipo)
                           <tr>
                               <td class="py-3 px-6 text-center" >{{$equipo->nom}}</td>
                               <td class="py-3 px-6 text-center">{{$equipo->camp}}</td>
                               <td class="py-3 px-6 text-center"><img class="mx-auto" src="{{ asset('img/escudos/'.$equipo->escut)}}" alt="" width="60"></td>
                           </tr>

                         @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
