<!DOCTYPE html>
<html>
<head> <!-- untuk meta description, keywords, dan author bisa gantu dan di sesuaikan tapi yang meta charset sama viewport jangan di ganti -->

<!-- TITLE -->
<?php $this->load->view('partials/title.php')?>

<!-- MAPCSS -->
<?php $this->load->view('partials/map-css.php')?>

<!-- MAPJS -->
<?php $this->load->view('partials/map-js.php')?>

<!-- CSS -->
<?php $this->load->view('partials/vendor-css.php'); ?>
<!-- JS -->
<?php $this->load->view('partials/vendor-js.php'); ?>

<!-- json -->
<script src="<?= base_url() ?>assets/layer/line.js"></script>


<!-- legend -->
<script src="https://cdn.jsdelivr.net/gh/aazuspan/leaflet-feature-legend/src/feature-legend.js"></script>
<link href="https://cdn.jsdelivr.net/gh/aazuspan/leaflet-feature-legend/src/feature-legend.css" rel="stylesheet" />


</head>

<body>
<!-- NAVBAR -->
<?php $this->load->view('partials/navbar.php'); ?>

<div id="map"> <!-- ini id="map" bisa di ganti dengan nama yang di inginkan -->
<script src="<?= base_url() ?>assets/layer/tai.js"></script>


<script>
// MENGATUR TITIK KOORDINAT TITIK TENGAN & LEVEL ZOOM PADA BASEMAP
var map = L.map('map').setView([-7.9, 110.4], 10);

// PILIHAN BASEMAP YANG AKAN DITAMPILKAN
var baseLayers = {  
  'Esri.WorldTopoMap': L.tileLayer.provider('Esri.WorldTopoMap').addTo(map),
  'Esri WorldImagery': L.tileLayer.provider('Esri.WorldImagery')
};


// MENAMPILKAN TOOLS UNTUK MEMILIH BASEMAP
L.control.layers(baseLayers,{}).addTo(map);

// MENAMPILKAN SKALA
L.control.scale({imperial: false}).addTo(map);

// ------------------- VECTOR ----------------------------


// REQUEST ADMINISTRASI

    // SLEMAN
    $.getJSON("../assets/layer/slemanbaru.geojson",function(data){
    // add GeoJSON layer to the map once the file is loaded
    var datalayer = L.geoJson(data ,{
    onEachFeature: function(feature, featureLayer) {
    featureLayer.bindPopup(feature.properties.kabupaten);
    }
    }).addTo(map);
    });

    // BANTUL
    $.getJSON("../assets/layer/bantul.geojson",function(data){
    // add GeoJSON layer to the map once the file is loaded
    var datalayer = L.geoJson(data ,{
    onEachFeature: function(feature, featureLayer) {
    featureLayer.bindPopup(feature.properties.kabupaten);
    }
    }).addTo(map);
    });

    // GUNUNGKIDUL
    $.getJSON("../assets/layer/gunungkidul.geojson",function(data){
    // add GeoJSON layer to the map once the file is loaded
    var datalayer = L.geoJson(data ,{
    onEachFeature: function(feature, featureLayer) {
    featureLayer.bindPopup(feature.properties.kabupaten);
    }
    }).addTo(map);
    });

    // KOTA
    $.getJSON("../assets/layer/kota.geojson",function(data){
    // add GeoJSON layer to the map once the file is loaded
    var datalayer = L.geoJson(data ,{
    onEachFeature: function(feature, featureLayer) {
    featureLayer.bindPopup(feature.properties.kabupaten);
    }
    }).addTo(map);
    });


    // KULONPROGO
    $.getJSON("../assets/layer/progo.geojson",function(data){
    // add GeoJSON layer to the map once the file is loaded
    var datalayer = L.geoJson(data ,{
    onEachFeature: function(feature, featureLayer) {
    featureLayer.bindPopup(feature.properties.kabupaten);
    }
    }).addTo(map);
    });
    

    // DEMAM BERDARAH
   // Penderita
   var geojsonMarkerOptions = {
      radius: 8,
      fillColor: "#ff7800",
      color: "#800",
      weight: 1,
      opacity: 1,
      fillOpacity: 0.8
    };

    var markers = L.markerClusterGroup();

    L.geoJSON(tai, { 
      pointToLayer: function(feature, latlng){
        return markers.addLayer(L.circleMarker(latlng, geojsonMarkerOptions))
      }
    }).addTo(map);

    map.addLayer(markers);


    // menambahkan tools defautl extent
      L.control.defaultExtent().addTo(map);    

</script>
</div> 
</body>
</html>