@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Sales rapporten</h1>
        @foreach($sheets as $sheet)
            <p><a href="{{route('getSalesFile', $sheet)}}"
                  title="Rapport downloaden">{{$sheet}}</a></p>
        @endforeach
    </div>
@endsection
