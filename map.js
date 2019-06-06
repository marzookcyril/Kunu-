function Goto() {
var titre = document.getElementById('recherche').innerHTML;
var adress = document.getElementById('adresse').innerHTML;
var postal = document.getElementById('postal').innerHTML;
var titree = titre.slice(8);
var adresss = adress.slice(10);
var postall = postal.slice(14);
var resultat = adresss + "," + postall;

var xmlhttp = new XMLHttpRequest();
var url = "https://nominatim.openstreetmap.org/search?format=json&limit=3&q=" + resultat;
xmlhttp.onreadystatechange = function() {
if (this.readyState == 4 && this.status == 200)
{
if (this.responseText!='[]') {
var myArr = JSON.parse(this.responseText);
var lat = myArr[0]['lat'];
var lon = myArr[0]['lon'];
initMap(lat, lon, titree);
}
else
alert('Adresse non trouvée');
}
};
xmlhttp.open("GET", url, true);
xmlhttp.send();
}

// Fonction d'initialisation de la carte
function initMap(lat, lon, titre){
    macarte = L.map('map').setView([lat, lon], 14);
    L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
        attribution: 'données © <a href="//osm.org/copyright">OpenStreetMap</a>/ODbL - rendu <a href="//openstreetmap.fr">OSM France</a>',
        minZoom: 1,
        maxZoom: 20
    }).addTo(macarte);

    var marker = L.marker([lat, lon]).addTo(macarte);
    marker.bindPopup(titre);
}
