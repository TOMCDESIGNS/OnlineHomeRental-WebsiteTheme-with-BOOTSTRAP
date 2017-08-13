//States
var state_arr = new Array("Arunachal Pradesh", "Assam", "Meghalaya", "Manipur", "Mizoram", "Nagaland", "Tripura")

//Cities
var c_a = new Array();
c_a[0] = "";
c_a[1] = "Itanagar|Ziro|Bomdila|Pasighat|Naharlagun|Bhalukpong|Tawang|Tezu|Along|Roing|Khonsa|Seppa|Daporijo|Namsai";
c_a[2] = "Guwahati|Silchar|Dibrugarh|Jorhat|Nagaon|Tinsukia|Bongaigaon|Tezpur|Diphu|Dhubri|North Lakhimpur|Karimganj|Sivasagar|Goalpara|Barpeta Town|Golaghat|Haflong|Lanka|Hojai|Barpeta Road|Kokrajhar|Hailakandi|Morigaon|Nalbari|Rangia|Mangaldoi|DhekiaJuli|Dergaon|Sonari|Nazira";
c_a[3] = "Shillong|Cherrapunji|Tura|Jowai|Nongstoin|Mawsynram|Williamnagar|Dawki|Nongpoh|Mairang|Nongthymmai|Mankachar";
c_a[4] = "Churachandpur|Imphal|Kakching|Mayang Imphal|Moirang|Phek|Thoubal|Wangjing|Yairipok";
c_a[5] = "Aizawl|Darlawn|Khawhai|Kolasib|Lunglei|Mamit|North Vanlaiphai|Saiha|Sairang|Saitlaw|Serchhip|Thenzawl";
c_a[6] = "Dimapur|Kohima|Mokokchung|Mon|Tuensang|Wokha|Zunheboto";
c_a[7] = "Agartala|Amarpur|Ambasa|Barjala|Belonia|Dharmanagar|Kailashahar|Kamalpur|Khowai|Ranir Bazar|Sabrum|Sonamura|Udaipur";

function populateCities(stateElementId, cityElementId) {

    var selectedStateIndex = document.getElementById(stateElementId).selectedIndex;

    var cityElement = document.getElementById(cityElementId);

    cityElement.length = 0;
    cityElement.options[0] = new Option('Select city', '');
    cityElement.selectedIndex = 0;

    var city_arr = c_a[selectedStateIndex].split("|");

    for (var i = 0; i < city_arr.length; i++) {
        cityElement.options[cityElement.length] = new Option(city_arr[i], city_arr[i]);
    }
}

function populateStates(stateElementId, cityElementId) {
    // given the id of the <select> tag as function argument, it inserts <option> tags
    var stateElement = document.getElementById(stateElementId);
    stateElement.length = 0;
    stateElement.options[0] = new Option('Select state', '-1');
    stateElement.selectedIndex = 0;
    for (var i = 0; i < state_arr.length; i++) {
        stateElement.options[stateElement.length] = new Option(state_arr[i], state_arr[i]);
    }

    // Assigned all states. Now assign event listener for the cities.

    if (cityElementId) {
        stateElement.onchange = function () {
            populateCities(stateElementId, cityElementId);
        };
    }
}