@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <header class="card-header"><h3>{{$thread->title}}</h3></header>

                <article class="card-body">
                    {{$thread->body}}
                </article>
            </div>
        </div>
    </div>
</div>
@endsection
