@extends('layouts.default')

@section('content')
    <section class="notice">
        <div class="container">
            <strong>Notice:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam gravida dignissim sodales.
        </div>
    </section>

    <section class="hero">
        <div class="container">
            <h1>
                <span class="line-one">The <strong>elegant PHP framework</strong> for web artisans.</span>
                <span class="line-two">Start enjoying development again.</span>
            </h1>
            <a href="#" class="call-button">Five Minute Quickstart</a>
        </div>
    </section>

    <section class="features">
        <div class="container">
            <ul class="feature-box">
                <li>
                    <h2><a title="RESTful Routing" href="#">RESTful Routing</a></h2>
                    <p>Use simple Closures to respond to requests to your application. It couldn't be easier to get started building amazing applications.</p>
                </li>
                <li>
                    <h2><a title="Command Your Data" href="#">Command Your Data</a></h2>
                    <p>Ships with the amazing Eloquent ORM and a great migration system. Works great on MySQL, Postgres, SQL Server, and SQLite.</p>
                </li>
                <li>
                    <h2><a title="Beautiful Templating" href="#">Beautiful Templating</a></h2>
                    <p>Use native PHP or the light-weight Blade templating engine. Blade provides great template inheritance and is blazing fast. You'll love it.</p>
                </li>
                <li>
                    <h2><a title="Ready For Tomorrow" href="#">Ready For Tomorrow</a></h2>
                    <p>Build huge enterprise applications, or simple JSON APIs. Write powerful controllers, or slim RESTful routes. Laravel is perfect for jobs of all sizes.</p>
                </li>
                <li>
                    <h2><a title="Proven Foundation" href="#">Proven Foundation</a></h2>
                    <p>Laravel is built on top of several Symfony components, giving your application a great foundation of well-tested and reliable code.</p>
                </li>
                <li>
                    <h2><a title="Composer Powered" href="#">Composer Powered</a></h2>
                    <p>Composer is an amazing tool to manage your application's third-party packages. Find packages on Packagist and use them in seconds.</p>
                </li>
                <li>
                    <h2><a title="Great Community" href="#">Great Community</a></h2>
                    <p>Whether your a PHP beginner or architecture astronaut, you'll fit right in. Discuss ideas in the IRC chat room, or post questions in the forum.</p>
                </li>
                <li>
                    <h2><a title="Red, Green, Refactor" href="#">Red, Green, Refactor</a></h2>
                    <p>Laravel is built with testing in mind. Stay flexible with the IoC container, and run your tests with PHPUnit. Don't worry... it's easier than you think.</p>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
    </section>

    <section class="partners">
        <div class="container">
            <div class="friend-box">
                <div class="friend-logo">
                    <a href="#"><img src="{{ asset('img/cartalyst.png') }}" alt=""></a>
                </div>
                <div class="friend-caption">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam gravida dignissim sodales. Donec quam tortor, varius eget rutrum a, sollicitudin at augue. Vivamus risus risus, feugiat eget vehicula in, consectetur vitae tellus.
                </div>
            </div>

            <!--
            <div class="friend-box">
                <div class="friend-logo">
                    <a href="#"><img src="{{ asset('img/snappy.png') }}" alt=""></a>
                </div>
                <div class="friend-caption">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam gravida dignissim sodales. Donec quam tortor, varius eget rutrum a, sollicitudin at augue. Vivamus risus risus, feugiat eget vehicula in, consectetur vitae tellus.
                </div>
            </div>
            <div class="friend-box">
                <div class="friend-logo">
                    <a href="#"><img src="{{ asset('img/dayle.png') }}" alt=""></a>
                </div>
                <div class="friend-caption">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam gravida dignissim sodales. Donec quam tortor, varius eget rutrum a, sollicitudin at augue. Vivamus risus risus, feugiat eget vehicula in, consectetur vitae tellus.
                </div>
            </div>

            <h2>Say hi to some of our friends!</h2>
            <ul>
                <li></li>
                <li><a href="#"><img src="{{ asset('img/snappy.png') }}" alt=""></a></li>
                <li><a href="#"><img src="{{ asset('img/dayle.png') }}" alt=""></a></li>
                <li><a href="#"><img src="" alt=""></a></li>
            </ul>
            -->
            <div class="clearfix"></div>
        </div>
    </section>
@stop
