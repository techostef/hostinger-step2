<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="css/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/tailwind.css" rel="stylesheet">
    <style>
        .container {
            width: 1000px !important;
        }
        .w-fit-content {
            width: -moz-fit-content;
            width: fit-content;
        }
        .text-dark {
            color: #404040;
        }
        .hr {
            border-bottom: 1px solid #eee;
        }
        .text-success {
            color: #07ab07;
        }
        .border-dark {
            border: 1px solid #eee;
        }
        .font-size-18 {
            font-size: 18px;
        }
        .font-size-36 {
            font-size: 36px;
        }
        .font-size-58 {
            font-size: 58px;
        }
        .line-height-58 {
            line-height: 58px;
        }
        .text-primary {
            color: #0097ec;
        }
        .bg-primary {
            background-color: #0097ec;
        }
        .border-primary {
            border: 1px solid #0097ec;
        }
        .text-primary-dark {
            color: #0077d7;
        }
        .bg-primary-dark {
            background-color: #0077d7;
        }
        .border-primary-dark {
            border: 1px solid #0077d7;
        }
        .rotate-45 {
            -ms-transform: rotate(45deg); /* IE 9 */
            -webkit-transform: rotate(45deg); /* Safari 3-8 */
            transform: rotate(45deg);
        }
    </style>
</head>
<body>
    @include('header')
    @include('menu')
    @include('info')
    @include('feature')
    @include('promo')
    @include('price')
    @include('table')
    @include('paket')
    @include('framework')
    @include('module')
    @include('teknologi')
    @include('help')
    @include('footer')
    @include('footerpayment')
{{--    @include('content')--}}
</body>
</html>
