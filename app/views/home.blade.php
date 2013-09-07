@extends('layouts.default')

@section('content')
    @if (! is_null($notice))
    <section class="notice">
        <div class="container">
            {{$notice}}
        </div>
    </section>
    @endif

    <section class="hero">
        <div class="container">
            <h1>
                <span class="line-one">The <strong>PHP framework</strong> for web artisans.</span>
                <span class="line-two">Just got four times better.</span>
            </h1>
            <a href="/docs/quick" class="call-button">Five Minute Quickstart</a>
        </div>
    </section>

    <section class="features">
        <div class="container">
            <ul class="feature-box">
                <li>
                    <h2><a title="RESTful Routing" href="/docs/routing">RESTful Routing</a></h2>
                    <p>Use simple Closures to respond to requests to your application. It couldn't be easier to get started building amazing applications.</p>
                </li>
                <li>
                    <h2><a title="Command Your Data" href="/docs/eloquent">Command Your Data</a></h2>
                    <p>Ships with the amazing Eloquent ORM and a great migration system. Works great on MySQL, Postgres, SQL Server, and SQLite.</p>
                </li>
                <li>
                    <h2><a title="Beautiful Templating" href="/docs/templates">Beautiful Templating</a></h2>
                    <p>Use native PHP or the light-weight Blade templating engine. Blade provides great template inheritance and is blazing fast. You'll love it.</p>
                </li>
                <li>
                    <h2><a title="Ready For Tomorrow" href="/docs/routing">Ready For Tomorrow</a></h2>
                    <p>Build huge enterprise applications, or simple JSON APIs. Write powerful controllers, or slim RESTful routes. Laravel is perfect for jobs of all sizes.</p>
                </li>
                <li>
                    <h2><a title="Proven Foundation" href="http://www.symfony.com">Proven Foundation</a></h2>
                    <p>Laravel is built on top of several Symfony components, giving your application a great foundation of well-tested and reliable code.</p>
                </li>
                <li>
                    <h2><a title="Composer Powered" href="http://getcomposer.org">Composer Powered</a></h2>
                    <p>Composer is an amazing tool to manage your application's third-party packages. Find packages on Packagist and use them in seconds.</p>
                </li>
                <li>
                    <h2><a title="Great Community" href="http://forums.laravel.io">Great Community</a></h2>
                    <p>Whether you're a PHP beginner or architecture astronaut, you'll fit right in. Discuss ideas in the IRC chat room, or post questions in the forum.</p>
                </li>
                <li>
                    <h2><a title="Red, Green, Refactor" href="/docs/testing">Red, Green, Refactor</a></h2>
                    <p>Laravel is built with testing in mind. Stay flexible with the IoC container, and run your tests with PHPUnit. Don't worry... it's easier than you think.</p>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
    </section>

    <section class="partners">
        <div class="container">
            <?php $rand = rand(1,10); ?>
            @if ($rand <= 4)
            <div class="friend-box">
                <div class="friend-logo">
                    <a href="http://www.cartalyst.com/" title="Cartalyst"><img src="{{ asset('img/cartalyst.png') }}"></a>
                </div>
                <div class="friend-caption">
                    Cartalyst, a Laravel community sponsor, is the leader in premium add-ons and extensions to the Laravel framework. Their arsenal of high quality
                    components will take your application to the next level.
                </div>
            </div>
            @else
            <div class="friend-box">
                <div class="friend-logo">
                    <a href="http://www.a2hosting.com/" title="Snappy"><img src="{{ asset('img/a2host.png') }}"></a>
                </div>
                <div class="friend-caption">
                    A2 Hosting is your high performance Laravel hosting provider. Deploy Laravel on our screaming fast SSDs featuring 300% faster page load speeds than our competition. Questions? Just ask our 24/7/365 Guru Crew support team!
                </div>
            </div>
            @endif
            <div class="clearfix"></div>
        </div>
    </section>
@stop
