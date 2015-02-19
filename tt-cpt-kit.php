<?php
/**
 * Plugin Name: TT CPT Kit
 * Plugin URI: https://wordpress.org/plugins/tt-cpt-kit/
 * Description: Custom post type and Taxonomy functionality for WordPress Themes build by ThemesTitan. Please do not waste your time with this plugin if you are not using one of the themes from ThemesTitan.
 * Version: 1.1.1
 * Author: Vishal Deshpande
 * Author URI: http://themestitan.com
 * Text Domain: tt_cpt
 * License: GPLv2 or later
 */

add_action('init','tt_cpts');

function tt_cpts(){  

  /* Register Slides post type */
  register_post_type('slides',array(
		'labels' => array(
			'name' => __('Image Slider','tt_cpt'),
            'singular_name' => __('Slide','tt_cpt'),
            'all_items' =>__('All Slides','tt_cpt'),
            'add_new'=> __('Add New Slide','tt_cpt'),
            'add_new_item'=> __('Add New Slide','tt_cpt'),
            'edit_item' => __('Edit Slide','tt_cpt'),
            'view_item'=> __('View Slide','tt_cpt'),
            'search_items'=> __('Search Slide','tt_cpt'),
            'not_found' => __('No Slide Found','tt_cpt'),
			),
		'description' => __('Add Your Slides','tt_cpt'),		
		'public' => true,
		'menu_position' => 10,
		'menu_icon' => 'dashicons-format-gallery',
		'supports' => array('title')        
		));
  
  /* Register Features post type */
  register_post_type('features',array(
		'labels' => array(
			'name' => __('Features','tt_cpt'),
            'singular_name' => __('Feature','tt_cpt'),
            'all_items' =>__('All Features','tt_cpt'),
            'add_new'=> __('Add New Feature','tt_cpt'),
            'add_new_item'=> __('Add New Feature','tt_cpt'),
            'edit_item' => __('Edit Feature','tt_cpt'),
            'view_item'=> __('View Feature','tt_cpt'),
            'search_items'=> __('Search Feature','tt_cpt'),
            'not_found' => __('No Feature Found','tt_cpt'),
			),
		'description' => __('Add Your Features','tt_cpt'),		
		'public' => true,
		'menu_position' => 10,
		'menu_icon' => 'dashicons-grid-view',
		'supports' => array('title'),
        'has_archive' => 'features'
		));
  
  /* Register Services post type */
  register_post_type('services',array(
		'labels' => array(
			'name' => __('Services','tt_cpt'),
            'singular_name' => __('Service','tt_cpt'),
            'all_items' =>__('All Services','tt_cpt'),
            'add_new'=> __('Add New Service','tt_cpt'),
            'add_new_item'=> __('Add New Service','tt_cpt'),
            'edit_item' => __('Edit Service','tt_cpt'),
            'view_item'=> __('View Service','tt_cpt'),
            'search_items'=> __('Search Service','tt_cpt'),
            'not_found' => __('No Service Found','tt_cpt'),
			),
		'description' => __('Add your services','tt_cpt'),		
		'public' => true,
		'menu_position' => 10,
		'menu_icon' => 'dashicons-menu',
		'supports' => array('title'),
        'has_archive' => 'services'
		));
  
  /* Register Team post type */
  register_post_type('team',array(
		'labels' => array(
			'name' => __('Team Members','tt_cpt'),
            'singular_name' => __('Team Member','tt_cpt'),
            'all_items' =>__('All Team Members','tt_cpt'),
            'add_new'=> __('Add New Team Member','tt_cpt'),
            'add_new_item'=> __('Add New Team Member','tt_cpt'),
            'edit_item' => __('Edit Team Member','tt_cpt'),
            'view_item'=> __('View Team Member','tt_cpt'),
            'search_items'=> __('Search Team Member','tt_cpt'),
            'not_found' => __('No Team Member Found','tt_cpt'),
			),
		'description' => __('Add your Team Members','tt_cpt'),		
		'public' => true,
		'menu_position' => 10,
		'menu_icon' => 'dashicons-groups',
		'supports' => array('title'),
        'has_archive' => 'team'
		));
  
  /* Register Testimonials post type */
  register_post_type('testimonials',array(
		'labels' => array(
			'name' => __('Testimonials','tt_cpt'),
            'singular_name' => __('Testimonial','tt_cpt'),
            'all_items' =>__('All Testimonials','tt_cpt'),
            'add_new'=> __('Add New Testimonial','tt_cpt'),
            'add_new_item'=> __('Add New Testimonial','tt_cpt'),
            'edit_item' => __('Edit Testimonial','tt_cpt'),
            'view_item'=> __('View Testimonial','tt_cpt'),
            'search_items'=> __('Search Testimonial','tt_cpt'),
            'not_found' => __('No Testimonial Found','tt_cpt'),
			),
		'description' => __('Add Testimonial','tt_cpt'),		
		'public' => true,
		'menu_position' => 10,
		'menu_icon' => 'dashicons-format-quote',
		'supports' => array('title'),
        'has_archive' => 'testimonials'
		));
  
   
  /* Register Clients post type */
  register_post_type('clients',array(
		'labels' => array(
			'name' => __('Clients','tt_cpt'),
            'singular_name' => __('Client','tt_cpt'),
            'all_items' =>__('All Clients','tt_cpt'),
            'add_new'=> __('Add New Client','tt_cpt'),
            'add_new_item'=> __('Add New Client','tt_cpt'),
            'edit_item' => __('Edit Client','tt_cpt'),
            'view_item'=> __('View Client','tt_cpt'),
            'search_items'=> __('Search Client','tt_cpt'),
            'not_found' => __('No Client Found','tt_cpt'),
			),
		'description' => __('Add Client','tt_cpt'),		
		'public' => true,
		'menu_position' => 10,
		'menu_icon' => 'dashicons-shield',
		'supports' => array('title'),
        'has_archive' => 'clients'
		)); 
  
  /* Register Skills post type */
  register_post_type('skills',array(
		'labels' => array(
			'name' => __('Skills','tt_cpt'),
            'singular_name' => __('Skill','tt_cpt'),
            'all_items' =>__('All Skills','tt_cpt'),
            'add_new'=> __('Add New Skill','tt_cpt'),
            'add_new_item'=> __('Add New Skill','tt_cpt'),
            'edit_item' => __('Edit Skill','tt_cpt'),
            'view_item'=> __('View Skill','tt_cpt'),
            'search_items'=> __('Search Skill','tt_cpt'),
            'not_found' => __('No Skill Found','tt_cpt'),
			),
		'description' => __('Add Skill','tt_cpt'),		
		'public' => true,
		'menu_position' => 10,
		'menu_icon' => 'dashicons-hammer',
		'supports' => array('title'),
        'has_archive' => 'skills'
		)); 
  
  /* Register Pricing post type */
  register_post_type('pricing',array(
		'labels' => array(
			'name' => __('Pricing','tt_cpt'),
            'singular_name' => __('Pricing','tt_cpt'),
            'all_items' =>__('All Pricings','tt_cpt'),
            'add_new'=> __('Add New Pricing','tt_cpt'),
            'add_new_item'=> __('Add New Pricing','tt_cpt'),
            'edit_item' => __('Edit Pricing','tt_cpt'),
            'view_item'=> __('View Pricing','tt_cpt'),
            'search_items'=> __('Search Pricing','tt_cpt'),
            'not_found' => __('No Pricing Found','tt_cpt'),
			),
		'description' => __('Add Pricing','tt_cpt'),		
		'public' => true,
		'menu_position' => 10,
		'menu_icon' => 'dashicons-cart',
		'supports' => array('title'),
        'has_archive' => 'pricing'
		)); 
}