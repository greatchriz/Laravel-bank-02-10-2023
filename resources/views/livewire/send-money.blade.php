
<div>
    <!-- Send Action Sheet -->
    <div
        class="modal fade action-sheet"
        id="sendActionSheet"
        tabindex="-1"
        role="dialog"
    >
        <div
            class="modal-dialog"
            role="document"
        >
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Send Money</h5>
                </div>
                <div class="modal-body">
                    <div class="action-sheet-content">
                        <form>
                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label
                                        class="label"
                                        for="account2"
                                    >From</label>
                                    <input
                                        wire:model="senderAccountNumber"
                                        type="text"
                                        class="form-control"
                                        id="sender-account"
                                        value="{{ $user->account_number }}"
                                    >
                                    {{-- <select
                                        class="form-control custom-select"
                                        id="account2"
                                    >
                                        <option value="0">Savings (***
                                            5019)</option>
                                        <option value="1">Investment
                                            (*** 6212)</option>
                                        <option value="2">Mortgage (***
                                            5021)</option>
                                    </select> --}}
                                </div>
                            </div>


                            @livewire('search-account-number')

                            <div class="form-group basic">
                                <label class="label">Enter Amount</label>
                                <div class="input-group mb-2">
                                    <span
                                        class="input-group-text"
                                        id="basic-addon1"
                                    >$</span>
                                    <input
                                        wire:model="amount"
                                        type="text"
                                        class="form-control"
                                        placeholder="Enter an amount"
                                        value="100.00"
                                    >
                                </div>
                            </div>

                            <div class="form-group basic">
                                <button
                                    wire:click.prevent="send"
                                    type="button"
                                    class="btn btn-primary btn-block btn-lg"
                                    data-bs-dismiss="modal"
                                >Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- * Send Action Sheet -->
</div>
