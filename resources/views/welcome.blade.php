<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>aomine-</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Ico -->
        <link rel="shortcut icon" href="../../public/laravel.ico">

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

            .tabla{
                border-collapse: collapse;
                margin: 0 auto;
                margin-top: 32px;
            }

            .tabla tr, .tabla th, .tabla td{
                border-bottom: 1px solid rgba(0, 0, 0, .2);
                padding: 16px;
            }
        </style>
    </head>
    <body>
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
                <div class="title m-b-md">
                    aomine
                </div>

                @if( isset($teacher))
                <p>Profesor: {{ $teacher }}</p>
                @else
                <p>Profesor a Definir</p>
                @endif

                <div class="links">
                    @foreach ($links as $link => $text)
                    <a href="{{ $link }}" target="_blanks">{{ $text }}</a>
                    @endforeach
                </div>

                    <table class="tabla">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Edad</th>
                                <th>Altura</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $student => $name)
                            <tr>
                                <td>{{ $name['name'] }}</td>
                                <td>{{ $name['age'] }}</td>
                                <td>{{ $name['height'] }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

            </div>
        </div>
    </body>
</html>
