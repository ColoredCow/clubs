<?php
/**
 * Template for displaying all single posts
 *
 * @package Tehri Club
 */

get_header();
	
	while(have_posts()) {
		the_post();
		the_content();	
	}

get_footer();
