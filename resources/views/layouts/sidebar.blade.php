<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>

<header class="row">
    @include('includes.header')
</header>

<div id="main" class="row">
    <!-- main content -->
    <div id="content" class="col-md-9 col-sm-12">
        @yield('content')
    </div>

    <!-- sidebar content -->
    <div id="sidebar" class="col-md-3 col-sm-12">
        @include('includes.sidebar')
    </div>
</div>

@include('includes.footer')

</body>
</html>
