document.addEventListener('DOMContentLoaded', () => {
    let headerMenu = document.querySelector('.header__nav');
    const modalDemo = document.querySelector('.modal');
    document.addEventListener('click', ({ target }) => {
        // burger
        if (target.classList.contains('burger')) {
            target.classList.toggle('_opened');
            headerMenu.classList.toggle('active');
        }
        if(target.classList.contains('header__demo')) {
            modalDemo.classList.add('active');
            modalDemo.animate([
                {opacity: 0},
                {opacity: 1}
            ], {duration: 300, easing: 'ease-in-out'});
        }
        if(target.classList.contains('modal') || target.classList.contains('modal__box-close')) {
            const animateModal = modalDemo.animate([
                {opacity: 1},
                {opacity: 0}
            ], {duration: 300, easing: 'ease-in-out'});
            animateModal.addEventListener('finish', () => modalDemo.classList.remove('active'));
        }
    });

    // footer top btn
    // const footerBtnToTop = document.querySelector('.footer__top');
    // footerBtnToTop.addEventListener('click', () => {
    //     window.scrollTo({
    //         top: 0,
    //         smooth: 'behavior'
    //     })
    // });

    // products tabs
    const productsSection = document.querySelector('.products');
    if(productsSection) {
        const tabsLinks = productsSection.querySelectorAll('.products__tabs-link');
        const tabsContents = productsSection.querySelectorAll('.products__tabs-content');
        tabsLinks.forEach(item => {
            item.addEventListener('click', function(){
                const itemId = this.getAttribute('data-id');
                tabsLinks.forEach(item => item.classList.remove('active'));
                tabsContents.forEach(item => item.classList.remove('active'));
                this.classList.add('active');
                const activeTabContent = productsSection.querySelector(`.products__tabs-content[data-id="${itemId}"]`);
                activeTabContent.classList.add('active');
            });
        });
    }

    // animation reviews
    const reviewsItems = document.querySelectorAll('.reviews__item');
    if(reviewsItems.length) {
        let bounds;

        function rotateToMouse(e) {
            const mouseX = e.clientX;
            const mouseY = e.clientY;
            const leftX = mouseX - bounds.x;
            const topY = mouseY - bounds.y;
            const center = {
                x: leftX - bounds.width / 2,
                y: topY - bounds.height / 2
            }
            const distance = Math.sqrt(center.x**2 + center.y**2);
            e.target.style.transform = `
                rotate3d(
                ${center.y / 100},
                ${-center.x / 100},
                0,
                ${Math.log(distance)* 2.5}deg
                )
            `;
        }
        reviewsItems.forEach(item => {
            item.addEventListener('mouseenter', function(){
                bounds = item.getBoundingClientRect();
                document.addEventListener('mousemove', rotateToMouse);
            });
            item.addEventListener('mouseleave', function(){
            document.removeEventListener('mousemove', rotateToMouse);
                item.style.transform = '';
            });
        })
    }

    // animation title product
    let slides = document.querySelectorAll('.product__title span');
    let currentSlide = 0;
    
    function nextSlide() {
      slides[currentSlide].classList.remove('active');
      currentSlide = (currentSlide + 1) % slides.length;
      slides[currentSlide].classList.add('active');
    }

    if(slides.length) {
        setInterval(nextSlide, 3000); // Изменяет слайд каждые 3 секунды
    }

});

window.onload = () => {
    $.fn.setCursorPosition = function(pos) {
        if ($(this).get(0).setSelectionRange) {
            $(this).get(0).setSelectionRange(pos, pos)
        } else if ($(this).get(0).createTextRange) {
            var range = $(this).get(0).createTextRange()
            range.collapse(true)
            range.moveEnd('character', pos)
            range.moveStart('character', pos)
            range.select()
        }
    };
    $('input[type="tel"]').on('click', function() {
        $(this).setCursorPosition(3)
    }).mask('+7 (999) 999 99 99');

    // $('.way').waypoint({
    //     handler: function() {
    //         $(this.element).addClass("way--active");

    //     },
    //     offset: '95%'
    // });
    var controller = new ScrollMagic.Controller();

    // Находим все элементы, которые мы хотим анимировать
    var elements = document.querySelectorAll('.way');
    
    // Проходим по каждому элементу и создаем для него сцену
    elements.forEach(function (element) {
        new ScrollMagic.Scene({
            triggerElement: element, // триггером является сам элемент
            triggerHook: 0.8, // элемент активируется, когда он на 90% виден
            reverse: false // анимация только один раз
        })
        .setClassToggle(element, "way--active") // добавляем класс
        .addTo(controller);
    });
    const clientsSlider = new Swiper('.clients__items', {
        slidesPerView: 6,
        spaceBetween: 20,
        loop: true,
        autoplay: true,
        breakpoints: {
            0: {
                slidesPerView: 2,
            },
            577: {
                slidesPerView: 3,
            },
            992: {
                slidesPerView: 4,
            },
            1360: {
                slidesPerView: 6,
            },
        },
    });
    const bannerSlider = new Swiper('.banner__slider', {
        slidesPerView: 1,
        effect: 'fade',
        loop: true,
        speed: 500,
        autoplay: {
            delay: 7000,
        },
        pauseOnMouseEnter: true,
        autoHeight: true,
        navigation: {
            prevEl: '.banner__slider-arrow.prev',
            nextEl: '.banner__slider-arrow.next',
        },
        keyboard: {
            enabled: true,
            onlyInViewport: false,
          },
    });

    // const reviewsSlider = new Swiper('.reviews__items', {
    //     slidesPerView: 5,
    //     spaceBetween: 20,
    //     loop: false,
    //     autoplay: false,
    //     breakpoints: {
    //         0: {
    //             slidesPerView: 1,
    //         },
    //         420: {
    //             slidesPerView: 2,
    //         },
    //         577: {
    //             slidesPerView: 3,
    //         },
    //         992: {
    //             slidesPerView: 4,
    //         },
    //         1240: {
    //             slidesPerView: 5,
    //         },
    //     },
    // });
    var activeAccordion = null; // переменная для хранения ссылки на текущий открытый блок

    $(".js-accordeons__item-body").hide(); // скрываем все блоки с контентом при загрузке страницы

    $(".js-accordeons__item-title").click(function () {
        // при клике на заголовок
        var accordionBody = $(this).next(".js-accordeons__item-body"); // находим блок контента, соответствующий данному заголовку
        if (accordionBody.is(":hidden")) {
            // если контент скрыт, то
            if (activeAccordion) {
                // если уже есть открытый блок
                activeAccordion.slideToggle(); // скрываем его
                activeAccordion
                    .prev(".js-accordeons__item-title")
                    .removeClass("active"); // удаляем класс "active" у соответствующего заголовка
            }
            $(this).addClass("active"); // открываем текущий блок
            accordionBody.slideToggle(); // плавно отображаем контент
            activeAccordion = accordionBody; // сохраняем ссылку на текущий открытый блок
        } else {
            // иначе
            $(this).removeClass("active"); // закрываем текущий блок
            accordionBody.slideToggle(); // плавно скрываем контент
            activeAccordion = null; // удаляем ссылку на открытый блок
        }
    });
};

// loader func
function submitForm() {
    $('#form_loader').show();
}
//Alert form
let alertt = document.querySelector(".alert--fixed");
let alertClose = document.querySelectorAll(".alert--close")
for (let item of alertClose) {
    item.addEventListener('click', function(event) {
        alertt.classList.remove("alert--active")
        alertt.classList.remove("alert--warning")
        alertt.classList.remove("alert--error")
    })
}