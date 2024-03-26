import Alpine from 'alpinejs'

(function() {
    let flashNotify = document.querySelector('.notification');
    if (flashNotify) {
        setTimeout(() => {
            flashNotify.remove();
        }, flash.timeout);
    }
})();
Alpine.start();

Alpine.prefix("fsh-");
