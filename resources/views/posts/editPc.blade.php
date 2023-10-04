<x-layouts.app title="Detalle dueño">

    <x-layouts.form id="form" width="100" titulo="Detalles" action="{{ route('posts.updatePc', $computador) }}"
        method="POST">
        @csrf
        @method('PUT')
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
                            <select name="personas_idPersona">
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
                            <input type="text" name="marcaPc" value="{{ $computador->marcaPc }}">
                        </th>
                        <th>
                            <input type="text" name="modeloPc" value="{{ $computador->modeloPc }}">
                        </th>
                        <th>
                            <input type="number" name="SerialPC" value="{{ $computador->serialPc }}">
                        </th>
                        <th>
                            <input type="text" name="fechaHoraEntrada" value="{{ $computador->fechaHoraEntrada }}">
                        </th>
                        <th>
                            <input type="text" id="fecha_hora" name="fechaHoraSalida"
                                value="{{ $computador->fechaHoraSalida ? $computador->fechaHoraSalida : '' }}">
                        </th>
                    </tr>
                </tbody>
            </table>
        </div>
    </x-layouts.form>
    <br>
    <div class="container col-8 col-s-8">
        <div class="divformularioBoton">
            <div style="display: flex;flex-direction: row;justify-content: space-evenly">
                <p class="textAC">
                    Fecha y Hora Actual:
                </p> &nbsp;&nbsp;
                <button class="btn" id="insertar_fecha_hora">Insertar</button>&nbsp;&nbsp;
            </div>
            <br>
            <div style="display: flex; flex-direction: row;justify-content: center">

                <button form="form" type="submit" class="btn">Editar</button>&nbsp;&nbsp;

                <form action="{{ route('posts.destroy', $computador) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn">Eliminar</button>
                </form>
            </div>
            <script>
                // Función para obtener la fecha y hora actual en el formato deseado
                function obtenerFechaHoraActual() {
                    var ahora = new Date();
                    var anio = ahora.getFullYear();
                    var mes = (ahora.getMonth() + 1).toString().padStart(2, '0');
                    var dia = ahora.getDate().toString().padStart(2, '0');
                    var hora = ahora.getHours().toString().padStart(2, '0');
                    var minutos = ahora.getMinutes().toString().padStart(2, '0');
                    var segundos = ahora.getSeconds().toString().padStart(2, '0');
                    return anio + '-' + mes + '-' + dia + ' ' + hora + ':' + minutos + ':' + segundos;
                }

                // Función para insertar la fecha y hora actual en el campo de entrada
                function insertarFechaHoraActual() {
                    var fechaHoraActual = obtenerFechaHoraActual();
                    document.getElementById("fecha_hora").value = fechaHoraActual;
                }

                // Agregar un evento clic al botón para insertar la fecha y hora actual
                document.getElementById("insertar_fecha_hora").addEventListener("click", insertarFechaHoraActual);
            </script>
        </div>
    </div>





</x-layouts.app>
