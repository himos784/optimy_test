<?php

// define('ROOT', __DIR__);
// require_once(ROOT . '/utils/NewsManager.php');
// require_once(ROOT . '/utils/CommentManager.php');

// foreach (NewsManager::getInstance()->listNews() as $news) {
// 	echo("############ NEWS " . $news->getTitle() . " ############\n");
// 	echo($news->getBody() . "\n");
// 	foreach (CommentManager::getInstance()->listComments() as $comment) {
// 		if ($comment->getNewsId() == $news->getId()) {
// 			echo("Comment " . $comment->getId() . " : " . $comment->getBody() . "\n");
// 		}
// 	}
// }

// $commentManager = CommentManager::getInstance();
// $c = $commentManager->listComments();

require 'vendor/autoload.php';

// Load environment variables
use Dotenv\Dotenv;
Dotenv::createImmutable(__DIR__)->load();

// Load the database configuration
require 'database.php';

use App\Utils\NewsManager;
use App\Utils\CommentManager;

$newsManager = new NewsManager;
$commentsManager = new CommentManager;

// Loads news with comments
$newsItems = $newsManager->listNews();
if(!empty($newsItems)) {
    foreach ($newsItems as $news) {
        echo "############ NEWS {$news->title} ############\n";
        echo "{$news->body}\n";

        $comments = $news->comments;
        if(!empty($comments)) {
            foreach ($comments as $comment) {
                echo "Comment {$comment->id}  : {$comment->body}\n";
            }
        } else {
            echo "No Comments\n";
        }
    }
} else {
    echo "No news\n";
}

/*
 * Code below is for other functions within NewsManager and CommentManager to check if it works
 */

// Creates new news
//$news = $newsManager->addNews('news', 'this is the description of our news');

//Delete news and associated comments
// $newsManager->deleteNews(23);

// Loads only comments
// $comments = $commentsManager->listComments();
// echo "Comments Only\n";
// if(!empty($comments)) {
//     foreach ($comments as $comment) {
//         echo "Comment {$comment->id}  : {$comment->body}\n";
//     }
// } else {
//     echo "No Comments\n";
// }

// Creates new comments
// $newsId = 23; // assumes id from database
// $commentsManager->addCommentForNews("this is comment {$newsId}", $newsId);

// Deletes comment
// $commentId = 26; // assumes id from database
// $commentsManager->deleteComment($commentId);