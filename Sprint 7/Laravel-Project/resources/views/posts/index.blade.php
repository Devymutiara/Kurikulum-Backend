@extends('layouts.app')

@section('content')

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Write a post</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/posts/store" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title"
                            class="form-control @error('title') is-invalid @enderror">
                        @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="body">Body</label>
                        <textarea name="body" id="body"
                            class="form-control @error('body') is-invalid @enderror"></textarea>
                        @error('body')
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
</div>

@if ($posts->count())
<div class="d-flex justify-content-between">
    <div>
        <h4><b>All Post</b></h4>
        <hr class="mb-4">
    </div>
    <div>
        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">
            Add post
        </button>
    </div>
</div>
<div class="row">
    @foreach ($posts as $post)
    <div class="col-md-4">
        <div class="card mb-4">
            <div class="card-header">
                <b>{{ $post->title }}</b>
            </div>
            <div class="card-body">
                <div>{{ Str::limit($post->body, 100, '~~')  }}</div>
                <br>
                <a href="/posts/{{ $post->slug }}">Read more</a>
            </div>
            <div class="card-footer d-flex justify-content-between">
                Published on {{ $post->created_at->format("d F, Y") }}

                <form action="/posts/{{ $post->id }}/delete" method="POST" class="d-inline">
                    @csrf
                    @method('delete')
                    <button class="badge badge-sm badge-danger" style="border-style: none" onclick="return confirm('Are you sure to delete this post? This will be deleted permanently.');">Delete post
                </button>
                </form>

            </div>
        </div>
    </div>
    @endforeach
</div>
<div class="d-flex justify-content-center">
    {{ $posts->links() }}
</div>
@else
<div>
    {{-- <a href="/posts/create" class="btn btn-warning">Add Post</a> --}}
    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">
        Add post
    </button>
</div>
<br>
<div class="alert alert-info">
    No post to read.
</div>
@endif
</div>

@stop
