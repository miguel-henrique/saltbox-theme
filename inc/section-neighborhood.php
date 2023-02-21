<section id="neighborhood" class="container-fluid fadeInUp">

    <div class="container benefits-container ">
        
        <div class="row neighborhood-row reverse">

            <div class="col neighbor-col">
                <h3>Get to Know the Neighborhood</h3>
                <p>Atlanta’s Upper Westside is an easy-to-access neighborhood that combines the charm of in-town with the spaciousness of an industrial hub. Plus, there’s plenty of local breweries and barbecue joints perfect for a long lunch break or happy hour.</p>
                <button class="blue" id="toggle-map-button">VIEW MAP OF THE AREA</button>
            </div>
            <div class="col neighbor-col imgs">
                <img alt="Neighborhood" loading="lazy" class="neghbor-img" id="neighborhood-img" src="<?php bloginfo('template_directory'); ?>/img/neighborhood-img.svg">
              
                <iframe id="map-img" style="display: none;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13260.617443582345!2d-84.4311811!3d33.8083294!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88f505618f30b6ab%3A0xa5decca1df05b9d2!2sSaltbox!5e0!3m2!1sen!2sbr!4v1676985411995!5m2!1sen!2sbr" height="260" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>


        </div>

    </div>

</section>


<script>
    
/* Neighborhood button to change img */

const toggleMapButton = document.getElementById('toggle-map-button');
const neighborhoodImg = document.getElementById('neighborhood-img');
const mapImg = document.getElementById('map-img');

toggleMapButton.addEventListener('click', function() {
  neighborhoodImg.style.display = (neighborhoodImg.style.display === 'none') ? 'block' : 'none';
  mapImg.style.display = (mapImg.style.display === 'none') ? 'block' : 'none';
});
</script>