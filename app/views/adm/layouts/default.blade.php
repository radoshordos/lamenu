<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>
        @section('title')
        @show
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/bootstrap-theme.min.css') }}">
    <style>
        @section ('styles')
        body {
            padding-top: 60px;
        }
        @show
    </style>
</head>
<body>

<!-- Navbar -->
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ URL::route('adm.home') }}">Administrační rozhraní</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                @if (Sentry::check() && Sentry::getUser()->hasAccess('admin'))
                <li
                {{ (Request::is('adm/users*') ? 'class="active"' : '') }}><a
                    href="{{ URL::to('adm/users') }}">Users</a></li>
                <li
                {{ (Request::is('adm/groups*') ? 'class="active"' : '') }}><a
                    href="{{ URL::to('adm/groups') }}">Groups</a></li>
                @endif
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @if (Sentry::check())
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Účet<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li {{ (Request::is('adm/users/show/' . Session::get('userId')) ? 'class="active"' : '') }}>
                            <a href="{{ URL::to('adm/users') }}/{{ Session::get('userId') }}">{{ Session::get('email') }}</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="{{ URL::to('adm/logout') }}">Logout</a></li>
                    </ul>
                </li>
                @else
                <li
                {{ (Request::is('adm/login') ? 'class="active"' : '') }}><a
                    href="{{ URL::to('adm/login') }}">Login</a></li>
                <li
                {{ (Request::is('adm/users/create') ? 'class="active"' : '') }}><a
                    href="{{ URL::to('adm/users/create') }}">Register</a></li>
                @endif
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</div>
<!-- ./ navbar -->

<!-- Container -->
<div class="container">
    <!-- Notifications -->
    @include('adm/layouts/notifications')
    <!-- ./ notifications -->

    <!-- Content -->
    @yield('content')
    <!-- ./ content -->
</div>

<!-- ./ container -->

<script src="{{ asset('admin/js/jquery-1.11.1.min.js') }}"></script>
<script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('admin/js/restfulizer.js') }}"></script>
</body>
</html>
