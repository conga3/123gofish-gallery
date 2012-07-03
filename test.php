<!DOCTYPE html> 
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<title>Multi-page template</title> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.css" />
	<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.js"></script>
</head> 

	
<body> 

<!-- Start of first page: #one -->
<div data-role="page" id="one">

	<div data-role="header">
		<h1>Multi-page</h1>
	</div><!-- /header -->

	<div data-role="content" >	
		<h2>One</h2>
		
		<div class="ui-corner-all ui-controlgroup ui-controlgroup-horizontal ui-mini" data-role="controlgroup" data-type="horizontal" data-mini="true">
			<a class="ui-btn ui-corner-left ui-btn-up-c" data-theme="c" data-wrapperels="span" data-iconshadow="true" data-shadow="true" data-corners="true" href="index.html" data-role="button"><span class="ui-btn-inner ui-corner-left"><span class="ui-btn-text">Yes</span></span></a>
			<a class="ui-btn ui-btn-up-c" data-theme="c" data-wrapperels="span" data-iconshadow="true" data-shadow="true" data-corners="true" href="index.html" data-role="button"><span class="ui-btn-inner"><span class="ui-btn-text">No</span></span></a>
			<a class="ui-btn ui-corner-right ui-controlgroup-last ui-btn-up-c" data-theme="c" data-wrapperels="span" data-iconshadow="true" data-shadow="true" data-corners="true" href="index.html" data-role="button"><span class="ui-btn-inner ui-corner-right ui-controlgroup-last"><span class="ui-btn-text">Maybe</span></span></a>
		</div>
		<div style="margin : 0 auto;" data-role="controlgroup" data-type="horizontal" data-mini="true" >
			<a href="index.html" data-mini="true" data-role="button" data-icon="home">Home</a>
			<a href="index.html" data-mini="true" data-role="button" data-icon="" data-theme="b">Location Tag</a>
			<a href="index.html" data-mini="true" data-role="button" data-icon="" data-theme="b">Trip Type Tag</a>
			<a href="index.html" data-mini="true" data-role="button" data-icon="" data-theme="b">Fish Species 1</a>
			<a href="index.html" data-mini="true" data-role="button" data-icon="" data-theme="b">Fish Species 2</a>
			<a href="index.html" data-mini="true" data-role="button" data-icon="" data-theme="b">Fish Species 3</a>
			<a href="#sharephoto" data-mini="true" data-role="button" data-icon="plus" data-theme="e" data-corners="true" data-rel="dialog" data-transition="pop">Share</a>
		<div>

		<div style="margin : 0 auto;" data-role="controlgroup" data-type="horizontal" >
			<a href="index.html" data-mini="true" data-role="button" data-icon="home">Home</a>
			<a href="index.html" data-mini="true" data-role="button" data-icon="" data-theme="b">Location Tag</a>
			<a href="index.html" data-mini="true" data-role="button" data-icon="" data-theme="b">Trip Type Tag</a>
			<a href="index.html" data-mini="true" data-role="button" data-icon="" data-theme="b">Fish Species 1</a>
			<a href="index.html" data-mini="true" data-role="button" data-icon="" data-theme="b">Fish Species 2</a>
			<a href="index.html" data-mini="true" data-role="button" data-icon="" data-theme="b">Fish Species 3</a>
			<a href="#sharephoto" data-mini="true" data-role="button" data-icon="plus" data-theme="e" data-corners="true" data-rel="dialog" data-transition="pop">Share</a>
		<div>
		<p>I have an id of "one" on my page container. I'm first in the source order so I'm shown when the page loads.</p>	
		
		<p>This is a multi-page boilerplate template that you can copy to build your first jQuery Mobile page. This template contains multiple "page" containers inside, unlike a <a href="page-template.html"> single page template</a> that has just one page within it.</p>	
		<p>Just view the source and copy the code to get started. All the CSS and JS is linked to the jQuery CDN versions so this is super easy to set up. Remember to include a meta viewport tag in the head to set the zoom level.</p>
		<p>You link to internal pages by referring to the ID of the page you want to show. For example, to <a href="#two" >link</a> to the page with an ID of "two", my link would have a <code>href="#two"</code> in the code.</p>	

		<h3>Show internal pages:</h3>
		<p><a href="#two" data-role="button">Show page "two"</a></p>	
		<p><a href="#popup" data-role="button" data-rel="dialog" data-transition="pop">Show page "popup" (as a dialog)</a></p>
	</div><!-- /content -->
	
	<div data-role="footer" data-theme="d">
		<h4>Page Footer</h4>
	</div><!-- /footer -->
</div><!-- /page one -->


<!-- Start of second page: #two -->
<div data-role="page" id="two" data-theme="a">

	<div data-role="header">
		<h1>Two</h1>
	</div><!-- /header -->

	<div data-role="content" data-theme="a">	
		<h2>Two</h2>
		<p>I have an id of "two" on my page container. I'm the second page container in this multi-page template.</p>	
		<p>Notice that the theme is different for this page because we've added a few <code>data-theme</code> swatch assigments here to show off how flexible it is. You can add any content or widget to these pages, but we're keeping these simple.</p>	
		<p><a href="#one" data-direction="reverse" data-role="button" data-theme="b">Back to page "one"</a></p>	
		
	</div><!-- /content -->
	
	<div data-role="footer">
		<h4>Page Footer</h4>
	</div><!-- /footer -->
</div><!-- /page two -->


<!-- Start of third page: #popup -->
<div data-role="page" id="popup" data-theme="e">

	<div data-role="header" data-theme="e">
		<h1>Share This Photo...</h1>
	</div><!-- /header -->

	<div data-role="content" data-theme="d">	
				
<div data-role="collapsible-set" data-theme="d">

	<div data-role="collapsible" data-collapsed="false" data-mini="true" data-theme="c">
	<h3>by E-Mail</h3>
	<p>I'm the collapsible set content for section B.</p>
	</div>
	
	<div data-role="collapsible" data-mini="true" data-theme="c">
	<h3>by Facebook</h3>
	<p>I'm the collapsible set content for section B.</p>
	</div>
	
	<div data-role="collapsible" data-mini="true" data-theme="c">
	<h3>by Twitter</h3>
	<p>I'm the collapsible set content for section B.</p>
	</div>
	
	<div data-role="collapsible" data-mini="true" data-theme="c">
	<h3>by Google+</h3>
	<p>I'm the collapsible set content for section B.</p>
	</div>
	
</div>
	
	</div><!-- /content -->
	
	<div data-role="footer">
		<h4>Page Footer</h4>
	</div><!-- /footer -->
</div><!-- /page popup -->

</body>
</html>