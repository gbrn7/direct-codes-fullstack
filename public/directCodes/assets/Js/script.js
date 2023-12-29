var swiper = new Swiper(".mySwiper-1", {
    slidesPerView: 1,
    spaceBetween: 22,
    freeMode: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    autoplay: {
        delay: 2000,
    },
    breakpoints: {
        768: {
            slidesPerView: 2,
        },
        1200: {
            slidesPerView: 4,
        }
    },
});

var swiper = new Swiper(".mySwiper-2", {
    slidesPerView: 1,
    spaceBetween: 22,
    freeMode: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    autoplay: {
        delay: 2200,
    },
    breakpoints: {
        768: {
            slidesPerView: 2,
        },
        1200: {
            slidesPerView: 4,
        }
    },
});

var swiper = new Swiper(".mySwiper-3", {
    slidesPerView: 1,
    spaceBetween: 22,
    freeMode: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    autoplay: {
        delay: 2400,
    },
    breakpoints: {
        768: {
            slidesPerView: 2,
        },
        1200: {
            slidesPerView: 4,
        }
    },
});

function handleClickMenu(e) {
    const navItem = document.querySelectorAll('.item-menu');
    console.log('test');
    navItem.forEach(function (v) {
        v.classList.remove('active');
    });
    e.closest('.item-menu').classList.add('active');
}