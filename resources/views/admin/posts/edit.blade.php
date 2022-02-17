@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Modifica post: {{$post->title}}</div>

                <div class="card-body">
                    
                    <form action="{{route("posts.update", $post->id)}}" method="POST">
                        @csrf
                        @method("PUT")

                        <div class="form-group">
                            <label for="title">Titolo</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Inserisci titolo" value="{{old("title") ? old('title') : $post->title}}">
                            @error('title')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="content">Contenuto</label>
                            <textarea name="content" id="content" class="form-control @error('content') is-invalid @enderror" cols="30" rows="10" placeholder="Inserisci il contenuto del post">{{old('content') ? old('content') : $post->content}}</textarea>
                            @error('content')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group form-check">
                            @php
                                $published = old('published') ? old('published') : $post->published;
                            @endphp
                            <input type="checkbox" class="form-check-input @error('published') is-invalid @enderror" name="published" id="published" {{$published ? 'checked' : ''}}>
                            <label class="form-check-label" for="published">Pubblica</label>
                            @error('published')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>


                        <button type="submit" class="btn btn-primary">Modifica Post</button>

                    </form>


                </div>
            </div>
        </div>
    </div>
</div>

@endsection