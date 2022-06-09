/* ACCORDION

Allows to expand and collapse accordions.
Defaults all accordions to closed on smaller screens. */

var allToggles = document.getElementsByClassName("accordion__toggle");
var togglePosition;

for (togglePosition = 0; togglePosition < allToggles.length; togglePosition++) {
  allToggles[togglePosition].addEventListener("click", function() {
    this.classList.toggle("accordion--expanded");

    var ariaExpanded = this.getAttribute("aria-expanded");
    if (ariaExpanded == "true") {
      ariaExpanded = "false"
    } else {
      ariaExpanded = "true"
    }
    this.setAttribute("aria-expanded", ariaExpanded);
    
    var content = this.nextElementSibling;
    if (content.style.display == "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}

var exploreContent = document.querySelector(".accordion--search .accordion__content");
var exploreToggle = document.querySelector(".accordion--search .accordion__toggle");

if (window.matchMedia('(max-width: 44.9em)').matches) {
    exploreContent.style.display = "none";
    exploreToggle.classList.remove("accordion--expanded")
}
