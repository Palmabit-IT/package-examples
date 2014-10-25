@extends('layouts.base')
@section('title')
    Catalog package
@stop

@section('content')
    <h1>Attention!</h1>
    In order to try it run the following commands:
     <ol>
        <li>Install authentication part first: {{link_to('/catalog/main','click here')}}</li>
        <li><code>composer update</code></li>
        <li>
            Add to your service providers the following string: <code>'Palmabit\Catalog\CatalogServiceProvider'</code></li>
        </li>
        <li>Run <code>php artisan catalog:install</code> Note: remember to configure your app/config/database.php file first!
        <br/>
        </li>
        <li>
        Also remember to set on your composer.json:<br/>
         <code>
            "minimum-stability": "dev",<br/>
            "prefer-stable": true
        </code>(This is needed for a dependency in way/form package)
        </li>
     </ol>
    </p>
    <h1>Catalog examples:</h1>
    <p>
    The Catalog package have the following features:
    <ul>
        <li><a href="#prodcut">Product Crud</a></li>
        <li><a href="#category">Category management</a></li>
        <li><a href="#order">Orders management</a></li>
    </ul>

    <h1 id="product">Product Crud</h1>
    <p>
        You can create a new product with:
        <ul>
            <li>General attributes</li>
            <li>Language specific attributes</li>
            <li>Images</li>
            <li>Categories</li>
            <li>Accessories</li>
        </ul>
        <br/>
        You can list all products in various languages and filter them with the dynamic search
    </p>

    <h1 id="category">Category management</h1>
    <p>
        You have a basic Crud of categories. <br/>
        You can add also images to the category and set a
        tree structure of categories.
    </p>

    <h1 id="order">Orders management</h1>
    <p>
        You can list all the orders and see them in the admin page.
    </p>
@stop
@section('scripts')
    @parent
@stop