@props(['atmCardDetail'])



<!-- card block -->
 <div class="card-block mb-2">
    <div class="card-main">
        <div class="card-button dropdown">
            <button
                type="button"
                class="btn btn-link btn-icon"
                data-bs-toggle="dropdown"
            >
                <ion-icon name="ellipsis-horizontal"></ion-icon>
            </button>
            <div class="dropdown-menu dropdown-menu-end">
                <a
                    class="dropdown-item"
                    href="#"
                >
                    <ion-icon name="pencil-outline"></ion-icon>Edit
                </a>
                <a
                    class="dropdown-item"
                    href="#"
                >
                    <ion-icon name="close-outline"></ion-icon>Remove
                </a>
                <a
                    class="dropdown-item"
                    href="#"
                >
                    <ion-icon name="arrow-up-circle-outline"></ion-icon>Upgrade
                </a>
            </div>
        </div>
        <div class="balance">
            <span class="label">BALANCE</span>
            <h1 class="title">{{ $atmCardDetail->card_balance }}</h1>
        </div>
        <div class="in">
            <div class="card-number">
                @php
                    $cardNumber = $atmCardDetail->card_number;
                    $maskedNumber = str_repeat('*', strlen($cardNumber) - 4) . substr($cardNumber, -4);
                @endphp
                <span class="label">Card Number</span>
                {{ $maskedNumber }}
            </div>
            <div class="bottom">
                <div class="card-expiry">
                    <span class="label">Expiry</span>
                   {{ $atmCardDetail->card_expiry_date }}
                </div>
                <div class="card-ccv">
                    <span class="label">CCV</span>
                    {{ $atmCardDetail->card_cvv }}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- * card block -->
