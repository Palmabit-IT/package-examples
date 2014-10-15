<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Palmabit packages sample</title>
    {{HTML::style('css/style.css')}}
</head>
<body>
    <div style="margin-top:10px">
		<a href="http://palmabit.com" target="_blank">
		    <img src="{{URL::asset('img/logo_big.png')}}" width="200px" height="200px">
		    <span style="font-size:3em; vertical-align: top">Palmabit Packages Doc v1.0.0</span>
		</a>
		<h3>Packages examples: </h3>
		<ul>
		    <li>Catalog <i>(work in progress...)</i></li>
		    <li><a href="{{URL::to('/authentication/main',false)}}">Authentication</a></li>
		    <li><a href="{{URL::to('/multilanguage/main',true)}}">Multilanguage</a></li>
		</ul>
    </div>
</body>
</html>
