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
                    @foreach ($documentos as $documento)
                    <tr>
                    <td>
                        {{$documento->numero}}
                        </td>
                        <td>
                        {{$documento->documento}}
                        </td>
                        <td>
                        <a href="{{ route('dashboard')}}" class="btn btn-info">&#128065</a>
                        </td>
                        <td>
                        <a href="{{ route('dashboard')}}" class="btn btn-default"> &#8679;</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
             {{$documentos->links() }}
            <br />
        </div>
    </div>
</x-app-layout>