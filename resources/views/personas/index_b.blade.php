<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Documentos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 rtl:text-right dark:text-gray-400">
                    <tr>
                        <th>RFC</th>
                        <th>Paterno</th>
                        <th>Materno</th>
                        <th>Nombre(s)</th>
                        <th>Datos<br>Personales</th>
                        <th>Documentos<br>Cargados</th>
                        <th>Estado</th>
                    </tr>
                    @foreach ($documentosUsuarios as $docU)
                        <tr>
                            <td>
                                {{ $docU->rfc }}
                            </td>
                            <td>
                                {{ $docU->paterno }}
                            </td>
                            <td>
                                {{ $docU->materno }}
                            </td>
                            <td>
                                {{ $docU->nombres }}
                            </td>
                            <td>
                                <a href="/personales/{{ $docU->id }}">&#128065</a>
                            </td>
                            <td>
                                @if (Request::segment(2) == 'base')
                                    <a href="/doc_b/{{ $docU->id }}" class="btn btn-info">
                                        {{ $docU->numero_documentos }} </a>
                                @else
                                    <a href="/doc_p/{{ $docU->id }}" class="btn btn-info">
                                        {{ $docU->numero_documentos }}</a>
                                @endif
                            </td>
                            <td>
                                {{ $docU->estado_documentos }}

                                <span x-data="{ tooltip: false }" x-on:mouseover="tooltip = true"
                                    x-on:mouseleave="tooltip = false" class="h-5 ml-12 cursor-pointer w-15">

                                    <a href="/comunica/{{ $docU->id }}" class="btn btn-info">
                                        &#128387;
                                    </a>
                                    <div x-show="tooltip"
                                        class="absolute p-2 text-sm text-white transform translate-x-8 -translate-y-8 bg-blue-400 rounded-lg">
                                        Enviar correo
                                    </div>

                                </span>
                            </td>
                        </tr>
                    @endforeach
                </table>
                {{ $documentosUsuarios->links() }}
            </div>

            <br />
        </div>
    </div>
</x-app-layout>
