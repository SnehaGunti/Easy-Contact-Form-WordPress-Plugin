<?php
/**
 * Title: Archive Full Width
 * Slug: patterns-fitness/list-archive-full-width
 * Template Types: archive, home, search, category, tag, author, date
 * Description: Full-width layout template for displaying archives without sidebars.
 *
 * @package    Patterns_Fitness
 * @subpackage Patterns_Fitness/patterns
 * @since      1.0.0
 */

?>
<!-- wp:template-part {"slug":"header-absolute","tagName":"header"} /-->
<!-- wp:template-part {"slug":"list-archive-header", "align":"full"} /-->

<!-- wp:group {"tagName":"main","metadata":{"name":"Main"},"align":"full","layout":{"type":"constrained"}} -->
<main class="wp-block-group alignfull">
	<!-- wp:spacer {"height":"var:preset|spacing|80"} -->
    <div style="height:var(--wp--preset--spacing--80)" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
	<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull">
		
		<!-- wp:pattern {"slug":"patterns-fitness/query-list"} /-->
	</div>
	<!-- /wp:group -->

</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->
