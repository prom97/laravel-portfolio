@extends('layouts.app')
@section('title', 'Projects')

@section('content')
    <h1>{{ __('Projects') }}</h1>
    
    <a href="{{ route('projects.create') }}">Crear proyecto</a>

    <ul>
        @forelse ($projects as $item)
            <li>
                <a href="{{ route('projects.show', $item) }}">
                    {{ $item->title }}
                </a>
            </li>
            <br>
        @empty
            <li>No hay proyectos</li>
        @endforelse
    </ul>

@endsection
