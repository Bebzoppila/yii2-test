<?php
use yii\helpers\Url;
?>
<section class="main-big">
    <div class="container">
        <div class="main-big__inner">
            <div class="main-big__menu">
                <button class="btn-red modal-btn-opend">бесплатный аудит</button>
            </div>
            <div class="main-big__text">
                <div class="main-big__circle"></div>
                <strong class="main-big__letter">Р</strong>
                <ul class="main-big__list">
                    <li class="main-big__list-item">еклама</li>
                    <li class="main-big__list-item">учной</li>
                    <li class="main-big__list-item">аботы</li>
                </ul>
            </div>
            <div class="main-big__content">
                <nav class="header-nav main-big__nav">
                    <button class="header-nav__close">X</button>
                    <ul class="header-nav__list">
                        <?php foreach ($this->context->navItems as $key => $value): ?>
                            <li class="header-nav__item">
                                <a class="header-nav__link" href="<?= Url::to(["marketing/$key",]) ?>"><?= $value ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                    <div class="lang main-big__lang">
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
                <h2 class="main-big__title">продвижение <br> через <br> рекомендации
                    <br> Key Opinion Leaders</h2>
                <h3 class="main-big__subtitle">наш конкурент - это маркетинг, а не другие АГЕНТСТВА</h3>
            </div>
        </div>
    </div>
</section>

<main class="main">
    <div class="circle"></div>
    <div class="main-bg"><img src="<?=  Url::to('@web/images/'); ?>main-bg.png" alt="Задняя
                    картика"></div>
    <header class="header">
        <div class="container">
            <div class="header__inner">
                <button class="btn-red modal-btn-opend">бесплатный аудит</button>
                <div class="header-burger">
                    <div class="header-burger__linear"></div>
                    <div class="header-burger__linear"></div>
                    <div class="header-burger__linear
                                header-burger__linear--active"></div>
                </div>
                <nav id="header-nav" class="header-nav ">
                    <button id="header-nav__close" class="header-nav__close">X</button>
                    <ul class="header-nav__list">
                        <li class="header-nav__item">
                            <a class="header-nav__link" href="">Алгоритм</a>
                        </li>
                        <li class="header-nav__item">
                            <a class="header-nav__link" href="">Бизнес -
                                партнеры</a>
                        </li>
                        <li class="header-nav__item">
                            <a class="header-nav__link" href="">Отзывы</a>
                        </li>
                        <li class="header-nav__item">
                            <a class="header-nav__link" href="">Сравнение</a>
                        </li>
                        <li class="header-nav__item">
                            <a class="header-nav__link" href="">Блог</a>
                        </li>
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
    <div class="main__content">
        <div class="container">
            <div class="main__text">
                <h1 class="main__title">продвижение <br> через <br> рекомендации
                    <br> Key Opinion Leaders</h1>
                <h2 class="main__subtitle">наш конкурент - это маркетинг, а не другие АГЕНТСТВА</h2>
            </div>
        </div>
    </div>
</main>

<section class="advantages">
    <div class="container">
        <div class="advantages-slider swiper">
            <div class="advantages-wrapper swiper-wrapper">
                <div class="advantages-slider__item swiper-slide">
                    <h3 class="advantages-slider__title">3000+</h3>
                    <div class="advantages-slider__linean"></div>
                    <h4 class="advantages-slider__subtitle">лидеров мнений, готовых порекомендовать продукт своей аудитории </h4>
                </div>
                <div class="advantages-slider__item swiper-slide">
                    <h3 class="advantages-slider__title">89%</h3>
                    <div class="advantages-slider__linean"></div>
                    <h4 class="advantages-slider__subtitle">покупателей доверяют отзывам принимая решение о покупке
                    </h4>
                </div>
                <div class="advantages-slider__item swiper-slide">
                    <h3 class="advantages-slider__title">25 млн+</h3>
                    <div class="advantages-slider__linean"></div>
                    <h4 class="advantages-slider__subtitle">потенциальных юзеров, инвесторов, адвокатов бренда</h4>
                </div>
                <div class="advantages-slider__item swiper-slide">
                    <h3 class="advantages-slider__title">7х</h3>
                    <div class="advantages-slider__linean"></div>
                    <h4 class="advantages-slider__subtitle">окупаемость influencer marketing выше, чем в традиционной рекламе
                    </h4>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="algorithm">
    <div class="container">
        <div class="algorithm__inner">
            <div class="algorithm__footer">
                <h2 class="algorithm__title title title-after">алгоритм</h2>
            </div>
            <div class="algorithm-content">
                <article class="algorithm-content__item">
                    <h3 class="algorithm-content__title">1</h3>
                    <h4 class="algorithm-content__subtitle">KOL plan</h4>
                    <p class="algorithm-content__text">разбираем ваш бизнес, ставим цели рекламной кампании, утверждаем бюджет и показатели</p>
                </article>
                <article class="algorithm-content__item">
                    <h3 class="algorithm-content__title">2</h3>
                    <h4 class="algorithm-content__subtitle">KOL benchmark
                    </h4>
                    <p class="algorithm-content__text">вручную анализируем аккаунты влияния для максимизации ROI от каждого вложенного доллара в продвижение
                    </p>
                </article>
                <article class="algorithm-content__item">
                    <h3 class="algorithm-content__title">3</h3>
                    <h4 class="algorithm-content__subtitle">KOL communication
                    </h4>
                    <p class="algorithm-content__text">коммуницируем в доверительной атмосфере с KOLs (создаём позитивный имидж клиента), утверждаем оптимальные форматы упоминаний и сроки</p>
                </article>
                <article class="algorithm-content__item">
                    <h3 class="algorithm-content__title">4</h3>
                    <h4 class="algorithm-content__subtitle">KOL map</h4>
                    <p class="algorithm-content__text">вы получаете наиболее релевантных Лидеров Мнений для вашего сегмента рынка в Telegram, Twitter, YouTube, Instagram, TikTok</p>
                </article>

                <article class="algorithm-content__item">
                    <h3 class="algorithm-content__title">5</h3>
                    <h4 class="algorithm-content__subtitle">KOL content</h4>
                    <p class="algorithm-content__text">нейрокопирайтинг (создаём убедительный рекламный контент - текст, графика, анимация)</p>
                </article>

                <article class="algorithm-content__item">
                    <h3 class="algorithm-content__title">6</h3>
                    <h4 class="algorithm-content__subtitle">KOL management
                    </h4>
                    <p class="algorithm-content__text">контролируем своевременный выход рекламных интеграций</p>
                </article>
                <article class="algorithm-content__item">
                    <h3 class="algorithm-content__title">7</h3>
                    <h4 class="algorithm-content__subtitle">KOL report</h4>
                    <p class="algorithm-content__text">предоставляем отчёт об охвате, активностях и переходах на целевую страницу</p>
                </article>

                <article class="algorithm-content__item">
                    <h3 class="algorithm-content__title">8</h3>
                    <h4 class="algorithm-content__subtitle">KOL metrics</h4>
                    <p class="algorithm-content__text">оцениваем эффективность рекламной кампании</p>
                </article>

                <article class="algorithm-content__item">
                    <h3 class="algorithm-content__title">9</h3>
                    <h4 class="algorithm-content__subtitle">KOL data</h4>
                    <p class="algorithm-content__text">выявляем точки роста на базе полученных данных для дальнейшего маркетинга (эффективные месседжи, блоги, платформы)
                    </p>
                </article>
            </div>
        </div>
    </div>
</section>

<section class="partners">
    <div class="container">
        <div class="partners__inner">
            <h2 class="partners__title title title-after">партнеры</h2>
            <div class="partners-content">
                <picture>
                    <source media="(min-width: 993px)" srcset="<?= Url::to('@web/images/partners/1-big.png'); ?>" type="image/svg+xml">
                    <img src="<?=  Url::to('@web/images/'); ?>partners/1.png" alt="картинка">
                </picture>
                <picture>
                    <source media="(min-width: 993px)" srcset="<?=  Url::to('@web/images/'); ?>partners/2-big.png" type="image/svg+xml">
                    <img src="<?=  Url::to('@web/images/'); ?>partners/2.png" alt="картинка">
                </picture>
                <picture>
                    <source media="(min-width: 993px)" srcset="<?=  Url::to('@web/images/'); ?>partners/3-big.png" type="image/svg+xml">
                    <img src="<?=  Url::to('@web/images/'); ?>partners/3.png" alt="картинка">
                </picture>
                <picture>
                    <source media="(min-width: 993px)" srcset="<?=  Url::to('@web/images/'); ?>partners/4-big.png" type="image/svg+xml">
                    <img src="<?=  Url::to('@web/images/'); ?>partners/4.png" alt="картинка">
                </picture>
                <picture>
                    <source media="(min-width: 993px)" srcset="<?=  Url::to('@web/images/'); ?>partners/5-big.png" type="image/svg+xml">
                    <img src="<?=  Url::to('@web/images/'); ?>partners/5.png" alt="картинка">
                </picture>
                <picture>
                    <source media="(min-width: 993px)" srcset="<?=  Url::to('@web/images/'); ?>partners/6-big.png" type="image/svg+xml">
                    <img src="<?=  Url::to('@web/images/'); ?>partners/6.png" alt="картинка">
                </picture>
                <picture>
                    <source media="(min-width: 993px)" srcset="<?=  Url::to('@web/images/'); ?>partners/7-big.png" type="image/svg+xml">
                    <img src="<?=  Url::to('@web/images/'); ?>partners/7.png" alt="картинка">
                </picture>
                <picture>
                    <source media="(min-width: 993px)" srcset="<?=  Url::to('@web/images/'); ?>partners/8-big.png" type="image/svg+xml">
                    <img src="<?=  Url::to('@web/images/'); ?>partners/8.png" alt="картинка">
                </picture>
                <picture>
                    <source media="(min-width: 993px)" srcset="<?=  Url::to('@web/images/'); ?>partners/9-big.png" type="image/svg+xml">
                    <img src="<?=  Url::to('@web/images/'); ?>partners/9.png" alt="картинка">
                </picture>
                <picture>
                    <source media="(min-width: 993px)" srcset="<?=  Url::to('@web/images/'); ?>partners/10-big.png" type="image/svg+xml">
                    <img src="<?=  Url::to('@web/images/'); ?>partners/10.png" alt="картинка">
                </picture>

                <picture>
                    <source media="(min-width: 993px)" srcset="<?=  Url::to('@web/images/'); ?>partners/11-big.png" type="image/svg+xml">
                    <img src="<?=  Url::to('@web/images/'); ?>partners/11.png" alt="картинка">
                </picture>

                <picture>
                    <source media="(min-width: 993px)" srcset="<?=  Url::to('@web/images/'); ?>partners/12-big.png" type="image/svg+xml">
                    <img src="<?=  Url::to('@web/images/'); ?>partners/12.png" alt="картинка">
                </picture>
                <picture>
                    <source media="(min-width: 993px)" srcset="<?=  Url::to('@web/images/'); ?>partners/13-big.png" type="image/svg+xml">
                    <img src="<?=  Url::to('@web/images/'); ?>partners/13.png" alt="картинка">
                </picture>
                <picture>
                    <source media="(min-width: 993px)" srcset="<?=  Url::to('@web/images/'); ?>partners/14-big.png" type="image/svg+xml">
                    <img src="<?=  Url::to('@web/images/'); ?>partners/14.png" alt="картинка">
                </picture>
                <picture>
                    <source media="(min-width: 993px)" srcset="<?=  Url::to('@web/images/'); ?>partners/15-big.png" type="image/svg+xml">
                    <img src="<?=  Url::to('@web/images/'); ?>partners/15.png" alt="картинка">
                </picture>
                <picture>
                    <source media="(min-width: 993px)" srcset="<?=  Url::to('@web/images/'); ?>partners/16-big.png" type="image/svg+xml">
                    <img src="<?=  Url::to('@web/images/'); ?>partners/16.png" alt="картинка">
                </picture>
                <picture>
                    <source media="(min-width: 993)" srcset="<?=  Url::to('@web/images/'); ?>partners/17-big.png" type="image/svg+xml">
                    <img src="<?=  Url::to('@web/images/'); ?>partners/17.png" alt="картинка">
                </picture>
            </div>
        </div>
    </div>
</section>

<section class="cases">
    <div class="container">
        <div class="cases__inner">
            <div class="bg-left-white">

            </div>
            <div class="bg-right-white">

            </div>
            <h2 class="cases__title title title-after">кейсы</h2>
            <div class="cases-content swiper">
                <div class="cases-wrapper swiper-wrapper">
                    <div class="cases-item swiper-slide">
                        <div class="cases-item__circle">
                            <img src="<?=  Url::to('@web/images/'); ?>cercle.jpg" alt="КРуг">
                        </div>
                        <h2 class="cases-item__title">AliumSwap</h2>
                        <h3 class="cases-item__subtitle">Decentralized AMM Exchange with multi-blockchain option and NFTs</h3>
                        <ul class="cases-item__list">
                            <li class="cases-item__list-item">
                                <img class="cases-item__list-img" src="<?=  Url::to('@web/images/'); ?>arrow.png" alt="Стрелочка">
                                <strong class="cases-item__list-text">+46%
                                    подписчиков</strong>
                            </li>
                            <li class="cases-item__list-item">
                                <img class="cases-item__list-img" src="<?=  Url::to('@web/images/'); ?>arrow.png" alt="Стрелочка">
                                <strong class="cases-item__list-text">+1602
                                    целевых перехода на сайт</strong>
                            </li>
                        </ul>
                        <div class="cases-item__advantage">
                            <div class="cases-item__advantages">
                                Сроки
                                <br>
                                <strong class="cases-item__advantages-main">9
                                    дней</strong>
                            </div>
                            <div class="cases-item__advantages">
                                Услуга
                                <br>
                                <strong class="cases-item__advantages-main">
                                    Influencer Marketing</strong>
                            </div>
                            <div class="cases-item__advantages">
                                Цель
                                <br>
                                <strong class="cases-item__advantages-main">
                                    Привлечь инвесторов к покупке токена
                                    на
                                    пресейле</strong>
                            </div>
                        </div>
                    </div>
                    <div class="cases-item swiper-slide">
                        <h2 class="cases-item__title">AliumSwap</h2>
                        <h3 class="cases-item__subtitle">Decentralized AMM Exchange with multi-blockchain option and NFTs</h3>
                        <ul class="cases-item__list">
                            <li class="cases-item__list-item">
                                <img class="cases-item__list-img" src="<?=  Url::to('@web/images/'); ?>arrow.png" alt="Стрелочка">
                                <strong class="cases-item__list-text">+46%
                                    подписчиков</strong>
                            </li>
                            <li class="cases-item__list-item">
                                <img class="cases-item__list-img" src="<?=  Url::to('@web/images/'); ?>arrow.png" alt="Стрелочка">
                                <strong class="cases-item__list-text">+1602
                                    целевых перехода на сайт</strong>
                            </li>
                        </ul>

                        <div class="cases-item__advantage">
                            <div class="cases-item__advantages">
                                Сроки
                                <br>
                                <strong class="cases-item__advantages-main">9
                                    дней</strong>
                            </div>
                            <div class="cases-item__advantages">
                                Услуга
                                <br>
                                <strong class="cases-item__advantages-main">
                                    Influencer Marketing</strong>
                            </div>
                            <div class="cases-item__advantages">
                                Цель
                                <br>
                                <strong class="cases-item__advantages-main">
                                    Привлечь инвесторов к покупке токена
                                    на
                                    пресейле</strong>
                            </div>
                        </div>


                    </div>
                    <div class="cases-item swiper-slide">
                        <h2 class="cases-item__title">AliumSwap</h2>
                        <h3 class="cases-item__subtitle">Decentralized AMM Exchange with multi-blockchain option and NFTs</h3>
                        <ul class="cases-item__list">
                            <li class="cases-item__list-item">
                                <img class="cases-item__list-img" src="<?=  Url::to('@web/images/'); ?>arrow.png" alt="Стрелочка">
                                <strong class="cases-item__list-text">+46%
                                    подписчиков</strong>
                            </li>
                            <li class="cases-item__list-item">
                                <img class="cases-item__list-img" src="<?=  Url::to('@web/images/'); ?>arrow.png" alt="Стрелочка">
                                <strong class="cases-item__list-text">+1602
                                    целевых перехода на сайт</strong>
                            </li>
                        </ul>
                        <div class="cases-item__advantage">
                            <div class="cases-item__advantages">
                                Сроки
                                <br>
                                <strong class="cases-item__advantages-main">9
                                    дней</strong>
                            </div>
                            <div class="cases-item__advantages">
                                Услуга
                                <br>
                                <strong class="cases-item__advantages-main">
                                    Influencer Marketing</strong>
                            </div>
                            <div class="cases-item__advantages">
                                Цель
                                <br>
                                <strong class="cases-item__advantages-main">
                                    Привлечь инвесторов к покупке токена
                                    на
                                    пресейле</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cases-menu">
                <div class="cases-menu__pref cases-menu__btn">
                    <img src="<?=  Url::to('@web/images/'); ?>btnPref.png" alt="Предыдущий"></div>
                <div class="cases-menu__items">
                </div>
                <div class="cases-menu__next cases-menu__btn
                            swiper-button-next"><img src="<?=  Url::to('@web/images/'); ?>btnNext.png" alt="следующий"></div>
            </div>
        </div>
    </div>
</section>

<section class="reviews">
    <div class="container">
        <div class="reviews__inner">
            <h2 class="title title-after reviews__title">Отзывы</h2>
            <div class="reviews-content swiper">
                <div class="reviews-wrapper swiper-wrapper">
                    <div class="reviews-slide swiper-slide">
                        <div class="reviews__user">
                            <img src="<?=  Url::to('@web/images/'); ?>user1.jpg" alt="Фотографи">
                            <div class="reviews__user-text">
                                <h3 class="reviews__user-title">Andy Fox</h3>
                                <strong class="reviews__user-subtitle">Founder
                                    of X10.Agency. Worked with 50+
                                    blockchain/DeFi/STO projects.
                                    CBDO/CMO. Awarded as the Author of
                                    The Year at HackerNoon (Bitcoin
                                    category)</strong>
                            </div>
                        </div>
                        <p class="reviews__text">I would definitely recommend this contractor, as I have worked with him in the past and he proven to be an expert in lead generating and content creation. He obviously has solid negotiation skills and is adept in digital marketing,
                            since he managed to get me the best rates. And since he coordinated everyone involved for me, I reckon his team leading skills are also up to par.</p>
                    </div>
                    <div class="reviews-slide swiper-slide">
                        <div class="reviews__user">
                            <img src="<?=  Url::to('@web/images/'); ?>user1.jpg" alt="Фотографи">
                            <div class="reviews__user-text">
                                <h3 class="reviews__user-title">Andy Fox</h3>
                                <strong class="reviews__user-subtitle">Founder
                                    of X10.Agency. Worked with 50+
                                    blockchain/DeFi/STO projects.
                                    CBDO/CMO. Awarded as the Author of
                                    The Year at HackerNoon (Bitcoin
                                    category)</strong>
                            </div>
                        </div>
                        <p class="reviews__text">I would definitely recommend this contractor, as I have worked with him in the past and he proven to be an expert in lead generating and content creation. He obviously has solid negotiation skills and is adept in digital marketing,
                            since he managed to get me the best rates. And since he coordinated everyone involved for me, I reckon his team leading skills are also up to par.</p>
                    </div>
                </div>
            </div>
            <div class="reviews-menu">
                <div class="reviews-menu__bnt reviews-menu__bnt--big
                            reviews-menu__pref" role="button">
                    <img src="<?=  Url::to('@web/images/'); ?>Pref.png" alt="Батон">
                </div>
                <div class="reviews-menu__bnt reviews-menu__next" role="button">
                    <img src="<?=  Url::to('@web/images/'); ?>Next.png" alt="Батон">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="comparison">
    <div class="container">
        <div class="comparison__inner">
            <h2 class="comparison__title title title-after">Сравнение</h2>
            <div class="comparison-content">
                <div class="comparison-item comparison-item-smoke">
                    <h3 class="comparison-item__subtitle">Ваш сотрудник</h3>
                    <ul class="comparison-item__list">
                        <li class="comparison-item__list-item">непрофильность</li>
                        <li class="comparison-item__list-item">нет опыта</li>
                        <li class="comparison-item__list-item">плохое качество аккаунтов</li>
                    </ul>
                </div>
                <div class="comparison-item comparison-item-smoke-2">
                    <h3 class="comparison-item__subtitle">фрилансер</h3>
                    <ul class="comparison-item__list">
                        <li class="comparison-item__list-item">многозадачность</li>
                        <li class="comparison-item__list-item">нет знаний/инструментария
                        </li>
                        <li class="comparison-item__list-item">слабая мотивация </li>
                    </ul>
                </div>
                <div class="comparison-item comparison-item-smoke-3">
                    <h3 class="comparison-item__subtitle">платформа</h3>
                    <ul class="comparison-item__list">
                        <li class="comparison-item__list-item">большое количество ботов</li>
                        <li class="comparison-item__list-item">сложный интерфейс
                        </li>
                        <li class="comparison-item__list-item">риск слива бюджета</li>
                    </ul>
                </div>
                <div class="comparison-item comparison-item-smoke-blue">
                    <h3 class="comparison-item__subtitle
                                comparison-item__subtitle-red">KOL.PROMO</h3>
                    <p class="comparison-item__text">предоставляем результат, о котором договорились!</p>
                    <p class="comparison-item__text">головную боль (процесс привлечения ваших новых клиентов, время, платный софт, люди) - оставьте нам</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="blog">
    <div class="container">
        <div class="blog__inner">
            <h2 class="blog__title title title-after">Блог</h2>
            <div class="blog-content">
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
                        <img src="<?=  Url::to('@web/images/'); ?>arrowNexw.png" alt="стрелочка">
                    </div>
                </div>
                <div class="blog-item">
                    <img src="<?=  Url::to('@web/images/'); ?>blog/HowToStakeETH2.0.png" alt="Картинка">
                    <h3 class="blog-item__title">How To Stake ETH 2.0</h3>
                    <h4 class="blog-item__subtitle">At the end of the last year, on December 1, the long-awaited new version of the Ethereum network was launched. So how to stake?</h4>
                    <div class="blog-item__menu">
                        <a class="blog-item__link" href="">Открыть пост</a>
                        <img src="<?=  Url::to('@web/images/'); ?>arrowNexw.png" alt="стрелочка">
                    </div>
                </div>
            </div>
            <div class="blog-content__menu">
                <button class="blog-content__btn">Посмотреть все</button>
            </div>
        </div>
    </div>
</section>

<footer class="footer">
    <div class="container">
        <div class="footer__inner">
            <form class="form" action="">
                <div class="form__text">
                    <h3 class="form__title">бесплатный аудит социальных сетей за 9 минут</h3>
                    <h4 class="form__subtitle">проведите простой тест-драйв нашей работы и получите ценные советы по продвижению вашего бренда</h4>
                </div>
                <div class="form__controllers">
                    <div class="form__item">
                        <input class="form__item-input" placeholder="название проекта" type="text">
                        <input class="form__item-input" placeholder="телеграм-юзернейм в виде
                                    @xxxxх" type="text">
                    </div>
                    <div class="form__item">
                        <input class="form__item-input
                                    form__item-input-big" placeholder="e-mail" type="text">
                        <button class="form__btn">Получить</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
</footer>



