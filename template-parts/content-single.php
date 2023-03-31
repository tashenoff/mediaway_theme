<div class="grid grid-cols-12 gap-4">
	<div class="<? 	if (in_category(4)) { echo 'col-span-9';} else { echo 'col-span-12';} ?>">		

		<?get_template_part('template-parts/product', 'description');?>
		<?get_template_part('template-parts/product', 'advantage');?>


		<?php
		if (in_category(6)) {
			get_template_part('template-parts/price', 'card');
		} else {
			echo 'это другая категория';
		}
		?>







	</div>

	<div class="col-span-3 ">


		<?php
		if (in_category(4)) {
			get_template_part('template-parts/sidebar', 'banner');
		}
		?>




	</div>

</div>