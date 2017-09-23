<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class App extends Model
{
    protected $fillable = [
        'title',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
