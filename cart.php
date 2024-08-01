<!DOCTYPE html>
<html lang="ru">

<head>
    <title>Корзина</title>
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
                        <a href="#" class="bread__crumbs__link bread__crumbs__link--current">Корзина</a>
                    </div>
                </div>

                <div class="page__title">Корзина</div>
            </div>
        </div>
    </section>
    <!-- /Page-headline -->
    <!-- Cart-title -->
    <section class="cart__right__top cart__right__top--mobile">
        <div class="container">
            <div class="cart__right__top__inner">
                <div class="cart__right__top__auth">
                    <img src="./assets/images/svg/cartAuthIn.svg" alt="" />
                    <div class="title">
                        <a href="#"> Авторизуйтесь </a>
                        ,чтобы снизить цену
                    </div>
                </div>
                <div class="cart__right__top__payment-methods">
                    <div class="cart__right__top__payment-methods__slider">
                        <img src="./assets/images/paymentMethods/tinkoff.png" alt="" class="cart__right__top__payment-method" />
                        <img src="./assets/images/paymentMethods/yandex.png" alt="" class="cart__right__top__payment-method" />
                        <img src="./assets/images/paymentMethods/sber.png" alt="" class="cart__right__top__payment-method" />
                        <img src="./assets/images/paymentMethods/alfaBank.png" alt="" class="cart__right__top__payment-method" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Cart-title -->
    <!-- Cart -->
    <section class="cart">
        <div class="container">
            <div class="cart__inner">
                <section class="cart__left">
                    <!-- Cart main -->
                    <section class="cart__main">
                        <div class="cart__item">
                            <button class="button__delete button__delete__mobile">
                                <svg>
                                    <use xlink:href="#close" />
                                </svg>
                            </button>
                            <label class="yellow__checkbox">
                                <input type="checkbox" name="" id="" />
                                <span class="checkmark"></span>
                            </label>
                            <div class="cart__item__image">
                                <img src="./assets/images/goodItems/goodItem5.jpeg" alt="" />
                            </div>
                            <div class="cart__item__info">
                                <div class="cart__item__info__top">
                                    <div class="title">
                                        Настенный светильник (бра) Maytoni
                                        T532WL-02B
                                    </div>
                                    <button class="button__delete">
                                        <svg>
                                            <use xlink:href="#close" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="cart__item__info__medium">
                                    <div class="color">
                                        Цвет основание:
                                        <span>Хром</span>
                                    </div>
                                    <div class="count">
                                        Количество ламп: <span>8</span>
                                    </div>
                                </div>
                                <div class="cart__item__info__bottom">
                                    <div class="price">
                                        <div class="title">Цена</div>
                                        <div class="number">3 390 ₽</div>
                                    </div>
                                    <div class="amount">
                                        <div class="title">Количество</div>
                                        <div class="number">
                                            <button class="cart__button minus">
                                                -
                                            </button>
                                            <span>1</span>
                                            <button class="cart__button plus">
                                                +
                                            </button>
                                        </div>
                                    </div>
                                    <div class="sum">
                                        <div class="title">Сумма</div>
                                        <div class="number">
                                            <div class="old__price">
                                                3 390 ₽
                                            </div>
                                            <div class="current__price">
                                                3 390 ₽
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cart__item">
                            <label class="yellow__checkbox">
                                <input type="checkbox" name="" id="" />
                                <span class="checkmark"></span>
                            </label>
                            <div class="cart__item__image">
                                <img src="./assets/images/goodItems/goodItem5.jpeg" alt="" />
                            </div>
                            <div class="cart__item__info">
                                <div class="cart__item__info__top">
                                    <div class="title">
                                        Настенный светильник (бра) Maytoni
                                        T532WL-02B
                                    </div>
                                    <button class="button__delete">
                                        <svg>
                                            <use xlink:href="#close" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="cart__item__info__medium">
                                    <div class="color">
                                        Цвет основание:
                                        <span>Хром</span>
                                    </div>
                                    <div class="count">
                                        Количество ламп: <span>8</span>
                                    </div>
                                </div>
                                <div class="cart__item__info__bottom">
                                    <div class="price">
                                        <div class="title">Цена</div>
                                        <div class="number">3 390 ₽</div>
                                    </div>
                                    <div class="amount">
                                        <div class="title">Количество</div>
                                        <div class="number">
                                            <button class="cart__button minus">
                                                -
                                            </button>
                                            <span>1</span>
                                            <button class="cart__button plus">
                                                +
                                            </button>
                                        </div>
                                    </div>
                                    <div class="sum">
                                        <div class="title">Сумма</div>
                                        <div class="number">
                                            <div class="old__price">
                                                3 390 ₽
                                            </div>
                                            <div class="current__price">
                                                3 390 ₽
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- /Cart main -->
                    <!-- Recomedations -->
                    <section class="cart__recommendations recommendations">
                        <div class="recommendations__inner">
                            <div class="recommendations__inner__title">
                                Выберите подарок
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
                                                    <div class="old__price">
                                                        3 390 ₽
                                                    </div>
                                                </div>
                                                <div>
                                                    <button class="good__item__button recommendation add-to-order">
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
                                                    <button class="good__item__button recommendation add-to-order">
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
                                                    <button class="good__item__button recommendation add-to-order">
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
                                                    <button class="good__item__button recommendation add-to-order">
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
                                                    <button class="good__item__button recommendation add-to-order">
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
                                                    <button class="good__item__button recommendation add-to-order">
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
                    </section>
                    <!-- /Recomedations -->
                    <!-- Recomedations -->
                    <section class="cart__recommendations recommendations">
                        <div class="recommendations__inner">
                            <div class="recommendations__inner__title">
                                Вместе с этим товаром выбирают
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
                                                    <div class="old__price">
                                                        3 390 ₽
                                                    </div>
                                                </div>
                                                <div>
                                                    <button class="good__item__button recommendation add-to-order">
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
                                                    <button class="good__item__button recommendation add-to-order">
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
                                                    <button class="good__item__button recommendation add-to-order">
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
                                                    <button class="good__item__button recommendation add-to-order">
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
                                                    <button class="good__item__button recommendation add-to-order">
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
                                                    <button class="good__item__button recommendation add-to-order">
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
                    </section>
                    <!-- /Recomedations -->
                    <!-- Delivery -->
                    <section class="delivery">
                        <div class="container">
                            <div class="delivery__inner">

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
                                        <div class="delivery__item storeDelivery delivery__item--active">
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
                            </div>
                        </div>
                    </section>
                    <!-- /Delivery -->
                </section>
                <section class="cart__right">
                    <!-- Cart top -->
                    <section class="cart__right__top">
                        <div class="cart__right__top__title">
                            Ваша корзина
                        </div>
                        <div class="cart__right__top__inner">
                            <div class="cart__right__top__auth">
                                <img src="./assets/images/svg/cartAuthIn.svg" alt="" />
                                <div class="title">
                                    <a href="#"> Авторизуйтесь </a>
                                    ,чтобы снизить цену
                                </div>
                            </div>
                            <div class="cart__right__top__payment-methods">
                                <div class="cart__right__top__payment-methods__slider">
                                    <img src="./assets/images/paymentMethods/tinkoff.png" alt="" class="cart__right__top__payment-method" />
                                    <img src="./assets/images/paymentMethods/yandex.png" alt="" class="cart__right__top__payment-method" />
                                    <img src="./assets/images/paymentMethods/sber.png" alt="" class="cart__right__top__payment-method" />
                                    <img src="./assets/images/paymentMethods/alfaBank.png" alt="" class="cart__right__top__payment-method" />
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- /Cart top -->
                    <!-- Cart payment -->
                    <form class="cart-payment">
                        <div class="cart-payment__inner">
                            <div class="cart-payment__contact-data">
                                <div class="contact-data__title">
                                    Контактные данные
                                </div>
                                <div class="contact-data__inputs">
                                    <input type="text" name="name" pattern="/^[А-ЯЁ][а-яё]+$/" placeholder="Ваши ФИО" required />
                                    <input type="tel" name="phone" placeholder="Телефон" required />
                                    <input type="email" name="mail" placeholder="E-mail" required />
                                    <input type="text" name="address" placeholder="Адрес" required />
                                    <textarea name="commentary" id="" placeholder="Комментарий к заказу"></textarea>
                                </div>
                                <div class="contact-data__bottom">
                                    <div class="contact-data__sum">
                                        <div class="contact-data__sum__item">
                                            <div class="text">1 товар</div>
                                            <div class="dots"></div>
                                            <div class="price">
                                                <div class="old__price">
                                                    9 960 ₽
                                                </div>
                                                <div class="current__price">
                                                    5 672 ₽
                                                </div>
                                            </div>
                                        </div>
                                        <div class="contact-data__sum__item">
                                            <div class="text">Доставка</div>
                                            <div class="dots"></div>
                                            <div class="title">
                                                Стоимость <br />
                                                рассчитает оператор
                                            </div>
                                        </div>
                                    </div>
                                    <div class="contact-data__promo">
                                        <div class="contact-data__promo__item">
                                            <div class="title">
                                                Введите фразу из рекламы
                                            </div>
                                            <div class="contact-data__promo__item__input">
                                                <input type="text" placeholder="Фраза" />
                                                <button class="promo__button">
                                                    Получить скидку
                                                </button>
                                            </div>
                                            <div class="promo__result positive">
                                                Промокод применен
                                            </div>
                                        </div>
                                        <div class="contact-data__promo__item">
                                            <div class="title">
                                                Промокод
                                            </div>
                                            <div class="contact-data__promo__item__input">
                                                <input type="text" placeholder="Ввести" />
                                                <button class="promo__button">
                                                    Пересчитать
                                                </button>
                                            </div>
                                            <div class="promo__result negative">
                                                Промокод не применен,
                                                свяжитесь с менеджером нашей
                                                компании по телефону
                                                <span>+7 800 898 8899</span>, мы решим вашу пробему
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cart-payment__contact-data">
                                <div class="contact-data__title">
                                    Способы оплаты
                                </div>
                                <div class="contact-data__selector">
                                    <select name="" id="">
                                        <option value="" selected>
                                            Картой Online
                                        </option>
                                        <option style="
                                                    background-image: url(./assets/images/svg/sbp.svg);
                                                " value="sbp" selected>
                                            <img src="./assets/images/svg/sbp.svg" alt="" />
                                            Оплата по СБП
                                        </option>
                                        <option value="" selected>
                                            Оплата при получении
                                        </option>
                                    </select>
                                    <div class="sale__info">
                                        <div class="sale__item">
                                            Скидка при оплате 5%
                                        </div>
                                        <div class="sale__item">
                                            Скидка при оплате 5%
                                        </div>
                                        <div class="sale__item">
                                            Скидка 5% на доставку
                                        </div>
                                    </div>
                                </div>
                                <div class="contact-data__payment-methods">
                                    <div class="contact-data__payment-method">
                                        <input type="radio" name="drone" id="tinkoff" />
                                        <label for="tinkoff">
                                            <img class="contact-data__payment-method__image" src="./assets/images/paymentMethods/paymentMethodsRadio/tinkoff.png" alt="" />
                                            <img class="contact-data__payment-method__image--active" src="./assets/images/paymentMethods/paymentMethodsRadio/tinkoff--active.png" alt="" />
                                        </label>

                                        <div class="contact-data__payment-method__bonus bonus--tinkoff">
                                            <div class="number">+90</div>
                                            <div class="title">Кешбек</div>
                                        </div>
                                    </div>
                                    <div class="contact-data__payment-method">
                                        <input type="radio" name="drone" id="sber" />
                                        <label for="sber">
                                            <img class="contact-data__payment-method__image" src="./assets/images/paymentMethods/paymentMethodsRadio/sber.png" alt="" />
                                            <img class="contact-data__payment-method__image--active" src="./assets/images/paymentMethods/paymentMethodsRadio/sber--active.png" alt="" />
                                        </label>
                                        <div class="contact-data__payment-method__bonus bonus--sber">
                                            <img src="./assets/images/paymentMethods/sberSpasibo.png" alt="" />
                                        </div>
                                    </div>
                                    <div class="contact-data__payment-method">
                                        <input type="radio" name="drone" id="yandex" />
                                        <label for="yandex">
                                            <img class="contact-data__payment-method__image" src="./assets/images/paymentMethods/paymentMethodsRadio/yandex.png" alt="" />
                                            <img class="contact-data__payment-method__image--active" src="./assets/images/paymentMethods/paymentMethodsRadio/yandex--active.png" alt="" />
                                        </label>
                                        <div class="contact-data__payment-method__bonus bonus--yandex">
                                            <div class="number">
                                                <img src="./assets/images/svg/svgStoresInfo/yandexScores.svg" alt="" />
                                                389
                                            </div>
                                            <div class="title">
                                                баллов плюсами
                                            </div>
                                        </div>
                                    </div>
                                    <div class="contact-data__payment-method">
                                        <input type="radio" name="drone" id="ioMoney" />
                                        <label for="ioMoney">
                                            <img class="contact-data__payment-method__image" src="./assets/images/paymentMethods/paymentMethodsRadio/ioMoney.png" alt="" />
                                            <img class="contact-data__payment-method__image--active" src="./assets/images/paymentMethods/paymentMethodsRadio/ioMoney--active.png" alt="" />
                                        </label>
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
                                                <use xlink:href="#arrow" />
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
                                                <use xlink:href="#arrow" />
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
                                                <use xlink:href="#arrow" />
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
                                                <use xlink:href="#arrow" />
                                            </svg>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="cart-payment__final-price">
                                <div class="cart-payment__final-price__title">
                                    Итого
                                </div>
                                <div class="cart-payment__sum">
                                    <div class="cart-payment__sum__item">
                                        <div class="text">1 товар</div>
                                        <div class="dots"></div>
                                        <div class="price">
                                            <div class="old__price">
                                                9 960 ₽
                                            </div>
                                            <div class="current__price">
                                                5 672 ₽
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart-payment__sum__item">
                                        <div class="text">Доставка</div>
                                        <div class="dots"></div>

                                        <div class="price">
                                            <div class="old__price">
                                                9 960 ₽
                                            </div>
                                            <div class="current__price">
                                                5 672 ₽
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="black__button black__button--disabled" disabled>
                                    Оформить заказ
                                </button>
                                <div class="cart-payment__personal-confirmation">
                                    <div class="cart-payment__personal-confirmation__item">
                                        <input type="checkbox" name="" id="personalDataConfirmation" />
                                        <div class="title">
                                            Я согласен с условиями обработки
                                            персональных данных
                                        </div>
                                    </div>
                                    <div class="cart-payment__personal-confirmation__item">
                                        <input type="checkbox" name="" id="personalData" />
                                        <div class="title">
                                            Я разрешаю присылать мне
                                            смс-уведомления о статусе заказа
                                        </div>
                                    </div>
                                    <div class="cart-payment__personal-confirmation__item">
                                        <input type="checkbox" name="" id="personalData" />
                                        <div class="title">
                                            Я хочу получать информацию о
                                            скидках и акциях через email
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- /Cart payment -->
                </section>
            </div>
        </div>
    </section>
    <!-- /Cart -->
    <?php include './assets/includes/defaults/our-advantages/our-advantages.php'; ?>
    <?php include './assets/includes/footer.php'; ?>
    <?php include './assets/includes/copyright.php'; ?>
    <?php include './assets/includes/scripts.php'; ?>
</body>

</html>