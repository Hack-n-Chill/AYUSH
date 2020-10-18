

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
        <div class="card a"><i class="fa fa-tachometer"></i><h5>Total no of empty beds available - 379</h5><span id="active"></span></div>
      <div class="card ca"><i class="fa fa-th-list"></i><h5>Total no of empty beds available - 54</h5><span id="cases"></span></div>
      <div class="card cr"><i class="fa fa-times-circle"></i><h5>Total no of empty beds available - 82</h5><span id="critical"></span></div>
      <div class="card d"><i class="fa fa-times"></i><h5>Total no of empty beds available -11</h5><span id="death"></span></div>
      <div class="card r"><i class="fa fa-check-square-o"></i><h5>Total no of empty beds available - 12</h5><span id="recovered"></span></div>
      <div class="card t"><i class="fa fa-eye"></i><h5>Total no of empty beds available - 18</h5><span id="tests"></span></div>
    </div>
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
    var json = data;
    document.getElementById("output").innerHTML = data.result[0].name;
    //  document.getElementById("country").innerHTML = data.country;
     document.getElementById("active").innerHTML = data.result[1].name;
    document.getElementById("cases").innerHTML = data.result[2].name;
    document.getElementById("critical").innerHTML = data.result[3].name;
    document.getElementById("death").innerHTML = data.result[4].name;
    document.getElementById("recovered").innerHTML = data.result[5].name;
    document.getElementById("tests").innerHTML =" ";
    // document.getElementById("flag").src = data.countryInfo.flag;
  });
        }
    // x.innerHTML = longitude + " " + " " + longitude;
    
    </script>
</body>
</html>
