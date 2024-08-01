let navMainButtonHeader = document.querySelectorAll(".nav__main__button");
let navSecondButtonHeader = document.querySelectorAll(".nav__second__button");

let mobileMenuItems = document.querySelectorAll(".mobile__menu__items");

let mobileMenuWindow = document.querySelector(".mobile__menu");
let mobileCatalogWindow = document.querySelector(".mobile__catalog");

navMainButtonHeader.forEach((el) => {
    el.addEventListener("mouseover", () => {
        elId = el.getAttribute("data-id");

        let navSecondInnerItems = document.querySelectorAll(
            ".nav__second__inner__item"
        );

        navSecondInnerItems.forEach((el2) => {
            el2.style.display = "none";
        });

        let navSecondInnerItem = document.querySelector(
            `.nav__second__inner__item[data-id="${elId}"]`
        );

        navSecondInnerItem.style.display = "block";
    });
});

navSecondButtonHeader.forEach((el) => {
    el.addEventListener("mouseover", () => {
        elId = el.getAttribute("data-section");

        let navFilterItems = document.querySelectorAll(
            ".filter__content__inner"
        );

        navFilterItems.forEach((el2) => {
            el2.style.display = "none";
        });

        let navFilterItem = document.querySelector(
            `.filter__content__inner[section-id="${elId}"]`
        );

        navFilterItem.style.display = "flex";
    });
});

mobileMenuItems.forEach((el) => {
    if (el.hasAttribute("visibleblock")) {
        el.style.display = "flex";
    }
});

const showMobileCatalog = () => {
    let navFirstLevelButtonMobile = mobileCatalogWindow.querySelectorAll(
        ".mobile__catalog__item.catalog--button"
    );

    navFirstLevelButtonMobile.forEach((el) => {
        el.addEventListener("click", () => {
            elId = el.getAttribute("data-section-mobile");

            mobileMenuItems.forEach((el2) => {
                if (!el2.hasAttribute("visibleblock")) {
                    el2.style.display = "none";
                }
            });

            let mobileMenuItemsActiveBlock =
                mobileCatalogWindow.querySelectorAll(
                    `.mobile__menu__items[mobile-section-id="${elId}"]`
                );

            mobileMenuItemsActiveBlock.forEach((el) => {
                el.style.display = "flex";
            });
        });
    });
};

const showMobileCatalogMenu = () => {
    let navFirstLevelButtonMobile = mobileMenuWindow.querySelectorAll(
        ".mobile__catalog__item"
    );

    navFirstLevelButtonMobile.forEach((el) => {
        el.addEventListener("click", () => {
            if (el.classList.contains("catalog--button")) {
                let catalogFirstLevel = mobileMenuWindow.querySelector(
                    ".mobile__menu__items.catalog--first__level"
                );
                catalogFirstLevel.style.display = "flex";

                elId = el.getAttribute("data-section-mobile");

                mobileMenuItems.forEach((el2) => {
                    if (!el2.hasAttribute("visibleblock")) {
                        el2.style.display = "none";
                    }
                });

                let mobileMenuItemsActiveBlock =
                    mobileMenuWindow.querySelectorAll(
                        `.mobile__menu__items.catalog--section[mobile-section-id="${elId}"]`
                    );

                mobileMenuItemsActiveBlock.forEach((el2) => {
                    el2.style.display = "flex";
                });
            } else {
                mobileMenuItems.forEach((el2) => {
                    if (
                        !el2.hasAttribute("visibleblock") &&
                        !el2.hasAttribute("catalogMenu")
                    ) {
                        el2.style.display = "none";
                    }
                });
            }
        });
    });
};

showMobileCatalog();
showMobileCatalogMenu();
