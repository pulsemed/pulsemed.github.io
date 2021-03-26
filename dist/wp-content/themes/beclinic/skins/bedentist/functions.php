<?php
/**
 * Default skin functions, hooks and definitions.
 *
 * @link    https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package BeClinic
 */

add_filter( 'beclinic_breadcrumbs_settings', 'beclinic_bedentist_skin_breadcrumbs_settings' );

function beclinic_bedentist_skin_breadcrumbs_settings($args) {
	$args['wrapper_format'] = '<div class="container"><div class="row">%1$s<div class="breadcrumbs__items">%2$s</div></div></div>';

	return $args;
}
