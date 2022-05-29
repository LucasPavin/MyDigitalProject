<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    // Associer un produit à un user
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function likes(){
        return $this->belongsToMany(User::class);
    }
    public function isLike() {
        if(auth()->check()){
            return auth()->user()->likes->contains('id', $this->id);
        }
    }
}
