<?php
namespace Admin\Libs;
use PDO;

class Course extends Database{
    protected static $db_table="courses";
protected static $db_fields=array("categoryid","title",'content','author','photo'/*,'tags','publishedDate'*/);

    protected $id;
    protected $categoryid;
    protected $title;
    protected $content;
    protected $author;
    protected $photo;
    /*protected $tags;
    protected $publishedDate;*/

    public function setId($id){
        $this->id=$id;
    }
    public function getId(){
        return $this->id;
    }

    public function setCategoryId($categoryid){
        $this->categoryid=$categoryid;
    }
    public function getCategoryId(){
        return $this->categoryid;
    }

    public function setTitle($title){
        $this->title=$title;
    }
    public function getTitle(){
        return $this->title;
    }

    public function setContent($content){
        $this->content=$content;
    }
    public function getContent(){
        return $this->content;
    }

    public function setAuthor($author){
        $this->author=$author;
    }
    public function getAuthor(){
        return $this->author;
    }

    public function setPhoto($photo){
        $this->photo=$photo;
    }
    public function getPhoto(){
        return $this->photo;
    }
/*
    public function setTags($tags){
        $this->tags=$tags;
    }
    public function getTags(){
        return $this->tags;
    }

    public function setPublishedDate($publishedDate){
        $this->publishedDate=$publishedDate;
    }
    public function getPublishedDate(){
        return $this->publishedDate;
    }*/

    
    
}
