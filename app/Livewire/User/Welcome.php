<?php

namespace App\Livewire\User;

use App\Models\Donation;
use Livewire\Component;

class Welcome extends Component
{
    public $name, $number, $card, $amount, $donations;

    public function mount()
    {
        $user = auth()->user();
        $card = \App\Models\Card::where('user_id', $user->id)->first();
        $this->name = $user->name;
        $this->number = $user->number;
        $this->card = $card->number ?? null;
        $this->amount = $card->amount ?? null;
    }

    public function render()
    {
        return view('livewire.user.welcome');
    }
}
