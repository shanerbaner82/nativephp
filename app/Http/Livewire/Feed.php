<?php

namespace App\Http\Livewire;

use Livewire\Component;
use willvincent\Feeds\Facades\FeedsFacade as Feeds;

class Feed extends Component
{
    public $data;

    public function render()
    {
        $feed = Feeds::make('https://larajobs.com/feed');
        $this->data = array(
            'title'     => $feed->get_title(),
            'permalink' => $feed->get_permalink(),
            'items'     => $feed->get_items(),
        );
//        dd($this->data);
        return view('livewire.feed');
    }
}
