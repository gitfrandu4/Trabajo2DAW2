<?php
/**
 * The template part for displaying a message that posts cannot be found
 *
 * @package kardealer
 * @subpackage Kar_dealer
 * @since car dealer 1.0
 */
?>
<section class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title"><?php _e( 'Nothing Found', 'kardealer' ); ?></h1>
	</header><!-- .page-header -->
            <div class="content-none">
				<img src="<?php echo esc_url(esc_url(get_template_directory_uri()).'/images/search2.png')?>" alt="<?php esc_attr_e( 'Not Found', 'kardealer' ); ?>" />
			</div>
            <br /><br />
	<div class="page-content">
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
			<p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'kardealer' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>
		<?php elseif ( is_search() ) : ?>
			<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'kardealer' ); ?></p>
			<?php get_search_form(); ?>
		<?php else : ?>
			<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'kardealer' ); ?></p>
			<?php get_search_form(); ?>
		<?php endif; ?>
	</div><!-- .page-content -->
</section><!-- .no-results -->