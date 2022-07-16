@extends('layouts.app')
@section('title', 'Create project')

@section('content')
    <h1>{{ __('Create project') }}</h1>

    <form action="{{ route('projects.store') }}" method="POST">
        @include('projects._form', ['btnText' => 'Crear'])
    </form>

@endsection
