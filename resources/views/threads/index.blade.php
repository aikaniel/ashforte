@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <article class="card">
                <header class="card-header"><h3>Forum Threads</h3></header>
                <section class="card-body">
                    @foreach ($threads as $thread)
                        <article>
                            <h4>
                                <a href="{{ $thread->path() }}">{{ $thread->title }}</a>                                
                            </h4>
                            <p>
                                {{ $thread->body }}
                            </p>
                            <hr>
                        </article>
                    @endforeach
                </section>
            </article>
        </div>
    </div>
</div>
@endsection
