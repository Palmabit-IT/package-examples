<html>
<head>
    <title>
    @section('title')
        Palmabit package samples
    @show
    </title>
    {{HTML::style('css/style.css')}}
</head>
<body>
    @include('partials.header')
    @yield('content')
    @section('scripts')
        {{HTML::script("https://code.jquery.com/jquery-2.1.1.min.js")}}
    @show
</body>
</html>