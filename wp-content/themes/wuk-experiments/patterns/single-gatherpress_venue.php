<?php
/**
 * Title: single-gatherpress_venue
 * Slug: wuk-experiments/single-gatherpress_venue
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","area":"header"} /-->

<!-- wp:group {"layout":{"type":"grid","columnCount":6}} -->
<div class="wp-block-group"><!-- wp:post-content {"style":{"layout":{"columnSpan":4,"rowSpan":1}}} /-->

<!-- wp:post-title {"style":{"layout":{"columnSpan":2,"rowSpan":1}}} /--></div>
<!-- /wp:group -->

<!-- wp:gatherpress/venue {"patternPicked":true,"align":"wide","layout":{"type":"default"}} -->
<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"gatherpress\u002d\u002dhas-venue-address","style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group gatherpress--has-venue-address" style="margin-top:0;margin-bottom:0"><!-- wp:icon {"icon":"core/map-marker"} /-->

<!-- wp:gatherpress/venue-detail {"placeholder":"Venue address…","fieldType":"address"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|30"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--30)"><!-- wp:group {"className":"gatherpress\u002d\u002dhas-venue-phone","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group gatherpress--has-venue-phone"><!-- wp:icon {"icon":"core/mobile"} /-->

<!-- wp:gatherpress/venue-detail {"placeholder":"Venue phone…","fieldType":"phone"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gatherpress\u002d\u002dhas-venue-website","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group gatherpress--has-venue-website"><!-- wp:icon {"icon":"core/external"} /-->

<!-- wp:gatherpress/venue-detail {"placeholder":"Venue website URL…","fieldType":"url"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:gatherpress/venue-map /--></div>
<!-- /wp:group -->
<!-- /wp:gatherpress/venue -->

<!-- wp:group {"metadata":{"categories":["posts"],"patternName":"wuk-experiments/more-posts","name":"More posts"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:heading {"align":"wide","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700","letterSpacing":"1.4px"}},"fontSize":"small"} -->
<h2 class="wp-block-heading alignwide has-small-font-size" style="font-style:normal;font-weight:700;letter-spacing:1.4px;text-transform:uppercase"><?php esc_html_e('Termine hier', 'wuk-experiments');?></h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":17,"query":{"perPage":4,"pages":0,"offset":0,"postType":"gatherpress_event","order":"asc","orderBy":"datetime","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[],"format":[],"gatherpress_event_query":"upcoming","include_unfinished":1,"shadow_filter":1,"gatherpress_shadow_source_post_id":25,"gatherpress_shadow_source_post_type":"gatherpress_venue"},"namespace":"gatherpress-event-query","metadata":{"name":"Upcoming Events"},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"align":"full","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"bottom":{"color":"var:preset|color|accent-6","width":"1px"},"top":[],"right":[],"left":[]}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center","justifyContent":"space-between"}} -->
<div class="wp-block-group alignfull" style="border-bottom-color:var(--wp--preset--color--accent-6);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:post-title {"level":3,"isLink":true,"fontSize":"large"} /-->

<!-- wp:gatherpress/event-date {"displayType":"start","startDateFormat":"d. F Y","showTimezone":"no","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-4"}}}},"textColor":"accent-4","fontSize":"small"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","area":"footer"} /-->