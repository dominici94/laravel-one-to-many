@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{$post->title}}</div>

                <div class="card-body">
                    <div class="mb-3">
                        Stato:
                        @if ($post->published)
                            <span class="badge badge-success">Pubblicato</span> 
                        @else
                        <span class="badge badge-secondary">Bozza</span>
                        @endif
                    </div>
                    {{$post->content}}

                </div>
            </div>
        </div>
    </div>
</div>

@endsection