<!-- Wallet Card -->
<div class="section wallet-card-section pt-1">
    <div class="wallet-card">
        <!-- Balance -->
        <div class="balance">
            <div class="left">
                <span class="title">Total Balance</span>
                <h1 class="total">$ {{ $user->balance }}.00</h1>
            </div>
            <div class="right">
                <a href="{{ route('deposit-methods') }}" class="button">
                    <ion-icon name="add-outline"></ion-icon>
                </a>
            </div>
        </div>
        <!-- * Balance -->
        <!-- Wallet Footer -->
        <div class="wallet-footer">
            <div class="item">
                <a href="#" data-bs-toggle="modal" data-bs-target="#withdrawActionSheet">
                    <div class="icon-wrapper bg-danger">
                        <ion-icon name="arrow-down-outline"></ion-icon>
                    </div>
                    <strong>Withdraw</strong>
                </a>
            </div>
            <div class="item">
                <a href="#" data-bs-toggle="modal" data-bs-target="#sendActionSheet">
                    <div class="icon-wrapper">
                        <ion-icon name="arrow-forward-outline"></ion-icon>
                    </div>
                    <strong>Send</strong>
                </a>
            </div>
            <div class="item">
                <a href="app-cards.html">
                    <div class="icon-wrapper bg-success">
                        <ion-icon name="card-outline"></ion-icon>
                    </div>
                    <strong>Cards</strong>
                </a>
            </div>
            <div class="item">
                <a href="#" data-bs-toggle="modal" data-bs-target="#exchangeActionSheet">
                    <div class="icon-wrapper bg-warning">
                        <ion-icon name="swap-vertical"></ion-icon>
                    </div>
                    <strong>Exchange</strong>
                </a>
            </div>

        </div>
        <!-- * Wallet Footer -->
    </div>
</div>
<!-- Wallet Card -->


<!-- Deposit Action Sheet -->
<div class="modal fade action-sheet" id="depositActionSheet"
tabindex="-1" role="dialog">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Add Balance</h5>
        </div>
        <div class="modal-body">
            <div class="action-sheet-content">
                <form>
                    <div class="form-group basic">
                        <div class="input-wrapper">
                            <label class="label" for="account1">From</label>
                            <select
                                class="form-control custom-select"
                                id="account1">
                                <option value="0">Savings (***
                                    5019)</option>
                                <option value="1">Investment
                                    (*** 6212)</option>
                                <option value="2">Mortgage (***
                                    5021)</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group basic">
                        <label class="label">Enter Amount</label>
                        <div class="input-group mb-2">
                            <span class="input-group-text"
                                id="basic-addona1">$</span>
                            <input type="text"
                                class="form-control"
                                placeholder="Enter an amount"
                                value="100">
                        </div>
                    </div>

                    <div class="form-group basic">
                        <button type="button"
                            class="btn btn-primary btn-block btn-lg"
                            data-bs-dismiss="modal">Deposit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<!-- * Deposit Action Sheet -->

<!-- Withdraw Action Sheet -->
<div class="modal fade action-sheet" id="withdrawActionSheet"
tabindex="-1" role="dialog">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Withdraw Money</h5>
        </div>
        <div class="modal-body">
            <div class="action-sheet-content">
                <form>
                    <div class="form-group basic">
                        <div class="input-wrapper">
                            <label class="label" for="account2d">From</label>
                            <select
                                class="form-control custom-select"
                                id="account2d">
                                <option value="0">Savings (***
                                    5019)</option>
                                <option value="1">Investment
                                    (*** 6212)</option>
                                <option value="2">Mortgage (***
                                    5021)</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group basic">
                        <div class="input-wrapper">
                            <label class="label" for="text11d">To</label>
                            <input type="email"
                                class="form-control"
                                id="text11d"
                                placeholder="Enter IBAN">
                            <i class="clear-input">
                                <ion-icon name="close-circle"
                                    role="img"
                                    class="md hydrated"
                                    aria-label="close circle"></ion-icon>
                            </i>
                        </div>
                    </div>

                    <div class="form-group basic">
                        <label class="label">Enter Amount</label>
                        <div class="input-group mb-2">
                            <span class="input-group-text"
                                id="basic-addonb1">$</span>
                            <input type="text"
                                class="form-control"
                                placeholder="Enter an amount"
                                value="100">
                        </div>
                    </div>

                    <div class="form-group basic">
                        <button type="button"
                            class="btn btn-primary btn-block btn-lg"
                            data-bs-dismiss="modal">Withdraw</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<!-- * Withdraw Action Sheet -->

@livewire('send-money')

<!-- Exchange Action Sheet -->
<div class="modal fade action-sheet" id="exchangeActionSheet"
tabindex="-1" role="dialog">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Exchange Money</h5>
        </div>
        <div class="modal-body">
            <div class="action-sheet-content">
                <form>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label"
                                        for="currency1">From</label>
                                    <select
                                        class="form-control custom-select"
                                        id="currency1">
                                        <option value="1">EUR</option>
                                        <option value="2">USD</option>
                                        <option value="3">AUD</option>
                                        <option value="4">CAD</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label"
                                        for="currency2">To</label>
                                    <select
                                        class="form-control custom-select"
                                        id="currency2">
                                        <option value="1">USD</option>
                                        <option value="1">EUR</option>
                                        <option value="2">AUD</option>
                                        <option value="3">CAD</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group basic">
                        <label class="label">Enter Amount</label>
                        <div class="input-group mb-2">
                            <span class="input-group-text"
                                id="basic-addon2">$</span>
                            <input type="text"
                                class="form-control"
                                placeholder="Enter an amount"
                                value="100">
                        </div>
                    </div>

                    <div class="form-group basic">
                        <button type="button"
                            class="btn btn-primary btn-block btn-lg"
                            data-bs-dismiss="modal">Exchange</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<!-- * Exchange Action Sheet -->
