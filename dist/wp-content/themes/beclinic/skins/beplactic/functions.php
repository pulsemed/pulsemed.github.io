<?php
/**
 * BePlactic skin functions, hooks and definitions.
 *
 * @link    https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package BeClinic
 */

// Add new testimonials template.
add_filter( 'tm_testimonials_templates_list', 'beclinic_beplastic_modify_tm_testi_templates_list' );

/**
 * Add new testimonials template.
 *
 * @param array $list Templates list.
 *
 * @return array
 */
function beclinic_beplastic_modify_tm_testi_templates_list( $list = array() ) {

	$list['boxed-2.tmpl'] = 'boxed-2.tmpl';

	return $list;
}

add_filter( 'beclinic_breadcrumbs_settings', 'beclinic_beplastic_skin_breadcrumbs_settings' );

function beclinic_beplastic_skin_breadcrumbs_settings($args) {
	$args['wrapper_format'] = '<div class="container"><div class="row">%1$s<div class="breadcrumbs__items">%2$s</div></div></div>';

	return $args;
}

