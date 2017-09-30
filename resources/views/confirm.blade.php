<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Confirm</title>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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
                font-size: 34px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
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
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    Your ride with {{$booking->user->name}} has been approved
                </div>

                <div class="links">
                    <p>
                        You had request for a ride with {{$booking->user->name}} 
                        on {{$booking->ride->departure}} from {{$booking->ride->origin}} 
                        to {{$booking->ride->destination}}.
                    </p>
                    <p>
                        This is to confirm that {{$booking->user->name}} has accepted. Please contact them via
                        <a href="mailto:{{$booking->user->email}}">{{$booking->user->email}}</a> for more 
                        details;
                    </p>
                </div>
            </div>
        </div>
    </body>
</html>
