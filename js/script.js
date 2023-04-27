/* Scroll fixed bar header */
window.onscroll = function () {
    clear_top_bar()
};
const fixed_bar = document.getElementById("fixed_bar");
const clear_fixed_top_bar = fixed_bar.offsetTop;

function clear_top_bar() {
    if (window.pageYOffset >= clear_fixed_top_bar) {
        fixed_bar.classList.add("clear_fixed_top_bar");
    } else {
        fixed_bar.classList.remove("clear_fixed_top_bar");
    }
};

/* Dark-light mode */
const body = document.querySelector('body');
const dark_light_toggle = document.querySelector('.dark_light_toggle');
const icon_change = document.querySelector('.dark_light_icon');

function cookie_dark_light_mode(value) {
    localStorage.setItem('dark-theme-variables', value);
}

function loading() {
    const darkmode = localStorage.getItem('dark-theme-variables');

    if (!darkmode) {
        cookie_dark_light_mode(false);
    } else if (darkmode == 'true') {
        body.classList.add('dark-theme-variables');
        icon_change.classList.add('fa-moon');
    }
}
loading();

dark_light_toggle.addEventListener('click', () => {
    body.classList.toggle('dark-theme-variables');
    icon_change.classList.add('animated');

    cookie_dark_light_mode(body.classList.contains('dark-theme-variables'));

    if (body.classList.contains('dark-theme-variables')) {
        icon_change.classList.remove('fa-sun');
        icon_change.classList.add('fa-moon');
    } else {
        icon_change.classList.remove('fa-moon');
        icon_change.classList.add('fa-sun');
    }

    setTimeout(() => {
        icon_change.classList.remove('animated');
    }, 500);
});

/* search-btn */
const searchBar = document.querySelector('.search-tool');
const input = document.querySelector('.search_bar-input');
const btn = document.querySelector('.search_btn');

searchBar.addEventListener('mouseover', addClass);
searchBar.addEventListener('mouseout', removeClass);

document.addEventListener('click', (event) => {
    if (event.target.classList[0] == 'search_bar-input') {
        searchBar.removeEventListener('mouseout', removeClass);
    } else {
        if (searchBar.classList.contains('search-tool')) {
            removeClass();
        }
        searchBar.addEventListener('mouseout', removeClass);
        input.value = "";
    }
});

function addClass() {
    searchBar.classList.add('search-tool--active-s');
    input.classList.add('search_bar-input--active-s');
    btn.classList.add('search_btn--active-s');
}

function removeClass() {
    searchBar.classList.remove('search-tool--active-s');
    input.classList.remove('search_bar-input--active-s');
    btn.classList.remove('search_btn--active-s');
}

/* Select menu */
const wrapper = document.querySelector('.menu_select_wrapper');

wrapper.addEventListener('click', () => {
    wrapper.classList.toggle('active');
});

/* Humburger toggle SP */
const sp_menu = document.querySelector('.sp_menu');
const sp_bottom_header = document.querySelector('.sp_bottom_header');
let menuOpen = false

sp_menu.addEventListener('click', () => {
    if (!menuOpen) {
        sp_menu.classList.add('open');
        menuOpen = true;
        sp_bottom_header.classList.add('show-now')
    } else {
        sp_menu.classList.remove('open');
        menuOpen = false;
        sp_bottom_header.classList.remove('show-now')
    }
});

/* back_top_page */
const back_top_page = document.querySelector('.back_top_page');

window.addEventListener("scroll", () => {
    if (window.pageYOffset > 100) {
        back_top_page.classList.add("active");
    } else {
        back_top_page.classList.remove("active");
    }
});