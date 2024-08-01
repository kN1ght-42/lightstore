<html lang="ru">

<head>
    <title>Контакты</title>
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
                        <a href="#" class="bread__crumbs__link bread__crumbs__link--current">Контакты</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Page-headline -->
    <!-- Contacts__main -->
    <section class="contacts__main">
        <div class="container">
            <div class="contacts__main__inner">
                <div class="contacts__left">
                    <div class="contacts__title">
                        <div class="title">Контакты</div>
                        <a href="#" class="subtitle__city" id="subtitleCityButton">в Санкт-Петербуге</a>
                    </div>
                    <video class="contacts__video" muted autoplay loop src="./assets/video/contactsGif/contactVideo.mp4 "></video>
                </div>
                <div class="contacts__right">
                    <div class="contacts__info">
                        <div class="contacts__info__phones">
                            <div class="title">Телефоны</div>
                            <div class="phone__items">
                                <div class="phones__item">
                                    <a href="tel:84872577901" class="phone">
                                        +7 4872 57 79 01
                                    </a>
                                    <div class="subtitle">
                                        Тульская область
                                    </div>
                                </div>
                                <div class="phones__item">
                                    <a href="tel:88006009377" class="phone">8 800 600 93 77</a>
                                    <div class="subtitle">
                                        звонок по России бесплатный
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="contacts__info__schedule">
                            <div class="title">Время работы</div>
                            <div class="schedule__items">
                                <div class="schedule__item">
                                    <div class="phone">
                                        с 9:00 до 21:00 (UTC +3)
                                    </div>
                                    <div class="subtitle">
                                        Ежедневно - без выходных
                                    </div>
                                </div>
                                <div class="schedule__item">
                                    <div class="schedule last-child">
                                        Заказы на сайте - круглосуточно
                                    </div>
                                    <div class="subtitle">
                                        После оформления заказа в рабочее
                                        время с Вами свяжется менеджер
                                        интернет-магазина для уточнения
                                        деталей заказа
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contacts__office">
                        <div class="office__title">
                            офис в Санкт-Петербурге
                        </div>
                        <div class="office__address">
                            городской округ Подольск, Московская область,
                            деревня Коледино, 1Вс3 (склад №1)
                        </div>
                    </div>
                    <div class="delivery">
                        <div class="container">
                            <div class="delivery__inner">
                                <div class="delivery__items">
                                    <div class="delivery__item">
                                        <div class="delivery__item__buttons">
                                            <button class="delivery__button delivery__button--active">
                                                Списком
                                            </button>
                                            <button class="delivery__button" id="deliveryButtonMap">
                                                На карте
                                            </button>
                                        </div>
                                        <div class="delivery__item__inner">
                                            <div class="title">
                                                Все адреса самовывоза
                                                <span>(463 пунктов)</span>
                                            </div>
                                            <ul>
                                                <li>
                                                    городской округ
                                                    Подольск, Московская
                                                    область, деревня
                                                    Коледино, 1Вс3 (склад
                                                    №1)
                                                </li>
                                                <li>
                                                    г. Санкт-Петербург,
                                                    Санкт-Петербург город,
                                                    пр-кт Лиговский, дом 50,
                                                    корп 12, офис 116
                                                </li>
                                                <li>
                                                    г. Санкт-Петербург, ул.
                                                    Алтайская, 4
                                                </li>
                                                <li>
                                                    г. Санкт-Петербург,
                                                    пр-т. Ленинский, 147
                                                </li>
                                                <li>
                                                    г. Санкт-Петербург,
                                                    Старо-Петергофский
                                                    пр-т., 31/2Л
                                                </li>
                                                <li>
                                                    г. Санкт-Петербург, ул.
                                                    Елецкая, 3
                                                </li>
                                                <li>
                                                    городской округ
                                                    Подольск, Московская
                                                    область, деревня
                                                    Коледино, 1Вс3 (склад
                                                    №1)
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="delivery__item__map">
                                            <div class="title">
                                                Все адреса самовывоза
                                                <span>(463 пунктов)</span>
                                            </div>
                                            <script style="border-radius: 10px" type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Af671f4aaaf635387b7774c9c14323414758c9577ab7d143bbfaab31a293dec4c&amp;height=350&amp;lang=ru_RU&amp;scroll=true"></script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contacts__requisites">
                        <div class="container">
                            <div class="contacts__requisites__inner">
                                <div class="title">Реквизиты</div>
                                <div class="requisites__items">
                                    <div class="requisites__item">
                                        <span>Наименование: </span>ООО
                                        "МАГАЗИН СВЕТА"
                                    </div>
                                    <div class="requisites__item">
                                        <span>ИНН организации: </span>5074087887
                                    </div>
                                    <div class="requisites__item">
                                        <span>КПП организации: </span>507401001
                                    </div>
                                    <div class="requisites__item">
                                        <span>ОГРН: </span>1245000045553
                                    </div>
                                    <div class="requisites__item">
                                        <span>Расчётный счёт: </span>40702810220000099887
                                    </div>
                                    <div class="requisites__item">
                                        <span>Наименование банка: </span>ООО
                                        "Банк Точка"
                                    </div>
                                    <div class="requisites__item">
                                        <span>БИК банка: </span>044525104
                                    </div>
                                    <div class="requisites__item">
                                        <span>ИНН банка: </span>9721194461
                                    </div>
                                    <div class="requisites__item">
                                        <span>Корреспондентский счёт: </span>30101810745374525104
                                    </div>
                                    <div class="requisites__item">
                                        <span>Юридический адрес банка: </span>109044, Российская Федерация, г.
                                        Москва, вн.тер.г. муниципальный
                                        округ Южнопортовый, пер. 3-й
                                        Крутицкий, д.11, помещ. 7Н
                                    </div>
                                </div>
                            </div>
                            <video class="contacts__video contacts__video--mobile" muted autoplay loop src="./assets/video/contactsGif/contactVideo.mp4"></video>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Contacts__main -->
    <?php include './assets/includes/defaults/delivery-suggestions.php'; ?>
    <?php include './assets/includes/defaults/our-advantages/our-advantages.php'; ?>
    <?php include './assets/includes/footer.php'; ?>
    <?php include './assets/includes/copyright.php'; ?>
    <?php include './assets/includes/scripts.php'; ?>
</body>

</html>