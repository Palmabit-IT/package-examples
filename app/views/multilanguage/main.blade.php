@extends('layouts.base')
@section('title')
    Multilanguage package
@stop

@section('content')
    <h1>Multilanguage code examples:</h1>
    <h3>String translation</h3>
    <p>
        To translate a string you need to use the <code>L::t()</code> method.
        Inside the method you have to put the string in the original language and it will be translated in the current language.
        You can find the string translations in app/lang/language_key/template.php. In the configuration file base.php you can add multiple
        language to the "languages" key, the key of the array elements rappresent the language key.
        Here is an example:
    </p>
    <p>
        <code>@{{L::t('english text')}}</code> result: <b>{{L::t('english text')}}</b>
        change language: @include('multilanguage::select-language')
    </p>
    <h3>Url translation</h3>
    <p>
        You can automatically translate an url in a given language based on language prefix, define a route like this:
        <br/><br/>
        <code>
        Route::get('/multilanguage/main', ['prefix' => L::get(), 'uses' =>function()
        <br/>
        {
        <br/>
            return View::make('multilanguage.main');
            <br/>
        }]);
        <br/><br/>
        </code>
        This <i>magic</i> is handled by the automatic swap filter present in filters.php.<br/>
        try it now!
        <ul>
            <li>{{link_to('/en/multilanguage/main','english')}}</li>
            <li>{{link_to('/de/multilanguage/main','german')}}</li>
            <li>{{link_to('/it/multilanguage/main','italian')}}</li>
            <li>{{link_to('/fr/multilanguage/main','french')}}</li>
        </ul>
        <p>
            Because of that we've wrapped the laravel URL facade with one that automatically prepend the language string to the url.<br/>
            For example <code>@{{URL::to('test')}}</code> will show you: {{URL::to('test')}}.
            <br/>
            But don't worry you can use normal laravel URL::to if needed, just
            write <code>@{{URL::to('test',false)}}</code> here's the result: {{URL::to('test',false)}}
        </p>
    </p>
    <h3>Auto import of language data</h3>
    <p>
        To make the fetching and setup of translation strings more easyer we've made a script that help you out fetching all the strings
        for the translations.<br>
        In order to do that make an empty directory in your project called "translation_files" and then run <code>php artisan multilanguage:fetch_translate_strings</code>.
        <br/>
        This command will create a template file for each language populated with the corresponding translation already available for the language.
        <br/>
        When you will be done translating you can just replace each file with the ones in app/lang folder.

    </p>

    <h3>SEO and languages</h3>
    <p>
        In order to let crawlers navigate your site effectively with multiple languages, you need to setup the
        hreflan meta tag, this package offer you that for free with the HreflangHelper class.<br/>
        What you have to do is to use that class to get all the link for every language, at this point you can add
        the metas in your template. here is an example:
        code:
        <code>
        <br/>
        <br/>
        @ foreach(Palmabit\Multilanguage\Helpers\HreflangHelper::get() as $key => $link)
            <br/>
            &lt;link rel="alternate" href="@{{$link}}" hreflang="@{{$key}}" /&gt;
            <br/>
        @ endforeach
        <br/>
        <br/>
        </code>
        and Here's what you get (the anchor tag is escaped in order yo show you the tag in the screen:
        <br/>
        <br/>
        <code>
        @foreach(Palmabit\Multilanguage\Helpers\HreflangHelper::get() as $key => $link)
        &lt;link rel="alternate" href="{{$link}}" hreflang="{{$key}}" /&gt;
        <br/>
        @endforeach
        </code>
    </p>
@stop
@section('scripts')
    @parent
    {{HTML::script('packages/palmabit/multilanguage/js/change-language.js')}}
@stop