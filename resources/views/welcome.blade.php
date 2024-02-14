@extends('layout.app')
@section('content')

    <div class="container">
        <div class="row d-flex">

            @foreach ($movies as $movie)
                <div class="col-3 my-2 ">
                    <div class="card_">
                        <div class="container_">
                            <h4>Title:<b>{{ $movie['title'] }}</b></h4>
                            <h5>Original Title: {{ $movie['original_title'] }}</h5>
                            <h5>Nationality:{{ $movie['nationality'] }}</h5>
                            <h5>Date: {{ $movie['date'] }}</h5>
                            <h5>Vote: {{ $movie['vote'] }}</h5>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

    </div>
