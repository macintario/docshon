<script type="text/javascript">
    function muestra(user,doc){
        let v = document.getElementById("viewer");
        let url ="/muestra_documento/"+user+"/"+doc;
        v.src=url;
    }
</script>
<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Documentos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <table>
                    <tr>
                        <td>
                            <table>
                                <tr>
                                    <th>No</th>
                                    <th>Documento</th>
                                    <th>Mostrar</th>
                                    <th>Cargar</th>
                                </tr>
                                @foreach ($documentos as $documento)
                                <tr>
                                    <td style="text-align: right">
                                        {{$documento->numero}}.-
                                    </td>
                                    <td>
                                        {{$documento->documento}}
                                    </td>
                                    <td>
                                        <button id="muestra" onclick="muestra({{Request::segment(2)}},{{$documento->id}})">&#128065;</button>
                                    </td>
                                    <td>
                                        <a href="/sube_documento/{{Request::segment(2)}}/{{$documento->id}}" class="btn btn-default"> &#8679;</a>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        </td>
                        <td>
                            <iframe id="viewer" name="viewer" src="/logo-des.png"
                                width="300" height="400">
                            </iframe>
                        </td>
                    </tr>
                </table>
            </div>
            <div>

            </div>
            {{$documentos->links() }}
            <br />
        </div>
    </div>
</x-app-layout>
