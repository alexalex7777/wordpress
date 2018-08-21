<?php
function my_myme_types($mime_types){
	$mime_types['svg'] = 'image/svg+xml'; // поддержка SVG
	return $mime_types;
}
add_filter('upload_mimes', 'my_myme_types', 1, 1);