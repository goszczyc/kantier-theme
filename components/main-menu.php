<?php
$args = wp_parse_args($args, array(
	'menu' => null,
	'class' => null
));
$menu = wp_get_menu_array($args['menu']);
$current = ($item['current']) ? 'bg-primary text-white' : '';
?>
<ul class="flex flex-col md:flex-row items-center lg:mr-16">
	<?php foreach ($menu['menus'] as $item) : ?>
		<li class="relative text-center">
			<a href="<?php echo $item['url'] ?>" class="main-menu__item inline-block text-xl py-2 px-5 <?php if ($item['current']) echo 'text-primary'; ?> hover:text-primary transition-colors md:text-lg <?php if ($item['children']) echo 'has-sub'; ?>">
				<?php echo $item['title'] ?>
				<?php if ($item['children']) : ?>
					<span class="main-menu__arrow"></span>
				<?php endif; ?>
			</a>
			<?php if ($item['children']) : ?>
				<ul class="main-menu__sub-menu">
					<?php foreach ($item['children'] as $child) : ?>

						<li>
							<a href="<?php echo $child['url'] ?>" class="inline-block text-lg py-2 px-[15px] w-max max-w-[280px] <?php if ($item['current']) echo 'text-primary'; ?> hover:text-primary transition-colors">
								<?php echo $child['title'] ?>
							</a>
						</li>

					<?php endforeach; ?>

				</ul>

			<?php endif ?>
		</li>
	<?php endforeach; ?>
</ul>