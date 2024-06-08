<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';

    // needs to set this to null since this column is not existing
    const UPDATED_AT = null;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'body'
    ];

    // Define the relationship with comments
    public function comments()
    {
        return $this->hasMany(Comment::class, 'news_id');
    }
}