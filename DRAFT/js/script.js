var swiper = new Swiper('.swiper-container', {
    spaceBetween: 30,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    breakpoints: {
        1440: {
            slidesPerView: 6, 
        },
        1024: {
            slidesPerView: 5, 
        },
        768: {
            slidesPerView:3, 
        },
        
        425: {
            slidesPerView: 2,
        }
    },
});

let lastScrollTop = 0;
const header = document.querySelector("header");

window.addEventListener("scroll", function() {
    let scrollTop = window.scrollY;
    if (scrollTop > lastScrollTop && scrollTop > 100) {
        header.classList.add("sticky");
        header.classList.remove("hidden", "at-top");
    } else if (scrollTop < lastScrollTop && scrollTop > 0) {
        header.classList.add("hidden");
    } else if (scrollTop === 0) {
        header.classList.remove("hidden", "sticky");
        header.classList.add("at-top");
    }
    lastScrollTop = scrollTop;
});

let navLinks = document.querySelector('.nav-links');
let menu = document.querySelector('#menu-icon');

menu.onclick = () => {
    menu.classList.toggle('bx-x');
    navLinks.classList.toggle('open');
};


document.addEventListener('DOMContentLoaded', function() {
    const sections = document.querySelectorAll('section');
    const navLinks = document.querySelectorAll('.nav-links a');

    function activateSection(sectionId) {
        sections.forEach(section => {
            if (section.id === sectionId) {
                section.classList.add('active');
            } else {
                section.classList.remove('active');
            }
        });
    }

    navLinks.forEach(link => {
        link.addEventListener('click', function(event) {
            event.preventDefault();
            const targetId = this.getAttribute('href').substring(1);
            activateSection(targetId);
            document.getElementById(targetId).scrollIntoView({ behavior: 'smooth' });
        });
    });

    // Activate the first section by default
    if (sections.length > 0) {
        sections[0].classList.add('active');
    }
});



document.addEventListener('DOMContentLoaded', function() {
    const homeSection = document.querySelector('.home');

    function checkIfHomeInView() {
        const rect = homeSection.getBoundingClientRect();
        if (rect.top >= 0 && rect.bottom <= window.innerHeight) {
            homeSection.classList.add('home-active');
        } else {
            homeSection.classList.remove('home-active');
        }
    }

    window.addEventListener('scroll', checkIfHomeInView);
    checkIfHomeInView(); 
});
