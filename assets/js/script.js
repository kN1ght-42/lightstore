let body = document.querySelector("body");

let headerMobileLeft = document.querySelector(".header__mobile__left");
let headerMobileSearch = document.querySelector(".header__mobile__search");

let citySelectorWindow = document.querySelector(".city-selector__window");

let mobileMenu = document.querySelector(".mobile__menu");
let mobileCatalog = document.querySelector(".mobile__catalog");
let headerCatalog = document.querySelector(".header__catalog");
let catalogSlider = document.querySelectorAll(".catalog__slider");

let buttonHeaderSearch = headerMobileLeft.childNodes[3];

let regionTitle = document.querySelectorAll(".region__item__title");

let citySelectorCloseButton = document.querySelector(".city-selector__close");
let citySelectorButton = document.querySelector(".city-selector");

let burgerMenuButton = document.querySelector(".burger__menu__button");
let mobileMenuCloseButton = document.querySelectorAll(".mobile__menu__close");

let tabletMenuItemCatalog = document.querySelector(
    ".tablet__menu__item.catalogTablet"
);
let mobileCatalogCloseButton = document.querySelectorAll(
    ".mobile__catalog__close"
);

let catalogButton = document.querySelector(".catalog__button");

if (catalogButton) {
    let svgClose = catalogButton.querySelector(".catalog__svg.close");
    let svgCatalog = catalogButton.querySelector(".catalog__svg.catalogSvg");
}

let catalogButtonClose = document.querySelector(".header__catalog__close");

let storeGoodTag = document.querySelectorAll(".store__good__tag");

let categoryTag = document.querySelectorAll(".category-type__tag");

let footer = document.querySelector(".footer__right");

let goodItem = document.querySelectorAll(".good__item");

let cartItem = document.querySelectorAll(".cart__item");

let cartPaymentFinalPrice = document.querySelector(
    ".cart-payment__final-price"
);

let form = document.querySelectorAll("form");

let feedbackModalWindow = document.querySelector(".feedback__modal-window");
let blueUnderline = document.querySelector(".blueUnderline");
let feedbackModalWindowClose = document.querySelector(
    ".feedback__modal-window__close"
);

let deliveryButton = document.querySelectorAll(".delivery__button");

let cardMain = document.getElementsByClassName("card__main");

let cardInfoInner = document.getElementsByClassName("card__info");
let defaultSwitcher = document.querySelectorAll(".default-switcher");

let reviewForm = document.getElementsByClassName("review__form");

let promoConfirmation = document.getElementById("promoConfirmation");

let svgSearch = document.querySelector(".svg--search");
let svgClose = document.querySelector(".svg--close");

let mobileCatalogTopTitle = document.querySelectorAll(".mobile__catalog__top");

let mobileCatalogInner = document.querySelectorAll(".mobile__catalog__inner");

let promoModalWindowClose = document.querySelector(
    ".promo__modal-window__close"
);
let promoModalWindow = document.querySelector(".promo__modal-window");

let callRequestConfirmation = document.getElementById(
    "callRequestConfirmation"
);

let paymentsModalWindow = document.querySelector(".payments__modal-window");
let credits = document.querySelector(".credits");
let creditsSliderItems = document.querySelectorAll(".credits__slider__item");
let paymentsModalWindowClose = document.querySelector(
    ".payments__modal-window__close"
);

let markPlaceInput = document.querySelector(".mark__place__input");

let cardButtonLike = document.querySelectorAll(".card__main__buy__button.like");

let defaultSwitcherComplect = document.querySelector(
    ".default-switcher__item.complect"
);

let contactsVideos = document.querySelectorAll(".contacts__video");

let subtitleCityButton = document.querySelector("#subtitleCityButton");

let buyButton = document.querySelectorAll(".good__item__button");

let orderModalWindow = document.querySelectorAll(".order__modal-window");

let addToCartOrder = document.querySelector("#addToCartOrder");

let popularFilter = document.querySelector(".popular__filter");

let deliveryInnerMain = document.querySelectorAll(".delivery__inner__main");

// Включение и выключение модального окна из хеддера с контактами

blueUnderline.addEventListener("click", () => {
    body.style.overflowY = "hidden";
    feedbackModalWindow.classList.add("active");
});

feedbackModalWindowClose.addEventListener("click", () => {
    body.style.overflowY = "scroll";
    feedbackModalWindow.classList.remove("active");
});

//

// Включение и выключение модального окна с кредитами
if (credits && paymentsModalWindowClose) {
    paymentsModalWindowClose.addEventListener("click", () => {
        body.style.overflowY = "scroll";
        paymentsModalWindow.classList.remove("payments__modal-window--active");
    });

    creditsSliderItems.forEach((el) => {
        el.addEventListener("click", () => {
            body.style.overflowY = "hidden";
            paymentsModalWindow.classList.add("payments__modal-window--active");
        });
    });
}

//

// Переключение фотографий при наведений в товаре
goodItem.forEach((el) => {
    goodItemImagesCount = el.querySelectorAll(".good__item__image").length;
    goodItemImageSwitcher = el.querySelector(".good__item__image-switcher");

    goodItemButtonsContainer = el.querySelector(".good__item__image__buttons");

    for (i = 0; i < goodItemImagesCount; i += 1) {
        let div = document.createElement("div");
        let button = document.createElement("button");

        let idCount = (i - goodItemImagesCount + 1) * -1;

        div.id = idCount;

        button.classList = "good__item__image__button";
        button.setAttribute("buttonId", idCount);

        goodItemImageSwitcher.prepend(div);
        goodItemButtonsContainer.prepend(button);
    }

    goodItemButtonsContainer.childNodes[0].classList.add(
        "good__item__image__button--active"
    );

    let images = el.querySelectorAll(".good__item__image");
    let buttons = el.querySelectorAll(".good__item__image__button");

    const imageSwitcher = (elementId, el) => {
        el.querySelector(".good__item__image--active").classList.remove(
            "good__item__image--active"
        );

        images[elementId].classList.add("good__item__image--active");

        el.querySelector(".good__item__image__button--active").classList.remove(
            "good__item__image__button--active"
        );
        buttons[elementId].classList.add("good__item__image__button--active");
    };

    goodItemImageSwitcher.childNodes.forEach((el2) => {
        el2.addEventListener("mouseover", () => {
            elementId = el2.id;

            imageSwitcher(elementId, el);
        });
    });

    buttons.forEach((el2) => {
        el2.addEventListener("click", () => {
            elementId = el2.getAttribute("buttonId");

            imageSwitcher(elementId, el);
        });
    });

    let buttonLike = el.querySelector(".like");

    buttonLike.addEventListener("click", () => {
        if (buttonLike.classList.contains("active")) {
            buttonLike.classList.remove("active");
        } else {
            buttonLike.classList.add("active");
        }
    });
});

// Аккордеон в подвале
if (footer) {
    if (window.innerWidth <= 800) {
        let footerTitle = footer.querySelectorAll(".title");

        if (footerTitle) {
            footerTitle.forEach((el) => {
                el.addEventListener("click", () => {
                    let content = el.nextElementSibling;

                    if (content.style.maxHeight) {
                        content.style.maxHeight = null;
                    } else {
                        content.style.maxHeight = content.scrollHeight + "px";
                    }
                });
            });
        }
    }
}

// Функция выключения всех мобильных модальных окон при включении одного из них
const mobileCloseWindows = () => {
    mobileCatalogInner.forEach((el) => {
        el.style.left = "0px";
    });

    if (mobileMenu.classList.contains("mobile__menu--active")) {
        mobileMenu.classList.remove("mobile__menu--active");
    }

    if (mobileCatalog.classList.contains("mobile_catalog--active")) {
        mobileCatalog.classList.remove("mobile__menu--active");
    }

    if (
        headerMobileSearch.classList.contains("header__mobile__search--active")
    ) {
        headerMobileSearch.classList.remove("header__mobile__search--active");
        svgSearch.style.display = "block";
        svgClose.style.display = "none";
    }
};

// Кнопка включение и выключения поиска на мобильном устройстве
if (headerMobileLeft) {
    if (buttonHeaderSearch) {
        buttonHeaderSearch.addEventListener("click", () => {
            if (
                headerMobileSearch.classList.contains(
                    "header__mobile__search--active"
                )
            ) {
                headerMobileSearch.classList.remove(
                    "header__mobile__search--active"
                );

                svgSearch.style.display = "block";
                svgClose.style.display = "none";
            } else {
                mobileCloseWindows();

                headerMobileSearch.classList.add(
                    "header__mobile__search--active"
                );
                svgSearch.style.display = "none";
                svgClose.style.display = "block";
            }
        });
    }
}

// Аккордеон
regionTitle.forEach((el) => {
    el.addEventListener("click", () => {
        let content = el.nextElementSibling;
        let icon = el.querySelector(".region__item__svg");

        if (content.style.maxHeight) {
            content.style.maxHeight = null;
            icon.style.transform = "rotate(90deg)";
        } else {
            content.style.maxHeight = content.scrollHeight + "px";
            icon.style.transform = "rotate(270deg)";
        }
    });
});

// Кнопка выключения выбора города
if (citySelectorCloseButton) {
    citySelectorCloseButton.addEventListener("click", () => {
        citySelectorWindow.classList.remove("city-selector__window--active");
    });
}

// Кнопка включения выбора города
if (citySelectorButton) {
    citySelectorButton.addEventListener("click", () => {
        citySelectorWindow.classList.add("city-selector__window--active");
    });
}

// Кнопка включения меню
if (burgerMenuButton) {
    burgerMenuButton.addEventListener("click", () => {
        mobileCloseWindows();

        mobileMenu.classList.add("mobile__menu--active");
    });
}

// Кнопка выключения меню
if (mobileMenuCloseButton) {
    mobileMenuCloseButton.forEach((el) => {
        el.addEventListener("click", () => {
            mobileMenu.classList.remove("mobile__menu--active");
        });
    });
}

// Кнопка включения мобильного каталога
if (tabletMenuItemCatalog) {
    tabletMenuItemCatalog.addEventListener("click", () => {
        mobileCloseWindows();
        mobileCatalog.classList.add("mobile__menu--active");
    });
}

// Кнопка выключения мобильного каталога
if (mobileCatalogCloseButton) {
    mobileCatalogCloseButton.forEach((el) => {
        el.addEventListener("click", () => {
            mobileCatalog.classList.remove("mobile__menu--active");
        });
    });
}

// Переключение между уровнями навигации в каталоге (моб версия)

if (catalogSlider) {
    catalogSlider.forEach((el) => {
        let mobileCatalogInnerItem = el.querySelectorAll(
            ".mobile__catalog__inner__item"
        );

        let sliderLine = el.querySelector(".mobile__catalog__inner");

        let windowWidth = window.innerWidth;

        mobileCatalogInnerItem.forEach((el2) => {
            if (el2.hasAttribute("nextpossible")) {
                let mobileCatalogLinks = el2.querySelectorAll(
                    ".mobile__catalog__item"
                );

                mobileCatalogLinks.forEach((el3) => {
                    el3.addEventListener("click", () => {
                        let str = sliderLine.style.left;
                        let sliderNew = str.split("px");

                        sliderLine.style.left = `${Number(
                            sliderNew[0] - windowWidth
                        )}px`;
                    });
                });
            }
        });

        mobileCatalogTopTitle.forEach((el2) => {
            el2.addEventListener("click", () => {
                if (el2.hasAttribute("backpossible")) {
                    let str = sliderLine.style.left;
                    let sliderNew = str.split("px");

                    sliderLine.style.left = `${
                        windowWidth + Number(sliderNew[0])
                    }px`;
                }
            });
        });
    });
}

// Кнопка выключения каталога
if (catalogButtonClose) {
    catalogButtonClose.addEventListener("click", () => {
        headerCatalog.classList.remove("header__catalog--active");
        svgClose.style.display = "none";
        svgCatalog.style.display = "block";
    });
}

// Переключение активного тега

// if (storeGoodTag) {
//     storeGoodTag.forEach((el) => {
//         el.addEventListener("click", () => {
//             if (el.classList.contains("tag--active")) {
//                 el.classList.remove("tag--active");
//             } else {
//                 el.classList.add("tag--active");
//             }
//         });
//     });
// }

if (categoryTag) {
    categoryTag.forEach((el) => {
        el.addEventListener("click", () => {
            if (el.classList.contains("tag--active")) {
                el.classList.remove("tag--active");
            } else {
                el.classList.add("tag--active");
            }
        });
    });
}

// Переключение количеcтва товара в корзине
if (cartItem) {
    cartItem.forEach((el) => {
        let cartItemAmount = el.querySelector(".amount");
        let cartItemNumber = cartItemAmount.querySelector(".number");

        let countSpan = cartItemNumber.querySelector("span");

        let button = cartItemAmount.querySelectorAll(".cart__button");

        button.forEach((el) => {
            el.addEventListener("click", () => {
                number = Number(countSpan.innerHTML);
                if (el.classList.contains("plus")) {
                    countSpan.innerHTML = number + 1;
                } else {
                    if (number === 1) {
                        countSpan.innerHTML = number - 0;
                    } else {
                        countSpan.innerHTML = number - 1;
                    }
                }
            });
        });
    });
}

// Подтвержение на обработку личных данных в корзине
if (cartPaymentFinalPrice) {
    let button = cartPaymentFinalPrice.querySelector(".black__button");

    let checkBox = document.getElementById("personalDataConfirmation");

    function buttonFunction() {
        button.preventDefault();
    }

    checkBox.addEventListener("click", () => {
        if (checkBox.checked) {
            button.classList.remove("black__button--disabled");
            button.removeAttribute("disabled");
        } else {
            button.classList.add("black__button--disabled");
            button.setAttribute("disabled", "");
        }
    });
}

// Prevent default для всех кнопок submit
if (form) {
    form.forEach((el) => {
        el.addEventListener("submit", (event) => {
            event.preventDefault();
        });
    });
}

// Переключатель способов доставки
if (deliveryButton) {
    deliveryButton.forEach((el) => {
        el.addEventListener("click", () => {
            if (!el.classList.contains("delivery__button--active")) {
                let deliveryButtonActive = document.querySelector(
                    ".delivery__button--active"
                );
                el.classList.add("delivery__button--active");
                deliveryButtonActive.classList.remove(
                    "delivery__button--active"
                );
            }

            deliverySwitcher();
        });
    });

    const deliverySwitcher = () => {
        let deliveryButtonMap = document.getElementById("deliveryButtonMap");
        let deliveryItemInner = document.querySelector(
            ".delivery__item__inner"
        );
        let deliveryItemMap = document.querySelector(".delivery__item__map");

        if (deliveryButtonMap.classList.contains("delivery__button--active")) {
            deliveryItemInner.style.display = "none";
            deliveryItemMap.style.display = "block";
        } else {
            deliveryItemInner.style.display = "block";
            deliveryItemMap.style.display = "none";
        }
    };
}

// Переключатель фотографий на странице карточки
if (cardMain) {
    let selectors = document.querySelectorAll(".card__main__left__selector");

    selectors.forEach((el) => {
        el.addEventListener("click", () => {
            let image = document.querySelector(".card__main__left__images");
            let imageInner = image.children[0];
            imageInner.remove();

            let activeImage = el.querySelector("img").getAttribute("src");

            let newImg = document.createElement("img");
            newImg.classList.add("card__main__image");
            newImg.setAttribute("src", activeImage);
            image.append(newImg);
        });
    });
}

// Переключатель активных окон в default-switcher
const defaultSwitcherFunction = (MainWindow, ActiveWindow, HeaderItem) => {
    MainWindow.forEach((el) => {
        let headerItem = el.querySelectorAll(`.${HeaderItem}`);

        headerItem.forEach((el2) => {
            el2.addEventListener("input", (event) => {
                if (event.target.nodeName == "INPUT") {
                    let currentActiveWindow = el.querySelector(
                        `.${ActiveWindow}`
                    );

                    currentActiveWindow.classList.remove(ActiveWindow);

                    let activeWindowId = String(el2.querySelector("input").id);

                    let activeWindowItem =
                        el.getElementsByClassName(activeWindowId);

                    activeWindowItem[0].classList.add(ActiveWindow);
                }
            });
        });
    });
};

if (defaultSwitcher) {
    defaultSwitcherFunction(
        defaultSwitcher,
        "default-switcher__item--active",
        "switcher__header__item"
    );

    let switcherHeaderContainer = document.querySelector(
        ".switcher__header__items"
    );

    if (switcherHeaderContainer) {
        let switcherHeaderItems =
            switcherHeaderContainer.querySelectorAll("input");

        switcherHeaderItems.forEach((el) => {
            el.addEventListener("input", () => {
                let storeDelivery = document.querySelector(".storeDelivery");

                if (el.id == "delivery") {
                    console.log(1);
                    storeDelivery.classList.add("delivery__item--active");
                } else {
                    let deliverySliderItems = document
                        .querySelector(".delivery__slider__items")
                        .querySelectorAll("input");

                    deliverySliderItems.forEach((el2) => {
                        if (el2.checked) {
                            el2.checked = false;
                        }
                    });

                    deliverySliderItems[0].checked = true;

                    let storeDeliveryCurrentActive = document.querySelector(
                        ".delivery__item--active"
                    );
                    storeDeliveryCurrentActive.classList.remove(
                        "delivery__item--active"
                    );
                }
            });
        });
    }
}

if (deliveryInnerMain) {
    defaultSwitcherFunction(
        deliveryInnerMain,
        "delivery__item--active",
        "delivery__slider__item"
    );
}

let storeGoods = document.querySelectorAll(".store__goods");

if (storeGoods) {
    defaultSwitcherFunction(
        storeGoods,
        "store__goods__wrapper--active",
        "store__good__tag"
    );
}

// Активное окно, хеддер элемент, основной

// Подтверждение на обратку личных данных в блоке promo в default-switcher

if (promoConfirmation) {
    console.log(promoConfirmation);

    let button = document.querySelector(".promo__feedback__button");

    function buttonFunction() {
        button.preventDefault();
    }

    promoConfirmation.addEventListener("click", () => {
        if (promoConfirmation.checked) {
            button.classList.remove("black__button--disabled");
            button.removeAttribute("disabled");
        } else {
            button.classList.add("black__button--disabled");
            button.setAttribute("disabled", "");
        }
    });
}

// Выключение модального окна в блоке акций

if (promoModalWindow) {
    promoModalWindowClose.addEventListener("click", () => {
        promoModalWindow.classList.add("promo__modal-window--disabled");
    });
}

// Согласешние с политикой конфидициальности в блоке call-request
if (callRequestConfirmation) {
    let button = document.querySelector(".call-request__button");

    function buttonFunction() {
        button.preventDefault();
    }

    callRequestConfirmation.addEventListener("click", () => {
        if (callRequestConfirmation.checked) {
            button.classList.remove("call-request__button--disabled");
            button.removeAttribute("disabled");
        } else {
            button.classList.add("call-request__button--disabled");
            button.setAttribute("disabled", "");
        }
    });
}

// Выставление оценки в отзыве (звездочки)
if (markPlaceInput) {
    let stars = markPlaceInput.querySelectorAll(".input__star");

    let reviewMark = markPlaceInput.querySelector("#reviewMark");

    stars.forEach((el) => {
        el.addEventListener("click", () => {
            reviewMark.value = Number(el.getAttribute("mark"));

            let starValue = el.getAttribute("star");

            for (let i = 0; i < starValue; i++) {
                stars[i].classList.add("input__star--active");
            }
        });

        el.addEventListener("mouseover", () => {
            let starValue = el.getAttribute("mark");

            stars.forEach((el) => {
                el.classList.remove("input__star--active");
            });

            for (let i = 0; i < starValue; i++) {
                stars[i].classList.add("input__star--active");
            }
        });

        el.addEventListener("mouseout", () => {
            let starValue = reviewMark.value;

            stars.forEach((el) => {
                el.classList.remove("input__star--active");
            });

            for (let i = 0; i < starValue; i++) {
                stars[i].classList.add("input__star--active");
            }
        });
    });
}

// Добавление товара в избранное
if (cardButtonLike) {
    cardButtonLike.forEach((el) => {
        el.addEventListener("click", () => {
            if (el.classList.contains("active")) {
                el.classList.remove("active");
            } else {
                el.classList.add("active");
            }
        });
    });
}

if (defaultSwitcherComplect) {
    let recommendationsInnerItem = defaultSwitcherComplect.querySelectorAll(
        ".recommendations__inner__item"
    );

    let countGoods = 0;

    let complectCount = document
        .querySelector(".complect__count")
        .querySelector("span");

    addToCartOrder.addEventListener("click", () => {
        recommendationsInnerItem.forEach((el) => {
            let checkBox = el.querySelector("input[name=complectCheckbox]");

            checkBox.checked = true;
            complectCount.innerHTML = `6 товара`;
        });

        countGoods = 6;
    });

    recommendationsInnerItem.forEach((el) => {
        let checkBox = el.querySelector("input[name=complectCheckbox]");

        let checkBoxAll = document.querySelectorAll(
            "input[name=complectCheckbox]"
        );

        checkBoxAll.forEach((el) => {
            if (el.checked) {
                countGoods++;
            }
        });

        checkBox.addEventListener("click", () => {
            let checkBoxAll = document.querySelectorAll(
                "input[name=complectCheckbox]"
            );

            if (checkBox.checked) {
                countGoods++;
            } else {
                countGoods--;
            }

            if (countGoods == 0) {
                complectCount.innerHTML = "Нет товаров";
            } else if (countGoods == 1) {
                complectCount.innerHTML = `${countGoods} товар`;
            } else {
                complectCount.innerHTML = `${countGoods} товара`;
            }
        });
    });
}

// Видео на странице контакты
if (contactsVideos) {
    contactsVideos.playbackRate = 10;
}

// Включение модального окна
if (subtitleCityButton) {
    subtitleCityButton.addEventListener("click", () => {
        citySelectorWindow.classList.add("city-selector__window--active");
    });
}

// Открытие модального окна покупки и быстрого заказа
if (orderModalWindow) {
    let windowBuy = document.querySelector(".window--buy");
    let windowFastOrder = document.querySelector(".window--fast__order");

    buyButton.forEach((el) => {
        el.addEventListener("click", () => {
            if (el.classList.contains("buy")) {
                windowBuy.classList.add("order__modal-window--active");
            } else if (
                el.classList.contains("order") ||
                el.classList.contains("add-to-order")
            ) {
                windowFastOrder.classList.add("order__modal-window--active");
            }
        });
    });

    let orderModalWindowClose = document.querySelectorAll(
        ".order__modal-window__close"
    );

    orderModalWindowClose.forEach((el) => {
        el.addEventListener("click", () => {
            let orderModalWindowActive = document.querySelector(
                ".order__modal-window--active"
            );

            orderModalWindowActive.classList.remove(
                "order__modal-window--active"
            );
        });
    });
}

// Переключение на странице каталог (сначала популярные)

if (popularFilter) {
    popularFilter.addEventListener("click", () => {
        if (popularFilter.classList.contains("popular__filter--active")) {
            popularFilter.classList.remove("popular__filter--active");
        } else {
            popularFilter.classList.add("popular__filter--active");
        }
    });
}

// delivery.addEventListener("input", () => {
//     let deliveryItem = document.querySelector(".storeDelivery");

//     console.log(deliveryItem);

//     if (delivery.checked) {
//         deliveryItem.classList.add("delivery__item--active");
//         console.log(2);
//     } else {
//         let deliveryItemCurrentActive = document.querySelectorAll(
//             ".delivery__item--active"
//         );

//         console.log(1);
//         deliveryItemCurrentActive.classList.remove("delivery__item--active");
//     }
// });

let compareRadio = document.querySelectorAll("input[name=compareRadio]");

compareRadio.forEach((el) => {
    el.addEventListener("input", () => {
        let goodInfoSectionItem = document.querySelectorAll(
            ".good-info__section__item"
        );

        if (el.id == "differentСharacteristics") {
            goodInfoSectionItem.forEach((el2) => {
                let inputs = el2.querySelectorAll("input");

                let mainValue = inputs[0].value;

                isSameValue = false;

                try {
                    inputs.forEach((el3) => {
                        if (el3.value !== mainValue) {
                            isSameValue = true;
                            throw new Error("Same value");
                        }
                    });
                } catch (error) {
                    if (error.message !== "Same value") {
                        throw error;
                    }
                }

                if (!isSameValue) {
                    el2.style.display = "none";
                }

                console.log(isSameValue);

                // let a = inputs.forEach((el3) => {
                //     el3.value == mainValue;
                // });

                // console.log(a);

                // if (
                //     inputs.forEach((el3) => {
                //         el3.value == mainValue;
                //     })
                // ) {
                //     el2.style.display = "none";
                // } else {
                //     console.log(2);
                // }
            });
        } else {
            goodInfoSectionItem.forEach((el) => {
                el.style.display = "block";
            });
        }

        let goodInfoSection = document.querySelectorAll(".good-info__section");

        goodInfoSection.forEach((el) => {
            let goodInfoSectionItem = el.querySelectorAll(
                ".good-info__section__item"
            );

            isActiveWindow = false;

            try {
                goodInfoSectionItem.forEach((el2) => {
                    if (el2.style["display"] !== "none") {
                        isActiveWindow = true;
                        throw new Error("Same value");
                    }
                });
            } catch (error) {
                if (error.message !== "Same value") {
                    throw error;
                }
            }

            if (!isActiveWindow) {
                el.style.display = "none";
            } else {
                el.style.display = "block";
            }
        });
    });
});
