<div class="mb-3">
    <label for="" class="form-label">{{$label}}</label>
    <input
        type="{{ $type }}"
        name="{{ $name }}"
        class="form-control"
        placeholder="{{ $placeholder }}"
        aria-describedby="helpId"
    />
    <small id="helpId" class="text-muted">
        @error("{{ $name }}")
            {{$message}}
        @enderror()
    </small>
</div>
