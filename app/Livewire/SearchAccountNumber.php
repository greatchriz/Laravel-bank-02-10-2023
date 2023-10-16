<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;


class SearchAccountNumber extends Component
{
    // public $userAccountNumber = '';
    public $search = '';


    public function render()
    {
        $results = [];

        if(strlen($this->search) >= 1){
            $results = User::where('account_number', 'like', '%' . $this->search . '%')->limit(7)->get();
        }
        return view('livewire.search-account-number', [
            'accountNumbers' => $results
        ]);
    }
}
