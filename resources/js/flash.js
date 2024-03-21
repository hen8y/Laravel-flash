import Alpine from 'alpinejs'

const notification = document.querySelector('.notification')
if (notification) {
    setTimeout(() => {
        notification.remove()
    }, flash.timeout)
}

Alpine.start();

Alpine.prefix("fsh-");
