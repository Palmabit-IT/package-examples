@extends('layouts.base')
@section('title')
    Multilanguage package
@stop

@section('content')
    <h1>Authentication examples:</h1>
    <p>
    The authentication package have the following features:
    <ul>
        <li><a href="#menu">Customizabile menu</a></li>
        <li><a href="#permission">User and permissions crud</a></li>
        <li><a href="#login">Login/Logout</a></li>
    </ul>
    In order to try it run the following commands:
     <ol>
        <code><li>composer update</code></li>
        <code><li>php artisan authentication:install</code></li>
     </ol>
    </p>

    <h1 id="menu">Customizable menu</h1>
    <p>
        You can add and remove field in the menu editing the file in "app/config/packages/palmabit/authentication/menu.php". Chekc the comment in the file for more info
    </p>

    <h1 id="permission">User, groups and permissions crud</h1>
    <p>
       This package allow you to handle users via admin panel, to try that <a href="{{URL::to('admin/users/list',false)}}">follow this link</a> (user:admin@admin.com, password:admin)
    </p>

    <h1 id="login">Login/Logout</h1>
@stop
@section('scripts')
    @parent
@stop