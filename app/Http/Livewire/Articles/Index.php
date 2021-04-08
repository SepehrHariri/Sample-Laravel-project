<?php

namespace App\Http\Livewire\Articles;

use App\Models\Article;
use Livewire\Component;

class Index extends Component
{
    public $article;

    public function mount(Article $article)
    {
        $this->article = $article;
    }

    public function render()
    {
        $article = [
            'title' => 'this is article 1',
            'body' => "This is article"
        ];
        return view('livewire.articles.index', compact('article'));
    }
}
