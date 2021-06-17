@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach($dates as $date)
            {{$date->created_at}}
        @endforeach
    </div>
@endsection
