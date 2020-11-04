@extends('layouts.app')

@section('position')
    index
@endsection
@section('content')
    <div class="container index">
        <div class="row">
            @foreach ($comics as $comic)
            {{-- Card --}}
                <div class="col-sm d-flex position-relative">
                    <div class="card mt-2 card-body flex-fill" style="width: 20rem;">
                        <img class="card-img-top" src="{{ $comic->cover }}" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">{{ $comic->title }}</h4>
                            <p class="card-text index__text">{{ $comic->description }}</p>
                            <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-info position-absolute fixed-bottom index__info">info</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
