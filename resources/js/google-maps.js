let map;
let latitude = window.latitude;
let longitude = window.longitude;

window.reloadMap = (newLatitude, newLongitude) => {
    latitude = newLatitude;
    longitude = newLongitude;
    initMap();
};

function initMap() {
    coordinates = new google.maps.LatLng(latitude, longitude);

    map = new google.maps.Map(document.getElementById("map"), {
        center: { lat: latitude, lng: longitude },
        zoom: 17,
        disableDefaultUI: false,
        gestureHandling: "auto",
        styles: [
            {
                featureType: "poi",
                stylers: [
                    {
                        visibility: "off",
                    },
                ],
            },
            {
                featureType: "administrative",
                elementType: "labels.text.fill",
                stylers: [
                    {
                        visibility: "on",
                    },
                    {
                        color: "#1FB4E9",
                    },
                ],
            },
        ],
    });

    marker = new google.maps.Marker({
        position: coordinates,
        map,
    });
}

window.initMap = initMap;
