document.addEventListener("DOMContentLoaded", function() {
    var navs = document.querySelector('.navs');
    var stickyNavs = document.querySelector('.sticky-navs');

    window.onscroll = function() {
        stickyNavsLogic();
    };

    function stickyNavsLogic() {
        if (window.pageYOffset > navs.offsetTop && !stickyNavs.contains(navs)) {
            stickyNavs.appendChild(navs.cloneNode(true));
            stickyNavs.style.display = 'flex';
        } else if (window.pageYOffset <= navs.offsetTop && stickyNavs.contains(navs)) {
            stickyNavs.innerHTML = ''; // Eliminar contenido si no está en pantalla
            stickyNavs.style.display = 'none';
        }
    }

    // Llama a la función inicialmente para establecer el estado inicial
    stickyNavsLogic();
});

