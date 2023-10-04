

<x-layouts.app title="Ingreso PC's CGAO" meta-description="Sistema de ingreso de equipos de computo al CENTRO AGROEMPRESARIAL DEL ORIENTE">

    <x-layouts.form action="{{ route('validate') }}" method="POST" titulo="Inicio de Sesion" ruta="login">
        <x-layouts.input name="usuarioCelador" class="" texto="Usuario"/>
        <x-layouts.input name="contraseñaCelador" class="" type="password" texto="Contraseña"/>
        <label>
            <input type="checkbox" name="recuerdame"/>
            <span>Recuerdame</span>
        </label>

        <br>
            <div class="boton2">
                <p  style="text-align: center;width: 33%;">
                    No Tienes Cuenta?
                    <br>
                <a href="{{ route('register') }}">Registrate!</a>
                </p>
                <button type="submit" class="btn waves-effect waves-light">Entrar</button>
                <a href="forgot.php" style="text-align: center">Olvido Su Contraseña?</a>
            </div>
    </x-layouts.form>


</x-layouts.app>

