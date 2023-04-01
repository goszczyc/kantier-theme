<?php
$query_args = array(
	'post_type' => 'realizations',
	'posts_per_page' => 8
);

// The Query

$realizations = new WP_Query($query_args);

if ($realizations->have_posts()) : ?>


	<section class="container mx-auto px-[15px] my-16 relative observe faded-out">

		<div class="flex justify-between mb-10">
			<div class="group/slider swiper-button-prev flex justify-center items-center xl:absolute top-1/2 right-full w-12 h-12 rounded-full border border-solid border-primary cursor-pointer hover:bg-primary transition-colors duration-300">
				<img src="<?= get_template_directory_uri(); ?>/dist/images/arrow-left.svg" alt="" class="w-3 h-auto group-hover/slider:brightness-200 transition-all">
			</div>
			<?php if ($realization_slider_heading = get_field('realization_slider_heading', 'options')) : ?>

				<h2 class="text-3xl text-center font-kranto md:text-left xs:text-4xl sm:text-5xl md:text-[54px] font-bold max-2xl:px-[15px]">
					<?= $realization_slider_heading; ?>
				</h2>

			<?php endif; ?>
			<div class="group/slider swiper-button-next flex justify-center items-center xl:absolute top-1/2 left-full w-12 h-12 rounded-full border-2 border-solid border-primary cursor-pointer hover:bg-primary transition-colors duration-300">
				<img src="<?= get_template_directory_uri(); ?>/dist/images/arrow-right.svg" alt="" class="w-3 h-auto group-hover/slider:brightness-200 transition-all">
			</div>
		</div>
		<div class="realizations-slider swiper mb-7">

			<div class="swiper-wrapper">
				<?php while ($realizations->have_posts()) : $realizations->the_post(); ?>

					<?php get_template_part('/components/realization-card-link', '', ['add_class' => 'swiper-slide', 'gallery' => false]); ?>

				<?php endwhile; ?>
			</div>


		</div>
		<div class="flex justify-center">
			<a href="<?= get_permalink(61); ?>" class="btn btn--primary btn--big-padding mx-auto">Zobacz wszystkie realizacje</a>
		</div>

	</section>

<?php wp_reset_query();
endif; ?>