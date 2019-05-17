<?php
if (!defined('ABSPATH')) {
	die();
}

$args = [
	'cat' => 3,
	'showposts' => 2,
	'ignore_sticky_posts' => true
];

$loop = new WP_Query($args);

if($loop->have_posts()) :
?>

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	<div class="container">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-example-generic" data-slide-to="1"></li>
		</ol>
	</div>

	<!-- Wrapper for slides -->
	<div class="carousel-inner" role="listbox">

		<?php while ($loop->have_posts()) : $loop->the_post(); ?>

		<div class="item">
			<img class="img-responsive" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="<?php the_title(); ?>">
			<div class="container">
				<div class="carousel-centered">
					<div class="margin-b-40">
						<h1 class="carousel-title"><?php the_title(); ?></h1>
						<p><?php the_excerpt(); ?></p>
					</div>
					<a href="<?php the_permalink(); ?>" class="btn-theme btn-theme-sm btn-white-brd text-uppercase"><?php esc_html_e('Запрос на сотрудничество', 'mlmgreenwayru') ?></a>
				</div>
			</div>
		</div>

		<?php 
		endwhile;
		wp_reset_query();
		?>

	</div>
</div>

<?php
endif;