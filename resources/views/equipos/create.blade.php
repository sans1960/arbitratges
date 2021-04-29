<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Equipos-Crear') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   <form action="{{route('equipos.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                        <div class="mt-4">
                            <x-label for="name" :value="__('Nom')" />

                            <x-input id="name" class="block mt-1 w-full" type="text" name="nom"  />
                            @error('nom')

                            <p class="text-red-900">{{$message}}</p>

                             @enderror
                        </div>
                        <div class="mt-4">
                            <x-label for="camp" :value="__('Camp')" />

                            <x-input id="camp" class="block mt-1 w-full"
                                            type="text"
                                            name="camp"
                                             />
                              @error('camp')

                              <p class="text-red-900">{{$message}}</p>

                               @enderror
                        </div>
                        <div class="mt-4">
                            <x-label for="escut" :value="__('Escut')" />

                            <x-input id="escut" class="block mt-1 w-full" type="file" name="escut" />
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
