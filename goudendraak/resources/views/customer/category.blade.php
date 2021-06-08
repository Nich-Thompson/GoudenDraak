@extends('customer.layout')

@section('content')
    <h1 class="display-3">{{ $category->name }}</h1><br>
    <div class="menu-list">
        @foreach($dishes as $dish)
            <menu-item :dish="{{ $dish }}"></menu-item>
        @endforeach
    </div>
@endsection

<script>
    import MenuItem from "../../js/components/customer/MenuItem";

    export default {
        components: {MenuItem}
    }
</script>

{{--TODO: Remove this--}}
<style>
    .menu-list {
        max-height: 70vh;
        overflow-y: scroll;
    }
</style>
