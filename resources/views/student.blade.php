@section('title')
Studen's_list
@endsection

@extends('layouts.master')

@section('content')
<div class="container">
    <h1 class="my-4">Lista degli Studenti</h1>
    <div class="row">
        @foreach ($students as $student)
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">

                    <p class="card-text"><strong>Nome dello Studente:</strong> {{ $student->name}}</p>
                    <p class="card-text"><strong>Cognome dello Studente:</strong> {{ $student->last_name }}</p>

                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
