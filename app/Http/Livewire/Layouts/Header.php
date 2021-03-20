<?php

namespace App\Http\Livewire\Layouts;

use Livewire\Component;

class Header extends Component
{
    public function render()
    {
        $article = [
            'title' => 'this is article 1',
            'body' => "This is article"
        ];
        return view('livewire.layouts.header', compact('article'));
    }
}
