import './bootstrap';
import * as bootstrap from 'bootstrap';
import 'akar-icons-fonts';

const bsOffcanvas = new bootstrap.Offcanvas('#offcanvasNavbar');
const openCanvas = document.querySelector('header .navbar-toggler');

openCanvas.addEventListener('click', function () {
    bsOffcanvas.show();
});
