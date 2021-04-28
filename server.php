<?php
session_start();
require_once SITE_ROOT . '/class/db.php';
$db = new db();
if (isset($_POST['uploadPost'])) {
    require_once SITE_ROOT . '/classes/post.php';
    $image = $_FILES['imagefile']['tmp_name'];
    $name = $_FILES['imagefile']['name'];
    $folder = $name;
    $rand = rand(0, 100);
    $test = "pics/" . $rand . $name;
    if (file_exists("pics/" . $folder)) {
        $folder = $rand . $name;
    } else {
        echo "Die Datei existiert nicht";
    }
    move_uploaded_file($image, "pics/" . $folder);
    $image = base64_encode(file_get_contents(addslashes($image)));
    $name = $_POST['name'];
    $time = time();
    $date = date("Y.m.d", $time);
    $time = date("H:i:s", $time);
    $category = $_POST["category"];
    $comment = $_POST["comment"];
    $newPost = new post($_SESSION['id'], $name, $category, $date, $time, $comment);//$uploaderID, $name, $category, $date, $time,$comment
    $db->uploadPost($newPost);
}
?>
