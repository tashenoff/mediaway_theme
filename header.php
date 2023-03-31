<!DOCTYPE html>
<html class="scroll-smooth" <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php wp_head(); ?>



	<script>
		// It's best to inline this in `head` to avoid FOUC (flash of unstyled content) when changing pages or themes
		if (
			localStorage.getItem('color-theme') === 'dark' ||
			(!('color-theme' in localStorage) &&
				window.matchMedia('(prefers-color-scheme: dark)').matches)
		) {
			document.documentElement.classList.add('dark');
		} else {
			document.documentElement.classList.remove('dark');
		}
	</script>



</head>

<body class="bg-gray-200 dark:bg-slate-900 dark:text-slate-400 ">

	<?php do_action('tailpress_site_before'); ?>

	<div id="page" class="min-h-screen flex flex-col">

		<?php do_action('tailpress_header'); ?>

		<header id="#header" class="dark:bg-slate-900 dark:text-slate-400 w-full header z-60 transition-all duration-1000 ease-in-out <? if ( current_user_can( 'administrator' ) ) { echo 'mt-[28px]';} else { echo 'mt-[0px]';}?>">


			<div
				class="lg:flex lg:justify-between  lg:items-center py-6  left-0 top-0 w-full z-50 bg-primary text-slate-400">
				<div class="mx-auto container">
					<div class="flex justify-between items-center w-full">



						<div class="flex items-center">
							<div class="mr-10">

								<a href="/">
									<img class="w-[120px]"
										src="<?php echo get_template_directory_uri(); ?>/img/llogo.svg" alt="">
								</a>

								<div class="lg:hidden">
									<a href="#" aria-label="Toggle navigation" id="primary-menu-toggle">
										<svg viewBox="0 0 20 20" class="inline-block w-6 h-6" version="1.1"
											xmlns="http://www.w3.org/2000/svg"
											xmlns:xlink="http://www.w3.org/1999/xlink">
											<g stroke="none" stroke-width="1" fill="currentColor" fill-rule="evenodd">
												<g id="icon-shape">
													<path
														d="M0,3 L20,3 L20,5 L0,5 L0,3 Z M0,9 L20,9 L20,11 L0,11 L0,9 Z M0,15 L20,15 L20,17 L0,17 L0,15 Z"
														id="Combined-Shape"></path>
												</g>
											</g>
										</svg>
									</a>
								</div>
							</div>

							<?php
							wp_nav_menu(
								array(
									'container_id' => 'primary-menu',
									'container_class' => 'hidden bg-gray-100 mt-4 p-4 lg:mt-0 lg:p-0 lg:bg-transparent lg:block',
									'menu_class' => 'lg:flex lg:-mx-4',
									'theme_location' => 'primary',
									'li_class' => 'lg:mx-4',
									'fallback_cb' => false,
								)
							);
							?>
						</div>

						<div class="div">
							<a class="mr-5" href="">87779997877</a>


							<button id="myBtn" class="btn btn-secondary">Заказать
								звонок</button>


							<!-- Dark mode switcher -->
							<button class="ml-5" id="theme-toggle" type="button"
								class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
								<svg id="theme-toggle-dark-icon" class="w-5 h-5 hidden" fill="currentColor"
									viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
									<path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
								</svg>
								<svg id="theme-toggle-light-icon" class="w-5 h-5 hidden" fill="currentColor"
									viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
									<path
										d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
										fill-rule="evenodd" clip-rule="evenodd"></path>
								</svg>
							</button>
							<!-- Dark mode switcher end -->



						</div>
					</div>
				</div>


			</div>
		</header>

		<div id="content" class="site-content <? if ( current_user_can( 'administrator' ) ) { echo 'mt-[28px]';} else { echo 'mt-[88px]';}?>">

				<main>

				<?php do_action('tailpress_content_start'); ?>