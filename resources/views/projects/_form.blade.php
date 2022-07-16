@csrf
<label for="title">Título del proyecto<br>
    <input type="text" name="title" placeholder="Mi x proyecto" value="{{ old('title', $project->title) }}"><br>
    {!! $errors->first('title', '<small>:message</small><br>') !!}
</label>
<br>
<label for="description">Descripción del proyecto<br>
    <textarea name="description" placeholder="Descripción...">{{ old('description', $project->description) }}</textarea><br>
    {!! $errors->first('description', '<small>:message</small><br>') !!}
</label>
<br>
<label for="url">Url del proyecto<br>
    <input type="text" name="url" placeholder="mi-primer-proyecto" value="{{ old('url', $project->url) }}"><br>
    {!! $errors->first('url', '<small>:message</small><br>') !!}
</label>
<button>{{ $btnText }}</button>
