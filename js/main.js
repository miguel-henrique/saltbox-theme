/* Google Review Request */
function showGoogleReviews(id, apikey) {
    var request = new XMLHttpRequest();
    var url = "https://maps.googleapis.com/maps/api/place/details/json?placeid=" + id + "&key=" + apikey;
    request.open("GET", url, true);
    request.onreadystatechange = function() {
        if (request.readyState == 4 && request.status == 200) {
            var json = JSON.parse(request.responseText);
            var reviews = json.result.reviews.length;
            document.getElementById("reviews").innerHTML = reviews;
        }
    };
    request.send();
}

const id = "";
const apikey= "";

showGoogleReviews(id, apikey);


/* End Google Reviews Request */



// Open the Modal
function openModal() {
    document.getElementById("myModal").style.display = "block";
  }
  
  // Close the Modal
  function closeModal() {
    document.getElementById("myModal").style.display = "none";
  }
  
  var slideIndex = 1;
  showSlides(slideIndex);
  
  // Next/previous controls
  function plusSlides(n) {
    showSlides(slideIndex += n);
  }
  
  // Thumbnail image controls
  function currentSlide(n) {
    showSlides(slideIndex = n);
  }
  
  function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    slides[slideIndex-1].style.display = "block";
  }



/*   Office Suites Modal */





// Open the Modal
function openModal() {
    document.getElementById("officeSuitesModal").style.display = "block";
  }
  
  // Close the Modal
  function closeModal() {
    document.getElementById("officeSuitesModal").style.display = "none";
  }
  
  var slideIndex = 1;
  showSlides(slideIndex);
  
  // Next/previous controls
  function plusSlides(n) {
    showSlides(slideIndex += n);
  }
  
  // Thumbnail image controls
  function currentSlide(n) {
    showSlides(slideIndex = n);
  }
  
  function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("officeSuitesSlides");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    slides[slideIndex-1].style.display = "block";
  }




/* Function to expand and contain the benefits icon list */

function expandFlex(){
  var expandFlex = document.getElementById("flexExpanded");
  var btnExpandFlex = document.getElementById("btnFlexExpand");

  if(expandFlex.style.display === "none"){
    expandFlex.style.display="block";
    btnExpandFlex.innerHTML="SEE LESS";
  }
  else{
    expandFlex.style.display="none";
    btnExpandFlex.innerHTML="LEARN MORE";
  }

}


function expandElastic(){
  var expandElastic = document.getElementById("elasticExpanded");
  var btnExpandElastic = document.getElementById("btnElasticExpand");

  if(expandElastic.style.display === "none"){
    expandElastic.style.display="block";
    btnExpandElastic.innerHTML="SEE LESS";

  }
  else{
    expandElastic.style.display="none";
    btnExpandElastic.innerHTML="LEARN MORE";
  }

}




/* Filterable Team Area */


function call(id) {
  const items = Array.from(document.getElementsByClassName("filter"));
  items.map(function (item, index) {
    console.log(item);
    if (id === "all") {
      item.classList.remove('d-none');
      item.classList.add('fadeIn');
      setTimeout(clean,500);
    } else {
      const check = items[index].classList.contains(id);
      console.log(check);

      if (check) {
        item.classList.remove('d-none');
        item.classList.add('fadeIn');
      } else {
        item.classList.add('d-none');
        item.classList.remove('fadeIn');
      }
    }
  })
}

function clean() {
  const items = Array.from(document.getElementsByClassName("filter"));
  items.map(function (item, index) {
    item.classList.remove('fadeIn');
  })
}


