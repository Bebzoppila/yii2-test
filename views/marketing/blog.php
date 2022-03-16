<?php
use yii\helpers\Url;
//echo '<pre>';
//print_r();
//echo '</pre>';
?>

<section class="blog">
    <div class="container">
        <div class="blog__inner">
            <h2 class="blog__title title title-after">Блог</h2>
            <div class="blog-content">
                <?php foreach ($blogs as $blog): ?>
                <div class="blog-item">
                    <img src="<?=  Url::to('@web/images/'); ?>blog/<?= $blog['img'] ?>" alt="Картинка">
                    <h3 class="blog-item__title"><?= $blog['name'] ?></h3>
                    <h4 class="blog-item__subtitle"><?= $blog['primaryText'] ?></h4>
                    <div class="blog-item__menu">
                        <a class="blog-item__link" href="<?= Url::to(["/marketing/article/?id=$blog[id]"]); ?>">Открыть пост</a>
                        <img src="<?= Url::to('@web/images/'); ?>arrowNexw.png" alt="стрелочка">
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="blog-content__menu">
                <?php
                $length = $length + 5;
                ?>
                <a href="<?= Url::to(["/marketing/blog/?length=$length"]); ?>" class="blog-content__btn">Посмотреть все</a>
            </div>
        </div>
    </div>
</section>