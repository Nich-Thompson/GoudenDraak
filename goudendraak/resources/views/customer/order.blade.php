@extends('customer.layout')

@section('content')
    <div class="col">
        <span class="display-3">Uw Bestelling</span>
        <button class="btn final-order-button finalize-button" id="copyButton">Kopiëer vorige bestelling</button>
    </div>
    <br>
    <div class="item-list">
        <div id="itemList">
        </div>
        <br>
        <form action="{{ route('postOrder') }}" method="post">
            @csrf
            <label for="orderInput"></label><input type="text" name="order" id="orderInput" value="" hidden>
            <!--Value is set in js-->
            <input type="number" name="table" class="table-number finalize-button" placeholder="Tafelnummer" required min="1">
            <br><br><br><br><br>
            <button type="submit" class="btn finalize-button final-order-button" id="finalizeButton">
                Bestellen
            </button>
        </form>
    </div>

@endsection

<script src={{ asset('../js/order.js') }} defer></script>
