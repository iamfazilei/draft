document.getElementById('next').onclick = function(){
    const widthItem = document.querySelector('.item').offsetWidth;
    document.getElementById('formList').scrollLeft += widthItem;
}
document.getElementById('prev').onclick = function(){
    const widthItem = document.querySelector('.item').offsetWidth;
    document.getElementById('formList').scrollLeft -= widthItem;
}




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

window.onscroll = () => {
    menu.classList.remove('bx-x');
    navLinks.classList.remove('open');
};
