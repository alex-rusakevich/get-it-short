@extends('app')
 
@section('title', 'Ваша ссылка')

@section('resources')
    <script>
        document.link_to_redirect = {{Js::from($real_link)}};
    </script>

    @vite(['resources/js/link_redirect.js'])
    @vite(['resources/css/link_redirect.css'])
@endsection
 
@section('content')
    <p>Через <span id="sec-to-redirect">10</span> секунд вы будете переадресованы на следующую ссылку:</p>
    <p><a href="{{ $real_link }}">{{ $real_link }}</a></p>
@endsection
