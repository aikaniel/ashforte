@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <header class="card-header"><h3>Forum Threads</h3></header>

                <article class="card-body">
                    @foreach ($threads as $thread)
                        <section>
                            <header>
                                <h4>
                                    <a href="/threads/{{ $thread->id }}">{{ $thread->title }}</a>                                
                                </h4>
                            </header>
                            <body>
                                {{ $thread->body }}
                            </body>
                        </section>
                        <hr>
                    @endforeach
            </article>
        </div>
    </div>
</div>
@endsection
