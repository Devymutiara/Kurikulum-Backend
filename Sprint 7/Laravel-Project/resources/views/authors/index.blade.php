@extends('layouts.app')

@section('content')

<!-- Modal -->
{{-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Introduce Yourself</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/authors/store" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" name="name" id="name"
                            class="form-control @error('name') is-invalid @enderror">
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="age">Age</label>
                        <input type="number" name="age" id="age"
                            class="form-control @error('age') is-invalid @enderror">
                        @error('age')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="post_id">Number of content</label>
                        <select class="form-control" name="post_id" id="post_id">
                            @foreach ($data['post'] as $post)
                                <option value="{{ $post['id'] }}">{{ $post['title'] }}</option>
                            @endforeach
                        </select>
                        @error('post_id')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Add</button>
                </form>
            </div>
        </div>
    </div>
</div> --}}

@if ($data['authors']->count())
<div class="d-flex justify-content-between">
    <div>
        <h4><b>Authors</b></h4>
        <hr class="mb-4">
    </div>
    <div>
        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">
            Add author
        </button>
    </div>
</div>
<div class="row">
    @foreach ($data['authors'] as $author)
    <div class="col-md-4">
        <div class="card mb-4">
            {{-- <div class="card-body">
                <h4>Name : {{ $author->name }}</h4>
                <h4>Age : {{ $author->age }}</h4>
            </div>
            <div class="card-footer d-flex justify-content-between">

                <form action="/authors/{{ $author->id }}/delete" method="POST" class="d-inline">
                    @csrf
                    @method('delete')
                    <button class="badge badge-sm badge-danger" style="border-style: none" onclick="return confirm('Are you sure to delete this post? This will be deleted permanently.');">Delete post
                </button>
                </form>

            </div> --}}
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><a href="/authors/{{ $author->id }}" class="text-decoration-none">{{ $author->name }}</a></li>
        </div>
    </div>
    @endforeach
</div>
<div class="d-flex justify-content-center">
    {{ $data['authors']->links() }}
</div>
@else
<div>
    {{-- <a href="/posts/create" class="btn btn-warning">Add Post</a> --}}
    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">
        Add author
    </button>
</div>
<br>
<div class="alert alert-info">
    There's no author.
</div>
@endif
</div>

@stop
