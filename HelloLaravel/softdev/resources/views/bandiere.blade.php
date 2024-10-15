@extends('layout')

@section('contenuto')
    <ul>
        @foreach ($bandiere as $bandiera)
        <li>{{$bandiera['country']}}  <img src='{{$bandiera['url']}}'></li>
        
        @endforeach
    </ul>
@endsection