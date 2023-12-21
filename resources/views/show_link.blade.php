@extends('app')
 
@section('title', 'Ссылка создана')
 
@section('content')
    <p>Ваша ссылка: <a href="{{ $new_url }}">{{ $new_url }}</a></p>
@endsection
