function getCities() {
    $.get("../ajax/loadCities").done(function(data) {
        console.log(data.name);
    });
}