<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Documentos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <h1> Carga de documentos </h1>
                <form action="/sube_documento/guardar" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="archivo">
                    <br>
                <x-primary-button class="ms-3">
                {{ __("Cargar") }}
            </x-primary-button>
                </form>
            </div>
            <br />
        </div>
    </div>
</x-app-layout>