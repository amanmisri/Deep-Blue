<!DOCTYPE html>
<html>
 <div class="hero-image2">
<head>
  <title>Deep Blue project</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
 

      
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>
    
  
        
  
        function myFunction()  {
          
          var str = document.getElementById("place").value;
          var link = "https://us1.locationiq.com/v1/search.php?key=6c97780cff7d27&format=json&q="+str;
             

     var lat,lon,boundingbox,add;
  
    $.ajax({async: false ,
   url:link, success: function(results){
   lat=results[0].lat;
   lon=results[0].lon;
   boundingbox=results[0].boundingbox;
   add=results[0].display_name;
   
    
     window.alert("Lattitude: "+lat+ "\nLongitude: "+lon + "\nboundingbox: "+boundingbox + "\nplace: "+add);
                    
         
      
   // document.write(lat);

    }
});

    var mlink="https://api.mapbox.com/styles/v1/mapbox/satellite-v9/static/"+lon+","+lat+",18,20/1280x1280?access_token=pk.eyJ1Ijoic2FqbWFydSIsImEiOiJjanFubmF4cmExdGR6NDlwb3IzaGpob2luIn0.FeK54zsZu7sICVbgL52z1A";
    window.open(mlink);
    
  
   // "https://api.mapbox.com/styles/v1/mapbox/satellite-v9/static/"+lon+","+lat+",18,20/1280x1280?access_token=pk.eyJ1Ijoic2FqbWFydSIsImEiOiJjanFubmF4cmExdGR6NDlwb3IzaGpob2luIn0.FeK54zsZu7sICVbgL52z1A";
    //link to get white roads" https://api.mapbox.com/styles/v1/mapbox/streets-v11/static/"+lon+","+lat+",18,20/1280x1280?access_token=pk.eyJ1Ijoic2FqbWFydSIsImEiOiJjanFubmF4cmExdGR6NDlwb3IzaGpob2luIn0.FeK54zsZu7sICVbgL52z1A"
    

  }
  
  
  
  
</script> 
  
  
  
  
<body>
  <div class="header">
  	<h2>Welcome to Capacity Planning Program</h2>
  </div>	
	 
   <form method="post" action="server1.php">
  	
  	<div class="input-group">
  		<label>Enter the location you want to check </label>
  		<input id="place" type="text" name="place"  >
  	</div>
	<div class="input-group">
  		<button onclick="myFunction()" id="123" type="submit" class="btn" name="maps"><div id="button">maps</button>
  	</div>
          
  
	<div class="input-group">
  		<button type="submit" class="btn" name="rate"><div id="button">Rate</button>
  	</div>
  </form>
</body>
        </div>
</html>