<?php
    include_once("templates/header.php");
?>

    <main id="home-main">
        <div id="home-main-titulo-container">
            <img src="<?=$BASE_URL?>img/developer.png" alt="">
            <h1><?= $NOME_BLOG ?></h1>
            <p><?= $FRASE_BLOG ?></p>
        </div>
        <div id="posts-container">
            <?php foreach($posts as $post): ?>
                <div class="previa-post-box">
                    <img class="previa-post-img" src="<?= $BASE_URL?>img/<?= $post['img'] ?>" alt="">
                    <h2 class="previa-post-titulo">
                        <a href="<?= $BASE_URL ?>post.php?id=<?= $post['id']?>"><?=$post['titulo']?></a>
                    </h2>
                    <p class="previa-post-desc"><?=$post['desc']?></p>
                    <div class="previa-post-tags-container">
                        <p>Tags:</p>
                        <?php foreach($post['tags'] as $tag): ?>
                            <a class="previa-post-tag" href="#"><?= $tag ?></a>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </main>
<?php
    include_once("templates/footer.php")
?>