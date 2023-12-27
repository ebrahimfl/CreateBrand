let elements = document.querySelectorAll(".an");

function checkScroll() {
  elements.forEach((element) => {
    let counterStatus = true;
    if (counterStatus) {
      if (window.scrollY + window.innerHeight > element.offsetTop) {
        animateElement(element);
        counterStatus==false
      }
    }
  });
}

function animateElement(element) {
  let animationType = element.getAttribute('data-an');
  if (animationType === "fade-right") {
    element.classList.add("fade-right");
  } else if (animationType === "fade-left") {
    element.classList.add("fade-left");
  } else if (animationType === "fade-down") {
    element.classList.add("fade-down");
  } else if (animationType === "fade-up") {
    element.classList.add("fade-up");
  } else if (animationType === 'zoom-in') {
    element.classList.add('zoom-in');
  } else if (animationType === 'zoom-out') {
    element.classList.add('zoom-out');
  }else if(animationType === 'fade'){
    element.classList.add('fade');
  }
}

window.addEventListener("scroll", checkScroll);
window.addEventListener("resize", checkScroll);
checkScroll(); 
