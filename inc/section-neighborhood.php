<section id="neighborhood" class="container-fluid">

    <div class="container benefits-container ">
        
        <div class="row neighborhood-row reverse">

            <div class="col neighbor-col">
                <h3>Get to Know the Neighborhood</h3>
                <p>Atlanta’s Upper Westside is an easy-to-access neighborhood that combines the charm of in-town with the spaciousness of an industrial hub. Plus, there’s plenty of local breweries and barbecue joints perfect for a long lunch break or happy hour.</p>
                <button class="blue" id="toggle-map-button">VIEW MAP OF THE AREA</button>
            </div>
            <div class="col neighbor-col imgs">
                <img alt="Neighborhood" loading="lazy" class="neghbor-img" id="neighborhood-img" src="<?php bloginfo('template_directory'); ?>/img/neighborhood-img.svg">
                <img alt="Map" loading="lazy" class="neghbor-img" id="map-img" style="display: none;" src="<?php bloginfo('template_directory'); ?>/img/saltbox-map.png">
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