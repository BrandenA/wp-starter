<?php 
	// Adding theme support for menus and post-thumbnails 
	add_theme_support("menus");
	add_theme_support("post-thumbnails");


	// Register the theme menus 
	function register_theme_menus() 
	{
		// When registering your menus uncomment and change menu name as appropriate.
		// register_nav_menus(array('primary-menu' => __('Primary Menu')));
	}

	// add the register theme function to be called at wordpress init.
	// add_action('init', 'register_theme_menus');


	// enqueue all the css styles
	function wz_theme_styles()
	{
		// These will enque the font awesome and bootstrap libraries via CDN
		wp_enqueue_style('font_awesome_css', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');
		wp_enqueue_style('bootstrap_css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css');
		wp_enqueue_style('main_css', get_template_directory_uri().'/style.css');
	}
	add_action('wp_enqueue_scripts', 'wz_theme_styles');


	// enqueue all the js scripts 	
	function wz_theme_js()
	{
		wp_enqueue_script('main_js', get_template_directory_uri().'/assets/js/main.js', array('jquery'), '', true);
		wp_enqueue_script('bootstrap_js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js', array('jquery'), '', true);
	}
	add_action('wp_enqueue_scripts', 'wz_theme_js');


	require_once('wp_bootstrap_navwalker.php');


	// Custom functions 
	/*
		name: get_post_count()
		description : This function will return the count of post that are past a cirtain date.

		params: 
		$before - a boolean that determines if were checking for post past a certain date or before.
		$date - The cut off date for count posts either before and after.
		$posts - The result set ( the wp query obj ).
		$date_field - The name of the custom date field.
	*/
	function get_post_count( $past = null, $date = null, $posts = null, $date_field = null )
	{
		$count = null;

		// Check that we have a post obj.
		if (!empty($posts)) 
		{
			// Check if a date had been set.
			if (!empty($date)) 
			{	
				// Check if the result obj has posts
				if ( $posts->have_posts() ) 
				{
					// For each post...
					while ( $posts->have_posts() ) : $posts->the_post();

						// If the before param is set to true we are looking for 
						if (!$past) 
						{
							if (strtotime($date) <= strtotime(get_field($date_field)))
							{
								$count++;
							}
						}
						else
						{
							if (strtotime($date) >= strtotime(get_field($date_field)))
							{
								$count++;
							}
						}

					endwhile;

					return $count;
				} 	
			}
			else
			{
				// If no date has been set and a result set is present we aren't concerned about a date range
				// so just return the count of the result set.
				return $posts->post_count;
			}
		}
		else
		{
			// If not return null, nothing we can do here.
			return null;
		}
	}

	// This function will allow you to make custom excerpts 
	function make_excerpt($text = null, $length = null)
	{
		if (strlen($text) > $length)
		{
		    $offset = ($length - 3) - strlen($text);
		    $text = substr($text, 0, strrpos($text, ' ', $offset)) . '...';
		}

		return $text;
	}



 ?>


