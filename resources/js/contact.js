import intlTelInput from 'intl-tel-input';

document.addEventListener('DOMContentLoaded', function() {

const input = document.querySelector("#contactForm input#phone");
intlTelInput(input, {
    initialCountry: 'gb',
    separateDialCode: true,
});

});