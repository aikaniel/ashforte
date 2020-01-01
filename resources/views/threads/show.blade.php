@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <article class="card">
            <header class="card-header"><h3><a href="#">{{ $thread->user->name }}</a> posted: {{$thread->title}}</h3></header>
                <section class="card-body">
                    {{$thread->body}}
                </section>
                <section class="container-fluid">
                    @foreach ($thread->replies as $reply)
                        @include('threads.reply')
                    @endforeach
                </section>
            </article>
        </div>
    </div>
</div>
@endsection
