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
<div data-role="page" id="home" data-theme="b">

	<div data-role="header" data-theme="b">
		<h1>Photo App</h1>
	</div><!-- /header -->

	<div data-role="content" >	
		<h3>Find a captain's gallery, enter an existing ID below : </h3>
		<div data-role="fieldcontain">
    		<input type="text" name="captainid" id="captainid" value="" placeholder="4 Digit Captain ID (####)" />
    		<a href="index.php" data-role="button" data-inline="true" data-icon="search" data-theme="b">Find</a>
		</div>
		<h2> - OR - </h2>
		<h3>Create a gallery for your web site : </h3>
		<div data-role="fieldcontain">
    		<input type="text" name="email" id="email" placeholder="you@email.com" value=""  />
    		<a href="index.php" data-role="button" data-inline="true" data-icon="plus" data-theme="b">Create</a>
		</div>
		<code>
		<p>This is the default/home page for the App. Users who visit this page will need to either enter a "Captain ID" (4 Digit Number) to jump to the Menu page (/photo/0000)</p>
		<p> - OR - </p>
		<p>A new captain might want to setup a gallery for their web site, so we ask the email address</p>
		<p>Pre-Form Submission Validations</p>
		<p> - Captain ID is numerical and 4 digits long</p>
		<p> - Email is valid</p>
		</code>
		<!--  
		<ul data-role="listview" data-inset="true">
			<li data-theme="c"><a href="photo1.php" data-prefetch>Most Recent<span class="ui-li-count">25</span></a></li> 
			<li data-theme="e"><a href="images/fish0011.jpg" data-prefetch><img src="images/icon16-favorite.png" alt="Favorite" class="ui-li-icon">Favorites<span class="ui-li-count">18</span></a></li>
			<li data-theme="b"><a href="photo1.php" data-prefetch><img src="images/icon16-location.png" alt="Location" class="ui-li-icon">Tampa Bay<span class="ui-li-count">102</span></a></li>
			<li data-theme="b"><a href="photo1.php" data-prefetch><img src="images/icon16-fishspecies.png" alt="Fish Species" class="ui-li-icon">Snook<span class="ui-li-count">62</span></a></li> 
			<li data-theme="b"><a href="photo1.php" data-prefetch><img src="images/icon16-fishspecies.png" alt="Fish Species" class="ui-li-icon">Tarpon<span class="ui-li-count">48</span></a></li> 
			<li data-theme="b"><a href="photo1.php" data-prefetch><img src="images/icon16-triptype.png" alt="Trip Type" class="ui-li-icon">Fly<span class="ui-li-count">32</span></a></li> 
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
		-->
	</div><!-- /content -->
	
	<div data-role="footer" data-theme="c">
		<h4>Powered by <a href="http://www.123gofish.com">123GoFish.com</a></h4>
	</div><!-- /footer -->
</div><!-- /page gallery -->
</body>
</html>