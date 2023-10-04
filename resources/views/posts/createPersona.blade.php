<x-layouts.app title="Registro Personas" meta-description="Pagina de registro de nuevas personas al sistema">
    <x-layouts.form id=""  titulo="Registro Personas" action="{{ route('posts.createPersona') }}" method="POST">
        <x-layouts.input name="nombrePersona" class="" texto="Nombre Completo"/>
        <x-layouts.input name="identificacionPersona" type="number" class="" texto="Numero de Identificacion"/>
        <x-layouts.input name="celularPersona" type="number" class="" texto="Numero de Celular"/>
        <x-layouts.input name="correoPersona" type="email" class="" texto="Correo Electronico"/>
        <br>
        <div style="display: flex;justify-content: center;">
            <button class="btn" type="submit">Registrar</button>
        </div>


    </x-layouts.form>
</x-layouts.app>
