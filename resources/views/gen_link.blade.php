@extends('app')
 
@section('title', 'Новая ссылка')

@section('resources')
    @vite(['resources/css/index.css'])
    @vite(['resources/js/index.js'])
@endsection
 
@section('content')
    <form method="post" action="{{ route('create_link_form') }}">
        @csrf

        <div class="form-group">
            <label for="user_link">Ваша ссылка:</label>
            <input type="text" class="form-control @error('user_link') is-invalid @enderror" 
                id="user_link" name="user_link"
                placeholder="Введите ссылку" required>
        </div>

        @error('user_link')
            <span class="invalid-feedback" role="alert">
                {{ $message }}
            </span>
        @enderror

        <button type="submit" class="btn btn-primary">Создать!</button>
    </form>

    @if(Session::has('success'))
        <div class="alert alert-success text-center" id="success-alert-panel">
            <div id="link-part">Ваша ссылка: <a href="{{ url('/'.Session::get('success')) }}" id="generated-link">
                {{ preg_replace("(^https?://)", "", url('/'.Session::get('success'))) }}
            </a></div>

            <div>
                <span class="bi bi-copy" id="copy-address"></span>
            </div>
        </div>
    @endif
@endsection
