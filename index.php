<?php include_once '_includes/header.php'; ?>

	<div id="content">	
		<div id="news" class="section">	
			<div id="news-snaps">	
				<div id="news-snap-container">	
					<img  alt="image" src="_media/images/front2.jpg" />
				</div> <!-- news-snap-container -->
				<div id="snap-nav"></div>
			</div><!-- news-snaps -->
					
			<div id="news-blurb">
				<h2>Hopkinton's Best Place to Eat!</h2>
				<p>A Hopkinton landmark for over 20 years, the Golden Spoon Restaurant offers great food at great prices. The restaurant serves breakfast and lunch, as well as Friday night dinners featuring high-quality area seafood. Bring your family! Exit 21A off I-495. </p>
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
							<span>Close 2pm</span>
						</td>
						<td>
							<span>Open 6am</span>
							<span>Close 2pm</span>
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
