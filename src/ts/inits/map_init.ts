declare let adminUrl: any
import L from "leaflet";
import { GestureHandling } from "leaflet-gesture-handling";

import "leaflet/dist/leaflet.css";
import "leaflet-gesture-handling/dist/leaflet-gesture-handling.css";

export default (mapContainer) => {
    interface AdminUrl {
        template_directory: string
    }

    const icon = L.icon({
        iconUrl: `${adminUrl.template_directory}/dist/images/pin.png`,
        iconSize: [25, 36],
        iconAnchor: [12.5, 36],
        popupAnchor: [-3, -76],
    });

    const location = mapContainer.dataset.coordinates.split(", ");

    L.Map.addInitHook("addHandler", "gestureHandling", GestureHandling);

    let map = L.map("map", {
        center: location,
        zoom: 16,
        gestureHandling: true,
    });

    const marker = L.marker([location[0], location[1]], { icon: icon }).addTo(
        map
    );
    L.tileLayer("https://tile.openstreetmap.org/{z}/{x}/{y}.png", {
        maxZoom: 19,
        attribution:
            '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>',
    }).addTo(map);
};
