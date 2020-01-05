@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <article class="card">
                <header class="card-header"><h3>Create a New Thread</h3></header>
                <section class="card-body">
                    <form action="/threads" method="post">
                        @csrf
                        <label for="title">Title:</label>
                        <input type="text" class=" form-control" id = "title" name="title">
                        <label for="body">Body:</label>
                        <textarea name="body" id="body" cols="30" rows="10" class="form-control"></textarea>
                        <button type="submit" class="btn btn-primary">Publish</button>
                    </form>
                </section>
            </article>
        </div>
    </div>
</div>
@endsection
