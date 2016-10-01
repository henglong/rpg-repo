@extends('template')

@section('header')
    <title>RPG - Game APP</title>
@stop

@section('content')

        <div class="container">
            @if (Route::has('login'))
                <div class="top-right links">
                    <a href="{{ url('/login') }}">Login</a>
                    <a href="{{ url('/register') }}">Register</a>
                </div>
            @endif

            <div class="jumbotron">
                <h1>
                    Welcome
                </h1>
            </div>
        </div>

@stop