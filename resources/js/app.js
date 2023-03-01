import './bootstrap';
import * as bootstrap from 'bootstrap';
import 'akar-icons-fonts';
import intlTelInput from 'intl-tel-input';

const bsOffcanvas = new bootstrap.Offcanvas('#offcanvasNavbar');
const openCanvas = document.querySelector('header .navbar-toggler');

openCanvas.addEventListener('click', function () {
    bsOffcanvas.show();
});

const input = document.querySelector("#feedback input#phone");
intlTelInput(input, {
    initialCountry: 'gb',
    separateDialCode: true,
});
