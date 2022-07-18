@extends('layouts.app')
@section('title', __('About'))

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-12 col-lg-6">
                <img class="img-fluid mt-4" src="{{ asset('img/about.svg') }}" alt="Sobre mí">
            </div>
            <div class="col-12 col-lg-6">
                <h1 class="display-4 text-primary">{{ __('About') }}</h1>
                <p class="lead text-secondary">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus rerum odio reprehenderit nisi in illo
                    voluptas facilis beatae aperiam a, numquam assumenda officia iure facere perspiciatis possimus debitis,
                    magnam itaque quia sit accusamus repellendus maxime neque? Ducimus animi est nihil iure vero
                    perspiciatis, eum voluptatibus enim repudiandae amet officia totam?
                </p>
                <a class="btn btn-lg btn-primary w-100 text-white" href="{{ route('contact') }}">Contáctame</a>
                <a class="btn btn-lg btn-outline-primary w-100 mt-2" href="{{ route('projects.index') }}">Portafolio</a>
            </div>
        </div>
    </div>
@endsection
