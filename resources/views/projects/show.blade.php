@extends('layouts.app')
@section('title', 'Portafolio | ' . $project->title)

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                <div class="bg-white p-5 shadow rounded-3">
                    @isset($project)
                        <h1>{{ $project->title }}</h1>
                        <p class="text-secondary">{{ $project->description }}</p>
                        <p class="text-black-50">{{ $project->created_at->diffForHumans() }}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="{{ route('projects.index') }}">Regresar</a>
                            @auth
                                <div class="btn-group btn-group-sm">
                                    <a class="btn btn-primary text-white fw-bold"
                                        href="{{ route('projects.edit', $project) }}">Editar</a>
                                    <a class="btn btn-danger fw-bold" href="#"
                                        onclick="document.getElementById('delete-project').submit();">Eliminar</a>
                                </div>

                                <form id="delete-project" class="d-none" action="{{ route('projects.destroy', $project) }}"
                                    method="POST">
                                    @csrf @method('DELETE')
                                </form>
                            @endauth
                        </div>
                    @else
                        <h1>Error</h1>
                    @endisset
                </div>
            </div>
        </div>
    </div>
@endsection
