<section id="testimonial" class="container-fluid fadeInUp">

    <div class="container testimonial-container">
        
        <div class="row testimonial-row">
            <h2>Our <span class="underline-yellow">Members Say</span></h2>

            <swiper-container id="testimonial-swiper" space-between="5" slides-per-view="1" navigation="true" loop="true">
					<swiper-slide>
						<div class="testimonial-content">
                            <div class="col img-column">
                                <img loading="lazy" src="<?php bloginfo('template_directory'); ?>/img/testimonial-1.svg">
                            </div>
                            <div class="col content-column">
                                <p class="testimonial-text"><span class="quotation">“</span>At Saltbox we’re surrounded by people who all have the same day-to-day issues. So we do feel like we’re at home with each other.<span class="quotation">”</span></p>
                                <p class="name">Gamal Codner</p>
                                <p class="position">Fresh Heritage</p>
                            </div>
                        </div>
					</swiper-slide>
					<swiper-slide>
						<div class="testimonial-content">
                            <div class="col img-column">
                                <img loading="lazy" src="<?php bloginfo('template_directory'); ?>/img/testimonial-1.svg">
                            </div>
                            <div class="col content-column">
                                <p class="testimonial-text"><span class="quotation">“</span>At Saltbox we’re surrounded by people who all have the same day-to-day issues. So we do feel like we’re at home with each other.<span class="quotation">”</span></p>
                                <p class="name">Gamal Codner</p>
                                <p class="position">Fresh Heritage</p>
                            </div>
                        </div>
					</swiper-slide>
                   

            </swiper-container>
 
        </div>

    </div>

</section>


<script>

    const buttons= [
        document.querySelector("#testimonial-swiper").shadowRoot.querySelector("div.swiper-button-next"),
        document.querySelector("#testimonial-swiper").shadowRoot.querySelector("div.swiper-button-prev")
    ]

    buttons.forEach(button => {
    button.style.color = "#101010";
    button.style.border = "1px solid black";
    button.style.fontSize = "30px";
    button.style.padding = "5px 8px";
    button.style.borderRadius = "20px";

    if(window.innerWidth < 768){
        button.style.top = "90%"
    }
    });





</script>



