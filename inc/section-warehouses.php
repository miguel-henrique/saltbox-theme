
<!--  Desktop -->
<section id="warehouses" class="container-fluid spaces desktop fadeInUp">

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
						<i class="bi bi-zoom-in icon-warehouse" onclick="showPopup('warehouseSmall')"></i>
						<div class="d-inline-flex align-items-center justify-content-center fs-2 mb-3 warehouse-img">
							<img alt="" loading="lazy" src="<?php bloginfo('template_directory'); ?>/img/icon_warehouse_small.webp">
						</div>
						<h3>Warehouse Small</h3>
						<p>The launchpad that takes you out of your home</p>
					</div>
					<div class="col hover-shadow cards">
						<i class="bi bi-zoom-in icon-warehouse" onclick="showPopup('warehouseMedium')"></i>
						<div class="d-inline-flex align-items-center justify-content-center fs-2 mb-3 warehouse-img">
							<img alt="" loading="lazy" src="<?php bloginfo('template_directory'); ?>/img/icon_warehouse_medium.webp">
						</div>
						<h3>Warehouse Medium</h3>
						<p>For your growing operation ready to take your business to the next level</p>
					</div>
					<div class="col hover-shadow cards">
						<i class="bi bi-zoom-in icon-warehouse" onclick="showPopup('warehouseLarge')"></i>
						<div class="d-inline-flex align-items-center justify-content-center fs-2 mb-3 warehouse-img">
							<img alt="" loading="lazy" src="<?php bloginfo('template_directory'); ?>/img/icon_warehouse_large.webp">
						</div>
						<h3>Warehouse Large</h3>
						<p>Operate excellently at full scale</p>
					</div>
				</div>
		</div>


</section>





<!-- Mobile -->
<section id="warehouses-mb" class="container-fluid spaces mobile fadeInUp">

				<div class="col warehouse-title-column">
					<h2>Warehouses</h2>
				</div>

			   <swiper-container space-between="5" slides-per-view="auto">
					<swiper-slide class="swiper-card">
						<div class="col hover-shadow cards">
							<i class="bi bi-zoom-in icon-warehouse" onclick="showPopup('warehouseSmall')"></i>
							<div class="d-inline-flex align-items-center justify-content-center fs-2 mb-3 warehouse-img">
							<img alt="" loading="lazy" class="d-block w-100" src="<?php bloginfo('template_directory'); ?>/img/icon_warehouse_small.webp">
							</div>
							<h3 class="fs-2">Warehouse Small</h3>
							<p>The launchpad that takes you out of your home</p>
						</div>
					</swiper-slide>

					<swiper-slide class="swiper-card">
						<div class="col hover-shadow cards">
							<i class="bi bi-zoom-in icon-warehouse" onclick="showPopup('warehouseMedium')"></i>
							<div class="d-inline-flex align-items-center justify-content-center fs-2 mb-3 warehouse-img">
							<img alt="" loading="lazy" class="d-block w-100" src="<?php bloginfo('template_directory'); ?>/img/icon_warehouse_medium.webp">
							</div>
							<h3 class="fs-2">Warehouse Medium</h3>
							<p>For your growing operation ready to take your business to the next level</p>
						</div>
					</swiper-slide>

					<swiper-slide class="swiper-card">
						<div class="col hover-shadow cards">
							<i class="bi bi-zoom-in icon-warehouse" onclick="showPopup('warehouseLarge')"></i>
							<div class="d-inline-flex align-items-center justify-content-center fs-2 mb-3 warehouse-img">
							<img alt="" loading="lazy" class="d-block w-100" src="<?php bloginfo('template_directory'); ?>/img/icon_warehouse_large.webp">
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



<!-- Pop up -->
<div id="warehouseSmall" class="modal">
        <span class="close cursor" onclick="closePopup('warehouseSmall')">&times;</span>
        <div class="modal-content">
            <div class="officeSuitesSlides">
                <swiper-container space-between="5" slides-per-view="1" navigation="true" loop="true">
					
                    <swiper-slide>
                        <div class="popup-content">
                            <div class="col img-column">
							<img alt="Warehouse Small" loading="lazy" class="d-block w-100" src="<?php bloginfo('template_directory'); ?>/img/warehouse/warehouse-small (1).webp">
                            </div>
                        </div>
                    </swiper-slide>
					
                    <swiper-slide>
                        <div class="popup-content">
                            <div class="col img-column">
							<img alt="Warehouse Small" loading="lazy" class="d-block w-100" src="<?php bloginfo('template_directory'); ?>/img/warehouse/warehouse-small (2).webp">
                            </div>
                        </div>
                    </swiper-slide>

                    <swiper-slide>
                        <div class="popup-content">
                            <div class="col img-column">
							<img alt="Warehouse Small" loading="lazy" class="d-block w-100" src="<?php bloginfo('template_directory'); ?>/img/warehouse/warehouse-small (3).webp">
                            </div>
                        </div>
                    </swiper-slide>

                </swiper-container>
            </div>
        </div>
    </div>


	

<!-- Pop up -->
<div id="warehouseMedium" class="modal">
        <span class="close cursor" onclick="closePopup('warehouseMedium')">&times;</span>
        <div class="modal-content">
            <div class="officeSuitesSlides">
                <swiper-container space-between="5" slides-per-view="1" navigation="true" loop="true">
					
                    <swiper-slide>
                        <div class="popup-content">
                            <div class="col img-column">
							<img alt="Warehouse Medium" loading="lazy" class="d-block w-100" src="<?php bloginfo('template_directory'); ?>/img/warehouse/warehouse-medium (1).webp">
                            </div>
                        </div>
                    </swiper-slide>
					
                    <swiper-slide>
                        <div class="popup-content">
                            <div class="col img-column">
							<img alt="Warehouse Medium" loading="lazy" class="d-block w-100" src="<?php bloginfo('template_directory'); ?>/img/warehouse/warehouse-medium (2).webp">
                            </div>
                        </div>
                    </swiper-slide>

                    <swiper-slide>
                        <div class="popup-content">
                            <div class="col img-column">
							<img alt="Warehouse Medium" loading="lazy" class="d-block w-100" src="<?php bloginfo('template_directory'); ?>/img/warehouse/warehouse-medium (3).webp">
                            </div>
                        </div>
                    </swiper-slide>

                </swiper-container>
            </div>
        </div>
    </div>



<!-- Pop up -->
<div id="warehouseLarge" class="modal">
        <span class="close cursor" onclick="closePopup('warehouseLarge')">&times;</span>
        <div class="modal-content">
            <div class="officeSuitesSlides">
                <swiper-container space-between="5" slides-per-view="1" navigation="true" loop="true">
					
                    <swiper-slide>
                        <div class="popup-content">
                            <div class="col img-column">
							<img alt="Warehouse Large" loading="lazy" class="d-block w-100" src="<?php bloginfo('template_directory'); ?>/img/warehouse/warehouse-large (1).webp">
                            </div>
                        </div>
                    </swiper-slide>
					
                    <swiper-slide>
                        <div class="popup-content">
                            <div class="col img-column">
							<img alt="Warehouse Large" loading="lazy" class="d-block w-100" src="<?php bloginfo('template_directory'); ?>/img/warehouse/warehouse-large (2).webp">
                            </div>
                        </div>
                    </swiper-slide>

                    <swiper-slide>
                        <div class="popup-content">
                            <div class="col img-column">
							<img alt="Warehouse Large" loading="lazy" class="d-block w-100" src="<?php bloginfo('template_directory'); ?>/img/warehouse/warehouse-large (3).webp">
                            </div>
                        </div>
                    </swiper-slide>

                </swiper-container>
            </div>
        </div>
    </div>


