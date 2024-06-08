<?php

namespace App\Utils;

use App\Models\Comment;

class CommentManager
{
    /**
    * list all comments
    */
    public function listComments()
    {
        return Comment::get();
    }

    /**
    * add a record in commments table
    */
    public function addCommentForNews($body, $newsId)
    {
        return Comment::create([
            'body' => $body,
            'news_id' => $newsId,
        ]);
    }

    /**
    * deletes a comment
    */
    public function deleteComment($id)
    {
        return Comment::find($id)->delete();
    }
}