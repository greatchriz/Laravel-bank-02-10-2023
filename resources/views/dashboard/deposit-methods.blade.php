<x-dashboard.app>

    <x-slot name="header">
        Add Funds
    </x-slot>
    <ul class="listview image-listview inset mt-2">
        <li>
            <div class="item">
                <div class="icon-box bg-primary">
                    <ion-icon name="storefront-outline" role="img" class="md hydrated" aria-label="storefront outline"></ion-icon>
                </div>


                <div class="in">
                    <div>
                        <header style="font-weight: bolder">Via Bank Transfer</header>
                        <footer>Free Instant Bank Transfer</footer>
                    </div>
                </div>
            </div>
        </li>

        <li>
            <div class="item">

                <div class="in">
                    <div>
                        <header>
                            <h6 style="font-weight: bolder">Crownagent Account Number</h6>
                        </header>
                        <footer>
                            <h4 class="lead">{{ $user->account_number }}
                                <span class="text-primary">
                                    <ion-icon name="copy-outline"></ion-icon>
                                </span>

                            </h4>

                        </footer>
                    </div>
                </div>
            </div>
        </li>

    </ul>



    <ul class="listview image-listview inset mt-2">
        <li>
            <a
                href="#"
                class="item"
            >

                <div class="item">
                    <div class="icon-box bg-primary">
                        <ion-icon name="card-outline"></ion-icon>
                    </div>


                    <div class="in">
                        <div>
                            <header style="font-weight: bolder">Top-up with Credit Card</header>
                            <footer>Add Money from your Credit Card</footer>
                        </div>
                    </div>
                </div>
            </a>
        </li>
    </ul>

    <ul class="listview image-listview inset mt-2">
        <li>
            <a
                href="#"
                class="item"
            >
                <div class="item">
                    <div class="icon-box bg-primary">
                        <ion-icon name="logo-bitcoin"></ion-icon>
                    </div>


                    <div class="in">
                        <div>
                            <header style="font-weight: bolder">Top-up with Cryptocurrency</header>
                            <footer>Add Money from your Cryptocurrency Wallet</footer>
                        </div>
                    </div>
                </div>
            </a>
        </li>
    </ul>

</x-dashboard.app>
