@extends('layouts.app')

@section('content')

<div class="line">
    <div class="container">
        <img src="{{ $comic->thumb }}">
    </div>
</div>

<div class="container">
    <div class="row d-flex justify-content-between my-4">
        <div class="col-8 spec my-3">
            <div class="title my-2">
                {{ $comic->title }}
            </div>
            <div class="green-bar d-flex">
                <div class="col-8 my-border p-2">
                    U.S. Price: <span class="white">{{ $comic->price }}</span>
                </div>
                <div class="col-4 my-border p-2">
                    <span class="white">Check Availability</span>
                </div>
            </div>
            <div class="desc my-2">
                {{ $comic->description }}
            </div>
        </div>
        <div class="col-4 adv text-end">
            advertisement
            <img src="{{ Vite::asset('resources/img/adv.jpg') }}">
        </div>
    </div>
</div>

@endsection