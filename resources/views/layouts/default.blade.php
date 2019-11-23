<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>

<header>
    @include('includes.header')
</header>
<div class="container homepage-container">
    <div id="main" class="row">
            @yield('content')
    </div>
</div>

@include('includes.footer')

</body>
</html>
