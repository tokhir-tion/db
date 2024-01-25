<?php

namespace App\Livewire\User;

use App\Models\Donation;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class Request extends Component
{
    use WithFileUploads;

    public $user, $title, $description, $amount, $image;

    public function mount()
    {
        $this->user = auth()->user()->id;
    }

    public function store()
    {
        Donation::create([
            'user_id' => $this->user,
            'title' => $this->title,
            'description' => $this->description,
            'amount' => $this->amount,
            'image' => 'some place',
        ]);


       redirect('/dashboard/request')->with('yes', 'Request sent successfully');
    }

    public function render()
    {
        return view('livewire.user.request');
    }
}
