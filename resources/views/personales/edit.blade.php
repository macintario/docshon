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
                    <form method="POST" action="/personales/{{$datosPersonales->id}}/update ">
                        @csrf
                        <table>
                            <tr>
                                <td>
                                    Nombre(s)
                                </td>
                                <td>
                                    <input type="text" size="60" name="nombres" value="{{ $datosPersonales->nombres }}">
                                </td>
                            </tr>
                            <tr>
                                <td>Paterno</td>
                                <td><input type="text" size="60" name="paterno" value="{{ $datosPersonales->paterno }}"></td>
                            </tr>
                            <tr>
                                <td>Materno</td>
                                <td><input type="text" size="60" name="materno" value="{{ $datosPersonales->materno }}"></td>
                            </tr>
                            <tr>
                                <td>RFC</td>
                                <td><input type="text" size="15" maxlength="15" name="rfc" value="{{ $datosPersonales->rfc }}"></td>
                            </tr>
                            <tr>
                                <td>CURP</td>
                                <td><input type="text"  size="30" maxlength="30" name="curp" value="{{ $datosPersonales->curp }}"></td>
                            </tr>
                            <tr>
                                <td>Dirección</td>
                                <td><textarea rows="4" cols="80" name="direccion">{{ $datosPersonales->direccion }}</textarea></td>
                            </tr>
                            <tr>
                            <td>Correo electronico alterno</td>
                                <td><input type="email" name="correo_alterno" value="{{ $datosPersonales->correo_alterno }}"></td>
                            </tr>
                            <tr>
                            <td>Régimen Fiscal</td>
                                <td><select name="regimen_fiscal_id">
                                    @foreach ($regimenFiscales as $regimen)
                                        <option value="{{$regimen->id}}"
                                        @if ($regimen->id  == old('regimen_fiscal_id',$regimen->id) )
                                            selected="selected"
                                        @endif
                                        >{{$regimen->regimen}}
                                    @endforeach
                                </select></td>
                            </tr>
                            <tr>
                            <td>Teléfono Celular</td>
                                <td><input type="text" name="telefono_celular" value="{{ $datosPersonales->telefono_celular }}"></td>
                            </tr>
                            <tr>
                            <td>Teléfono de Casa</td>
                                <td><input type="text" name="telefono_casa" value="{{ $datosPersonales->telefono_casa }}"></td>
                            </tr>
                            <tr>
                            <td>Actividades Mensuales</td>
                                <td><textarea rows="4" cols="80" name="actividades_mensuales">{{ $datosPersonales->actividades_mensuales }}</textarea></td>
                            </tr>
                            <tr>
                            <td>Actividades Anuales</td>
                                <td><textarea rows="4" cols="80" name="actividades_anuales">{{ $datosPersonales->actividades_anuales }}</textarea></td>
                            </tr>
                        </table>
                        <div class="flex justify-end mt-4">
                            <x-primary-button>
                                {{ __('Guardar') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>