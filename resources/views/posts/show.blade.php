<x-layouts.app title="Detalle dueño">

    <x-layouts.form id="form" width="100" titulo="Detalles" action="{{ route('posts.editPc', $computador) }}"
        method="get">
        @csrf
        <div style="display: flex; flex-direction: row;justify-content: end">
            <button form="form" type="submit" class="btn">Editar</button>&nbsp;&nbsp;
        </div>
        <div style="display: flex; flex-direction: row">
            <table>
                <tbody>
                    <tr>
                        <th>
                            Dueño:
                        </th>
                        <th>
                            Marca Pc:
                        </th>
                        <th>
                            Modelo Pc:
                        </th>
                        <th>
                            Serial Pc:
                        </th>
                        <th>
                            Fecha y Hora de Ingreso
                        </th>
                        <th>
                            Fecha y Hora de Salida
                        </th>
                        <th>

                        </th>
                    </tr>
                    <tr>
                        <th>
                            <select name="personas_idPersona" disabled>
                                <option value="">Seleccione una persona</option>
                                @foreach ($persona as $personaItem)
                                    <option value="{{ $personaItem->idPersona }}"
                                        {{ $personaItem->idPersona == $computador->personas_idPersona ? 'selected' : '' }}>
                                        {{ $personaItem->nombrePersona }}
                                    </option>
                                @endforeach
                            </select>
                        </th>
                        <th>
                            <input type="text" name="marcaPc" value="{{ $computador->marcaPc }}"disabled>
                        </th>
                        <th>
                            <input type="text" name="modeloPc" value="{{ $computador->modeloPc }}"disabled>
                        </th>
                        <th>
                            <input type="number" name="SerialPC" value="{{ $computador->serialPc }}"disabled>
                        </th>
                        <th>
                            <input type="text" name="fechaHoraEntrada" value="{{ $computador->fechaHoraEntrada }}"disabled>
                        </th>
                        <th>
                            <input type="text" id="fecha_hora" name="fechaHoraSalida"
                                value="{{ $computador->fechaHoraSalida ? $computador->fechaHoraSalida : '' }}"disabled>
                        </th>
                    </tr>
                </tbody>
            </table>
        </div>
    </x-layouts.form>
</x-layouts.app>
