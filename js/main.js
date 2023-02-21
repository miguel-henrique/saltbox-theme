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
    if (id === "all") {
      item.classList.remove('d-none');
      item.classList.add('fadeIn');
      setTimeout(clean,500);
    } else {
      const check = items[index].classList.contains(id);

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





/* Show and close Popups */

function showPopup(popupId) {
  // get all popup elements
  const popups = document.querySelectorAll('.modal');

  // iterate through each popup element
  for (let i = 0; i < popups.length; i++) {
    // hide all popups except for the one that matches the id passed in
    if (popups[i].id === popupId) {
      popups[i].style.display = 'block';
    } 

  }
}


function closePopup(popupId) {
  // get all popup elements
  const popups = document.querySelectorAll('.modal');

  // iterate through each popup element
  for (let i = 0; i < popups.length; i++) {
    // hide all popups except for the one that matches the id passed in
    if (popups[i].id === popupId) {
      popups[i].style.display = 'none';
    } 
  }
}




