<x-dashboard.app>
    <x-slot name="header">
        <img
            src="assets/img/logo.png"
            alt="logo"
            class="logo"
        >
    </x-slot>

    <x-dashboard.wallet-card />

    <x-dashboard.stats />

    <!-- my cards -->
    <div class="section full mt-4">
        <div class="section-heading padding">
            <h2 class="title">My Cards</h2>
            <a
                href="app-cards.html"
                class="link"
            >View All</a>
        </div>

        <!-- carousel single -->
        <div
            class="carousel-single splide splide--loop splide--ltr splide--draggable is-active"
            id="splide01"
            style="visibility: visible;"
        >
            <div
                class="splide__track"
                id="splide01-track"
                style="padding-left: 16px; padding-right: 16px;"
            >
                <ul
                    class="splide__list"
                    id="splide01-list"
                    style="transform: translateX(-220px);"
                >


                </ul>
            </div>
        </div>
        <!-- * carousel single -->

    </div>
    <!-- * my cards -->

    <x-dashboard.transactions />


</x-dashboard.app>
