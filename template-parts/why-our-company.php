<section class="container px-[15px] mx-auto mt-16">
	

	<?php if ($why_heading = get_field('why_heading')) : ?>


		<h2 class="text-5xl text-center mb-4 font-kranto font-bold">
			<?= $why_heading; ?>
		</h2>

	<?php endif; ?>

	<?php if ($why_subheading = get_field('why_subheading')) : ?>

		<p class="text-base text-gray text-center mb-8">
			<?= $why_subheading; ?>
		</p>

	<?php endif; ?>

	<?php if (have_rows('reasons')) : ?>
		

		<div class="grid grid-cols-1 xs:grid-cols-2 md:grid-cols-3 gap-[1.875rem] mt-8 ">

			<?php while (have_rows('reasons')) : the_row(); ?>

				<div class="flex flex-col items-center group/reason observe faded-out">

					<?php if ($icon = get_sub_field('icon')) : ?>

						<div class="relative bg-l-gray w-full max-w-[120px] aspect-square h-full max-h-[120px] rounded-full overflow-hidden before:absolute before:w-full before:h-full before:border-[15px] before:border-primary before:border-opacity-50 before:rounded-full before:-top-1/2 before:left-1/2 mb-3 group-[:nth-child(2)]/reason:before:top-1/2 group-[:nth-child(2)]/reason:before:-left-1/2 group-[:nth-child(3)]/reason:before:-top-1/2 group-[:nth-child(3)]/reason:before:-left-1/2 group-[:nth-child(4)]/reason:before:top-1/2 group-[:nth-child(4)]/reason:before:left1/2 group-[:nth-child(5)]/reason:before:-top-1/2 group-[:nth-child(5)]/reason:before:-left-1/2 group-[:nth-child(6)]/reason:before:top-1/2 group-[:nth-child(6)]/reason:before:-left-1/3">

							<?= wp_get_attachment_image($icon, 'full', '', ['class' => 'absolute top-1/2 left-1/2 w-7/12 -translate-x-1/2 - transalte-y-1/2 -transalte-x-1/2 -translate-y-1/2 transition-transform duration-300 group-hover/reason:scale-105']); ?>

						</div>

					<?php endif; ?>

					<?php if ($text = get_sub_field('text')) : ?>

						<p class="text-center text-lg font-bold observe faded-out">
							<?= $text; ?>
						</p>

					<?php endif; ?>

				</div>

			<?php endwhile; ?>

		</div>

	<?php endif; ?>

</section>