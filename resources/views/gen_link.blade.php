@extends('app')
 
@section('title', 'Новая ссылка')

@section('resources')
    @vite(['resources/css/index.css'])
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
        <div class="alert alert-success text-center">
            Ваша ссылка: <a href="{{ url('/'.Session::get('success')) }}">
                {{ preg_replace("(^https?://)", "", url('/'.Session::get('success'))) }}
            </a>
        </div>
    @endif
@endsection
