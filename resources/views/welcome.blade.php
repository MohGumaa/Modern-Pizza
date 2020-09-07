@extends('layouts.layout')

@section('content')
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="content">
            <div class="pizza-cover">
                <img src="/images/pizza_cover.png" alt="pizza">
            </div>
            <div class="title m-b-md">
                <span id="head">
                    Modern Pizza
                </span><br>
                The Best Way to Chill Time
            </div>
        </div>
    </div>
@endsection
  
