<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Native\Laravel\Facades\Window;
use Native\Laravel\Facades\Notification;
use Vedmant\FeedReader\Facades\FeedReader;

class Feed extends Component
{
    public function visitLarajobs()
    {
        Window::open()
            ->url('https://larajobs.com')
            ->width(800)
            ->height(600);
    }

//    public function notify()
//    {
//        Notification::title('Hello from NativePHP')
//            ->message('This is a detail message coming from your Laravel app.')
//            ->event(\App\Events\NewJobDetected::class)
//            ->show();
//    }

    public function render()
    {
        $feed = FeedReader::read('https://larajobs.com/feed');
        return view('livewire.feed', [
            'feed' => $feed
        ]);
    }
}
