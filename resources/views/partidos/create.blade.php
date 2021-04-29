<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Partidos-Crear') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   <form action="{{route('partidos.store')}}" method="post">
                    @csrf
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                        <div class="mt-4">
                            <x-label for="data" :value="__('Data')" />

                            <x-input id="data" class="block mt-1 w-full date"   name="data"  />
                            @error('data')

                            <p class="text-red-900">{{$message}}</p>

                             @enderror
                        </div>
                        <div class="mt-4">
                            <label class="block">
                                <span class="text-gray-700">Categoria</span>
                                <select name="categoria_id" class="form-select block w-full mt-1">
                                  <option>Categorias</option>
                                  @foreach ($categorias as $categoria)
                                  <option value="{{$categoria->id}}">{{$categoria->nom}}</option>
                                  @endforeach
                                </select>
                              </label>
                            @error('categoria_id')

                            <p class="text-red-900">{{$message}}</p>

                             @enderror
                        </div>
                        <div class="mt-4">
                            <label class="block">
                                <span class="text-gray-700">Equip Local</span>
                                <select name="categoria_id" class="form-select block w-full mt-1">
                                  <option>Equipo local</option>
                                  @foreach ($equipos as $equipo)
                                  <option value="{{$equipo->id}}">{{$equipo->nom}}</option>
                                  @endforeach
                                </select>
                              </label>
                            @error('data')

                            <p class="text-red-900">{{$message}}</p>

                             @enderror
                        </div>
                        <div class="mt-4">
                            <label class="block">
                                <span class="text-gray-700">Categoria</span>
                                <select name="categoria_id" class="form-select block w-full mt-1">
                                  <option>Categorias</option>
                                  @foreach ($categorias as $categoria)
                                  <option value="{{$categoria->id}}">{{$categoria->nom}}</option>
                                  @endforeach
                                </select>
                              </label>
                            @error('data')

                            <p class="text-red-900">{{$message}}</p>

                             @enderror
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
    <script>
        var fp = flatpickr(".date", {
            enableTime: true,
            dateFormat: "Y-m-d H:i",
            time_24hr: true
        })
      </script>
</x-app-layout>
