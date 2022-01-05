<?php require_once("components/header.php"); ?>

<section class="article-form">
    <h1 class="title">Add post</h1>
    <form action="_add-article.php" method="post" class="form">
        <div class="form-input">
            <label for="">Article title</label>
            <input type="text" name="title" placeholder="Title of article" class="input">
        </div>
        <div class="form-input">
            <label for="">Article content</label>
            <textarea name="content" cols="30" rows="10" placeholder="Content of article" class="input content-input"></textarea>
        </div>
        <div class="form-input">
            <label for="">Image link</label>
            <input type="text" name="thubnail" placeholder="Link of image" class="input">
        </div>
        <div class="form-input">
            <label for="">Article author</label>
            <input type="text" name="name" placeholder="author" class="input">
        </div>
        <input type="submit" value="Create post" class="cta">
    </form>
</section>