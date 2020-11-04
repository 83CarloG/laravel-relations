@extends('layouts.app')

@section('position')
    {{ $comic->title }}
@endsection
@section('content')
            <div class="d-flex flex-column text-center justify-content-center align-items-center">

                        <div class="card mt-2 card-body h-100" style="width: 30rem;">
                            <img class="card-img-top index__card" src="{{ $comic->cover }}" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">{{ $comic->title }}</h4>
                                <p class="card-text index__show">Author: {{ $comic->author }}</p>
                                <p class="card-text index__show">Number: {{ $comic->number }}</p>
                                <p class="card-text index__show">Pages: {{ $comic->n_pages }}</p>
                                <p class="card-text index__show">Edition: {{ $comic->edition }}</p>
                                <p class="card-text index__show">Year: {{ $comic->release }}</p>
                                <p class="card-text index__show">Price: {{ $comic->price }}</p>
                                <p class="card-text index__show">{{ $comic->description }}</p>
                            </div>
                        </div>
            </div>
@endsection

