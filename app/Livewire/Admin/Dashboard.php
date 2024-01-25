<?php

namespace App\Livewire\Admin;

use App\Models\Donation;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Dashboard extends Component
{
    public $donations;

    public function mount()
    {
        $this->donations = Donation::where('is_accepted', false)->get();
    }

    public function change(int $id, bool $action)
    {
        if ($action) {
            DB::table('donations')->where('id', $id)->update(['is_accepted' => true]);
         } else {
            DB::table('donations')->where('id', $id)->delete();
        }

        redirect(route('admin.dashboard'));
    }

    public function render()
    {
        return view('livewire.admin.dashboard', [
            'donations' => $this->donations,
        ]);
    }
}
