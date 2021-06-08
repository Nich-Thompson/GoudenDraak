@extends('customer.layout')

@section('content')
    <h1 class="display-3">{{ $category->name }}</h1><br>
    @foreach($dishes as $dish)
        <menu-item :dish="{{ $dish }}"></menu-item>
    @endforeach
@endsection
<script>
    import MenuItem from "../../js/components/customer/MenuItem";
    import Navbar from "../../js/components/customer/Navbar";
    export default {
        components: {Navbar, MenuItem}
    }
</script>
