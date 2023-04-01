<?php $add_class = (isset($args['add_class'])) ? $args['add_class'] : ''; ?>


<div class="rounded-3xl overflow-hidden <?= $add_class; ?> observe faded-out">
	<div class="relative group/gallery">
		<?php $count = 1; ?>
		<a href="<?= get_the_post_thumbnail_url('', 'full'); ?>" class="block relative pb-[76%] w-full bg-transparent group-hover/gallery:bg-primary bg-center bg-cover bg-no-repeat bg-blend-darken transition-all duration-500" data-fslightbox="<?= strtolower(str_replace(' ', '_', get_the_title())); ?>" data-lightbox="<?= strtolower(str_replace(' ', '_', get_the_title())); ?>" style="background-image: url('<?= get_the_post_thumbnail_url('', 'card-thumb'); ?>')">
		</a>

		<span class="block absolute top-1/2 left-1/2 opacity-0 -translate-x-1/2 -translate-y-1/2 transition-opacity duration-200 group-hover/gallery:opacity-100 group-hover/gallery:delay-200 pointer-events-none">
			<img src="<?= get_template_directory_uri(); ?>/dist/images/magnifier.png" alt="" class="w-11">
		</span>

		<?php if ($realization_gallery = get_field('realization_gallery')) :
			foreach ($realization_gallery as $realization_img) : ?>

				<a href="<?= wp_get_attachment_image_url($realization_img, 'full'); ?>" class="hidden" data-fslightbox="<?= strtolower(str_replace(' ', '_', get_the_title())); ?>" data-lightbox="<?= strtolower(str_replace(' ', '_', get_the_title())); ?>"></a>
				<?php $count++; ?>

		<?php endforeach;
		endif; ?>

		<span class="flex items-center absolute bottom-4 right-4 rounded-full px-4 py-[7px] bg-l-gray bg-opacity-80 text-base font-kranto leading-none">
			<img src="<?= get_template_directory_uri(); ?>/dist/images/image-icon.svg" alt="" class="w-5 mr-2">
			<?= $count; ?>
		</span>

	</div>
	<div class="px-[15px] py-6 bg-l-gray h-full">
		<h3 class="text-[1.375rem] leading-none font-bold mb-3">
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