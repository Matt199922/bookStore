<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Welcome</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #FFDEAD;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
                background-color: #B0E0E6;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            p{
                text-align: center;
                font-size: 20px;
                padding: 20px;
            }

            .welcome{
                background-color: #708090
            }


        </style>
    </head>

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">        
    </div>
</div>

    <body>
        <!--<div class="flex-center position-ref full-height">
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
            @endif -->

            <div class="content">
                <div class="title m-b-md">
                    Aston Book Store
                </div>

                <div class="links">
                    <a href="/books">Book Store</a>
                    <a href="/about">About</a>
                </div>
            </div>
        <!-- </div> -->

        <div class="welcome">
            <p>Welcome to the Aston Book store, feel free to browse the available
            books and if wish to become a customer then you can register in the top
            right corner. If you decide to buy something then of course feel free to 
            add items to your basket.</p>
        </div>
    </body>
</html>
@endsection