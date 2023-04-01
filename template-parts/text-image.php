<?php $page_id = isset($args['page_id']) ? $args['page_id'] : ''; ?>

<?php if (have_rows('image_text', $page_id)) : $i = 0; ?>

	<?php while (have_rows('image_text', $page_id)) : the_row(); ?>
		<div class="container mx-auto grid grid-cols-1  sm:grid-cols-2 lg:grid-cols-12">
			<?php
			$text_class = 'sm:col-start-1 lg:col-start-1 lg:col-span-5';
			$img_class = 'sm:col-start-2 lg:col-start-6 lg:col-span-7';
			$shadow = 'shadow-image-l';
			if ($i % 2 !== 0) {
				$text_class = 'sm:col-start-2 lg:col-start-8 lg:col-span-5';
				$img_class = 'sm:col-start-1 lg:col-start-1 lg:col-span-7';
				$shadow = 'shadow-image-r';
			}
			?>
			<div class="<?= $text_class; ?> sm:row-start-1 px-[15px] my-5 prose max-w-full text-black prose-p:text-base prose-p:mb-9 prose-li:list-none prose-li:relative prose-li:pl-9 prose-li:before:absolute prose-li:before:top-3 prose-li:before:left-0 prose-li:before:w-4 prose-li:before:h-2 prose-li:before:border-l-2 prose-li:before:border-b-2 prose-li:before:border-primary prose-li:before:-translate-x-1/2 prose-li:before:-translate-y-3/4 prose-li:before:-rotate-45 observe faded-out pt-4">
				<?php if ($text = get_sub_field('text')) : ?>

					<?= $text; ?>

				<?php endif; ?>
				<?php if ($button = get_sub_field('button')) : ?>

					<a href="<?= esc_url($button['url']); ?>" class="btn btn--primary observe faded-out">
						<?= $button['title']; ?>
					</a>

				<?php endif; ?>
			</div>
			<div class="<?= $img_class; ?> sm:row-start-1 px-[15px] grid sm:grid-cols-7 my-5">
				<?php if ($image = get_sub_field('image')) : ?>

					<?php
					$photo_col = ($i % 2 !== 0) ? 'md:col-start-1' : 'md:col-start-2';
					$motto_col = ($i % 2 !== 0) ? 'md:col-start-2' : 'md:col-start-1';
					?>

					<?= wp_get_attachment_image($image, 'text-img', '', ['class' => 'w-full h-full object-cover rounded-3xl  sm:col-span-full md:col-span-6 observe faded-out ' . $photo_col . ' ' . $shadow]); ?>

					<?php if ($motto = get_sub_field('motto')) : ?>

						<div class="px-[15px] xs:px-10 sm:px-[15px] md:px-10 lg:px-20 py-7 text-white font-light text-2xl xs:text-3xl sm:text-2xl md:text-3xl lg:text-4xl italic md:col-span-6 bg-primary shadow h-fit rounded-3xl sm:col-span-full md:-mt-10 <?= $motto_col; ?> observe faded-out">
							<?= $motto; ?>
						</div>

					<?php endif; ?>

				<?php endif; ?>
			</div>



		</div>
	<?php $i++;
	endwhile; ?>


<?php endif; ?>