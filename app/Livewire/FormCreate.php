<?php

namespace App\Livewire;

use App\Models\Tag;
use App\Models\Article;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class FormCreate extends Component
{

    use WithFileUploads;
    
    public $title;
    public $subtitle;
    public $body;
    public $image;
    public $category_id;
    public $user_id;
    public $tags;
    public $temporary_images;
    public $article;

    public $name = ['Politica', 'Economia', 'Food&Drink', 'Sport', 'Intrattenimento', 'Tech'];

    public function store()
    {
        $this->validate([
            'title' => 'required|unique:articles|min:5',
            'subtitle' => 'required|min:5',
            'body' => 'required|min:10',
            'image' => 'image|required',
            'category' => 'required',
            'tags' => 'required',
        ]);

        $this->article = Auth::user()->id;

        $this->article = Article::create ([
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'body' =>  $this->body,
            'image' => $this->file('image')->store('public/images'),
            'category_id' =>  $this->category_id,
            'user_id' => $this->user_id,
            'slug' => Str::slug($this->title),
        ]);

        $tags = explode(',', $this->tags);

        foreach ($tags as $i => $tag) {
            $tags[$i] = trim($tag);
        }

        foreach ($tags as $tag) {
            $newTag = Tag::updateOrCreate(['name' => $tag], ['name' => strtolower($tag)]);
            $this->article->tags()->attach($newTag);
        }
    }

    public function render()
    {
        return view('livewire.form-create');
    }
}
