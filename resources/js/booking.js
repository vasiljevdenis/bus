import './dhtmlx-combobox/suite.min.js'
import intlTelInput from 'intl-tel-input';

document.addEventListener('DOMContentLoaded', function () {

    // Initialization
    const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    const itinerary = new window.dhx.Combobox("itinerary", {
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

        const guests = new window.dhx.Combobox("guests", {
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

        const table = new window.dhx.Combobox("table", {
            label: "Table requirements",
            placeholder: "Select table type",
            css: 'dhtmlx-booking',
            disabled: true
        });

        const date = new window.dhx.Calendar("date", {
            css: "dhx_widget--bordered custom-calendar",
            dateFormat: "%d.%m.%Y",
            disabledDates: function (date) {
                return date < new Date(Date.now());
            },
        });

        const time = new window.dhx.Combobox("time", {
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
                    let data = new FormData();
                    data.append('itinerary', document.querySelector('[data-id="itinerary"]').dataset.value);
                    data.append('guests', document.querySelector('[data-id="guests"]').dataset.value);
                    data.append('date', document.querySelector('[data-id="date"]').dataset.value);
                    data.append('time', document.querySelector('[data-id="time"]').dataset.value);
                    let totalArr = [];
                    let seats = [];
                    let seatDivs = document.querySelectorAll('div[data-id="seats"] div[data-value] p');
                    for (let i = 0; i < seatDivs.length; i++) {
                        if (i === 0 || i % 2 === 0) {
                            seats.push({seat: seatDivs[i].innerHTML, price: seatDivs[i+1].innerHTML});
                            totalArr.push(+(seatDivs[i+1].innerHTML.slice(1)));
                        }
                    }
                    let food = [];
                    let foodDivs = document.querySelectorAll('div[data-id="food"] div[data-value] p');
                    for (let i = 0; i < foodDivs.length; i++) {
                        if (i === 0 || i % 3 === 0) {
                            food.push({name: foodDivs[i].innerHTML, count: foodDivs[i+1].innerHTML, price: foodDivs[i+2].innerHTML});
                            totalArr.push(+(foodDivs[i+2].innerHTML.slice(1)) * +(foodDivs[i+1].innerHTML));
                        }
                    }
                    let total = totalArr.reduce((acc, number) => acc + number, 0).toFixed(2);
                    data.append('seats', JSON.stringify(seats));
                    data.append('food', JSON.stringify(food));
                    data.append('total', total);
                    fetch(`/sendmail`, {
                        method: "POST",
                        headers: {
                            'X-CSRF-TOKEN': token
                        },
                        body: data
                    })
                    .then((response) => response.text())
                    .then((data) => {
                        console.log(data);
                    });
                }
                window.scrollTo(0, 0);
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

        let foodArr = [
            {
                id: 1,
                title: 'Soft drinks',
                items: [
                    {
                        item_id: 1,
                        name: 'Still water',
                        count: '180 ml',
                        price: 0.49
                    },
                    {
                        item_id: 2,
                        name: 'Sparkling water',
                        count: '180 ml',
                        price: 0.49
                    },
                    {
                        item_id: 3,
                        name: 'Coca-cola',
                        count: '180 ml',
                        price: 0.49
                    },
                    {
                        item_id: 4,
                        name: 'Milk',
                        count: '180 ml',
                        price: 0.49
                    }
                ]
            },
            {
                id: 2,
                title: 'Hot drinks',
                items: [
                    {
                        item_id: 1,
                        name: 'Green tea',
                        count: '180 ml',
                        price: 0.49
                    },
                    {
                        item_id: 2,
                        name: 'Black tea',
                        count: '180 ml',
                        price: 0.49
                    }
                ]
            },
            {
                id: 3,
                title: 'Beer',
                items: [
                    {
                        item_id: 1,
                        name: 'Kronenbourg 1664 (France)',
                        count: '180 ml',
                        price: 0.49
                    }
                ]
            },
            {
                id: 4,
                title: 'Sparkling wine (by glass)',
                items: [
                    {
                        item_id: 1,
                        name: 'Henri Giraud Hommage á François Hémart Grand Cru N.V.',
                        count: '200 ml',
                        price: 45
                    },
                    {
                        item_id: 2,
                        name: 'Prosecco Extra Dry Villa Domiziano N.V.',
                        count: '200 ml',
                        price: 45
                    }
                ]
            },
            {
                id: 5,
                title: 'Wine (by Glass)',
                items: [
                    {
                        item_id: 1,
                        name: 'Riesling, Karl Schaefer, Germany 2017',
                        count: '200 ml',
                        price: 45
                    },
                    {
                        item_id: 2,
                        name: 'Serre Nuove, Tenuta dell’ Ornellaia Italy 2017',
                        count: '200 ml',
                        price: 45
                    }
                ]
            },
            {
                id: 6,
                title: 'Sparkling wine (by bottle)',
                items: [
                    {
                        item_id: 1,
                        name: 'Henri Giraud Hommage á François Hémart Grand Cru N.V.',
                        count: '900 ml',
                        price: 180
                    },
                    {
                        item_id: 2,
                        name: 'Prosecco Extra Dry Villa Domiziano N.V.',
                        count: '900 ml',
                        price: 180
                    }
                ]
            },
            {
                id: 7,
                title: 'Wine (by bottle)',
                items: [
                    {
                        item_id: 1,
                        name: 'Riesling, Karl Schaefer, Germany 2017',
                        count: '900 ml',
                        price: 180
                    },
                    {
                        item_id: 2,
                        name: 'Serre Nuove, Tenuta dell’ Ornellaia Italy 2017',
                        count: '900 ml',
                        price: 180
                    }
                ]
            }
        ];

        let addFood = document.querySelectorAll('button[data-id="add"]');

        addFood.forEach(el => {
            el.addEventListener('click', function() {
                let counter = '<p class="color-text fw-semibold ms-auto me-auto mb-0" data-id="counter" style="user-select: none;"><i class="bi bi-dash fs-5 c-p" data-id="minus"></i><span class="ps-3 pe-3" data-id="value">1</span><i class="bi bi-plus fs-5 c-p" data-id="plus"></i></p>';
                let parent = this.parentNode;
                const hrFood = document.querySelector('hr[data-id="food"]');
                const h2Food = document.querySelector('h2[data-id="food"]');
                const divFood = document.querySelector('div[data-id="food"]');
                foodTrigger(parent, divFood, 1);
                parent.insertAdjacentHTML('beforeend', counter);
                this.classList.add('d-none');
                parent.querySelector('[data-id="plus"]').addEventListener('click', function() {
                    let n = +parent.querySelector('[data-id="value"]').innerHTML + 1;
                    parent.querySelector('[data-id="value"]').innerHTML = n;
                    foodTrigger(parent, divFood, n);
                });
                parent.querySelector('[data-id="minus"]').addEventListener('click', function() {
                    let n = +parent.querySelector('[data-id="value"]').innerHTML - 1;
                    parent.querySelector('[data-id="value"]').innerHTML = n;
                    if (+parent.querySelector('[data-id="value"]').innerHTML < 1) {
                        parent.querySelector('[data-id="counter"]').remove();
                        parent.querySelector('[data-id="add"]').classList.remove('d-none');
                    }
                    foodTrigger(parent, divFood, n);
                });
                if (divFood.innerHTML.trim().length > 0 && divFood.classList.contains('d-none')) {
                    hrFood.classList.remove('d-none');
                    h2Food.classList.remove('d-none');
                    divFood.classList.remove('d-none');
                }
            });
        });

        function foodTrigger(el, w, n) {
            const id = +el.dataset.id;
            const parentId = +el.dataset.parent;
            let parent = foodArr.filter(el => {
                return el.id === parentId
            })[0];
            let item = parent.items.filter(el => {
                return el.item_id === id
            })[0];
            const html = `<div class="col-7" data-value="${parentId}${id}"><p class="color-text">${item.name}</p></div><div class="col-2" data-value="${parentId}${id}"><p class="color-text">${n}</p></div><div class="col-3" data-value="${parentId}${id}"><p class="color-text fw-semibold text-end">£${(item.price * n).toFixed(2)}</p></div>`;
            if (document.querySelector(`#summary [data-value="${parentId}${id}"]`)) {
                document.querySelector(`#summary [data-value="${parentId}${id}"]`).remove();
                document.querySelector(`#summary [data-value="${parentId}${id}"]`).remove();
                document.querySelector(`#summary [data-value="${parentId}${id}"]`).remove();
            }
            if (n > 0) {
                w.insertAdjacentHTML('beforeend', html);
            }                            
        };

});