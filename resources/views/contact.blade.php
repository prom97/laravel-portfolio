@extends('layouts.app')
@section('title', __('Contact'))

@section('content')
    {{-- {{old('<input_name>')}} ---> mantiene los datos ingresados, en caso de validarse un campo incorrecto --}}
    <div class="container mt-4">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                <form class="bg-white shadow rounded py-3 px-4" action="{{ route('contact.store') }}" method="POST">
                    @csrf

                <h1 class="display-5 text-primary">{{ __('Contact') }}</h1>
                <hr>

                    {{-- name --}}
                    <div class="form-group mt-3">
                        <label for="name">Nombre</label>
                        <input class="form-control bg-light shadow-sm @error('name') is-invalid @else border-0 @enderror"
                            type="text" name="name" id="name" placeholder="Nombre..." value="{{ old('name') }}">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    {{-- email --}}
                    <div class="form-group mt-3">
                        <label for="email">Correo electrónico</label>
                        <input class="form-control bg-light shadow-sm @error('email') is-invalid @else border-0 @enderror"
                            type="email" name="email" placeholder="Email..." value="{{ old('email') }}">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    {{-- subject --}}
                    <div class="form-group mt-3">
                        <label for="subject">Asunto</label>
                        <input class="form-control bg-light shadow-sm @error('subject') is-invalid @else border-0 @enderror"
                            type="text" name="subject" placeholder="Asunto..." value="{{ old('subject') }}">
                        @error('subject')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    {{-- content --}}
                    <div class="form-group mt-3">
                        <label for="content">Mensaje</label>
                        <textarea class="form-control bg-light shadow-sm @error('content') is-invalid @else border-1 @enderror" name="content"
                            cols="30" rows="5" placeholder="Mensaje..." value="{{ old('content') }}"></textarea>
                        @error('content')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <button class="btn btn-primary w-100 mt-3 fw-bold text-white">{{ __('Send') }}</button>
                </form>
            </div>
        </div>
    </div>
@endsection
