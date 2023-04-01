<?php if (have_rows('table_rent')) : ?>

	<section class="container px-[15px] mx-auto my-10">
		<?php if ($table_heading = get_field('table_heading')) : ?>

			<h3 class="text-2xl font-bold mb-6 font-kranto observe faded-out">
				<?= $table_heading; ?>
			</h3>

		<?php endif; ?>
		<div class="overflow-x-auto observe faded-out">
			<table class="border-collapse border-none min-w-[850px] w-full table-fixed">

				<tr class="bg-gradient-to-r from-[#f1004b] to-primary">
					<th class="text-white px-[15px] py-2 text-base text-left">
						Żuraw
					</th>
					<th class="text-white px-[15px] py-2 text-base text-left">
						Max. udźiwg
					</th>
					<th class="text-white px-[15px] py-2 text-base text-left">
						Max. wysięg
					</th>
					<th class="text-white px-[15px] py-2 text-base text-left">
						Max. wysokość*
					</th>
					<th class="text-white px-[15px] py-2 text-base text-left">
						Tabele udźwigów
					</th>
					<th class="text-white px-[15px] py-2 text-base text-left">
						Rodzaj konsrukcji
					</th>
					<th class="text-white px-[15px] py-2 text-base text-left">
						Max. pobór prądu
					</th>
					<th class="text-white px-[15px] py-2 text-base text-center">
						Katalog
					</th>
				</tr>
				<?php while (have_rows('table_rent')) :
					the_row(); ?>
					<tr class="even:bg-[#e7e7e7]">
						<?php if ($row_data = get_sub_field('row_data')) : ?>

							<td class="w-max text-base px-[15px] pl-6 py-2 whitespace-nowrap">
								<?= $row_data['crane']; ?>
							</td>
							<td class="w-max text-base px-[15px] py-2">
								<?= $row_data['max_load']; ?>
							</td>
							<td class="w-max text-base px-[15px] py-2">
								<?= $row_data['max_reach']; ?>
							</td>
							<td class="w-max text-base px-[15px] py-2">
								<?= $row_data['max_height']; ?>
							</td>
							<td class="w-max text-base px-[15px] py-2 text-center">
								<a href="<?= $row_data['table']['url']; ?>" class="inline-block" target="_blank">
									<img src="<?= get_template_directory_uri(); ?>/dist/images/pdf.png" alt="" class="w-6">
								</a>
							</td>
							<td class="w-max text-base px-[15px] py-2">
								<?= $row_data['type']; ?>
							</td>
							<td class="w-max text-base px-[15px] py-2">
								<?= $row_data['max_power_consumption']; ?>
							</td>
							<td class="w-max text-base px-[15px] py-2 text-center">
								<a href="<?= $row_data['catalogue']; ?>" class="inline-block" target="_blank">
									<img src="<?= get_template_directory_uri(); ?>/dist/images/pdf.png" alt="" class="w-6">
								</a>
							</td>

						<?php endif; ?>
					</tr>
				<?php endwhile; ?>

			</table>
		</div>

	</section>

<?php endif; ?>