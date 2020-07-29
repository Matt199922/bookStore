<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Book Store</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
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

            .table{
                width: 10px;
                /* background-color: #FFCCCC; */
                font-size: 10px;
            }
            
            tr:hover{
                /* font-size: 10px; */
                border: 1px solid black;
                text-align: left;
                background-color: #CDCDCD;
                padding: 15px;
                border-bottom: none;
            }
            
            td:hover{
                /* font-size: 10px; */
                border: 1px solid black;
                text-align: left;
            }
            
            th:hover{
                /* font-size: 10px; */
                border: 1px solid black;
                text-align: left;
            }

            th{
                font-size: 20px;
                background-color: #F0F8FF;
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

            .title{
                font-weight: bold;
                font-size: 20px;
            }

            /* .image{
                width: 150px;
                height: 100px;
                padding: 0px;
            } */

            /* .hover{
                text-align: center;
            } */



        </style>
    </head>

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">      
    </div>
</div>


<!--     <body>
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
            @endif -->

            <div class="content">
                <div class="title m-b-md">
                    Book Store
                </div>

                <div class="links">
                    <a href="/">Home</a>
                    <a href="/about">About</a>
                </div>
            </div>
        </div>
        <body>
        <table class="table" border="1">
            <thead>
                <tr>
                    <th> ID </th>
                    <th> Book Image </th>
                    <th> Book Title </th>
                    <th> Author </th>
                    <th> Category </th>
                    <th> Stock </th>
                    <th> Price (£)</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                <tr>
                    <td class="hover">{{$book->id}}</td>
                    <td><a href="/image/{{ $book->image_path }}"><img class="image" src= "/image/{{ $book->image_path }}" alt="Book Image"/></a></td>
                    <td class="title">{{$book->book_title}}</td>
                    <td class="hover">{{$book->author}}</td>
                    <td class="hover">{{$book->category}}</td>
                    <td class="hover">{{$book->stock}}</td>
                    <td class="hover">{{$book->price}}</td>
                    <td class="hover">
                        <button class="btn btn-secondary btn-sm" class="tooltip-test" title="add to cart">
                            <i class="fa fa-shopping-cart"></i> add to cart
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>  
        </table>
    </body>
    </body>

@endsection
</html>
