<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Tweet;

class ShowTweets extends Component
{
    use WithPagination;

    public $content = 'Apenas um teste';
    public $user_id = 2;

    protected $rules = [
        'content' => 'required|min:3|max:255',
        'user_id' => 'required|integer|exists:users,id'
    ];

    public function render()
    {
        $tweets = Tweet::with('user')->paginate(2);

        return view('livewire.show-tweets', [
            'tweets' => $tweets
        ]);
    }

    public function create()
    {
        $this->validate();

        Tweet::create([
            'content' => $this->content,
            'user_id' => $this->user_id
        ]);

        $this->content = '';
    }
}
