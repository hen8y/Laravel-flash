import Alpine from 'alpinejs'

Alpine.prefix("fsh-");
Alpine.start();


if(!window.flashNotify) {
    const flashNotify = document.querySelector('.notification');
    if (flashNotify) {
        setTimeout(() => {
            flashNotify.remove();
        }, flash.timeout);
    }
}

