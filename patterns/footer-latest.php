<?php
/**
 * Title: Footer Latest
 * Slug: codersblocks/footer-latest
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: Stylish footer with logo, title, tagline, two link columns, and social icons.
 *
 * @package WordPress
 * @subpackage Coders-blocks
 * @since Coders Blocks 1.0
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"60px","bottom":"50px"}},"color":{"background":"#111111","text":"#ffffff"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-text-color has-background" style="background-color:#111111;color:#ffffff;padding-top:60px;padding-bottom:50px">
	<!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"layout":{"type":"default"}} -->
		<div class="wp-block-group">
			<!-- wp:site-logo {"width":80} /-->
			<!-- wp:site-title {"style":{"typography":{"fontSize":"20px"}}} /-->
			<!-- wp:site-tagline {"style":{"typography":{"fontSize":"14px"}}} /-->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"},"style":{"spacing":{"blockGap":"60px"}}} -->
		<div class="wp-block-group">
			<!-- wp:group {"layout":{"type":"default"},"style":{"spacing":{"blockGap":"10px"}}} -->
			<div class="wp-block-group">
				<!-- wp:heading {"level":6,"style":{"typography":{"textTransform":"uppercase","fontSize":"14px"}}} -->
				<h6>Quick Links</h6>
				<!-- /wp:heading -->
				<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
					<!-- wp:navigation-link {"label":"Blog","url":"#"} /-->
					<!-- wp:navigation-link {"label":"About","url":"#"} /-->
					<!-- wp:navigation-link {"label":"FAQs","url":"#"} /-->
					<!-- wp:navigation-link {"label":"Authors","url":"#"} /-->
				<!-- /wp:navigation -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"layout":{"type":"default"},"style":{"spacing":{"blockGap":"10px"}}} -->
			<div class="wp-block-group">
				<!-- wp:heading {"level":6,"style":{"typography":{"textTransform":"uppercase","fontSize":"14px"}}} -->
				<h6>Resources</h6>
				<!-- /wp:heading -->
				<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
					<!-- wp:navigation-link {"label":"Events","url":"#"} /-->
					<!-- wp:navigation-link {"label":"Shop","url":"#"} /-->
					<!-- wp:navigation-link {"label":"Patterns","url":"#"} /-->
					<!-- wp:navigation-link {"label":"Themes","url":"#"} /-->
				<!-- /wp:navigation -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- wp:social-links {"iconColor":"white","iconColorValue":"#ffffff","openInNewTab":true,"layout":{"type":"flex","justifyContent":"left"}} -->
		<ul class="wp-block-social-links has-icon-color">
			<!-- wp:social-link {"url":"https://facebook.com","service":"facebook"} /-->
			<!-- wp:social-link {"url":"https://twitter.com","service":"twitter"} /-->
			<!-- wp:social-link {"url":"https://instagram.com","service":"instagram"} /-->
			<!-- wp:social-link {"url":"https://linkedin.com","service":"linkedin"} /-->
		</ul>
		<!-- /wp:social-links -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->