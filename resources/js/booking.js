import './dhtmlx-combobox/suite.min.js'
import intlTelInput from 'intl-tel-input';

document.addEventListener('DOMContentLoaded', function () {

    // Initialization
    const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    const itinerary = new dhx.Combobox("itinerary", {
        label: "Itinerary",
        placeholder: "Select tour itinerary",
        css: 'dhtmlx-booking'
    });
    const itineraryDataset = [{
            id: 1,
            title: "Westminster",
            duration: "About 1 hour 20 minutes",
            languages: ["English", "German", "French", "Spanish", "Chinese", "Russian"],
            departure_point: "Piccadilly, Green Park corner, near the Ritz Hotel",
            departure_time: ["10:00", "16:00", "20:00"]
        },
        {
            id: 2,
            title: "Tower of London",
            duration: "About 1 hour 20 minutes",
            languages: ["English", "German", "French", "Spanish", "Chinese", "Russian"],
            departure_point: "Piccadilly, Green Park corner, near the Ritz Hotel",
            departure_time: ["10:00", "16:00", "20:00"]
        }
    ];
    let initialDataset;
    // fetch(`/getitineraries`, {
    //         method: "GET",
    //         headers: {
    //             'X-CSRF-TOKEN': token
    //         }
    //     })
    //     .then((response) => response.json())
    //     .then((data) => {
            // itineraryDataset = data;
            initialDataset = itineraryDataset.map(el => {
                return {
                    value: el.title
                }
            });
            itinerary.data.parse(initialDataset);
        // });

        const guests = new dhx.Combobox("guests", {
            label: "Guests",
            placeholder: "Select the number of guests",
            css: 'dhtmlx-booking',
            data: [{
                value: "1"
            }, {
                value: "2"
            }, {
                value: "3"
            }, {
                value: "4"
            }, {
                value: "5"
            }, {
                value: "6+"
            }],
            disabled: true
        });

        const table = new dhx.Combobox("table", {
            label: "Table requirements",
            placeholder: "Select table type",
            css: 'dhtmlx-booking',
            disabled: true
        });

        const date = new dhx.Calendar("date", {
            css: "dhx_widget--bordered custom-calendar",
            dateFormat: "%d.%m.%Y",
            disabledDates: function (date) {
                return date < new Date(Date.now());
            },
        });

        const time = new dhx.Combobox("time", {
            label: "Time",
            placeholder: "Select time",
            css: 'dhtmlx-booking',
            disabled: true
        });

        const input = document.querySelector("#bookingForm input#phone");
        intlTelInput(input, {
            initialCountry: 'gb',
            separateDialCode: true,
        });

        itinerary.events.on("change", function (id) {
            if (id) {
                const selectedValue = this.data.getItem(id).value;
                let selectedItinerary = itineraryDataset.filter(el => {
                    return el.title === selectedValue
                })[0];
                guests.clear();
                table.clear();
                date.clear();
                document.querySelector('#dateInp').value = "";
                time.clear();
                guests.enable();
                table.data.parse(selectedItinerary.languages.map(el => {
                    return {
                        value: el
                    }
                }));
                table.enable();
                time.data.parse(selectedItinerary.departure_time.map(el => {
                    return {
                        value: el
                    }
                }));
                time.enable();
                document.querySelector('#disabilities').removeAttribute('disabled');
                document.querySelector('#dateInp').removeAttribute('disabled');
                document.querySelector('label[for="dateInp"]').classList.remove('disabled');
                document.querySelector('#promo').removeAttribute('disabled');
                document.querySelector('label[for="promo"]').classList.remove('disabled');
                document.querySelector('#promoBtn').removeAttribute('disabled');
                document.querySelector('#gift').removeAttribute('disabled');
                document.querySelector('label[for="gift"]').classList.remove('disabled');
                document.querySelector('#giftBtn').removeAttribute('disabled');
            }
        });
        guests.events.on("change", function (id) {
            if (id) {
                const selectedValue = this.data.getItem(id).value;
                if (selectedValue === "6+") {
                    location.href = '/contact';
                }
            }
            checkFields();
        });

        date.events.on('change', function () {
            updateInput();
        });
        table.events.on('change', function () {
            checkFields();
        });
        date.events.on('change', function () {
            checkFields();
        });
        time.events.on('change', function () {
            checkFields();
        });

        function updateInput() {
            const input = document.querySelector('input#dateInp');
            let newValue = date.getValue();
            input.value = newValue;
        }    

        let nextBtns = document.querySelectorAll('.next');
        function checkFields() {
            let val1 = guests.getValue();
            let val2 = table.getValue();
            let val3 = date.getValue();
            let val4 = time.getValue();

            if (val1 && val2 && val3 && val4) {
                if (val1.length > 0 && val2.length > 0 && val3.length > 0 && val4.length > 0) {
                    nextBtns[0].removeAttribute('disabled');
                }
            } else {
                nextBtns[0].setAttribute('disabled', 'disabled');
            }
        }

        // Next events

        let steps = document.querySelectorAll('.step');
        let progressBar = document.querySelector('.progress-bar');
        let checkpoint = document.querySelectorAll('.progress .checkpoint');

        nextBtns.forEach((el, i) => {
            el.addEventListener('click', function() {
                if (i === 0) {
                    steps[i].classList.add('d-none');
                    steps[i+1].classList.remove('d-none');
                    progressBar.style.width = '33%';
                    checkpoint[i+1].classList.add('active');
                    fillSummary();
                } else if (i === 1) {
                    steps[i+1].classList.add('d-none');
                    steps[i+2].classList.remove('d-none');
                    progressBar.style.width = '67%';
                    checkpoint[i+1].classList.add('active');
                } else if (i === 2) {
                    steps[i+1].classList.add('d-none');
                    steps[i+2].classList.remove('d-none');
                    progressBar.style.width = '100%';
                    checkpoint[i+1].classList.add('active');
                }
            });
        });

        let selectedSeats = {
            amount: 0,
            selected: 0
        };

        function fillSummary() {
            const summary = document.querySelector('#summary');
            let i = itinerary.data.getItem(itinerary.getValue()).value;;
            summary.querySelector('[data-id="itinerary"]').innerHTML = i;
            summary.querySelector('[data-id="itinerary"]').dataset.value = i;
            let g = guests.data.getItem(guests.getValue()).value;
            summary.querySelector('[data-id="guests"]').innerHTML = g;
            summary.querySelector('[data-id="guests"]').dataset.value = g;
            selectedSeats.amount = +g;
            let d = date.getValue();
            summary.querySelector('[data-id="date"]').innerHTML = d;
            summary.querySelector('[data-id="date"]').dataset.value = d;
            let t = time.data.getItem(time.getValue()).value;
            summary.querySelector('[data-id="time"]').innerHTML = t;
            summary.querySelector('[data-id="time"]').dataset.value = t;
        }

        // Seats

        let seats = document.querySelectorAll('.seat:not(.taken)');

        seats.forEach(el => {
            el.addEventListener('click', function() {
                if (selectedSeats.selected < selectedSeats.amount && !this.classList.contains('selected')) {
                    this.classList.add('selected');
                    selectedSeats.selected++;          
                    let html = `<div class="col-6" data-value="${this.id}"><p class="color-text">${this.id}</p></div><div class="col-6" data-value="${this.id}"><p class="color-text fw-semibold text-end">£50</p></div>`;
                    document.querySelector('#summary [data-id="seats"]').insertAdjacentHTML('beforeend', html);     
                } else if (this.classList.contains('selected')) {
                    this.classList.remove('selected');
                    selectedSeats.selected--;
                    document.querySelector(`#summary [data-value="${this.id}"]`).remove();
                    document.querySelector(`#summary [data-value="${this.id}"]`).remove();
                }
                document.querySelector(`#summary [data-id="totalSeats"]`).innerHTML = "£" + 50 * selectedSeats.selected;
                document.querySelector(`#summary [data-id="totalSeats"]`).dataset.value = 50 * selectedSeats.selected;
                if (selectedSeats.selected === selectedSeats.amount) {
                    nextBtns[1].removeAttribute('disabled');
                } else {
                    nextBtns[1].setAttribute('disabled', 'disabled');
                }
            });
        });

        // Food

        let addFood = document.querySelectorAll('button[data-id="add"]');

        addFood.forEach(el => {
            el.addEventListener('click', function() {
                let counter = '<p class="color-text fw-semibold ms-auto me-auto mb-0" data-id="counter" style="user-select: none;"><i class="bi bi-dash fs-5 c-p" data-id="minus"></i><span class="ps-3 pe-3" data-id="value">1</span><i class="bi bi-plus fs-5 c-p" data-id="plus"></i></p>';
                let parent = this.parentNode;
                parent.insertAdjacentHTML('beforeend', counter);
                this.classList.add('d-none');
                parent.querySelector('[data-id="plus"]').addEventListener('click', function() {
                    parent.querySelector('[data-id="value"]').innerHTML = +parent.querySelector('[data-id="value"]').innerHTML + 1;
                });
                parent.querySelector('[data-id="minus"]').addEventListener('click', function() {
                    parent.querySelector('[data-id="value"]').innerHTML = +parent.querySelector('[data-id="value"]').innerHTML - 1;
                    if (+parent.querySelector('[data-id="value"]').innerHTML < 1) {
                        parent.querySelector('[data-id="counter"]').remove();
                        parent.querySelector('[data-id="add"]').classList.remove('d-none');
                    }
                });
            });
        });

});