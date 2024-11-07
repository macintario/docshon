<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Documentos de honorarios') }}
        </h2>
        <h3 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Datos personales') }}
        </h3>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!-- if there are creation errors, they will show here -->
                    <form method="POST" action="/personales/{{ $datosPersonales->id }}">
                        @csrf
                        @method('PUT')
                        <input type="text" name="name" value="{{ $datosPersonales->name }}">
                        <input type="text" name="description" value="{{ $datosPersonales->description }}">
                        <button type="submit">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>