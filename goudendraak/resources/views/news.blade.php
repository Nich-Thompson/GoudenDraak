@extends('website')

@section("content")
    <website-content>
        @forelse($news as $item)
            <h3>{{$item->title}}</h3>
            <p>{{$item->body}}</p>
        @empty
            <h3>Er is op dit moment geen nieuws.</h3>
        @endforelse
    </website-content>
@endsection
