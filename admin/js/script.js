let i;
let select = document.getElementsByClassName("select");
let selectmenu = 1;

function list(n) {
    selet(selectmenu = n);
}

function selet(n) {
    for(i = 0; i < select.length; i++) {
        select[i].className = select[i].className.replace(" active", "");
    }
    select[selectmenu-1].className += " active";
}
/* end of active List */

const sideMenu = document.querySelector("aside");
const menubtn = document.querySelector("#menu-btn");
const closebtn = document.querySelector("#close-btn");
const themeToggler = document.querySelector(".theme-toggler");

/* show sidebar */
menubtn.addEventListener('click', () => {
    sideMenu.style.display = 'block';
})
/* close sidebar */
closebtn.addEventListener('click', () => {
    sideMenu.style.display = 'none';
})
/* change theme */
themeToggler.addEventListener('click', () => {
    document.body.classList.toggle('dark-theme-variables');

    themeToggler.querySelector('span:nth-child(1)').classList.toggle('active-theme');
    themeToggler.querySelector('span:nth-child(2)').classList.toggle('active-theme');
})