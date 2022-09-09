@extends('layouts.layout')

@section('title', 'home')

@section('main-content')

    <div class="container">
        <h1>In partenza oggi</h1>
        <div class="row">
            @forelse ($trains as $train)

                @if ($train->departure_time==date("Y-m-d"))
                        <div class="card col-3" style="width: 18rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $train->departure_station }} - {{ $train->arrival_station }}</h5>
                                <p class="card-text">{{ $train->company }}</p>
                                <p class="card-text">{{ $train->is_in_time }}</p>
                                <p class="card-text">Data di partenza: {{ $train->departure_time }}</p>
                            </div>
                        </div>
                @endif
                @empty

            @endforelse
        </div>
    </div>



    <div class="container">
        <h1>In partenza nei prossimi giorni o già partiti</h1>
        <div class="row">
    @forelse ($trains as $train)

            @if ($train->departure_time!=date("Y-m-d"))
                <div class="card col-3" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $train->departure_station }} - {{ $train->arrival_station }}</h5>
                        <p class="card-text">{{ $train->company }}</p>
                        <p class="card-text">{{ $train->is_in_time }}</p>
                        <p class="card-text">Data di partenza: {{ $train->departure_time }}</p>
                    </div>
                </div>
            @endif


            @empty

            @endforelse
        </div>
    </div>



@endsection
