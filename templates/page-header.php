<?php global $title; ?>
<header class="entry-header">
	<h1 class="entry-title"><? 
	if ( is_archive() || is_single() ) {
			echo ucwords ( get_post_type() );
	}
	else {
		echo get_the_title();
	}
	
 ?> </h1>
</header>