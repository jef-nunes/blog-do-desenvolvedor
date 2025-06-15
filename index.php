<?php
    include_once("helpers/constantes.php");
    include_once("templates/header.php");
?>

    <main>
        <div id="titulo-container">
            <h1><?= $NOME_BLOG ?></h1>
            <p><?= $FRASE_BLOG ?></p>
        </div>
        <div id="posts-container">
            <?php foreach($posts as $post): ?>
                <div class="post-box">
                    <img class="post-img" src="<?= $BASE_URL?>img/<?= $post['img'] ?>" alt="">
                    <h2 class="post-titulo">
                        <a href="<?= $BASE_URL ?>post.php?id=<?= $post['id']?>"><?=$post['titulo']?></a>
                    </h2>
                    <p class="post-desc"><?=$post['desc']?></p>
                    <div class="post-tags-container">
                        <p>Tags:</p>
                        <?php foreach($post['tags'] as $tag): ?>
                            <a class="post-tag" href="#"><?= $tag ?></a>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </main>

<?php
    include_once("templates/footer.php")
?>