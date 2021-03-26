<?php
/**
 * BeMind skin functions, hooks and definitions.
 *
 * @link    https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package BeMind
 */

// Customization cherry-team-members plugin.
add_filter( 'cherry_team_templates_list', 'beclinic_bemind_cherry_team_templates_list' );

/**
 *  Add template to cherry services-list templates list;
 */
function beclinic_bemind_cherry_team_templates_list( $tmpl_list ) {

	$tmpl_list['list-bemind'] = 'list-bemind.tmpl';

	return $tmpl_list;
}
