flatpickr("[flat-timpicker]", {
    enableTime: true,
    noCalendar: true,
    dateFormat: "h:i K",
    time_24hr: false
});

$("[release-datepicker]").datepicker({
    dateFormat: "yy-mm-dd",
    changeMonth: true,
    changeYear: true
});



function openPanel() {
    document.getElementById('form_side_panel').classList.add('active');
    console.log("hello super sattta");
}

function closePanel() {
    document.getElementById('form_side_panel').classList.remove('active');
}