<?php

namespace App\Livewire;

use Livewire\Component;

class CreatePost extends Component
{
    public $title = 'Post title...';

    public function render()
    {
        return view('livewire.create-post');
    }


    public function save()
    {
        $post = Post::create([
            'title' => $this->title
        ]);

        return redirect()->to('/posts')->with('status', 'Post created!');
    }
}