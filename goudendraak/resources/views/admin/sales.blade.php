@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>Medewerkers
                    <a class="btn btn-outline-primary float-right"
                       href="{{ route('medewerkers.create') }}">
                        +Toevoegen
                    </a>
                </h1>
            </div>
        </div>
    </div>
@endsection
