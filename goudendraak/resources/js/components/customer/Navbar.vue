<template>
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container-fluid">
            <!--Scrollable Navbar-->
            <div class="scrolling-wrapper flex-row flex-nowrap">
                <a class="navbar-brand navbar-block" href="{{ route('klant.index') }}">
                    Soep
                </a>
                <a class="navbar-brand navbar-block" href="{{ route('klant.index') }}">
                    Voorgerechten
                </a>
                <a class="navbar-brand navbar-block" href="{{ route('klant.index') }}">
                    Bami & Nasi
                </a>
                <a class="navbar-brand navbar-block" href="{{ route('klant.index') }}">
                    Combinatie
                </a>
                <a class="navbar-brand navbar-block" href="{{ route('klant.index') }}">
                    Mihoen
                </a>
                <a class="navbar-brand navbar-block" href="{{ route('klant.index') }}">
                    Chinese Bami
                </a>
                <a class="navbar-brand navbar-block" href="{{ route('klant.index') }}">
                    Indisch
                </a>
                <a class="navbar-brand navbar-block" href="{{ route('klant.index') }}">
                    Ei
                </a>
                <a class="navbar-brand navbar-block" href="{{ route('klant.index') }}">
                    Groenten
                </a>
                <a class="navbar-brand navbar-block" href="{{ route('klant.index') }}">
                    Vlees
                </a>
                <a class="navbar-brand navbar-block" href="{{ route('klant.index') }}">
                    Kip
                </a>
                <a class="navbar-brand navbar-block" href="{{ route('klant.index') }}">
                    Garnalen
                </a>
                <a class="navbar-brand navbar-block" href="{{ route('klant.index') }}">
                    Ossenhaas
                </a>
                <a class="navbar-brand navbar-block" href="{{ route('klant.index') }}">
                    Vis
                </a>
                <a class="navbar-brand navbar-block" href="{{ route('klant.index') }}">
                    Peking Eend
                </a>
                <a class="navbar-brand navbar-block" href="{{ route('klant.index') }}">
                    Tiepan Specialiteiten
                </a>
                <a class="navbar-brand navbar-block" href="{{ route('klant.index') }}">
                    Vegetarisch
                </a>
                <a class="navbar-brand navbar-block" href="{{ route('klant.index') }}">
                    Kindermenu's
                </a>
                <a class="navbar-brand navbar-block" href="{{ route('klant.index') }}">
                    Rijsttafels
                </a>
            </div>
            <!--Order button-->
            <a class="navbar-brand order-button" href="{{ route('klant.index') }}">
                Bestel
            </a>
        </div>
    </nav>
</template>

<script>
export default {
    name: "Navbar",
}
</script>

<style scoped>
.scrolling-wrapper {
    overflow-x: auto;
    padding-bottom: 1rem;
    padding-top: 1rem;
}

.navbar-block {
    background-color: #cbd5e0;
    padding: 1rem 1.5rem;
    border-radius: 10px;
    font-size: 30px;
}

::-webkit-scrollbar {
    display: none;
}

.order-button {
    margin-left: 2rem;
    background-color: #7dcbff;
    padding: 1rem 1.5rem;
    border-radius: 10px;
    font-size: 30px;
}
</style>
