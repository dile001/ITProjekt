<?php

class post {

    private $id;
    private $uploaderID;
    private $name;
    private $category;
    private $date;
    private $time;
    private $comment;

    public function __construct($uploaderID, $name, $category, $date, $time,$comment) {
        $this->uploaderID = $uploaderID;
        $this->name = $name;
        $this->category = $category;
        $this->date = $date;
        $this->time = $time;
        $this->comment=$comment;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function getUploaderID() {
        return $this->uploaderID;
    }

    public function setUploaderID($uploaderID): void {
        $this->uploaderID = $uploaderID;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name): void {
        $this->name = $name;
    }

    public function getCategory() {
        return $this->category;
    }

    public function setCategory($name): void {
        $this->category = $category;
    }

    public function getDate() {
        return $this->date;
    }

    public function setDate($name): void {
        $this->date = $date;
    }

    public function getTime() {
        return $this->time;
    }

    public function setTime($name): void {
        $this->time = $time;
    }

    public function getComment() {
        return $this->comment;
    }

    public function setComment($comment): void {
        $this->comment = $comment;
    }
}
