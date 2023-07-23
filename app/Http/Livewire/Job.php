<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Native\Laravel\Facades\Window;

class Job extends Component
{
    public string $link = '';
    public string $title = '';
    public string|null $description = '';
    public string $date = '';

    public function visitJob()
    {
        dd($this);
        Window::open()
            ->url($this->link);
    }
    public function render()
    {
        return view('livewire.job');
    }
}
