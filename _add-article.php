<?php 
    require_once("config/dbConfig.php");

    $req = $db -> prepare('INSERT INTO article (title,content,thubnail,name) VALUES (:title, :content, :thubnail, :name)');
    $req -> bindParam(":title", $_POST['title']);
    $req -> bindParam(":content", $_POST['content']);
    $req -> bindParam(":thubnail", $_POST['thubnail']);
    $req -> bindParam(":name", $_POST['name']);
    $req -> execute();

    header('Location : index.php');
?>