@extends('layouts.app')
@section('title', $post->title)
@section('content')

    <div class="container">

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit a post</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="/posts/{{ $post->slug }}/update" method="POST">
                            @method('patch')
                            @csrf
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" id="title" value="{{ old('title') ?? $post->title }}"
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
                                    class="form-control @error('body') is-invalid @enderror">{{ old('body') ?? $post->body }}</textarea>
                                @error('body')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-between">
            <div>
                <h3 class="mb-4"><b>{{ $post->title }}</b></h3>
            </div>
            <div>
                <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#exampleModal">
                    Update post
                </button>
                
                <form action="/posts/{{ $post->id }}/delete" method="POST" class="d-inline">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure to delete this post? This will be deleted permanently.');">Delete post
                </button>
                </form>
                    
            </div>
        </div>
        
        <p>{{ $post->body }}</p>
    </div>
    
@endsection