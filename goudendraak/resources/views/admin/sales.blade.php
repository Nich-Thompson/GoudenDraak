@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>Sales rapporten</h1>
                @foreach($sheets as $sheet)
                    <p><a href="{{route('getSalesFile', $sheet)}}"
                          title="Rapport downloaden">{{$sheet}}</a></p>
                @endforeach
            </div>
        </div>
    </div>
@endsection
