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
                background-color: #FFDEAD;
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
        </style>
    </head>
    <div>
        <a href='/'>Welcome</a>
        <a href="/books">Book Store</a>
        <a href="/about">About</a>
    </div>
    <body>
      {{ Form::open(array('url' => 'login')) }}
      <h1>Login</h1>
      <!-- if there are login errors, show them here -->
      <p>
         {{ $errors->first('email') }}
         {{ $errors->first('password') }}
      </p>
      <p>
         {{ Form::label('email', 'Email Address') }}
         {{ Form::text('email', Input::old('email'), array('placeholder' => 'check@CZX.com')) }}
      </p>
      <p>
         {{ Form::label('password', 'Password') }}
         {{ Form::password('password') }}
      </p>
      <p>{{ Form::submit('Submit!') }}</p>
      {{ Form::close() }}
    </body>
</html>