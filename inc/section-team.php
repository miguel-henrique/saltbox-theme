<div id="team" class="container team-container">
    
        
      <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h1 class="gallery-title">Gallery</h1>
        <div class="text-center">
          <button class="filter-btn" id="all" onclick="call(this.id)">all</button>
          <button class="filter-btn" id="2" onclick="call(this.id)">Category 2</button>
          <button class="filter-btn" id="3" onclick="call(this.id)">Category 3</button>
          <button class="filter-btn" id="4" onclick="call(this.id)">Category 4</button>
          <button class="filter-btn" id="5" onclick="call(this.id)">Category 5</button>
        </div>
      </div>

      <div class="row team-cards-section">
            <div class="col team-card filter 1">
                <img loading="lazy" loading="lazy" src="<?php bloginfo('template_directory'); ?>/img/team-member.svg">
                <h3>Name Surname</h3>
                <p>Founder and CEO</p>
            </div>
            <div class="col team-card filter 2">
                <img loading="lazy" src="<?php bloginfo('template_directory'); ?>/img/team-member.svg">
                <h3>Name Surname</h3>
                <p>Founder and CEO</p>
            </div>
            <div class="col team-card filter 3">
                <img loading="lazy" src="<?php bloginfo('template_directory'); ?>/img/team-member.svg">
                <h3>Name Surname</h3>
                <p>Founder and CEO</p>
            </div>
            <div class="col team-card filter 2">
                <img loading="lazy" src="<?php bloginfo('template_directory'); ?>/img/team-member.svg">
                <h3>Name Surname</h3>
                <p>Founder and CEO</p>
            </div>
            <div class="col team-card filter 2">
                <img loading="lazy" src="<?php bloginfo('template_directory'); ?>/img/team-member.svg">
                <h3>Name Surname</h3>
                <p>Founder and CEO</p>
            </div>
            <div class="col team-card filter 2">
                <img loading="lazy" src="<?php bloginfo('template_directory'); ?>/img/team-member.svg">
                <h3>Name Surname</h3>
                <p>Founder and CEO</p>
            </div>
            <div class="col team-card filter 3">
                <img loading="lazy" src="<?php bloginfo('template_directory'); ?>/img/team-member.svg">
                <h3>Name Surname</h3>
                <p>Founder and CEO</p>
            </div>
            <div class="col team-card filter 3">
                <img loading="lazy" src="<?php bloginfo('template_directory'); ?>/img/team-member.svg">
                <h3>Name Surname</h3>
                <p>Founder and CEO</p>
            </div>
            <div class="col team-card filter 4">
                <img loading="lazy" src="<?php bloginfo('template_directory'); ?>/img/team-member.svg">
                <h3>Name Surname</h3>
                <p>Founder and CEO</p>
            </div>
            <div class="col team-card filter 5">
                <img loading="lazy" src="<?php bloginfo('template_directory'); ?>/img/team-member.svg">
                <h3>Name Surname</h3>
                <p>Founder and CEO</p>
            </div>

    
        </div>
</div>




<div id="team-mb" class="container team-container-mobile">
    <div class="row">

    <h2>Meet Our New Team</h2>

        <swiper-container id="categories" navigation="true" space-between="5" slides-per-view="1" loop="true">
            <swiper-slide id="category-1" class="swiper-category-item">Category 1</swiper-slide>
            <swiper-slide id="category-2" class="swiper-category-item">Category 2</swiper-slide>
            <swiper-slide id="category-3" class="swiper-category-item">Category 3</swiper-slide>
        </swiper-container>

        <swiper-container class="members-swiper" space-between="5" slides-per-view="1" loop="true">
            <swiper-slide id="category-1" class="member">
                <div class="col team-card">
                    <img loading="lazy" src="<?php bloginfo('template_directory'); ?>/img/team-member.svg">
                    <h3>Name Surname 1</h3>
                    <p>Founder and CEO</p>
                </div>
            </swiper-slide>
            <swiper-slide id="category-1" class="member">
                <div class="col team-card">
                    <img loading="lazy" src="<?php bloginfo('template_directory'); ?>/img/team-member.svg">
                    <h3>Name Surname 2</h3>
                    <p>Founder and CEO</p>
                </div>
            </swiper-slide>
            <swiper-slide id="category-2" class="member">
               <div class="col team-card">
                    <img loading="lazy" src="<?php bloginfo('template_directory'); ?>/img/team-member.svg">
                    <h3>Name Surname 3</h3>
                    <p>Founder and CEO</p>
                </div>
            </swiper-slide>
            <swiper-slide id="category-2" class="member">
                <div class="col team-card">
                    <img loading="lazy" src="<?php bloginfo('template_directory'); ?>/img/team-member.svg">
                    <h3>Name Surname 4</h3>
                    <p>Founder and CEO</p>
                </div>
            </swiper-slide>
            <swiper-slide id="category-3" class="member">
                <div class="col team-card">
                    <img loading="lazy" src="<?php bloginfo('template_directory'); ?>/img/team-member.svg">
                    <h3>Name Surname 5</h3>
                    <p>Founder and CEO</p>
                </div>
            </swiper-slide>
        </swiper-container>

    </div>
    
</div>




<script>
    const btnFilter = document.querySelectorAll('.filter-btn'); // select all button elements
    console.log(btnFilter);
    let activeButton = null; // keep track of the currently active button

    btnFilter.forEach(button => {
    button.addEventListener('click', function() {
    if (activeButton !== null) {
    activeButton.classList.remove('underline-yellow'); // remove the class from the previous active button
    }
    activeButton = this; // set the current button as the active one
    this.classList.add('underline-yellow'); // add the class to the clicked button
    });
    });







// Get the buttons and the elements container
const nextBtn = document.querySelector("#categories").shadowRoot.querySelector("div.swiper-button-next")
const prevBtn = document.querySelector("#categories").shadowRoot.querySelector("div.swiper-button-prev")

nextBtn.style.color = "#101010";
prevBtn.style.color = "#101010";


const elements = document.querySelector('.members-swiper');

// Define the categories and the index of the currently selected category
const categories = ['category-1', 'category-2', 'category-3'];
let currentIndex = 0;

// Add click event listeners to the buttons
nextBtn.addEventListener('click', filterElements);
prevBtn.addEventListener('click', filterElements);

// Define the filterElements function
function filterElements(event) {
  // Update the current index based on the button that was clicked
  if (event.target === nextBtn) {
    currentIndex = (currentIndex + 1) % categories.length;
  } else {
    currentIndex = (currentIndex - 1 + categories.length) % categories.length;
  }
  
  const category = categories[currentIndex]; // Get the ID of the current category
  const items = document.querySelectorAll('.member'); // Get all the items inside the elements container
  
  // Loop through the items and hide/show them based on their ID and the selected category
  items.forEach(item => {
    if (item.id === category) {
      item.style.display = 'grid'; // Show the item
    } else {
      item.style.display = 'none'; // Hide the item
    }
  });
}



</script>