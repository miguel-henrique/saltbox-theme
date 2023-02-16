
<section class="container-fluid spaces desktop">

		<div class="container ware-house-section">
			<div class="row">
				<div class="col warehouse-title-column">
					<h2>Office Suites</h2>
				</div>
				<div class="col warehouse-button-column">
					<button>COMPARE ALL OFFICE SUITES</button>
				</div>
			</div>
		</div>

		<div class="spaces-section">

				<div class="row g-4 py-5 row-cols-1 row-cols-lg-3 cards-spaces">
					<div class="col hover-shadow cards">
						<i class="bi bi-zoom-in icon-warehouse" onclick="openModal();currentSlide(1)"></i>
						<div class="d-inline-flex align-items-center justify-content-center fs-2 mb-3 warehouse-img">
							<img alt="" loading="lazy" src="<?php bloginfo('template_directory'); ?>/img/Office_person-1.svg">
						</div>
						<h3>Office Suites - 1 Person</h3>
						<p>Elevate your solopreneur space</p>
					</div>
					<div class="col hover-shadow cards">
						<i class="bi bi-zoom-in icon-warehouse" onclick="openModal();currentSlide(2)"></i>
						<div class="d-inline-flex align-items-center justify-content-center fs-2 mb-3 warehouse-img">
							<img alt="" loading="lazy" src="<?php bloginfo('template_directory'); ?>/img/Office_person_2.svg">
						</div>
						<h3>Office Suites - 2 Person</h3>
						<p>Tailor-made for a dynamic duo</p>
					</div>
					<div class="col hover-shadow cards">
						<i class="bi bi-zoom-in icon-warehouse" onclick="openModal();currentSlide(3)"></i>
						<div class="d-inline-flex align-items-center justify-content-center fs-2 mb-3 warehouse-img">
							<img alt="" loading="lazy" src="<?php bloginfo('template_directory'); ?>/img/Office_team.svg">
						</div>
						<h3>Office Suites - Team</h3>
						<p>Collaborate with your team in a modern workspace</p>
					</div>
				</div>
		</div>


</section>


<section class="container-fluid spaces mobile">

				<div class="col warehouse-title-column">
					<h2>Office Suites</h2>
				</div>
		
			   <swiper-container space-between="5" slides-per-view="auto">
					<swiper-slide class="swiper-card">
						<div class="col hover-shadow cards">
							<i class="bi bi-zoom-in icon-warehouse" onclick="openModal();currentSlide(1)"></i>
							<div class="d-inline-flex align-items-center justify-content-center fs-2 mb-3 warehouse-img">
								<img alt="" loading="lazy" loading="lazy" class="d-block w-100" src="<?php bloginfo('template_directory'); ?>/img/Office_person-1.svg">
							</div>
							<h3>Office Suites - 1 Person</h3>
							<p>Elevate your solopreneur space</p>
						</div>
					</swiper-slide>

					<swiper-slide class="swiper-card">
						<div class="col hover-shadow cards">
							<i class="bi bi-zoom-in icon-warehouse" onclick="openModal();currentSlide(2)"></i>
							<div class="d-inline-flex align-items-center justify-content-center fs-2 mb-3 warehouse-img">
								<img alt="" loading="lazy" loading="lazy" class="d-block w-100" src="<?php bloginfo('template_directory'); ?>/img/Office_person_2.svg">
							</div>
							<h3>Office Suites - 2 Person</h3>
							<p>Tailor-made for a dynamic duo</p>
						</div>
					</swiper-slide>

					<swiper-slide class="swiper-card">
						<div class="col hover-shadow cards">
							<i class="bi bi-zoom-in icon-warehouse" onclick="openModal();currentSlide(3)"></i>
							<div class="d-inline-flex align-items-center justify-content-center fs-2 mb-3 warehouse-img">
								<img alt="" loading="lazy" loading="lazy" class="d-block w-100" src="<?php bloginfo('template_directory'); ?>/img/Office_team.svg">
							</div>
							<h3>Office Suites - Team</h3>
							<p>Collaborate with your team in a modern workspace</p>
						</div>
					</swiper-slide>
				</swiper-container>

		 	    <div class="col warehouse-button-column">
					<button>COMPARE ALL OFFICE SUITES</button>
			   </div>

</section>


<!-- Office Suites Modal -->
<div id="officeSuitesModal" class="modal">
	<span class="close cursor" onclick="closeModal()">&times;</span>
	<div class="modal-content">
		<div class="officeSuitesSlides">
			<div class="numbertext">1 / 3</div>
			<img alt="" loading="lazy" loading="lazy" src="<?php bloginfo('template_directory'); ?>/img/Office_person-1.svg" style="width:100%">
		</div>

		<div class="officeSuitesSlides">
			<div class="numbertext">2 / 3</div>
			<img alt="" loading="lazy" loading="lazy" src="<?php bloginfo('template_directory'); ?>/img/Office_person_2.svg" style="width:100%">
		</div>

		<div class="officeSuitesSlides">
			<div class="numbertext">3 / 3</div>
			<img alt="" loading="lazy" loading="lazy" src="<?php bloginfo('template_directory'); ?>/img/Office_team.svg" style="width:100%">
		</div>
	</div>

		<!-- Next/previous controls -->
		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		<a class="next" onclick="plusSlides(1)">&#10095;</a>

		<!-- Caption text -->
		<div class="caption-container">
		<p id="caption"></p>
		</div>
</div>

