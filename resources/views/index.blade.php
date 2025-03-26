@section('title')
Train's_list
@endsection

@extends('layouts.master')

@section('content')
<div class="container">
    <h1 class="my-4">Lista dei Treni</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Azienda</th>
                <th>Stazione di Partenza</th>
                <th>Stazione di Arrivo</th>
                <th>Orario di Partenza</th>
                <th>Orario di Arrivo</th>
                <th>Codice Treno</th>
                <th>Numero Carrozze</th>
                <th>In Orario</th>
                <th>Cancellato</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($trains as $train)
            <tr>
                <td>{{ $train->company }}</td>
                <td>{{ $train->departure_station }}</td>
                <td>{{ $train->arrival_station }}</td>
                <td>{{ $train->departure_time }}</td>
                <td>{{ $train->arrival_time }}</td>
                <td>{{ $train->train_code }}</td>
                <td>{{ $train->number_of_carriages }}</td>
                <td>{{ $train->on_time ? 'Sì' : 'No' }}</td>
                <td>{{ $train->cancelled ? 'Sì' : 'No' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
