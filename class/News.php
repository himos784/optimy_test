<?php

/**
 * Class News
 *
 * Represents a news article with an ID, title, body, and creation date.
 */
class News
{
    /**
     * @var int The unique identifier for the news article
     */
    protected $id;

    /**
     * @var string The title of the news article
     */
    protected $title;

    /**
     * @var string The body of the news article
     */
    protected $body;

    /**
     * @var string The creation date of the news article
     */
    protected $createdAt;

    /**
     * Set the ID of the news article.
     *
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the ID of the news article.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the title of the news article.
     *
     * @param string $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the title of the news article.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the body of the news article.
     *
     * @param string $body
     * @return $this
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Get the body of the news article.
     *
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set the creation date of the news article.
     *
     * @param string $createdAt
     * @return $this
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get the creation date of the news article.
     *
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Get the comments associated with the news article.
     *
     * @return array An array of Comment objects
     */
    public function getComments()
    {
        $commentManager = CommentManager::getInstance();
        $allComments = $commentManager->listComments();
        $newsComments = [];

        foreach ($allComments as $comment) {
            if ($comment->getNewsId() == $this->getId()) {
                $newsComments[] = $comment;
            }
        }

        return $newsComments;
    }
}