<?php $add_class = (isset($args['add_class'])) ? $args['add_class'] : ''; ?>


<a href="<?= esc_url(get_permalink(61)) ?>" class="rounded-3xl overflow-hidden <?= $add_class; ?> ">
	<div class="relative group/gallery">
		<?php $count = 1; ?>
		<div class="block relative pb-[76%] w-full bg-transparent group-hover/gallery:bg-primary bg-center bg-cover bg-no-repeat bg-blend-darken transition-all duration-500" style="background-image: url('<?= get_the_post_thumbnail_url('', 'card-thumb'); ?>')">
		</div>

		<span class="block absolute top-1/2 left-1/2 opacity-0 -translate-x-1/2 -translate-y-1/2 transition-opacity duration-200 group-hover/gallery:opacity-100 group-hover/gallery:delay-200 pointer-events-none font-kranto leading-none">
			<img src="<?= get_template_directory_uri(); ?>/dist/images/magnifier.png" alt="" class="w-11">
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
</a>