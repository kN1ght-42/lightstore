let introSlider = document.getElementsByClassName("intro__slider");
let storeGoodsTags = document.getElementsByClassName("store__goods__tags");
let storeGoodsSlider = document.getElementsByClassName("store__goods__slider");
let categoryTypeTags = document.getElementsByClassName("category-type__tags");
let categoryTypeSlider = document.getElementsByClassName(
    "category-type__slider"
);
let manufacturersSlider = document.getElementsByClassName(
    "manufacturers__slider"
);
let creditsInner = document.getElementsByClassName("credits__inner");
let blogSlider = document.getElementsByClassName("blog__slider");
let recommendationsSlider = document.getElementsByClassName(
    ".recommendations__slider--default"
);
let headerTop = document.getElementsByClassName("header__top__slider__inner");
let headerNav = document.getElementsByClassName("nav__main__slider__inner");
let headerNavSecond = document.getElementsByClassName(
    "nav__second__slider__inner"
);
let catalogIntroItems = document.getElementsByClassName("catalog-intro__items");
let catalogSelectsSlider = document.getElementsByClassName(
    "catalog__selects__slider"
);
let reviewSliderInner = document.getElementsByClassName(
    "review__slider__inner"
);

let collectionSliderInner = document.getElementsByClassName(
    "collection__slider__inner"
);
let deliverySliderInner = document.getElementsByClassName(
    "delivery__slider__inner"
);

let cartRightTop = document.getElementsByClassName("cart__right__top");

let cardInfo = document.getElementsByClassName("card__info");

let reviewItem = document.getElementsByClassName("review__item");

let goodInfo = document.getElementsByClassName("good-info");

// 1 Интро слайдер индекс страницы
if (introSlider) {
    const swiper = new Swiper(".intro__slider", {
        navigation: {
            nextEl: ".arrow__button.next",
            prevEl: ".arrow__button.prev",
        },

        wrapperClass: "intro__slider__items",
        slideClass: "intro__slider__item",

        pagination: {
            el: ".swiper-pagination",
            bulletActiveClass: "swiper__pagination__active",
        },
    });
}

// 2 Теги товаров
if (storeGoodsTags) {
    const swiper2 = new Swiper(".store__goods__tags", {
        navigation: {
            nextEl: ".arrow__button.next",
            prevEl: ".arrow__button.prev",
        },
        wrapperClass: "store__goods__tags__inner",
        slideClass: "store__good__tag",

        slidesPerView: "auto",

        breakpoints: {
            1200: {
                spaceBetween: 20,
            },
            600: {
                spaceBetween: 10,
            },
            1: {
                spaceBetween: 5,
            },
        },
    });
}

// 3 Слайдер товаров
if (storeGoodsSlider) {
    const swiper3 = new Swiper(".store__goods__slider", {
        navigation: {
            nextEl: ".arrow__button.next",
            prevEl: ".arrow__button.prev",
        },
        wrapperClass: "store__goods__products",
        slideClass: "good__item",

        noSwiping: true,
        noSwipingClass: "good__item",

        breakpoints: {
            1600: {
                slidesPerView: 4,
                spaceBetween: 20,
            },
            1200: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            600: {
                slidesPerView: 2,
            },
            1: {
                slidesPerView: 1,
            },
        },
    });
}

// 4 Слайдер тегов в блоке категории товаров
if (categoryTypeTags) {
    const swiper5 = new Swiper(".category-type__tags", {
        navigation: {
            nextEl: ".arrow__button.next",
            prevEl: ".arrow__button.prev",
        },
        slidesPerView: "auto",
        wrapperClass: "category-type__tags__inner",
        slideClass: "category-type__tag",

        spaceBetween: 20,
    });
}

// 5 Слайдер айтемов в блоке категории товаров
if (categoryTypeSlider) {
    const swiper4 = new Swiper(".category-type__slider", {
        navigation: {
            nextEl: ".arrow__button.next",
            prevEl: ".arrow__button.prev",
        },
        wrapperClass: "category-type__content",
        slideClass: "category-type__item",

        breakpoints: {
            1750: {
                slidesPerView: "4",
                spaceBetween: 20,
            },
            1: {
                slidesPerView: "auto",
                spaceBetween: 20,
            },
        },
    });
}

// 6 Слайдер в блоке производители
if (manufacturersSlider) {
    const swiper6 = new Swiper(".manufacturers__slider", {
        navigation: {
            nextEl: ".arrow__button.next",
            prevEl: ".arrow__button.prev",
        },

        wrapperClass: "manufacturers__inner",
        slideClass: "manufacturers__slider__item",

        breakpoints: {
            1730: {
                slidesPerView: 4,
                spaceBetween: 20,
            },
            451: {
                slidesPerView: "auto",
                spaceBetween: 20,
            },
            1: {
                slidesPerView: "1",
                spaceBetween: 20,
            },
        },
    });
}

// 7 Слайдер в блоке кредиты
if (creditsInner) {
    const swiper7 = new Swiper(".credits__inner", {
        navigation: {
            nextEl: ".arrow__button.next",
            prevEl: ".arrow__button.prev",
        },

        wrapperClass: "credits__slider__inner",
        slideClass: "credits__slider__item",

        breakpoints: {
            1730: {
                slidesPerView: 4,
                spaceBetween: 20,
            },
            1: {
                slidesPerView: "auto",
                spaceBetween: 30,
            },
        },
    });
}

// 8 Слайдер в блоке блог
if (blogSlider) {
    const swiper8 = new Swiper(".blog__slider", {
        navigation: {
            nextEl: ".arrow__button.next",
            prevEl: ".arrow__button.prev",
        },

        wrapperClass: "blog__slider__inner",
        slideClass: "blog__slider__item",

        breakpoints: {
            1730: {
                slidesPerView: 3,
                spaceBetween: "20",
            },
            601: {
                slidesPerView: "2",
                spaceBetween: "30",
            },
            1: {
                slidesPerView: "1",
                spaceBetween: "30",
            },
        },
    });
}

// 9 Сладер в блоке рекомендации
if (recommendationsSlider) {
    if (window.innerWidth <= 1200) {
        const swiper9 = new Swiper(".recommendations__slider", {
            navigation: {
                nextEl: ".arrow__button.next",
                prevEl: ".arrow__button.prev",
            },

            wrapperClass: "recommendations__inner__items",
            slideClass: "recommendations__inner__item",

            breakpoints: {
                601: {
                    slidesPerView: "2",
                    spaceBetween: "20",
                },
                1: {
                    slidesPerView: "1",
                    spaceBetween: "20",
                },
            },
        });
    }
}

// 10 Сладер в блоке хеддер(топ)
if (headerTop) {
    const swiper10 = new Swiper(".header__top__slider__inner", {
        navigation: {
            nextEl: ".arrow__button.next",
            prevEl: ".arrow__button.prev",
        },

        wrapperClass: "header__top__nav",
        slideClass: "nav__item",

        slidesPerView: "auto",
        breakpoints: {
            1730: {
                spaceBetween: "40",
            },
            1: {
                spaceBetween: "30",
            },
        },
    });
}

// 11 Сладер в блоке хеддер (навигация)
if (headerNav) {
    const swiper11 = new Swiper(".nav__main__slider__inner", {
        navigation: {
            nextEl: ".arrow__button.next",
            prevEl: ".arrow__button.prev",
        },

        wrapperClass: "nav__main__inner",
        slideClass: "nav__main__button",

        slidesPerView: "auto",
        spaceBetween: "30",
    });
}

// 14 Сладер в блоке интро на странице каталога
if (catalogIntroItems) {
    const swiper14 = new Swiper(".catalog-intro__items", {
        navigation: {
            nextEl: ".arrow__button.next",
            prevEl: ".arrow__button.prev",
        },

        wrapperClass: "catalog-intro__items__inner",
        slideClass: "catalog-intro__item",

        breakpoints: {
            0: {
                slidesPerView: "auto",
                spaceBetween: "10",
            },
            600: {
                slidesPerView: "auto",
                spaceBetween: "30",
            },
            800: {
                slidesPerView: "auto",
                spaceBetween: "40",
            },
        },
    });
}

// 15 Сладер селекторов в блоке каталог
if (catalogSelectsSlider) {
    const swiper15 = new Swiper(".catalog__selects__slider", {
        navigation: {
            nextEl: ".arrow__button.next",
            prevEl: ".arrow__button.prev",
        },

        wrapperClass: "catalog__selects__inner",
        slideClass: "catalog__select",

        slidesPerView: "auto",
        spaceBetween: "20",
    });
}

// 16 Сладер селекторов в блоке каталог
if (reviewSliderInner) {
    const swiper16 = new Swiper(".review__slider__inner", {
        navigation: {
            nextEl: ".arrow__button.next",
            prevEl: ".arrow__button.prev",
        },

        wrapperClass: "review__slider__items",
        slideClass: "review__slider__item",

        slidesPerView: "auto",
        spaceBetween: "20",

        breakpoints: {
            1200: {
                slidesPerView: "4",
                spaceBetween: "20",
            },
            1000: {
                slidesPerView: "3",
                spaceBetween: "20",
            },
            600: {
                slidesPerView: "2",
                spaceBetween: "20",
            },
            0: {
                slidesPerView: "1",
                spaceBetween: "20",
            },
        },
    });
}

// 17 Слайдер изображений в коллекции
if (collectionSliderInner) {
    const swiper16 = new Swiper(".collection__slider__inner", {
        navigation: {
            nextEl: ".arrow__button.next",
            prevEl: ".arrow__button.prev",
        },

        wrapperClass: "collection__slider__items",
        slideClass: "collection__slider__item",

        slidesPerView: "auto",
        spaceBetween: "20",
    });
}
// 18 Слайдер изображений в рекомендациях в корзине
if (collectionSliderInner) {
    const swiper18 = new Swiper(".cart__recommendations__slider", {
        navigation: {
            nextEl: ".arrow__button.next",
            prevEl: ".arrow__button.prev",
        },

        wrapperClass: "cart__recommendations__inner__items",
        slideClass: "cart__recommendations__inner__item",

        breakpoints: {
            1200: {
                slidesPerView: "4",
                spaceBetween: "20",
            },
            1000: {
                slidesPerView: "3",
                spaceBetween: "20",
            },
            600: {
                slidesPerView: "2",
                spaceBetween: "20",
            },
            0: {
                slidesPerView: "1",
                spaceBetween: "20",
            },
        },
    });
}

// 19 Слайдер хэддера в доcтавке в корзине
if (deliverySliderInner) {
    const swiper19 = new Swiper(".delivery__slider__inner", {
        navigation: {
            nextEl: ".arrow__button.next",
            prevEl: ".arrow__button.prev",
        },

        wrapperClass: "delivery__slider__items",
        slideClass: "delivery__slider__item",

        breakpoints: {
            0: {
                slidesPerView: "1",
            },
            400: {
                slidesPerView: "auto",
            },
        },
    });
}

// 20 Слайдер cпообов оплаты в корзине
if (cartRightTop) {
    const swiper20 = new Swiper(".cart__right__top__payment-methods", {
        navigation: {
            nextEl: ".arrow__button.next",
            prevEl: ".arrow__button.prev",
        },

        wrapperClass: "cart__right__top__payment-methods__slider",
        slideClass: "cart__right__top__payment-method",

        slidesPerView: "auto",
        spaceBetween: "10",

        breakpoints: {
            0: {
                slidesPerView: "auto",
                spaceBetween: "10",
            },
            500: {
                slidesPerView: "auto",
                spaceBetween: "auto",
            },
        },
    });
}

// 21 Слайдер в хэддере в default-switcher,
// 22 Слайдер видео в default-switcher
if (cardInfo) {
    const swiper21 = new Swiper(".switcher__header__slider", {
        navigation: {
            nextEl: ".arrow__button.next",
            prevEl: ".arrow__button.prev",
        },

        wrapperClass: "switcher__header__items",
        slideClass: "switcher__header__item",

        slidesPerView: "auto",
        spaceBetween: "50",

        noSwiping: true,
        noSwipingClass: "switcher__header__item",
    });

    const swiper22 = new Swiper(".video__inner__slider", {
        navigation: {
            nextEl: ".arrow__button.next",
            prevEl: ".arrow__button.prev",
        },

        wrapperClass: "video__inner__items",
        slideClass: "video__item",

        noSwiping: true,
        noSwipingClass: "video__item",

        breakpoints: {
            0: {
                slidesPerView: "1",
                spaceBetween: "40",
            },
            800: {
                slidesPerView: "auto",
                spaceBetween: "40",
            },
        },
    });
}

// 23 Слайдер видео в default-switcher
if (reviewItem) {
    const swiper23 = new Swiper(".media__slider__inner", {
        navigation: {
            nextEl: ".arrow__button.next",
            prevEl: ".arrow__button.prev",
        },

        wrapperClass: "media__slider__items",
        slideClass: "media__slider__item",

        slidesPerView: "auto",
        spaceBetween: "20",
    });
}

// 24 Слайдер фотографий в описании default-switcher
if (reviewItem) {
    const swiper24 = new Swiper(".description__photos__slider", {
        navigation: {
            nextEl: ".arrow__button.next",
            prevEl: ".arrow__button.prev",
        },

        wrapperClass: "description__photos__items",
        slideClass: "description__photos__item",

        slidesPerView: "3",
        spaceBetween: "20",
    });
}

// 24 Слайдер характеристик на странице сравнение
if (goodInfo) {
    const swiper24 = new Swiper(".good-info__section__item", {
        navigation: {
            nextEl: ".arrow__button.next",
            prevEl: ".arrow__button.prev",
        },

        wrapperClass: "values",
        slideClass: "value__item",

        noSwiping: true,
        noSwipingClass: "value__item",
        breakpoints: {
            1600: {
                slidesPerView: 4,
                spaceBetween: 20,
            },
            1200: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            600: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            1: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
        },
    });
}
