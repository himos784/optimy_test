<?php

namespace App\Utils;

use App\Models\News;
use App\Models\Comment;

class NewsManager
{
    /**
    * list all news
    */
    public function listNews()
    {
        return News::get();
    }

    /**
    * add a record in news table
    */
    public function addNews($title, $body)
    {
        return News::create([
            'title' => $title,
            'body' => $body,
        ]);
    }

    /**
    * deletes a news, and also linked comments
    */
    public function deleteNews($id)
    {
        $news = News::find($id);

        if($news) {
            $news->comments()->delete(); // Cascading delete
            $news->delete(); // Delete the news article

            return true;
        }

        return false;
    }
}