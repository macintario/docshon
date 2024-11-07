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
                            <a href="/personas/base">Honorarios con base o interinatos</a>
                            <br>
                            <a href="/personas/pura">Honorarios puros</a>
                            @break
                        @case(3)
                            <h3>Honorarios con base o interinatos</h3>
                            <a href="/personales/{{Auth::user()->id}}">
                            &#9997; Datos Personales
                            </a>
                            <br>
                            <a href="/doc_b/{{Auth::user()->id}}">
                            &#128451; Subir documentos
                            </a>
                            @break
                        @case(4)
                            <h1>Honorarios puros</h1>
                            <a href="/personales/{{Auth::user()->id}}">
                            &#9997; Datos Personales
                            </a>
                            <br>
                            <a href="/doc_p/{{Auth::user()->id}}">
                            &#128451; Subir documentos
                            </a>
                            @break
                    
                        @default
                            
                    @endswitch
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
