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
 * GatherPress "Seasons" plugin Configuration
 * 
 * @see https://github.com/carstingaxion/gatherpress-seasons
 * 
 **************************************************************************************************************************/



/**
* Filters the labels of a specific post type.
*
* @param object $labels Object with labels for the post type as member variables.
* @return object Object with labels for the post type as member variables.
*/
add_filter('post_type_labels_gatherpress_season', function ( object $labels ) : object {

	// $_en_labels = array(
	// 	'name'                     => 'Chapters',
	// 	'singular_name'            => 'Chapter',
	// 	'add_new'                  => 'Add New',
	// 	'add_new_item'             => 'Add New Chapter',
	// 	'edit_item'                => 'Edit Chapter',
	// 	'new_item'                 => 'New Chapter',
	// 	'view_item'                => 'View Chapter',
	// 	'view_items'               => 'View Chapters',
	// 	'search_items'             => 'Search Chapters',
	// 	'not_found'                => 'No chapters found',
	// 	'not_found_in_trash'       => 'No chapters found in Trash',
	// 	'parent_item_colon'        => 'Parent Chapter:',
	// 	'all_items'                => 'All Chapters',
	// 	'all_items'                => 'Chapters',
	// 	'archives'                 => 'Chapter Archives',
	// 	'attributes'               => 'Chapter Attributes',
	// 	'insert_into_item'         => 'Insert into chapter',
	// 	'uploaded_to_this_item'    => 'Uploaded to this chapter',
	// 	'featured_image'           => 'Chapter Poster',
	// 	'set_featured_image'       => 'Set chapter poster',
	// 	'remove_featured_image'    => 'Remove chapter poster',
	// 	'use_featured_image'       => 'Use as chapter poster',
	// 	'menu_name'                => 'Chapters',
	// 	'filter_items_list'        => 'Filter chapters list',
	// 	'filter_by_date'           => 'Filter chapters by date',
	// 	'items_list_navigation'    => 'Chapters list navigation',
	// 	'items_list'               => 'Chapters list',
	// 	'item_published'           => 'Chapter published.',
	// 	'item_published_privately' => 'Chapter published privately.',
	// 	'item_reverted_to_draft'   => 'Chapter reverted to draft.',
	// 	'item_trashed'             => 'Chapter moved to Trash.',
	// 	'item_scheduled'           => 'Chapter scheduled.',
	// 	'item_updated'             => 'Chapter updated.',
	// 	'item_link'                => 'Chapter Link',
	// 	'item_link_description'    => 'A link to a chapter.',
	// );
	$_de_labels = array(
		'name'                     => 'Kapitel',
		'singular_name'            => 'Kapitel',
		'add_new'                  => 'Neu hinzufügen',
		'add_new_item'             => 'Neues Kapitel hinzufügen',
		'edit_item'                => 'Kapitel bearbeiten',
		'new_item'                 => 'Neues Kapitel',
		'view_item'                => 'Kapitel ansehen',
		'view_items'               => 'Kapitel ansehen',
		'search_items'             => 'Kapitel durchsuchen',
		'not_found'                => 'Keine Kapitel gefunden',
		'not_found_in_trash'       => 'Keine Kapitel im Papierkorb gefunden',
		'parent_item_colon'        => 'Übergeordnetes Kapitel:',
		'all_items'                => 'Alle Kapitel',
		'all_items'                => 'Kapitel',
		'archives'                 => 'Kapitel-Archive',
		'attributes'               => 'Kapitel-Attribute',
		'insert_into_item'         => 'In Kapitel einfügen',
		'uploaded_to_this_item'    => 'Zu diesem Kapitel hochgeladen',
		'featured_image'           => 'Kapitel-Poster',
		'set_featured_image'       => 'Kapitel-Poster festlegen',
		'remove_featured_image'    => 'Kapitel-Poster entfernen',
		'use_featured_image'       => 'Als Kapitel-Poster verwenden',
		'menu_name'                => 'Kapitel',
		'filter_items_list'        => 'Kapitelliste filtern',
		'filter_by_date'           => 'Kapitel nach Datum filtern',
		'items_list_navigation'    => 'Navigation der Kapitelliste',
		'items_list'               => 'Kapitelliste',
		'item_published'           => 'Kapitel veröffentlicht.',
		'item_published_privately' => 'Kapitel privat veröffentlicht.',
		'item_reverted_to_draft'   => 'Kapitel in Entwurf zurückgesetzt.',
		'item_trashed'             => 'Kapitel in den Papierkorb verschoben.',
		'item_scheduled'           => 'Kapitel geplant.',
		'item_updated'             => 'Kapitel aktualisiert.',
		'item_link'                => 'Kapitel-Link',
		'item_link_description'    => 'Ein Link zu einem Kapitel.',
	);
	foreach ($_de_labels as $key => $value) {
		$labels->{$key} = $value;
	}

	return $labels;
} );



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