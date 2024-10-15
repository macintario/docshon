<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Documentos de honorarios') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Bienvenido") }}
                    <br>
                    @switch(Auth::user()->tipo)
                        @case(2)
                            {{ __("Honorarios con base o interinatos") }} 
                            <br>
                            {{ __("Honorarios puros") }}                            
                            @break
                        @case(3)
                            {{ __("Honorarios con base o interinatos Subir documentos") }} 
                            @break
                        @case(4)
                            {{ __("Honorarios puros Subir documentos") }} 
                            @break
                    
                        @default
                            
                    @endswitch
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
