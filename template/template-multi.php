<?php

/**
 * Template Name: Homepage For Multi
 * 
 * The template used for displaying homepage for multi
 *
 * @package _xs
 */

get_header(); 
while (have_posts()) : the_post(); 
the_content(); 
endwhile; 
get_footer(); 