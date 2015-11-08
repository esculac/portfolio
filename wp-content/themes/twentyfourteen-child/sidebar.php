<?php
/**
 * The Sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

<div id="secondary">
	<?php if(is_front_page()) : ?>
		<em>Welcome to my site!</em>
	<?php endif ?>

	<!-- Check if there is a blog info, if so, display it. -->
	<!-- Default: "Just another WordPress site" -->
	<?php
		$description = get_bloginfo( 'description', 'display' );
		if ( ! empty ( $description ) ) :
	?>
	<h2 class="site-description"><?php echo esc_html( $description ); ?></h2>
	<?php endif; ?>

	<div class="sidebar-link hvr-fade" display="block" href="index.php/portfolio"> Portfolio </div>
	<div class="sidebar-link hvr-fade"> About Me  </div>
	<div class="sidebar-link hvr-fade"> Resume    </div>		



</div><!-- #secondary -->
