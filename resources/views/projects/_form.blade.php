@csrf

{{-- title --}}
<div class="form-group mt-3">
    <label for="title">Título del proyecto</label>
    <input class="form-control bg-light shadow-sm @error('title') is-invalid @else border-0 @enderror" type="text"
        name="title" placeholder="Mi primer proyecto" value="{{ old('title', $project->title) }}"><br>
    @error('title')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

{{-- description --}}
<div class="form-group mt-3">
    <label for="description">Descripción del proyecto</label>
    <textarea class="form-control bg-light shadow-sm @error('description') is-invalid @else border-0 @enderror"
        name="description" placeholder="Descripción...">{{ old('description', $project->description) }}</textarea><br>
    @error('description')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

{{-- url --}}
<div class="form-group mt-3">
    <label for="url">Url del proyecto</label>
    <input class="form-control bg-light shadow-sm @error('url') is-invalid @else border-0 @enderror" type="text"
        name="url" placeholder="mi-primer-proyecto" value="{{ old('url', $project->url) }}"><br>
    @error('url')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<button class="btn btn-primary w-100 mt-3 fw-bold text-white">{{ $btnText }}</button>
<a class="btn btn-link w-100 mt-2 fw-bold" href="{{ route('projects.index') }}">Cancelar</a>
