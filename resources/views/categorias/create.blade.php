<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categorias-Crear') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   <form action="{{route('categorias.store')}}" method="post">
                    @csrf
                    <div class="grid grid-cols-1">
                        <div class="mt-4">
                            <x-label for="name" :value="__('Nom')" />

                            <x-input id="name" class="block mt-1 w-full" type="text" name="nom"  />
                            @error('nombre')

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
</x-app-layout>
