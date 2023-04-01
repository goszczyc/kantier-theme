<?php
$query_args = array(
	'post_type' => 'realizations',
	'posts_per_page' => 8,
	'paged' => $paged
);

// The Query

$realizations = new WP_Query($query_args);

if ($realizations->have_posts()) : ?>


	<section class="container mx-auto px-[15px] realizations-container">

		<div class="grid grid-cols-1 xs:grid-cols-2 md:grid-cols-4 gap-[1.875rem]">

			<?php while ($realizations->have_posts()) : $realizations->the_post(); ?>

				<div class="rounded-3xl overflow-hidden observe faded-out">
					<div class="relative group/gallery">
						<?php $count = 1; ?>
						<a href="<?= get_the_post_thumbnail_url('', 'realization-full'); ?>" data-thumb="<?= get_the_post_thumbnail_url('', 'thumbnail'); ?>" class="block relative pb-[76%] w-full bg-transparent group-hover/gallery:bg-primary bg-center bg-cover bg-no-repeat bg-blend-darken transition-all duration-500" data-lightbox="<?= strtolower(str_replace(' ', '_', get_the_title())); ?>" style="background-image: url('<?= get_the_post_thumbnail_url('', 'card-thumb'); ?>')">

						</a>

						<span class="block absolute top-1/2 left-1/2 opacity-0 -translate-x-1/2 -translate-y-1/2 transition-opacity duration-200 group-hover/gallery:opacity-100 group-hover/gallery:delay-200 pointer-events-none">
							<img src="<?= get_template_directory_uri(); ?>/dist/images/magnifier.png" alt="" class="w-11">
						</span>

						<?php if ($realization_gallery = get_field('realization_gallery')) :
							foreach ($realization_gallery as $realization_img) : ?>

								<a href="<?= wp_get_attachment_image_url($realization_img, 'realization-full'); ?>" data-thumb="<?= wp_get_attachment_image_url($realization_img, 'thumbnail'); ?>" class="hidden" data-lightbox="<?= strtolower(str_replace(' ', '_', get_the_title())); ?>"></a>
								<?php $count++; ?>

						<?php endforeach;
						endif; ?>

						<span class="flex items-center absolute bottom-4 right-4 rounded-full px-4 py-[7px] bg-l-gray bg-opacity-80 text-base font-kranto leading-none">
							<img src="<?= get_template_directory_uri(); ?>/dist/images/image-icon.svg" alt="" class="w-5 mr-2">
							<?= $count; ?>
						</span>

					</div>
					<div class="px-[15px] py-6 bg-l-gray h-full">
						<h3 class="text-2xl font-bold mb-3">
							<?= get_the_title(); ?>
						</h3>

						<?php if (have_rows('realization_data')) : ?>

							<?php while (have_rows('realization_data')) : the_row(); ?>

								<p class="text-sm text-d-gray mb-2 last:mb-4">
									<?= get_sub_field('heading'); ?>
									<strong>
										<?= get_sub_field('info'); ?>
									</strong>
								</p>

							<?php endwhile; ?>

						<?php endif; ?>

						<?php if ($short_description = get_field('short_description')) : ?>

							<p class="text-sm text-d-gray">
								<?= $short_description; ?>
							</p>

						<?php endif; ?>
					</div>
				</div>

			<?php endwhile; ?>

		</div>

		<div class="pagination flex justify-center items-center gap-2 py-6">
			<?php pagination_bar($realizations); ?>
		</div>

	</section>

<?php wp_reset_query();
endif; ?>

<template id="gallery-template">
	<div class="fixed top-0 left-0 w-screen h-screen bg-black bg-opacity-75 backdrop-blur-sm gallery-container z-[1000]">
		<div class="container relative mx-auto pt-16 pointer-events-none">
			<button type="button" class="inline-block lightbox-exit absolute top-6 right-0 w-6 h-6 border-2 border-white border-solid rounded-full before:absolute before:top-1/2 before:left-1/2 before:w-4/5 before:h-0.5 before:bg-white before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 before:-rotate-45 after:absolute after:top-1/2 after:left-1/2 after:w-4/5 after:h-0.5 after:bg-white after:rounded-full after:-translate-x-1/2 after:-translate-y-1/2 after:rotate-45 hover:scale-105 hover:rotate-180 transition-transform duration-300 pointer-events-auto">
			</button>
		</div>

		<div class="relative max-w-[1596px] mx-auto px-[78px]">

			<div class="lightbox-images swiper max-h-[652px] mb-10">
				<div class="swiper-wrapper max-h-[652px] rounded-3xl overflow-hidden">

				</div>

			</div>
			<div class="group/slider lightbox-prev flex justify-center items-center absolute top-1/2 left-[15px] w-12 h-12 rounded-full border-2 border-solid border-white cursor-pointer hover:bg-white transition-colors duration-300">
				<img src="<?= get_template_directory_uri(); ?>/dist/images/arrow-left.svg" alt="" class="w-3 h-auto group-hover/slider:brightness-0 brightness-200 transition-all">
			</div>
			<div class="group/slider lightbox-next flex justify-center items-center absolute top-1/2 right-[15px] w-12 h-12 rounded-full border-2 border-solid border-white cursor-pointer hover:bg-white transition-colors duration-300 ">
				<img src="<?= get_template_directory_uri(); ?>/dist/images/arrow-right.svg" alt="" class="w-3 h-auto group-hover/slider:brightness-0 brightness-200 transition-all">
			</div>
		</div>
		<div class="container px-[15px] mx-auto lightbox-thumbs swiper">
			<div class="swiper-wrapper">

			</div>

		</div>
	</div>
</template>