@extends('layouts.app')
@section('title', 'Create project')

@section('content')
    <div class="container mt-4">

        <div class="col-12 col-sm-10 col-lg-6 mx-auto">
            <form class="bg-white shadow rounded py-3 px-4" action="{{ route('projects.store') }}" method="POST">
                <h1 class="display-5">{{ __('Create project') }}</h1>
                <hr>
                @include('projects._form', ['btnText' => 'Crear'])
            </form>
        </div>
    </div>

@endsection
