<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Product extends Component
{
    public $produit;

    public function addLike(){
        
        if(auth()->check()){
            request()->user()->likes()->toggle($this->produit->id);
        } 
    }
    
    public function render()
    {
        return view('livewire.product');
    }
}