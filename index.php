<?php include_once '_includes/header.php'; ?>

	<div id="content">	
		<div id="news" class="section">	
			<div id="news-snaps">	
				<div id="news-snap-container">	
					<img  alt="image" src="_media/images/image_placeholder_01.jpg" />
					<img  alt="image" src="_media/images/image_placeholder_02.jpg" />
					<img  alt="image" src="_media/images/image_placeholder_03.jpg" />
					<img  alt="image" src="_media/images/image_placeholder_04.jpg" />
					<img  alt="image" src="_media/images/image_placeholder_05.jpg" />
				</div> <!-- news-snap-container -->
				<div id="snap-nav"></div>
			</div><!-- news-snaps -->
					
			<div id="news-blurb">
				<h2>Hopkintons's Best Bite to Eat!</h2>
				<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
			</div><!-- news-blurb -->	
		</div> <!-- news -->
	
		<div id="directions-and-hours" class="section">
			<h1 class="title" id="location_and_title_head">
				<a href="#" id="location_and_hours">Location & Hours</a>
			</h1>
			<h3 class="title">85 West Main Street, Hopkinton MA <a class="btn" id="map-btn" href="" >View Map</a> </h3>
				
			<div id="map">
				<div id="map-embed"></div>
			</div>
			
			<table id="hours">
				<thead>
					<tr>
						<td>Monday <span>to</span> Thursday</td>
						<td>Friday</td>
						<td>Saturday</td>
						<td>Sunday</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							<span >Open 6am</span>
							<span>Close 2pm</span>
						</td>
						<td>
							<span>Open 5am</span>
							<span>Close 8pm</span>
						</td>
						<td>
							<span>Open 5am</span>
							<span>Close 1pm</span>
						</td>
						<td>
							<span>Open 6am</span>
							<span>Close 1pm</span>
						</td>
					</tr>
				</tbody>
			</table>
		</div> <!-- directions-and-hours -->
		
			
		<div id="menu" class="section">
			
			<h1 class="title" id="menu_and_prices_head">
				<a href="#" id="menu_and_prices">Menu & Prices</a>
			</h1>
			<!-- php include of the menu-widget -->
			<?php include_once '_includes/menu_wid.php' ?>
					
		</div> <!-- menu -->
		
	</div> <!-- content -->
<?php include_once '_includes/footer.php'; ?>
