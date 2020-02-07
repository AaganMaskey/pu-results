<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PU Results</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #242729;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
                padding:10px;
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
            .links{
                padding: 25px;
            }
/* #636b6f; */
            .links > .row > a {
                color: #000000;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-transform: uppercase;
                text-decoration: underline;
            }
            code{
                color:#111;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
            .row{
                padding-top: 7px;
                padding-bottom: 7px;
            } 
            .row:hover{
                background-color: #d4d4aa;
            }
            .header{
                font-size: 17px;
                color: #000;
                margin: 10px 0;
            }
            .button {
                color:#333;
                padding:5px 6px;
                background-color:#eee;
                text-decoration: none;
                font-weight:700;
                cursor:hand;
                border: solid darkgrey 2px;
            }
        </style>
    </head>
    <body>
            @yield('body')
       
    </body>
</html>
