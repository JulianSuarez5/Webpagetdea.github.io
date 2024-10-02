document.addEventListener('DOMContentLoaded', function() {
    const next = document.querySelector('#competencias #next');
    const prev = document.querySelector('#competencias #prev');
    const slide = document.querySelector('#competencias #slide');

    next.onclick = function() {
        let lists = slide.querySelectorAll('.item');
        slide.appendChild(lists[0]);
    }

    prev.onclick = function() {
        let lists = slide.querySelectorAll('.item');
        slide.prepend(lists[lists.length - 1]);
    }
});