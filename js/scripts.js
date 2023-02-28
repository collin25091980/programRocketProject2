// Leaflet Map

var map = document.querySelector('#map'); 

map = L.map('map').setView([48.6112045, 2.4675316], 13);

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
  maxZoom: 19,
  attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);