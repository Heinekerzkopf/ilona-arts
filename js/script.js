"use strict"

function imagesInit() {
    const images = document.querySelectorAll(".article__image");
    if (images.length) {
        images.forEach(image => {
            const imageItem = image.querySelector("img");
            const padding = imageItem.offsetHeight / imageItem.offsetWidth * 100;
            image.style.paddingBottom = `${padding}%`;
            imageItem.classList.add("init");
        });
    }
}


function gridInit() {
    const items = document.querySelector('.articles__items');
    const itemsGrid = new Isotope(items, {
        itemSelector: '.article',
        masonry: {
            fitWidth: true,
            gutter: 20
        }
    });

    document.addEventListener('click', documentActions);

    function documentActions(e) {
        const targetElement = e.target;
        if (targetElement.closest('.filter-articles__item')) {
            const filterItem = targetElement.closest('.filter-articles__item');
            const filterValue = filterItem.dataset.filter;
            const filterActiveItem = document.querySelector(".filter-articles__item.active");

            filterValue === "*" ? itemsGrid.arrange({ filter: `` }) : 
                itemsGrid.arrange({ filter: `[data-filter=${filterValue}]` })

            filterActiveItem.classList.remove('active');

            filterItem.classList.add('active');

            e.preventDefault();
        }
    }
}

window.addEventListener("load", windowLoad);

function windowLoad() {
    imagesInit();
    gridInit();
}

//========================================================================================================================================================

"use strict"

let btn = document.querySelector(".icon-menu");
let menu = document.querySelector(".menu__body");
const body = document.body;

btn.addEventListener("click", () => {
    btn.classList.toggle("active");
    menu.classList.toggle("body-active");
    body.classList.toggle("lock")
})

const header = document.querySelector('.header');
window.addEventListener('scroll', function () {
    if (window.scrollY > 53) {
        header.classList.add('scrolled');
        if (header.classList.contains('scrolled')) {
            document.querySelector(".header__logo-pic").style.cssText = 'width: 60px; height: 60px;'
        }
    } else {
        header.classList.remove('scrolled');
        document.querySelector(".header__logo-pic").style.cssText = 'width: 100px; height: 100px;'
    }
});

//========================================================================================================================================================
