@extends('Layout')
@section('title', $title)
@section('content')
    @if($title=="Login")
        <x-usermanagement.loginform></x-usermanagement.loginform>
    @endif
@endsection
