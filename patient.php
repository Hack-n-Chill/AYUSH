<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        var longitude = 22.5726,latitude =  88.3639;
    </script>
    <script src="https://apis.mapmyindia.com/advancedmaps/v1/rrvxcbieg3kvaifvtfciuprc2ho8dmfh/map_load?v=1.3"></script>
    <style> html, body, #map {margin: 0;padding: 0;width: 96%;height: 98%;} </style>

</head>
<body>
    <div id="map"></div>;
    <script>
        var map=new MapmyIndia.Map("map",{ center:[longitude, latitude],zoomControl: true,hybrid:true });
        L.marker([longitude, latitude]).addTo(map).bindPopup("currentLocation");
    </script>
</body>
</html>