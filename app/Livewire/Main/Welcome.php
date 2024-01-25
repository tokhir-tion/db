<?php

namespace App\Livewire\Main;

use App\Models\Donation;
use Livewire\Component;

class Welcome extends Component
{
    public $donations;

    public function mount()
    {
        $this->donations = Donation::where('is_accepted', true)->get();
    }

    public function render()
    {
        return view('livewire.main.welcome');
    }
}
