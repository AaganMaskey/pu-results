@extends('master')

@section('body')
    <h2 >
    PU (Pokhara University) Results 
    </h2>
    <h5>
        <ul>
            <li> Download and extract all the notices from PU website.</li>
            <br>
            <li>Search for the keyword 'result' in the notices.</li>
            <br>
            <li>Return all the notices that match the search.</li>
        </ul>
    </h5>

    <div>
        <code>
            Click below to run the search 
        </code>
    </div>
    <br>
    <div>
        <a class='button' href="{{route('extract')}}">Run the search</a>
    </div>
        <!-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div> -->

@endsection
