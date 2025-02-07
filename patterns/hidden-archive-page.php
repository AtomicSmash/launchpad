<?php
/**
 * Title: Archive page content
 * Slug: launchpad/hidden-archive-page
 * Inserter: no
 */

?>

<!-- wp:group {"tagName":"main","metadata":{"name":"Main"}} -->
<main class="wp-block-group">
	<!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:query-title {"type":"archive","textAlign":"center","showPrefix":false} /-->

		<!-- wp:query {"queryId":0,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true}} -->
		<div class="wp-block-query">
			<!-- wp:post-template -->
			<!-- wp:post-title /-->

			<!-- wp:post-date /-->
			<!-- /wp:post-template -->

			<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
			<!-- wp:query-pagination-previous /-->

			<!-- wp:query-pagination-numbers /-->

			<!-- wp:query-pagination-next /-->
			<!-- /wp:query-pagination -->
		</div>
		<!-- /wp:query -->
	</div>
	<!-- /wp:group -->

	<!-- wp:spacer {"height":"4rem","metadata":{"name":"Bottom of page spacer","categories":["launchpad","spacers"],"patternName":"launchpad/page-spacer"},"className":"page-spacer"} -->
	<div
		style="height: 4rem"
		aria-hidden="true"
		class="wp-block-spacer page-spacer"
	></div>
	<!-- /wp:spacer -->
</main>
<!-- /wp:group -->
