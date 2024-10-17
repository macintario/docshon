<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Documentos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <table>
                    <tr>
                        <td>
                            <table>
                                @foreach ($documentos as $documento)
                                <tr>
                                    <td>
                                        {{$documento->numero}}
                                    </td>
                                    <td>
                                        {{$documento->documento}}
                                    </td>
                                    <td>
                                        <button onclick='$("viewer").attr("src","logo-ipn.jpg");' class="btn btn-info">&#128065</button>
                                    </td>
                                    <td>
                                        <a href="/sube_documento/{{Auth::user()->id }}/{{$documento->id}}" class="btn btn-default"> &#8679;</a>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        </td>
                        <td>
                            <iframe id="viewer" name="viewer" src="/logo-des.png"
                                width="80%" height="400">
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