@extends('layouts.app')
@section('title', __('Projects'))

@section('content')
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1 class="display-4 text-primary mb-0">{{ __('Projects') }}</h1>
            @auth
                <a class="btn btn-primary fw-bold text-white" href="{{ route('projects.create') }}">Crear proyecto</a>
            @endauth
        </div>
        <p class="lead text-secondary">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae eligendi nobis corrupti corporis, numquam itaque
            mollitia perferendis minima rerum fugiat maiores ducimus, dolorum expedita dolor. Nam harum unde nobis.
            Voluptate hic possimus sunt sequi cum maxime commodi id. Tempore voluptatem odio temporibus aliquam sint dolorem
            adipisci numquam illum similique aspernatur?
        </p>

        <ul class="list-group">
            @forelse ($projects as $item)
                <li class="list-group-item border-0 mb-3 shadow-sm projectItem">
                    <a class="text-secondary text-decoration-none d-flex justify-content-between align-item-center"
                        href="{{ route('projects.show', $item) }}">
                        <span class="fw-bold">
                            {{ $item->title }}
                        </span>
                        <span class="text-black-50">
                            {{ $item->created_at->format('d/m/Y') }}
                        </span>
                    </a>
                </li>
            @empty
                <li class="list-group-item border-0 mt-5 mb-3 shadow-sm text-center">No hay proyectos actualmente</li>
            @endforelse
            <div class="d-flex justify-content-end">
                {{ $projects->links() }}
            </div>
        </ul>
    </div>

@endsection
