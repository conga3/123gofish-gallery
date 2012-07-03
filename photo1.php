<!DOCTYPE html> 
<html> 

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<title>Photo 1</title> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.css" />
	<script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.js"></script>
	

</head> 

	
<body> 

<!-- Start of first page: #one -->

<div data-role="page" id="photo1" data-theme="a">
	<div data-role="header" data-position="fixed" data-fullscreen="true" >
		<a href="index.html" data-role="button" data-icon="arrow-l" data-iconpos="notext">Prev</a>
		 <div style="text-align:center;">
		
		  <img style="border : 2px solid white" src="images/th-photo1.jpg" width="40" height="40"></img>
		  <a href="photo2.php" ><img style="border : 2px solid transparent" src="images/th-photo2.jpg" width="40" height="40"></img></a>
		  <img style="border : 2px solid transparent" src="images/th-photo3.jpg" width="40" height="40"></img>
		   <img style="border : 2px solid transparent" src="images/th-photo4.jpg" width="40" height="40"></img>
		 <img style="border : 2px solid transparent" src="images/th-photo5.jpg" width="40" height="40"></img>
		 </div>
		<a href="photo2.php" data-role="button" data-icon="arrow-r" data-iconpos="notext">Next</a>
	</div>
	<div data-role="content" >	
		<img src="images/photo1.jpg" ></img>
	</div>
	<div style="margin : 0 auto; text-align:center; font-size:0.7em;" data-role="footer" data-position="fixed" data-fullscreen="true" >
		<p style="margin : 3px 0">Photo Caption Photo Caption Photo Caption Photo Caption Photo Caption Photo Caption</p>
		<div style="margin : 0 auto;" data-role="controlgroup" data-type="horizontal" data-inline="true">
			<a href="index.html" data-inline="true" data-role="button" data-icon="home">Home</a>

			<a href="index.html" data-inline="true" data-role="button" data-icon="" data-theme="b">Location Tag</a>
			<a href="index.html" data-inline="true" data-role="button" data-icon="" data-theme="b">Trip Type Tag</a>
			<a href="index.html" data-inline="true" data-role="button" data-icon="" data-theme="b">Fish Species 1</a>
			<a href="index.html" data-inline="true" data-role="button" data-icon="" data-theme="b">Fish Species 2</a>
			<a href="index.html" data-inline="true" data-role="button" data-icon="" data-theme="b">Fish Species 3</a>

			<a href="#sharephoto" data-inline="true" data-role="button" data-icon="plus" data-theme="e">Share</a>
		<div>
	</div> 
</div>
 
<!-- /page gallery -->

<div data-role="page" id="popup" data-theme="e">
	<div data-role="header">
		<h1>Bar</h1>
	</div><!-- /header -->
	
	<div data-role="content">	
		<p>I'm the second in the source order so I'm hidden when the page loads. I'm just shown if a link that references my ID is beeing clicked.</p>		
		<p><a href="#foo">Back to foo</a></p>	
	</div><!-- /content -->

	<div data-role="footer">
		<h4>Page Footer</h4>
	</div><!-- /footer -->
</div>


</body>
</html>