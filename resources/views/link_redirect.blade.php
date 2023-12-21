@extends('app')
 
@section('title', 'Ваша ссылка')
 
@section('content')
    <p>Переадресация ссылки <a href="{{ $real_link }}">{{ $real_link }}</a></p>
@endsection
