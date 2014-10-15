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
    <h3>Attention!</h3>
    In order to try it run the following commands:
     <ol>
        <code><li>composer update</code></li>
        <code><li>php artisan authentication:install</code> Note: remember to configure your app/config/database.php file first!</li>

     </ol>
    </p>

    <h1 id="menu">Customizable menu</h1>
    <p>
        You can add and remove field in the menu editing the file in "app/config/packages/palmabit/authentication/menu.php". Chekc the comment in the file for more info
    </p>

    <h1 id="permission">User, groups and permissions crud</h1>
    <p>
       This package allow you to handle users via admin panel, to try that <a href="{{URL::to('admin/users/list',false)}}">follow this link</a> (user:admin@admin.com, password:password)
    </p>

    <h1 id="login">Login/Logout</h1>

    <h3>Use custom views</h3>
    <p>
        In order to customize the views first run the following command: <code>php artisan view:publish palmabit/authentication</code>
        <br/>
        Then you can find the views in the app/views/packages/palmabit/authentication folder.
    </p>
    <h3>Default permissions</h3>
    <p>
        @TODO
        <br/>
        _admin
        _superadmin
        _profile_editor
        _mail_notification
    </p>
@stop
@section('scripts')
    @parent
@stop