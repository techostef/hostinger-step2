<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,viewport-fit=cover,user-scalable=no,initial-scale=1.0">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="css/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/tailwind.css" rel="stylesheet">
    <link href="css/tailwind-extends.css" rel="stylesheet">
    <style>
        body {
            overflow-x: hidden;
        }
        .container {
            width: 1000px !important;
            max-width: 100% !important;
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
        .border-shadow {
            -webkit-box-shadow: 0px 0px 5px 1px rgba(0,0,0,0.75);
            -moz-box-shadow: 0px 0px 5px 1px rgba(0,0,0,0.75);
            box-shadow: 0px 0px 5px 1px rgba(0,0,0,0.75);
        }
    </style>
    <script>
        function toggleDisplay(elm) {
            if (elm.style.display === 'block' || elm.style.display === 'flex') {
                elm.style.display = 'none'
            } else {
                elm.style.display = 'block'
            }
        }
        function bodyScroll() {
            var body = document.getElementsByTagName('body')
            body = body[0]
            if (body.style.overflowY === '' || body.style.overflowY === 'auto') {
                body.style.overflowY = 'hidden'
            } else {
                body.style.overflowY = 'auto'
            }
        }
    </script>
</head>
<body>
    @include('menuMobile')
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
    @include('share')
    @include('help')
    @include('footer')
    @include('footerpayment')
{{--    @include('content')--}}

</body>
</html>
