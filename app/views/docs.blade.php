@extends('layouts.default')

@section('content')
    <section class="docs-heading">
        <div class="container">
            <p>Documentation</p>
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
