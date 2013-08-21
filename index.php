<?php
	
	//all content logic here, make it into array
	// if ( have_posts() ) : while ( have_posts() ) : the_post();

	// 	dumper(the_post());

	// endwhile; else:



	// endif;

	latest_post();

?>


<!doctype html>
<html>
<head>
	<title>Post Title &hearts; Robotys.net</title>
	<?php wp_meta()?>
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri();?>">
</head>
<body>
<div class="fancy_bg">
	&nbsp;
</div>	
<div class="center"><div class="floater">
	<div class="content">
		<div class="read">
			
		</div>
		<div class="latest">
			<h2>Latest</h2>
		</div>
		<div class="sticky">
			<h2>Random Picks</h2>
		</div>

		<div class="footer">
			<p>All rights reserved <?php echo home_url().' &copy; '.date('Y')?>. Powered by <strike>hamster</strike> <a href="http://wordpress.org">wordpress</a> + <a href="#">digitalocean.com</a>. Thanks to caffeine and some bull detector.</p>
		</div>
	</div>

	<div class="sidebar">
		
		<div class="masthead">
			<div class="txthead">
				<p>ROBO <br> TYS&bull; <br/> &bull;NET</p>
			</div>

			<div class="search">
				<form method="get">
					<input type="text" name="s" placeholder="type and hit enter"/>
				</form>
			</div>
		</div>

		<div class="items">
			<h2>Read Later &trade; </h2>
			<ul>
				<li>
					<a href="#">Title Was Here</a> 
					<p>Some excerpts will be here. Make sure it is sufficiently long</p>
				</li>
				<li>
					<a href="#">Title Was Here</a> 
					<p>Some excerpts will be here. Make sure it is sufficiently long</p>
				</li>
				<li>
					<a href="#">Title Was Here</a> 
					<p>Some excerpts will be here. Make sure it is sufficiently long</p>
				</li>
				<li>
					<a href="#">Title Was Here</a> 
					<p>Some excerpts will be here. Make sure it is sufficiently long</p>
				</li>
				<li>
					<a href="#">Title Was Here</a> 
					<p>Some excerpts will be here. Make sure it is sufficiently long</p>
				</li>
			</ul>
			<a href="#" class="more">more &raquo;</a>
		</div>

	</div>
</div></div>
</body>
</html>