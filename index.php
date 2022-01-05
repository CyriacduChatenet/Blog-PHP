<?php
$title = "Home";
require_once("components/header.php");
require_once("config/dbConfig.php");
?>
<section class="herobanner">
    <h1 class="title">Welcome to Coder blog</h1>
</section>
<div class="controls">
    <a href="" class="cta-link"><button class="cta">Add post</button></a>
</div>
<section class="article-container">
    <?php
    $req = $db->prepare("SELECT * FROM article");
    $req->execute();
    while ($article = $req->fetch(PDO::FETCH_ASSOC)) : ?>
        <div class="post-card">
            <img src="<?php echo $article['thubnail']; ?>" alt="" class="card-img">
            <div class="card-container">
                <div class="card-title-date">
                    <h4 class="card-title"><?php echo $article['title']; ?></h4>
                    <p class="card-date"><?php echo $article['date']; ?></p>
                </div>
                <div class="card-author-view">
                    <p class="card-author"><?php echo $article['name']; ?></p>
                    <a href=""><button class="card-cta">View more</button></a>
                </div>
            </div>
        </div>
    <?php endwhile ?>
</section>
<?php require_once('components/footer.php'); ?>