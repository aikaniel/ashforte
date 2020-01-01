<article class="card">
    <header class="card-header"> <a href="#">{{ $reply->user->name }}</a> said {{ $reply->created_at->diffForHumans() }}...</header>
    <section class="card-body">
        {{$reply->body}}
    </section>
</article>