<?php

namespace App\Livewire\Landing;

use App\Models\Company;
use Livewire\Component;

class Hero extends Component
{
    public $company;

    public function mount()
    {
        $this->company = Company::first();
    }

    public function render()
    {
        return view('livewire.landing.hero');
    }
}
