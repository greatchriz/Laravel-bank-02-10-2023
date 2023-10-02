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
            <h1 class="title">$ 1,256,90</h1>
        </div>
        <div class="in">
            <div class="card-number">
                <span class="label">Card Number</span>
                {{ $atmCardDetail->card_number }}
            </div>
            <div class="bottom">
                <div class="card-expiry">
                    <span class="label">Expiry</span>
                    12 / 25
                </div>
                <div class="card-ccv">
                    <span class="label">CCV</span>
                    553
                </div>
            </div>
        </div>
    </div>
</div>
<!-- * card block -->
