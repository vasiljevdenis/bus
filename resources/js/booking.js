import './dhtmlx-combobox/suite.min.js'

const itineraryDataset = [
    {
        value: "Austria"
    },
    {
        value: "Belgium"
    },
    {
        value: "Bulgaria"
    },
    {
        value: "Cyprus"
    }
]

const itinerary = new dhx.Combobox("itinerary", {
    label: "Itinerary", 
    placeholder: "Select tour itinerary",
    data: itineraryDataset,
    css: 'dhtmlx-booking'    
});

const guests = new dhx.Combobox("guests", {
    label: "Guests", 
    placeholder: "Select the number of guests",
    css: 'dhtmlx-booking',
    disabled: true
});

guests.data.parse(itineraryDataset);
guests.enable();

const table = new dhx.Combobox("table", {
    label: "Table requirements", 
    placeholder: "Select table type",
    data: itineraryDataset,
    css: 'dhtmlx-booking',
    disabled: true
});

const date = new dhx.Combobox("date", {
    label: "Date", 
    placeholder: "Select date",
    data: itineraryDataset,
    css: 'dhtmlx-booking',
    disabled: true
});

const time = new dhx.Combobox("time", {
    label: "Time", 
    placeholder: "Select time",
    data: itineraryDataset,
    css: 'dhtmlx-booking',
    disabled: true
});

itinerary.events.on("change", function(id){
    console.log(this.data.getItem(id).value);
});