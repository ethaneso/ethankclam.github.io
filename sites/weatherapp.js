$(document).ready(function(){
var long;
	var lat;
	if (navigator.geolocation) {
		navigator.geolocation.getCurrentPosition(function(position) {
			long = position.coords.longtitude;
			lat = position.coords.latitude;
			$("#data").html("latitude: " + lat + "<br>longtitude: " + long);
	
	// create API with geolocation
	var api = "http://api.openweathermap.org/data/2.5/weather?lat="+lat+"&lon="+long+"&appid=b6907d289e10d714a6e88b30761fae22";
	$.getJSON(api, function(data) {
		// alert(data.coord.lat);
		// JSON call for open weather API
	// alert(data.coord.lat);
	var weatherType = data.weather[0].description;
	var london = data.main.temp;
	var windSpeed = data.wind.speed;
	var city = data.name;

	console.log(city);
	console.log(api);
	});
});
}