<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
    <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                 @foreach($phone as $items)
                   @if($items['Price']<=2500)
                   <p >{{$items['Type']}} - {{$items['Price']}} - {{$items['Color']}} </p>
                   @else
                   <p style="color:red">{{$items['Type']}} - {{$items['Price']}} - {{$items['Color']}} </p>
                    @endif
                 @endforeach
                 <a href="{{    route('twiq')    }}">صفحة طويق</a>
                </div>
    </body>
</html>
