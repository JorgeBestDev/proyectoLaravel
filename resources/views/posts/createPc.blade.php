<x-layouts.app title="Registro Nuevos Pc's" meta-description="Pagina de registro de nuevos Pc's al sistema">
    <x-layouts.form id="" width="50" titulo="Registro de Nuevos Pc's" action="{{ route('posts.createPc') }}" method="POST">
        <div class="inventarioBtn">
            <a class="btn" href="{{ route('posts.persona') }}">
                Nuevo Dueño
            </a>&nbsp;
        </div>
        <div class="input-field">
            <select name="personas_idPersona">
                @foreach ($personas as $persona)
                    <option value="{{ $persona->idPersona }}">{{ $persona->nombrePersona }}</option>
                @endforeach
            </select>
        </div>
        <x-layouts.input name="marcaPc" class="" texto="Marca" />
        <x-layouts.input name="modeloPc" type="text" class="" texto="Modelo" />
        <x-layouts.input name="serialPc" type="number" class="" texto="Serial" />
        <br>
        <div style="display: flex;justify-content: center;">
            <button class="btn" type="submit">Registrar</button>
        </div>


    </x-layouts.form>
</x-layouts.app>
