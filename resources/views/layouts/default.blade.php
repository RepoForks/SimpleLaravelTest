<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.head')
    @stack('styles')
    @stack('header-scripts')
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        @include('includes.header')
    </nav>

    @yield('content')
    <!-- /.container -->

    <!-- jQuery -->
    <script src="{{asset('js/jquery.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>

    @stack('scripts')

</body>

</html>
