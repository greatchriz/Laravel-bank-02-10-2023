<div>
    <!-- Search Component -->

            <div class="form-group searchbox">
                <input
                    wire:model.live="search"
                    type="text"
                    class="form-control"
                    placeholder="Search..."
                >
                <i class="input-icon icon ion-ios-search"></i>
                <a
                    href="#"
                    class="ms-1 close toggle-searchbox"
                ><i class="icon ion-ios-close-circle"></i></a>
            </div>

        <ul class="listview simple-listview inset">
            @foreach ($accountNumbers as $accountNumber)
                <li>{{ $accountNumber->name }}</li>
            @endforeach
        </ul>


</div>
