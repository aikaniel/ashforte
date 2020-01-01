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
                @if (auth()->check())
                <section class="container-fluid col-md-10 pt-2 form-group">
                    <form class="card" action="{{ $thread->path().'/replies' }}" method="post">
                        @csrf
                        <header class="card-header">Reply</header>
                        <body class="card-body form-control">
                            <textarea name="body" id="body" cols="30" rows="10" placeholder="Have something to say?"></textarea>
                            <button type="submit" class="btn btn-primary col-2">Post</button>
                        </body>
                    </form>
                </section>
                @else
                <p class=" text-center">Please <a href="{{ route('login') }}"> sign in </a> to participate in this discusion.</p>
                @endif
            </article>
        </div>
    </div>
</div>
@endsection
