import Alpine from 'alpinejs'
 
window.Alpine = Alpine
Alpine.start()

const notification = document.querySelector('.notification')
if (notification) {
    setTimeout(() => {
        notification.remove()
    }, flash.timeout)
}
