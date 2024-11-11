<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Documentos de honorarios') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Enviar correo a $usr->nombres $usr->paterno $usr->materno") }} ({{ $usr->email }})
                    <form method="post" name="mailform" action="/enviacorreo ">
                        @csrf
                        <br><label>Asunto</label><input type="text" name="asunto" value="DES - Honorarios">
                        <input type="hidden" name="mailto" value="{{ $usr->email }}">
                        <br>
                        <textarea rows="30" cols="80 id="msg" name="msg">
{{ __("$usr->nombres $usr->paterno $usr->materno:") }}
Presente



Atentamente
.


Dirección de Educación Superior
Instituto Politécnico Nacional
                    </textarea>
                        <br>
                        <x-primary-button>
                            {{ __('Enviar') }}
                        </x-primary-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
