@extends('layouts.default')

@section('content')
    <section class="hero">
        <div class="container">
            <p>The <strong>elegant PHP framework</strong> for web artisans.<br>Start enjoying development again.</p>
            <a href="#" class="call-button">Five Minute Quickstart</a>
        </div>
    </section>

    <section class="features">
        <div class="container">
            <ul class="feature-box">
                <li>
                    <h2>RESTful Routing</h2>
                    <p>Use simple Closures to respond to requests to your application. It couldn't be easier to get started building amazing applications.</p>
                </li>
                <li>
                    <h2>Command Your Data</h2>
                    <p>Ships with the amazing Eloquent ORM and a great migration system. Works great on MySQL, Postgres, SQL Server, and SQLite.</p>
                </li>
                <li>
                    <h2>Beautiful Templating</h2>
                    <p>Use native PHP or the light-weight Blade templating engine. Blade provides great template inheritance and is blazing fast. You'll love it.</p>
                </li>
                <li>
                    <h2>Ready For Tomorrow</h2>
                    <p>Build huge enterprise applications, or simple JSON APIs. Write powerful controllers, or slim RESTful routes. Laravel is perfect for jobs of all sizes.</p>
                </li>
                <li>
                    <h2>Proven Foundation</h2>
                    <p>Laravel is built on top of several Symfony components, giving your application a great foundation of well-tested and reliable code.</p>
                </li>
                <li>
                    <h2>Composer Powered</h2>
                    <p>Composer is an amazing tool to manage your application's third-party packages. Find packages on Packagist and use them in seconds.</p>
                </li>
                <li>
                    <h2>Great Community</h2>
                    <p>Whether your a PHP beginner or architecture astronaut, you'll fit right in. Discuss ideas in the IRC chat room, or post questions in the forum.</p>
                </li>
                <li>
                    <h2>Red, Green, Refactor</h2>
                    <p>Laravel is built with testing in mind. Stay flexible with the IoC container, and run your tests with PHPUnit. Don't worry... it's easier than you think.</p>
                </li>
            </ul>
        </div>
    </section>

    <section class="partners">
        <div class="container">
            <h2>Say hi to some of our friends!</h2>
            <ul>
                <li><a href="#"><img src="{{ asset('img/cartalyst.png') }}" alt=""></a></li>
                <li><a href="#"><img src="{{ asset('img/snappy.png') }}" alt=""></a></li>
                <li><a href="#"><img src="{{ asset('img/dayle.png') }}" alt=""></a></li>
                <li><a href="#"><img src="" alt=""></a></li>
            </ul>
        </div>
    </section>
@stop
