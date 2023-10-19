<?php

namespace App\Livewire;

use Livewire\Component;

class SendMoney extends Component
{
    public function render()
    {
        return view('livewire.send-money');
    }

    public function send()
    {
        dd('semt');
    }
}
