@extends('layouts.app')
@section('title', 'Edit project')

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                
                <form class="bg-white shadow rounded py-3 px-4" action="{{ route('projects.update', $project) }}" method="POST">
                    <h1 class="display-5">{{ __('Edit project') }}</h1>
                    <hr>
                    @method('PATCH')
                    @include('projects._form', ['btnText' => 'Actualizar'])
                </form>
            </div>
        </div>
    </div>
@endsection
