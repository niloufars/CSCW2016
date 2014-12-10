<?php 
	$pageTitle = 'Attending CSCW';
	$section = 'attend';
	$basePath = '..';
	include_once('../_inc/header.php');
?>
	<div class="container main">
		<div class="row">
			<article class="ten columns" role="main">
			<h1>Travel & Transportation Information</h1>
			
			<h2>Flying</h2>
			<p>Vancouver is highly accessible via a number of transportation options. Travelers can fly in to the <a href="http://www.yvr.ca/en/default.aspx" target="_blank">Vancouver International Airport (YVR)</a>, which is located 12 km (7.5 miles) from downtown Vancouver. Transportation to and from the airport is available via the <a href="http://www.translink.ca/en/Getting-Around/Getting-to-the-Airport.aspx" target="_blank">SkyTrain</a> and <a href="http://www.yvr.ca/en/getting-to-from-yvr/taxis.aspx" target="_blank">taxi cabs</a>. Taxi fare from the airport to downtown Vancouver is ~$35, and travel time is roughly 30 minutes. The SkyTrain fare from the airport to downtown Vancouver is $8.75.
			</p>
			<p>If you choose to take the SkyTrain from the airport to downtown Vancouver, you will use the Canada Line. You should get on the SkyTrain at the “YVR Airport” stop and go northbound to the “Vancouver City Centre” stop. This ride is approximately 25 minutes. A SkyTrain route map is available <a href="http://infomaps.translink.ca/System_Maps/92/SkyTrainSystemMap.pdf" target="_blank">here</a>.
			</p>
			<p>Once you arrive at the train station in downtown Vancouver, it is a 1.5 km (~20 minute) walk down W Georgia St to the Westin Bayshore. You can also use your Skytrain ticket and transfer on to a bus. Buses numbered 250 and 251 will take you down W Georgia St. Get off at the corner of Cardero St and W Georgia St. See the map below.
			</p><p>
			

			<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script><div style="overflow:hidden;height:500px;width:600px;"><div id="gmap_canvas" style="height:500px;width:600px;"></div><iframe src="http://www.embed-google-map.com/map-embed.php"></iframe><a class="google-map-data" href="http://www.stromleo.de" id="get-map-data">schauen sie hier</a></div><script type="text/javascript"> function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(49.2928836,-123.1321016),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(49.2928836, -123.1321016)});infowindow = new google.maps.InfoWindow({content:"<div style='position:relative;line-height:1.34;overflow:hidden;white-space:nowrap;display:block;'><div style='margin-bottom:2px;font-weight:500;'>Westin Bayshore</div><span>1601 Bayshore Drive <br>  Vancouver</span></div>" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);
			</script>
			</p>
			<h2>Train</h2>
			<p>Vancouver is accessible along the west coast from Washington State via train. A train ride from Seattle, WA to Vancouver, BC is approximately four hours long. See <a href="http://www.amtrakcascades.com/" target="_blank">Amtrak’s web page</a> for more details. Attendees can also travel to Vancouver from within Canada using <a href="http://www.viarail.ca/en" target="_blank">ViaRail</a>.
			</p>
			
			<h2>Driving</h2>
			<p>Vancouver is also easily accessible by car. Can anybody say, “road trip”? As an example, Vancouver is roughly a three-hour drive from Seattle, WA. Use your favorite mapping software and head to: The Westin Bayshore, 1601 Bayshore Dr, Vancouver, BC, Canada.
			</p>
			<p>Parking is conveniently located across from the main driveway of the Westin Bayshore. Overnight self-parking is $36 per night, inclusive of taxes. Overnight valet parking is $41 per night, also inclusive of taxes. Day rates are also available should you only need parking for a few hours.
			</p>
			
			<h1>Local Transit Information</h1>
			<p>Greater Vancouver is highly interconnected via a rapid transit line called the SkyTrain along with many connecting bus routes. More details about routes and fares can be found on <a href="http://www.translink.ca/" target="_blank">TransLink’s web page</a>.
			</p>

			<h1>Accessibility Information</h1>
			<p>In 2010, The Westin Bayshore had the opportunity to prove its potential by hosting the top tier of the IOC countries during the Paralympics. The majority of the meeting space and hotel amenities are conveniently located on one level allowing for easier mobility. The main and deluxe towers are serviced by two elevators each – there is also a smaller elevator located halfway down the longer hallways of our main building for further ease of access. Conference attendees can choose between stairs, escalators and an elevator while meeting in the conference center, depending on their needs. Thirteen guestrooms are designated accessible rooms and both ADA and CDA approved to better accommodate guests. These rooms are fully compliant with Access Canada standards, including roll-in showers, hand-held shower heads, larger floor areas, and handle bars/grips throughout. Shower mats can be requested for extra security and prevent slippage.
			</p>
			<p>Public transportation in Vancouver, including the SkyTrain and buses, is also fully accessible to people of all abilities. All SkyTrain stations have elevators and buses have low floors, ramps, or lifts. More details can be found on <a href="http://www.translink.ca/en/Rider-Guide/Accessible-Transit.aspx" target="_blank">TransLink’s web page</a>. Most of the taxi vans in Vancouver have been modified by Mahadev Motors for rear or side door wheelchair entries to facilitate better mobility. More information can be found <a href="http://www.mahadevwheelchairvans.com/index.htm" target="_blank">here</a>.
			</p>			
			</article>
			<aside class="five columns offset-by-one omega">
				<div class="item">
					<h2>Attending</h2>
					<ul class="subnav" id="nav_attend">
						<li><a href="index.php">Overview</a></li>
						<li><a href="reg.php">Conference Registration</a></li>
						<li><a href="hotel.php">Hotel</a></li>
						<li><a href="visas.php">Visas</a></li>
						<li><a href="travel.php" class="active">Travel & Transportation</a></li>
						<li><a href="local.php">Local Attractions</a></li>
					</ul>
				</div>
			</aside>
		</div>	
	</div>
<?php 
	include_once('../_inc/footer.php');
?>