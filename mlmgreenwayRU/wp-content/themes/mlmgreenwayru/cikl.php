<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="col-sm-4 sm-margin-b-50">
	<div class="margin-b-20">
		<div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
			<?php echo get_the_post_thumbnail(get_the_ID(), 'full'); ?>
		</div>
	</div>
	<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <span class="text-uppercase margin-l-20">Уборка</span></h4>
	<?php the_excerpt(); ?>
	<a class="link" href="<?php the_permalink(); ?>">Смотреть</a>
</div>

<?php
endwhile;

else :

get_template_part('template-parts/content', 'none');

endif;
?>