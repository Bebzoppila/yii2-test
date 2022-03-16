<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $content string */

use app\assets\MarketingAsset;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

MarketingAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<?php if ($this->params['standardHeader']): ?>
<header class="header">
    <div class="container">
        <div class="header__inner">
            <div class="btn-red header__btn modal-btn-opend">бесплатный аудит</div>
            <div class="header-burger">
                <div class="header-burger__linear
                            header-burger__linear--black"></div>
                <div class="header-burger__linear
                            header-burger__linear--black"></div>
                <div class="header-burger__linear
                            header-burger__linear--active"></div>
            </div>
            <nav class="header-nav">
                <button class="header-nav__close">X</button>
                <ul class="header-nav__list">
                    <?php foreach ($this->context->navItems as $key => $value): ?>
                        <li class="header-nav__item">
                            <a class="header-nav__link header-nav__link-main" href="<?= Url::to(["marketing/$key",]) ?>"><?= $value ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <div class="lang">
                    <div class="lang__item">
                        <input class="lang__item-input" type="radio" name="lang" id="ru">
                        <label class="lang__item-label" for="ru">ENG</label>
                    </div>
                    <div class="linear"></div>
                    <div class="lang__item">
                        <input checked class="lang__item-input" type="radio" name="lang" id="eng">
                        <label class="lang__item-label" for="eng">Ru</label>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
<?php endif; ?>

<?= $content ?>

<div class="modal">
    <div class="modal__inner">
        <button class="modal__close">x</button>
        <?php $form = ActiveForm::begin(); ?>
        <div class="modal-form__item">
            <label for="">Телефон</label>
            <?= $form->field($this->context->modelForm, 'phone')
                ->textInput(['maxlength' => 255, 'class' => 'modal-form__input'])->label(false); ?>
        </div>
        <div class="modal-form__item">
            <label for="">Почта</label>
            <?= $form->field($this->context->modelForm, 'email')
                ->textInput(['maxlength' => 255, 'class' => 'modal-form__input'])->label(false); ?>
        </div>

        <div class="modal-form__item">
            <?= Html::submitButton('Отправить', ['class' => 'modal-form__btn']) ?>
        </div>

        <?php ActiveForm::end(); ?>
<!--        <form class="modal-form" action="">-->
<!--            <div class="modal-form__item">-->
<!--                <label for="">Телефон</label>-->
<!--                <input required class="modal-form__input" type="text">-->
<!--            </div>-->
<!--            <div class="modal-form__item">-->
<!--                <label for="">Телеграм</label>-->
<!--                <input required class="modal-form__input" type="text">-->
<!--            </div>-->
<!--            <div class="modal-form__item">-->
<!--                <label for="">Почта</label>-->
<!--                <input required class="modal-form__input" type="email">-->
<!--            </div>-->
<!--            <div class="modal-form__item">-->
<!--                <button type="submit" class="modal-form__btn">Отправить</button>-->
<!--            </div>-->
<!--        </form>-->
    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>