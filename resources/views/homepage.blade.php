@extends('layout.app')

@section('content')      
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
                    {{ $comic['title'] }}
                </div>
                @endforeach
            </div>
            <div class="load">
            <button>load more</button>
        </div>
        </div>
 @endsection