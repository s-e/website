@extends('layouts.default')

@section('content')
    <section class="docs-heading">
        <div class="container">
            <h2>Documentation</h2>
            <div class="sponsor">
                <span>Sponsored By</span>
                <?php $rand = rand(1,10); ?>
                @if ($rand <= 4)
                <a href="http://www.cartalyst.com/" title="Cartalyst"><img src="{{ asset('img/cartalyst_small.png') }}"></a>
                @else
                <a href="http://www.a2hosting.com" title="A2 Hosting"><img src="{{ asset('img/a2_small.png') }}"></a>
                @endif
            </div>
        </div>
    </section>

    <section class="docs-content">
        <div class="container">
            <nav class="docs-menu">
                {{ $index }}
            </nav>
            <article class="docs-body">
                {{ $body }}
            </article>
            <div class="clearfix"></div>
        </div>
    </section>
@stop
