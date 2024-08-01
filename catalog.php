<!DOCTYPE html>
<html lang="ru">

<head>
    <title>Каталог</title>
    <?php include './assets/includes/head.php'; ?>
</head>

<body>
    <?php include './assets/includes/feedback-modal-window.php'; ?>
    <?php include './assets/includes/order-modal-window.php'; ?>
    <?php include './assets/includes/header.php'; ?>
    <!-- Page-headline -->
    <section class="page-headline">
        <div class="container">
            <div class="page-headline__inner">
                <div class="page-headline__left">
                    <button class="back__link">
                        <svg class="back__link__svg">
                            <use xlink:href="#arrow" />
                        </svg>
                    </button>
                    <div class="bread__crumbs">
                        <a href="#" class="bread__crumbs__link">Главная</a>
                        <span>/</span>
                        <a href="#" class="bread__crumbs__link bread__crumbs__link--current">Каталог</a>
                    </div>
                </div>

                <div class="page__title">Каталог</div>
            </div>
        </div>
    </section>
    <!-- /Page-headline -->
    <!-- Catalog-intro -->
    <section class="catalog-intro">
        <div class="container">
            <div class="catalog-intro__inner">
                <img src="./assets/images/catalogIntro/catalogIntroMain.jpg" alt="" class="catalog-intro__main-image" />
                <div class="catalog-intro__slider">
                    <div class="catalog-intro__items">
                        <div class="catalog-intro__items__inner">
                            <div class="catalog-intro__item">
                                <div class="intro__item__image">
                                    <img src="./assets/images/catalogIntro/catalogIntroItem1.png" alt="" />
                                </div>
                                <div class="intro__item__title">Люстры</div>
                            </div>
                            <div class="catalog-intro__item">
                                <div class="intro__item__image">
                                    <img src="./assets/images/catalogIntro/catalogIntroItem2.png" alt="" />
                                </div>
                                <div class="intro__item__title">
                                    Светильники потолочные оригинальные
                                </div>
                            </div>
                            <div class="catalog-intro__item">
                                <div class="intro__item__image">
                                    <img src="./assets/images/catalogIntro/catalogIntroItem3.png" alt="" />
                                </div>
                                <div class="intro__item__title">
                                    Настенные светильники
                                </div>
                            </div>
                            <div class="catalog-intro__item">
                                <div class="intro__item__image">
                                    <img src="./assets/images/catalogIntro/catalogIntroItem4.png" alt="" />
                                </div>
                                <div class="intro__item__title">
                                    Трековые
                                </div>
                            </div>
                            <div class="catalog-intro__item">
                                <div class="intro__item__image">
                                    <img src="./assets/images/catalogIntro/catalogIntroItem5.png" alt="" />
                                </div>
                                <div class="intro__item__title">
                                    Настольные
                                </div>
                            </div>
                            <div class="catalog-intro__item">
                                <div class="intro__item__image">
                                    <img src="./assets/images/catalogIntro/catalogIntroItem6.png" alt="" />
                                </div>
                                <div class="intro__item__title">
                                    Уличные
                                </div>
                            </div>
                        </div>
                        <div class="intro__items__buttons">
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
    </section>
    <!-- /Catalog-intro -->
    <!-- Catalog-->
    <section class="catalog">
        <div class="container">
            <div class="catalog__inner">
                <div class="catalog__tags">
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
                </div>
                <div class="catalog__selects">
                    <div class="catalog__selects__slider">
                        <div class="catalog__selects__inner">
                            <select name="" id="" class="catalog__select">
                                <option value="" selected disabled>
                                    Цвет
                                </option>
                            </select>
                            <select name="" id="" class="catalog__select">
                                <option value="" selected disabled>
                                    Стиль
                                </option>
                            </select>
                            <select name="" id="" class="catalog__select">
                                <option value="" selected disabled>
                                    Назначение
                                </option>
                            </select>
                            <select name="" id="" class="catalog__select">
                                <option value="" selected disabled>
                                    Материал
                                </option>
                            </select>
                            <select name="" id="" class="catalog__select">
                                <option value="" selected disabled>
                                    Страна
                                </option>
                            </select>
                            <select name="" id="" class="catalog__select">
                                <option value="" selected disabled>
                                    Лампа/Цоколь/Абажур
                                </option>
                            </select>
                            <select name="" id="" class="catalog__select">
                                <option value="" selected disabled>
                                    Форма
                                </option>
                            </select>
                            <select name="" id="" class="catalog__select">
                                <option value="" selected disabled>
                                    Цвет
                                </option>
                            </select>
                            <select name="" id="" class="catalog__select">
                                <option value="" selected disabled>
                                    Цвет
                                </option>
                            </select>
                            <select name="" id="" class="catalog__select">
                                <option value="" selected disabled>
                                    Цвет
                                </option>
                            </select>
                            <select name="" id="" class="catalog__select">
                                <option value="" selected disabled>
                                    Цвет
                                </option>
                            </select>
                            <select name="" id="" class="catalog__select">
                                <option value="" selected disabled>
                                    Цвет
                                </option>
                            </select>
                        </div>
                        <div class="catalog__selects__slider__buttons">
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
                <div class="catalog__filters">
                    <div class="catalog__filters__switcher">
                        <div class="title">Коллекция</div>
                        <a href="http://u2524549.isp.regruhosting.ru/lightstore/catalog.php">
                            <label class="switch" for="">
                                <input type="checkbox" class="switch__input" />
                                <span class="switcher__button"></span>
                            </label>
                        </a>
                    </div>
                    <button class="popular__filter">
                        Сначала популярные
                        <svg class="popular__filter__svg">
                            <use xlink:href="#filterPopular" />
                        </svg>
                    </button>
                </div>
                <div class="catalog__main">
                    <div class="catalog__main__inner">
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
                                            <div class="count">3672 ₽</div>
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
                                            В наличии: <span>200 шт.</span>
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
                                            <div class="count">3672 ₽</div>
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
                                            В наличии: <span>200 шт.</span>
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
                                            <div class="count">3672 ₽</div>
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
                                            В наличии: <span>200 шт.</span>
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
                                            <div class="count">3672 ₽</div>
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
                                            В наличии: <span>200 шт.</span>
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
                                            <div class="count">3672 ₽</div>
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
                                            В наличии: <span>200 шт.</span>
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
                                            <div class="count">3672 ₽</div>
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
                                            В наличии: <span>200 шт.</span>
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
                                            <div class="count">3672 ₽</div>
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
                                            В наличии: <span>200 шт.</span>
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
                                            <div class="count">3672 ₽</div>
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
                                            В наличии: <span>200 шт.</span>
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
                                            <div class="count">3672 ₽</div>
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
                                            В наличии: <span>200 шт.</span>
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
                                            <div class="count">3672 ₽</div>
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
                                            В наличии: <span>200 шт.</span>
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
                                            <div class="count">3672 ₽</div>
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
                                            В наличии: <span>200 шт.</span>
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
                                            <div class="count">3672 ₽</div>
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
                                            В наличии: <span>200 шт.</span>
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
                                            <div class="count">3672 ₽</div>
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
                                            В наличии: <span>200 шт.</span>
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
                                            <div class="count">3672 ₽</div>
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
                                            В наличии: <span>200 шт.</span>
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
                                            <div class="count">3672 ₽</div>
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
                                            В наличии: <span>200 шт.</span>
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
                                            <div class="count">3672 ₽</div>
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
                                            В наличии: <span>200 шт.</span>
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
                                            <div class="count">3672 ₽</div>
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
                                            В наличии: <span>200 шт.</span>
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
                                            <div class="count">3672 ₽</div>
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
                                            В наличии: <span>200 шт.</span>
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
                                            <div class="count">3672 ₽</div>
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
                                            В наличии: <span>200 шт.</span>
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
                                            <div class="count">3672 ₽</div>
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
                                            В наличии: <span>200 шт.</span>
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
                                            <div class="count">3672 ₽</div>
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
                                            В наличии: <span>200 шт.</span>
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
                                            <div class="count">3672 ₽</div>
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
                                            В наличии: <span>200 шт.</span>
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
                                            <div class="count">3672 ₽</div>
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
                                            В наличии: <span>200 шт.</span>
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
                                            <div class="count">3672 ₽</div>
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
                                            В наличии: <span>200 шт.</span>
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
                                            <div class="count">3672 ₽</div>
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
                                            В наличии: <span>200 шт.</span>
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
                                            <div class="count">3672 ₽</div>
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
                                            В наличии: <span>200 шт.</span>
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
                                            <div class="count">3672 ₽</div>
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
                                            В наличии: <span>200 шт.</span>
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
                                            <div class="count">3672 ₽</div>
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
                                            В наличии: <span>200 шт.</span>
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
                                            <div class="count">3672 ₽</div>
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
                                            В наличии: <span>200 шт.</span>
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
                    <button class="show__more">Показать ещё</button>
                    <div class="pagination">
                        <div class="pagination__inner">
                            <button class="pagination__button prev">
                                <svg class="pagination__button__svg">
                                    <use xlink:href="#arrow" />
                                </svg>
                            </button>
                            <div class="pagination__items">
                                <button class="pagination__item pagination__item--active">
                                    1
                                </button>
                                <button class="pagination__item">2</button>
                                <button class="pagination__item">3</button>
                                <button class="pagination__item">4</button>
                                <button class="pagination__item">5</button>
                                <button class="pagination__item space">
                                    ...
                                </button>
                                <button class="pagination__item">10</button>
                            </div>
                            <button class="pagination__button next">
                                <svg class="pagination__button__svg">
                                    <use xlink:href="#arrow" />
                                </svg>
                            </button>
                        </div>
                        <div class="pagination__buttons"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Catalog -->
    <!-- Reviews -->
    <section class="review">
        <div class="container">
            <div class="review__inner">
                <div class="review__title">Отзывы покупателей</div>
                <div class="review__slider">
                    <div class="review__slider__inner">
                        <div class="review__slider__items">
                            <div class="review__slider__item">
                                <img src="./assets/images/goodItems/goodItem1.jpeg" alt="" class="review__item__image" />
                                <div class="review__item__title">
                                    Настенный светильник (бра) Freya
                                    FR5133WL-01CH
                                </div>
                                <div class="review__item__info">
                                    <div class="review__item__info__top">
                                        <div class="name">Александр</div>
                                        <div class="date">24.01.2024</div>
                                    </div>
                                    <div class="review__item__info__mark">
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
                                        <div class="mark">5.0</div>
                                    </div>
                                    <div class="review__item__info__text">
                                        С другой стороны новая модель
                                        организационной деятельности в
                                        значительной степени обуславливает
                                        создание системы обучения кадров,
                                        соответствует насущным потребностям.
                                    </div>
                                    <a href="#" class="review__button">
                                        Перейти к товару
                                    </a>
                                </div>
                            </div>
                            <div class="review__slider__item">
                                <img src="./assets/images/goodItems/goodItem1.jpeg" alt="" class="review__item__image" />
                                <div class="review__item__title">
                                    Настенный светильник (бра) Freya
                                    FR5133WL-01CH
                                </div>
                                <div class="review__item__info">
                                    <div class="review__item__info__top">
                                        <div class="name">Александр</div>
                                        <div class="date">24.01.2024</div>
                                    </div>
                                    <div class="review__item__info__mark">
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
                                        <div class="mark">5.0</div>
                                    </div>
                                    <div class="review__item__info__text">
                                        С другой стороны новая модель
                                        организационной деятельности в
                                        значительной степени обуславливает
                                        создание системы обучения кадров,
                                        соответствует насущным потребностям.
                                    </div>
                                    <a href="#" class="review__button">
                                        Перейти к товару
                                    </a>
                                </div>
                            </div>
                            <div class="review__slider__item">
                                <img src="./assets/images/goodItems/goodItem1.jpeg" alt="" class="review__item__image" />
                                <div class="review__item__title">
                                    Настенный светильник (бра) Freya
                                    FR5133WL-01CH
                                </div>
                                <div class="review__item__info">
                                    <div class="review__item__info__top">
                                        <div class="name">Александр</div>
                                        <div class="date">24.01.2024</div>
                                    </div>
                                    <div class="review__item__info__mark">
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
                                        <div class="mark">5.0</div>
                                    </div>
                                    <div class="review__item__info__text">
                                        С другой стороны новая модель
                                        организационной деятельности в
                                        значительной степени обуславливает
                                        создание системы обучения кадров,
                                        соответствует насущным потребностям.
                                    </div>
                                    <a href="#" class="review__button">
                                        Перейти к товару
                                    </a>
                                </div>
                            </div>
                            <div class="review__slider__item">
                                <img src="./assets/images/goodItems/goodItem1.jpeg" alt="" class="review__item__image" />
                                <div class="review__item__title">
                                    Настенный светильник (бра) Freya
                                    FR5133WL-01CH
                                </div>
                                <div class="review__item__info">
                                    <div class="review__item__info__top">
                                        <div class="name">Александр</div>
                                        <div class="date">24.01.2024</div>
                                    </div>
                                    <div class="review__item__info__mark">
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
                                        <div class="mark">5.0</div>
                                    </div>
                                    <div class="review__item__info__text">
                                        С другой стороны новая модель
                                        организационной деятельности в
                                        значительной степени обуславливает
                                        создание системы обучения кадров,
                                        соответствует насущным потребностям.
                                    </div>
                                    <a href="#" class="review__button">
                                        Перейти к товару
                                    </a>
                                </div>
                            </div>
                            <div class="review__slider__item">
                                <img src="./assets/images/goodItems/goodItem1.jpeg" alt="" class="review__item__image" />
                                <div class="review__item__title">
                                    Настенный светильник (бра) Freya
                                    FR5133WL-01CH
                                </div>
                                <div class="review__item__info">
                                    <div class="review__item__info__top">
                                        <div class="name">Александр</div>
                                        <div class="date">24.01.2024</div>
                                    </div>
                                    <div class="review__item__info__mark">
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
                                        <div class="mark">5.0</div>
                                    </div>
                                    <div class="review__item__info__text">
                                        С другой стороны новая модель
                                        организационной деятельности в
                                        значительной степени обуславливает
                                        создание системы обучения кадров,
                                        соответствует насущным потребностям.
                                    </div>
                                    <a href="#" class="review__button">
                                        Перейти к товару
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="review__slider__inner__buttons">
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
            <a href="#" class="show__more">
                <svg>
                    <use xlink:href="#review" />
                </svg>
                Читать все 39 отзывов
            </a>
        </div>
    </section>
    <!-- /Reviews -->
    <!-- Hits -->
    <section class="hits store__goods">
        <div class="container">
            <div class="store__goods__inner">
                <div class="store__goods__top">
                    <div class="store__goods__title">Хиты продаж</div>
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
    <!-- Faq -->
    <section class="faq">
        <div class="container">
            <div class="faq__inner">
                <div class="faq__title">Часто задаваемые вопросы</div>
                <div class="faq__items">
                    <div class="faq__item">
                        <div class="faq__item__title">
                            Как оформить возврат товара
                        </div>
                        <div class="faq__item__text">
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
                    </div>
                    <div class="faq__item">
                        <div class="faq__item__title">
                            Как выбрать подходящий светильник под дизайн
                            моего проекта без помощи дизайнера
                        </div>
                        <div class="faq__item__text">
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
                    </div>
                    <div class="faq__item">
                        <div class="faq__item__title">
                            Как выбрать подходящий светильник под дизайн
                            моего проекта.
                        </div>
                        <div class="faq__item__text">
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
                    </div>
                </div>
            </div>
            <a href="#" class="show__more">Смотреть ещё</a>

            <div class="faq__text">
                <div>
                    С другой стороны новая модель организационной
                    деятельности в значительной степени обуславливает
                    создание системы обучения кадров, соответствует насущным
                    потребностям. Повседневная практика показывает, что
                    дальнейшее развитие различных форм деятельности
                    обеспечивает широкому кругу (специалистов) участие в
                    формировании системы обучения кадров, соответствует
                    насущным потребностям. Разнообразный и богатый опыт
                    начало повседневной работы по формированию позиции
                    влечет за собой процесс внедрения и модернизации систем
                    массового участия. Товарищи! начало повседневной работы
                    по формированию позиции обеспечивает широкому кругу
                    (специалистов) участие в формировании позиций,
                    занимаемых участниками в отношении поставленных задач. С
                    другой стороны консультация с широким активом
                    обеспечивает широкому кругу (специалистов) участие в
                    формировании форм развития.
                </div>
                <div>
                    Равным образом сложившаяся структура организации
                    позволяет выполнять важные задания по разработке
                    дальнейших направлений развития. Разнообразный и богатый
                    опыт новая модель организационной деятельности играет
                    важную роль в формировании модели развития. Товарищи!
                    сложившаяся структура организации обеспечивает широкому
                    кругу (специалистов) участие в формировании позиций,
                    занимаемых участниками в отношении поставленных задач.
                    Значимость этих проблем настолько очевидна, что
                    постоянный количественный рост и сфера нашей активности
                    позволяет оценить значение системы обучения кадров,
                    соответствует насущным потребностям. Идейные соображения
                    высшего порядка, а также консультация с широким активом
                    требуют определения и уточнения дальнейших направлений
                    развития. Задача организации, в особенности же
                    постоянное информационно-пропагандистское обеспечение
                    нашей деятельности позволяет выполнять важные задания по
                    разработке форм развития.
                </div>
            </div>
        </div>
    </section>
    <!-- /Faq -->
    <?php include './assets/includes/defaults/our-advantages/our-advantages.php'; ?>
    <?php include './assets/includes/footer.php'; ?>
    <?php include './assets/includes/copyright.php'; ?>
    <?php include './assets/includes/scripts.php'; ?>
</body>

</html>