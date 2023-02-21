
<section  class="container-fluid spaces desktop fadeInUp">

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
						<i class="bi bi-zoom-in icon-warehouse" onclick="showPopup('officeOnePerson')"></i>
						<div class="d-inline-flex align-items-center justify-content-center fs-2 mb-3 warehouse-img">
							<img alt="" loading="lazy" src="<?php bloginfo('template_directory'); ?>/img/Office_person-1.webp">
						</div>
						<h3>Office Suites - 1 Person</h3>
						<p>Elevate your solopreneur space</p>
					</div>
					<div class="col hover-shadow cards">
						<i class="bi bi-zoom-in icon-warehouse" onclick="showPopup('officeTwoPerson')"></i>
						<div class="d-inline-flex align-items-center justify-content-center fs-2 mb-3 warehouse-img">
							<img alt="" loading="lazy" src="<?php bloginfo('template_directory'); ?>/img/Office_person_2.webp">
						</div>
						<h3>Office Suites - 2 Person</h3>
						<p>Tailor-made for a dynamic duo</p>
					</div>
					<div class="col hover-shadow cards">
						<i class="bi bi-zoom-in icon-warehouse" onclick="showPopup('officeTeam')"></i>
						<div class="d-inline-flex align-items-center justify-content-center fs-2 mb-3 warehouse-img">
							<img alt="" loading="lazy" src="<?php bloginfo('template_directory'); ?>/img/Office_team.webp">
						</div>
						<h3>Office Suites - Team</h3>
						<p>Collaborate with your team in a modern workspace</p>
					</div>
				</div>
		</div>


</section>


<section class="container-fluid spaces mobile fadeInUp">

				<div class="col warehouse-title-column">
					<h2>Office Suites</h2>
				</div>
		
			   <swiper-container space-between="5" slides-per-view="auto">
					<swiper-slide class="swiper-card">
						<div class="col hover-shadow cards">
							<i class="bi bi-zoom-in icon-warehouse" onclick="showPopup('officeOnePerson')"></i>
							<div class="d-inline-flex align-items-center justify-content-center fs-2 mb-3 warehouse-img">
								<img alt=""   loading="lazy" class="d-block w-100" src="<?php bloginfo('template_directory'); ?>/img/Office_person-1.webp">
							</div>
							<h3>Office Suites - 1 Person</h3>
							<p>Elevate your solopreneur space</p>
						</div>
					</swiper-slide>

					<swiper-slide class="swiper-card">
						<div class="col hover-shadow cards">
							<i class="bi bi-zoom-in icon-warehouse" onclick="showPopup('officeTwoPerson')"></i>
							<div class="d-inline-flex align-items-center justify-content-center fs-2 mb-3 warehouse-img">
								<img alt=""   loading="lazy" class="d-block w-100" src="<?php bloginfo('template_directory'); ?>/img/Office_person_2.webp">
							</div>
							<h3>Office Suites - 2 Person</h3>
							<p>Tailor-made for a dynamic duo</p>
						</div>
					</swiper-slide>

					<swiper-slide class="swiper-card">
						<div class="col hover-shadow cards">
							<i class="bi bi-zoom-in icon-warehouse" onclick="showPopup('officeTeam')"></i>
							<div class="d-inline-flex align-items-center justify-content-center fs-2 mb-3 warehouse-img">
								<img alt=""   loading="lazy" class="d-block w-100" src="<?php bloginfo('template_directory'); ?>/img/Office_team.webp">
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





<!-- Pop up -->
<div id="officeOnePerson" class="modal">
        <span class="close cursor" onclick="closePopup('officeOnePerson')">&times;</span>
        <div class="modal-content">
            <div class="officeSuitesSlides">
                <swiper-container space-between="5" slides-per-view="1" navigation="true" loop="true">
					
                    <swiper-slide>
                        <div class="popup-content">
                            <div class="col img-column">
							<img alt="" loading="lazy" class="d-block w-100" src="<?php bloginfo('template_directory'); ?>/img/office/office-suites-one (1).webp">
                            </div>
                        </div>
                    </swiper-slide>
					
                    <swiper-slide>
                        <div class="popup-content">
                            <div class="col img-column">
							<img alt="" loading="lazy" class="d-block w-100" src="<?php bloginfo('template_directory'); ?>/img/office/office-suites-one (2).webp">
                            </div>
                        </div>
                    </swiper-slide>

                    <swiper-slide>
                        <div class="popup-content">
                            <div class="col img-column">
							<img alt="" loading="lazy" class="d-block w-100" src="<?php bloginfo('template_directory'); ?>/img/office/office-suites-one (3).webp">
                            </div>
                        </div>
                    </swiper-slide>

                </swiper-container>
            </div>
        </div>
    </div>


	

<!-- Pop up -->
<div id="officeTwoPerson" class="modal">
        <span class="close cursor" onclick="closePopup('officeTwoPerson')">&times;</span>
        <div class="modal-content">
            <div class="officeSuitesSlides">
                <swiper-container space-between="5" slides-per-view="1" navigation="true" loop="true">
					
                    <swiper-slide>
                        <div class="popup-content">
                            <div class="col img-column">
							<img alt="" loading="lazy" class="d-block w-100" src="<?php bloginfo('template_directory'); ?>/img/office/office-suites-two (1).webp">
                            </div>
                        </div>
                    </swiper-slide>
					
                    <swiper-slide>
                        <div class="popup-content">
                            <div class="col img-column">
							<img alt="" loading="lazy" class="d-block w-100" src="<?php bloginfo('template_directory'); ?>/img/office/office-suites-two (2).webp">
                            </div>
                        </div>
                    </swiper-slide>

                    <swiper-slide>
                        <div class="popup-content">
                            <div class="col img-column">
							<img alt="" loading="lazy" class="d-block w-100" src="<?php bloginfo('template_directory'); ?>/img/office/office-suites-otwo (3).webp">
                            </div>
                        </div>
                    </swiper-slide>

                </swiper-container>
            </div>
        </div>
    </div>



<!-- Pop up -->
<div id="officeTeam" class="modal">
        <span class="close cursor" onclick="closePopup('officeTeam')">&times;</span>
        <div class="modal-content">
            <div class="officeSuitesSlides">
                <swiper-container space-between="5" slides-per-view="1" navigation="true" loop="true">
					
                    <swiper-slide>
                        <div class="popup-content">
                            <div class="col img-column">
							<img alt="" loading="lazy" class="d-block w-100" src="<?php bloginfo('template_directory'); ?>/img/office/office-suites-team (1).webp">
                            </div>
                        </div>
                    </swiper-slide>
					
                    <swiper-slide>
                        <div class="popup-content">
                            <div class="col img-column">
							<img alt="" loading="lazy" class="d-block w-100" src="<?php bloginfo('template_directory'); ?>/img/office/office-suites-team (2).webp">
                            </div>
                        </div>
                    </swiper-slide>

                    <swiper-slide>
                        <div class="popup-content">
                            <div class="col img-column">
							<img alt="" loading="lazy" class="d-block w-100" src="<?php bloginfo('template_directory'); ?>/img/office/office-suites-team (3).webp">
                            </div>
                        </div>
                    </swiper-slide>

                </swiper-container>
            </div>
        </div>
    </div>


