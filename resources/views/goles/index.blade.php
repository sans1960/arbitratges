<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Goles') }}
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
                        <a href="{{route('goles.create')}}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">Añadir Gol</a>
                    </div>
                </div>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <table class="min-w-max w-full table-auto">
                    <thead>
                        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                            <th class="py-3 px-6 text-center">Partido</th>
                            <th class="py-3 px-6 text-center">Categoria</th>
                            <th class="py-3 px-6 text-center">Equipo  </th>
                            <th class="py-3 px-6 text-center">Jugador</th>
                            <th class="py-3 px-6 text-center">Minuto</th>
                            <th class="py-3 px-6 text-center">Resultado</th>
                            <th class="py-3 px-6 text-center">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($goles as $gol)
                        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                            <td class="py-3 px-6 text-center">{{$gol->partido->id}}</td>
                            <td class="py-3 px-6 text-center">{{$gol->categoria->nom}}</td>
                            <td class="py-3 px-6 text-center">{{$gol->equipo}}</td>
                            <td class="py-3 px-6 text-center">{{$gol->jugador}}</td>
                            <td class="py-3 px-6 text-center">{{$gol->minuto}}</td>
                            <td class="py-3 px-6 text-center">{{$gol->marcador}}</td>
                            <td>
                                <div class="flex flex-row justify-around items-center">
                                    <a href="">
                                        <i class="fas fa-eye"></i>
                                    </a>

                                    <a href="">
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    <form action="" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"><i class="fas fa-trash"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>

                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</x-app-layout>
