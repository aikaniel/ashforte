@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <article class="card">
                <header class="card-header"><h3>{{$thread->title}}</h3></header>
                <section class="card-body">
                    {{$thread->body}}
                </section>
                <section class="container-fluid">
                    @foreach ($thread->replies as $reply)
                    <article class="card">
                        <header class="card-header"> <a href="#">{{ $reply->user->name }}</a> said {{ $reply->created_at->diffForHumans() }}...</header>
                        <section class="card-body">
                            {{$reply->body}}
                        </section>
                    </article>
                    @endforeach
                </section>
            </article>
        </div>
    </div>
</div>
@endsection
