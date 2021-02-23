<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;


class Photo extends Model
{
    use HasFactory;

    protected $table = 'photos';

    protected $guarded = [];

    protected $appends = ['photo_path'];

    public function getPhotoPathAttribute()
    {
        return asset(Storage::url('images/post/' . $this->image));

    }

    public function post() {
       return $this->belongsToMany(Post::class);

    }
}
