<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
    	'name', 'alt', 'path'
    ];

    public function getUrlPathAttribute()
    {
    	return \Storage::url($this->path);
    }

    public function posts()
    {
    	$this->hasMany(Post::class);
    }
}
