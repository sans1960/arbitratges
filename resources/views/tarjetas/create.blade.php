<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Tarjeta-Crear') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('tarjetas.store')}}" method="post">
                        @csrf
                        <div class="grid grid-cols-1 gap-4 md:grid-cols-3">

                            <div class="mt-4">
                                <label class="block">
                                    <span class="text-gray-700">Partido</span>
                                    <select name="partido_id" class="block w-full mt-1 form-select">
                                      <option>Partido</option>


                                    </select>
                                  </label>

                            </div>
                            <div class="mt-4">
                              <label class="block">
                                  <span class="text-gray-700">Categoria</span>
                                  <select name="categoria_id" class="block w-full mt-1 form-select">
                                    <option>Categoria</option>

                                  </select>
                                </label>

                          </div>
                            <div class="mt-4">
                                <label class="block">
                                    <span class="text-gray-700">Equipo</span>
                                    <select name="equipo" class="block w-full mt-1 form-select">
                                      <option>Equipo</option>

                                    </select>
                                  </label>

                            </div>

                            <div class="mt-4">
                                <x-label for="jugador" :value="__('Jugador')" />

                                <x-input id="resultat" class="block w-full mt-1 " type="text"   name="jugador"  />

                            </div>
                            <div class="mt-4">
                                <x-label for="minut" :value="__('Minuto')" />

                                <x-input id="minut" class="block w-full mt-1 " type="text"   name="minuto"  />

                            </div>
                            <div class="mt-4">
                                <x-label for="tipo" :value="__('Tipo')" />

                              <select name="tipo" id="tipo" class="block w-full mt-1 form-select">
                                  <option value="">Escoje</option>
                                  <option value="amarilla">Amarilla</option>
                                  <option value="roja">Roja</option>
                              </select>

                            </div>
                        </div>
                        <div class="mt-4">
                            <x-label for="motivo" :value="__('Motivo')" />

                            <x-input id="motivo" class="block w-full mt-1 " type="text"   name="motivo"  />

                        </div>
                        <x-button class="mt-5 ml-4">
                            {{ __('Crea') }}
                        </x-button>
                       </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
