document.addEventListener("DOMContentLoaded", function(event) {
    const accordions = document.querySelectorAll('.accordion')
    accordions.forEach(function(accordion) {
        const info = accordion.querySelector('.accordion__info')
        info.addEventListener('click', function(e) {
            const isOpened = accordion.classList.contains('accordion__open')
            if (isOpened) {
                accordion.classList.remove('accordion__open')
            } else {
                accordion.classList.add('accordion__open')
            }
        })
    })
});