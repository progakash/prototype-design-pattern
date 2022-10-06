<?php 
namespace ProtoTypeDesignPattern;

class Prototype
{
    private $title;
    private $body;
    private $author;
    private $userComment;

    public function __construct(string $title, string $body, Author $author)
    {
        $this->title = $title;
        $this->body  = $body;
        $this->author = $author;
    }

    public function addUserComment(string $comment)
    {
        $this->userComment = $comment;
    }

    //set property and method for cloning object
    public function __clone()
    {
        $this->title = $this->title;
        $this->body = $this->body;
    }
}