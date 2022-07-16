@extends('layouts.app')
@section('title', 'Portafolio | ' . $project->title)

@section('content')
    @isset($project)
        <h1>{{ $project->title }}</h1>

        <a href="{{ route('projects.edit', $project) }}">Editar</a>

        <form action="{{ route('projects.destroy', $project) }}" method="POST">
            @csrf @method('DELETE')
            <button>Eliminar</button>
        </form>

        <ul>
            <li>Descripción: {{ $project->description }}</li>
            <li>Creado: {{ $project->created_at->format('d/m/Y H:i:s') }}</li>
            <li>Modificado: {{ $project->updated_at->format('d/m/Y H:i:s') }}</li>
        </ul>
    @else
        <h1>Error</h1>
    @endisset

@endsection
