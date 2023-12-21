@extends('app')
 
@section('title', 'Ваша ссылка')
 
@section('content')
    <p>Через <span>10</span> секунд вы будете переадресованы на следующую ссылку:</p>
    <p><a href="{{ $real_link }}">{{ $real_link }}</a></p>
@endsection
