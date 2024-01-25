<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class Transaction extends Component
{
    public $transactionId, $user, $donation, $amount, $status, $transactions;

    public function mount()
    {
        $this->transactions = \App\Models\Transaction::all();
    }

    public function render()
    {
        return view('livewire.admin.transaction');
    }
}
