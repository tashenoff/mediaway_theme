<?php

/**
 * Theme setup.
 */
function tailpress_setup()
{
	add_theme_support('title-tag');

	register_nav_menus(
		array(
			'primary' => __('Primary Menu', 'tailpress'),
		)
	);

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);

	add_theme_support('custom-logo');
	add_theme_support('post-thumbnails');

	add_theme_support('align-wide');
	add_theme_support('wp-block-styles');

	add_theme_support('editor-styles');
	add_editor_style('css/editor-style.css');
}

add_action('after_setup_theme', 'tailpress_setup');

/**
 * Enqueue theme assets.
 */
function tailpress_enqueue_scripts()
{
	$theme = wp_get_theme();

	wp_enqueue_style('tailpress', tailpress_asset('css/app.css'), array(), $theme->get('Version'));
	wp_enqueue_script('swiper', 'https://unpkg.com/swiper/swiper-bundle.min.js', array(), null, true );
	wp_enqueue_style( 'swiper', 'https://unpkg.com/swiper@7/swiper-bundle.min.css' );
	wp_enqueue_script('tailpress', tailpress_asset('js/app.js'), array(), $theme->get('Version'));
	wp_enqueue_script( 'jquery' );



}

add_action('wp_enqueue_scripts', 'tailpress_enqueue_scripts');

/**
 * Get asset path.
 *
 * @param string  $path Path to asset.
 *
 * @return string
 */
function tailpress_asset($path)
{
	if (wp_get_environment_type() === 'production') {
		return get_stylesheet_directory_uri() . '/' . $path;
	}

	return add_query_arg('time', time(), get_stylesheet_directory_uri() . '/' . $path);
}

/**
 * Adds option 'li_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The curren item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function tailpress_nav_menu_add_li_class($classes, $item, $args, $depth)
{
	if (isset($args->li_class)) {
		$classes[] = $args->li_class;
	}

	if (isset($args->{"li_class_$depth"})) {
		$classes[] = $args->{"li_class_$depth"};
	}

	return $classes;
}

add_filter('nav_menu_css_class', 'tailpress_nav_menu_add_li_class', 10, 4);

/**
 * Adds option 'submenu_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The curren item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function tailpress_nav_menu_add_submenu_class($classes, $args, $depth)
{
	if (isset($args->submenu_class)) {
		$classes[] = $args->submenu_class;
	}

	if (isset($args->{"submenu_class_$depth"})) {
		$classes[] = $args->{"submenu_class_$depth"};
	}

	return $classes;
}

add_filter('nav_menu_submenu_css_class', 'tailpress_nav_menu_add_submenu_class', 10, 3);



remove_filter('the_content', 'wpautop');
remove_filter('term_description', 'wpautop');


add_theme_support('post-thumbnails'); // для всех типов постов



function add_custom_meta_box()
{
	global $post;
	if (in_category(6, $post)) {
		add_meta_box(
			'custom_meta_box',
			// ID 
			'Custom Meta Box',
			// Заголовок 
			'show_custom_meta_box',
			// Функция, которая отображает форму 
			'post',
			// Тип записи 
			'normal',
			// Место расположения 
			'default' // Приоритет 
		);
	}
}
add_action('add_meta_boxes', 'add_custom_meta_box');

function show_custom_meta_box()
{
	global $post;
	$meta = get_post_meta($post->ID, 'custom_field_name', true);
	?>
	<input type="hidden" name="custom_meta_box_nonce" value="<?php echo wp_create_nonce(basename(__FILE__)); ?>">
	<p>
		<label for="custom_field_name">Custom Field:</label>
		<br>
		<input type="text" name="custom_field_name" id="custom_field_name" class="regular-text"
			value="<?php echo esc_attr($meta); ?>">
	</p>
<?php
}



function save_custom_meta_box($post_id)
{
	if (!isset($_POST['custom_meta_box_nonce']) || !wp_verify_nonce($_POST['custom_meta_box_nonce'], basename(__FILE__))) {
		return $post_id;
	}

	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
		return $post_id;
	}

	if (!current_user_can('edit_post', $post_id)) {
		return $post_id;
	}

	$new_meta_value = (isset($_POST['custom_field_name']) ? sanitize_text_field($_POST['custom_field_name']) : '');
	$meta_key = 'custom_field_name';
	$meta_value = get_post_meta($post_id, $meta_key, true);
	if ($new_meta_value && '' == $meta_value) {
		add_post_meta($post_id, $meta_key, $new_meta_value, true);
	} elseif ($new_meta_value && $new_meta_value != $meta_value) {
		update_post_meta($post_id, $meta_key, $new_meta_value);
	} elseif ('' == $new_meta_value && $meta_value) {
		delete_post_meta($post_id, $meta_key, $meta_value);
	}
}
add_action('save_post', 'save_custom_meta_box');


add_action( 'template_redirect', function() {
	is_user_logged_in() || auth_redirect();
});


add_action( 'login_head', 'true_change_login_logo' );
 
function true_change_login_logo() {
	echo '<style>
	#login h1 a{
		background-image : url(' . get_stylesheet_directory_uri() . '/img/llogo.svg);
	}
	</style>';
}