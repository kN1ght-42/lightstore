// Фунцкия открытия каталога в хеддере

$(document).mouseup(function (e) {
    var container = $(".header__catalog");

    var svgClose = $(".catalog__svg.close");
    var svgCatalog = $(".catalog__svg.catalogSvg");
    var catalogButton = $(".catalog__button");

    if (container.hasClass("header__catalog--active")) {
        if (
            container.has(e.target).length === 0 &&
            catalogButton.has(e.target).length === 0
        ) {
            container.removeClass("header__catalog--active");
            svgClose.css("display", "none");
            svgCatalog.css("display", "block");
        }
    }
});

$(catalogButton).click(function () {
    var container = $(".header__catalog");
    var svgClose = $(".catalog__svg.close");
    var svgCatalog = $(".catalog__svg.catalogSvg");

    if (container.hasClass("header__catalog--active")) {
        container.removeClass("header__catalog--active");
        svgClose.css("display", "none");
        svgCatalog.css("display", "block");
    } else {
        container.addClass("header__catalog--active");
        svgClose.css("display", "block");
        svgCatalog.css("display", "none");
    }
});

// Функция включения лампочки

let image = $(".our-advantages__form__image.dark");

$(window).on("scroll", () => {
    let scrollPos = $(this).scrollTop();
    let imageHeight = image.innerHeight();
    let imagePos = image.offset().top;

    let dark = $(".our-advantages__form__image.dark");

    if ($(window).width() > 0) {
        let h = 1 - (scrollPos + 100 - (imagePos - imageHeight)) / imageHeight;

        dark.css("opacity", h);
    }
});

// Функционал работы навигаций 1 и 2 уровней + фильтр
let navMainButton = $(".nav__main__button");
let headerBotSecond = $(".header__bot__second");
let filter = $(".filter");

$(navMainButton).each(function () {
    $(this).on("mouseenter", () => {
        console.log(1);
        let navMainButtonActive = $(this)[0];

        let navSecondButtons = showHeaderBotSecond(navMainButtonActive);

        $(navSecondButtons).each(function () {
            $(this).on("mouseenter", () => {
                let navSecondButtonActive = $(this)[0];
                showFilter(navSecondButtonActive);
            });
        });
    });
});

const showHeaderBotSecond = (navMainButtonActive) => {
    headerBotSecond.addClass("header__bot__second--active");
    let navMainButtonActiveId = navMainButtonActive;

    // TODO: Сделать появления элементов нижнего меню второго уровня в
    //       соответствии с активной кнопкой из первого

    let navSecondButtons = $(".nav__second__button");

    return navSecondButtons;
};

const showFilter = (navSecondButtonActive) => {
    filter.addClass("filter--active");

    let navSecondButtonActiveId = navSecondButtonActive;
    // TODO: Сделать появления элементов фильтра в
    //       соответствии с активной кнопкой из второго каталога
};

let filterButtonClose = $(".filter__button__close");

// Закрытие фильтра
$(filterButtonClose).mouseup(function (e) {
    filter.removeClass("filter--active");
});

$(document).mouseup(function (e) {
    let headerBotSecond = $(".header__bot__second");
    let filter = $(".filter");

    if (
        headerBotSecond.has(e.target).length === 0 &&
        filter.has(e.target).length === 0
    ) {
        filter.removeClass("filter--active");
        headerBotSecond.removeClass("header__bot__second--active");
    }
});

//

// let navSecondButton = $(".nav__second__button");

// $(navSecondButton).each(function () {
//     $(this).on("mouseenter", function () {
//         let filter = $(".filter");
//         filter.show();

//         let navSecondButton = $(".nav__second__button");
//     });
// });

let reviewsItemButton = $(".reviews__item");

$(reviewsItemButton).on("click", function () {
    let elementId = $(".default-switcher");
    let elementOffset = $(elementId).offset().top;

    let switcherHeaderItems = $('input[name="cardInfoSwitcher"]');

    switcherHeaderItems.each(function () {
        if (this.checked) {
            this.checked = false;
        }
    });

    let reviewHeaderItem = $("#reviews");

    $(".default-switcher__item--active").removeClass(
        "default-switcher__item--active"
    );

    $(".default-switcher__item.reviews").addClass(
        "default-switcher__item--active"
    );

    $("html, body").animate({
        scrollTop: elementOffset,
    });
});
