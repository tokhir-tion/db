<?php

namespace App\Livewire\User;

use Livewire\Component;
use App\Models\Card as Credit;

class Card extends Component
{
    public $user, $name, $number, $email, $card, $amount;

    public function mount()
    {
        $this->user = auth()->user();
        $this->name = $this->user->name;
        $this->number = $this->user->number;
        $this->email = $this->user->email;
    }

    public function save()
    {
        Credit::updateOrCreate(['user_id' => $this->user->id],
            [
                'number' => $this->card,
                'amount' => $this->amount,
            ]);

        $this->card = '';
        $this->amount = '';

        redirect('/dashboard/card')->with('success', 'Card successfully updated.');
    }

    public function render()
    {
        return view('livewire.user.card');
    }
}
