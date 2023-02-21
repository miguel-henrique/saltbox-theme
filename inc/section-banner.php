
<!-- 	Hero Banner -->
<section class="container-fluid hero">
	<div class="container container-hero">
		<div class="column-hero">
			<h1>Atlanta</h1>
			<div class="divider"></div>
			<p>Located in Atlanta’s bustling Upper West Side, our Atlanta location provides a convenient, thriving environment for local business owners. </p>
			
			<div class="informations">
					<p><strong>Starting Price: </strong>$1,000</p>
					<p><strong>Availablity: </strong>Office Space Only</p>
					<p><strong>Duration:  </strong>Monthly</p>
					<p><strong>Location: </strong>Atlanta’s Industrial Upper Westside 1345 Seaboard Industrial Blvd</p>
				<div class="reviews">
						<div class="stars-review"></div>
						<?php get_template_part( 'inc/request', 'reviews'); ?>
						
						
				</div>

			</div>
			
			<div>
				<button class="learn-more">LEARN MORE</button>
				<button class="book-tour">BOOK A TOUR</button>
			</div>




		</div>
	</div>

</section>


<script>

	
const reviewsNavigation= [
        document.querySelector("#swiper-reviews").shadowRoot.querySelector("div.swiper-button-next"),
        document.querySelector("#swiper-reviews").shadowRoot.querySelector("div.swiper-button-prev")
    ]

    reviewsNavigation.forEach(button => {
    button.style.color = "#101010";
    button.style.border = "1px solid black";
    button.style.fontSize = "30px";
    button.style.padding = "5px 8px";
    button.style.borderRadius = "20px";

    if(window.innerWidth < 768){
        button.style.top = "90%";
    }
    });

</script>