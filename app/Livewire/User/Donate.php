<?php

namespace App\Livewire\User;

use App\Models\Donation;
use App\Models\Transaction;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Donate extends Component
{
    public $title, $description, $amount, $donationAmount, $user, $status, $transactionId, $id, $cardAmount;

    public function mount($donation_id)
    {
        $donation = Donation::find($donation_id);
        $this->title = $donation->title;
        $this->description = $donation->description;
        $this->amount = $donation->amount;
        $this->user = auth()->user();
        $this->id = $donation->id;
        $this->cardAmount = $this->user->card->amount;

        $temp = Transaction::where('user_id', $this->user->id)->latest()->first();
        $this->status = $temp->is_successful ?? 'no data';
        $this->transactionId = $temp->id ?? 'no data';
    }

    public function store()
    {
        if ($this->donationAmount <= $this->cardAmount) {
            $result = $this->cardAmount - $this->donationAmount;
            DB::table('cards')->where('user_id', $this->user->id)->update(['amount' => $result]);

            Transaction::create(
                [
                    'user_id' => $this->user->id,
                    'donation_id' => $this->id,
                    'amount' => $this->donationAmount,
                    'is_successful' => 1,
                ]);
        } else {
            Transaction::create(
                [
                    'user_id' => $this->user->id,
                    'donation_id' => $this->id,
                    'amount' => $this->donationAmount,
                    'is_successful' => 0,
                ]);
        }

        redirect('dashboard/donate/' . $this->id);
    }

    public function render()
    {
        return view('livewire.user.donate');
    }
}
