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
    public string $author = '';

    public function visitJob()
    {
        Window::open()
            ->url($this->link)
            ->width(800)
            ->height(600);
    }
    public function render()
    {
        return view('livewire.job');
    }
}
