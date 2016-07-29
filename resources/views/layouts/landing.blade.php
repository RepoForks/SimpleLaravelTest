@extends('layouts.page')

@section('main')

    <header class="header-image">
        @yield('header-image')
    </header>

    <!-- Page Content -->
    <div class="container">
        @yield('main-content')
    </div>


@stop
