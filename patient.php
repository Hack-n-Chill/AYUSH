

<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nearby Hospital</title>
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
        x.innerHTML = "Now sending your coordinates";
        x.innerHTML = longitude + " " + " " + latitude;
        
        var url = 'https://cors-anywhere.herokuapp.com/https://services.gisgraphy.com/geoloc/search?lat='+latitude+'&lng='+longitude+'&radius=7000&placetype=hospital&format=json';
        fetch(url)
  .then((response) =>
   {
    return response.json();
  }
  )
  .then((data) => {
    console.log(data);
    document.getElementById("country").innerHTML = data.country;
    document.getElementById("active").innerHTML = data.active.toLocaleString();
    document.getElementById("cases").innerHTML = data.cases.toLocaleString();
    document.getElementById("critical").innerHTML = data.critical.toLocaleString();
    document.getElementById("death").innerHTML = data.deaths.toLocaleString();
    document.getElementById("recovered").innerHTML = data.recovered.toLocaleString();
    document.getElementById("tests").innerHTML = data.tests.toLocaleString();
    document.getElementById("flag").src = data.countryInfo.flag;
  });
        }
    // x.innerHTML = longitude + " " + " " + longitude;
    
    </script>
</body>
</html>