<?php
/**
 * Plugin Name: WUK experiments configuration
 * Description: Configuration for plugins used in WUK experiments.
 * Version:     0.1.0
 * Author:      carstenbach
 */


/************************************************************************************************************************** 
 * 
 * GatherPress core plugin Configuration
 * 
 * @see https://github.com/GatherPress/gatherpress
 * 
 **************************************************************************************************************************/

add_filter(
	sprintf(
		'register_%s_post_type_args',
		'gatherpress_event'

	),
	'wuk_experiments_register_post_type_args',
);

/**
 * Filters the arguments for registering a post type.
 * 
 * This function removes the 'gatherpress-rsvp' and 'comments' supports from the post type arguments for the 'gatherpress_event' post type.
 *
 * @param array  $args      Array of arguments for registering a post type. See the register_post_type() function for accepted arguments.
 * @return array Array of arguments for registering a post type. See the register_post_type() function for accepted arguments.
 */
function wuk_experiments_register_post_type_args( array $args ) : array {
	$_rsvp = array_search(
		'gatherpress-rsvp',
		$args['supports']
	);
	unset( $args['supports'][$_rsvp] );
	$_comments = array_search(
		'comments',
		$args['supports']
	);
	unset( $args['supports'][$_comments] );
	return $args;
}



/************************************************************************************************************************** 
 * 
 * GatherPress "Taxonomy Colors" plugin Configuration
 * 
 * @see https://github.com/carstingaxion/gatherpress-taxonomy-colors
 * 
 **************************************************************************************************************************/


add_filter( 'gptc_term_color_taxonomies', function ( array $taxonomies ): array {
    $taxonomies = ['_gatherpress_season'];
    return $taxonomies;
} );


/************************************************************************************************************************** 
 * 
 * GatherPress "Productions" plugin Configuration
 * 
 * @see https://github.com/carstingaxion/gatherpress-productions
 * 
 **************************************************************************************************************************/



// /**
// * Filters the labels of a specific post type.
// *
// * @param object $labels Object with labels for the post type as member variables.
// * @return object Object with labels for the post type as member variables.
// */
// add_filter('post_type_labels_gatherpress_play',function ( object $labels ) : object {
// $labels->name = "Stuecke";
// $labels->singular_name = "Stueck";

// return $labels;
// } );



/************************************************************************************************************************** 
 * 
 * GatherPress "Relations" plugin Configuration
 * 
 * @see https://github.com/carstingaxion/gatherpress-relations
 * 
 **************************************************************************************************************************/




add_filter( 'gatherpress_relations_departments', function ( array $departments, string $source_type ): array {
    if ( 'gatherpress_person' === $source_type ) {
        return [
            'cast'             => __( 'Cast', 'textdomain' ),
            'direction'        => __( 'Direction', 'textdomain' ),
            'design'           => __( 'Design', 'textdomain' ),
            'stage_management' => __( 'Stage Management', 'textdomain' ),
            'musicians'        => __( 'Musicians', 'textdomain' ),
            'production'       => __( 'Production', 'textdomain' ),
            'other'            => __( 'Other', 'textdomain' ),
        ];
    }
    return $departments;
}, 10, 2 );

// add_action( 'init', function() {
// register_post_type( 'gatherpress_sponsor', array(
// 	'label' => 'Sponsor',
// 	'public' => true,
// 	'show_in_rest' => true,
// 	'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', 'gatherpress-shadow-source', 'gatherpress-relations-to' ),
// ) );
// } );

// add_filter(
//     'gatherpress_relations_departments',
//     function ( array $departments, string $source_type ): array {
//         if ( 'gatherpress_sponsor' === $source_type ) {
//             return array(
//                 'gold'   => __( 'Gold',   'gatherpress-sponsors' ),
//                 'silver' => __( 'Silver', 'gatherpress-sponsors' ),
//                 'bronze' => __( 'Bronze', 'gatherpress-sponsors' ),
//             );
//         }
//         return $departments;
//     },
//     10,
//     2
// );