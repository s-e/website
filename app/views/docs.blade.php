@extends('layouts.default')

@section('content')
    <section class="docs-heading">
        <div class="container">
            <h2>Documentation</h2>
            <div class="sponsor">
                <span>Sponsored by</span>
                <?php $rand = rand(1,2); ?>
                @if ($rand == 1)
                <a href="#" title="Be Snappy"><img src="{{ asset('img/snappy_small.png') }}"></a>
                @else
                <a href="#" title="Cartalyst"><img src="{{ asset('img/cartalyst_small.png') }}"></a>
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
