<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $guarded = [];

    public function Post(){
        return $this->belongsToMany('post');
    }

    public function postWithImage() {
        return $this->belongsToMany(Post::class)
                ->with('photo:id,image')->orderBy('created_at', 'desc');

    }
}
