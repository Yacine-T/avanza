<?php


class Commentary
{
    private $_id;
    private $_author;
    private $_post;
    private $_comment;
    private $_commentDate;

    /**
     * Commentary constructor.
     * @param $_id
     * @param $_author
     * @param $_post
     * @param $_comment
     * @param $_commentDate
     */
    public function __construct($_id, $_author, $_post, $_comment, $_commentDate)
    {
        $this->_id = $_id;
        $this->_author = $_author;
        $this->_post = $_post;
        $this->_comment = $_comment;
        $this->_commentDate = $_commentDate;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->_id = $id;
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->_author;
    }

    /**
     * @param mixed $author
     */
    public function setAuthor($author): void
    {
        $this->_author = $author;
    }

    /**
     * @return mixed
     */
    public function getPost()
    {
        return $this->_post;
    }

    /**
     * @param mixed $post
     */
    public function setPost($post): void
    {
        $this->_post = $post;
    }

    /**
     * @return mixed
     */
    public function getComment()
    {
        return $this->_comment;
    }

    /**
     * @param mixed $comment
     */
    public function setComment($comment): void
    {
        $this->_comment = $comment;
    }

    /**
     * @return mixed
     */
    public function getCommentDate()
    {
        return $this->_commentDate;
    }

    /**
     * @param mixed $commentDate
     */
    public function setCommentDate($commentDate): void
    {
        $this->_commentDate = $commentDate;
    }


}