@extends('layouts.app')
@section('title', 'Edit project')

@section('content')
    <h1>{{ __('Edit project') }}</h1>

    <form action="{{ route('projects.update', $project) }}" method="POST">
        @method('PATCH')
        @include('projects._form', ['btnText' => 'Actualizar'])
    </form>

@endsection
