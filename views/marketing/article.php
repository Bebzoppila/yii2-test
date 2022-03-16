<?php

use yii\helpers\Url;

?>
<div class="wrapper">
    <div class="container">
        <div class="wrapper__inner">
            <main class="blog-element">
                <div class="blog-element__inner">
                    <h1 class="blog-element__title"><?= $article['name'] ?></h1>
                    <picture class="blog-element__img">
                        <source media="(min-width: 751px)" srcset="<?= Url::to('@web/images/'); ?>/blog/<?= $article['imgBig'] ?>">
                        <img src="<?= Url::to('@web/images/'); ?>blog/1mini.png" alt="картинка">
                    </picture>
                        <?= $article['mainText'] ?>
                    <h3 class="blog-element__title"><?= $article['graphTitle'] ?></h3>
                    <img class="blog-element__img" src="<?=  Url::to('@web/images/'); ?>blog/<?= $article['graphImg'] ?>" alt="График">
                    <?= $article['graphText'] ?>
                </div>


                <div class="blog-element__menu">
                    <a href="">
                        <img src="<?=  Url::to('@web/images/'); ?>PrefBig.png" alt="Следующий">
                    </a>
                    <a href="">
                        <img src="<?=  Url::to('@web/images/'); ?>Next.png" alt="Предыдущий">
                    </a>
                </div>
            </main>

            <aside class="other-posts">
                <div class="other-posts__inner">
                    <h2 class="other-posts__title title">Другие посты</h2>
                    <div class="blog-content other-content">
                        <div class="blog-item">
                            <img src="<?=  Url::to('@web/images/'); ?>blog/HowToStakeETH2.0.png" alt="Картинка">
                            <h3 class="blog-item__title">How To Stake ETH 2.0</h3>
                            <h4 class="blog-item__subtitle">At the end of the last year, on December 1, the long-awaited new version of the Ethereum network was launched. So how to stake?</h4>
                            <div class="blog-item__menu">
                                <a class="blog-item__link" href="">Открыть пост</a>
                                <img src="<?=  Url::to('@web/images/'); ?>arrowNexw.png" alt="стрелочка">
                            </div>
                        </div>
                        <div class="blog-item">
                            <img src="<?=  Url::to('@web/images/'); ?>blog/HowToStakeETH2.0.png" alt="Картинка">
                            <h3 class="blog-item__title">How To Stake ETH 2.0</h3>
                            <h4 class="blog-item__subtitle">At the end of the last year, on December 1, the long-awaited new version of the Ethereum network was launched. So how to stake?</h4>
                            <div class="blog-item__menu">
                                <a class="blog-item__link" href="">Открыть пост</a>
                                <img src="<?=  Url::to('@web/images/'); ?>/arrowNexw.png" alt="стрелочка">
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
        </div>

    </div>


</div>
