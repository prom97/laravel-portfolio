@extends('layouts.app')
@section('title', 'Contacto')

@section('content')
    {{-- {{old('<input_name>')}} ---> mantiene los datos ingresados, en caso de validarse un campo incorrecto --}}

    <h1>{{ __('Contact') }}</h1>


    @include('layouts.session-status') <br>

        <form action="{{ route('contact.store') }}" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Nombre..." value="{{ old('name') }}"><br>
            {!! $errors->first('name', '<small>:message</small><br>') !!}
            <input type="email" name="email" placeholder="Email..." value="{{ old('email') }}"><br>
            {!! $errors->first('email', '<small>:message</small><br>') !!}
            <input type="text" name="subject" placeholder="Asunto..." value="{{ old('subject') }}"><br>
            {!! $errors->first('subject', '<small>:message</small><br>') !!}
            <textarea name="content" cols="30" rows="10" placeholder="Mensaje..." value="{{ old('content') }}"></textarea><br>
            {!! $errors->first('content', '<small>:message</small><br>') !!}
            <button>{{ __('Send') }}</button>
        </form>
@endsection
