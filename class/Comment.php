<?php

class Comment
{
    /**
     * @var int The unique identifier for the comment
     */
    protected $id;

    /**
     * @var string The body of the comment
     */
    protected $body;

    /**
     * @var string The creation date of the comment
     */
    protected $createdAt;

    /**
     * @var int The ID of the associated news
     */
    protected $newsId;

    /**
     * Set the ID of the comment.
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
     * Get the ID of the comment.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the body of the comment.
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
     * Get the body of the comment.
     *
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set the creation date of the comment.
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
     * Get the creation date of the comment.
     *
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set the news ID associated with the comment.
     *
     * @param int $newsId
     * @return $this
     */
    public function setNewsId($newsId)
    {
        $this->newsId = $newsId;

        return $this;
    }

    /**
     * Get the news ID associated with the comment.
     *
     * @return int
     */
    public function getNewsId()
    {
        return $this->newsId;
    }
}