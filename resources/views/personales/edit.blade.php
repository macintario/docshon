<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Documentos de honorarios') }}
        </h2>
        <h3 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Datos personales') }}
        </h3>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="/personales/{{ $datosPersonales->id }}/update ">
                        @csrf
                        <table>
                            <tr>
                                <td>
                                    Nombre(s)
                                </td>
                                <td>
                                    <input type="text" size="60" name="nombres"
                                        value="{{ $datosPersonales->nombres }}">
                                </td>
                                <td style="font-size: 80%"> Nombre o nombres</td>
                            </tr>
                            <tr style="background-color:lightgray">
                                <td>Paterno</td>
                                <td><input type="text" size="60" name="paterno"
                                        value="{{ $datosPersonales->paterno }}"></td>
                                <td style="font-size: 80%"> Apellido Paterno</td>
                            </tr>
                            <tr>
                                <td>Materno</td>
                                <td><input type="text" size="60" name="materno"
                                        value="{{ $datosPersonales->materno }}"></td>
                                <td style="font-size: 80%"> Apellido materno</td>
                            </tr>
                            <tr style="background-color:lightgray">
                                <td>RFC</td>
                                <td><input type="text" size="15" maxlength="15" name="rfc"
                                        value="{{ $datosPersonales->rfc }}"></td>
                                <td style="font-size: 80%"> Registro Federal de Contribuyentes de acuerdo al SAT</td>
                            </tr>
                            <tr>
                                <td>CURP</td>
                                <td><input type="text" size="30" maxlength="30" name="curp"
                                        value="{{ $datosPersonales->curp }}"></td>
                                <td style="font-size: 80%"> Clave Única del Registro de Población </td>
                            </tr>
                            <tr style="background-color:lightgray">
                                <td>Dirección</td>
                                <td>
                                    <textarea rows="4" cols="80" name="direccion">{{ $datosPersonales->direccion }}</textarea>
                                </td>
                                <td style="font-size: 80%"> Debe ser igual a la de la Constancia de Situación Fiscal
                                </td>
                            </tr>
                            <tr>
                                <td>Correo electronico institucional</td>
                                <td><input type="email" name="email" value="{{ $datosPersonales->email }}"></td>
                                <td style="font-size: 80%"> Correo electrónico adicional al institucional </td>
                            </tr>
                            <tr style="background-color:lightgray">
                                <td>Correo electronico alterno</td>
                                <td><input type="email" name="correo_alterno"
                                        value="{{ $datosPersonales->correo_alterno }}"></td>
                                <td style="font-size: 80%"> Correo electrónico adicional al institucional </td>
                            </tr>
                            <tr style="background-color:white">
                                <td>Régimen Fiscal</td>
                                <td><select name="regimen_fiscal_id">
                                        @foreach ($regimenFiscales as $regimen)
                                            <option value="{{ $regimen->id }}"
                                                @if ($regimen->id == old('regimen_fiscal_id', $regimen->id)) selected="selected" @endif>
                                                {{ $regimen->regimen }}
                                        @endforeach
                                    </select></td>
                                <td style="font-size: 80%"> Régimen tributario registrado ante el SAT </td>
                            </tr>
                            <tr style="background-color:lightgray">
                                <td>Teléfono Celular</td>
                                <td><input type="text" name="telefono_celular"
                                        value="{{ $datosPersonales->telefono_celular }}"></td>
                                        <td style="font-size: 80%">Teléfono celular para recibir comunicaciones</td>
                            </tr>

                            <tr style="background-color:white">
                                <td>Teléfono de Casa</td>
                                <td><input type="text" name="telefono_casa"
                                        value="{{ $datosPersonales->telefono_casa }}"></td>
                                <td style="font-size: 80%">Teléfono fijo para recibir comunicaciones</td>
                            </tr>
                            <tr  style="background-color:lightgray">
                                <td>Actividades Mensuales</td>
                                <td>
                                    <textarea rows="4" cols="80" name="actividades_mensuales">{{ $datosPersonales->actividades_mensuales }}</textarea>
                                </td>
                                <td style="font-size: 80%">Actividades a desarrollar durante el mes</td>
                            </tr>
                            <tr  style="background-color:white">
                                <td>Actividades Anuales</td>
                                <td>
                                    <textarea rows="4" cols="80" name="actividades_anuales">{{ $datosPersonales->actividades_anuales }}</textarea>
                                </td>
                                <td style="font-size: 80%">Actividades a desarrollar durante todo el año</td>
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
