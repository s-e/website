@extends('layouts.base')

@section('head')
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>{{ $title }} - Laravel PHP Framework</title>
    <meta name="description" content="{{ $description }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @yield('css')
    <script src="{{ asset('js/vendor/modernizr-2.6.2.min.js') }}"></script>
@stop

@section('body')
    <header>
        <div class="container">
            <a href="{{ route('home') }}" title="Laravel PHP Framework" class="logo">&nbsp;</a>
            <nav class="menu">
                <ul>
                    <li<?php if(Request::is('/')): ?> class="active"<?php endif; ?>><a href="{{ route('home') }}" title="Welcome">Welcome</a></li>
                    <li<?php if(Request::is('docs*')): ?> class="active"<?php endif; ?>><a href="{{ route('docs') }}" title="Documentation">Documentation</a></li>
                    <li><a href="http://laravel.com/api" title="Laravel Framework API">API</a></li>
                    <li><a href="https://github.com/laravel/laravel" title="Github">Github</a></li>
                    <li><a href="http://forums.laravel.io/" title="Laravel Forums">Forums</a></li>
                    <li><a href="http://twitter.com/laravelphp" title="Laravel on Twitter">Twitter</a></li>
                </ul>
            </nav>
            <a class="to-top">Back to Top</a>
        </div>
    </header>


    @yield('content')

    <footer>
        <div class="container">
            <a href="{{ route('home') }}" title="Laravel PHP Framework" class="logo"><img src="{{ asset('img/footer_logo.png') }}" alt="Laravel PHP Framework"></a>
            <nav class="menu">
                <ul>
                    <li><a href="{{ route('home') }}" title="Welcome">Welcome</a></li>
                    <li><a href="{{ route('docs') }}" title="Documentation">Documentation</a></li>
                    <li><a href="http://laravel.com/api" title="Laravel Framework API">API</a></li>
                    <li><a href="https://github.com/laravel/laravel" title="Github">Github</a></li>
                    <li><a href="http://forums.laravel.io/" title="Laravel Forums">Forums</a></li>
                    <li><a href="http://twitter.com/laravelphp" title="Laravel on Twitter">Twitter</a></li>
                </ul>
            </nav>
            <p class="copyright">Copyright &copy; 2013 Taylor Otwell. Site designed by <a href="http://casserolelabs.com/" title="Casserole Labs">Casserole Labs</a> &amp; <a href="http://daylerees.com" title="Dayle Rees">Dayle Rees</a>.</p>
        </div>
    </footer>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="{{ asset('js/vendor/jquery-1.9.1.min.js') }}"><\/script>')</script>
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/main.min.js') }}"></script>
    @yield('scripts')
    <script>
        var _gaq=[['_setAccount','{{ $analytics }}'],['_trackPageview']];
        (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
        g.src='//www.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g,s)}(document,'script'));
    </script>
@stop
