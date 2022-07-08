@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('admin.posts.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="title">Titolo del Post</label>
            <input type="text" value="{{old('title')}}"
                class="form-control @error('name') is-invalid @enderror"
                id="title" name="title"
                placeholder="Scrivi qualcosa"
            >
            @error('title')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="content">Contenuto del Post</label>
            <textarea type="text"
                    class="form-control @error('name') is-invalid @enderror"
                    id="content" name="content"
                    placeholder="Scrivi qualcosa"
            >{{old('content')}}
            </textarea>
            @error('content')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
