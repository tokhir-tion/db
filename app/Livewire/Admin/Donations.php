<?php

namespace App\Livewire\Admin;

use App\Models\Donation;
use Livewire\Component;

class Donations extends Component
{
    public $donations;

    public function mount()
    {
        $this->donations = Donation::where('is_accepted', true)->get();
    }

    public function calculateSum($id)
    {
        $result = \App\Models\Transaction::where('donation_id', $id)->sum('amount');

        return $result;
    }

    public function render()
    {
        return view('livewire.admin.donations');
    }
}
