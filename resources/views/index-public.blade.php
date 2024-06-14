@extends('layouts.template')

@section('styles')

    <style>
        html,
        body,
        #map {
            height: 100%;
            width: 100%;
            margin: 0;
        }

        #map {
            height: calc(100vh - 56px);
            width: 100%;
            margin: 0;
        }
    </style>
@endsection

@section('content')
    <div id="map"></div>
@endsection

@section('script')

    <script>
        //Map
        var map = L.map('map').setView([-6.914847764014928, 107.60415858145787], 13);

        //Basemap
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Create a GeoJSON layer for polygon data
        var bandung = L.geoJson(null, {
            style: function(feature) {
                // Adjust this function to define styles based on your polygon properties
                var value = feature.properties.NAMOBJ; // Change this to your actual property name
                return {
                    fillColor: getColor(value),
                    weight: 2,
                    opacity: 1,
                    color: "red",
                    dashArray: "3",
                    fillOpacity: 0.5,
                };
            },
            onEachFeature: function(feature, layer) {
                // Adjust the popup content based on your polygon properties
                var content =
                    "DESA : " +
                    feature.properties.DESA +
                    "<br>";

                layer.bindPopup(content);
            },
        });

        // Function to generate a random color //
        function getRandomColor() {
            const letters = '0123456789ABCDEF';
            let color = '#';
            for (let i = 0; i < 6; i++) {
                color += letters[Math.floor(Math.random() * 16)];
            }
            return color;
        }

        // Load GeoJSON //
        fetch('geojson/bandung.geojson')
            .then(response => response.json())
            .then(data => {
                L.geoJSON(data, {
                    style: function(feature) {
                        return {
                            opacity: 1,
                            color: "black",
                            weight: 0.5,
                            fillOpacity: 0.1,
                            fillColor: getRandomColor(),
                        };
                    },
                    onEachFeature: function(feature, layer) {
                        var content = "Desa : " + feature.properties.NAMOBJ;
                        layer.on({
                            click: function(e) {
                                // Fungsi ketika objek diklik
                                layer.bindPopup(content).openPopup();
                            },
                            mouseover: function(e) {
                                // Tidak ada perubahan warna saat mouse over
                                layer.bindPopup("Desa : " + feature.properties.NAMOBJ, {
                                    sticky: false
                                }).openPopup();
                            },
                            mouseout: function(e) {
                                // Fungsi ketika mouse keluar dari objek
                                layer.resetStyle(e
                                    .target); // Mengembalikan gaya garis ke gaya awal
                                map.closePopup(); // Menutup popup
                            },
                        });
                    }

                }).addTo(map);
            })
            .catch(error => {
                console.error('Error loading the GeoJSON file:', error);
            });


        /* GeoJSON Point */
        var point = L.geoJson(null, {
            onEachFeature: function(feature, layer) {
                var popupContent = "<span style='font-weight: bold; font-size: 17px;'>" + feature.properties.name + "<br>" +
                    "<span style='font-size: 11px;'>" + feature.properties.description + "<br>" +
                    "<img src='{{ asset('storage/images/') }}/" + feature.properties.image +
                    "'class='img-thumbnail' alt='...'>" + "<br>";

                layer.on({
                    click: function(e) {
                        point.bindPopup(popupContent);
                    },
                    mouseover: function(e) {
                        point.bindTooltip(feature.properties.name);
                    },
                });
            },
        });
        $.getJSON("{{ route('api.points') }}", function(data) {
            point.addData(data);
            map.addLayer(point);
        });


        /* GeoJSON Polylines */
        var polyline = L.geoJson(null, {
            onEachFeature: function(feature, layer) {
                var popupContent = "<span style='font-weight: bold; font-size: 17px;'>" + feature.properties.name + "<br>" +
                    "<span style='font-size: 11px;'>" + feature.properties.description + "<br>" +
                    "<img src='{{ asset('storage/images/') }}/" + feature.properties.image +
                    "'class='img-thumbnail' alt='...'>" + "<br>";

                layer.on({
                    click: function(e) {
                        polyline.bindPopup(popupContent);
                    },
                    mouseover: function(e) {
                        polyline.bindTooltip(feature.properties.name);
                    },
                });
            },
        });
        $.getJSON("{{ route('api.polylines') }}", function(data) {
            polyline.addData(data);
            map.addLayer(polyline);
        });


        /* GeoJSON Polygon */
        var polygon = L.geoJson(null, {
            onEachFeature: function(feature, layer) {
                var popupContent = "<span style='font-weight: bold; font-size: 17px;'>" + feature.properties.name + "<br>" +
                    "<span style='font-size: 11px;'>" + feature.properties.description + "<br>" +
                    "Foto: <img src='{{ asset('storage/images/') }}/" + feature.properties.image +
                    "'class='img-thumbnail' alt='...'>" + "<br>";
                layer.on({
                    click: function(e) {
                        polygon.bindPopup(popupContent);
                    },
                    mouseover: function(e) {
                        polygon.bindTooltip(feature.properties.name);
                    },
                });
            },
        });
        $.getJSON("{{ route('api.polygons') }}", function(data) {
            polygon.addData(data);
            map.addLayer(polygon);
        });
    
        // layer control
        var overlayMaps = {
            "Point": point,
            "Polyline": polyline,
        };

        var layerControl = L.control.layers(null, overlayMaps, {
            collapsed: false
        }).addTo(map);
    </script>

@endsection
