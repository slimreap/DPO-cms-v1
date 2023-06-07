import 'boxicons'
import 'flowbite'
import Alpine from 'alpinejs'
import FormsAlpinePlugin from '../../vendor/filament/forms/dist/module.esm'
import NotificationsAlpinePlugin from '../../vendor/filament/notifications/dist/module.esm'
 
Alpine.plugin(FormsAlpinePlugin)
Alpine.plugin(NotificationsAlpinePlugin)
 

Alpine.store('modalcard', {
    on: true,
        
    open() {
        this.on = true
    },
    close() {
        this.on = false
    }

})

window.Alpine = Alpine
 
Alpine.start()