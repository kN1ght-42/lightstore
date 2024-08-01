<html lang="ru">

<head>
    <title>Карточка товара</title>
    <?php include './assets/includes/head.php'; ?>
</head>

<body>
    <?php include './assets/includes/feedback-modal-window.php'; ?>
    <?php include './assets/includes/order-modal-window.php'; ?>
    <?php include './assets/includes/header.php'; ?>
    <!-- Page-headline -->
    <section class="page-headline">
        <div class="container">
            <div class="page-headline__inner page-headline__inner--cart">
                <div class="page-headline__left">
                    <button class="back__link">
                        <svg class="back__link__svg">
                            <use xlink:href="#arrow" />
                        </svg>
                    </button>
                    <div class="bread__crumbs">
                        <a href="#" class="bread__crumbs__link">Главная</a>
                        <span>/</span>
                        <a href="#" class="bread__crumbs__link">Корзина</a>
                        <span>/</span>
                        <a href="#" class="bread__crumbs__link bread__crumbs__link--current">Настенный светильник (бра) Maytoni
                            T532WL-02B</a>
                    </div>
                </div>

                <div class="page__title">
                    Настенный светильник (бра) Maytoni T532WL-02B
                </div>
            </div>
        </div>
    </section>
    <!-- /Page-headline -->
    <!-- Video-intro -->
    <section class="video-intro">
        <div class="container">
            <video src="https://www.youtube.com/watch?v=K4TOrB7at0Y" poster="./assets/images/videoPreview/videoPreview1.jpg" class="video-intro__item" controls></video>
        </div>
    </section>
    <!-- /Video-intro -->
    <!-- Card__main -->
    <form class="card__main">
        <div class="container">
            <div class="card__main__inner">
                <div class="card__main__left">
                    <div class="card__main__left__top">
                        <div class="card__main__tags">
                            <div class="card__main__tag">
                                Спецпредложение
                            </div>
                            <div class="card__main__tag">Акция</div>
                        </div>
                        <div class="card__main__buttons">
                            <a href="#" class="card__main__share">
                                <span class="title">Поделиться</span>
                                <svg>
                                    <use xlink:href="#share" />
                                </svg>
                            </a>
                            <button class="card__main__buy__button card__main__buy__button--mobile">
                                <div class="title">В сравнение</div>

                                <svg>
                                    <use xlink:href="#compare" />
                                </svg>
                            </button>
                            <button class="card__main__buy__button card__main__buy__button--mobile like">
                                <div class="title">Избранное</div>
                                <svg>
                                    <use xlink:href="#favourite" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="card__main__left__images">
                        <img class="card__main__image" src="./assets/images/goodItems/goodItem1/goodItem1image1.jpg" alt="" />
                    </div>
                    <div class="card__main__left__selectors">
                        <div class="card__main__left__selector">
                            <input type="radio" name="imageSelect" id="image0" checked />
                            <label for="image0">
                                <img src="./assets/images/goodItems/goodItem1/goodItem1image1.jpg" alt="" />
                            </label>
                        </div>
                        <div class="card__main__left__selector">
                            <input type="radio" name="imageSelect" id="image1" />
                            <label for="image1">
                                <img src="./assets/images/goodItems/goodItem1/goodItem1image2.jpg" alt="" />
                            </label>
                        </div>
                        <div class="card__main__left__selector">
                            <input type="radio" name="imageSelect" id="image2" />
                            <label for="image2">
                                <img src="./assets/images/goodItems/goodItem1/goodItem1image3.jpg" alt="" />
                            </label>
                        </div>
                        <div class="card__main__left__selector">
                            <input type="radio" name="imageSelect" id="image3" />
                            <label for="image3">
                                <img src="./assets/images/goodItems/goodItem1/goodItem1image2.jpg" alt="" />
                            </label>
                        </div>
                    </div>
                </div>

                <div class="card__main__form">
                    <div class="card__main__info">
                        <div class="vendor-code">
                            Артикул: <span>T532WL-02B</span>
                        </div>
                        <div class="base-color">
                            <div class="title">Цвет основания</div>
                            <div class="base-color__selectors">
                                <div class="base-color__selector">
                                    <input type="radio" name="baseColor" id="gold" />
                                    <label for="gold">Золото</label>
                                </div>
                                <div class="base-color__selector">
                                    <input type="radio" name="baseColor" id="chrome" />
                                    <label for="chrome">Хром</label>
                                </div>
                                <div class="base-color__selector">
                                    <input type="radio" name="baseColor" id="black" />
                                    <label for="black">Черный</label>
                                </div>
                            </div>
                        </div>
                        <div class="count-lamps">
                            <div class="title">Количество ламп</div>
                            <div class="count-lamps__selectors">
                                <div class="count-lamps__selector">
                                    <input type="radio" name="countLamps" id="2" />
                                    <label for="2">2</label>
                                </div>
                                <div class="count-lamps__selector">
                                    <input type="radio" name="countLamps" id="4" />
                                    <label for="4">4</label>
                                </div>
                                <div class="count-lamps__selector">
                                    <input type="radio" name="countLamps" id="6" />
                                    <label for="6">6</label>
                                </div>
                                <div class="count-lamps__selector">
                                    <input type="radio" name="countLamps" id="8" />
                                    <label for="8">8</label>
                                </div>
                                <div class="count-lamps__selector">
                                    <input type="radio" name="countLamps" id="10" />
                                    <label for="10">10</label>
                                </div>
                                <div class="count-lamps__selector">
                                    <input type="radio" name="countLamps" id="12" />
                                    <label for="12">12</label>
                                </div>
                            </div>
                        </div>
                        <div class="guarantee">
                            Гарантия на товар <span>24 месяца</span>
                        </div>
                        <div class="cashback">
                            <div class="yandex">
                                <div class="stores__info__left">
                                    <img src="./assets/images/svg/svgStoresInfo/yandexScores.svg" alt="" />
                                    <div class="count">389</div>
                                </div>
                                <div class="stores__info__right">
                                    балла Плюса
                                </div>
                            </div>
                            <div class="sber">
                                <div class="stores__info__left">
                                    <div class="item">4%</div>
                                    <div class="count">389</div>
                                    <div class="item"><span>С</span></div>
                                </div>
                                <div class="stores__info__right">
                                    начислим за товар
                                </div>
                            </div>
                            <div class="tinkoff">
                                <div class="stores__info__left"></div>
                                <div class="stores__info__right">
                                    кэшбек
                                </div>
                            </div>
                            <div class="alfaBank">
                                <div class="stores__info__left"></div>
                                <div class="stores__info__right">
                                    кэшбек от Альфа Банк
                                </div>
                            </div>
                        </div>

                        <div class="links-info">
                            <a class="links-info__item" href="#">
                                <img src="./assets/images/svg/svgLinksInfo/sertificate.svg" alt="" />
                                <span class="title">
                                    Посмотреть в масштабе
                                </span>
                            </a>
                            <a class="links-info__item" href="#">
                                <img src="./assets/images/svg/svgLinksInfo/3dModel.svg" alt="" />

                                <span class="title">Скачать 3D модель</span>
                            </a>
                            <a class="links-info__item" href="#">
                                <img src="./assets/images/svg/svgLinksInfo/measure.svg" alt="" />
                                <span class="title">
                                    Посмотреть в масштабе
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="card__main__buy">
                        <div class="buttons">
                            <button class="card__main__buy__button">
                                В сравнение
                                <svg>
                                    <use xlink:href="#compare" />
                                </svg>
                            </button>
                            <button class="card__main__buy__button like">
                                Избранное
                                <svg>
                                    <use xlink:href="#favourite" />
                                </svg>
                            </button>
                        </div>
                        <div class="reviews">
                            <div class="review__mark">
                                <div class="mark">4.6</div>
                                <div class="stars">
                                    <svg>
                                        <use xlink:href="#star" />
                                    </svg>
                                    <svg>
                                        <use xlink:href="#star" />
                                    </svg>
                                    <svg>
                                        <use xlink:href="#star" />
                                    </svg>
                                    <svg>
                                        <use xlink:href="#star" />
                                    </svg>
                                    <svg>
                                        <use xlink:href="#star" />
                                    </svg>
                                </div>
                            </div>
                            <button class="reviews__item">
                                <div class="reviews__item__link" href="">
                                    Отзывы
                                </div>
                                <div class="count">(2)</div>
                            </button>
                        </div>
                        <div class="promo">
                            <div class="title">
                                Введите фразу из рекламы
                            </div>
                            <div class="promo__item__input">
                                <input type="text" placeholder="Фраза" />
                                <button class="promo__button">
                                    Получить скидку
                                </button>
                            </div>
                            <div class="promo__result positive">
                                Промокод применен
                            </div>
                        </div>
                        <div class="availability">
                            <div class="available">
                                В наличии:
                                <span>200 шт.</span>
                            </div>
                        </div>
                        <div class="links-info links-info-mobile">
                            <a class="links-info__item" href="#">
                                <img src="./assets/images/svg/svgLinksInfo/sertificate.svg" alt="" />
                                <span class="title">
                                    Посмотреть в масштабе
                                </span>
                            </a>
                            <a class="links-info__item" href="#">
                                <img src="./assets/images/svg/svgLinksInfo/3dModel.svg" alt="" />

                                <span class="title">Скачать 3D модель</span>
                            </a>
                            <a class="links-info__item" href="#">
                                <img src="./assets/images/svg/svgLinksInfo/measure.svg" alt="" />
                                <span class="title">
                                    Посмотреть в масштабе
                                </span>
                            </a>
                        </div>
                        <div class="price">
                            <div class="price__left">
                                <a href="#" class="cheaper__found">Нашли дешевле?</a>
                                <div class="prices">
                                    <div class="current__price">
                                        3 390 ₽
                                    </div>

                                    <div class="old__price">5 390 ₽</div>
                                    <div class="sale__percentage">-40%</div>
                                </div>
                            </div>
                            <div class="buy__buttons">
                                <button class="good__item__button order">
                                    Быстрый заказ
                                </button>
                                <button class="good__item__button buy">
                                    Купить
                                </button>
                            </div>
                        </div>
                        <div class="contact-data__credits">
                            <div class="contact-data__credits__item">
                                <input type="radio" name="credits" id="pmcredits" />
                                <label for="pmcredits"><img src="./assets/images/paymentMethods/paymentMethodsCredits/pmcredits1.svg" alt="" class="contact-data__credits__image" />
                                    <img src="./assets/images/paymentMethods/paymentMethodsCredits/pmcredits1.svg" alt="" class="contact-data__credits__image credit--active" />
                                    <div class="title">
                                        4 платежа по 1 000 ₽
                                    </div>
                                    <svg>
                                        <use xlink:href="#arrow"></use>
                                    </svg>
                                </label>
                            </div>
                            <div class="contact-data__credits__item">
                                <input type="radio" name="credits" id="split" />
                                <label for="split">
                                    <img class="contact-data__credits__image" src="./assets/images/paymentMethods/paymentMethodsCredits/split.svg" alt="" />
                                    <img class="contact-data__credits__image credit--active" src="./assets/images/paymentMethods/paymentMethodsCredits/split--active.svg" alt="" />
                                    <div class="title">
                                        4 платежа по 1 000 ₽
                                    </div>
                                    <svg>
                                        <use xlink:href="#arrow"></use>
                                    </svg>
                                </label>
                            </div>
                            <div class="contact-data__credits__item">
                                <input type="radio" name="credits" id="dolyami" />
                                <label for="dolyami">
                                    <img src="./assets/images/paymentMethods/paymentMethodsCredits/dolyami.svg" alt="" class="contact-data__credits__image" />
                                    <img class="contact-data__credits__image credit--active" src="./assets/images/paymentMethods/paymentMethodsCredits/dolyami--active.svg" alt="" />
                                    <div class="title">
                                        4 платежа по 1 000 ₽
                                    </div>
                                    <svg>
                                        <use xlink:href="#arrow"></use>
                                    </svg>
                                </label>
                            </div>
                            <div class="contact-data__credits__item">
                                <input type="radio" name="credits" id="sberCredit" />
                                <label for="sberCredit">
                                    <img src="./assets/images/paymentMethods/paymentMethodsCredits/sber.svg" alt="" class="contact-data__credits__image sber--credit" />
                                    <img src="./assets/images/paymentMethods/paymentMethodsCredits/sber.svg" alt="" class="contact-data__credits__image sber--credit credit--active" />
                                    <div class="title">
                                        от <b>3 197 ₽</b> в месяц
                                    </div>
                                    <svg>
                                        <use xlink:href="#arrow"></use>
                                    </svg>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="price price--mobile">
                    <div class="price__left">
                        <a href="#" class="cheaper__found">Нашли дешевле?</a>
                        <div class="prices">
                            <div class="current__price">3 390 ₽</div>

                            <div class="old__price">5 390 ₽</div>
                            <div class="sale__percentage">-40%</div>
                        </div>
                    </div>
                    <div class="buy__buttons">
                        <button class="good__item__button order">
                            Быстрый заказ
                        </button>
                        <button class="good__item__button buy">
                            Купить
                        </button>
                    </div>
                </div>
                <div class="contact-data__credits contact-data__credits--mobile">
                    <div class="contact-data__credits__item">
                        <input type="radio" name="credits" id="pmcredits" />
                        <label for="pmcredits"><img src="./assets/images/paymentMethods/paymentMethodsCredits/pmcredits1.svg" alt="" class="contact-data__credits__image" />
                            <img src="./assets/images/paymentMethods/paymentMethodsCredits/pmcredits1.svg" alt="" class="contact-data__credits__image credit--active" />
                            <div class="title">4 платежа по 1 000 ₽</div>
                            <svg>
                                <use xlink:href="#arrow"></use>
                            </svg>
                        </label>
                    </div>
                    <div class="contact-data__credits__item">
                        <input type="radio" name="credits" id="split" />
                        <label for="split">
                            <img class="contact-data__credits__image" src="./assets/images/paymentMethods/paymentMethodsCredits/split.svg" alt="" />
                            <img class="contact-data__credits__image credit--active" src="./assets/images/paymentMethods/paymentMethodsCredits/split--active.svg" alt="" />
                            <div class="title">4 платежа по 1 000 ₽</div>
                            <svg>
                                <use xlink:href="#arrow"></use>
                            </svg>
                        </label>
                    </div>
                    <div class="contact-data__credits__item">
                        <input type="radio" name="credits" id="dolyami" />
                        <label for="dolyami">
                            <img src="./assets/images/paymentMethods/paymentMethodsCredits/dolyami.svg" alt="" class="contact-data__credits__image" />
                            <img class="contact-data__credits__image credit--active" src="./assets/images/paymentMethods/paymentMethodsCredits/dolyami--active.svg" alt="" />
                            <div class="title">4 платежа по 1 000 ₽</div>
                            <svg>
                                <use xlink:href="#arrow"></use>
                            </svg>
                        </label>
                    </div>
                    <div class="contact-data__credits__item">
                        <input type="radio" name="credits" id="sberCredit" />
                        <label for="sberCredit">
                            <img src="./assets/images/paymentMethods/paymentMethodsCredits/sber.svg" alt="" class="contact-data__credits__image sber--credit" />
                            <img src="./assets/images/paymentMethods/paymentMethodsCredits/sber.svg" alt="" class="contact-data__credits__image sber--credit credit--active" />
                            <div class="title">
                                от <b>3 197 ₽</b> в месяц
                            </div>
                            <svg>
                                <use xlink:href="#arrow"></use>
                            </svg>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- Card__main -->
    <!-- Recomedations -->
    <section class="cart__recommendations card__recommendations recommendations">
        <div class="container">
            <div class="recommendations__inner">
                <div class="recommendations__inner__title">
                    Вместе с этим покупают
                </div>
                <div class="recommendations__slider__wrapper">
                    <div class="cart__recommendations__slider">
                        <div class="cart__recommendations__inner__items">
                            <div class="cart__recommendations__inner__item">
                                <div style="text-align: center">
                                    <img src="./assets/images/recommendations/recommendations1.jpg" alt="" class="cart__recommendations__image" />
                                </div>

                                <div class="title">
                                    Настенный светильник (бра) Maytoni
                                    MOD106WL-L10G3K
                                </div>
                                <div class="recommendations__inner__item__bot">
                                    <div class="prices">
                                        <div class="current__price">
                                            3 390 ₽
                                        </div>
                                        <div class="old__price">
                                            3 390 ₽
                                        </div>
                                    </div>
                                    <div>
                                        <button class="good__item__button recommendation buy">
                                            Купить
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="cart__recommendations__inner__item">
                                <div style="text-align: center">
                                    <img src="./assets/images/recommendations/recommendations1.jpg" alt="" class="cart__recommendations__image" />
                                </div>

                                <div class="title">
                                    Настенный светильник (бра) Maytoni
                                    MOD106WL-L10G3K
                                </div>
                                <div class="recommendations__inner__item__bot">
                                    <div class="prices">
                                        <div class="current__price">
                                            3 390 ₽
                                        </div>
                                        <div class="old__price">
                                            3 390 ₽
                                        </div>
                                    </div>
                                    <div>
                                        <button class="good__item__button recommendation buy">
                                            Купить
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="cart__recommendations__inner__item">
                                <div style="text-align: center">
                                    <img src="./assets/images/recommendations/recommendations1.jpg" alt="" class="cart__recommendations__image" />
                                </div>

                                <div class="title">
                                    Настенный светильник (бра) Maytoni
                                    MOD106WL-L10G3K
                                </div>
                                <div class="recommendations__inner__item__bot">
                                    <div class="prices">
                                        <div class="current__price">
                                            3 390 ₽
                                        </div>
                                        <div class="old__price">
                                            3 390 ₽
                                        </div>
                                    </div>
                                    <div>
                                        <button class="good__item__button recommendation buy">
                                            Купить
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="cart__recommendations__inner__item">
                                <div style="text-align: center">
                                    <img src="./assets/images/recommendations/recommendations1.jpg" alt="" class="cart__recommendations__image" />
                                </div>

                                <div class="title">
                                    Настенный светильник (бра) Maytoni
                                    MOD106WL-L10G3K
                                </div>
                                <div class="recommendations__inner__item__bot">
                                    <div class="prices">
                                        <div class="current__price">
                                            3 390 ₽
                                        </div>
                                        <div class="old__price">
                                            3 390 ₽
                                        </div>
                                    </div>
                                    <div>
                                        <button class="good__item__button recommendation buy">
                                            Купить
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="cart__recommendations__inner__item">
                                <div style="text-align: center">
                                    <img src="./assets/images/recommendations/recommendations1.jpg" alt="" class="cart__recommendations__image" />
                                </div>

                                <div class="title">
                                    Настенный светильник (бра) Maytoni
                                    MOD106WL-L10G3K
                                </div>
                                <div class="recommendations__inner__item__bot">
                                    <div class="prices">
                                        <div class="current__price">
                                            3 390 ₽
                                        </div>
                                        <div class="old__price">
                                            3 390 ₽
                                        </div>
                                    </div>
                                    <div>
                                        <button class="good__item__button recommendation buy">
                                            Купить
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="cart__recommendations__inner__item">
                                <div style="text-align: center">
                                    <img src="./assets/images/recommendations/recommendations1.jpg" alt="" class="cart__recommendations__image" />
                                </div>

                                <div class="title">
                                    Настенный светильник (бра) Maytoni
                                    MOD106WL-L10G3K
                                </div>
                                <div class="recommendations__inner__item__bot">
                                    <div class="prices">
                                        <div class="current__price">
                                            3 390 ₽
                                        </div>
                                        <div class="old__price">
                                            3 390 ₽
                                        </div>
                                    </div>
                                    <div>
                                        <button class="good__item__button recommendation buy">
                                            Купить
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cart__recommendations__slider__buttons">
                            <button class="arrow__button prev">
                                <svg class="arrow__button__svg">
                                    <use xlink:href="#arrow" />
                                </svg>
                            </button>
                            <button class="arrow__button next">
                                <svg class="arrow__button__svg">
                                    <use xlink:href="#arrow" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Recomedations -->
    <!-- Card__info -->
    <section class="default-switcher default-switcher--good-item card__info">
        <div class="container">
            <div class="default-switcher__header">
                <div class="switcher__header__slider">
                    <div class="switcher__header__items">
                        <div class="switcher__header__item">
                            <input type="radio" name="cardInfoSwitcher" id="description" checked />
                            <label for="description">Описание и характеристики</label>
                        </div>
                        <div class="switcher__header__item">
                            <input type="radio" name="cardInfoSwitcher" id="delivery" />
                            <label for="delivery">Доставка</label>
                        </div>
                        <div class="switcher__header__item">
                            <input type="radio" name="cardInfoSwitcher" id="gifts" />
                            <label for="gifts">Подарки</label>
                        </div>
                        <div class="switcher__header__item">
                            <input type="radio" name="cardInfoSwitcher" id="promo" />
                            <label for="promo">Акции</label>
                        </div>
                        <div class="switcher__header__item">
                            <input type="radio" name="cardInfoSwitcher" id="complect" />
                            <label for="complect">Комплект</label>
                        </div>
                        <div class="switcher__header__item">
                            <input type="radio" name="cardInfoSwitcher" id="reviews" />
                            <label for="reviews">Отзывы</label>
                        </div>
                        <div class="switcher__header__item">
                            <input type="radio" name="cardInfoSwitcher" id="lamps" />
                            <label for="lamps">Лампы</label>
                        </div>
                        <div class="switcher__header__item">
                            <input type="radio" name="cardInfoSwitcher" id="videoReview" />
                            <label for="videoReview">Видео обзор</label>
                        </div>
                        <div class="switcher__header__item">
                            <input type="radio" name="cardInfoSwitcher" id="guarantee" />
                            <label for="guarantee">Гарантия</label>
                        </div>
                        <div class="switcher__header__item">
                            <input type="radio" name="cardInfoSwitcher" id="seriesGoods" />
                            <label for="seriesGoods">Товары из серии</label>
                        </div>
                        <div class="switcher__header__item">
                            <input type="radio" name="cardInfoSwitcher" id="collectionGoods" />
                            <label for="collectionGoods">Товары из коллекции</label>
                        </div>
                        <div class="switcher__header__item" style="margin-right: 10px;">
                            <input type="radio" name="cardInfoSwitcher" id="analogs" />
                            <label for="analogs" style="margin-right: 10px;">Аналоги</label>
                        </div>
                    </div>
                    <div class="switcher__header__buttons">
                        <button class="arrow__button prev arrow__button--small">
                            <svg class="arrow__button__svg">
                                <use xlink:href="#arrow" />
                            </svg>
                        </button>
                        <button class="arrow__button next arrow__button--small">
                            <svg class="arrow__button__svg">
                                <use xlink:href="#arrow" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="default-switcher__inner">
                <div class="default-switcher__item description default-switcher__item--active">
                    <div class="default-switcher__title">
                        Характеристики
                    </div>
                    <div class="description__inner">
                        <div class="description__item">
                            <div class="description__item__title">
                                Размеры изделия
                            </div>
                            <div class="description__item__inner">
                                <div class="parameter">
                                    <div class="title">Высота (мм)</div>
                                    <div class="value">360</div>
                                    <div class="addition__info">
                                        <div class="title">?</div>
                                    </div>
                                </div>
                                <div class="parameter">
                                    <div class="title">Диаметр (мм)</div>
                                    <div class="value">750</div>
                                    <div class="addition__info"></div>
                                </div>
                                <div class="parameter">
                                    <div class="title">Ширина (мм)</div>
                                    <div class="value">750</div>
                                    <div class="addition__info"></div>
                                </div>
                                <div class="parameter">
                                    <div class="title">
                                        Диаметр абажура-плафона (мм)
                                    </div>
                                    <div class="value">130</div>
                                    <div class="addition__info"></div>
                                </div>
                            </div>
                        </div>
                        <div class="description__item">
                            <div class="description__item__title">
                                Размеры упаковки
                            </div>
                            <div class="description__item__inner">
                                <div class="parameter">
                                    <div class="title">
                                        Высота коробки (см)
                                    </div>
                                    <div class="value">37</div>
                                    <div class="addition__info"></div>
                                </div>
                                <div class="parameter">
                                    <div class="title">
                                        Длина коробки (см)
                                    </div>
                                    <div class="value">34</div>
                                    <div class="addition__info"></div>
                                </div>
                                <div class="parameter">
                                    <div class="title">
                                        Ширина коробки (см)
                                    </div>
                                    <div class="value">36</div>
                                    <div class="addition__info"></div>
                                </div>
                                <div class="parameter">
                                    <div class="title">
                                        Вес в упаковке (кг)
                                    </div>
                                    <div class="value">2.5</div>
                                    <div class="addition__info"></div>
                                </div>
                                <div class="parameter">
                                    <div class="title">Объем упаковки</div>
                                    <div class="value">0.045</div>
                                    <div class="addition__info"></div>
                                </div>
                            </div>
                        </div>
                        <div class="description__item">
                            <div class="description__item__title">
                                Дополнительная информация
                            </div>
                            <div class="description__item__inner">
                                <div class="parameter">
                                    <div class="title">
                                        Степень защиты (IP)
                                    </div>
                                    <div class="value">IP20</div>
                                    <div class="addition__info">
                                        <div class="title">?</div>
                                    </div>
                                </div>
                                <div class="parameter">
                                    <div class="title">
                                        Способ крепления
                                    </div>
                                    <div class="value">Планка</div>
                                    <div class="addition__info"></div>
                                </div>
                                <div class="parameter">
                                    <div class="title">Вес (Кг)</div>
                                    <div class="value">1.8</div>
                                    <div class="addition__info"></div>
                                </div>
                                <div class="parameter">
                                    <div class="title">Штрихкод</div>
                                    <div class="value">4251110055428</div>
                                    <div class="addition__info"></div>
                                </div>
                            </div>
                        </div>
                        <div class="description__item">
                            <div class="description__item__title">
                                Внешний вид
                            </div>
                            <div class="description__item__inner">
                                <div class="parameter">
                                    <div class="title">
                                        Преобладающий цвет
                                    </div>
                                    <div class="value">Белый</div>
                                    <div class="addition__info"></div>
                                </div>
                                <div class="parameter">
                                    <div class="title">Цвет основания</div>
                                    <div class="value">Белый</div>
                                    <div class="addition__info"></div>
                                </div>
                                <div class="parameter">
                                    <div class="title">Цвет плафона</div>
                                    <div class="value">Белый</div>
                                    <div class="addition__info"></div>
                                </div>
                                <div class="parameter">
                                    <div class="title">
                                        Материал основания
                                    </div>
                                    <div class="value">Металл, Дерево</div>
                                    <div class="addition__info"></div>
                                </div>
                                <div class="parameter">
                                    <div class="title">
                                        Материал плафона
                                    </div>
                                    <div class="value">Стекло</div>
                                    <div class="addition__info"></div>
                                </div>
                                <div class="parameter">
                                    <div class="title">Виды материалов</div>
                                    <div class="value">Дерево</div>
                                    <div class="addition__info"></div>
                                </div>
                                <div class="parameter">
                                    <div class="title">Форма</div>
                                    <div class="value">Шары</div>
                                    <div class="addition__info"></div>
                                </div>
                                <div class="parameter">
                                    <div class="title">Декор</div>
                                    <div class="value">
                                        Ретро, Под старину
                                    </div>
                                    <div class="addition__info"></div>
                                </div>
                                <div class="parameter">
                                    <div class="title">Форма плафона</div>
                                    <div class="value">Шар</div>
                                    <div class="addition__info"></div>
                                </div>
                            </div>
                        </div>
                        <div class="description__item">
                            <div class="description__item__title">
                                Электрика
                            </div>
                            <div class="description__item__inner">
                                <div class="parameter">
                                    <div class="title">
                                        Количество ламп (Шт)
                                    </div>
                                    <div class="value">6</div>
                                    <div class="addition__info"></div>
                                </div>
                                <div class="parameter">
                                    <div class="title">Цоколь</div>
                                    <div class="value">E27</div>
                                    <div class="addition__info"></div>
                                </div>
                                <div class="parameter">
                                    <div class="title">
                                        Мощность лампы (Вт)
                                    </div>
                                    <div class="value">60</div>
                                    <div class="addition__info"></div>
                                </div>
                                <div class="parameter">
                                    <div class="title">Напряжение (В)</div>
                                    <div class="value">220</div>
                                    <div class="addition__info"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="default-switcher__title">Описание</div>
                    <div class="description__text">
                        <div>
                            С другой стороны новая модель организационной
                            деятельности в значительной степени
                            обуславливает создание системы обучения кадров,
                            соответствует насущным потребностям.
                            Повседневная практика показывает, что дальнейшее
                            развитие различных форм деятельности
                            обеспечивает широкому кругу (специалистов)
                            участие в формировании системы обучения кадров,
                            соответствует насущным потребностям.
                            Разнообразный и богатый опыт начало повседневной
                            работы по формированию позиции влечет за собой
                            процесс внедрения и модернизации систем
                            массового участия. Товарищи! начало повседневной
                            работы по формированию позиции обеспечивает
                            широкому кругу (специалистов) участие в
                            формировании позиций, занимаемых участниками в
                            отношении поставленных задач. С другой стороны
                            консультация с широким активом обеспечивает
                            широкому кругу (специалистов) участие в
                            формировании форм развития.
                        </div>
                        <div>
                            Равным образом сложившаяся структура организации
                            позволяет выполнять важные задания по разработке
                            дальнейших направлений развития. Разнообразный и
                            богатый опыт новая модель организационной
                            деятельности играет важную роль в формировании
                            модели развития. Товарищи! сложившаяся структура
                            организации обеспечивает широкому кругу
                            (специалистов) участие в формировании позиций,
                            занимаемых участниками в отношении поставленных
                            задач. Значимость этих проблем настолько
                            очевидна, что постоянный количественный рост и
                            сфера нашей активности позволяет оценить
                            значение системы обучения кадров, соответствует
                            насущным потребностям. Идейные соображения
                            высшего порядка, а также консультация с широким
                            активом требуют определения и уточнения
                            дальнейших направлений развития. Задача
                            организации, в особенности же постоянное
                            информационно-пропагандистское обеспечение нашей
                            деятельности позволяет выполнять важные задания
                            по разработке форм развития.
                        </div>
                    </div>
                    <div class="description__photos">
                        <div class="description__photos__slider">
                            <div class="description__photos__items">
                                <img class="description__photos__item" src="./assets/images/goodItems/goodItem1/goodItem1image1.jpg" alt="" />
                                <img class="description__photos__item" src="./assets/images/goodItems/goodItem1/goodItem1image2.jpg" alt="" />
                                <img class="description__photos__item" src="./assets/images/goodItems/goodItem1/goodItem1image3.jpg" alt="" />
                                <img class="description__photos__item" src="./assets/images/goodItems/goodItem1/goodItem1image2.jpg" alt="" />
                                <img class="description__photos__item" src="./assets/images/goodItems/goodItem1/goodItem1image1.jpg" alt="" />
                            </div>
                            <div class="description__photos__buttons">
                                <button class="arrow__button prev">
                                    <svg class="arrow__button__svg">
                                        <use xlink:href="#arrow" />
                                    </svg>
                                </button>
                                <button class="arrow__button next">
                                    <svg class="arrow__button__svg">
                                        <use xlink:href="#arrow" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="default-switcher__item delivery">
                    <div class="default-switcher__title">
                        Доставка по всей России
                    </div>
                    <div class="delivery__inner">
                        <div class="delivery__pros">
                            <div class="delivery__pros__item">
                                <div class="title">
                                    Более 100 тыс <br />
                                    ПВЗ
                                </div>
                                <img src="./assets/images/defaultSwitcher/delivery/deliveryPros/deliveryPros1.png" alt="" />
                            </div>
                            <div class="delivery__pros__item">
                                <div class="title">
                                    Курьерская доставка на <br />
                                    следующий день в город ЦФО
                                </div>
                                <img src="./assets/images/defaultSwitcher/delivery/deliveryPros/deliveryPros2.png" alt="" />
                            </div>
                            <div class="delivery__pros__item">
                                <div class="title">
                                    Действуют постоянные <br />
                                    скидки на доставку
                                </div>
                                <img src="./assets/images/defaultSwitcher/delivery/deliveryPros/deliveryPros3.png" alt="" />
                            </div>
                        </div>
                        <div class="delivery__inner__main">
                            <div class="delivery__header">
                                <div class="delivery__slider">
                                    <div class="delivery__slider__inner">
                                        <div class="delivery__slider__items">
                                            <div class="delivery__slider__item">
                                                <input type="radio" name="deliverySwitcher" id="storeDelivery" checked>
                                                <label for="storeDelivery">
                                                    <img src="./assets/images/svg/logo.svg" alt="" class="delivery__slider__item__image delivery__slider__item__image--logo" />
                                                    <div class="text">
                                                        <div class="title">
                                                            Доставка
                                                            магазина
                                                        </div>
                                                        <div class="subtitle">
                                                            Для Москвы и МО
                                                        </div>
                                                    </div>
                                                </label>

                                            </div>
                                            <div class="delivery__slider__item">
                                                <input type="radio" name="deliverySwitcher" id="yandexDelivery">
                                                <label for="yandexDelivery">

                                                    <img src="./assets/images/delivery/deliveryYandex.png" alt="" class="delivery__slider__item__image" />
                                                </label>

                                            </div>
                                            <div class="delivery__slider__item">
                                                <input type="radio" name="deliverySwitcher" id="deliveryCdek">

                                                <label for="deliveryCdek">

                                                    <img src="./assets/images/delivery/deliveryCdek.png" alt="" class="delivery__slider__item__image" />
                                                </label>
                                            </div>
                                            <div class="delivery__slider__item">
                                                <input type="radio" name="deliverySwitcher" id="deliveryDalil">

                                                <label for="deliveryDalil">

                                                    <img src="./assets/images/delivery/deliveryDalil.png" alt="" class="delivery__slider__item__image" />
                                                </label>
                                            </div>
                                            <div class="delivery__slider__item">
                                                <input type="radio" name="deliverySwitcher" id="deliveryDpd">

                                                <label for="deliveryDpd">

                                                    <img src="./assets/images/delivery/deliveryDPD.png" alt="" class="delivery__slider__item__image" />
                                                </label>
                                            </div>
                                        </div>
                                        <div class="delivery__slider__buttons">
                                            <button class="arrow__button prev">
                                                <svg class="arrow__button__svg">
                                                    <use xlink:href="#arrow" />
                                                </svg>
                                            </button>
                                            <button class="arrow__button next">
                                                <svg class="arrow__button__svg">
                                                    <use xlink:href="#arrow" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="delivery__items">
                                <div class="delivery__item storeDelivery">
                                    <div class="delivery__item__select">
                                        <label for="manufacturer">Выберите
                                            производителя</label>
                                        <select name="manufacturer" id="manufacturer">
                                            <option>Magniflex</option>
                                            <option>Magniflex</option>
                                            <option>Magniflex</option>
                                            <option>Magniflex</option>
                                        </select>
                                    </div>
                                    <div class="delivery__item__inner delivery__inner--first">
                                        <div class="delivery__inner--first__item">
                                            <img src="./assets/images/delivery/deliveryDefault/deliveryDefault1.png" alt="" />
                                            <div class="text">
                                                <div class="title">
                                                    Доставка
                                                </div>
                                                <ul>
                                                    <li>
                                                        Доставка любого
                                                        матраса и пледа
                                                        фабрики
                                                        Magniflex
                                                        осуществляется -
                                                        бесплатно в
                                                        пределах МКАД
                                                        +40 км.
                                                    </li>
                                                    <li>
                                                        Доставка
                                                        ортопедических
                                                        оснований без
                                                        матраса не
                                                        осуществляется.
                                                    </li>
                                                    <li>
                                                        Доставка на за
                                                        МКАД от 41 км.
                                                        -40 р./км.
                                                    </li>
                                                    <li>
                                                        Наличными при
                                                        получении.
                                                    </li>
                                                    <li>
                                                        Оплата по счёту.
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="delivery__inner--first__item">
                                            <img src="./assets/images/delivery/deliveryDefault/deliveryDefault2.png" alt="" />
                                            <div class="text">
                                                <div class="title">
                                                    Подъём на этаж
                                                </div>
                                                <ul>
                                                    <li>
                                                        Подъем (если
                                                        помещается в
                                                        лифт)
                                                        - бесплатно
                                                    </li>
                                                    <li>
                                                        Подъем (в
                                                        ручную) -
                                                        50р./этаж
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="delivery__inner--first__item">
                                            <img src="./assets/images/delivery/deliveryDefault/deliveryDefault3.png" alt="" />
                                            <div class="text">
                                                <div class="title">
                                                    Срок поставки
                                                </div>
                                                <ul>
                                                    <li>
                                                        При заказе до
                                                        10:00 - товар
                                                        доставляется в
                                                        день заказа
                                                        (если он на
                                                        складе).
                                                    </li>
                                                    <li>
                                                        При заказе до
                                                        19:00 - доставка
                                                        на следующий
                                                        день.
                                                    </li>
                                                    <li>
                                                        При заказе после
                                                        19:00 - доставка
                                                        происходит через
                                                        день.
                                                    </li>
                                                    <li>
                                                        Вы можете
                                                        выбрать любой
                                                        день доставки
                                                        позже указанных.
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="delivery__inner--first__item">
                                            <img src="./assets/images/delivery/deliveryDefault/deliveryDefault4.png" alt="" />
                                            <div class="text">
                                                <div class="title">
                                                    Гарантия
                                                </div>
                                                <ul>
                                                    <li>15 лет</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="delivery__item yandexDelivery">
                                    1
                                    <div class="delivery__item__select">
                                        <label for="manufacturer">Выберите
                                            производителя</label>
                                        <select name="manufacturer" id="manufacturer">
                                            <option>Magniflex</option>
                                            <option>Magniflex</option>
                                            <option>Magniflex</option>
                                            <option>Magniflex</option>
                                        </select>
                                    </div>
                                    <div class="delivery__item__inner delivery__inner--first">
                                        <div class="delivery__inner--first__item">
                                            <img src="./assets/images/delivery/deliveryDefault/deliveryDefault1.png" alt="" />
                                            <div class="text">
                                                <div class="title">
                                                    Доставка
                                                </div>
                                                <ul>
                                                    <li>
                                                        Доставка любого
                                                        матраса и пледа
                                                        фабрики
                                                        Magniflex
                                                        осуществляется -
                                                        бесплатно в
                                                        пределах МКАД
                                                        +40 км.
                                                    </li>
                                                    <li>
                                                        Доставка
                                                        ортопедических
                                                        оснований без
                                                        матраса не
                                                        осуществляется.
                                                    </li>
                                                    <li>
                                                        Доставка на за
                                                        МКАД от 41 км.
                                                        -40 р./км.
                                                    </li>
                                                    <li>
                                                        Наличными при
                                                        получении.
                                                    </li>
                                                    <li>
                                                        Оплата по счёту.
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="delivery__inner--first__item">
                                            <img src="./assets/images/delivery/deliveryDefault/deliveryDefault2.png" alt="" />
                                            <div class="text">
                                                <div class="title">
                                                    Подъём на этаж
                                                </div>
                                                <ul>
                                                    <li>
                                                        Подъем (если
                                                        помещается в
                                                        лифт)
                                                        - бесплатно
                                                    </li>
                                                    <li>
                                                        Подъем (в
                                                        ручную) -
                                                        50р./этаж
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="delivery__inner--first__item">
                                            <img src="./assets/images/delivery/deliveryDefault/deliveryDefault3.png" alt="" />
                                            <div class="text">
                                                <div class="title">
                                                    Срок поставки
                                                </div>
                                                <ul>
                                                    <li>
                                                        При заказе до
                                                        10:00 - товар
                                                        доставляется в
                                                        день заказа
                                                        (если он на
                                                        складе).
                                                    </li>
                                                    <li>
                                                        При заказе до
                                                        19:00 - доставка
                                                        на следующий
                                                        день.
                                                    </li>
                                                    <li>
                                                        При заказе после
                                                        19:00 - доставка
                                                        происходит через
                                                        день.
                                                    </li>
                                                    <li>
                                                        Вы можете
                                                        выбрать любой
                                                        день доставки
                                                        позже указанных.
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="delivery__inner--first__item">
                                            <img src="./assets/images/delivery/deliveryDefault/deliveryDefault4.png" alt="" />
                                            <div class="text">
                                                <div class="title">
                                                    Гарантия
                                                </div>
                                                <ul>
                                                    <li>15 лет</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="delivery__item deliveryCdek">
                                    2
                                    <div class="delivery__item__select">
                                        <label for="manufacturer">Выберите
                                            производителя</label>
                                        <select name="manufacturer" id="manufacturer">
                                            <option>Magniflex</option>
                                            <option>Magniflex</option>
                                            <option>Magniflex</option>
                                            <option>Magniflex</option>
                                        </select>
                                    </div>
                                    <div class="delivery__item__inner delivery__inner--first">
                                        <div class="delivery__inner--first__item">
                                            <img src="./assets/images/delivery/deliveryDefault/deliveryDefault1.png" alt="" />
                                            <div class="text">
                                                <div class="title">
                                                    Доставка
                                                </div>
                                                <ul>
                                                    <li>
                                                        Доставка любого
                                                        матраса и пледа
                                                        фабрики
                                                        Magniflex
                                                        осуществляется -
                                                        бесплатно в
                                                        пределах МКАД
                                                        +40 км.
                                                    </li>
                                                    <li>
                                                        Доставка
                                                        ортопедических
                                                        оснований без
                                                        матраса не
                                                        осуществляется.
                                                    </li>
                                                    <li>
                                                        Доставка на за
                                                        МКАД от 41 км.
                                                        -40 р./км.
                                                    </li>
                                                    <li>
                                                        Наличными при
                                                        получении.
                                                    </li>
                                                    <li>
                                                        Оплата по счёту.
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="delivery__inner--first__item">
                                            <img src="./assets/images/delivery/deliveryDefault/deliveryDefault2.png" alt="" />
                                            <div class="text">
                                                <div class="title">
                                                    Подъём на этаж
                                                </div>
                                                <ul>
                                                    <li>
                                                        Подъем (если
                                                        помещается в
                                                        лифт)
                                                        - бесплатно
                                                    </li>
                                                    <li>
                                                        Подъем (в
                                                        ручную) -
                                                        50р./этаж
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="delivery__inner--first__item">
                                            <img src="./assets/images/delivery/deliveryDefault/deliveryDefault3.png" alt="" />
                                            <div class="text">
                                                <div class="title">
                                                    Срок поставки
                                                </div>
                                                <ul>
                                                    <li>
                                                        При заказе до
                                                        10:00 - товар
                                                        доставляется в
                                                        день заказа
                                                        (если он на
                                                        складе).
                                                    </li>
                                                    <li>
                                                        При заказе до
                                                        19:00 - доставка
                                                        на следующий
                                                        день.
                                                    </li>
                                                    <li>
                                                        При заказе после
                                                        19:00 - доставка
                                                        происходит через
                                                        день.
                                                    </li>
                                                    <li>
                                                        Вы можете
                                                        выбрать любой
                                                        день доставки
                                                        позже указанных.
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="delivery__inner--first__item">
                                            <img src="./assets/images/delivery/deliveryDefault/deliveryDefault4.png" alt="" />
                                            <div class="text">
                                                <div class="title">
                                                    Гарантия
                                                </div>
                                                <ul>
                                                    <li>15 лет</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="delivery__item deliveryDalil">
                                    3
                                    <div class="delivery__item__select">
                                        <label for="manufacturer">Выберите
                                            производителя</label>
                                        <select name="manufacturer" id="manufacturer">
                                            <option>Magniflex</option>
                                            <option>Magniflex</option>
                                            <option>Magniflex</option>
                                            <option>Magniflex</option>
                                        </select>
                                    </div>
                                    <div class="delivery__item__inner delivery__inner--first">
                                        <div class="delivery__inner--first__item">
                                            <img src="./assets/images/delivery/deliveryDefault/deliveryDefault1.png" alt="" />
                                            <div class="text">
                                                <div class="title">
                                                    Доставка
                                                </div>
                                                <ul>
                                                    <li>
                                                        Доставка любого
                                                        матраса и пледа
                                                        фабрики
                                                        Magniflex
                                                        осуществляется -
                                                        бесплатно в
                                                        пределах МКАД
                                                        +40 км.
                                                    </li>
                                                    <li>
                                                        Доставка
                                                        ортопедических
                                                        оснований без
                                                        матраса не
                                                        осуществляется.
                                                    </li>
                                                    <li>
                                                        Доставка на за
                                                        МКАД от 41 км.
                                                        -40 р./км.
                                                    </li>
                                                    <li>
                                                        Наличными при
                                                        получении.
                                                    </li>
                                                    <li>
                                                        Оплата по счёту.
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="delivery__inner--first__item">
                                            <img src="./assets/images/delivery/deliveryDefault/deliveryDefault2.png" alt="" />
                                            <div class="text">
                                                <div class="title">
                                                    Подъём на этаж
                                                </div>
                                                <ul>
                                                    <li>
                                                        Подъем (если
                                                        помещается в
                                                        лифт)
                                                        - бесплатно
                                                    </li>
                                                    <li>
                                                        Подъем (в
                                                        ручную) -
                                                        50р./этаж
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="delivery__inner--first__item">
                                            <img src="./assets/images/delivery/deliveryDefault/deliveryDefault3.png" alt="" />
                                            <div class="text">
                                                <div class="title">
                                                    Срок поставки
                                                </div>
                                                <ul>
                                                    <li>
                                                        При заказе до
                                                        10:00 - товар
                                                        доставляется в
                                                        день заказа
                                                        (если он на
                                                        складе).
                                                    </li>
                                                    <li>
                                                        При заказе до
                                                        19:00 - доставка
                                                        на следующий
                                                        день.
                                                    </li>
                                                    <li>
                                                        При заказе после
                                                        19:00 - доставка
                                                        происходит через
                                                        день.
                                                    </li>
                                                    <li>
                                                        Вы можете
                                                        выбрать любой
                                                        день доставки
                                                        позже указанных.
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="delivery__inner--first__item">
                                            <img src="./assets/images/delivery/deliveryDefault/deliveryDefault4.png" alt="" />
                                            <div class="text">
                                                <div class="title">
                                                    Гарантия
                                                </div>
                                                <ul>
                                                    <li>15 лет</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="delivery__item deliveryDpd">
                                    4
                                    <div class="delivery__item__select">
                                        <label for="manufacturer">Выберите
                                            производителя</label>
                                        <select name="manufacturer" id="manufacturer">
                                            <option>Magniflex</option>
                                            <option>Magniflex</option>
                                            <option>Magniflex</option>
                                            <option>Magniflex</option>
                                        </select>
                                    </div>
                                    <div class="delivery__item__inner delivery__inner--first">
                                        <div class="delivery__inner--first__item">
                                            <img src="./assets/images/delivery/deliveryDefault/deliveryDefault1.png" alt="" />
                                            <div class="text">
                                                <div class="title">
                                                    Доставка
                                                </div>
                                                <ul>
                                                    <li>
                                                        Доставка любого
                                                        матраса и пледа
                                                        фабрики
                                                        Magniflex
                                                        осуществляется -
                                                        бесплатно в
                                                        пределах МКАД
                                                        +40 км.
                                                    </li>
                                                    <li>
                                                        Доставка
                                                        ортопедических
                                                        оснований без
                                                        матраса не
                                                        осуществляется.
                                                    </li>
                                                    <li>
                                                        Доставка на за
                                                        МКАД от 41 км.
                                                        -40 р./км.
                                                    </li>
                                                    <li>
                                                        Наличными при
                                                        получении.
                                                    </li>
                                                    <li>
                                                        Оплата по счёту.
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="delivery__inner--first__item">
                                            <img src="./assets/images/delivery/deliveryDefault/deliveryDefault2.png" alt="" />
                                            <div class="text">
                                                <div class="title">
                                                    Подъём на этаж
                                                </div>
                                                <ul>
                                                    <li>
                                                        Подъем (если
                                                        помещается в
                                                        лифт)
                                                        - бесплатно
                                                    </li>
                                                    <li>
                                                        Подъем (в
                                                        ручную) -
                                                        50р./этаж
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="delivery__inner--first__item">
                                            <img src="./assets/images/delivery/deliveryDefault/deliveryDefault3.png" alt="" />
                                            <div class="text">
                                                <div class="title">
                                                    Срок поставки
                                                </div>
                                                <ul>
                                                    <li>
                                                        При заказе до
                                                        10:00 - товар
                                                        доставляется в
                                                        день заказа
                                                        (если он на
                                                        складе).
                                                    </li>
                                                    <li>
                                                        При заказе до
                                                        19:00 - доставка
                                                        на следующий
                                                        день.
                                                    </li>
                                                    <li>
                                                        При заказе после
                                                        19:00 - доставка
                                                        происходит через
                                                        день.
                                                    </li>
                                                    <li>
                                                        Вы можете
                                                        выбрать любой
                                                        день доставки
                                                        позже указанных.
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="delivery__inner--first__item">
                                            <img src="./assets/images/delivery/deliveryDefault/deliveryDefault4.png" alt="" />
                                            <div class="text">
                                                <div class="title">
                                                    Гарантия
                                                </div>
                                                <ul>
                                                    <li>15 лет</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php include './assets/includes/defaults/delivery-suggestions.php'; ?>
                    </div>
                </div>
                <div class="default-switcher__item gifts cart__recommendations card__recommendations recommendations">
                    <div class="recommendations__inner">
                        <div class="default-switcher__title">
                            Подарки
                            <div class="addition">
                                <img src="./assets/images/defaultSwitcher/gifts/giftImage.png" alt="" />
                                <div class="title">
                                    В корзине вы сможете выбрать один из
                                    следующих подарков
                                </div>
                            </div>
                        </div>
                        <div class="recommendations__slider__wrapper">
                            <div class="cart__recommendations__slider">
                                <div class="cart__recommendations__inner__items">
                                    <div class="cart__recommendations__inner__item">
                                        <div style="text-align: center">
                                            <img src="./assets/images/recommendations/recommendations1.jpg" alt="" class="cart__recommendations__image" />
                                        </div>

                                        <div class="title">
                                            Настенный светильник (бра)
                                            Maytoni MOD106WL-L10G3K
                                        </div>
                                        <div class="recommendations__inner__item__bot">
                                            <div class="prices">
                                                <div class="current__price">
                                                    3 390 ₽
                                                </div>
                                            </div>
                                            <div>
                                                <button class="good__item__button recommendation order">
                                                    Добавить в корзину
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart__recommendations__inner__item">
                                        <div style="text-align: center">
                                            <img src="./assets/images/recommendations/recommendations2.jpg" alt="" class="cart__recommendations__image" />
                                        </div>

                                        <div class="title">
                                            Настенный светильник (бра)
                                            Maytoni MOD106WL-L10G3K
                                        </div>
                                        <div class="recommendations__inner__item__bot">
                                            <div class="prices">
                                                <div class="current__price">
                                                    3 390 ₽
                                                </div>
                                            </div>
                                            <div>
                                                <button class="good__item__button recommendation order">
                                                    Добавить в корзину
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart__recommendations__inner__item">
                                        <div style="text-align: center">
                                            <img src="./assets/images/recommendations/recommendations3.jpg" alt="" class="cart__recommendations__image" />
                                        </div>

                                        <div class="title">
                                            Настенный светильник (бра)
                                            Maytoni MOD106WL-L10G3K
                                        </div>
                                        <div class="recommendations__inner__item__bot">
                                            <div class="prices">
                                                <div class="current__price">
                                                    3 390 ₽
                                                </div>
                                            </div>
                                            <div>
                                                <button class="good__item__button recommendation order">
                                                    Добавить в корзину
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart__recommendations__inner__item">
                                        <div style="text-align: center">
                                            <img src="./assets/images/recommendations/recommendations1.jpg" alt="" class="cart__recommendations__image" />
                                        </div>

                                        <div class="title">
                                            Настенный светильник (бра)
                                            Maytoni MOD106WL-L10G3K
                                        </div>
                                        <div class="recommendations__inner__item__bot">
                                            <div class="prices">
                                                <div class="current__price">
                                                    3 390 ₽
                                                </div>
                                            </div>
                                            <div>
                                                <button class="good__item__button recommendation order">
                                                    Добавить в корзину
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart__recommendations__inner__item">
                                        <div style="text-align: center">
                                            <img src="./assets/images/recommendations/recommendations1.jpg" alt="" class="cart__recommendations__image" />
                                        </div>

                                        <div class="title">
                                            Настенный светильник (бра)
                                            Maytoni MOD106WL-L10G3K
                                        </div>
                                        <div class="recommendations__inner__item__bot">
                                            <div class="prices">
                                                <div class="current__price">
                                                    3 390 ₽
                                                </div>
                                            </div>
                                            <div>
                                                <button class="good__item__button recommendation order">
                                                    Добавить в корзину
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart__recommendations__inner__item">
                                        <div style="text-align: center">
                                            <img src="./assets/images/recommendations/recommendations1.jpg" alt="" class="cart__recommendations__image" />
                                        </div>

                                        <div class="title">
                                            Настенный светильник (бра)
                                            Maytoni MOD106WL-L10G3K
                                        </div>
                                        <div class="recommendations__inner__item__bot">
                                            <div class="prices">
                                                <div class="current__price">
                                                    3 390 ₽
                                                </div>
                                            </div>
                                            <div>
                                                <button class="good__item__button recommendation order">
                                                    Добавить в корзину
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cart__recommendations__slider__buttons">
                                    <button class="arrow__button prev">
                                        <svg class="arrow__button__svg">
                                            <use xlink:href="#arrow" />
                                        </svg>
                                    </button>
                                    <button class="arrow__button next">
                                        <svg class="arrow__button__svg">
                                            <use xlink:href="#arrow" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="default-switcher__item promo">
                    <div class="default-switcher__title">Акции</div>
                    <div class="promo__inner">
                        <div class="promo__item">
                            <img src="./assets/images/defaultSwitcher/promo/promo1.png" alt="" />
                            <div class="text">
                                <div class="title">Скидка</div>
                                <div class="main__text">
                                    С другой стороны новая модель
                                    организационной деятельности в
                                    значительной степени обуславливает
                                    создание системы обучения кадров,
                                    соответствует насущным потребностям.
                                    Повседневная практика показывает, что
                                    дальнейшее развитие различных форм
                                    деятельности обеспечивает широкому кругу
                                    (специалистов) участие в формировании
                                    системы обучения кадров, соответствует
                                    насущным потребностям.
                                </div>
                            </div>
                        </div>
                        <div class="promo__item">
                            <img src="./assets/images/defaultSwitcher/promo/promo2.png" alt="" />
                            <div class="text">
                                <div class="title">Скидка на доставку</div>
                                <div class="main__text">
                                    С другой стороны новая модель
                                    организационной деятельности в
                                    значительной степени обуславливает
                                    создание системы обучения кадров,
                                    соответствует насущным потребностям.
                                    Повседневная практика показывает, что
                                    дальнейшее развитие различных форм
                                    деятельности обеспечивает широкому кругу
                                    (специалистов) участие в формировании
                                    системы обучения кадров, соответствует
                                    насущным потребностям.
                                </div>
                            </div>
                        </div>
                        <div class="promo__item">
                            <img src="./assets/images/defaultSwitcher/promo/promo3.png" alt="" />
                            <div class="text">
                                <div class="title">Подарок</div>
                                <div class="main__text">
                                    С другой стороны новая модель
                                    организационной деятельности в
                                    значительной степени обуславливает
                                    создание системы обучения кадров,
                                    соответствует насущным потребностям.
                                    Повседневная практика показывает, что
                                    дальнейшее развитие различных форм
                                    деятельности обеспечивает широкому кругу
                                    (специалистов) участие в формировании
                                    системы обучения кадров, соответствует
                                    насущным потребностям.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="promo__condition">
                        <div class="promo__condition__left">
                            <div class="title">
                                Специальные условия для оптовиков!
                            </div>
                            <a href="#" class="link">Подробнее</a>
                        </div>
                        <img src="./assets/images/defaultSwitcher/promo/promoCondition.png" alt="" />
                        <a href="#" class="link link--mobile">Подробнее</a>
                    </div>
                    <form action="" class="promo__feedback">
                        <div class="promo__feedback__title">
                            Оставьте ваши контакты, мы вам перезвоним
                        </div>
                        <div class="promo__feedback__inner">
                            <input type="tel" name="" id="" placeholder="Ваш телефон" />
                            <input type="text" name="" id="" placeholder="Ваше имя" />
                            <button type="submit" class="promo__feedback__button black__button--disabled" disabled>
                                Заказать звонок
                            </button>
                        </div>
                        <div class="promo__feedback__checkbox">
                            <input type="checkbox" id="promoConfirmation" />
                            <div class="title">
                                Нажимая на кнопку “заказать звонок”, вы
                                соглашаетесь с политикой конфиденциальности
                            </div>
                        </div>
                    </form>
                </div>
                <div class="default-switcher__item cart__recommendations complect recommendations">
                    <div class="recommendations__inner">
                        <div class="recommendations__inner__items">
                            <div class="recommendations__inner__item">
                                <label class="complect__checkbox">
                                    <input type="checkbox" name="complectCheckbox" id="" />
                                    <span class="checkmark"></span>
                                </label>
                                <div style="text-align: center">
                                    <img src="./assets/images/recommendations/recommendations1.jpg" alt="" class="cart__recommendations__image" />
                                </div>
                                <div class="title">
                                    Настенный светильник (бра) Maytoni
                                    MOD106WL-L10G3K
                                </div>
                                <div class="recommendations__inner__item__bot">
                                    <div class="prices">
                                        <div class="current__price">
                                            3 390 ₽
                                        </div>
                                        <div class="old__price">
                                            3 390 ₽
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="recommendations__inner__item">
                                <label class="complect__checkbox">
                                    <input type="checkbox" name="complectCheckbox" id="" />
                                    <span class="checkmark"></span>
                                </label>
                                <div style="text-align: center">
                                    <img src="./assets/images/recommendations/recommendations1.jpg" alt="" class="cart__recommendations__image" />
                                </div>
                                <div class="title">
                                    Настенный светильник (бра) Maytoni
                                    MOD106WL-L10G3K
                                </div>
                                <div class="recommendations__inner__item__bot">
                                    <div class="prices">
                                        <div class="current__price">
                                            3 390 ₽
                                        </div>
                                        <div class="old__price">
                                            3 390 ₽
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="recommendations__inner__item">
                                <label class="complect__checkbox">
                                    <input type="checkbox" name="complectCheckbox" id="" />
                                    <span class="checkmark"></span>
                                </label>
                                <div style="text-align: center">
                                    <img src="./assets/images/recommendations/recommendations1.jpg" alt="" class="cart__recommendations__image" />
                                </div>

                                <div class="title">
                                    Настенный светильник (бра) Maytoni
                                    MOD106WL-L10G3K
                                </div>
                                <div class="recommendations__inner__item__bot">
                                    <div class="prices">
                                        <div class="current__price">
                                            3 390 ₽
                                        </div>
                                        <div class="old__price">
                                            3 390 ₽
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="recommendations__inner__item">
                                <label class="complect__checkbox">
                                    <input type="checkbox" name="complectCheckbox" id="" />
                                    <span class="checkmark"></span>
                                </label>
                                <div style="text-align: center">
                                    <img src="./assets/images/recommendations/recommendations1.jpg" alt="" class="cart__recommendations__image" />
                                </div>

                                <div class="title">
                                    Настенный светильник (бра) Maytoni
                                    MOD106WL-L10G3K
                                </div>
                                <div class="recommendations__inner__item__bot">
                                    <div class="prices">
                                        <div class="current__price">
                                            3 390 ₽
                                        </div>
                                        <div class="old__price">
                                            3 390 ₽
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="recommendations__inner__item">
                                <label class="complect__checkbox">
                                    <input type="checkbox" name="complectCheckbox" id="" />
                                    <span class="checkmark"></span>
                                </label>
                                <div style="text-align: center">
                                    <img src="./assets/images/recommendations/recommendations1.jpg" alt="" class="cart__recommendations__image" />
                                </div>

                                <div class="title">
                                    Настенный светильник (бра) Maytoni
                                    MOD106WL-L10G3K
                                </div>
                                <div class="recommendations__inner__item__bot">
                                    <div class="prices">
                                        <div class="current__price">
                                            3 390 ₽
                                        </div>
                                        <div class="old__price">
                                            3 390 ₽
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="recommendations__inner__item">
                                <label class="complect__checkbox">
                                    <input type="checkbox" name="complectCheckbox" id="" />
                                    <span class="checkmark"></span>
                                </label>
                                <div style="text-align: center">
                                    <img src="./assets/images/recommendations/recommendations1.jpg" alt="" class="cart__recommendations__image" />
                                </div>

                                <div class="title">
                                    Настенный светильник (бра) Maytoni
                                    MOD106WL-L10G3K
                                </div>
                                <div class="recommendations__inner__item__bot">
                                    <div class="prices">
                                        <div class="current__price">
                                            3 390 ₽
                                        </div>
                                        <div class="old__price">
                                            3 390 ₽
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="recommendations__inner__price">
                            <div class="recommendations__inner__price__left">
                                <div class="complect__count">
                                    Комплект <span>Нет товаров</span>
                                </div>
                                <div class="price">
                                    <div class="old__price">5 390 ₽</div>
                                    <div class="current__price">
                                        3 390 ₽
                                    </div>
                                </div>
                            </div>
                            <button class="good__item__button" id="addToCartOrder">
                                В корзину комплектом
                            </button>
                        </div>
                    </div>
                </div>
                <div class="default-switcher__item reviews">
                    <div class="reviews__top">
                        <div class="default-switcher__title">
                            Отзывы о товаре
                            <span class="reviews__count">14</span>
                        </div>
                        <div class="review__mark">
                            <div class="stars">
                                <svg>
                                    <use xlink:href="#star" />
                                </svg>
                                <svg>
                                    <use xlink:href="#star" />
                                </svg>
                                <svg>
                                    <use xlink:href="#star" />
                                </svg>
                                <svg>
                                    <use xlink:href="#star" />
                                </svg>
                                <svg>
                                    <use xlink:href="#star" />
                                </svg>
                            </div>
                            <div class="mark">4.7</div>
                        </div>
                    </div>
                    <form action="" class="review__form">
                        <div class="review__form__top">
                            <input type="text" placeholder="Имя" required />
                            <div class="mark__place">
                                <div class="title">Поставить оценку</div>
                                <div class="mark__place__input">
                                    <input type="hidden" value="" id="reviewMark" />

                                    <div class="input__star" mark="1">
                                        <svg>
                                            <use xlink:href="#star" />
                                        </svg>
                                    </div>
                                    <div class="input__star" mark="2">
                                        <svg>
                                            <use xlink:href="#star" />
                                        </svg>
                                    </div>
                                    <div class="input__star" mark="3">
                                        <svg>
                                            <use xlink:href="#star" />
                                        </svg>
                                    </div>
                                    <div class="input__star" mark="4">
                                        <svg>
                                            <use xlink:href="#star" />
                                        </svg>
                                    </div>
                                    <div class="input__star" mark="5">
                                        <svg>
                                            <use xlink:href="#star" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <textarea name="" id="" placeholder="Комментарий" required></textarea>
                        <div class="review__buttons">
                            <button class="review__button add__media">
                                <label for="uploadPhoto">Добавить фото, видео</label><input type="file" value="Добавтиь фото, видео" id="uploadPhoto" />
                            </button>
                            <button type="submit" class="review__button submit">
                                Оставить отзыв
                            </button>
                        </div>
                    </form>
                    <div class="review__items">
                        <div class="review__item">
                            <div class="review__item__top">
                                <div class="name">Жанна</div>
                                <div class="review__mark">
                                    <div class="mark">4.7</div>
                                    <div class="stars">
                                        <svg>
                                            <use xlink:href="#star" />
                                        </svg>
                                        <svg>
                                            <use xlink:href="#star" />
                                        </svg>
                                        <svg>
                                            <use xlink:href="#star" />
                                        </svg>
                                        <svg>
                                            <use xlink:href="#star" />
                                        </svg>
                                        <svg>
                                            <use xlink:href="#star" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="review__item__inner">
                                <div class="title">Комментарий</div>
                                <div class="text">
                                    Хочу сказать спасибо большое за свой
                                    новый матрас Magniflex Merinos. Менеджер
                                    Евгений по телефону не обманул, когда о
                                    нем рассказывал. Действительно классная
                                    и удобная модель. Отдельная
                                    благодарнасть за такую оперативную
                                    быструю доставку))(мой номер заказа был
                                    136) Советую и магазин и данный бренд
                                    матрасов.
                                </div>
                                <div class="media__slider">
                                    <div class="media__slider__inner">
                                        <div class="media__slider__items">
                                            <video class="media__slider__item" src="" controls poster="./assets/images/goodItems/goodItem1.jpeg"></video>
                                            <img class="media__slider__item" src="./assets/images/goodItems/goodItem2.jpeg" alt="" />
                                            <img class="media__slider__item" src="./assets/images/goodItems/goodItem3.jpeg" alt="" />
                                        </div>
                                        <div class="media__slider__buttons">
                                            <button class="arrow__button prev">
                                                <svg class="arrow__button__svg">
                                                    <use xlink:href="#arrow" />
                                                </svg>
                                            </button>
                                            <button class="arrow__button next">
                                                <svg class="arrow__button__svg">
                                                    <use xlink:href="#arrow" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="review__item">
                            <div class="review__item__top">
                                <div class="name">Сергей</div>
                                <div class="review__mark">
                                    <div class="mark">4.7</div>
                                    <div class="stars">
                                        <svg>
                                            <use xlink:href="#star" />
                                        </svg>
                                        <svg>
                                            <use xlink:href="#star" />
                                        </svg>
                                        <svg>
                                            <use xlink:href="#star" />
                                        </svg>
                                        <svg>
                                            <use xlink:href="#star" />
                                        </svg>
                                        <svg>
                                            <use xlink:href="#star" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="review__item__inner">
                                <div class="title">Комментарий</div>
                                <div class="text">
                                    Предыдущий матрас меринос, прослужил нам
                                    более 7 лет, сейчас не стали ничего
                                    придумывать и купили точно такой же.
                                    Спасибо за скидку и оперативную
                                    доставку.
                                </div>
                                <div class="media__slider"></div>
                            </div>
                        </div>
                        <div class="review__item">
                            <div class="review__item__top">
                                <div class="name">Виктор</div>
                                <div class="review__mark">
                                    <div class="mark">4.7</div>
                                    <div class="stars">
                                        <svg>
                                            <use xlink:href="#star" />
                                        </svg>
                                        <svg>
                                            <use xlink:href="#star" />
                                        </svg>
                                        <svg>
                                            <use xlink:href="#star" />
                                        </svg>
                                        <svg>
                                            <use xlink:href="#star" />
                                        </svg>
                                        <svg>
                                            <use xlink:href="#star" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="review__item__inner">
                                <div class="title">Комментарий</div>
                                <div class="text">
                                    Покупкой доволен, спасибо за скидку.
                                    Единственный комментарий: плохо что
                                    нельзя оплатить на сайте
                                </div>
                                <div class="media__slider"></div>
                            </div>
                        </div>
                    </div>
                    <a class="default-switcher__item reviews__button" href="#">Читать еще 10 отзывов</a>
                </div>
                <div class="default-switcher__item cart__recommendations lamps card__recommendations recommendations">
                    <div class="recommendations__inner">
                        <div class="recommendations__slider__wrapper">
                            <div class="cart__recommendations__slider">
                                <div class="cart__recommendations__inner__items">
                                    <div class="cart__recommendations__inner__item">
                                        <div style="text-align: center">
                                            <img src="./assets/images/recommendations/recommendations1.jpg" alt="" class="cart__recommendations__image" />
                                        </div>

                                        <div class="title">
                                            Настенный светильник (бра)
                                            Maytoni MOD106WL-L10G3K
                                        </div>
                                        <div class="recommendations__inner__item__bot">
                                            <div class="prices">
                                                <div class="current__price">
                                                    3 390 ₽
                                                </div>
                                                <div class="old__price">
                                                    3 390 ₽
                                                </div>
                                            </div>
                                            <div>
                                                <button class="good__item__button recommendation buy">
                                                    Купить
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart__recommendations__inner__item">
                                        <div style="text-align: center">
                                            <img src="./assets/images/recommendations/recommendations1.jpg" alt="" class="cart__recommendations__image" />
                                        </div>

                                        <div class="title">
                                            Настенный светильник (бра)
                                            Maytoni MOD106WL-L10G3K
                                        </div>
                                        <div class="recommendations__inner__item__bot">
                                            <div class="prices">
                                                <div class="current__price">
                                                    3 390 ₽
                                                </div>
                                                <div class="old__price">
                                                    3 390 ₽
                                                </div>
                                            </div>
                                            <div>
                                                <button class="good__item__button recommendation buy">
                                                    Купить
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart__recommendations__inner__item">
                                        <div style="text-align: center">
                                            <img src="./assets/images/recommendations/recommendations1.jpg" alt="" class="cart__recommendations__image" />
                                        </div>

                                        <div class="title">
                                            Настенный светильник (бра)
                                            Maytoni MOD106WL-L10G3K
                                        </div>
                                        <div class="recommendations__inner__item__bot">
                                            <div class="prices">
                                                <div class="current__price">
                                                    3 390 ₽
                                                </div>
                                                <div class="old__price">
                                                    3 390 ₽
                                                </div>
                                            </div>
                                            <div>
                                                <button class="good__item__button recommendation buy">
                                                    Купить
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart__recommendations__inner__item">
                                        <div style="text-align: center">
                                            <img src="./assets/images/recommendations/recommendations1.jpg" alt="" class="cart__recommendations__image" />
                                        </div>

                                        <div class="title">
                                            Настенный светильник (бра)
                                            Maytoni MOD106WL-L10G3K
                                        </div>
                                        <div class="recommendations__inner__item__bot">
                                            <div class="prices">
                                                <div class="current__price">
                                                    3 390 ₽
                                                </div>
                                                <div class="old__price">
                                                    3 390 ₽
                                                </div>
                                            </div>
                                            <div>
                                                <button class="good__item__button recommendation buy">
                                                    Купить
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart__recommendations__inner__item">
                                        <div style="text-align: center">
                                            <img src="./assets/images/recommendations/recommendations1.jpg" alt="" class="cart__recommendations__image" />
                                        </div>

                                        <div class="title">
                                            Настенный светильник (бра)
                                            Maytoni MOD106WL-L10G3K
                                        </div>
                                        <div class="recommendations__inner__item__bot">
                                            <div class="prices">
                                                <div class="current__price">
                                                    3 390 ₽
                                                </div>
                                                <div class="old__price">
                                                    3 390 ₽
                                                </div>
                                            </div>
                                            <div>
                                                <button class="good__item__button recommendation buy">
                                                    Купить
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart__recommendations__inner__item">
                                        <div style="text-align: center">
                                            <img src="./assets/images/recommendations/recommendations1.jpg" alt="" class="cart__recommendations__image" />
                                        </div>

                                        <div class="title">
                                            Настенный светильник (бра)
                                            Maytoni MOD106WL-L10G3K
                                        </div>
                                        <div class="recommendations__inner__item__bot">
                                            <div class="prices">
                                                <div class="current__price">
                                                    3 390 ₽
                                                </div>
                                                <div class="old__price">
                                                    3 390 ₽
                                                </div>
                                            </div>
                                            <div>
                                                <button class="good__item__button recommendation buy">
                                                    Купить
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cart__recommendations__slider__buttons">
                                    <button class="arrow__button prev">
                                        <svg class="arrow__button__svg">
                                            <use xlink:href="#arrow" />
                                        </svg>
                                    </button>
                                    <button class="arrow__button next">
                                        <svg class="arrow__button__svg">
                                            <use xlink:href="#arrow" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="default-switcher__item videoReview">
                    <div class="default-switcher__title">Видео</div>
                    <div class="video__inner">
                        <div class="video__inner__slider">
                            <div class="video__inner__items">
                                <video src="https://www.youtube.com/watch?v=K4TOrB7at0Y" poster="./assets/images/videoPreview/videoPreview1.jpg" controls class="video__item"></video>
                                <video src="https://www.youtube.com/watch?v=K4TOrB7at0Y" poster="./assets/images/videoPreview/videoPreview1.jpg" controls class="video__item"></video>
                                <video src="https://www.youtube.com/watch?v=K4TOrB7at0Y" poster="./assets/images/videoPreview/videoPreview1.jpg" controls class="video__item"></video>
                            </div>
                            <div class="video__inner__buttons">
                                <button class="arrow__button prev">
                                    <svg class="arrow__button__svg">
                                        <use xlink:href="#arrow" />
                                    </svg>
                                </button>
                                <button class="arrow__button next">
                                    <svg class="arrow__button__svg">
                                        <use xlink:href="#arrow" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="link">Смотреть ещё</a>
                </div>
                <div class="default-switcher__item guarantee">
                    <div class="guarantee__inner">
                        <div class="title">
                            Гарантия <span>2 года</span>
                        </div>
                        <div class="text">
                            <div class="item">
                                Гарантия товара распространяется на
                                электрику и покрытия арматуры, а также любые
                                другие заводские дефекты.
                            </div>
                            <div class="item">
                                Вся продукция в интернет-магазине
                                сертифицирована и имеет соответствующие
                                сертификаты.
                            </div>
                        </div>
                        <img src="./assets/images/svg/svgGuarantee/guarantee.svg" alt="" />
                    </div>
                    <div class="guarantee__bot">
                        <div class="guarantee__bot__title">
                            Сервисное обслуживание
                        </div>
                        <div class="guarantee__bot__items">
                            <div class="guarantee__bot__item">
                                <div class="number">1</div>
                                <div class="text">
                                    Заменить битые <br />плафоны
                                </div>
                            </div>
                            <div class="guarantee__bot__item">
                                <div class="number">2</div>
                                <div class="text">
                                    Заменить потерянные <br />детали
                                    (элементы декора)
                                </div>
                            </div>
                            <div class="guarantee__bot__item">
                                <div class="number">3</div>
                                <div class="text">
                                    Заменить вышедшие из строя
                                    <br />трансформаторы и пульты
                                </div>
                            </div>
                            <div class="guarantee__bot__item">
                                <div class="number">4</div>
                                <div class="text">
                                    Выполнить другие <br />требования
                                    покупателей
                                </div>
                            </div>
                            <div class="guarantee__bot__item">
                                <div class="number">5</div>
                                <div class="text">
                                    Доставка за наш <br />счет
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="default-switcher__item cart__recommendations seriesGoods card__recommendations recommendations">
                    <div class="default-switcher__title">Серия Linia</div>
                    <div class="recommendations__inner">
                        <div class="recommendations__slider__wrapper">
                            <div class="cart__recommendations__slider">
                                <div class="cart__recommendations__inner__items">
                                    <div class="cart__recommendations__inner__item">
                                        <div style="text-align: center">
                                            <img src="./assets/images/recommendations/recommendations1.jpg" alt="" class="cart__recommendations__image" />
                                        </div>

                                        <div class="title">
                                            Настенный светильник (бра)
                                            Maytoni MOD106WL-L10G3K
                                        </div>
                                        <div class="recommendations__inner__item__bot">
                                            <div class="prices">
                                                <div class="current__price">
                                                    3 390 ₽
                                                </div>
                                                <div class="old__price">
                                                    3 390 ₽
                                                </div>
                                            </div>
                                            <div class="buttons">
                                                <a href="#" class="good__item__button recommendation about-good">
                                                    Подробнее
                                                </a>
                                                <button class="good__item__button recommendation buy">
                                                    Купить
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart__recommendations__inner__item">
                                        <div style="text-align: center">
                                            <img src="./assets/images/recommendations/recommendations1.jpg" alt="" class="cart__recommendations__image" />
                                        </div>

                                        <div class="title">
                                            Настенный светильник (бра)
                                            Maytoni MOD106WL-L10G3K
                                        </div>
                                        <div class="recommendations__inner__item__bot">
                                            <div class="prices">
                                                <div class="current__price">
                                                    3 390 ₽
                                                </div>
                                                <div class="old__price">
                                                    3 390 ₽
                                                </div>
                                            </div>
                                            <div class="buttons">
                                                <a href="#" class="good__item__button recommendation about-good">
                                                    Подробнее
                                                </a>
                                                <button class="good__item__button recommendation buy">
                                                    Купить
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart__recommendations__inner__item">
                                        <div style="text-align: center">
                                            <img src="./assets/images/recommendations/recommendations1.jpg" alt="" class="cart__recommendations__image" />
                                        </div>

                                        <div class="title">
                                            Настенный светильник (бра)
                                            Maytoni MOD106WL-L10G3K
                                        </div>
                                        <div class="recommendations__inner__item__bot">
                                            <div class="prices">
                                                <div class="current__price">
                                                    3 390 ₽
                                                </div>
                                                <div class="old__price">
                                                    3 390 ₽
                                                </div>
                                            </div>
                                            <div class="buttons">
                                                <a href="#" class="good__item__button recommendation about-good">
                                                    Подробнее
                                                </a>
                                                <button class="good__item__button recommendation buy">
                                                    Купить
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart__recommendations__inner__item">
                                        <div style="text-align: center">
                                            <img src="./assets/images/recommendations/recommendations1.jpg" alt="" class="cart__recommendations__image" />
                                        </div>

                                        <div class="title">
                                            Настенный светильник (бра)
                                            Maytoni MOD106WL-L10G3K
                                        </div>
                                        <div class="recommendations__inner__item__bot">
                                            <div class="prices">
                                                <div class="current__price">
                                                    3 390 ₽
                                                </div>
                                                <div class="old__price">
                                                    3 390 ₽
                                                </div>
                                            </div>
                                            <div class="buttons">
                                                <a href="#" class="good__item__button recommendation about-good">
                                                    Подробнее
                                                </a>
                                                <button class="good__item__button recommendation buy">
                                                    Купить
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart__recommendations__inner__item">
                                        <div style="text-align: center">
                                            <img src="./assets/images/recommendations/recommendations1.jpg" alt="" class="cart__recommendations__image" />
                                        </div>

                                        <div class="title">
                                            Настенный светильник (бра)
                                            Maytoni MOD106WL-L10G3K
                                        </div>
                                        <div class="recommendations__inner__item__bot">
                                            <div class="prices">
                                                <div class="current__price">
                                                    3 390 ₽
                                                </div>
                                                <div class="old__price">
                                                    3 390 ₽
                                                </div>
                                            </div>
                                            <div class="buttons">
                                                <a href="#" class="good__item__button recommendation about-good">
                                                    Подробнее
                                                </a>
                                                <button class="good__item__button recommendation buy">
                                                    Купить
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart__recommendations__inner__item">
                                        <div style="text-align: center">
                                            <img src="./assets/images/recommendations/recommendations1.jpg" alt="" class="cart__recommendations__image" />
                                        </div>

                                        <div class="title">
                                            Настенный светильник (бра)
                                            Maytoni MOD106WL-L10G3K
                                        </div>
                                        <div class="recommendations__inner__item__bot">
                                            <div class="prices">
                                                <div class="current__price">
                                                    3 390 ₽
                                                </div>
                                                <div class="old__price">
                                                    3 390 ₽
                                                </div>
                                            </div>
                                            <div class="buttons">
                                                <a href="#" class="good__item__button recommendation about-good">
                                                    Подробнее
                                                </a>
                                                <button class="good__item__button recommendation buy">
                                                    Купить
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cart__recommendations__slider__buttons">
                                    <button class="arrow__button prev">
                                        <svg class="arrow__button__svg">
                                            <use xlink:href="#arrow" />
                                        </svg>
                                    </button>
                                    <button class="arrow__button next">
                                        <svg class="arrow__button__svg">
                                            <use xlink:href="#arrow" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="default-switcher__item cart__recommendations collectionGoods card__recommendations recommendations">
                    <div class="default-switcher__title">
                        Коллекция Linia
                    </div>
                    <div class="recommendations__inner">
                        <div class="recommendations__slider__wrapper">
                            <div class="cart__recommendations__slider">
                                <div class="cart__recommendations__inner__items">
                                    <div class="cart__recommendations__inner__item">
                                        <div style="text-align: center">
                                            <img src="./assets/images/recommendations/recommendations1.jpg" alt="" class="cart__recommendations__image" />
                                        </div>

                                        <div class="title">
                                            Настенный светильник (бра)
                                            Maytoni MOD106WL-L10G3K
                                        </div>
                                        <div class="recommendations__inner__item__bot">
                                            <div class="prices">
                                                <div class="current__price">
                                                    3 390 ₽
                                                </div>
                                                <div class="old__price">
                                                    3 390 ₽
                                                </div>
                                            </div>
                                            <div class="buttons">
                                                <a href="#" class="good__item__button recommendation about-good">
                                                    Подробнее
                                                </a>
                                                <button class="good__item__button recommendation buy">
                                                    Купить
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart__recommendations__inner__item">
                                        <div style="text-align: center">
                                            <img src="./assets/images/recommendations/recommendations1.jpg" alt="" class="cart__recommendations__image" />
                                        </div>

                                        <div class="title">
                                            Настенный светильник (бра)
                                            Maytoni MOD106WL-L10G3K
                                        </div>
                                        <div class="recommendations__inner__item__bot">
                                            <div class="prices">
                                                <div class="current__price">
                                                    3 390 ₽
                                                </div>
                                                <div class="old__price">
                                                    3 390 ₽
                                                </div>
                                            </div>
                                            <div class="buttons">
                                                <a href="#" class="good__item__button recommendation about-good">
                                                    Подробнее
                                                </a>
                                                <button class="good__item__button recommendation buy">
                                                    Купить
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart__recommendations__inner__item">
                                        <div style="text-align: center">
                                            <img src="./assets/images/recommendations/recommendations1.jpg" alt="" class="cart__recommendations__image" />
                                        </div>

                                        <div class="title">
                                            Настенный светильник (бра)
                                            Maytoni MOD106WL-L10G3K
                                        </div>
                                        <div class="recommendations__inner__item__bot">
                                            <div class="prices">
                                                <div class="current__price">
                                                    3 390 ₽
                                                </div>
                                                <div class="old__price">
                                                    3 390 ₽
                                                </div>
                                            </div>
                                            <div class="buttons">
                                                <a href="#" class="good__item__button recommendation about-good">
                                                    Подробнее
                                                </a>
                                                <button class="good__item__button recommendation buy">
                                                    Купить
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart__recommendations__inner__item">
                                        <div style="text-align: center">
                                            <img src="./assets/images/recommendations/recommendations1.jpg" alt="" class="cart__recommendations__image" />
                                        </div>

                                        <div class="title">
                                            Настенный светильник (бра)
                                            Maytoni MOD106WL-L10G3K
                                        </div>
                                        <div class="recommendations__inner__item__bot">
                                            <div class="prices">
                                                <div class="current__price">
                                                    3 390 ₽
                                                </div>
                                                <div class="old__price">
                                                    3 390 ₽
                                                </div>
                                            </div>
                                            <div class="buttons">
                                                <a href="#" class="good__item__button recommendation about-good">
                                                    Подробнее
                                                </a>
                                                <button class="good__item__button recommendation buy">
                                                    Купить
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart__recommendations__inner__item">
                                        <div style="text-align: center">
                                            <img src="./assets/images/recommendations/recommendations1.jpg" alt="" class="cart__recommendations__image" />
                                        </div>

                                        <div class="title">
                                            Настенный светильник (бра)
                                            Maytoni MOD106WL-L10G3K
                                        </div>
                                        <div class="recommendations__inner__item__bot">
                                            <div class="prices">
                                                <div class="current__price">
                                                    3 390 ₽
                                                </div>
                                                <div class="old__price">
                                                    3 390 ₽
                                                </div>
                                            </div>
                                            <div class="buttons">
                                                <a href="#" class="good__item__button recommendation about-good">
                                                    Подробнее
                                                </a>
                                                <button class="good__item__button recommendation buy">
                                                    Купить
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart__recommendations__inner__item">
                                        <div style="text-align: center">
                                            <img src="./assets/images/recommendations/recommendations1.jpg" alt="" class="cart__recommendations__image" />
                                        </div>

                                        <div class="title">
                                            Настенный светильник (бра)
                                            Maytoni MOD106WL-L10G3K
                                        </div>
                                        <div class="recommendations__inner__item__bot">
                                            <div class="prices">
                                                <div class="current__price">
                                                    3 390 ₽
                                                </div>
                                                <div class="old__price">
                                                    3 390 ₽
                                                </div>
                                            </div>
                                            <div class="buttons">
                                                <a href="#" class="good__item__button recommendation about-good">
                                                    Подробнее
                                                </a>
                                                <button class="good__item__button recommendation buy">
                                                    Купить
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cart__recommendations__slider__buttons">
                                    <button class="arrow__button prev">
                                        <svg class="arrow__button__svg">
                                            <use xlink:href="#arrow" />
                                        </svg>
                                    </button>
                                    <button class="arrow__button next">
                                        <svg class="arrow__button__svg">
                                            <use xlink:href="#arrow" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="default-switcher__item cart__recommendations analogs card__recommendations recommendations">
                    <div class="default-switcher__title">Аналоги</div>
                    <div class="recommendations__inner">
                        <div class="recommendations__slider__wrapper">
                            <div class="cart__recommendations__slider">
                                <div class="cart__recommendations__inner__items">
                                    <div class="cart__recommendations__inner__item">
                                        <div style="text-align: center">
                                            <img src="./assets/images/recommendations/recommendations1.jpg" alt="" class="cart__recommendations__image" />
                                        </div>

                                        <div class="title">
                                            Настенный светильник (бра)
                                            Maytoni MOD106WL-L10G3K
                                        </div>
                                        <div class="recommendations__inner__item__bot">
                                            <div class="prices">
                                                <div class="current__price">
                                                    3 390 ₽
                                                </div>
                                                <div class="old__price">
                                                    3 390 ₽
                                                </div>
                                            </div>
                                            <div class="buttons">
                                                <a href="#" class="good__item__button recommendation about-good">
                                                    Подробнее
                                                </a>
                                                <button class="good__item__button recommendation buy">
                                                    Купить
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart__recommendations__inner__item">
                                        <div style="text-align: center">
                                            <img src="./assets/images/recommendations/recommendations1.jpg" alt="" class="cart__recommendations__image" />
                                        </div>

                                        <div class="title">
                                            Настенный светильник (бра)
                                            Maytoni MOD106WL-L10G3K
                                        </div>
                                        <div class="recommendations__inner__item__bot">
                                            <div class="prices">
                                                <div class="current__price">
                                                    3 390 ₽
                                                </div>
                                                <div class="old__price">
                                                    3 390 ₽
                                                </div>
                                            </div>
                                            <div class="buttons">
                                                <a href="#" class="good__item__button recommendation about-good">
                                                    Подробнее
                                                </a>
                                                <button class="good__item__button recommendation buy">
                                                    Купить
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart__recommendations__inner__item">
                                        <div style="text-align: center">
                                            <img src="./assets/images/recommendations/recommendations1.jpg" alt="" class="cart__recommendations__image" />
                                        </div>

                                        <div class="title">
                                            Настенный светильник (бра)
                                            Maytoni MOD106WL-L10G3K
                                        </div>
                                        <div class="recommendations__inner__item__bot">
                                            <div class="prices">
                                                <div class="current__price">
                                                    3 390 ₽
                                                </div>
                                                <div class="old__price">
                                                    3 390 ₽
                                                </div>
                                            </div>
                                            <div class="buttons">
                                                <a href="#" class="good__item__button recommendation about-good">
                                                    Подробнее
                                                </a>
                                                <button class="good__item__button recommendation buy">
                                                    Купить
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart__recommendations__inner__item">
                                        <div style="text-align: center">
                                            <img src="./assets/images/recommendations/recommendations1.jpg" alt="" class="cart__recommendations__image" />
                                        </div>

                                        <div class="title">
                                            Настенный светильник (бра)
                                            Maytoni MOD106WL-L10G3K
                                        </div>
                                        <div class="recommendations__inner__item__bot">
                                            <div class="prices">
                                                <div class="current__price">
                                                    3 390 ₽
                                                </div>
                                                <div class="old__price">
                                                    3 390 ₽
                                                </div>
                                            </div>
                                            <div class="buttons">
                                                <a href="#" class="good__item__button recommendation about-good">
                                                    Подробнее
                                                </a>
                                                <button class="good__item__button recommendation buy">
                                                    Купить
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart__recommendations__inner__item">
                                        <div style="text-align: center">
                                            <img src="./assets/images/recommendations/recommendations1.jpg" alt="" class="cart__recommendations__image" />
                                        </div>

                                        <div class="title">
                                            Настенный светильник (бра)
                                            Maytoni MOD106WL-L10G3K
                                        </div>
                                        <div class="recommendations__inner__item__bot">
                                            <div class="prices">
                                                <div class="current__price">
                                                    3 390 ₽
                                                </div>
                                                <div class="old__price">
                                                    3 390 ₽
                                                </div>
                                            </div>
                                            <div class="buttons">
                                                <a href="#" class="good__item__button recommendation about-good">
                                                    Подробнее
                                                </a>
                                                <button class="good__item__button recommendation buy">
                                                    Купить
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart__recommendations__inner__item">
                                        <div style="text-align: center">
                                            <img src="./assets/images/recommendations/recommendations1.jpg" alt="" class="cart__recommendations__image" />
                                        </div>

                                        <div class="title">
                                            Настенный светильник (бра)
                                            Maytoni MOD106WL-L10G3K
                                        </div>
                                        <div class="recommendations__inner__item__bot">
                                            <div class="prices">
                                                <div class="current__price">
                                                    3 390 ₽
                                                </div>
                                                <div class="old__price">
                                                    3 390 ₽
                                                </div>
                                            </div>
                                            <div class="buttons">
                                                <a href="#" class="good__item__button recommendation about-good">
                                                    Подробнее
                                                </a>
                                                <button class="good__item__button recommendation buy">
                                                    Купить
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cart__recommendations__slider__buttons">
                                    <button class="arrow__button prev">
                                        <svg class="arrow__button__svg">
                                            <use xlink:href="#arrow" />
                                        </svg>
                                    </button>
                                    <button class="arrow__button next">
                                        <svg class="arrow__button__svg">
                                            <use xlink:href="#arrow" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Card__info -->
    <section class="price-block">
        <div class="container">
            <div class="price-block__inner">
                <div class="price-block__inner__left">
                    <div class="prices">
                        <div class="current__price">3 390 ₽</div>
                        <div class="prices__right">
                            <div class="old__price">5 390 ₽</div>
                            <div class="sale">-40%</div>
                        </div>
                    </div>
                    <div class="logIn">
                        <img src="./assets/images/defaultSwitcher/gifts/giftImage.png" alt="" />
                        <div class="title">
                            <a class="link" href="#"> Авторизируйтесь </a>
                            , чтобы снизить цену
                        </div>
                    </div>
                </div>
                <button class="good__item__button buy">
                    Купить сейчас <b>со скидкой</b>
                </button>
            </div>
        </div>
    </section>
    <!-- Hits -->
    <section class="hits store__goods">
        <div class="container">
            <div class="store__goods__inner">
                <div class="store__goods__top">
                    <div class="store__goods__title">Похожие товары</div>
                    <a href="#" class="show__more">Смотреть все </a>
                </div>
                <div class="goods__tags__wrapper">
                    <div class="store__goods__tags">
                        <div class="store__goods__tags__inner">
                            <div class="store__good__tag">
                                <input type="radio" name="goodSwitcher" id="goodItem0" checked>
                                <label for="goodItem0">Люстры</label>
                            </div>
                            <div class="store__good__tag">
                                <input type="radio" name="goodSwitcher" id="goodItem1">
                                <label for="goodItem1">Светильники</label>

                            </div>
                            <div class="store__good__tag">
                                <input type="radio" name="goodSwitcher" id="goodItem2">
                                <label for="goodItem2">Бра</label>
                            </div>
                            <div class="store__good__tag">
                                <input type="radio" name="goodSwitcher" id="goodItem3">
                                <label for="goodItem3">Торшеры</label>
                            </div>
                            <div class="store__good__tag">
                                <input type="radio" name="goodSwitcher" id="goodItem4">
                                <label for="goodItem4">Настенные</label>

                            </div>
                            <div class="store__good__tag">
                                <input type="radio" name="goodSwitcher" id="goodItem5">
                                <label for="goodItem5">Прожекторы</label>

                            </div>
                            <div class="store__good__tag">
                                <input type="radio" name="goodSwitcher" id="goodItem6">
                                <label for="goodItem6">Настрольные лампы</label>

                            </div>
                        </div>
                        <div class="store__goods__tags__buttons">
                            <button class="arrow__button prev arrow__button--small">
                                <svg class="arrow__button__svg">
                                    <use xlink:href="#arrow" />
                                </svg>
                            </button>
                            <button class="arrow__button next arrow__button--small">
                                <svg class="arrow__button__svg">
                                    <use xlink:href="#arrow" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="store__goods__tabs">
                    <div class="store__goods__wrapper goodItem0 store__goods__wrapper--active">
                        <div class="store__goods__slider">
                            <div class="store__goods__products">
                                <div class="good__item">
                                    <div class="good__item__top">
                                        <div class="good__item__tags">
                                            <div class="good__item__tag">
                                                Новинка
                                            </div>
                                        </div>
                                        <div class="good__item__reactions">
                                            <button class="compare">
                                                <svg>
                                                    <use xlink:href="#compare" />
                                                </svg>
                                            </button>
                                            <button class="like">
                                                <svg>
                                                    <use xlink:href="#favourite" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="store__good__images" style="text-align: center">
                                        <img src="./assets/images/goodItems/goodItem1.jpeg" alt="" class="good__item__image good__item__image--active" id="" />
                                        <img src="./assets/images/goodItems/goodItem2.jpeg" alt="" class="good__item__image" id="" />
                                        <img src="./assets/images/goodItems/goodItem3.jpeg" alt="" class="good__item__image" id="" />
                                        <img src="./assets/images/goodItems/goodItem4.jpeg" alt="" class="good__item__image" id="" />

                                        <div class="good__item__image-switcher"></div>
                                    </div>
                                    <div class="good__item__bonuses">
                                        <div class="good__item__bonus sale">
                                            Скидка 20%
                                        </div>
                                    </div>
                                    <div class="good__item__image__buttons"></div>
                                    <div class="good__item__info">
                                        <div class="articule">
                                            Артикул: 351018510
                                        </div>
                                        <div class="title">
                                            Настенный светильник (бра) Freya
                                            FR5133WL-01CH
                                        </div>
                                        <div class="text">
                                            <div class="manufacturer">
                                                Производитель:
                                                <span>Freya</span>
                                            </div>
                                            <div class="power">
                                                Мощность (вт): <span>60</span>
                                            </div>
                                            <div class="counrty">
                                                Страна бренда:
                                                <span>Германия</span>
                                            </div>
                                        </div>
                                        <div class="parameters">
                                            <div class="plinth">
                                                <img src="./assets/images/svg/lamp.svg" alt="" class="parametrs__image" />
                                                <div class="value">
                                                    Цоколь: <span>E24</span>
                                                </div>
                                            </div>
                                            <div class="protection">
                                                <img src="./assets/images/svg/lock.svg" alt="" class="parametrs__image" />
                                                <div class="value">
                                                    IP степень пылевлагозащиты:
                                                    <span>20</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="stores__info">
                                            <div class="yandex">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/yandexScores.svg" alt="" />
                                                    <div class="count">389</div>
                                                </div>
                                                <div class="stores__info__right">
                                                    балла Плюса
                                                </div>
                                            </div>
                                            <div class="split">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/splitScores.svg" alt="" />
                                                    <div class="count">
                                                        3672 ₽
                                                    </div>
                                                </div>
                                                <div class="stores__info__right">
                                                    в сплит
                                                </div>
                                            </div>
                                            <div class="dolyami">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/dolyamiScores.svg" alt="" />
                                                </div>
                                                <div class="stores__info__right">
                                                    долями
                                                </div>
                                            </div>
                                            <div class="spay">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/spay.png" alt="" />
                                                </div>
                                                <div class="stores__info__right">
                                                    Сбер
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bottom__info">
                                            <div class="prices">
                                                <div class="current__price">
                                                    85 672 ₽
                                                </div>
                                                <div class="old__price">
                                                    95 672 ₽
                                                </div>
                                            </div>
                                            <div class="availability">
                                                <div class="unavailable">
                                                    <span>Нет в наличии</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buttons">
                                            <button class="good__item__button admisson">
                                                Быстрый заказ
                                            </button>

                                        </div>
                                    </div>
                                </div>
                                <div class="good__item">
                                    <div class="good__item__top">
                                        <div class="good__item__tags">
                                            <div class="good__item__tag">
                                                Новинка
                                            </div>
                                        </div>
                                        <div class="good__item__reactions">
                                            <button class="compare">
                                                <svg>
                                                    <use xlink:href="#compare" />
                                                </svg>
                                            </button>
                                            <button class="like">
                                                <svg>
                                                    <use xlink:href="#favourite" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="store__good__images" style="text-align: center">
                                        <img src="./assets/images/goodItems/goodItem2.jpeg" alt="" class="good__item__image good__item__image--active" id="" />
                                        <img src="./assets/images/goodItems/goodItem3.jpeg" alt="" class="good__item__image" id="" />
                                        <img src="./assets/images/goodItems/goodItem4.jpeg" alt="" class="good__item__image" id="" />
                                        <div class="good__item__image-switcher"></div>
                                    </div>
                                    <div class="good__item__bonuses">
                                        <div class="good__item__bonus sale">
                                            Скидка 20%
                                        </div>
                                    </div>
                                    <div class="good__item__image__buttons"></div>
                                    <div class="good__item__info">
                                        <div class="articule">
                                            Артикул: 351018510
                                        </div>
                                        <div class="title">
                                            Настенный светильник (бра) Freya
                                            FR5133WL-01CH
                                        </div>
                                        <div class="text">
                                            <div class="manufacturer">
                                                Производитель:
                                                <span>Freya</span>
                                            </div>
                                            <div class="power">
                                                Мощность (вт): <span>60</span>
                                            </div>
                                            <div class="counrty">
                                                Страна бренда:
                                                <span>Германия</span>
                                            </div>
                                        </div>
                                        <div class="parameters">
                                            <div class="plinth">
                                                <img src="./assets/images/svg/lamp.svg" alt="" class="parametrs__image" />
                                                <div class="value">
                                                    Цоколь: <span>E24</span>
                                                </div>
                                            </div>
                                            <div class="protection">
                                                <img src="./assets/images/svg/lock.svg" alt="" class="parametrs__image" />
                                                <div class="value">
                                                    IP степень пылевлагозащиты:
                                                    <span>20</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="stores__info">
                                            <div class="yandex">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/yandexScores.svg" alt="" />
                                                    <div class="count">389</div>
                                                </div>
                                                <div class="stores__info__right">
                                                    балла Плюса
                                                </div>
                                            </div>
                                            <div class="split">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/splitScores.svg" alt="" />
                                                    <div class="count">
                                                        3672 ₽
                                                    </div>
                                                </div>
                                                <div class="stores__info__right">
                                                    в сплит
                                                </div>
                                            </div>
                                            <div class="dolyami">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/dolyamiScores.svg" alt="" />
                                                </div>
                                                <div class="stores__info__right">
                                                    долями
                                                </div>
                                            </div>
                                            <div class="spay">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/spay.png" alt="" />
                                                </div>
                                                <div class="stores__info__right">
                                                    Сбер
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bottom__info">
                                            <div class="prices">
                                                <div class="current__price">
                                                    85 672 ₽
                                                </div>
                                            </div>
                                            <div class="availability">
                                                <div class="unavailable">
                                                    Нет в наличии
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buttons">
                                            <button class="good__item__button admisson">
                                                Уточнить наличие
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="good__item">
                                    <div class="good__item__top">
                                        <div class="good__item__tags">
                                            <div class="good__item__tag">
                                                Новинка
                                            </div>
                                        </div>
                                        <div class="good__item__reactions">
                                            <button class="compare">
                                                <svg>
                                                    <use xlink:href="#compare" />
                                                </svg>
                                            </button>
                                            <button class="like">
                                                <svg>
                                                    <use xlink:href="#favourite" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="store__good__images" style="text-align: center">
                                        <img src="./assets/images/goodItems/goodItem3.jpeg" alt="" class="good__item__image good__item__image--active" id="" />
                                        <img src="./assets/images/goodItems/goodItem4.jpeg" alt="" class="good__item__image" id="" />
                                        <img src="./assets/images/goodItems/goodItem4.jpeg" alt="" class="good__item__image" id="" />
                                        <img src="./assets/images/goodItems/goodItem2.jpeg" alt="" class="good__item__image" id="" />
                                        <img src="./assets/images/goodItems/goodItem1.jpeg" alt="" class="good__item__image" id="" />

                                        <div class="good__item__image-switcher"></div>
                                    </div>
                                    <div class="good__item__bonuses">
                                        <div class="good__item__bonus sale">
                                            Скидка 20%
                                        </div>
                                    </div>
                                    <div class="good__item__image__buttons"></div>
                                    <div class="good__item__info">
                                        <div class="articule">
                                            Артикул: 351018510
                                        </div>
                                        <div class="title">
                                            Настенный светильник (бра) Freya
                                            FR5133WL-01CH
                                        </div>
                                        <div class="text">
                                            <div class="manufacturer">
                                                Производитель:
                                                <span>Freya</span>
                                            </div>
                                            <div class="power">
                                                Мощность (вт): <span>60</span>
                                            </div>
                                            <div class="counrty">
                                                Страна бренда:
                                                <span>Германия</span>
                                            </div>
                                        </div>
                                        <div class="parameters">
                                            <div class="plinth">
                                                <img src="./assets/images/svg/lamp.svg" alt="" class="parametrs__image" />
                                                <div class="value">
                                                    Цоколь: <span>E24</span>
                                                </div>
                                            </div>
                                            <div class="protection">
                                                <img src="./assets/images/svg/lock.svg" alt="" class="parametrs__image" />
                                                <div class="value">
                                                    IP степень пылевлагозащиты:
                                                    <span>20</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="stores__info">
                                            <div class="yandex">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/yandexScores.svg" alt="" />
                                                    <div class="count">389</div>
                                                </div>
                                                <div class="stores__info__right">
                                                    балла Плюса
                                                </div>
                                            </div>
                                            <div class="split">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/splitScores.svg" alt="" />
                                                    <div class="count">
                                                        3672 ₽
                                                    </div>
                                                </div>
                                                <div class="stores__info__right">
                                                    в сплит
                                                </div>
                                            </div>
                                            <div class="dolyami">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/dolyamiScores.svg" alt="" />
                                                </div>
                                                <div class="stores__info__right">
                                                    долями
                                                </div>
                                            </div>
                                            <div class="spay">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/spay.png" alt="" />
                                                </div>
                                                <div class="stores__info__right">
                                                    Сбер
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bottom__info">
                                            <div class="prices">
                                                <div class="current__price">
                                                    85 672 ₽
                                                </div>
                                            </div>
                                            <div class="availability">
                                                <div class="available">
                                                    В наличии:
                                                    <span>200 шт.</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buttons">
                                            <button class="good__item__button order">
                                                Быстрый заказ
                                            </button>
                                            <button class="good__item__button buy">
                                                Купить
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="good__item">
                                    <div class="good__item__top">
                                        <div class="good__item__tags">
                                            <div class="good__item__tag">
                                                Новинка
                                            </div>
                                        </div>
                                        <div class="good__item__reactions">
                                            <button class="compare">
                                                <svg>
                                                    <use xlink:href="#compare" />
                                                </svg>
                                            </button>
                                            <button class="like">
                                                <svg>
                                                    <use xlink:href="#favourite" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="store__good__images" style="text-align: center">
                                        <img src="./assets/images/goodItems/goodItem1.jpeg" alt="" class="good__item__image good__item__image--active" id="" />
                                        <img src="./assets/images/goodItems/goodItem2.jpeg" alt="" class="good__item__image" id="" />
                                        <img src="./assets/images/goodItems/goodItem3.jpeg" alt="" class="good__item__image" id="" />
                                        <img src="./assets/images/goodItems/goodItem4.jpeg" alt="" class="good__item__image" id="" />

                                        <div class="good__item__image-switcher"></div>
                                    </div>
                                    <div class="good__item__bonuses">
                                        <div class="good__item__bonus sale">
                                            Скидка 20%
                                        </div>
                                    </div>
                                    <div class="good__item__image__buttons"></div>
                                    <div class="good__item__info">
                                        <div class="articule">
                                            Артикул: 351018510
                                        </div>
                                        <div class="title">
                                            Настенный светильник (бра) Freya
                                            FR5133WL-01CH
                                        </div>
                                        <div class="text">
                                            <div class="manufacturer">
                                                Производитель:
                                                <span>Freya</span>
                                            </div>
                                            <div class="power">
                                                Мощность (вт): <span>60</span>
                                            </div>
                                            <div class="counrty">
                                                Страна бренда:
                                                <span>Германия</span>
                                            </div>
                                        </div>
                                        <div class="parameters">
                                            <div class="plinth">
                                                <img src="./assets/images/svg/lamp.svg" alt="" class="parametrs__image" />
                                                <div class="value">
                                                    Цоколь: <span>E24</span>
                                                </div>
                                            </div>
                                            <div class="protection">
                                                <img src="./assets/images/svg/lock.svg" alt="" class="parametrs__image" />
                                                <div class="value">
                                                    IP степень пылевлагозащиты:
                                                    <span>20</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="stores__info">
                                            <div class="yandex">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/yandexScores.svg" alt="" />
                                                    <div class="count">389</div>
                                                </div>
                                                <div class="stores__info__right">
                                                    балла Плюса
                                                </div>
                                            </div>
                                            <div class="split">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/splitScores.svg" alt="" />
                                                    <div class="count">
                                                        3672 ₽
                                                    </div>
                                                </div>
                                                <div class="stores__info__right">
                                                    в сплит
                                                </div>
                                            </div>
                                            <div class="dolyami">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/dolyamiScores.svg" alt="" />
                                                </div>
                                                <div class="stores__info__right">
                                                    долями
                                                </div>
                                            </div>
                                            <div class="spay">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/spay.png" alt="" />
                                                </div>
                                                <div class="stores__info__right">
                                                    Сбер
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bottom__info">
                                            <div class="prices">
                                                <div class="current__price">
                                                    85 672 ₽
                                                </div>
                                                <div class="old__price">
                                                    95 672 ₽
                                                </div>
                                            </div>
                                            <div class="availability">
                                                <div class="available">
                                                    В наличии:
                                                    <span>200 шт.</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buttons">
                                            <button class="good__item__button order">
                                                Быстрый заказ
                                            </button>
                                            <button class="good__item__button buy">
                                                Купить
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="good__item">
                                    <div class="good__item__top">
                                        <div class="good__item__tags">
                                            <div class="good__item__tag">
                                                Новинка
                                            </div>
                                        </div>
                                        <div class="good__item__reactions">
                                            <button class="compare">
                                                <svg>
                                                    <use xlink:href="#compare" />
                                                </svg>
                                            </button>
                                            <button class="like active">
                                                <svg>
                                                    <use xlink:href="#favourite" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="store__good__images" style="text-align: center">
                                        <img src="./assets/images/goodItems/goodItem1.jpeg" alt="" class="good__item__image good__item__image--active" id="" />
                                        <img src="./assets/images/goodItems/goodItem2.jpeg" alt="" class="good__item__image" id="" />
                                        <img src="./assets/images/goodItems/goodItem3.jpeg" alt="" class="good__item__image" id="" />
                                        <img src="./assets/images/goodItems/goodItem4.jpeg" alt="" class="good__item__image" id="" />

                                        <div class="good__item__image-switcher"></div>
                                    </div>
                                    <div class="good__item__bonuses">
                                        <div class="good__item__bonus sale">
                                            Скидка 20%
                                        </div>
                                    </div>
                                    <div class="good__item__image__buttons"></div>
                                    <div class="good__item__info">
                                        <div class="articule">
                                            Артикул: 351018510
                                        </div>
                                        <div class="title">
                                            Настенный светильник (бра) Freya
                                            FR5133WL-01CH
                                        </div>
                                        <div class="text">
                                            <div class="manufacturer">
                                                Производитель:
                                                <span>Freya</span>
                                            </div>
                                            <div class="power">
                                                Мощность (вт): <span>60</span>
                                            </div>
                                            <div class="counrty">
                                                Страна бренда:
                                                <span>Германия</span>
                                            </div>
                                        </div>
                                        <div class="parameters">
                                            <div class="plinth">
                                                <img src="./assets/images/svg/lamp.svg" alt="" class="parametrs__image" />
                                                <div class="value">
                                                    Цоколь: <span>E24</span>
                                                </div>
                                            </div>
                                            <div class="protection">
                                                <img src="./assets/images/svg/lock.svg" alt="" class="parametrs__image" />
                                                <div class="value">
                                                    IP степень пылевлагозащиты:
                                                    <span>20</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="stores__info">
                                            <div class="yandex">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/yandexScores.svg" alt="" />
                                                    <div class="count">389</div>
                                                </div>
                                                <div class="stores__info__right">
                                                    балла Плюса
                                                </div>
                                            </div>
                                            <div class="split">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/splitScores.svg" alt="" />
                                                    <div class="count">
                                                        3672 ₽
                                                    </div>
                                                </div>
                                                <div class="stores__info__right">
                                                    в сплит
                                                </div>
                                            </div>
                                            <div class="dolyami">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/dolyamiScores.svg" alt="" />
                                                </div>
                                                <div class="stores__info__right">
                                                    долями
                                                </div>
                                            </div>
                                            <div class="spay">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/spay.png" alt="" />
                                                </div>
                                                <div class="stores__info__right">
                                                    Сбер
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bottom__info">
                                            <div class="prices">
                                                <div class="current__price">
                                                    85 672 ₽
                                                </div>
                                                <div class="old__price">
                                                    95 672 ₽
                                                </div>
                                            </div>
                                            <div class="availability">
                                                <div class="available">
                                                    В наличии:
                                                    <span>200 шт.</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buttons">
                                            <button class="good__item__button order">
                                                Быстрый заказ
                                            </button>
                                            <button class="good__item__button buy">
                                                Купить
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="good__item">
                                    <div class="good__item__top">
                                        <div class="good__item__tags">
                                            <div class="good__item__tag">
                                                Новинка
                                            </div>
                                        </div>
                                        <div class="good__item__reactions">
                                            <button class="compare">
                                                <svg>
                                                    <use xlink:href="#compare" />
                                                </svg>
                                            </button>
                                            <button class="like">
                                                <svg>
                                                    <use xlink:href="#favourite" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="store__good__images" style="text-align: center">
                                        <img src="./assets/images/goodItems/goodItem1.jpeg" alt="" class="good__item__image good__item__image--active" id="" />
                                        <img src="./assets/images/goodItems/goodItem2.jpeg" alt="" class="good__item__image" id="" />
                                        <img src="./assets/images/goodItems/goodItem3.jpeg" alt="" class="good__item__image" id="" />
                                        <img src="./assets/images/goodItems/goodItem4.jpeg" alt="" class="good__item__image" id="" />

                                        <div class="good__item__image-switcher"></div>
                                    </div>
                                    <div class="good__item__bonuses">
                                        <div class="good__item__bonus sale">
                                            Скидка 20%
                                        </div>
                                    </div>
                                    <div class="good__item__image__buttons"></div>
                                    <div class="good__item__info">
                                        <div class="articule">
                                            Артикул: 351018510
                                        </div>
                                        <div class="title">
                                            Настенный светильник (бра) Freya
                                            FR5133WL-01CH
                                        </div>
                                        <div class="text">
                                            <div class="manufacturer">
                                                Производитель:
                                                <span>Freya</span>
                                            </div>
                                            <div class="power">
                                                Мощность (вт): <span>60</span>
                                            </div>
                                            <div class="counrty">
                                                Страна бренда:
                                                <span>Германия</span>
                                            </div>
                                        </div>
                                        <div class="parameters">
                                            <div class="plinth">
                                                <img src="./assets/images/svg/lamp.svg" alt="" class="parametrs__image" />
                                                <div class="value">
                                                    Цоколь: <span>E24</span>
                                                </div>
                                            </div>
                                            <div class="protection">
                                                <img src="./assets/images/svg/lock.svg" alt="" class="parametrs__image" />
                                                <div class="value">
                                                    IP степень пылевлагозащиты:
                                                    <span>20</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="stores__info">
                                            <div class="yandex">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/yandexScores.svg" alt="" />
                                                    <div class="count">389</div>
                                                </div>
                                                <div class="stores__info__right">
                                                    балла Плюса
                                                </div>
                                            </div>
                                            <div class="split">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/splitScores.svg" alt="" />
                                                    <div class="count">
                                                        3672 ₽
                                                    </div>
                                                </div>
                                                <div class="stores__info__right">
                                                    в сплит
                                                </div>
                                            </div>
                                            <div class="dolyami">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/dolyamiScores.svg" alt="" />
                                                </div>
                                                <div class="stores__info__right">
                                                    долями
                                                </div>
                                            </div>
                                            <div class="spay">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/spay.png" alt="" />
                                                </div>
                                                <div class="stores__info__right">
                                                    Сбер
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bottom__info">
                                            <div class="prices">
                                                <div class="current__price">
                                                    85 672 ₽
                                                </div>
                                                <div class="old__price">
                                                    95 672 ₽
                                                </div>
                                            </div>
                                            <div class="availability">
                                                <div class="available">
                                                    В наличии:
                                                    <span>200 шт.</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buttons">
                                            <button class="good__item__button order">
                                                Быстрый заказ
                                            </button>
                                            <button class="good__item__button buy">
                                                Купить
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="store__goods__products__buttons">
                                <button class="arrow__button prev arrow__button--small">
                                    <svg class="arrow__button__svg">
                                        <use xlink:href="#arrow" />
                                    </svg>
                                </button>
                                <button class="arrow__button next arrow__button--small">
                                    <svg class="arrow__button__svg">
                                        <use xlink:href="#arrow" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="store__goods__wrapper goodItem1">
                        <div class="store__goods__slider">
                            <div class="store__goods__products">
                                <div class="good__item">
                                    <div class="good__item__top">
                                        <div class="good__item__tags">
                                            <div class="good__item__tag">
                                                Новинка
                                            </div>
                                        </div>
                                        <div class="good__item__reactions">
                                            <button class="compare">
                                                <svg>
                                                    <use xlink:href="#compare" />
                                                </svg>
                                            </button>
                                            <button class="like">
                                                <svg>
                                                    <use xlink:href="#favourite" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="store__good__images" style="text-align: center">
                                        <img src="./assets/images/goodItems/goodItem1.jpeg" alt="" class="good__item__image good__item__image--active" id="" />
                                        <img src="./assets/images/goodItems/goodItem2.jpeg" alt="" class="good__item__image" id="" />
                                        <img src="./assets/images/goodItems/goodItem3.jpeg" alt="" class="good__item__image" id="" />
                                        <img src="./assets/images/goodItems/goodItem4.jpeg" alt="" class="good__item__image" id="" />

                                        <div class="good__item__image-switcher"></div>
                                    </div>
                                    <div class="good__item__bonuses">
                                        <div class="good__item__bonus sale">
                                            Скидка 20%
                                        </div>
                                    </div>
                                    <div class="good__item__image__buttons"></div>
                                    <div class="good__item__info">
                                        <div class="articule">
                                            Артикул: 351018510
                                        </div>
                                        <div class="title">
                                            Настенный светильник (бра) Freya
                                            FR5133WL-01CH
                                        </div>
                                        <div class="text">
                                            <div class="manufacturer">
                                                Производитель:
                                                <span>Freya</span>
                                            </div>
                                            <div class="power">
                                                Мощность (вт): <span>60</span>
                                            </div>
                                            <div class="counrty">
                                                Страна бренда:
                                                <span>Германия</span>
                                            </div>
                                        </div>
                                        <div class="parameters">
                                            <div class="plinth">
                                                <img src="./assets/images/svg/lamp.svg" alt="" class="parametrs__image" />
                                                <div class="value">
                                                    Цоколь: <span>E24</span>
                                                </div>
                                            </div>
                                            <div class="protection">
                                                <img src="./assets/images/svg/lock.svg" alt="" class="parametrs__image" />
                                                <div class="value">
                                                    IP степень пылевлагозащиты:
                                                    <span>20</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="stores__info">
                                            <div class="yandex">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/yandexScores.svg" alt="" />
                                                    <div class="count">389</div>
                                                </div>
                                                <div class="stores__info__right">
                                                    балла Плюса
                                                </div>
                                            </div>
                                            <div class="split">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/splitScores.svg" alt="" />
                                                    <div class="count">
                                                        3672 ₽
                                                    </div>
                                                </div>
                                                <div class="stores__info__right">
                                                    в сплит
                                                </div>
                                            </div>
                                            <div class="dolyami">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/dolyamiScores.svg" alt="" />
                                                </div>
                                                <div class="stores__info__right">
                                                    долями
                                                </div>
                                            </div>
                                            <div class="spay">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/spay.png" alt="" />
                                                </div>
                                                <div class="stores__info__right">
                                                    Сбер
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bottom__info">
                                            <div class="prices">
                                                <div class="current__price">
                                                    85 672 ₽
                                                </div>
                                                <div class="old__price">
                                                    95 672 ₽
                                                </div>
                                            </div>
                                            <div class="availability">
                                                <div class="unavailable">
                                                    <span>Нет в наличии</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buttons">
                                            <button class="good__item__button admisson">
                                                Быстрый заказ
                                            </button>

                                        </div>
                                    </div>
                                </div>
                                <div class="good__item">
                                    <div class="good__item__top">
                                        <div class="good__item__tags">
                                            <div class="good__item__tag">
                                                Новинка
                                            </div>
                                        </div>
                                        <div class="good__item__reactions">
                                            <button class="compare">
                                                <svg>
                                                    <use xlink:href="#compare" />
                                                </svg>
                                            </button>
                                            <button class="like">
                                                <svg>
                                                    <use xlink:href="#favourite" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="store__good__images" style="text-align: center">
                                        <img src="./assets/images/goodItems/goodItem2.jpeg" alt="" class="good__item__image good__item__image--active" id="" />
                                        <img src="./assets/images/goodItems/goodItem3.jpeg" alt="" class="good__item__image" id="" />
                                        <img src="./assets/images/goodItems/goodItem4.jpeg" alt="" class="good__item__image" id="" />
                                        <div class="good__item__image-switcher"></div>
                                    </div>
                                    <div class="good__item__bonuses">
                                        <div class="good__item__bonus sale">
                                            Скидка 20%
                                        </div>
                                    </div>
                                    <div class="good__item__image__buttons"></div>
                                    <div class="good__item__info">
                                        <div class="articule">
                                            Артикул: 351018510
                                        </div>
                                        <div class="title">
                                            Настенный светильник (бра) Freya
                                            FR5133WL-01CH
                                        </div>
                                        <div class="text">
                                            <div class="manufacturer">
                                                Производитель:
                                                <span>Freya</span>
                                            </div>
                                            <div class="power">
                                                Мощность (вт): <span>60</span>
                                            </div>
                                            <div class="counrty">
                                                Страна бренда:
                                                <span>Германия</span>
                                            </div>
                                        </div>
                                        <div class="parameters">
                                            <div class="plinth">
                                                <img src="./assets/images/svg/lamp.svg" alt="" class="parametrs__image" />
                                                <div class="value">
                                                    Цоколь: <span>E24</span>
                                                </div>
                                            </div>
                                            <div class="protection">
                                                <img src="./assets/images/svg/lock.svg" alt="" class="parametrs__image" />
                                                <div class="value">
                                                    IP степень пылевлагозащиты:
                                                    <span>20</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="stores__info">
                                            <div class="yandex">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/yandexScores.svg" alt="" />
                                                    <div class="count">389</div>
                                                </div>
                                                <div class="stores__info__right">
                                                    балла Плюса
                                                </div>
                                            </div>
                                            <div class="split">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/splitScores.svg" alt="" />
                                                    <div class="count">
                                                        3672 ₽
                                                    </div>
                                                </div>
                                                <div class="stores__info__right">
                                                    в сплит
                                                </div>
                                            </div>
                                            <div class="dolyami">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/dolyamiScores.svg" alt="" />
                                                </div>
                                                <div class="stores__info__right">
                                                    долями
                                                </div>
                                            </div>
                                            <div class="spay">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/spay.png" alt="" />
                                                </div>
                                                <div class="stores__info__right">
                                                    Сбер
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bottom__info">
                                            <div class="prices">
                                                <div class="current__price">
                                                    85 672 ₽
                                                </div>
                                            </div>
                                            <div class="availability">
                                                <div class="unavailable">
                                                    Нет в наличии
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buttons">
                                            <button class="good__item__button admisson">
                                                Уточнить наличие
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="good__item">
                                    <div class="good__item__top">
                                        <div class="good__item__tags">
                                            <div class="good__item__tag">
                                                Новинка
                                            </div>
                                        </div>
                                        <div class="good__item__reactions">
                                            <button class="compare">
                                                <svg>
                                                    <use xlink:href="#compare" />
                                                </svg>
                                            </button>
                                            <button class="like">
                                                <svg>
                                                    <use xlink:href="#favourite" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="store__good__images" style="text-align: center">
                                        <img src="./assets/images/goodItems/goodItem3.jpeg" alt="" class="good__item__image good__item__image--active" id="" />
                                        <img src="./assets/images/goodItems/goodItem4.jpeg" alt="" class="good__item__image" id="" />
                                        <img src="./assets/images/goodItems/goodItem4.jpeg" alt="" class="good__item__image" id="" />
                                        <img src="./assets/images/goodItems/goodItem2.jpeg" alt="" class="good__item__image" id="" />
                                        <img src="./assets/images/goodItems/goodItem1.jpeg" alt="" class="good__item__image" id="" />

                                        <div class="good__item__image-switcher"></div>
                                    </div>
                                    <div class="good__item__bonuses">
                                        <div class="good__item__bonus sale">
                                            Скидка 20%
                                        </div>
                                    </div>
                                    <div class="good__item__image__buttons"></div>
                                    <div class="good__item__info">
                                        <div class="articule">
                                            Артикул: 351018510
                                        </div>
                                        <div class="title">
                                            Настенный светильник (бра) Freya
                                            FR5133WL-01CH
                                        </div>
                                        <div class="text">
                                            <div class="manufacturer">
                                                Производитель:
                                                <span>Freya</span>
                                            </div>
                                            <div class="power">
                                                Мощность (вт): <span>60</span>
                                            </div>
                                            <div class="counrty">
                                                Страна бренда:
                                                <span>Германия</span>
                                            </div>
                                        </div>
                                        <div class="parameters">
                                            <div class="plinth">
                                                <img src="./assets/images/svg/lamp.svg" alt="" class="parametrs__image" />
                                                <div class="value">
                                                    Цоколь: <span>E24</span>
                                                </div>
                                            </div>
                                            <div class="protection">
                                                <img src="./assets/images/svg/lock.svg" alt="" class="parametrs__image" />
                                                <div class="value">
                                                    IP степень пылевлагозащиты:
                                                    <span>20</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="stores__info">
                                            <div class="yandex">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/yandexScores.svg" alt="" />
                                                    <div class="count">389</div>
                                                </div>
                                                <div class="stores__info__right">
                                                    балла Плюса
                                                </div>
                                            </div>
                                            <div class="split">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/splitScores.svg" alt="" />
                                                    <div class="count">
                                                        3672 ₽
                                                    </div>
                                                </div>
                                                <div class="stores__info__right">
                                                    в сплит
                                                </div>
                                            </div>
                                            <div class="dolyami">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/dolyamiScores.svg" alt="" />
                                                </div>
                                                <div class="stores__info__right">
                                                    долями
                                                </div>
                                            </div>
                                            <div class="spay">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/spay.png" alt="" />
                                                </div>
                                                <div class="stores__info__right">
                                                    Сбер
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bottom__info">
                                            <div class="prices">
                                                <div class="current__price">
                                                    85 672 ₽
                                                </div>
                                            </div>
                                            <div class="availability">
                                                <div class="available">
                                                    В наличии:
                                                    <span>200 шт.</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buttons">
                                            <button class="good__item__button order">
                                                Быстрый заказ
                                            </button>
                                            <button class="good__item__button buy">
                                                Купить
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="good__item">
                                    <div class="good__item__top">
                                        <div class="good__item__tags">
                                            <div class="good__item__tag">
                                                Новинка
                                            </div>
                                        </div>
                                        <div class="good__item__reactions">
                                            <button class="compare">
                                                <svg>
                                                    <use xlink:href="#compare" />
                                                </svg>
                                            </button>
                                            <button class="like">
                                                <svg>
                                                    <use xlink:href="#favourite" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="store__good__images" style="text-align: center">
                                        <img src="./assets/images/goodItems/goodItem1.jpeg" alt="" class="good__item__image good__item__image--active" id="" />
                                        <img src="./assets/images/goodItems/goodItem2.jpeg" alt="" class="good__item__image" id="" />
                                        <img src="./assets/images/goodItems/goodItem3.jpeg" alt="" class="good__item__image" id="" />
                                        <img src="./assets/images/goodItems/goodItem4.jpeg" alt="" class="good__item__image" id="" />

                                        <div class="good__item__image-switcher"></div>
                                    </div>
                                    <div class="good__item__bonuses">
                                        <div class="good__item__bonus sale">
                                            Скидка 20%
                                        </div>
                                    </div>
                                    <div class="good__item__image__buttons"></div>
                                    <div class="good__item__info">
                                        <div class="articule">
                                            Артикул: 351018510
                                        </div>
                                        <div class="title">
                                            Настенный светильник (бра) Freya
                                            FR5133WL-01CH
                                        </div>
                                        <div class="text">
                                            <div class="manufacturer">
                                                Производитель:
                                                <span>Freya</span>
                                            </div>
                                            <div class="power">
                                                Мощность (вт): <span>60</span>
                                            </div>
                                            <div class="counrty">
                                                Страна бренда:
                                                <span>Германия</span>
                                            </div>
                                        </div>
                                        <div class="parameters">
                                            <div class="plinth">
                                                <img src="./assets/images/svg/lamp.svg" alt="" class="parametrs__image" />
                                                <div class="value">
                                                    Цоколь: <span>E24</span>
                                                </div>
                                            </div>
                                            <div class="protection">
                                                <img src="./assets/images/svg/lock.svg" alt="" class="parametrs__image" />
                                                <div class="value">
                                                    IP степень пылевлагозащиты:
                                                    <span>20</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="stores__info">
                                            <div class="yandex">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/yandexScores.svg" alt="" />
                                                    <div class="count">389</div>
                                                </div>
                                                <div class="stores__info__right">
                                                    балла Плюса
                                                </div>
                                            </div>
                                            <div class="split">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/splitScores.svg" alt="" />
                                                    <div class="count">
                                                        3672 ₽
                                                    </div>
                                                </div>
                                                <div class="stores__info__right">
                                                    в сплит
                                                </div>
                                            </div>
                                            <div class="dolyami">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/dolyamiScores.svg" alt="" />
                                                </div>
                                                <div class="stores__info__right">
                                                    долями
                                                </div>
                                            </div>
                                            <div class="spay">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/spay.png" alt="" />
                                                </div>
                                                <div class="stores__info__right">
                                                    Сбер
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bottom__info">
                                            <div class="prices">
                                                <div class="current__price">
                                                    85 672 ₽
                                                </div>
                                                <div class="old__price">
                                                    95 672 ₽
                                                </div>
                                            </div>
                                            <div class="availability">
                                                <div class="available">
                                                    В наличии:
                                                    <span>200 шт.</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buttons">
                                            <button class="good__item__button order">
                                                Быстрый заказ
                                            </button>
                                            <button class="good__item__button buy">
                                                Купить
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="good__item">
                                    <div class="good__item__top">
                                        <div class="good__item__tags">
                                            <div class="good__item__tag">
                                                Новинка
                                            </div>
                                        </div>
                                        <div class="good__item__reactions">
                                            <button class="compare">
                                                <svg>
                                                    <use xlink:href="#compare" />
                                                </svg>
                                            </button>
                                            <button class="like active">
                                                <svg>
                                                    <use xlink:href="#favourite" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="store__good__images" style="text-align: center">
                                        <img src="./assets/images/goodItems/goodItem1.jpeg" alt="" class="good__item__image good__item__image--active" id="" />
                                        <img src="./assets/images/goodItems/goodItem2.jpeg" alt="" class="good__item__image" id="" />
                                        <img src="./assets/images/goodItems/goodItem3.jpeg" alt="" class="good__item__image" id="" />
                                        <img src="./assets/images/goodItems/goodItem4.jpeg" alt="" class="good__item__image" id="" />

                                        <div class="good__item__image-switcher"></div>
                                    </div>
                                    <div class="good__item__bonuses">
                                        <div class="good__item__bonus sale">
                                            Скидка 20%
                                        </div>
                                    </div>
                                    <div class="good__item__image__buttons"></div>
                                    <div class="good__item__info">
                                        <div class="articule">
                                            Артикул: 351018510
                                        </div>
                                        <div class="title">
                                            Настенный светильник (бра) Freya
                                            FR5133WL-01CH
                                        </div>
                                        <div class="text">
                                            <div class="manufacturer">
                                                Производитель:
                                                <span>Freya</span>
                                            </div>
                                            <div class="power">
                                                Мощность (вт): <span>60</span>
                                            </div>
                                            <div class="counrty">
                                                Страна бренда:
                                                <span>Германия</span>
                                            </div>
                                        </div>
                                        <div class="parameters">
                                            <div class="plinth">
                                                <img src="./assets/images/svg/lamp.svg" alt="" class="parametrs__image" />
                                                <div class="value">
                                                    Цоколь: <span>E24</span>
                                                </div>
                                            </div>
                                            <div class="protection">
                                                <img src="./assets/images/svg/lock.svg" alt="" class="parametrs__image" />
                                                <div class="value">
                                                    IP степень пылевлагозащиты:
                                                    <span>20</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="stores__info">
                                            <div class="yandex">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/yandexScores.svg" alt="" />
                                                    <div class="count">389</div>
                                                </div>
                                                <div class="stores__info__right">
                                                    балла Плюса
                                                </div>
                                            </div>
                                            <div class="split">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/splitScores.svg" alt="" />
                                                    <div class="count">
                                                        3672 ₽
                                                    </div>
                                                </div>
                                                <div class="stores__info__right">
                                                    в сплит
                                                </div>
                                            </div>
                                            <div class="dolyami">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/dolyamiScores.svg" alt="" />
                                                </div>
                                                <div class="stores__info__right">
                                                    долями
                                                </div>
                                            </div>
                                            <div class="spay">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/spay.png" alt="" />
                                                </div>
                                                <div class="stores__info__right">
                                                    Сбер
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bottom__info">
                                            <div class="prices">
                                                <div class="current__price">
                                                    85 672 ₽
                                                </div>
                                                <div class="old__price">
                                                    95 672 ₽
                                                </div>
                                            </div>
                                            <div class="availability">
                                                <div class="available">
                                                    В наличии:
                                                    <span>200 шт.</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buttons">
                                            <button class="good__item__button order">
                                                Быстрый заказ
                                            </button>
                                            <button class="good__item__button buy">
                                                Купить
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="good__item">
                                    <div class="good__item__top">
                                        <div class="good__item__tags">
                                            <div class="good__item__tag">
                                                Новинка
                                            </div>
                                        </div>
                                        <div class="good__item__reactions">
                                            <button class="compare">
                                                <svg>
                                                    <use xlink:href="#compare" />
                                                </svg>
                                            </button>
                                            <button class="like">
                                                <svg>
                                                    <use xlink:href="#favourite" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="store__good__images" style="text-align: center">
                                        <img src="./assets/images/goodItems/goodItem1.jpeg" alt="" class="good__item__image good__item__image--active" id="" />
                                        <img src="./assets/images/goodItems/goodItem2.jpeg" alt="" class="good__item__image" id="" />
                                        <img src="./assets/images/goodItems/goodItem3.jpeg" alt="" class="good__item__image" id="" />
                                        <img src="./assets/images/goodItems/goodItem4.jpeg" alt="" class="good__item__image" id="" />

                                        <div class="good__item__image-switcher"></div>
                                    </div>
                                    <div class="good__item__bonuses">
                                        <div class="good__item__bonus sale">
                                            Скидка 20%
                                        </div>
                                    </div>
                                    <div class="good__item__image__buttons"></div>
                                    <div class="good__item__info">
                                        <div class="articule">
                                            Артикул: 351018510
                                        </div>
                                        <div class="title">
                                            Настенный светильник (бра) Freya
                                            FR5133WL-01CH
                                        </div>
                                        <div class="text">
                                            <div class="manufacturer">
                                                Производитель:
                                                <span>Freya</span>
                                            </div>
                                            <div class="power">
                                                Мощность (вт): <span>60</span>
                                            </div>
                                            <div class="counrty">
                                                Страна бренда:
                                                <span>Германия</span>
                                            </div>
                                        </div>
                                        <div class="parameters">
                                            <div class="plinth">
                                                <img src="./assets/images/svg/lamp.svg" alt="" class="parametrs__image" />
                                                <div class="value">
                                                    Цоколь: <span>E24</span>
                                                </div>
                                            </div>
                                            <div class="protection">
                                                <img src="./assets/images/svg/lock.svg" alt="" class="parametrs__image" />
                                                <div class="value">
                                                    IP степень пылевлагозащиты:
                                                    <span>20</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="stores__info">
                                            <div class="yandex">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/yandexScores.svg" alt="" />
                                                    <div class="count">389</div>
                                                </div>
                                                <div class="stores__info__right">
                                                    балла Плюса
                                                </div>
                                            </div>
                                            <div class="split">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/splitScores.svg" alt="" />
                                                    <div class="count">
                                                        3672 ₽
                                                    </div>
                                                </div>
                                                <div class="stores__info__right">
                                                    в сплит
                                                </div>
                                            </div>
                                            <div class="dolyami">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/dolyamiScores.svg" alt="" />
                                                </div>
                                                <div class="stores__info__right">
                                                    долями
                                                </div>
                                            </div>
                                            <div class="spay">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/spay.png" alt="" />
                                                </div>
                                                <div class="stores__info__right">
                                                    Сбер
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bottom__info">
                                            <div class="prices">
                                                <div class="current__price">
                                                    85 672 ₽
                                                </div>
                                                <div class="old__price">
                                                    95 672 ₽
                                                </div>
                                            </div>
                                            <div class="availability">
                                                <div class="available">
                                                    В наличии:
                                                    <span>200 шт.</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buttons">
                                            <button class="good__item__button order">
                                                Быстрый заказ
                                            </button>
                                            <button class="good__item__button buy">
                                                Купить
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="store__goods__products__buttons">
                                <button class="arrow__button prev arrow__button--small">
                                    <svg class="arrow__button__svg">
                                        <use xlink:href="#arrow" />
                                    </svg>
                                </button>
                                <button class="arrow__button next arrow__button--small">
                                    <svg class="arrow__button__svg">
                                        <use xlink:href="#arrow" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="store__goods__wrapper goodItem2">
                        <div class="store__goods__slider">
                            <div class="store__goods__products">
                                <div class="good__item">
                                    <div class="good__item__top">
                                        <div class="good__item__tags">
                                            <div class="good__item__tag">
                                                Новинка
                                            </div>
                                        </div>
                                        <div class="good__item__reactions">
                                            <button class="compare">
                                                <svg>
                                                    <use xlink:href="#compare" />
                                                </svg>
                                            </button>
                                            <button class="like">
                                                <svg>
                                                    <use xlink:href="#favourite" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="store__good__images" style="text-align: center">
                                        <img src="./assets/images/goodItems/goodItem1.jpeg" alt="" class="good__item__image good__item__image--active" id="" />
                                        <img src="./assets/images/goodItems/goodItem2.jpeg" alt="" class="good__item__image" id="" />
                                        <img src="./assets/images/goodItems/goodItem3.jpeg" alt="" class="good__item__image" id="" />
                                        <img src="./assets/images/goodItems/goodItem4.jpeg" alt="" class="good__item__image" id="" />

                                        <div class="good__item__image-switcher"></div>
                                    </div>
                                    <div class="good__item__bonuses">
                                        <div class="good__item__bonus sale">
                                            Скидка 20%
                                        </div>
                                    </div>
                                    <div class="good__item__image__buttons"></div>
                                    <div class="good__item__info">
                                        <div class="articule">
                                            Артикул: 351018510
                                        </div>
                                        <div class="title">
                                            Настенный светильник (бра) Freya
                                            FR5133WL-01CH
                                        </div>
                                        <div class="text">
                                            <div class="manufacturer">
                                                Производитель:
                                                <span>Freya</span>
                                            </div>
                                            <div class="power">
                                                Мощность (вт): <span>60</span>
                                            </div>
                                            <div class="counrty">
                                                Страна бренда:
                                                <span>Германия</span>
                                            </div>
                                        </div>
                                        <div class="parameters">
                                            <div class="plinth">
                                                <img src="./assets/images/svg/lamp.svg" alt="" class="parametrs__image" />
                                                <div class="value">
                                                    Цоколь: <span>E24</span>
                                                </div>
                                            </div>
                                            <div class="protection">
                                                <img src="./assets/images/svg/lock.svg" alt="" class="parametrs__image" />
                                                <div class="value">
                                                    IP степень пылевлагозащиты:
                                                    <span>20</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="stores__info">
                                            <div class="yandex">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/yandexScores.svg" alt="" />
                                                    <div class="count">389</div>
                                                </div>
                                                <div class="stores__info__right">
                                                    балла Плюса
                                                </div>
                                            </div>
                                            <div class="split">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/splitScores.svg" alt="" />
                                                    <div class="count">
                                                        3672 ₽
                                                    </div>
                                                </div>
                                                <div class="stores__info__right">
                                                    в сплит
                                                </div>
                                            </div>
                                            <div class="dolyami">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/dolyamiScores.svg" alt="" />
                                                </div>
                                                <div class="stores__info__right">
                                                    долями
                                                </div>
                                            </div>
                                            <div class="spay">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/spay.png" alt="" />
                                                </div>
                                                <div class="stores__info__right">
                                                    Сбер
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bottom__info">
                                            <div class="prices">
                                                <div class="current__price">
                                                    85 672 ₽
                                                </div>
                                                <div class="old__price">
                                                    95 672 ₽
                                                </div>
                                            </div>
                                            <div class="availability">
                                                <div class="unavailable">
                                                    <span>Нет в наличии</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buttons">
                                            <button class="good__item__button admisson">
                                                Быстрый заказ
                                            </button>

                                        </div>
                                    </div>
                                </div>
                                <div class="good__item">
                                    <div class="good__item__top">
                                        <div class="good__item__tags">
                                            <div class="good__item__tag">
                                                Новинка
                                            </div>
                                        </div>
                                        <div class="good__item__reactions">
                                            <button class="compare">
                                                <svg>
                                                    <use xlink:href="#compare" />
                                                </svg>
                                            </button>
                                            <button class="like">
                                                <svg>
                                                    <use xlink:href="#favourite" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="store__good__images" style="text-align: center">
                                        <img src="./assets/images/goodItems/goodItem2.jpeg" alt="" class="good__item__image good__item__image--active" id="" />
                                        <img src="./assets/images/goodItems/goodItem3.jpeg" alt="" class="good__item__image" id="" />
                                        <img src="./assets/images/goodItems/goodItem4.jpeg" alt="" class="good__item__image" id="" />
                                        <div class="good__item__image-switcher"></div>
                                    </div>
                                    <div class="good__item__bonuses">
                                        <div class="good__item__bonus sale">
                                            Скидка 20%
                                        </div>
                                    </div>
                                    <div class="good__item__image__buttons"></div>
                                    <div class="good__item__info">
                                        <div class="articule">
                                            Артикул: 351018510
                                        </div>
                                        <div class="title">
                                            Настенный светильник (бра) Freya
                                            FR5133WL-01CH
                                        </div>
                                        <div class="text">
                                            <div class="manufacturer">
                                                Производитель:
                                                <span>Freya</span>
                                            </div>
                                            <div class="power">
                                                Мощность (вт): <span>60</span>
                                            </div>
                                            <div class="counrty">
                                                Страна бренда:
                                                <span>Германия</span>
                                            </div>
                                        </div>
                                        <div class="parameters">
                                            <div class="plinth">
                                                <img src="./assets/images/svg/lamp.svg" alt="" class="parametrs__image" />
                                                <div class="value">
                                                    Цоколь: <span>E24</span>
                                                </div>
                                            </div>
                                            <div class="protection">
                                                <img src="./assets/images/svg/lock.svg" alt="" class="parametrs__image" />
                                                <div class="value">
                                                    IP степень пылевлагозащиты:
                                                    <span>20</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="stores__info">
                                            <div class="yandex">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/yandexScores.svg" alt="" />
                                                    <div class="count">389</div>
                                                </div>
                                                <div class="stores__info__right">
                                                    балла Плюса
                                                </div>
                                            </div>
                                            <div class="split">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/splitScores.svg" alt="" />
                                                    <div class="count">
                                                        3672 ₽
                                                    </div>
                                                </div>
                                                <div class="stores__info__right">
                                                    в сплит
                                                </div>
                                            </div>
                                            <div class="dolyami">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/dolyamiScores.svg" alt="" />
                                                </div>
                                                <div class="stores__info__right">
                                                    долями
                                                </div>
                                            </div>
                                            <div class="spay">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/spay.png" alt="" />
                                                </div>
                                                <div class="stores__info__right">
                                                    Сбер
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bottom__info">
                                            <div class="prices">
                                                <div class="current__price">
                                                    85 672 ₽
                                                </div>
                                            </div>
                                            <div class="availability">
                                                <div class="unavailable">
                                                    Нет в наличии
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buttons">
                                            <button class="good__item__button admisson">
                                                Уточнить наличие
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="good__item">
                                    <div class="good__item__top">
                                        <div class="good__item__tags">
                                            <div class="good__item__tag">
                                                Новинка
                                            </div>
                                        </div>
                                        <div class="good__item__reactions">
                                            <button class="compare">
                                                <svg>
                                                    <use xlink:href="#compare" />
                                                </svg>
                                            </button>
                                            <button class="like">
                                                <svg>
                                                    <use xlink:href="#favourite" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="store__good__images" style="text-align: center">
                                        <img src="./assets/images/goodItems/goodItem3.jpeg" alt="" class="good__item__image good__item__image--active" id="" />
                                        <img src="./assets/images/goodItems/goodItem4.jpeg" alt="" class="good__item__image" id="" />
                                        <img src="./assets/images/goodItems/goodItem4.jpeg" alt="" class="good__item__image" id="" />
                                        <img src="./assets/images/goodItems/goodItem2.jpeg" alt="" class="good__item__image" id="" />
                                        <img src="./assets/images/goodItems/goodItem1.jpeg" alt="" class="good__item__image" id="" />

                                        <div class="good__item__image-switcher"></div>
                                    </div>
                                    <div class="good__item__bonuses">
                                        <div class="good__item__bonus sale">
                                            Скидка 20%
                                        </div>
                                    </div>
                                    <div class="good__item__image__buttons"></div>
                                    <div class="good__item__info">
                                        <div class="articule">
                                            Артикул: 351018510
                                        </div>
                                        <div class="title">
                                            Настенный светильник (бра) Freya
                                            FR5133WL-01CH
                                        </div>
                                        <div class="text">
                                            <div class="manufacturer">
                                                Производитель:
                                                <span>Freya</span>
                                            </div>
                                            <div class="power">
                                                Мощность (вт): <span>60</span>
                                            </div>
                                            <div class="counrty">
                                                Страна бренда:
                                                <span>Германия</span>
                                            </div>
                                        </div>
                                        <div class="parameters">
                                            <div class="plinth">
                                                <img src="./assets/images/svg/lamp.svg" alt="" class="parametrs__image" />
                                                <div class="value">
                                                    Цоколь: <span>E24</span>
                                                </div>
                                            </div>
                                            <div class="protection">
                                                <img src="./assets/images/svg/lock.svg" alt="" class="parametrs__image" />
                                                <div class="value">
                                                    IP степень пылевлагозащиты:
                                                    <span>20</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="stores__info">
                                            <div class="yandex">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/yandexScores.svg" alt="" />
                                                    <div class="count">389</div>
                                                </div>
                                                <div class="stores__info__right">
                                                    балла Плюса
                                                </div>
                                            </div>
                                            <div class="split">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/splitScores.svg" alt="" />
                                                    <div class="count">
                                                        3672 ₽
                                                    </div>
                                                </div>
                                                <div class="stores__info__right">
                                                    в сплит
                                                </div>
                                            </div>
                                            <div class="dolyami">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/dolyamiScores.svg" alt="" />
                                                </div>
                                                <div class="stores__info__right">
                                                    долями
                                                </div>
                                            </div>
                                            <div class="spay">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/spay.png" alt="" />
                                                </div>
                                                <div class="stores__info__right">
                                                    Сбер
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bottom__info">
                                            <div class="prices">
                                                <div class="current__price">
                                                    85 672 ₽
                                                </div>
                                            </div>
                                            <div class="availability">
                                                <div class="available">
                                                    В наличии:
                                                    <span>200 шт.</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buttons">
                                            <button class="good__item__button order">
                                                Быстрый заказ
                                            </button>
                                            <button class="good__item__button buy">
                                                Купить
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="good__item">
                                    <div class="good__item__top">
                                        <div class="good__item__tags">
                                            <div class="good__item__tag">
                                                Новинка
                                            </div>
                                        </div>
                                        <div class="good__item__reactions">
                                            <button class="compare">
                                                <svg>
                                                    <use xlink:href="#compare" />
                                                </svg>
                                            </button>
                                            <button class="like">
                                                <svg>
                                                    <use xlink:href="#favourite" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="store__good__images" style="text-align: center">
                                        <img src="./assets/images/goodItems/goodItem1.jpeg" alt="" class="good__item__image good__item__image--active" id="" />
                                        <img src="./assets/images/goodItems/goodItem2.jpeg" alt="" class="good__item__image" id="" />
                                        <img src="./assets/images/goodItems/goodItem3.jpeg" alt="" class="good__item__image" id="" />
                                        <img src="./assets/images/goodItems/goodItem4.jpeg" alt="" class="good__item__image" id="" />

                                        <div class="good__item__image-switcher"></div>
                                    </div>
                                    <div class="good__item__bonuses">
                                        <div class="good__item__bonus sale">
                                            Скидка 20%
                                        </div>
                                    </div>
                                    <div class="good__item__image__buttons"></div>
                                    <div class="good__item__info">
                                        <div class="articule">
                                            Артикул: 351018510
                                        </div>
                                        <div class="title">
                                            Настенный светильник (бра) Freya
                                            FR5133WL-01CH
                                        </div>
                                        <div class="text">
                                            <div class="manufacturer">
                                                Производитель:
                                                <span>Freya</span>
                                            </div>
                                            <div class="power">
                                                Мощность (вт): <span>60</span>
                                            </div>
                                            <div class="counrty">
                                                Страна бренда:
                                                <span>Германия</span>
                                            </div>
                                        </div>
                                        <div class="parameters">
                                            <div class="plinth">
                                                <img src="./assets/images/svg/lamp.svg" alt="" class="parametrs__image" />
                                                <div class="value">
                                                    Цоколь: <span>E24</span>
                                                </div>
                                            </div>
                                            <div class="protection">
                                                <img src="./assets/images/svg/lock.svg" alt="" class="parametrs__image" />
                                                <div class="value">
                                                    IP степень пылевлагозащиты:
                                                    <span>20</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="stores__info">
                                            <div class="yandex">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/yandexScores.svg" alt="" />
                                                    <div class="count">389</div>
                                                </div>
                                                <div class="stores__info__right">
                                                    балла Плюса
                                                </div>
                                            </div>
                                            <div class="split">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/splitScores.svg" alt="" />
                                                    <div class="count">
                                                        3672 ₽
                                                    </div>
                                                </div>
                                                <div class="stores__info__right">
                                                    в сплит
                                                </div>
                                            </div>
                                            <div class="dolyami">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/dolyamiScores.svg" alt="" />
                                                </div>
                                                <div class="stores__info__right">
                                                    долями
                                                </div>
                                            </div>
                                            <div class="spay">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/spay.png" alt="" />
                                                </div>
                                                <div class="stores__info__right">
                                                    Сбер
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bottom__info">
                                            <div class="prices">
                                                <div class="current__price">
                                                    85 672 ₽
                                                </div>
                                                <div class="old__price">
                                                    95 672 ₽
                                                </div>
                                            </div>
                                            <div class="availability">
                                                <div class="available">
                                                    В наличии:
                                                    <span>200 шт.</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buttons">
                                            <button class="good__item__button order">
                                                Быстрый заказ
                                            </button>
                                            <button class="good__item__button buy">
                                                Купить
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="good__item">
                                    <div class="good__item__top">
                                        <div class="good__item__tags">
                                            <div class="good__item__tag">
                                                Новинка
                                            </div>
                                        </div>
                                        <div class="good__item__reactions">
                                            <button class="compare">
                                                <svg>
                                                    <use xlink:href="#compare" />
                                                </svg>
                                            </button>
                                            <button class="like active">
                                                <svg>
                                                    <use xlink:href="#favourite" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="store__good__images" style="text-align: center">
                                        <img src="./assets/images/goodItems/goodItem1.jpeg" alt="" class="good__item__image good__item__image--active" id="" />
                                        <img src="./assets/images/goodItems/goodItem2.jpeg" alt="" class="good__item__image" id="" />
                                        <img src="./assets/images/goodItems/goodItem3.jpeg" alt="" class="good__item__image" id="" />
                                        <img src="./assets/images/goodItems/goodItem4.jpeg" alt="" class="good__item__image" id="" />

                                        <div class="good__item__image-switcher"></div>
                                    </div>
                                    <div class="good__item__bonuses">
                                        <div class="good__item__bonus sale">
                                            Скидка 20%
                                        </div>
                                    </div>
                                    <div class="good__item__image__buttons"></div>
                                    <div class="good__item__info">
                                        <div class="articule">
                                            Артикул: 351018510
                                        </div>
                                        <div class="title">
                                            Настенный светильник (бра) Freya
                                            FR5133WL-01CH
                                        </div>
                                        <div class="text">
                                            <div class="manufacturer">
                                                Производитель:
                                                <span>Freya</span>
                                            </div>
                                            <div class="power">
                                                Мощность (вт): <span>60</span>
                                            </div>
                                            <div class="counrty">
                                                Страна бренда:
                                                <span>Германия</span>
                                            </div>
                                        </div>
                                        <div class="parameters">
                                            <div class="plinth">
                                                <img src="./assets/images/svg/lamp.svg" alt="" class="parametrs__image" />
                                                <div class="value">
                                                    Цоколь: <span>E24</span>
                                                </div>
                                            </div>
                                            <div class="protection">
                                                <img src="./assets/images/svg/lock.svg" alt="" class="parametrs__image" />
                                                <div class="value">
                                                    IP степень пылевлагозащиты:
                                                    <span>20</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="stores__info">
                                            <div class="yandex">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/yandexScores.svg" alt="" />
                                                    <div class="count">389</div>
                                                </div>
                                                <div class="stores__info__right">
                                                    балла Плюса
                                                </div>
                                            </div>
                                            <div class="split">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/splitScores.svg" alt="" />
                                                    <div class="count">
                                                        3672 ₽
                                                    </div>
                                                </div>
                                                <div class="stores__info__right">
                                                    в сплит
                                                </div>
                                            </div>
                                            <div class="dolyami">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/dolyamiScores.svg" alt="" />
                                                </div>
                                                <div class="stores__info__right">
                                                    долями
                                                </div>
                                            </div>
                                            <div class="spay">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/spay.png" alt="" />
                                                </div>
                                                <div class="stores__info__right">
                                                    Сбер
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bottom__info">
                                            <div class="prices">
                                                <div class="current__price">
                                                    85 672 ₽
                                                </div>
                                                <div class="old__price">
                                                    95 672 ₽
                                                </div>
                                            </div>
                                            <div class="availability">
                                                <div class="available">
                                                    В наличии:
                                                    <span>200 шт.</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buttons">
                                            <button class="good__item__button order">
                                                Быстрый заказ
                                            </button>
                                            <button class="good__item__button buy">
                                                Купить
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="good__item">
                                    <div class="good__item__top">
                                        <div class="good__item__tags">
                                            <div class="good__item__tag">
                                                Новинка
                                            </div>
                                        </div>
                                        <div class="good__item__reactions">
                                            <button class="compare">
                                                <svg>
                                                    <use xlink:href="#compare" />
                                                </svg>
                                            </button>
                                            <button class="like">
                                                <svg>
                                                    <use xlink:href="#favourite" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="store__good__images" style="text-align: center">
                                        <img src="./assets/images/goodItems/goodItem1.jpeg" alt="" class="good__item__image good__item__image--active" id="" />
                                        <img src="./assets/images/goodItems/goodItem2.jpeg" alt="" class="good__item__image" id="" />
                                        <img src="./assets/images/goodItems/goodItem3.jpeg" alt="" class="good__item__image" id="" />
                                        <img src="./assets/images/goodItems/goodItem4.jpeg" alt="" class="good__item__image" id="" />

                                        <div class="good__item__image-switcher"></div>
                                    </div>
                                    <div class="good__item__bonuses">
                                        <div class="good__item__bonus sale">
                                            Скидка 20%
                                        </div>
                                    </div>
                                    <div class="good__item__image__buttons"></div>
                                    <div class="good__item__info">
                                        <div class="articule">
                                            Артикул: 351018510
                                        </div>
                                        <div class="title">
                                            Настенный светильник (бра) Freya
                                            FR5133WL-01CH
                                        </div>
                                        <div class="text">
                                            <div class="manufacturer">
                                                Производитель:
                                                <span>Freya</span>
                                            </div>
                                            <div class="power">
                                                Мощность (вт): <span>60</span>
                                            </div>
                                            <div class="counrty">
                                                Страна бренда:
                                                <span>Германия</span>
                                            </div>
                                        </div>
                                        <div class="parameters">
                                            <div class="plinth">
                                                <img src="./assets/images/svg/lamp.svg" alt="" class="parametrs__image" />
                                                <div class="value">
                                                    Цоколь: <span>E24</span>
                                                </div>
                                            </div>
                                            <div class="protection">
                                                <img src="./assets/images/svg/lock.svg" alt="" class="parametrs__image" />
                                                <div class="value">
                                                    IP степень пылевлагозащиты:
                                                    <span>20</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="stores__info">
                                            <div class="yandex">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/yandexScores.svg" alt="" />
                                                    <div class="count">389</div>
                                                </div>
                                                <div class="stores__info__right">
                                                    балла Плюса
                                                </div>
                                            </div>
                                            <div class="split">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/splitScores.svg" alt="" />
                                                    <div class="count">
                                                        3672 ₽
                                                    </div>
                                                </div>
                                                <div class="stores__info__right">
                                                    в сплит
                                                </div>
                                            </div>
                                            <div class="dolyami">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/dolyamiScores.svg" alt="" />
                                                </div>
                                                <div class="stores__info__right">
                                                    долями
                                                </div>
                                            </div>
                                            <div class="spay">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/spay.png" alt="" />
                                                </div>
                                                <div class="stores__info__right">
                                                    Сбер
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bottom__info">
                                            <div class="prices">
                                                <div class="current__price">
                                                    85 672 ₽
                                                </div>
                                                <div class="old__price">
                                                    95 672 ₽
                                                </div>
                                            </div>
                                            <div class="availability">
                                                <div class="available">
                                                    В наличии:
                                                    <span>200 шт.</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buttons">
                                            <button class="good__item__button order">
                                                Быстрый заказ
                                            </button>
                                            <button class="good__item__button buy">
                                                Купить
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="store__goods__products__buttons">
                                <button class="arrow__button prev arrow__button--small">
                                    <svg class="arrow__button__svg">
                                        <use xlink:href="#arrow" />
                                    </svg>
                                </button>
                                <button class="arrow__button next arrow__button--small">
                                    <svg class="arrow__button__svg">
                                        <use xlink:href="#arrow" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="store__goods__wrapper goodItem3">
                        <div class="store__goods__slider">
                            <div class="store__goods__products">
                                <div class="good__item">
                                    <div class="good__item__top">
                                        <div class="good__item__tags">
                                            <div class="good__item__tag">
                                                Новинка
                                            </div>
                                        </div>
                                        <div class="good__item__reactions">
                                            <button class="compare">
                                                <svg>
                                                    <use xlink:href="#compare" />
                                                </svg>
                                            </button>
                                            <button class="like">
                                                <svg>
                                                    <use xlink:href="#favourite" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="store__good__images" style="text-align: center">
                                        <img src="./assets/images/goodItems/goodItem1.jpeg" alt="" class="good__item__image good__item__image--active" id="" />
                                        <img src="./assets/images/goodItems/goodItem2.jpeg" alt="" class="good__item__image" id="" />
                                        <img src="./assets/images/goodItems/goodItem3.jpeg" alt="" class="good__item__image" id="" />
                                        <img src="./assets/images/goodItems/goodItem4.jpeg" alt="" class="good__item__image" id="" />

                                        <div class="good__item__image-switcher"></div>
                                    </div>
                                    <div class="good__item__bonuses">
                                        <div class="good__item__bonus sale">
                                            Скидка 20%
                                        </div>
                                    </div>
                                    <div class="good__item__image__buttons"></div>
                                    <div class="good__item__info">
                                        <div class="articule">
                                            Артикул: 351018510
                                        </div>
                                        <div class="title">
                                            Настенный светильник (бра) Freya
                                            FR5133WL-01CH
                                        </div>
                                        <div class="text">
                                            <div class="manufacturer">
                                                Производитель:
                                                <span>Freya</span>
                                            </div>
                                            <div class="power">
                                                Мощность (вт): <span>60</span>
                                            </div>
                                            <div class="counrty">
                                                Страна бренда:
                                                <span>Германия</span>
                                            </div>
                                        </div>
                                        <div class="parameters">
                                            <div class="plinth">
                                                <img src="./assets/images/svg/lamp.svg" alt="" class="parametrs__image" />
                                                <div class="value">
                                                    Цоколь: <span>E24</span>
                                                </div>
                                            </div>
                                            <div class="protection">
                                                <img src="./assets/images/svg/lock.svg" alt="" class="parametrs__image" />
                                                <div class="value">
                                                    IP степень пылевлагозащиты:
                                                    <span>20</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="stores__info">
                                            <div class="yandex">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/yandexScores.svg" alt="" />
                                                    <div class="count">389</div>
                                                </div>
                                                <div class="stores__info__right">
                                                    балла Плюса
                                                </div>
                                            </div>
                                            <div class="split">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/splitScores.svg" alt="" />
                                                    <div class="count">
                                                        3672 ₽
                                                    </div>
                                                </div>
                                                <div class="stores__info__right">
                                                    в сплит
                                                </div>
                                            </div>
                                            <div class="dolyami">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/dolyamiScores.svg" alt="" />
                                                </div>
                                                <div class="stores__info__right">
                                                    долями
                                                </div>
                                            </div>
                                            <div class="spay">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/spay.png" alt="" />
                                                </div>
                                                <div class="stores__info__right">
                                                    Сбер
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bottom__info">
                                            <div class="prices">
                                                <div class="current__price">
                                                    85 672 ₽
                                                </div>
                                                <div class="old__price">
                                                    95 672 ₽
                                                </div>
                                            </div>
                                            <div class="availability">
                                                <div class="unavailable">
                                                    <span>Нет в наличии</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buttons">
                                            <button class="good__item__button admisson">
                                                Быстрый заказ
                                            </button>

                                        </div>
                                    </div>
                                </div>
                                <div class="good__item">
                                    <div class="good__item__top">
                                        <div class="good__item__tags">
                                            <div class="good__item__tag">
                                                Новинка
                                            </div>
                                        </div>
                                        <div class="good__item__reactions">
                                            <button class="compare">
                                                <svg>
                                                    <use xlink:href="#compare" />
                                                </svg>
                                            </button>
                                            <button class="like">
                                                <svg>
                                                    <use xlink:href="#favourite" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="store__good__images" style="text-align: center">
                                        <img src="./assets/images/goodItems/goodItem2.jpeg" alt="" class="good__item__image good__item__image--active" id="" />
                                        <img src="./assets/images/goodItems/goodItem3.jpeg" alt="" class="good__item__image" id="" />
                                        <img src="./assets/images/goodItems/goodItem4.jpeg" alt="" class="good__item__image" id="" />
                                        <div class="good__item__image-switcher"></div>
                                    </div>
                                    <div class="good__item__bonuses">
                                        <div class="good__item__bonus sale">
                                            Скидка 20%
                                        </div>
                                    </div>
                                    <div class="good__item__image__buttons"></div>
                                    <div class="good__item__info">
                                        <div class="articule">
                                            Артикул: 351018510
                                        </div>
                                        <div class="title">
                                            Настенный светильник (бра) Freya
                                            FR5133WL-01CH
                                        </div>
                                        <div class="text">
                                            <div class="manufacturer">
                                                Производитель:
                                                <span>Freya</span>
                                            </div>
                                            <div class="power">
                                                Мощность (вт): <span>60</span>
                                            </div>
                                            <div class="counrty">
                                                Страна бренда:
                                                <span>Германия</span>
                                            </div>
                                        </div>
                                        <div class="parameters">
                                            <div class="plinth">
                                                <img src="./assets/images/svg/lamp.svg" alt="" class="parametrs__image" />
                                                <div class="value">
                                                    Цоколь: <span>E24</span>
                                                </div>
                                            </div>
                                            <div class="protection">
                                                <img src="./assets/images/svg/lock.svg" alt="" class="parametrs__image" />
                                                <div class="value">
                                                    IP степень пылевлагозащиты:
                                                    <span>20</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="stores__info">
                                            <div class="yandex">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/yandexScores.svg" alt="" />
                                                    <div class="count">389</div>
                                                </div>
                                                <div class="stores__info__right">
                                                    балла Плюса
                                                </div>
                                            </div>
                                            <div class="split">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/splitScores.svg" alt="" />
                                                    <div class="count">
                                                        3672 ₽
                                                    </div>
                                                </div>
                                                <div class="stores__info__right">
                                                    в сплит
                                                </div>
                                            </div>
                                            <div class="dolyami">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/dolyamiScores.svg" alt="" />
                                                </div>
                                                <div class="stores__info__right">
                                                    долями
                                                </div>
                                            </div>
                                            <div class="spay">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/spay.png" alt="" />
                                                </div>
                                                <div class="stores__info__right">
                                                    Сбер
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bottom__info">
                                            <div class="prices">
                                                <div class="current__price">
                                                    85 672 ₽
                                                </div>
                                            </div>
                                            <div class="availability">
                                                <div class="unavailable">
                                                    Нет в наличии
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buttons">
                                            <button class="good__item__button admisson">
                                                Уточнить наличие
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="good__item">
                                    <div class="good__item__top">
                                        <div class="good__item__tags">
                                            <div class="good__item__tag">
                                                Новинка
                                            </div>
                                        </div>
                                        <div class="good__item__reactions">
                                            <button class="compare">
                                                <svg>
                                                    <use xlink:href="#compare" />
                                                </svg>
                                            </button>
                                            <button class="like">
                                                <svg>
                                                    <use xlink:href="#favourite" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="store__good__images" style="text-align: center">
                                        <img src="./assets/images/goodItems/goodItem3.jpeg" alt="" class="good__item__image good__item__image--active" id="" />
                                        <img src="./assets/images/goodItems/goodItem4.jpeg" alt="" class="good__item__image" id="" />
                                        <img src="./assets/images/goodItems/goodItem4.jpeg" alt="" class="good__item__image" id="" />
                                        <img src="./assets/images/goodItems/goodItem2.jpeg" alt="" class="good__item__image" id="" />
                                        <img src="./assets/images/goodItems/goodItem1.jpeg" alt="" class="good__item__image" id="" />

                                        <div class="good__item__image-switcher"></div>
                                    </div>
                                    <div class="good__item__bonuses">
                                        <div class="good__item__bonus sale">
                                            Скидка 20%
                                        </div>
                                    </div>
                                    <div class="good__item__image__buttons"></div>
                                    <div class="good__item__info">
                                        <div class="articule">
                                            Артикул: 351018510
                                        </div>
                                        <div class="title">
                                            Настенный светильник (бра) Freya
                                            FR5133WL-01CH
                                        </div>
                                        <div class="text">
                                            <div class="manufacturer">
                                                Производитель:
                                                <span>Freya</span>
                                            </div>
                                            <div class="power">
                                                Мощность (вт): <span>60</span>
                                            </div>
                                            <div class="counrty">
                                                Страна бренда:
                                                <span>Германия</span>
                                            </div>
                                        </div>
                                        <div class="parameters">
                                            <div class="plinth">
                                                <img src="./assets/images/svg/lamp.svg" alt="" class="parametrs__image" />
                                                <div class="value">
                                                    Цоколь: <span>E24</span>
                                                </div>
                                            </div>
                                            <div class="protection">
                                                <img src="./assets/images/svg/lock.svg" alt="" class="parametrs__image" />
                                                <div class="value">
                                                    IP степень пылевлагозащиты:
                                                    <span>20</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="stores__info">
                                            <div class="yandex">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/yandexScores.svg" alt="" />
                                                    <div class="count">389</div>
                                                </div>
                                                <div class="stores__info__right">
                                                    балла Плюса
                                                </div>
                                            </div>
                                            <div class="split">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/splitScores.svg" alt="" />
                                                    <div class="count">
                                                        3672 ₽
                                                    </div>
                                                </div>
                                                <div class="stores__info__right">
                                                    в сплит
                                                </div>
                                            </div>
                                            <div class="dolyami">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/dolyamiScores.svg" alt="" />
                                                </div>
                                                <div class="stores__info__right">
                                                    долями
                                                </div>
                                            </div>
                                            <div class="spay">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/spay.png" alt="" />
                                                </div>
                                                <div class="stores__info__right">
                                                    Сбер
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bottom__info">
                                            <div class="prices">
                                                <div class="current__price">
                                                    85 672 ₽
                                                </div>
                                            </div>
                                            <div class="availability">
                                                <div class="available">
                                                    В наличии:
                                                    <span>200 шт.</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buttons">
                                            <button class="good__item__button order">
                                                Быстрый заказ
                                            </button>
                                            <button class="good__item__button buy">
                                                Купить
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="good__item">
                                    <div class="good__item__top">
                                        <div class="good__item__tags">
                                            <div class="good__item__tag">
                                                Новинка
                                            </div>
                                        </div>
                                        <div class="good__item__reactions">
                                            <button class="compare">
                                                <svg>
                                                    <use xlink:href="#compare" />
                                                </svg>
                                            </button>
                                            <button class="like">
                                                <svg>
                                                    <use xlink:href="#favourite" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="store__good__images" style="text-align: center">
                                        <img src="./assets/images/goodItems/goodItem1.jpeg" alt="" class="good__item__image good__item__image--active" id="" />
                                        <img src="./assets/images/goodItems/goodItem2.jpeg" alt="" class="good__item__image" id="" />
                                        <img src="./assets/images/goodItems/goodItem3.jpeg" alt="" class="good__item__image" id="" />
                                        <img src="./assets/images/goodItems/goodItem4.jpeg" alt="" class="good__item__image" id="" />

                                        <div class="good__item__image-switcher"></div>
                                    </div>
                                    <div class="good__item__bonuses">
                                        <div class="good__item__bonus sale">
                                            Скидка 20%
                                        </div>
                                    </div>
                                    <div class="good__item__image__buttons"></div>
                                    <div class="good__item__info">
                                        <div class="articule">
                                            Артикул: 351018510
                                        </div>
                                        <div class="title">
                                            Настенный светильник (бра) Freya
                                            FR5133WL-01CH
                                        </div>
                                        <div class="text">
                                            <div class="manufacturer">
                                                Производитель:
                                                <span>Freya</span>
                                            </div>
                                            <div class="power">
                                                Мощность (вт): <span>60</span>
                                            </div>
                                            <div class="counrty">
                                                Страна бренда:
                                                <span>Германия</span>
                                            </div>
                                        </div>
                                        <div class="parameters">
                                            <div class="plinth">
                                                <img src="./assets/images/svg/lamp.svg" alt="" class="parametrs__image" />
                                                <div class="value">
                                                    Цоколь: <span>E24</span>
                                                </div>
                                            </div>
                                            <div class="protection">
                                                <img src="./assets/images/svg/lock.svg" alt="" class="parametrs__image" />
                                                <div class="value">
                                                    IP степень пылевлагозащиты:
                                                    <span>20</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="stores__info">
                                            <div class="yandex">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/yandexScores.svg" alt="" />
                                                    <div class="count">389</div>
                                                </div>
                                                <div class="stores__info__right">
                                                    балла Плюса
                                                </div>
                                            </div>
                                            <div class="split">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/splitScores.svg" alt="" />
                                                    <div class="count">
                                                        3672 ₽
                                                    </div>
                                                </div>
                                                <div class="stores__info__right">
                                                    в сплит
                                                </div>
                                            </div>
                                            <div class="dolyami">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/dolyamiScores.svg" alt="" />
                                                </div>
                                                <div class="stores__info__right">
                                                    долями
                                                </div>
                                            </div>
                                            <div class="spay">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/spay.png" alt="" />
                                                </div>
                                                <div class="stores__info__right">
                                                    Сбер
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bottom__info">
                                            <div class="prices">
                                                <div class="current__price">
                                                    85 672 ₽
                                                </div>
                                                <div class="old__price">
                                                    95 672 ₽
                                                </div>
                                            </div>
                                            <div class="availability">
                                                <div class="available">
                                                    В наличии:
                                                    <span>200 шт.</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buttons">
                                            <button class="good__item__button order">
                                                Быстрый заказ
                                            </button>
                                            <button class="good__item__button buy">
                                                Купить
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="good__item">
                                    <div class="good__item__top">
                                        <div class="good__item__tags">
                                            <div class="good__item__tag">
                                                Новинка
                                            </div>
                                        </div>
                                        <div class="good__item__reactions">
                                            <button class="compare">
                                                <svg>
                                                    <use xlink:href="#compare" />
                                                </svg>
                                            </button>
                                            <button class="like active">
                                                <svg>
                                                    <use xlink:href="#favourite" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="store__good__images" style="text-align: center">
                                        <img src="./assets/images/goodItems/goodItem1.jpeg" alt="" class="good__item__image good__item__image--active" id="" />
                                        <img src="./assets/images/goodItems/goodItem2.jpeg" alt="" class="good__item__image" id="" />
                                        <img src="./assets/images/goodItems/goodItem3.jpeg" alt="" class="good__item__image" id="" />
                                        <img src="./assets/images/goodItems/goodItem4.jpeg" alt="" class="good__item__image" id="" />

                                        <div class="good__item__image-switcher"></div>
                                    </div>
                                    <div class="good__item__bonuses">
                                        <div class="good__item__bonus sale">
                                            Скидка 20%
                                        </div>
                                    </div>
                                    <div class="good__item__image__buttons"></div>
                                    <div class="good__item__info">
                                        <div class="articule">
                                            Артикул: 351018510
                                        </div>
                                        <div class="title">
                                            Настенный светильник (бра) Freya
                                            FR5133WL-01CH
                                        </div>
                                        <div class="text">
                                            <div class="manufacturer">
                                                Производитель:
                                                <span>Freya</span>
                                            </div>
                                            <div class="power">
                                                Мощность (вт): <span>60</span>
                                            </div>
                                            <div class="counrty">
                                                Страна бренда:
                                                <span>Германия</span>
                                            </div>
                                        </div>
                                        <div class="parameters">
                                            <div class="plinth">
                                                <img src="./assets/images/svg/lamp.svg" alt="" class="parametrs__image" />
                                                <div class="value">
                                                    Цоколь: <span>E24</span>
                                                </div>
                                            </div>
                                            <div class="protection">
                                                <img src="./assets/images/svg/lock.svg" alt="" class="parametrs__image" />
                                                <div class="value">
                                                    IP степень пылевлагозащиты:
                                                    <span>20</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="stores__info">
                                            <div class="yandex">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/yandexScores.svg" alt="" />
                                                    <div class="count">389</div>
                                                </div>
                                                <div class="stores__info__right">
                                                    балла Плюса
                                                </div>
                                            </div>
                                            <div class="split">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/splitScores.svg" alt="" />
                                                    <div class="count">
                                                        3672 ₽
                                                    </div>
                                                </div>
                                                <div class="stores__info__right">
                                                    в сплит
                                                </div>
                                            </div>
                                            <div class="dolyami">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/dolyamiScores.svg" alt="" />
                                                </div>
                                                <div class="stores__info__right">
                                                    долями
                                                </div>
                                            </div>
                                            <div class="spay">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/spay.png" alt="" />
                                                </div>
                                                <div class="stores__info__right">
                                                    Сбер
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bottom__info">
                                            <div class="prices">
                                                <div class="current__price">
                                                    85 672 ₽
                                                </div>
                                                <div class="old__price">
                                                    95 672 ₽
                                                </div>
                                            </div>
                                            <div class="availability">
                                                <div class="available">
                                                    В наличии:
                                                    <span>200 шт.</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buttons">
                                            <button class="good__item__button order">
                                                Быстрый заказ
                                            </button>
                                            <button class="good__item__button buy">
                                                Купить
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="good__item">
                                    <div class="good__item__top">
                                        <div class="good__item__tags">
                                            <div class="good__item__tag">
                                                Новинка
                                            </div>
                                        </div>
                                        <div class="good__item__reactions">
                                            <button class="compare">
                                                <svg>
                                                    <use xlink:href="#compare" />
                                                </svg>
                                            </button>
                                            <button class="like">
                                                <svg>
                                                    <use xlink:href="#favourite" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="store__good__images" style="text-align: center">
                                        <img src="./assets/images/goodItems/goodItem1.jpeg" alt="" class="good__item__image good__item__image--active" id="" />
                                        <img src="./assets/images/goodItems/goodItem2.jpeg" alt="" class="good__item__image" id="" />
                                        <img src="./assets/images/goodItems/goodItem3.jpeg" alt="" class="good__item__image" id="" />
                                        <img src="./assets/images/goodItems/goodItem4.jpeg" alt="" class="good__item__image" id="" />

                                        <div class="good__item__image-switcher"></div>
                                    </div>
                                    <div class="good__item__bonuses">
                                        <div class="good__item__bonus sale">
                                            Скидка 20%
                                        </div>
                                    </div>
                                    <div class="good__item__image__buttons"></div>
                                    <div class="good__item__info">
                                        <div class="articule">
                                            Артикул: 351018510
                                        </div>
                                        <div class="title">
                                            Настенный светильник (бра) Freya
                                            FR5133WL-01CH
                                        </div>
                                        <div class="text">
                                            <div class="manufacturer">
                                                Производитель:
                                                <span>Freya</span>
                                            </div>
                                            <div class="power">
                                                Мощность (вт): <span>60</span>
                                            </div>
                                            <div class="counrty">
                                                Страна бренда:
                                                <span>Германия</span>
                                            </div>
                                        </div>
                                        <div class="parameters">
                                            <div class="plinth">
                                                <img src="./assets/images/svg/lamp.svg" alt="" class="parametrs__image" />
                                                <div class="value">
                                                    Цоколь: <span>E24</span>
                                                </div>
                                            </div>
                                            <div class="protection">
                                                <img src="./assets/images/svg/lock.svg" alt="" class="parametrs__image" />
                                                <div class="value">
                                                    IP степень пылевлагозащиты:
                                                    <span>20</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="stores__info">
                                            <div class="yandex">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/yandexScores.svg" alt="" />
                                                    <div class="count">389</div>
                                                </div>
                                                <div class="stores__info__right">
                                                    балла Плюса
                                                </div>
                                            </div>
                                            <div class="split">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/splitScores.svg" alt="" />
                                                    <div class="count">
                                                        3672 ₽
                                                    </div>
                                                </div>
                                                <div class="stores__info__right">
                                                    в сплит
                                                </div>
                                            </div>
                                            <div class="dolyami">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/dolyamiScores.svg" alt="" />
                                                </div>
                                                <div class="stores__info__right">
                                                    долями
                                                </div>
                                            </div>
                                            <div class="spay">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/spay.png" alt="" />
                                                </div>
                                                <div class="stores__info__right">
                                                    Сбер
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bottom__info">
                                            <div class="prices">
                                                <div class="current__price">
                                                    85 672 ₽
                                                </div>
                                                <div class="old__price">
                                                    95 672 ₽
                                                </div>
                                            </div>
                                            <div class="availability">
                                                <div class="available">
                                                    В наличии:
                                                    <span>200 шт.</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buttons">
                                            <button class="good__item__button order">
                                                Быстрый заказ
                                            </button>
                                            <button class="good__item__button buy">
                                                Купить
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="store__goods__products__buttons">
                                <button class="arrow__button prev arrow__button--small">
                                    <svg class="arrow__button__svg">
                                        <use xlink:href="#arrow" />
                                    </svg>
                                </button>
                                <button class="arrow__button next arrow__button--small">
                                    <svg class="arrow__button__svg">
                                        <use xlink:href="#arrow" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="store__goods__wrapper goodItem4">
                        <div class="store__goods__slider">
                            <div class="store__goods__products">
                                <div class="good__item">
                                    <div class="good__item__top">
                                        <div class="good__item__tags">
                                            <div class="good__item__tag">
                                                Новинка
                                            </div>
                                        </div>
                                        <div class="good__item__reactions">
                                            <button class="compare">
                                                <svg>
                                                    <use xlink:href="#compare" />
                                                </svg>
                                            </button>
                                            <button class="like">
                                                <svg>
                                                    <use xlink:href="#favourite" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="store__good__images" style="text-align: center">
                                        <img src="./assets/images/goodItems/goodItem1.jpeg" alt="" class="good__item__image good__item__image--active" id="" />
                                        <img src="./assets/images/goodItems/goodItem2.jpeg" alt="" class="good__item__image" id="" />
                                        <img src="./assets/images/goodItems/goodItem3.jpeg" alt="" class="good__item__image" id="" />
                                        <img src="./assets/images/goodItems/goodItem4.jpeg" alt="" class="good__item__image" id="" />

                                        <div class="good__item__image-switcher"></div>
                                    </div>
                                    <div class="good__item__bonuses">
                                        <div class="good__item__bonus sale">
                                            Скидка 20%
                                        </div>
                                    </div>
                                    <div class="good__item__image__buttons"></div>
                                    <div class="good__item__info">
                                        <div class="articule">
                                            Артикул: 351018510
                                        </div>
                                        <div class="title">
                                            Настенный светильник (бра) Freya
                                            FR5133WL-01CH
                                        </div>
                                        <div class="text">
                                            <div class="manufacturer">
                                                Производитель:
                                                <span>Freya</span>
                                            </div>
                                            <div class="power">
                                                Мощность (вт): <span>60</span>
                                            </div>
                                            <div class="counrty">
                                                Страна бренда:
                                                <span>Германия</span>
                                            </div>
                                        </div>
                                        <div class="parameters">
                                            <div class="plinth">
                                                <img src="./assets/images/svg/lamp.svg" alt="" class="parametrs__image" />
                                                <div class="value">
                                                    Цоколь: <span>E24</span>
                                                </div>
                                            </div>
                                            <div class="protection">
                                                <img src="./assets/images/svg/lock.svg" alt="" class="parametrs__image" />
                                                <div class="value">
                                                    IP степень пылевлагозащиты:
                                                    <span>20</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="stores__info">
                                            <div class="yandex">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/yandexScores.svg" alt="" />
                                                    <div class="count">389</div>
                                                </div>
                                                <div class="stores__info__right">
                                                    балла Плюса
                                                </div>
                                            </div>
                                            <div class="split">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/splitScores.svg" alt="" />
                                                    <div class="count">
                                                        3672 ₽
                                                    </div>
                                                </div>
                                                <div class="stores__info__right">
                                                    в сплит
                                                </div>
                                            </div>
                                            <div class="dolyami">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/dolyamiScores.svg" alt="" />
                                                </div>
                                                <div class="stores__info__right">
                                                    долями
                                                </div>
                                            </div>
                                            <div class="spay">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/spay.png" alt="" />
                                                </div>
                                                <div class="stores__info__right">
                                                    Сбер
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bottom__info">
                                            <div class="prices">
                                                <div class="current__price">
                                                    85 672 ₽
                                                </div>
                                                <div class="old__price">
                                                    95 672 ₽
                                                </div>
                                            </div>
                                            <div class="availability">
                                                <div class="unavailable">
                                                    <span>Нет в наличии</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buttons">
                                            <button class="good__item__button admisson">
                                                Быстрый заказ
                                            </button>

                                        </div>
                                    </div>
                                </div>
                                <div class="good__item">
                                    <div class="good__item__top">
                                        <div class="good__item__tags">
                                            <div class="good__item__tag">
                                                Новинка
                                            </div>
                                        </div>
                                        <div class="good__item__reactions">
                                            <button class="compare">
                                                <svg>
                                                    <use xlink:href="#compare" />
                                                </svg>
                                            </button>
                                            <button class="like">
                                                <svg>
                                                    <use xlink:href="#favourite" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="store__good__images" style="text-align: center">
                                        <img src="./assets/images/goodItems/goodItem2.jpeg" alt="" class="good__item__image good__item__image--active" id="" />
                                        <img src="./assets/images/goodItems/goodItem3.jpeg" alt="" class="good__item__image" id="" />
                                        <img src="./assets/images/goodItems/goodItem4.jpeg" alt="" class="good__item__image" id="" />
                                        <div class="good__item__image-switcher"></div>
                                    </div>
                                    <div class="good__item__bonuses">
                                        <div class="good__item__bonus sale">
                                            Скидка 20%
                                        </div>
                                    </div>
                                    <div class="good__item__image__buttons"></div>
                                    <div class="good__item__info">
                                        <div class="articule">
                                            Артикул: 351018510
                                        </div>
                                        <div class="title">
                                            Настенный светильник (бра) Freya
                                            FR5133WL-01CH
                                        </div>
                                        <div class="text">
                                            <div class="manufacturer">
                                                Производитель:
                                                <span>Freya</span>
                                            </div>
                                            <div class="power">
                                                Мощность (вт): <span>60</span>
                                            </div>
                                            <div class="counrty">
                                                Страна бренда:
                                                <span>Германия</span>
                                            </div>
                                        </div>
                                        <div class="parameters">
                                            <div class="plinth">
                                                <img src="./assets/images/svg/lamp.svg" alt="" class="parametrs__image" />
                                                <div class="value">
                                                    Цоколь: <span>E24</span>
                                                </div>
                                            </div>
                                            <div class="protection">
                                                <img src="./assets/images/svg/lock.svg" alt="" class="parametrs__image" />
                                                <div class="value">
                                                    IP степень пылевлагозащиты:
                                                    <span>20</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="stores__info">
                                            <div class="yandex">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/yandexScores.svg" alt="" />
                                                    <div class="count">389</div>
                                                </div>
                                                <div class="stores__info__right">
                                                    балла Плюса
                                                </div>
                                            </div>
                                            <div class="split">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/splitScores.svg" alt="" />
                                                    <div class="count">
                                                        3672 ₽
                                                    </div>
                                                </div>
                                                <div class="stores__info__right">
                                                    в сплит
                                                </div>
                                            </div>
                                            <div class="dolyami">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/dolyamiScores.svg" alt="" />
                                                </div>
                                                <div class="stores__info__right">
                                                    долями
                                                </div>
                                            </div>
                                            <div class="spay">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/spay.png" alt="" />
                                                </div>
                                                <div class="stores__info__right">
                                                    Сбер
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bottom__info">
                                            <div class="prices">
                                                <div class="current__price">
                                                    85 672 ₽
                                                </div>
                                            </div>
                                            <div class="availability">
                                                <div class="unavailable">
                                                    Нет в наличии
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buttons">
                                            <button class="good__item__button admisson">
                                                Уточнить наличие
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="good__item">
                                    <div class="good__item__top">
                                        <div class="good__item__tags">
                                            <div class="good__item__tag">
                                                Новинка
                                            </div>
                                        </div>
                                        <div class="good__item__reactions">
                                            <button class="compare">
                                                <svg>
                                                    <use xlink:href="#compare" />
                                                </svg>
                                            </button>
                                            <button class="like">
                                                <svg>
                                                    <use xlink:href="#favourite" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="store__good__images" style="text-align: center">
                                        <img src="./assets/images/goodItems/goodItem3.jpeg" alt="" class="good__item__image good__item__image--active" id="" />
                                        <img src="./assets/images/goodItems/goodItem4.jpeg" alt="" class="good__item__image" id="" />
                                        <img src="./assets/images/goodItems/goodItem4.jpeg" alt="" class="good__item__image" id="" />
                                        <img src="./assets/images/goodItems/goodItem2.jpeg" alt="" class="good__item__image" id="" />
                                        <img src="./assets/images/goodItems/goodItem1.jpeg" alt="" class="good__item__image" id="" />

                                        <div class="good__item__image-switcher"></div>
                                    </div>
                                    <div class="good__item__bonuses">
                                        <div class="good__item__bonus sale">
                                            Скидка 20%
                                        </div>
                                    </div>
                                    <div class="good__item__image__buttons"></div>
                                    <div class="good__item__info">
                                        <div class="articule">
                                            Артикул: 351018510
                                        </div>
                                        <div class="title">
                                            Настенный светильник (бра) Freya
                                            FR5133WL-01CH
                                        </div>
                                        <div class="text">
                                            <div class="manufacturer">
                                                Производитель:
                                                <span>Freya</span>
                                            </div>
                                            <div class="power">
                                                Мощность (вт): <span>60</span>
                                            </div>
                                            <div class="counrty">
                                                Страна бренда:
                                                <span>Германия</span>
                                            </div>
                                        </div>
                                        <div class="parameters">
                                            <div class="plinth">
                                                <img src="./assets/images/svg/lamp.svg" alt="" class="parametrs__image" />
                                                <div class="value">
                                                    Цоколь: <span>E24</span>
                                                </div>
                                            </div>
                                            <div class="protection">
                                                <img src="./assets/images/svg/lock.svg" alt="" class="parametrs__image" />
                                                <div class="value">
                                                    IP степень пылевлагозащиты:
                                                    <span>20</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="stores__info">
                                            <div class="yandex">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/yandexScores.svg" alt="" />
                                                    <div class="count">389</div>
                                                </div>
                                                <div class="stores__info__right">
                                                    балла Плюса
                                                </div>
                                            </div>
                                            <div class="split">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/splitScores.svg" alt="" />
                                                    <div class="count">
                                                        3672 ₽
                                                    </div>
                                                </div>
                                                <div class="stores__info__right">
                                                    в сплит
                                                </div>
                                            </div>
                                            <div class="dolyami">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/dolyamiScores.svg" alt="" />
                                                </div>
                                                <div class="stores__info__right">
                                                    долями
                                                </div>
                                            </div>
                                            <div class="spay">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/spay.png" alt="" />
                                                </div>
                                                <div class="stores__info__right">
                                                    Сбер
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bottom__info">
                                            <div class="prices">
                                                <div class="current__price">
                                                    85 672 ₽
                                                </div>
                                            </div>
                                            <div class="availability">
                                                <div class="available">
                                                    В наличии:
                                                    <span>200 шт.</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buttons">
                                            <button class="good__item__button order">
                                                Быстрый заказ
                                            </button>
                                            <button class="good__item__button buy">
                                                Купить
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="good__item">
                                    <div class="good__item__top">
                                        <div class="good__item__tags">
                                            <div class="good__item__tag">
                                                Новинка
                                            </div>
                                        </div>
                                        <div class="good__item__reactions">
                                            <button class="compare">
                                                <svg>
                                                    <use xlink:href="#compare" />
                                                </svg>
                                            </button>
                                            <button class="like">
                                                <svg>
                                                    <use xlink:href="#favourite" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="store__good__images" style="text-align: center">
                                        <img src="./assets/images/goodItems/goodItem1.jpeg" alt="" class="good__item__image good__item__image--active" id="" />
                                        <img src="./assets/images/goodItems/goodItem2.jpeg" alt="" class="good__item__image" id="" />
                                        <img src="./assets/images/goodItems/goodItem3.jpeg" alt="" class="good__item__image" id="" />
                                        <img src="./assets/images/goodItems/goodItem4.jpeg" alt="" class="good__item__image" id="" />

                                        <div class="good__item__image-switcher"></div>
                                    </div>
                                    <div class="good__item__bonuses">
                                        <div class="good__item__bonus sale">
                                            Скидка 20%
                                        </div>
                                    </div>
                                    <div class="good__item__image__buttons"></div>
                                    <div class="good__item__info">
                                        <div class="articule">
                                            Артикул: 351018510
                                        </div>
                                        <div class="title">
                                            Настенный светильник (бра) Freya
                                            FR5133WL-01CH
                                        </div>
                                        <div class="text">
                                            <div class="manufacturer">
                                                Производитель:
                                                <span>Freya</span>
                                            </div>
                                            <div class="power">
                                                Мощность (вт): <span>60</span>
                                            </div>
                                            <div class="counrty">
                                                Страна бренда:
                                                <span>Германия</span>
                                            </div>
                                        </div>
                                        <div class="parameters">
                                            <div class="plinth">
                                                <img src="./assets/images/svg/lamp.svg" alt="" class="parametrs__image" />
                                                <div class="value">
                                                    Цоколь: <span>E24</span>
                                                </div>
                                            </div>
                                            <div class="protection">
                                                <img src="./assets/images/svg/lock.svg" alt="" class="parametrs__image" />
                                                <div class="value">
                                                    IP степень пылевлагозащиты:
                                                    <span>20</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="stores__info">
                                            <div class="yandex">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/yandexScores.svg" alt="" />
                                                    <div class="count">389</div>
                                                </div>
                                                <div class="stores__info__right">
                                                    балла Плюса
                                                </div>
                                            </div>
                                            <div class="split">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/splitScores.svg" alt="" />
                                                    <div class="count">
                                                        3672 ₽
                                                    </div>
                                                </div>
                                                <div class="stores__info__right">
                                                    в сплит
                                                </div>
                                            </div>
                                            <div class="dolyami">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/dolyamiScores.svg" alt="" />
                                                </div>
                                                <div class="stores__info__right">
                                                    долями
                                                </div>
                                            </div>
                                            <div class="spay">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/spay.png" alt="" />
                                                </div>
                                                <div class="stores__info__right">
                                                    Сбер
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bottom__info">
                                            <div class="prices">
                                                <div class="current__price">
                                                    85 672 ₽
                                                </div>
                                                <div class="old__price">
                                                    95 672 ₽
                                                </div>
                                            </div>
                                            <div class="availability">
                                                <div class="available">
                                                    В наличии:
                                                    <span>200 шт.</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buttons">
                                            <button class="good__item__button order">
                                                Быстрый заказ
                                            </button>
                                            <button class="good__item__button buy">
                                                Купить
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="good__item">
                                    <div class="good__item__top">
                                        <div class="good__item__tags">
                                            <div class="good__item__tag">
                                                Новинка
                                            </div>
                                        </div>
                                        <div class="good__item__reactions">
                                            <button class="compare">
                                                <svg>
                                                    <use xlink:href="#compare" />
                                                </svg>
                                            </button>
                                            <button class="like active">
                                                <svg>
                                                    <use xlink:href="#favourite" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="store__good__images" style="text-align: center">
                                        <img src="./assets/images/goodItems/goodItem1.jpeg" alt="" class="good__item__image good__item__image--active" id="" />
                                        <img src="./assets/images/goodItems/goodItem2.jpeg" alt="" class="good__item__image" id="" />
                                        <img src="./assets/images/goodItems/goodItem3.jpeg" alt="" class="good__item__image" id="" />
                                        <img src="./assets/images/goodItems/goodItem4.jpeg" alt="" class="good__item__image" id="" />

                                        <div class="good__item__image-switcher"></div>
                                    </div>
                                    <div class="good__item__bonuses">
                                        <div class="good__item__bonus sale">
                                            Скидка 20%
                                        </div>
                                    </div>
                                    <div class="good__item__image__buttons"></div>
                                    <div class="good__item__info">
                                        <div class="articule">
                                            Артикул: 351018510
                                        </div>
                                        <div class="title">
                                            Настенный светильник (бра) Freya
                                            FR5133WL-01CH
                                        </div>
                                        <div class="text">
                                            <div class="manufacturer">
                                                Производитель:
                                                <span>Freya</span>
                                            </div>
                                            <div class="power">
                                                Мощность (вт): <span>60</span>
                                            </div>
                                            <div class="counrty">
                                                Страна бренда:
                                                <span>Германия</span>
                                            </div>
                                        </div>
                                        <div class="parameters">
                                            <div class="plinth">
                                                <img src="./assets/images/svg/lamp.svg" alt="" class="parametrs__image" />
                                                <div class="value">
                                                    Цоколь: <span>E24</span>
                                                </div>
                                            </div>
                                            <div class="protection">
                                                <img src="./assets/images/svg/lock.svg" alt="" class="parametrs__image" />
                                                <div class="value">
                                                    IP степень пылевлагозащиты:
                                                    <span>20</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="stores__info">
                                            <div class="yandex">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/yandexScores.svg" alt="" />
                                                    <div class="count">389</div>
                                                </div>
                                                <div class="stores__info__right">
                                                    балла Плюса
                                                </div>
                                            </div>
                                            <div class="split">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/splitScores.svg" alt="" />
                                                    <div class="count">
                                                        3672 ₽
                                                    </div>
                                                </div>
                                                <div class="stores__info__right">
                                                    в сплит
                                                </div>
                                            </div>
                                            <div class="dolyami">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/dolyamiScores.svg" alt="" />
                                                </div>
                                                <div class="stores__info__right">
                                                    долями
                                                </div>
                                            </div>
                                            <div class="spay">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/spay.png" alt="" />
                                                </div>
                                                <div class="stores__info__right">
                                                    Сбер
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bottom__info">
                                            <div class="prices">
                                                <div class="current__price">
                                                    85 672 ₽
                                                </div>
                                                <div class="old__price">
                                                    95 672 ₽
                                                </div>
                                            </div>
                                            <div class="availability">
                                                <div class="available">
                                                    В наличии:
                                                    <span>200 шт.</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buttons">
                                            <button class="good__item__button order">
                                                Быстрый заказ
                                            </button>
                                            <button class="good__item__button buy">
                                                Купить
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="good__item">
                                    <div class="good__item__top">
                                        <div class="good__item__tags">
                                            <div class="good__item__tag">
                                                Новинка
                                            </div>
                                        </div>
                                        <div class="good__item__reactions">
                                            <button class="compare">
                                                <svg>
                                                    <use xlink:href="#compare" />
                                                </svg>
                                            </button>
                                            <button class="like">
                                                <svg>
                                                    <use xlink:href="#favourite" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="store__good__images" style="text-align: center">
                                        <img src="./assets/images/goodItems/goodItem1.jpeg" alt="" class="good__item__image good__item__image--active" id="" />
                                        <img src="./assets/images/goodItems/goodItem2.jpeg" alt="" class="good__item__image" id="" />
                                        <img src="./assets/images/goodItems/goodItem3.jpeg" alt="" class="good__item__image" id="" />
                                        <img src="./assets/images/goodItems/goodItem4.jpeg" alt="" class="good__item__image" id="" />

                                        <div class="good__item__image-switcher"></div>
                                    </div>
                                    <div class="good__item__bonuses">
                                        <div class="good__item__bonus sale">
                                            Скидка 20%
                                        </div>
                                    </div>
                                    <div class="good__item__image__buttons"></div>
                                    <div class="good__item__info">
                                        <div class="articule">
                                            Артикул: 351018510
                                        </div>
                                        <div class="title">
                                            Настенный светильник (бра) Freya
                                            FR5133WL-01CH
                                        </div>
                                        <div class="text">
                                            <div class="manufacturer">
                                                Производитель:
                                                <span>Freya</span>
                                            </div>
                                            <div class="power">
                                                Мощность (вт): <span>60</span>
                                            </div>
                                            <div class="counrty">
                                                Страна бренда:
                                                <span>Германия</span>
                                            </div>
                                        </div>
                                        <div class="parameters">
                                            <div class="plinth">
                                                <img src="./assets/images/svg/lamp.svg" alt="" class="parametrs__image" />
                                                <div class="value">
                                                    Цоколь: <span>E24</span>
                                                </div>
                                            </div>
                                            <div class="protection">
                                                <img src="./assets/images/svg/lock.svg" alt="" class="parametrs__image" />
                                                <div class="value">
                                                    IP степень пылевлагозащиты:
                                                    <span>20</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="stores__info">
                                            <div class="yandex">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/yandexScores.svg" alt="" />
                                                    <div class="count">389</div>
                                                </div>
                                                <div class="stores__info__right">
                                                    балла Плюса
                                                </div>
                                            </div>
                                            <div class="split">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/splitScores.svg" alt="" />
                                                    <div class="count">
                                                        3672 ₽
                                                    </div>
                                                </div>
                                                <div class="stores__info__right">
                                                    в сплит
                                                </div>
                                            </div>
                                            <div class="dolyami">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/dolyamiScores.svg" alt="" />
                                                </div>
                                                <div class="stores__info__right">
                                                    долями
                                                </div>
                                            </div>
                                            <div class="spay">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/spay.png" alt="" />
                                                </div>
                                                <div class="stores__info__right">
                                                    Сбер
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bottom__info">
                                            <div class="prices">
                                                <div class="current__price">
                                                    85 672 ₽
                                                </div>
                                                <div class="old__price">
                                                    95 672 ₽
                                                </div>
                                            </div>
                                            <div class="availability">
                                                <div class="available">
                                                    В наличии:
                                                    <span>200 шт.</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buttons">
                                            <button class="good__item__button order">
                                                Быстрый заказ
                                            </button>
                                            <button class="good__item__button buy">
                                                Купить
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="store__goods__products__buttons">
                                <button class="arrow__button prev arrow__button--small">
                                    <svg class="arrow__button__svg">
                                        <use xlink:href="#arrow" />
                                    </svg>
                                </button>
                                <button class="arrow__button next arrow__button--small">
                                    <svg class="arrow__button__svg">
                                        <use xlink:href="#arrow" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="store__goods__wrapper goodItem5">
                        <div class="store__goods__slider">
                            <div class="store__goods__products">
                                <div class="good__item">
                                    <div class="good__item__top">
                                        <div class="good__item__tags">
                                            <div class="good__item__tag">
                                                Новинка
                                            </div>
                                        </div>
                                        <div class="good__item__reactions">
                                            <button class="compare">
                                                <svg>
                                                    <use xlink:href="#compare" />
                                                </svg>
                                            </button>
                                            <button class="like">
                                                <svg>
                                                    <use xlink:href="#favourite" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="store__good__images" style="text-align: center">
                                        <img src="./assets/images/goodItems/goodItem1.jpeg" alt="" class="good__item__image good__item__image--active" id="" />
                                        <img src="./assets/images/goodItems/goodItem2.jpeg" alt="" class="good__item__image" id="" />
                                        <img src="./assets/images/goodItems/goodItem3.jpeg" alt="" class="good__item__image" id="" />
                                        <img src="./assets/images/goodItems/goodItem4.jpeg" alt="" class="good__item__image" id="" />

                                        <div class="good__item__image-switcher"></div>
                                    </div>
                                    <div class="good__item__bonuses">
                                        <div class="good__item__bonus sale">
                                            Скидка 20%
                                        </div>
                                    </div>
                                    <div class="good__item__image__buttons"></div>
                                    <div class="good__item__info">
                                        <div class="articule">
                                            Артикул: 351018510
                                        </div>
                                        <div class="title">
                                            Настенный светильник (бра) Freya
                                            FR5133WL-01CH
                                        </div>
                                        <div class="text">
                                            <div class="manufacturer">
                                                Производитель:
                                                <span>Freya</span>
                                            </div>
                                            <div class="power">
                                                Мощность (вт): <span>60</span>
                                            </div>
                                            <div class="counrty">
                                                Страна бренда:
                                                <span>Германия</span>
                                            </div>
                                        </div>
                                        <div class="parameters">
                                            <div class="plinth">
                                                <img src="./assets/images/svg/lamp.svg" alt="" class="parametrs__image" />
                                                <div class="value">
                                                    Цоколь: <span>E24</span>
                                                </div>
                                            </div>
                                            <div class="protection">
                                                <img src="./assets/images/svg/lock.svg" alt="" class="parametrs__image" />
                                                <div class="value">
                                                    IP степень пылевлагозащиты:
                                                    <span>20</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="stores__info">
                                            <div class="yandex">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/yandexScores.svg" alt="" />
                                                    <div class="count">389</div>
                                                </div>
                                                <div class="stores__info__right">
                                                    балла Плюса
                                                </div>
                                            </div>
                                            <div class="split">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/splitScores.svg" alt="" />
                                                    <div class="count">
                                                        3672 ₽
                                                    </div>
                                                </div>
                                                <div class="stores__info__right">
                                                    в сплит
                                                </div>
                                            </div>
                                            <div class="dolyami">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/dolyamiScores.svg" alt="" />
                                                </div>
                                                <div class="stores__info__right">
                                                    долями
                                                </div>
                                            </div>
                                            <div class="spay">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/spay.png" alt="" />
                                                </div>
                                                <div class="stores__info__right">
                                                    Сбер
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bottom__info">
                                            <div class="prices">
                                                <div class="current__price">
                                                    85 672 ₽
                                                </div>
                                                <div class="old__price">
                                                    95 672 ₽
                                                </div>
                                            </div>
                                            <div class="availability">
                                                <div class="unavailable">
                                                    <span>Нет в наличии</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buttons">
                                            <button class="good__item__button admisson">
                                                Быстрый заказ
                                            </button>

                                        </div>
                                    </div>
                                </div>
                                <div class="good__item">
                                    <div class="good__item__top">
                                        <div class="good__item__tags">
                                            <div class="good__item__tag">
                                                Новинка
                                            </div>
                                        </div>
                                        <div class="good__item__reactions">
                                            <button class="compare">
                                                <svg>
                                                    <use xlink:href="#compare" />
                                                </svg>
                                            </button>
                                            <button class="like">
                                                <svg>
                                                    <use xlink:href="#favourite" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="store__good__images" style="text-align: center">
                                        <img src="./assets/images/goodItems/goodItem2.jpeg" alt="" class="good__item__image good__item__image--active" id="" />
                                        <img src="./assets/images/goodItems/goodItem3.jpeg" alt="" class="good__item__image" id="" />
                                        <img src="./assets/images/goodItems/goodItem4.jpeg" alt="" class="good__item__image" id="" />
                                        <div class="good__item__image-switcher"></div>
                                    </div>
                                    <div class="good__item__bonuses">
                                        <div class="good__item__bonus sale">
                                            Скидка 20%
                                        </div>
                                    </div>
                                    <div class="good__item__image__buttons"></div>
                                    <div class="good__item__info">
                                        <div class="articule">
                                            Артикул: 351018510
                                        </div>
                                        <div class="title">
                                            Настенный светильник (бра) Freya
                                            FR5133WL-01CH
                                        </div>
                                        <div class="text">
                                            <div class="manufacturer">
                                                Производитель:
                                                <span>Freya</span>
                                            </div>
                                            <div class="power">
                                                Мощность (вт): <span>60</span>
                                            </div>
                                            <div class="counrty">
                                                Страна бренда:
                                                <span>Германия</span>
                                            </div>
                                        </div>
                                        <div class="parameters">
                                            <div class="plinth">
                                                <img src="./assets/images/svg/lamp.svg" alt="" class="parametrs__image" />
                                                <div class="value">
                                                    Цоколь: <span>E24</span>
                                                </div>
                                            </div>
                                            <div class="protection">
                                                <img src="./assets/images/svg/lock.svg" alt="" class="parametrs__image" />
                                                <div class="value">
                                                    IP степень пылевлагозащиты:
                                                    <span>20</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="stores__info">
                                            <div class="yandex">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/yandexScores.svg" alt="" />
                                                    <div class="count">389</div>
                                                </div>
                                                <div class="stores__info__right">
                                                    балла Плюса
                                                </div>
                                            </div>
                                            <div class="split">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/splitScores.svg" alt="" />
                                                    <div class="count">
                                                        3672 ₽
                                                    </div>
                                                </div>
                                                <div class="stores__info__right">
                                                    в сплит
                                                </div>
                                            </div>
                                            <div class="dolyami">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/dolyamiScores.svg" alt="" />
                                                </div>
                                                <div class="stores__info__right">
                                                    долями
                                                </div>
                                            </div>
                                            <div class="spay">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/spay.png" alt="" />
                                                </div>
                                                <div class="stores__info__right">
                                                    Сбер
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bottom__info">
                                            <div class="prices">
                                                <div class="current__price">
                                                    85 672 ₽
                                                </div>
                                            </div>
                                            <div class="availability">
                                                <div class="unavailable">
                                                    Нет в наличии
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buttons">
                                            <button class="good__item__button admisson">
                                                Уточнить наличие
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="good__item">
                                    <div class="good__item__top">
                                        <div class="good__item__tags">
                                            <div class="good__item__tag">
                                                Новинка
                                            </div>
                                        </div>
                                        <div class="good__item__reactions">
                                            <button class="compare">
                                                <svg>
                                                    <use xlink:href="#compare" />
                                                </svg>
                                            </button>
                                            <button class="like">
                                                <svg>
                                                    <use xlink:href="#favourite" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="store__good__images" style="text-align: center">
                                        <img src="./assets/images/goodItems/goodItem3.jpeg" alt="" class="good__item__image good__item__image--active" id="" />
                                        <img src="./assets/images/goodItems/goodItem4.jpeg" alt="" class="good__item__image" id="" />
                                        <img src="./assets/images/goodItems/goodItem4.jpeg" alt="" class="good__item__image" id="" />
                                        <img src="./assets/images/goodItems/goodItem2.jpeg" alt="" class="good__item__image" id="" />
                                        <img src="./assets/images/goodItems/goodItem1.jpeg" alt="" class="good__item__image" id="" />

                                        <div class="good__item__image-switcher"></div>
                                    </div>
                                    <div class="good__item__bonuses">
                                        <div class="good__item__bonus sale">
                                            Скидка 20%
                                        </div>
                                    </div>
                                    <div class="good__item__image__buttons"></div>
                                    <div class="good__item__info">
                                        <div class="articule">
                                            Артикул: 351018510
                                        </div>
                                        <div class="title">
                                            Настенный светильник (бра) Freya
                                            FR5133WL-01CH
                                        </div>
                                        <div class="text">
                                            <div class="manufacturer">
                                                Производитель:
                                                <span>Freya</span>
                                            </div>
                                            <div class="power">
                                                Мощность (вт): <span>60</span>
                                            </div>
                                            <div class="counrty">
                                                Страна бренда:
                                                <span>Германия</span>
                                            </div>
                                        </div>
                                        <div class="parameters">
                                            <div class="plinth">
                                                <img src="./assets/images/svg/lamp.svg" alt="" class="parametrs__image" />
                                                <div class="value">
                                                    Цоколь: <span>E24</span>
                                                </div>
                                            </div>
                                            <div class="protection">
                                                <img src="./assets/images/svg/lock.svg" alt="" class="parametrs__image" />
                                                <div class="value">
                                                    IP степень пылевлагозащиты:
                                                    <span>20</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="stores__info">
                                            <div class="yandex">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/yandexScores.svg" alt="" />
                                                    <div class="count">389</div>
                                                </div>
                                                <div class="stores__info__right">
                                                    балла Плюса
                                                </div>
                                            </div>
                                            <div class="split">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/splitScores.svg" alt="" />
                                                    <div class="count">
                                                        3672 ₽
                                                    </div>
                                                </div>
                                                <div class="stores__info__right">
                                                    в сплит
                                                </div>
                                            </div>
                                            <div class="dolyami">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/dolyamiScores.svg" alt="" />
                                                </div>
                                                <div class="stores__info__right">
                                                    долями
                                                </div>
                                            </div>
                                            <div class="spay">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/spay.png" alt="" />
                                                </div>
                                                <div class="stores__info__right">
                                                    Сбер
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bottom__info">
                                            <div class="prices">
                                                <div class="current__price">
                                                    85 672 ₽
                                                </div>
                                            </div>
                                            <div class="availability">
                                                <div class="available">
                                                    В наличии:
                                                    <span>200 шт.</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buttons">
                                            <button class="good__item__button order">
                                                Быстрый заказ
                                            </button>
                                            <button class="good__item__button buy">
                                                Купить
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="good__item">
                                    <div class="good__item__top">
                                        <div class="good__item__tags">
                                            <div class="good__item__tag">
                                                Новинка
                                            </div>
                                        </div>
                                        <div class="good__item__reactions">
                                            <button class="compare">
                                                <svg>
                                                    <use xlink:href="#compare" />
                                                </svg>
                                            </button>
                                            <button class="like">
                                                <svg>
                                                    <use xlink:href="#favourite" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="store__good__images" style="text-align: center">
                                        <img src="./assets/images/goodItems/goodItem1.jpeg" alt="" class="good__item__image good__item__image--active" id="" />
                                        <img src="./assets/images/goodItems/goodItem2.jpeg" alt="" class="good__item__image" id="" />
                                        <img src="./assets/images/goodItems/goodItem3.jpeg" alt="" class="good__item__image" id="" />
                                        <img src="./assets/images/goodItems/goodItem4.jpeg" alt="" class="good__item__image" id="" />

                                        <div class="good__item__image-switcher"></div>
                                    </div>
                                    <div class="good__item__bonuses">
                                        <div class="good__item__bonus sale">
                                            Скидка 20%
                                        </div>
                                    </div>
                                    <div class="good__item__image__buttons"></div>
                                    <div class="good__item__info">
                                        <div class="articule">
                                            Артикул: 351018510
                                        </div>
                                        <div class="title">
                                            Настенный светильник (бра) Freya
                                            FR5133WL-01CH
                                        </div>
                                        <div class="text">
                                            <div class="manufacturer">
                                                Производитель:
                                                <span>Freya</span>
                                            </div>
                                            <div class="power">
                                                Мощность (вт): <span>60</span>
                                            </div>
                                            <div class="counrty">
                                                Страна бренда:
                                                <span>Германия</span>
                                            </div>
                                        </div>
                                        <div class="parameters">
                                            <div class="plinth">
                                                <img src="./assets/images/svg/lamp.svg" alt="" class="parametrs__image" />
                                                <div class="value">
                                                    Цоколь: <span>E24</span>
                                                </div>
                                            </div>
                                            <div class="protection">
                                                <img src="./assets/images/svg/lock.svg" alt="" class="parametrs__image" />
                                                <div class="value">
                                                    IP степень пылевлагозащиты:
                                                    <span>20</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="stores__info">
                                            <div class="yandex">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/yandexScores.svg" alt="" />
                                                    <div class="count">389</div>
                                                </div>
                                                <div class="stores__info__right">
                                                    балла Плюса
                                                </div>
                                            </div>
                                            <div class="split">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/splitScores.svg" alt="" />
                                                    <div class="count">
                                                        3672 ₽
                                                    </div>
                                                </div>
                                                <div class="stores__info__right">
                                                    в сплит
                                                </div>
                                            </div>
                                            <div class="dolyami">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/dolyamiScores.svg" alt="" />
                                                </div>
                                                <div class="stores__info__right">
                                                    долями
                                                </div>
                                            </div>
                                            <div class="spay">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/spay.png" alt="" />
                                                </div>
                                                <div class="stores__info__right">
                                                    Сбер
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bottom__info">
                                            <div class="prices">
                                                <div class="current__price">
                                                    85 672 ₽
                                                </div>
                                                <div class="old__price">
                                                    95 672 ₽
                                                </div>
                                            </div>
                                            <div class="availability">
                                                <div class="available">
                                                    В наличии:
                                                    <span>200 шт.</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buttons">
                                            <button class="good__item__button order">
                                                Быстрый заказ
                                            </button>
                                            <button class="good__item__button buy">
                                                Купить
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="good__item">
                                    <div class="good__item__top">
                                        <div class="good__item__tags">
                                            <div class="good__item__tag">
                                                Новинка
                                            </div>
                                        </div>
                                        <div class="good__item__reactions">
                                            <button class="compare">
                                                <svg>
                                                    <use xlink:href="#compare" />
                                                </svg>
                                            </button>
                                            <button class="like active">
                                                <svg>
                                                    <use xlink:href="#favourite" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="store__good__images" style="text-align: center">
                                        <img src="./assets/images/goodItems/goodItem1.jpeg" alt="" class="good__item__image good__item__image--active" id="" />
                                        <img src="./assets/images/goodItems/goodItem2.jpeg" alt="" class="good__item__image" id="" />
                                        <img src="./assets/images/goodItems/goodItem3.jpeg" alt="" class="good__item__image" id="" />
                                        <img src="./assets/images/goodItems/goodItem4.jpeg" alt="" class="good__item__image" id="" />

                                        <div class="good__item__image-switcher"></div>
                                    </div>
                                    <div class="good__item__bonuses">
                                        <div class="good__item__bonus sale">
                                            Скидка 20%
                                        </div>
                                    </div>
                                    <div class="good__item__image__buttons"></div>
                                    <div class="good__item__info">
                                        <div class="articule">
                                            Артикул: 351018510
                                        </div>
                                        <div class="title">
                                            Настенный светильник (бра) Freya
                                            FR5133WL-01CH
                                        </div>
                                        <div class="text">
                                            <div class="manufacturer">
                                                Производитель:
                                                <span>Freya</span>
                                            </div>
                                            <div class="power">
                                                Мощность (вт): <span>60</span>
                                            </div>
                                            <div class="counrty">
                                                Страна бренда:
                                                <span>Германия</span>
                                            </div>
                                        </div>
                                        <div class="parameters">
                                            <div class="plinth">
                                                <img src="./assets/images/svg/lamp.svg" alt="" class="parametrs__image" />
                                                <div class="value">
                                                    Цоколь: <span>E24</span>
                                                </div>
                                            </div>
                                            <div class="protection">
                                                <img src="./assets/images/svg/lock.svg" alt="" class="parametrs__image" />
                                                <div class="value">
                                                    IP степень пылевлагозащиты:
                                                    <span>20</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="stores__info">
                                            <div class="yandex">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/yandexScores.svg" alt="" />
                                                    <div class="count">389</div>
                                                </div>
                                                <div class="stores__info__right">
                                                    балла Плюса
                                                </div>
                                            </div>
                                            <div class="split">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/splitScores.svg" alt="" />
                                                    <div class="count">
                                                        3672 ₽
                                                    </div>
                                                </div>
                                                <div class="stores__info__right">
                                                    в сплит
                                                </div>
                                            </div>
                                            <div class="dolyami">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/dolyamiScores.svg" alt="" />
                                                </div>
                                                <div class="stores__info__right">
                                                    долями
                                                </div>
                                            </div>
                                            <div class="spay">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/spay.png" alt="" />
                                                </div>
                                                <div class="stores__info__right">
                                                    Сбер
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bottom__info">
                                            <div class="prices">
                                                <div class="current__price">
                                                    85 672 ₽
                                                </div>
                                                <div class="old__price">
                                                    95 672 ₽
                                                </div>
                                            </div>
                                            <div class="availability">
                                                <div class="available">
                                                    В наличии:
                                                    <span>200 шт.</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buttons">
                                            <button class="good__item__button order">
                                                Быстрый заказ
                                            </button>
                                            <button class="good__item__button buy">
                                                Купить
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="good__item">
                                    <div class="good__item__top">
                                        <div class="good__item__tags">
                                            <div class="good__item__tag">
                                                Новинка
                                            </div>
                                        </div>
                                        <div class="good__item__reactions">
                                            <button class="compare">
                                                <svg>
                                                    <use xlink:href="#compare" />
                                                </svg>
                                            </button>
                                            <button class="like">
                                                <svg>
                                                    <use xlink:href="#favourite" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="store__good__images" style="text-align: center">
                                        <img src="./assets/images/goodItems/goodItem1.jpeg" alt="" class="good__item__image good__item__image--active" id="" />
                                        <img src="./assets/images/goodItems/goodItem2.jpeg" alt="" class="good__item__image" id="" />
                                        <img src="./assets/images/goodItems/goodItem3.jpeg" alt="" class="good__item__image" id="" />
                                        <img src="./assets/images/goodItems/goodItem4.jpeg" alt="" class="good__item__image" id="" />

                                        <div class="good__item__image-switcher"></div>
                                    </div>
                                    <div class="good__item__bonuses">
                                        <div class="good__item__bonus sale">
                                            Скидка 20%
                                        </div>
                                    </div>
                                    <div class="good__item__image__buttons"></div>
                                    <div class="good__item__info">
                                        <div class="articule">
                                            Артикул: 351018510
                                        </div>
                                        <div class="title">
                                            Настенный светильник (бра) Freya
                                            FR5133WL-01CH
                                        </div>
                                        <div class="text">
                                            <div class="manufacturer">
                                                Производитель:
                                                <span>Freya</span>
                                            </div>
                                            <div class="power">
                                                Мощность (вт): <span>60</span>
                                            </div>
                                            <div class="counrty">
                                                Страна бренда:
                                                <span>Германия</span>
                                            </div>
                                        </div>
                                        <div class="parameters">
                                            <div class="plinth">
                                                <img src="./assets/images/svg/lamp.svg" alt="" class="parametrs__image" />
                                                <div class="value">
                                                    Цоколь: <span>E24</span>
                                                </div>
                                            </div>
                                            <div class="protection">
                                                <img src="./assets/images/svg/lock.svg" alt="" class="parametrs__image" />
                                                <div class="value">
                                                    IP степень пылевлагозащиты:
                                                    <span>20</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="stores__info">
                                            <div class="yandex">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/yandexScores.svg" alt="" />
                                                    <div class="count">389</div>
                                                </div>
                                                <div class="stores__info__right">
                                                    балла Плюса
                                                </div>
                                            </div>
                                            <div class="split">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/splitScores.svg" alt="" />
                                                    <div class="count">
                                                        3672 ₽
                                                    </div>
                                                </div>
                                                <div class="stores__info__right">
                                                    в сплит
                                                </div>
                                            </div>
                                            <div class="dolyami">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/dolyamiScores.svg" alt="" />
                                                </div>
                                                <div class="stores__info__right">
                                                    долями
                                                </div>
                                            </div>
                                            <div class="spay">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/spay.png" alt="" />
                                                </div>
                                                <div class="stores__info__right">
                                                    Сбер
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bottom__info">
                                            <div class="prices">
                                                <div class="current__price">
                                                    85 672 ₽
                                                </div>
                                                <div class="old__price">
                                                    95 672 ₽
                                                </div>
                                            </div>
                                            <div class="availability">
                                                <div class="available">
                                                    В наличии:
                                                    <span>200 шт.</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buttons">
                                            <button class="good__item__button order">
                                                Быстрый заказ
                                            </button>
                                            <button class="good__item__button buy">
                                                Купить
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="store__goods__products__buttons">
                                <button class="arrow__button prev arrow__button--small">
                                    <svg class="arrow__button__svg">
                                        <use xlink:href="#arrow" />
                                    </svg>
                                </button>
                                <button class="arrow__button next arrow__button--small">
                                    <svg class="arrow__button__svg">
                                        <use xlink:href="#arrow" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="store__goods__wrapper goodItem6">
                        <div class="store__goods__slider">
                            <div class="store__goods__products">
                                <div class="good__item">
                                    <div class="good__item__top">
                                        <div class="good__item__tags">
                                            <div class="good__item__tag">
                                                Новинка
                                            </div>
                                        </div>
                                        <div class="good__item__reactions">
                                            <button class="compare">
                                                <svg>
                                                    <use xlink:href="#compare" />
                                                </svg>
                                            </button>
                                            <button class="like">
                                                <svg>
                                                    <use xlink:href="#favourite" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="store__good__images" style="text-align: center">
                                        <img src="./assets/images/goodItems/goodItem1.jpeg" alt="" class="good__item__image good__item__image--active" id="" />
                                        <img src="./assets/images/goodItems/goodItem2.jpeg" alt="" class="good__item__image" id="" />
                                        <img src="./assets/images/goodItems/goodItem3.jpeg" alt="" class="good__item__image" id="" />
                                        <img src="./assets/images/goodItems/goodItem4.jpeg" alt="" class="good__item__image" id="" />

                                        <div class="good__item__image-switcher"></div>
                                    </div>
                                    <div class="good__item__bonuses">
                                        <div class="good__item__bonus sale">
                                            Скидка 20%
                                        </div>
                                    </div>
                                    <div class="good__item__image__buttons"></div>
                                    <div class="good__item__info">
                                        <div class="articule">
                                            Артикул: 351018510
                                        </div>
                                        <div class="title">
                                            Настенный светильник (бра) Freya
                                            FR5133WL-01CH
                                        </div>
                                        <div class="text">
                                            <div class="manufacturer">
                                                Производитель:
                                                <span>Freya</span>
                                            </div>
                                            <div class="power">
                                                Мощность (вт): <span>60</span>
                                            </div>
                                            <div class="counrty">
                                                Страна бренда:
                                                <span>Германия</span>
                                            </div>
                                        </div>
                                        <div class="parameters">
                                            <div class="plinth">
                                                <img src="./assets/images/svg/lamp.svg" alt="" class="parametrs__image" />
                                                <div class="value">
                                                    Цоколь: <span>E24</span>
                                                </div>
                                            </div>
                                            <div class="protection">
                                                <img src="./assets/images/svg/lock.svg" alt="" class="parametrs__image" />
                                                <div class="value">
                                                    IP степень пылевлагозащиты:
                                                    <span>20</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="stores__info">
                                            <div class="yandex">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/yandexScores.svg" alt="" />
                                                    <div class="count">389</div>
                                                </div>
                                                <div class="stores__info__right">
                                                    балла Плюса
                                                </div>
                                            </div>
                                            <div class="split">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/splitScores.svg" alt="" />
                                                    <div class="count">
                                                        3672 ₽
                                                    </div>
                                                </div>
                                                <div class="stores__info__right">
                                                    в сплит
                                                </div>
                                            </div>
                                            <div class="dolyami">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/dolyamiScores.svg" alt="" />
                                                </div>
                                                <div class="stores__info__right">
                                                    долями
                                                </div>
                                            </div>
                                            <div class="spay">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/spay.png" alt="" />
                                                </div>
                                                <div class="stores__info__right">
                                                    Сбер
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bottom__info">
                                            <div class="prices">
                                                <div class="current__price">
                                                    85 672 ₽
                                                </div>
                                                <div class="old__price">
                                                    95 672 ₽
                                                </div>
                                            </div>
                                            <div class="availability">
                                                <div class="unavailable">
                                                    <span>Нет в наличии</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buttons">
                                            <button class="good__item__button admisson">
                                                Быстрый заказ
                                            </button>

                                        </div>
                                    </div>
                                </div>
                                <div class="good__item">
                                    <div class="good__item__top">
                                        <div class="good__item__tags">
                                            <div class="good__item__tag">
                                                Новинка
                                            </div>
                                        </div>
                                        <div class="good__item__reactions">
                                            <button class="compare">
                                                <svg>
                                                    <use xlink:href="#compare" />
                                                </svg>
                                            </button>
                                            <button class="like">
                                                <svg>
                                                    <use xlink:href="#favourite" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="store__good__images" style="text-align: center">
                                        <img src="./assets/images/goodItems/goodItem2.jpeg" alt="" class="good__item__image good__item__image--active" id="" />
                                        <img src="./assets/images/goodItems/goodItem3.jpeg" alt="" class="good__item__image" id="" />
                                        <img src="./assets/images/goodItems/goodItem4.jpeg" alt="" class="good__item__image" id="" />
                                        <div class="good__item__image-switcher"></div>
                                    </div>
                                    <div class="good__item__bonuses">
                                        <div class="good__item__bonus sale">
                                            Скидка 20%
                                        </div>
                                    </div>
                                    <div class="good__item__image__buttons"></div>
                                    <div class="good__item__info">
                                        <div class="articule">
                                            Артикул: 351018510
                                        </div>
                                        <div class="title">
                                            Настенный светильник (бра) Freya
                                            FR5133WL-01CH
                                        </div>
                                        <div class="text">
                                            <div class="manufacturer">
                                                Производитель:
                                                <span>Freya</span>
                                            </div>
                                            <div class="power">
                                                Мощность (вт): <span>60</span>
                                            </div>
                                            <div class="counrty">
                                                Страна бренда:
                                                <span>Германия</span>
                                            </div>
                                        </div>
                                        <div class="parameters">
                                            <div class="plinth">
                                                <img src="./assets/images/svg/lamp.svg" alt="" class="parametrs__image" />
                                                <div class="value">
                                                    Цоколь: <span>E24</span>
                                                </div>
                                            </div>
                                            <div class="protection">
                                                <img src="./assets/images/svg/lock.svg" alt="" class="parametrs__image" />
                                                <div class="value">
                                                    IP степень пылевлагозащиты:
                                                    <span>20</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="stores__info">
                                            <div class="yandex">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/yandexScores.svg" alt="" />
                                                    <div class="count">389</div>
                                                </div>
                                                <div class="stores__info__right">
                                                    балла Плюса
                                                </div>
                                            </div>
                                            <div class="split">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/splitScores.svg" alt="" />
                                                    <div class="count">
                                                        3672 ₽
                                                    </div>
                                                </div>
                                                <div class="stores__info__right">
                                                    в сплит
                                                </div>
                                            </div>
                                            <div class="dolyami">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/dolyamiScores.svg" alt="" />
                                                </div>
                                                <div class="stores__info__right">
                                                    долями
                                                </div>
                                            </div>
                                            <div class="spay">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/spay.png" alt="" />
                                                </div>
                                                <div class="stores__info__right">
                                                    Сбер
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bottom__info">
                                            <div class="prices">
                                                <div class="current__price">
                                                    85 672 ₽
                                                </div>
                                            </div>
                                            <div class="availability">
                                                <div class="unavailable">
                                                    Нет в наличии
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buttons">
                                            <button class="good__item__button admisson">
                                                Уточнить наличие
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="good__item">
                                    <div class="good__item__top">
                                        <div class="good__item__tags">
                                            <div class="good__item__tag">
                                                Новинка
                                            </div>
                                        </div>
                                        <div class="good__item__reactions">
                                            <button class="compare">
                                                <svg>
                                                    <use xlink:href="#compare" />
                                                </svg>
                                            </button>
                                            <button class="like">
                                                <svg>
                                                    <use xlink:href="#favourite" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="store__good__images" style="text-align: center">
                                        <img src="./assets/images/goodItems/goodItem3.jpeg" alt="" class="good__item__image good__item__image--active" id="" />
                                        <img src="./assets/images/goodItems/goodItem4.jpeg" alt="" class="good__item__image" id="" />
                                        <img src="./assets/images/goodItems/goodItem4.jpeg" alt="" class="good__item__image" id="" />
                                        <img src="./assets/images/goodItems/goodItem2.jpeg" alt="" class="good__item__image" id="" />
                                        <img src="./assets/images/goodItems/goodItem1.jpeg" alt="" class="good__item__image" id="" />

                                        <div class="good__item__image-switcher"></div>
                                    </div>
                                    <div class="good__item__bonuses">
                                        <div class="good__item__bonus sale">
                                            Скидка 20%
                                        </div>
                                    </div>
                                    <div class="good__item__image__buttons"></div>
                                    <div class="good__item__info">
                                        <div class="articule">
                                            Артикул: 351018510
                                        </div>
                                        <div class="title">
                                            Настенный светильник (бра) Freya
                                            FR5133WL-01CH
                                        </div>
                                        <div class="text">
                                            <div class="manufacturer">
                                                Производитель:
                                                <span>Freya</span>
                                            </div>
                                            <div class="power">
                                                Мощность (вт): <span>60</span>
                                            </div>
                                            <div class="counrty">
                                                Страна бренда:
                                                <span>Германия</span>
                                            </div>
                                        </div>
                                        <div class="parameters">
                                            <div class="plinth">
                                                <img src="./assets/images/svg/lamp.svg" alt="" class="parametrs__image" />
                                                <div class="value">
                                                    Цоколь: <span>E24</span>
                                                </div>
                                            </div>
                                            <div class="protection">
                                                <img src="./assets/images/svg/lock.svg" alt="" class="parametrs__image" />
                                                <div class="value">
                                                    IP степень пылевлагозащиты:
                                                    <span>20</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="stores__info">
                                            <div class="yandex">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/yandexScores.svg" alt="" />
                                                    <div class="count">389</div>
                                                </div>
                                                <div class="stores__info__right">
                                                    балла Плюса
                                                </div>
                                            </div>
                                            <div class="split">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/splitScores.svg" alt="" />
                                                    <div class="count">
                                                        3672 ₽
                                                    </div>
                                                </div>
                                                <div class="stores__info__right">
                                                    в сплит
                                                </div>
                                            </div>
                                            <div class="dolyami">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/dolyamiScores.svg" alt="" />
                                                </div>
                                                <div class="stores__info__right">
                                                    долями
                                                </div>
                                            </div>
                                            <div class="spay">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/spay.png" alt="" />
                                                </div>
                                                <div class="stores__info__right">
                                                    Сбер
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bottom__info">
                                            <div class="prices">
                                                <div class="current__price">
                                                    85 672 ₽
                                                </div>
                                            </div>
                                            <div class="availability">
                                                <div class="available">
                                                    В наличии:
                                                    <span>200 шт.</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buttons">
                                            <button class="good__item__button order">
                                                Быстрый заказ
                                            </button>
                                            <button class="good__item__button buy">
                                                Купить
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="good__item">
                                    <div class="good__item__top">
                                        <div class="good__item__tags">
                                            <div class="good__item__tag">
                                                Новинка
                                            </div>
                                        </div>
                                        <div class="good__item__reactions">
                                            <button class="compare">
                                                <svg>
                                                    <use xlink:href="#compare" />
                                                </svg>
                                            </button>
                                            <button class="like">
                                                <svg>
                                                    <use xlink:href="#favourite" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="store__good__images" style="text-align: center">
                                        <img src="./assets/images/goodItems/goodItem1.jpeg" alt="" class="good__item__image good__item__image--active" id="" />
                                        <img src="./assets/images/goodItems/goodItem2.jpeg" alt="" class="good__item__image" id="" />
                                        <img src="./assets/images/goodItems/goodItem3.jpeg" alt="" class="good__item__image" id="" />
                                        <img src="./assets/images/goodItems/goodItem4.jpeg" alt="" class="good__item__image" id="" />

                                        <div class="good__item__image-switcher"></div>
                                    </div>
                                    <div class="good__item__bonuses">
                                        <div class="good__item__bonus sale">
                                            Скидка 20%
                                        </div>
                                    </div>
                                    <div class="good__item__image__buttons"></div>
                                    <div class="good__item__info">
                                        <div class="articule">
                                            Артикул: 351018510
                                        </div>
                                        <div class="title">
                                            Настенный светильник (бра) Freya
                                            FR5133WL-01CH
                                        </div>
                                        <div class="text">
                                            <div class="manufacturer">
                                                Производитель:
                                                <span>Freya</span>
                                            </div>
                                            <div class="power">
                                                Мощность (вт): <span>60</span>
                                            </div>
                                            <div class="counrty">
                                                Страна бренда:
                                                <span>Германия</span>
                                            </div>
                                        </div>
                                        <div class="parameters">
                                            <div class="plinth">
                                                <img src="./assets/images/svg/lamp.svg" alt="" class="parametrs__image" />
                                                <div class="value">
                                                    Цоколь: <span>E24</span>
                                                </div>
                                            </div>
                                            <div class="protection">
                                                <img src="./assets/images/svg/lock.svg" alt="" class="parametrs__image" />
                                                <div class="value">
                                                    IP степень пылевлагозащиты:
                                                    <span>20</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="stores__info">
                                            <div class="yandex">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/yandexScores.svg" alt="" />
                                                    <div class="count">389</div>
                                                </div>
                                                <div class="stores__info__right">
                                                    балла Плюса
                                                </div>
                                            </div>
                                            <div class="split">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/splitScores.svg" alt="" />
                                                    <div class="count">
                                                        3672 ₽
                                                    </div>
                                                </div>
                                                <div class="stores__info__right">
                                                    в сплит
                                                </div>
                                            </div>
                                            <div class="dolyami">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/dolyamiScores.svg" alt="" />
                                                </div>
                                                <div class="stores__info__right">
                                                    долями
                                                </div>
                                            </div>
                                            <div class="spay">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/spay.png" alt="" />
                                                </div>
                                                <div class="stores__info__right">
                                                    Сбер
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bottom__info">
                                            <div class="prices">
                                                <div class="current__price">
                                                    85 672 ₽
                                                </div>
                                                <div class="old__price">
                                                    95 672 ₽
                                                </div>
                                            </div>
                                            <div class="availability">
                                                <div class="available">
                                                    В наличии:
                                                    <span>200 шт.</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buttons">
                                            <button class="good__item__button order">
                                                Быстрый заказ
                                            </button>
                                            <button class="good__item__button buy">
                                                Купить
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="good__item">
                                    <div class="good__item__top">
                                        <div class="good__item__tags">
                                            <div class="good__item__tag">
                                                Новинка
                                            </div>
                                        </div>
                                        <div class="good__item__reactions">
                                            <button class="compare">
                                                <svg>
                                                    <use xlink:href="#compare" />
                                                </svg>
                                            </button>
                                            <button class="like active">
                                                <svg>
                                                    <use xlink:href="#favourite" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="store__good__images" style="text-align: center">
                                        <img src="./assets/images/goodItems/goodItem1.jpeg" alt="" class="good__item__image good__item__image--active" id="" />
                                        <img src="./assets/images/goodItems/goodItem2.jpeg" alt="" class="good__item__image" id="" />
                                        <img src="./assets/images/goodItems/goodItem3.jpeg" alt="" class="good__item__image" id="" />
                                        <img src="./assets/images/goodItems/goodItem4.jpeg" alt="" class="good__item__image" id="" />

                                        <div class="good__item__image-switcher"></div>
                                    </div>
                                    <div class="good__item__bonuses">
                                        <div class="good__item__bonus sale">
                                            Скидка 20%
                                        </div>
                                    </div>
                                    <div class="good__item__image__buttons"></div>
                                    <div class="good__item__info">
                                        <div class="articule">
                                            Артикул: 351018510
                                        </div>
                                        <div class="title">
                                            Настенный светильник (бра) Freya
                                            FR5133WL-01CH
                                        </div>
                                        <div class="text">
                                            <div class="manufacturer">
                                                Производитель:
                                                <span>Freya</span>
                                            </div>
                                            <div class="power">
                                                Мощность (вт): <span>60</span>
                                            </div>
                                            <div class="counrty">
                                                Страна бренда:
                                                <span>Германия</span>
                                            </div>
                                        </div>
                                        <div class="parameters">
                                            <div class="plinth">
                                                <img src="./assets/images/svg/lamp.svg" alt="" class="parametrs__image" />
                                                <div class="value">
                                                    Цоколь: <span>E24</span>
                                                </div>
                                            </div>
                                            <div class="protection">
                                                <img src="./assets/images/svg/lock.svg" alt="" class="parametrs__image" />
                                                <div class="value">
                                                    IP степень пылевлагозащиты:
                                                    <span>20</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="stores__info">
                                            <div class="yandex">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/yandexScores.svg" alt="" />
                                                    <div class="count">389</div>
                                                </div>
                                                <div class="stores__info__right">
                                                    балла Плюса
                                                </div>
                                            </div>
                                            <div class="split">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/splitScores.svg" alt="" />
                                                    <div class="count">
                                                        3672 ₽
                                                    </div>
                                                </div>
                                                <div class="stores__info__right">
                                                    в сплит
                                                </div>
                                            </div>
                                            <div class="dolyami">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/dolyamiScores.svg" alt="" />
                                                </div>
                                                <div class="stores__info__right">
                                                    долями
                                                </div>
                                            </div>
                                            <div class="spay">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/spay.png" alt="" />
                                                </div>
                                                <div class="stores__info__right">
                                                    Сбер
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bottom__info">
                                            <div class="prices">
                                                <div class="current__price">
                                                    85 672 ₽
                                                </div>
                                                <div class="old__price">
                                                    95 672 ₽
                                                </div>
                                            </div>
                                            <div class="availability">
                                                <div class="available">
                                                    В наличии:
                                                    <span>200 шт.</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buttons">
                                            <button class="good__item__button order">
                                                Быстрый заказ
                                            </button>
                                            <button class="good__item__button buy">
                                                Купить
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="good__item">
                                    <div class="good__item__top">
                                        <div class="good__item__tags">
                                            <div class="good__item__tag">
                                                Новинка
                                            </div>
                                        </div>
                                        <div class="good__item__reactions">
                                            <button class="compare">
                                                <svg>
                                                    <use xlink:href="#compare" />
                                                </svg>
                                            </button>
                                            <button class="like">
                                                <svg>
                                                    <use xlink:href="#favourite" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="store__good__images" style="text-align: center">
                                        <img src="./assets/images/goodItems/goodItem1.jpeg" alt="" class="good__item__image good__item__image--active" id="" />
                                        <img src="./assets/images/goodItems/goodItem2.jpeg" alt="" class="good__item__image" id="" />
                                        <img src="./assets/images/goodItems/goodItem3.jpeg" alt="" class="good__item__image" id="" />
                                        <img src="./assets/images/goodItems/goodItem4.jpeg" alt="" class="good__item__image" id="" />

                                        <div class="good__item__image-switcher"></div>
                                    </div>
                                    <div class="good__item__bonuses">
                                        <div class="good__item__bonus sale">
                                            Скидка 20%
                                        </div>
                                    </div>
                                    <div class="good__item__image__buttons"></div>
                                    <div class="good__item__info">
                                        <div class="articule">
                                            Артикул: 351018510
                                        </div>
                                        <div class="title">
                                            Настенный светильник (бра) Freya
                                            FR5133WL-01CH
                                        </div>
                                        <div class="text">
                                            <div class="manufacturer">
                                                Производитель:
                                                <span>Freya</span>
                                            </div>
                                            <div class="power">
                                                Мощность (вт): <span>60</span>
                                            </div>
                                            <div class="counrty">
                                                Страна бренда:
                                                <span>Германия</span>
                                            </div>
                                        </div>
                                        <div class="parameters">
                                            <div class="plinth">
                                                <img src="./assets/images/svg/lamp.svg" alt="" class="parametrs__image" />
                                                <div class="value">
                                                    Цоколь: <span>E24</span>
                                                </div>
                                            </div>
                                            <div class="protection">
                                                <img src="./assets/images/svg/lock.svg" alt="" class="parametrs__image" />
                                                <div class="value">
                                                    IP степень пылевлагозащиты:
                                                    <span>20</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="stores__info">
                                            <div class="yandex">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/yandexScores.svg" alt="" />
                                                    <div class="count">389</div>
                                                </div>
                                                <div class="stores__info__right">
                                                    балла Плюса
                                                </div>
                                            </div>
                                            <div class="split">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/splitScores.svg" alt="" />
                                                    <div class="count">
                                                        3672 ₽
                                                    </div>
                                                </div>
                                                <div class="stores__info__right">
                                                    в сплит
                                                </div>
                                            </div>
                                            <div class="dolyami">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/dolyamiScores.svg" alt="" />
                                                </div>
                                                <div class="stores__info__right">
                                                    долями
                                                </div>
                                            </div>
                                            <div class="spay">
                                                <div class="stores__info__left">
                                                    <img src="./assets/images/svg/svgStoresInfo/spay.png" alt="" />
                                                </div>
                                                <div class="stores__info__right">
                                                    Сбер
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bottom__info">
                                            <div class="prices">
                                                <div class="current__price">
                                                    85 672 ₽
                                                </div>
                                                <div class="old__price">
                                                    95 672 ₽
                                                </div>
                                            </div>
                                            <div class="availability">
                                                <div class="available">
                                                    В наличии:
                                                    <span>200 шт.</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buttons">
                                            <button class="good__item__button order">
                                                Быстрый заказ
                                            </button>
                                            <button class="good__item__button buy">
                                                Купить
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="store__goods__products__buttons">
                                <button class="arrow__button prev arrow__button--small">
                                    <svg class="arrow__button__svg">
                                        <use xlink:href="#arrow" />
                                    </svg>
                                </button>
                                <button class="arrow__button next arrow__button--small">
                                    <svg class="arrow__button__svg">
                                        <use xlink:href="#arrow" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Hits -->
    <?php include './assets/includes/defaults/our-advantages/our-advantages.php'; ?>
    <?php include './assets/includes/footer.php'; ?>
    <?php include './assets/includes/copyright.php'; ?>
    <?php include './assets/includes/scripts.php'; ?>
</body>

</html>