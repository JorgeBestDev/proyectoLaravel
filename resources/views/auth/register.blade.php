<x-layouts.app title="Registro Celadores" meta-description="Pagina de registro de nuevos celadores al sistema">
    <x-layouts.form id="" titulo="Registro celadores" action="{{ route('register') }}" method="POST" ruta="login">
        <x-layouts.input name="nombreCelador" class="" texto="Nombre Completo"/>
        <x-layouts.input name="identificacionCelador" type="number" class="" texto="Numero de Identificacion"/>
        <x-layouts.input name="celularCelador" type="number" class="" texto="Numero de Celular"/>
        <x-layouts.input name="correoCelador" type="email" class="" texto="Correo Electronico"/>
        <x-layouts.input name="usuarioCelador" class="" texto="Usuario"/>
        <x-layouts.input name="contraseñaCelador" type="password" class="" texto="Contraseña"/>
        <x-layouts.input name="contraseñaCelador_confirmation" type="password" class="" texto="Confirmar Contraseña"/>
        <br>
        <div style="display: flex;justify-content: center;">
            <button class="btn" type="submit">Registrar</button>
        </div>


    </x-layouts.form>
</x-layouts.app>
