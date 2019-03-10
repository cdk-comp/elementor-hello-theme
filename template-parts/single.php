<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>
<?php while ( have_posts() ) : the_post(); ?>

<main id="main" class="site-main" role="main">

    <?php do_action( 'elementor_hello_theme_header_title' ); ?>

	<div class="page-content">
		<?php the_content(); ?>
	</div>

</main>

<?php endwhile;
