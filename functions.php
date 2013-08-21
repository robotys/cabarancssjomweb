<?php
	function dumper($multi){
		echo '<pre>';
		var_dump($multi);
		echo '</pre>';
	}

	function latest_post(){
		$my_query = new WP_Query('showposts=2');
		return looper($my_query);
	}

	function looper($my_query){
		while ($my_query->have_posts()) : $my_query->the_post();
		

			$entry['post_id'] = get_the_ID();
			$entry['title'] = get_the_title();
			$entry['date'] = get_the_date('d/m/Y H:i:s');
			$entry['author'] = get_the_author();

			$post_category = get_the_category();
			if($post_category != false){
				foreach($post_category as $cat){
					$arr[] = array(
									'name'=>$cat->cat_name, 
									'slug'=>$cat->slug, 
									'id'=>$cat->term_id,
									'link'=>get_category_link($cat->term_id)
								);
				}
			}else $arr = false;

			$entry['category'] = $arr;

			$arr = array();
			$post_tag = get_the_tags();
			if($post_tag != false){
				foreach($post_tag as $tag){
					$arr[] = array(
									'name'=>$tag->name, 
									'slug'=>$tag->slug, 
									'id'=>$tag->term_id,
									'link'=>get_tag_link($tag->term_id)
								);
				}
			}else{
				$arr = false;
			}

			$entry['tags'] = $arr;

			$entry['type'] = get_post_type(get_the_ID());
			$entry['excerpt'] = get_the_excerpt();
			$entry['content'] = get_the_content();

			$return[] = $entry; 
		endwhile;
		wp_reset_query();

		return $return;
	}


?>