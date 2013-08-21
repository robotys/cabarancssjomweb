<?php
	
	$latest = latest_post();
	$next_latest = next_latest_post(6, $latest);
	$done = array_merge($latest, $next_latest);
	$random = random_post(16, $done);

	get_header();
?>
	
<div class="read">
	<?php foreach($latest as $post){?>
	<div class="meta">date: <?= $post['date']?> <?php if($post['category'] != false) echo ' / cat: '.display_link($post);?> <?php if($post['tags'] != false) echo ' / tag: '.display_link($post,'tags');?></div>
	<h1><?php echo $post['title']?></h1>
	<?php echo $post['content']?>
	<?php } ?>
</div>

<div class="latest">
	<h2>Latest Post</h2>
	<?php foreach($next_latest as $post){?>

	<ul>
		<li><a href="<?php echo $post['permalink']?>">
			<h3><?php echo $post['title']?></h3>
			<?php echo $post['excerpt']?>
		</a></li>
	</ul>
	<?php } ?>
</div>

<div class="sticky">
	<h2>Random Picks</h2>
	<?php foreach($random as $post){?>
	<ul>
		<li><a href="<?php echo $post['permalink']?>"><?php echo $post['title']?></a></li>
	</ul>
	<?php } ?>
</div>

<?php get_footer();?>