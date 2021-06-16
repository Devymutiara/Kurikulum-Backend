@extends('layouts.app')

@section('content')

<!-- Add Modal -->
<div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Authors Profile</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/identities/store" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
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
                        <label for="address">Address</label>
                        <input type="text" name="address" id="address"
                            class="form-control @error('address') is-invalid @enderror">
                        @error('address')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email"
                            class="form-control @error('email') is-invalid @enderror">
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="number" name="phone" id="phone"
                            class="form-control @error('phone') is-invalid @enderror">
                        @error('phone')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="post_id">What has th Author written</label>
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
</div>


<!-- Update Modal -->
<div class="modal fade" id="modal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Authors Profile</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/identities/update" method="POST">
                    @method('patch')
                    @csrf
                    
                    @foreach ($data['identities'] as $identity)
                        
                    
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" value="{{ old('name') ?? $identity->author->name}}"
                            class="form-control @error('name') is-invalid @enderror">
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror

                    
                        <label for="age">Age</label>
                        <input type="number" name="age" id="age" value="{{ old('age') ?? $identity->author->age}}"
                            class="form-control @error('age') is-invalid @enderror">
                        @error('age')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror

                    
                        <label for="address">Address</label>
                        <textarea name="address" id="address"
                            class="form-control @error('address') is-invalid @enderror">{{ old('address') ?? $identity->address}}</textarea>
                        @error('address')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror

                    
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" value="{{ old('email') ?? $identity->email}}"
                            class="form-control @error('email') is-invalid @enderror">
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror

                    
                        <label for="phone">Phone</label>
                        <input type="number" name="phone" id="phone" value="{{ old('phone') ?? $identity->phone}}"
                            class="form-control @error('phone') is-invalid @enderror">
                        @error('phone')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror

                    
                        <label for="post_id">What has the Author written</label>
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
                        @endforeach
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Add</button>
            </form>
            </div>
        </div>
    </div>
</div>

@if ($data['identities']->count())
<div class="d-flex justify-content-between">
    <div>
        <h4><b>Our Authors</b></h4>
        <hr class="mb-4">
    </div>
    <div>
        <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal1">
            Add profile
        </button>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-4 p-0">
            <div class="list-group" id="list-tab" role="tablist" style="overflow-y: scroll; height: 450px">
                @foreach ($data['identities'] as $identity)
                <a class="list-group-item list-group-item-action"
                    id="list-{{ str_replace(' ', '', $identity->author->name) }}-list" data-toggle="list"
                    href="#list-{{ str_replace(' ', '', $identity->author->name) }}" role="tab"
                    aria-controls="{{ str_replace(' ', '', $identity->author->name) }}">{{ $identity->author->name }}</a>
                @endforeach
            </div>
        </div>
        <div class="col-8 p-0 border rounded-right d-flex align-items-center justify-content-center">
            <div class="tab-content" id="nav-tabContent">
                @foreach ($data['identities'] as $identity)
                <div class="tab-pane fade" id="list-{{ str_replace(' ', '', $identity->author->name) }}" role="tabpanel"
                    aria-labelledby="list-{{ str_replace(' ', '', $identity->author->name) }}-list">
                    {{-- <div class="card">
                        <div class="card-body"> --}}
                    <pre>
            Name : {{ $identity->author->name }} <br>
            Age : {{ $identity->author->age }} <br>
            Address : {{ $identity->address }} <br>
            Email : {{ $identity->email }} <br>
            Phone number : {{ $identity->phone }}
                            </pre>
                    {{-- </div>
                    </div> --}}
                    <a href="/identities/{{ $identity->id }}/edit" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal2">
                        update profile
                    </a>
                    <a href="/identities/{{ $identity->id }}/delete" class="btn btn-danger btn-sm">
                        delete profile
                    </a>
                </div>
                @endforeach
            </div>
        </div>

    </div>
</div>
    @else
<div>
    {{-- <a href="/posts/create" class="btn btn-warning">Add Post</a> --}}
    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal1">
        Add author
    </button>
</div>
<br>
<div class="alert alert-info">
    There's no author.
</div>
@endif
</div>
{{-- <script>
    $(document).ready(function () {
    $('.row .col-8 .tab-content pre').click(function(e) {

        $('.row .col-8 .tab-content div.active').removeClass('active');

        var $parent = $(this).parent();
        $parent.addClass('active');
        e.preventDefault();
    });
});
</script> --}}
{{-- @stop --}}
@endsection
