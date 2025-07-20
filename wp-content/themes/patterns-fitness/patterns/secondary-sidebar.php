<?php
/**
 * Title: Secondary Sidebar
 * Slug: patterns-fitness/secondary-sidebar
 * Categories: posts
 * Block Types: core/template-part/secondary-sidebar
 * Description: Display a collection of blocks for secondary sidebar template part.
 *
 * @package    Patterns_Fitness
 * @subpackage Patterns_Fitness/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
    <!-- wp:pattern {"slug":"patterns-fitness/calendar"} /-->
    <!-- wp:pattern {"slug":"patterns-fitness/archives"} /-->
</div>
<!-- /wp:group -->