<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Goles-Crear') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('goles.store')}}" method="post">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">

                            <div class="mt-4">
                                <label class="block">
                                    <span class="text-gray-700">Partido</span>
                                    <select name="partido_id" class="form-select block w-full mt-1">
                                      <option>Partido</option>
                                      @foreach ($partidos as $partido)
                                      <option value="{{$partido->id}}">{{$partido->id}}</option>

                                      @endforeach

                                    </select>
                                  </label>

                            </div>
                            <div class="mt-4">
                              <label class="block">
                                  <span class="text-gray-700">Categoria</span>
                                  <select name="categoria_id" class="form-select block w-full mt-1">
                                    <option>Categoria</option>
                                    @foreach ($categorias as $categoria)
                                    <option value="{{$categoria->id}}">{{$categoria->nom}}</option>

                                    @endforeach
                                  </select>
                                </label>

                          </div>
                            <div class="mt-4">
                                <label class="block">
                                    <span class="text-gray-700">Equip</span>
                                    <select name="equipo" class="form-select block w-full mt-1">
                                      <option>Equipo</option>
                                      @foreach ($equipos as $equipo)
                                      <option value="{{$equipo->id}}">{{$equipo->nom}}</option>

                                      @endforeach
                                    </select>
                                  </label>

                            </div>

                            <div class="mt-4">
                                <x-label for="jugador" :value="__('Jugador')" />

                                <x-input id="resultat" class="block mt-1 w-full " type="text"   name="jugador"  />

                            </div>
                            <div class="mt-4">
                                <x-label for="minut" :value="__('Minut')" />

                                <x-input id="minut" class="block mt-1 w-full " type="text"   name="minuto"  />

                            </div>
                            <div class="mt-4">
                                <x-label for="marcador" :value="__('Marcador')" />

                                <x-input id="marcador" class="block mt-1 w-full " type="text"   name="marcador"  />

                            </div>
                        </div>
                        <x-button class="ml-4 mt-5">
                            {{ __('Crea') }}
                        </x-button>
                       </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
