<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Documentos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <table  class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <tr>
                    <th>RFC</th>
                    <th>Paterno</th>
                    <th>Materno</th>
                    <th>Nombre(s)</th>
                    <th>Datos Personales</th>
                    <th>Documentos Cargados</th>
                    </tr>
                    @foreach ($documentosUsuarios as $docU)
                    <tr>
                        <td>
                        {{$docU->rfc}}
                        </td>
                        <td>
                        {{$docU->paterno}}
                        </td>
                        <td>
                        {{$docU->materno}}
                        </td>
                        <td>
                        {{$docU->nombres}}
                        </td>
                        <td>
                        <a href="/personales/{{$docU->id}}">&#128065</a>
                        </td>
                        <td>
                        @if( Request::segment(2) == "base" )
                        <a href="/doc_b/{{$docU->id}}" class="btn btn-info"> {{$docU->numero_documentos}} </a>
                        @else
                        <a href="/doc_p/{{$docU->id}}" class="btn btn-info">{{$docU->numero_documentos}}</a>
                        @endif
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