<!doctype html>
<html>
<head>
    <title>@yield('title', 'P3')</title>
    <meta charset='utf-8'>
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'
          rel='stylesheet' integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm'
          crossorigin='anonymous'>

    @stack('head')
</head>
<body>

<section class='text-center'>
    @yield('content')
</section>

<footer class='text-center'>
    &copy; {{ date('Y') }}
    <a href='https://github.com/ElijahMR/p3'>View on Github</a>
</footer>

@stack('body')

</body>
</html>