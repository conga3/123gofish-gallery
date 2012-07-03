<!DOCTYPE html> 
<html> 

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<title>123GoFish - Gallery App</title> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.css" />
	<script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.js"></script>
</head> 

	
<body> 

<!-- Start of first page: #one -->
<div data-role="page" id="menu" data-theme="a">

	<div data-role="header">
		<a href="index.html" data-role="button" data-icon="arrow-l">Prev</a>
		<h1>Photo Gallery</h1>
		<a href="index.html" data-role="button" data-icon="arrow-r">Next</a>
	</div><!-- /header -->

	<div data-role="content" >	
		<ul data-role="listview" data-inset="true">
			<li role="heading" data-role="list-divider" data-theme="a">Choose a Gallery : </li>
			<li data-theme="d"><a href="photo1.php" data-prefetch>Most Recent<span class="ui-li-count">25</span></a></li> 
			<li data-theme="e"><a href="images/fish0011.jpg" data-prefetch><img src="images/icon16-favorite.png" alt="Favorite" class="ui-li-icon">Favorites<span class="ui-li-count">18</span></a></li>
			<li data-theme="d"><a href="photo1.php" data-prefetch><img src="images/icon16-location.png" alt="Location" class="ui-li-icon">Tampa Bay<span class="ui-li-count">102</span></a></li>
			<li data-theme="d"><a href="photo1.php" data-prefetch><img src="images/icon16-fishspecies.png" alt="Fish Species" class="ui-li-icon">Snook<span class="ui-li-count">62</span></a></li> 
			<li data-theme="d"><a href="photo1.php" data-prefetch><img src="images/icon16-fishspecies.png" alt="Fish Species" class="ui-li-icon">Tarpon<span class="ui-li-count">48</span></a></li> 
			<li data-theme="d"><a href="photo1.php" data-prefetch><img src="images/icon16-triptype.png" alt="Trip Type" class="ui-li-icon">Fly<span class="ui-li-count">32</span></a></li> 
		</ul> 
		<div data-role="fieldcontain">
		   <label for="select-choice-1" class="select">or choose a Trip Date:</label>
		   <select name="select-choice-1" id="select-choice-1" data-theme="c">
		      <option value=""> - Select - </option>
		      <option value="11-14-2011">11-14-2011</option>
		      <option value="11-08-2011">11-08-2011</option>
		      <option value="10-29-2011">10-29-2011</option>
		      <option value="10-14-2011">10-14-2011</option>
		   </select>
		</div>	
		<code>
		<p>This is the "Gallery Menu", the home page for the Gallery App.  From this page the user selects the gallery they wish to view. We offer three types of galleries.</p>
		<p>"Most Recent" is simply the last 25 photos uploaded.</p>
		<p>"Favorites" are the last 25 featured photos.</p>
		<p>"Tags" are galleries of the last 25 photos with the tag.  We find 1-5 popular tags used by the captain to tag his photos and provide links automatically.</p>
		<p>"Trip Date" galleries show the photos tags with a specific trip date. These are likely viewed by the customers who had a fishing trip that date.</p>
		</code>
		
	</div><!-- /content -->
	
	<div data-role="footer" data-theme="c">
		<h4>Powered by <a href="http://www.123gofish.com">123GoFish.com</a></h4>
	</div><!-- /footer -->
</div><!-- /page gallery -->
</body>
</html>