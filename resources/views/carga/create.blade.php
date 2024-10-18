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


                @if(session('success'))
                <p>{{ session('success') }}

                    <a href="
                          <?php
                                $tipo = Auth::user()->tipo;
                                $id = (string) Auth::user()->id;
                                switch ($tipo) {
                                    case 3:
                                        $page = "/doc_b/";
                                        break;
                                    case 4:
                                        $page = "/doc_p/";
                                        break;

                                    default:
                                        $page = "/doc_b/";
                                        break;
                                }
                                $base = $page . $id;
                                echo $base;
                                ?>

                " style="background-color:green; color:white">{{ __(" Otro documento ") }}</a>

                </p>
                <iframe src="{{ asset(Storage::disk('public')->url(session('file')) ) }}"
                    width="80%" height="400"> 
                </iframe>
                <!-- var_dump(Storage::disk('public')) -->
                @endif
                @if(session('error'))
                <p>{{ session('error') }}</p>
                @endif
                <form action="/sube_documento/guardar" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="document_id" id="document_id" value="{{ Request::segment(3) }}">

                    <input type="file" name="file">
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