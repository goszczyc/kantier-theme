<?php
$args = wp_parse_args($args, array(
	'menu' => null,
	'class' => null
));
$menu = wp_get_menu_array($args['menu']);
$current = ($item['current']) ? 'bg-primary text-white' : '';
?>
<ul class="flex flex-col">
	<?php foreach ($menu['menus'] as $item) : ?>
		<li class="relative ">
			<a href="<?php echo $item['url'] ?>" class="inline-block text-xl py-1 font-bold <?php if ($item['current']) echo 'text-primary'; ?> hover:text-primary transition-colors md:text-lg">
				<?php echo $item['title'] ?>
			</a>

		</li>
	<?php endforeach; ?>
</ul>