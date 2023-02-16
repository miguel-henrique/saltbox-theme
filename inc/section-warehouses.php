
<!--  Desktop -->
<section id="warehouses" class="container-fluid spaces desktop">

		<div class="container ware-house-section">
			<div class="row">
				<div class="col warehouse-title-column">
					<h2>Warehouses</h2>
				</div>
				<div class="col warehouse-button-column">
					<button>COMPARE ALL WAREHOUSES</button>
				</div>
			</div>
		</div>

		<div class="spaces-section">

				<div class="row g-4 py-5 row-cols-1 row-cols-lg-3 cards-spaces">
					<div class="col hover-shadow cards">
						<i class="bi bi-zoom-in icon-warehouse" onclick="openModal();currentSlide(1)"></i>
						<div class="d-inline-flex align-items-center justify-content-center fs-2 mb-3 warehouse-img">
							<img alt="" loading="lazy" src="<?php bloginfo('template_directory'); ?>/img/icon_warehouse_small.svg">
						</div>
						<h3>Warehouse Small</h3>
						<p>The launchpad that takes you out of your home</p>
					</div>
					<div class="col hover-shadow cards">
						<i class="bi bi-zoom-in icon-warehouse" onclick="openModal();currentSlide(2)"></i>
						<div class="d-inline-flex align-items-center justify-content-center fs-2 mb-3 warehouse-img">
							<img alt="" loading="lazy" src="<?php bloginfo('template_directory'); ?>/img/icon_warehouse_medium.svg">
						</div>
						<h3>Warehouse Medium</h3>
						<p>For your growing operation ready to take your business to the next level</p>
					</div>
					<div class="col hover-shadow cards">
						<i class="bi bi-zoom-in icon-warehouse" onclick="openModal();currentSlide(3)"></i>
						<div class="d-inline-flex align-items-center justify-content-center fs-2 mb-3 warehouse-img">
							<img alt="" loading="lazy" src="<?php bloginfo('template_directory'); ?>/img/icon_warehouse_large.svg">
						</div>
						<h3>Warehouse Large</h3>
						<p>Operate excellently at full scale</p>
					</div>
				</div>
		</div>


</section>





<!-- Mobile -->
<section id="warehouses-mb" class="container-fluid spaces mobile">

				<div class="col warehouse-title-column">
					<h2>Warehouses</h2>
				</div>

			   <swiper-container space-between="5" slides-per-view="auto">
					<swiper-slide class="swiper-card">
						<div class="col hover-shadow cards">
							<i class="bi bi-zoom-in icon-warehouse" onclick="openModal();currentSlide(1)"></i>
							<div class="d-inline-flex align-items-center justify-content-center fs-2 mb-3 warehouse-img">
							<img alt="" loading="lazy" class="d-block w-100" src="<?php bloginfo('template_directory'); ?>/img/icon_warehouse_small.svg">
							</div>
							<h3 class="fs-2">Warehouse Small</h3>
							<p>The launchpad that takes you out of your home</p>
						</div>
					</swiper-slide>

					<swiper-slide class="swiper-card">
						<div class="col hover-shadow cards">
							<i class="bi bi-zoom-in icon-warehouse" onclick="openModal();currentSlide(2)"></i>
							<div class="d-inline-flex align-items-center justify-content-center fs-2 mb-3 warehouse-img">
							<img alt="" loading="lazy" class="d-block w-100" src="<?php bloginfo('template_directory'); ?>/img/icon_warehouse_medium.svg">
							</div>
							<h3 class="fs-2">Warehouse Medium</h3>
							<p>For your growing operation ready to take your business to the next level</p>
						</div>
					</swiper-slide>

					<swiper-slide class="swiper-card">
						<div class="col hover-shadow cards">
							<i class="bi bi-zoom-in icon-warehouse" onclick="openModal();currentSlide(3)"></i>
							<div class="d-inline-flex align-items-center justify-content-center fs-2 mb-3 warehouse-img">
							<img alt="" loading="lazy" class="d-block w-100" src="<?php bloginfo('template_directory'); ?>/img/icon_warehouse_large.svg">
							</div>
							<h3 class="fs-2">Warehouse Large</h3>
							<p>Operate excellently at full scale</p>
						</div>
					</swiper-slide>
				</swiper-container>


		 	    <div class="col warehouse-button-column">
					<button>COMPARE ALL WAREHOUSES</button>
			   </div>

</section>




<!-- Ware House Modal -->
<div id="myModal" class="modal">
	<span class="close cursor" onclick="closeModal()">&times;</span>
	<div class="modal-content">
		<div class="mySlides">
			<div class="numbertext">1 / 3</div>
			<img alt="Warehouse Small" loading="lazy" src="<?php bloginfo('template_directory'); ?>/img/icon_warehouse_small.svg" style="width:100%">
		</div>

		<div class="mySlides">
			<div class="numbertext">2 / 3</div>
			<img alt="" loading="lazy" src="<?php bloginfo('template_directory'); ?>/img/icon_warehouse_medium.svg" style="width:100%">
		</div>

		<div class="mySlides">
			<div class="numbertext">3 / 3</div>
			<img alt="" loading="lazy" src="<?php bloginfo('template_directory'); ?>/img/icon_warehouse_large.svg" style="width:100%">
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
