<?php 
    require_once("components/header.php");
    require_once("config/dbConfig.php");
    $req = $db -> prepare('SELECT * FROM article WHERE id = :id');
    $req -> bindParam(":id", $_GET["id"]);
    $req -> execute();
    $article = $req -> fetch(PDO::FETCH_ASSOC);
    $title = $article['title'];
?>

<div class="single-page">
    <h1 class="post-title"><?php echo $article['title']; ?></h1>
    <div class="post-chracteristics">
        <p class="post-author">Publié par <?php echo $article['name']; ?></p>
        <p class="post-date"> le <?php echo $article['date']; ?> .</p>
    </div>
    <div class="post-page-container">
        <img src="<?php echo $article['thubnail']; ?>" alt="" class="post-img">
        <p class="post-text"><?php echo $article['content'] ?></p>
    </div>
</div>