<div>
    <!-- Search Component -->

    <div class="form-group basic">
        <div class="input-wrapper">
            <label
                class="label"
                for="search_account"
            >To</label>
            <input
                wire:model.live="search"
                type="text"
                class="form-control"
                id="search_account"
                placeholder="Enter Account Number"
            >
            <i class="clear-input">
                <ion-icon
                    name="close-circle"
                    role="img"
                    class="md hydrated"
                    aria-label="close circle"
                ></ion-icon>
            </i>
        </div>
    </div>

    <select
        wire:model="receiverAccountNumber"
        class="form-control custom-select"
        id="account2"
    >
        @foreach ($accountNumbers as $accountNumber)
        <option
            wire:key="{{ $accountNumber->id }}"
            value="{{ $accountNumber->id }}"
        >{{ $accountNumber->name }}</option>

        @endforeach


    </select>



</div>
