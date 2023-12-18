let list = document.querySelectorAll('.list');
const windowPathName = window.location.pathname;
let hiddenPath = '/attendence-project/app/pages/';
list.forEach(link => {
    if (link.href.includes(windowPathName)) {
        removeClass();
        link.classList.add('active');
    }
})

function removeClass() {
    list.forEach(link => {
        link.classList.remove('active');
    });
}
