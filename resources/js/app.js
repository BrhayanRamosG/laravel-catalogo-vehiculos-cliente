require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

if (localStorage.theme === 'dark' || (!'theme' in localStorage && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    document.querySelector('html').classList.add('dark')
} else if (localStorage.theme === 'dark') {
    document.querySelector('html').classList.add('dark')
}

document.querySelectorAll(".setTheme").forEach(item =>
    item.addEventListener("click", () => {
        let htmlClasses = document.querySelector('html').classList;
        if (localStorage.theme == 'dark') {
            htmlClasses.remove('dark');
            localStorage.theme = ''
        } else {
            htmlClasses.add('dark');
            localStorage.theme = 'dark';
        }
    })
)