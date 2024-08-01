<!DOCTYPE html>
<html lang="ru">

<head>
    <title>Избранное</title>
    <?php include './assets/includes/head.php'; ?>
</head>

<body>
    <?php include './assets/includes/feedback-modal-window.php'; ?>
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
                        <a href="#" class="bread__crumbs__link bread__crumbs__link--current">Избранное</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Page-headline -->
    <!-- Favorite -->
    <section class="favorite-block">
        <div class="container">
            <div class="favorite-block__inner">
                <div class="favorite-block__inner__top">
                    <div class="title">
                        Избранное
                        <span>6 товаров</span>
                    </div>
                    <button class="clear__favorite">
                        Очистить <span>весь список</span>
                        <span class="count">6</span>
                    </button>
                </div>
                <div class="favorite__goods store__goods">
                    <div class="container">
                        <div class="store__goods__inner">
                            <div class="goods__tags__wrapper">
                                <div class="store__goods__tags">
                                    <div class="store__goods__tags__inner">
                                        <div class="store__good__tag">
                                            <input type="radio" name="goodSwitcher" id="goodItem0" checked />
                                            <label for="goodItem0">Люстры<span>5</span></label>
                                        </div>
                                        <div class="store__good__tag">
                                            <input type="radio" name="goodSwitcher" id="goodItem1" />
                                            <label for="goodItem1">Светильники<span>5</span></label>
                                        </div>
                                        <div class="store__good__tag">
                                            <input type="radio" name="goodSwitcher" id="goodItem2" />
                                            <label for="goodItem2">Бра<span>1</span></label>
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
                                    <div class="store__goods__products store__goods__products--secondary">
                                        <div class="good__item good__item--secondary">
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
                                                    Настенный светильник
                                                    (бра) Freya
                                                    FR5133WL-01CH
                                                </div>
                                                <div class="bottom__info bottom__info--secondary">
                                                    <div class="prices">
                                                        <div class="current__price">
                                                            85 672 ₽
                                                        </div>
                                                        <div class="old__price">
                                                            95 672 ₽
                                                        </div>
                                                    </div>
                                                    <div class="buttons">
                                                        <button class="good__item__button buy">
                                                            Купить
                                                        </button>
                                                        <button class="good__delete">
                                                            <svg>
                                                                <use xlink:href="#delete" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="good__item good__item--secondary">
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
                                                    Настенный светильник
                                                    (бра) Freya
                                                    FR5133WL-01CH
                                                </div>
                                                <div class="bottom__info bottom__info--secondary">
                                                    <div class="prices">
                                                        <div class="current__price">
                                                            85 672 ₽
                                                        </div>
                                                        <div class="old__price">
                                                            95 672 ₽
                                                        </div>
                                                    </div>
                                                    <div class="buttons">
                                                        <button class="good__item__button buy">
                                                            Купить
                                                        </button>
                                                        <button class="good__delete">
                                                            <svg>
                                                                <use xlink:href="#delete" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="good__item good__item--secondary">
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
                                                    Настенный светильник
                                                    (бра) Freya
                                                    FR5133WL-01CH
                                                </div>
                                                <div class="bottom__info bottom__info--secondary">
                                                    <div class="prices">
                                                        <div class="current__price">
                                                            85 672 ₽
                                                        </div>
                                                        <div class="old__price">
                                                            95 672 ₽
                                                        </div>
                                                    </div>
                                                    <div class="buttons">
                                                        <button class="good__item__button buy">
                                                            Купить
                                                        </button>
                                                        <button class="good__delete">
                                                            <svg>
                                                                <use xlink:href="#delete" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="good__item good__item--secondary">
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
                                                    Настенный светильник
                                                    (бра) Freya
                                                    FR5133WL-01CH
                                                </div>
                                                <div class="bottom__info bottom__info--secondary">
                                                    <div class="prices">
                                                        <div class="current__price">
                                                            85 672 ₽
                                                        </div>
                                                        <div class="old__price">
                                                            95 672 ₽
                                                        </div>
                                                    </div>
                                                    <div class="buttons">
                                                        <button class="good__item__button buy">
                                                            Купить
                                                        </button>
                                                        <button class="good__delete">
                                                            <svg>
                                                                <use xlink:href="#delete" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="good__item good__item--secondary">
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
                                                    Настенный светильник
                                                    (бра) Freya
                                                    FR5133WL-01CH
                                                </div>
                                                <div class="bottom__info bottom__info--secondary">
                                                    <div class="prices">
                                                        <div class="current__price">
                                                            85 672 ₽
                                                        </div>
                                                        <div class="old__price">
                                                            95 672 ₽
                                                        </div>
                                                    </div>
                                                    <div class="buttons">
                                                        <button class="good__item__button buy">
                                                            Купить
                                                        </button>
                                                        <button class="good__delete">
                                                            <svg>
                                                                <use xlink:href="#delete" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="good__item good__item--secondary">
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
                                                    Настенный светильник
                                                    (бра) Freya
                                                    FR5133WL-01CH
                                                </div>
                                                <div class="bottom__info bottom__info--secondary">
                                                    <div class="prices">
                                                        <div class="current__price">
                                                            85 672 ₽
                                                        </div>
                                                        <div class="old__price">
                                                            95 672 ₽
                                                        </div>
                                                    </div>
                                                    <div class="buttons">
                                                        <button class="good__item__button buy">
                                                            Купить
                                                        </button>
                                                        <button class="good__delete">
                                                            <svg>
                                                                <use xlink:href="#delete" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="store__goods__wrapper goodItem1">
                                    <div class="store__goods__products store__goods__products--secondary">
                                        <div class="good__item good__item--secondary">
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
                                                    Настенный светильник
                                                    (бра) Freya
                                                    FR5133WL-01CH
                                                </div>
                                                <div class="bottom__info bottom__info--secondary">
                                                    <div class="prices">
                                                        <div class="current__price">
                                                            85 672 ₽
                                                        </div>
                                                        <div class="old__price">
                                                            95 672 ₽
                                                        </div>
                                                    </div>
                                                    <div class="buttons">
                                                        <button class="good__item__button buy">
                                                            Купить
                                                        </button>
                                                        <button class="good__delete">
                                                            <svg>
                                                                <use xlink:href="#delete" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="good__item good__item--secondary">
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
                                                    Настенный светильник
                                                    (бра) Freya
                                                    FR5133WL-01CH
                                                </div>
                                                <div class="bottom__info bottom__info--secondary">
                                                    <div class="prices">
                                                        <div class="current__price">
                                                            85 672 ₽
                                                        </div>
                                                        <div class="old__price">
                                                            95 672 ₽
                                                        </div>
                                                    </div>
                                                    <div class="buttons">
                                                        <button class="good__item__button buy">
                                                            Купить
                                                        </button>
                                                        <button class="good__delete">
                                                            <svg>
                                                                <use xlink:href="#delete" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="good__item good__item--secondary">
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
                                                    Настенный светильник
                                                    (бра) Freya
                                                    FR5133WL-01CH
                                                </div>
                                                <div class="bottom__info bottom__info--secondary">
                                                    <div class="prices">
                                                        <div class="current__price">
                                                            85 672 ₽
                                                        </div>
                                                        <div class="old__price">
                                                            95 672 ₽
                                                        </div>
                                                    </div>
                                                    <div class="buttons">
                                                        <button class="good__item__button buy">
                                                            Купить
                                                        </button>
                                                        <button class="good__delete">
                                                            <svg>
                                                                <use xlink:href="#delete" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="good__item good__item--secondary">
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
                                                    Настенный светильник
                                                    (бра) Freya
                                                    FR5133WL-01CH
                                                </div>
                                                <div class="bottom__info bottom__info--secondary">
                                                    <div class="prices">
                                                        <div class="current__price">
                                                            85 672 ₽
                                                        </div>
                                                        <div class="old__price">
                                                            95 672 ₽
                                                        </div>
                                                    </div>
                                                    <div class="buttons">
                                                        <button class="good__item__button buy">
                                                            Купить
                                                        </button>
                                                        <button class="good__delete">
                                                            <svg>
                                                                <use xlink:href="#delete" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="good__item good__item--secondary">
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
                                                    Настенный светильник
                                                    (бра) Freya
                                                    FR5133WL-01CH
                                                </div>
                                                <div class="bottom__info bottom__info--secondary">
                                                    <div class="prices">
                                                        <div class="current__price">
                                                            85 672 ₽
                                                        </div>
                                                        <div class="old__price">
                                                            95 672 ₽
                                                        </div>
                                                    </div>
                                                    <div class="buttons">
                                                        <button class="good__item__button buy">
                                                            Купить
                                                        </button>
                                                        <button class="good__delete">
                                                            <svg>
                                                                <use xlink:href="#delete" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="good__item good__item--secondary">
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
                                                    Настенный светильник
                                                    (бра) Freya
                                                    FR5133WL-01CH
                                                </div>
                                                <div class="bottom__info bottom__info--secondary">
                                                    <div class="prices">
                                                        <div class="current__price">
                                                            85 672 ₽
                                                        </div>
                                                        <div class="old__price">
                                                            95 672 ₽
                                                        </div>
                                                    </div>
                                                    <div class="buttons">
                                                        <button class="good__item__button buy">
                                                            Купить
                                                        </button>
                                                        <button class="good__delete">
                                                            <svg>
                                                                <use xlink:href="#delete" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="store__goods__wrapper goodItem2">
                                    <div class="store__goods__products store__goods__products--secondary">
                                        <div class="good__item good__item--secondary">
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
                                                    Настенный светильник
                                                    (бра) Freya
                                                    FR5133WL-01CH
                                                </div>
                                                <div class="bottom__info bottom__info--secondary">
                                                    <div class="prices">
                                                        <div class="current__price">
                                                            85 672 ₽
                                                        </div>
                                                        <div class="old__price">
                                                            95 672 ₽
                                                        </div>
                                                    </div>
                                                    <div class="buttons">
                                                        <button class="good__item__button buy">
                                                            Купить
                                                        </button>
                                                        <button class="good__delete">
                                                            <svg>
                                                                <use xlink:href="#delete" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="good__item good__item--secondary">
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
                                                    Настенный светильник
                                                    (бра) Freya
                                                    FR5133WL-01CH
                                                </div>
                                                <div class="bottom__info bottom__info--secondary">
                                                    <div class="prices">
                                                        <div class="current__price">
                                                            85 672 ₽
                                                        </div>
                                                        <div class="old__price">
                                                            95 672 ₽
                                                        </div>
                                                    </div>
                                                    <div class="buttons">
                                                        <button class="good__item__button buy">
                                                            Купить
                                                        </button>
                                                        <button class="good__delete">
                                                            <svg>
                                                                <use xlink:href="#delete" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="good__item good__item--secondary">
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
                                                    Настенный светильник
                                                    (бра) Freya
                                                    FR5133WL-01CH
                                                </div>
                                                <div class="bottom__info bottom__info--secondary">
                                                    <div class="title">
                                                        Настенный светильник
                                                        (бра) Freya
                                                        FR5133WL-01CH
                                                    </div>
                                                    <div class="prices">
                                                        <div class="current__price">
                                                            85 672 ₽
                                                        </div>
                                                        <div class="old__price">
                                                            95 672 ₽
                                                        </div>
                                                    </div>
                                                    <div class="buttons">
                                                        <button class="good__item__button buy">
                                                            Купить
                                                        </button>
                                                        <button class="good__delete">
                                                            <svg>
                                                                <use xlink:href="#delete" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="good__item good__item--secondary">
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
                                                    Настенный светильник
                                                    (бра) Freya
                                                    FR5133WL-01CH
                                                </div>
                                                <div class="bottom__info bottom__info--secondary">
                                                    <div class="title">
                                                        Настенный светильник
                                                        (бра) Freya
                                                        FR5133WL-01CH
                                                    </div>
                                                    <div class="prices">
                                                        <div class="current__price">
                                                            85 672 ₽
                                                        </div>
                                                        <div class="old__price">
                                                            95 672 ₽
                                                        </div>
                                                    </div>
                                                    <div class="buttons">
                                                        <button class="good__item__button buy">
                                                            Купить
                                                        </button>
                                                        <button class="good__delete">
                                                            <svg>
                                                                <use xlink:href="#delete" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="good__item good__item--secondary">
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
                                                    Настенный светильник
                                                    (бра) Freya
                                                    FR5133WL-01CH
                                                </div>
                                                <div class="bottom__info bottom__info--secondary">
                                                    <div class="prices">
                                                        <div class="current__price">
                                                            85 672 ₽
                                                        </div>
                                                        <div class="old__price">
                                                            95 672 ₽
                                                        </div>
                                                    </div>
                                                    <div class="buttons">
                                                        <button class="good__item__button buy">
                                                            Купить
                                                        </button>
                                                        <button class="good__delete">
                                                            <svg>
                                                                <use xlink:href="#delete" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="good__item good__item--secondary">
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
                                                    Настенный светильник
                                                    (бра) Freya
                                                    FR5133WL-01CH
                                                </div>
                                                <div class="bottom__info bottom__info--secondary">
                                                    <div class="prices">
                                                        <div class="current__price">
                                                            85 672 ₽
                                                        </div>
                                                        <div class="old__price">
                                                            95 672 ₽
                                                        </div>
                                                    </div>
                                                    <div class="buttons">
                                                        <button class="good__item__button buy">
                                                            Купить
                                                        </button>
                                                        <button class="good__delete">
                                                            <svg>
                                                                <use xlink:href="#delete" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Favorite -->

    <?php include './assets/includes/defaults/our-advantages/our-advantages.php'; ?>
    <?php include './assets/includes/footer.php'; ?>
    <?php include './assets/includes/copyright.php'; ?>
    <?php include './assets/includes/scripts.php'; ?>
</body>

</html>