</main>

<?php do_action('tailpress_content_end'); ?>

</div>

<?php do_action('tailpress_content_after'); ?>

<footer id="colophon" class="site-footer bg-primary dark:bg-slate-800 " role="contentinfo">

	<?php do_action('tailpress_footer'); ?>

	

	<div class="w-full p-5 border-t border-white border-opacity-20">
	<div class="container mx-auto text-center text-gray-500 py-10">
		Вебстудия Mediaway, создание сайтов в Астане, разработка интернет магазина, LandingPage, создание сайта
		визитки.<br>
		Разработка Website любой сложности
		Работаем с 2017 года
	</div>
	</div>



</footer>

</div>

<?php wp_footer(); ?>


<style>
	.modal {
		display: none;
		position: fixed;
		z-index: 1;
		padding-top: 100px;
		left: 0;
		top: 0;
		width: 100%;
		height: 100%;
		overflow: auto;
		background-color: rgb(0, 0, 0);
		background-color: rgba(0, 0, 0, 0.4);
	}
</style>


<div class="modal">
	<div class="modal-content">
		<span class="close">&times;</span>
		<p>Some text in the Modal..</p>
	</div>
</div>

</body>

<script>


	var swiper = new Swiper(".mySwiper", {

		slidesPerView: 1.1,
		centeredSlides: true,
		spaceBetween: 20,
		initialSlide: 1,
		loop: true,
		mousewheel: false,

		navigation: {
			prevEl: '.slider-arrow__left',
			nextEl: '.slider-arrow__right'
		},

		// Responsive breakpoints
		breakpoints: {
			// when window width is >= 320px
			320: {
				slidesPerView: 1,
				spaceBetween: 10
			},
			// when window width is >= 480px
			480: {
				slidesPerView: 1,
				spaceBetween: 10
			},
			// when window width is >= 640px
			640: {
				slidesPerView: 1.5,
				spaceBetween: 10
			}
		},


		pagination: {
			el: ".swiper-pagination",
			clickable: true,
		},
	});




	var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
	var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

	// Change the icons inside the button based on previous settings
	if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
		themeToggleLightIcon.classList.remove('hidden');
	} else {
		themeToggleDarkIcon.classList.remove('hidden');
	}

	var themeToggleBtn = document.getElementById('theme-toggle');

	themeToggleBtn.addEventListener('click', function () {

		// toggle icons inside button
		themeToggleDarkIcon.classList.toggle('hidden');
		themeToggleLightIcon.classList.toggle('hidden');

		// if set via local storage previously
		if (localStorage.getItem('color-theme')) {
			if (localStorage.getItem('color-theme') === 'light') {
				document.documentElement.classList.add('dark');
				localStorage.setItem('color-theme', 'dark');
			} else {
				document.documentElement.classList.remove('dark');
				localStorage.setItem('color-theme', 'light');
			}

			// if NOT set via local storage previously
		} else {
			if (document.documentElement.classList.contains('dark')) {
				document.documentElement.classList.remove('dark');
				localStorage.setItem('color-theme', 'light');
			} else {
				document.documentElement.classList.add('dark');
				localStorage.setItem('color-theme', 'dark');
			}
		}

	});


	// Get the modal
	var modal = document.getElementById("myModal");

	// Get the button that opens the modal
	var btn = document.getElementById("myBtn");

	// Get the <span> element that closes the modal
	var span = document.getElementsByClassName("close")[0];

	// When the user clicks the button, open the modal
	btn.onclick = function () {
		modal.style.display = "block";
	}

	// When the user clicks on <span> (x), close the modal
	span.onclick = function () {
		modal.style.display = "none";
	}

	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function (event) {
		if (event.target == modal) {
			modal.style.display = "none";
		}
	}






</script>





</html>