<x-layouts.app title="Listado de Pc's">
    <x-layouts.form width='100' titulo="Inventario" ruta="login">
        <br>
        <table>
            <tbody>
                <tr>
                    <th>
                        Dueño Pc
                    </th>
                    <th>
                        <div style="display: flex; flex-direction: row">
                            <div class="inventarioBtn">
                                <a class="btn" href="{{ route('posts.pc') }}">
                                    Nuevo Computador
                                </a>&nbsp;
                            </div>
                        </div>
                    </th>
                </tr>
                @foreach ($computadores as $computador)
                    <tr>
                        <th>
                            <a>
                                {{ $computador->persona->nombrePersona }} &nbsp; <br>
                            </a>
                        </th>
                        <th>
                            <div style="display: flex; flex-direction: row">
                                <div class="inventarioBtn">
                                    <a class="boton" href="{{ route('posts.show',$computador) }}">
                                        <span class="material-symbols-outlined">
                                            info
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </th>
                    </tr>
                @endforeach
    </x-layouts.form>
</x-layouts.app>
