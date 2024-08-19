 <!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user- scalable=no, initial-scale=1.0, maximum-scale-1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixel Positions</title>
    @vite(['resources/js/app.js'])
</head>
<body>
<div>
    <nav>
        <div>
            <!--Logo-->
            <a href="/">
                <img src="{{Vite::asset('resources/images/logo.svg')}}" alt="">
            </a>
        </div>
        <div>//Navigation</div>
        <div>//Post a Job</div>
    </nav>

    <main>
        {{ $slot }}
    </main>
</div>
</body>
</html>
