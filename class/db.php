<?php

class db {

    private $con;
    
    public function __construct() {
        $this->con = mysqli_connect('localhost', 'root', '');
        $cratedDatabases = mysqli_select_db($this->con, "ITprojekt");
        if (!$cratedDatabases) {
            $createNewDb = "CREATE DATABASE IF NOT EXISTS `ITprojekt`";
            mysqli_query($this->con, $createNewDb);
        }
        $cratedDatabases = mysqli_select_db($this->con, "ITprojekt");
        if ($cratedDatabases) {
            $sqlcreatetable1 = "
              CREATE TABLE IF NOT EXISTS `users` (
                `id` int(11) NOT NULL AUTO_INCREMENT,
                `salutation` varchar(100) NOT NULL,
                `name` varchar(100) NOT NULL,
                `surname` varchar(100) NOT NULL,
                `username` varchar(100) NOT NULL,
                `email` varchar(100) NOT NULL,
                `password` varchar(100) NOT NULL,
                `admin` tinyint(1),
                PRIMARY KEY (`id`)
                ) ENGINE=InnoDB DEFAULT CHARSET=latin1;";
            $sqlcreatetable2 = "
              CREATE TABLE IF NOT EXISTS `posts` (
                `id` int(11) NOT NULL AUTO_INCREMENT,
                `uploaderid` int(11),
                `name` varchar(100) NOT NULL,
                `category` varchar(100) NOT NULL,
                `time` TIME,
                `date` DATE,
                PRIMARY KEY (`id`)
                ) ENGINE=InnoDB DEFAULT CHARSET=latin1;";
            $sqlcreatetable3 = "
                CREATE TABLE `bids` (
                 `user_id` int(11) NOT NULL,
                 `post_id` int(11) NOT NULL,
                 `bid` int(11) NOT NULL,
                  CONSTRAINT UC_rating_info UNIQUE (user_id, post_id)
                ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
                ";
            mysqli_query($this->con, $sqlcreatetable1);
            mysqli_query($this->con, $sqlcreatetable2);
            mysqli_query($this->con, $sqlcreatetable3);
        }
    }

    public function uploadPost(post $post) {
        $sqlInsertImageIntoDb = "INSERT INTO `posts`(`uploaderid`,`name`, `category`, `time`, `date`) VALUES ('" . $post->geUploaderID() . "','" . $post->getName() . "','" . $post->getCategory() . "','" . $post->getTime() . "','" . $post->getDate() . "')";
        mysqli_query($this->con, $sqlInsertImageIntoDb);
        header('location: /Projekt/index.php');
    }
}
