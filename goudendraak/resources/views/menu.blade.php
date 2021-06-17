@extends('website')

@section("content")
    <website-content>
        <p>Download een PDF van het menu <a href="/menu/download" class="menu-download">hier</a>.</p>
        <img :src="'/img/restaurant-menukaart-1-2.jpg'" class="menu-img"/>
        <img :src="'/img/restaurant-menukaart-1.jpg'" class="menu-img"/>
    </website-content>
@endsection
