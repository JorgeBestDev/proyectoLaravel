<div class="container col-8 col-s-8">
    <form id="{{ $id ?? '' }}" style="width: {{ $width ?? '50' }}%;" action="{{ $action ?? '' }}"
        method="{{ $method ?? 'POST' }}">
        @csrf
        <div class="divformulario">

            <div class="ImagenMain">
                <a href="{{ route($ruta ?? 'posts.index') }}">
                    <img id="imgmain" src="/img/images.png" alt="not found">
                </a>
            </div>
            <div>
                <h5 id="aprendices">
                    {{ $titulo ?? '' }}
                </h5>
                <br>
            </div>
            {{ $slot }}
        </div>
    </form>
</div>
