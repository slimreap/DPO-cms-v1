import 'flowbite';

export default initFlowbite();

window.document.addEventListener('turbo:load', (event) => {
    Flowbite.connect();
});