<x-dashboard.app>
    <x-slot name="header">
        <img src="assets/img/logo.png" alt="logo" class="logo">
    </x-slot>

    <x-dashboard.wallet-card />

    <x-dashboard.stats />

    <div class="section mt-3">
        <div class="section-heading">
            <h2 class="title">Payment Methods</h2>
            <a href="app-transactions.html" class="link">View All</a>
        </div>
        <div class="row">
            <div class="col">
                <div class="card card-with-icon">
                    <div class="card-body pt-3 pb-3 text-center">
                        <div class="card-icon bg-success mb-2">
                            <ion-icon name="link" role="img" class="md hydrated" aria-label="link"></ion-icon>
                        </div>
                        <h3 class="card-titlde mb-1">Refer a Friend</h3>

                        <p>Invite your friends and earn prizes!</p>
                        <div class="row">
                            <div class="col">
                                <a href="#" class="btn btn-secondary">
                                    <ion-icon name="copy-outline" role="img" class="md hydrated" aria-label="copy outline"></ion-icon>
                                    Invite now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>            </div>
            <div class="col">
                <div class="card card-with-icon">
                    <div class="card-body pt-3 pb-3 text-center">
                        <div class="card-icon bg-success mb-2">
                            <ion-icon name="link" role="img" class="md hydrated" aria-label="link"></ion-icon>
                        </div>
                        <h3 class="card-titlde mb-1">Refer a Friend</h3>

                        <p>Invite your friends and earn prizes!</p>
                        <div class="row">
                            <div class="col">
                                <a href="#" class="btn btn-secondary">
                                    <ion-icon name="copy-outline" role="img" class="md hydrated" aria-label="copy outline"></ion-icon>
                                    Invite now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>            </div>
        </div>

    </div>

    <x-dashboard.transactions />


</x-dashboard.app>
