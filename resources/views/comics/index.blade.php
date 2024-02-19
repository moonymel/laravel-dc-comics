@extends('layouts.app')

@section('content')   

<main>
        <div class="container">
            <div class="title-one px-2 py-1 text-center">
                current series
            </div>
            <div class="row py-4">
                @foreach ($comics as $comic)
                <div class="col-2 my-card my-3">
                    <div class="image">
                        <img src="{{ $comic['thumb'] }}">
                    </div>
                    <a href="{{ route('comics.show', ['comic' => $comic->id]) }}">{{ $comic['title'] }}</a>
                </div>
                @endforeach
            </div>
            <div class="load">
            <button>load more</button>
        </div>
        </div>

        <div class="blue-line">
            <div class="container d-flex justify-content-between">
                @foreach ($bluesections as $section)
                <div class="section">
                    <img src="{{ Vite::asset($section['image']) }}" class="{{ $section['title'] == 'DC Power Visa' ? 'visa' : '' }}">
                    {{ $section['title'] }}
                </div>
                @endforeach
            </div>
            
        </div>
    </main>
 @endsection