
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <button onclick="getLocation()">Share your location</button>
        <div id="output"></div>
    <script>
        var x = document.getElementById('output');
        var longitude,latitude;
        
        function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
        } else { 
            x.innerHTML = "Geolocation is not supported by this browser.";
        }
        }

        

        function showPosition(position) {
        latitude = position.coords.latitude; 
        longitude = position.coords.longitude;
        x.innerHTML = longitude + " " + " " + longitude;


        // todo
        // send location to server


        getLocation();
        }
    </script>
</body>
</html>