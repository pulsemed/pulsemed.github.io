<?php
/**
 * Blomarine skin functions, hooks and definitions.
 *
 * @link    https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package BeClinic
 */

add_filter( 'beclinic_breadcrumbs_settings', 'beclinic_blomarine_skin_breadcrumbs_settings' );

// Add new team template
add_filter( 'cherry_team_templates_list', 'beclinic_blomarine_cherry_team_templates_list' );

// Add template to tm-testimonials templates list.
add_filter( 'tm_testimonials_templates_list', 'beclinic_blomarine_testimonials_templates_list' );

function beclinic_blomarine_skin_breadcrumbs_settings($args) {
	$args['wrapper_format'] = '<div class="container"><div class="row">%1$s<div class="breadcrumbs__items">%2$s</div></div></div>';

	return $args;
}

// Add new team template
function beclinic_blomarine_cherry_team_templates_list( $tmpl_list ) {
	$tmpl_list['grid-boxes-blomarine'] = 'grid-boxes-blomarine.tmpl';
	return $tmpl_list;
}

// Add template to tm-testimonials templates list.
function beclinic_blomarine_testimonials_templates_list( $tmpl_list ) {
	$tmpl_list['default-center-blomarine.tmpl'] = 'default-center-blomarine.tmpl';

	return $tmpl_list;
}
