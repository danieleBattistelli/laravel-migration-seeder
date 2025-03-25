@section('title')
Train's_list
@endsection

@extends('layouts.master')

@section('content')
<div class="container">
    <h1 class="my-4">Lista dei Treni</h1>
    <div class="row">
        @foreach ($trains as $train)
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">{{ $train->company }}</h5>
                    <p class="card-text"><strong>Stazione di Partenza:</strong> {{ $train->departure_station }}</p>
                    <p class="card-text"><strong>Stazione di Arrivo:</strong> {{ $train->arrival_station }}</p>
                    <p class="card-text"><strong>Orario di Partenza:</strong> {{ $train->departure_time }}</p>
                    <p class="card-text"><strong>Orario di Arrivo:</strong> {{ $train->arrival_time }}</p>
                    <p class="card-text"><strong>Codice Treno:</strong> {{ $train->train_code }}</p>
                    <p class="card-text"><strong>Numero Carrozze:</strong> {{ $train->number_of_carriages }}</p>
                    <p class="card-text"><strong>In Orario:</strong> {{ $train->on_time ? 'Sì' : 'No' }}</p>
                    <p class="card-text"><strong>Cancellato:</strong> {{ $train->cancelled ? 'Sì' : 'No' }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
