<div class="input-field">
    <input name="{{ $name }}" class="validate {{ $class }}" type="{{ $type ?? 'text' }}" value="{{ old($name) }}">
    @error($name)
        <br>
        <small style="color: red">{{ $message }}</small>
    @enderror
    <label class="labelidpass">
        {{ $texto }}
    </label>
</div>
