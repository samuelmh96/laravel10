<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Post extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function image(): MorphOne
    {
        return $this->morphOne(Image::class, 'imageable');
    }
    public function tags(): MorphToMany
    {
        return $this->morphToMany(Tag::class, 'taggable'); 
    }
}
