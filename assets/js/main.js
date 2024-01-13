// Responsive Nav Menu active
let toggleIcons = document.querySelector(".menu-icon");
let navbar = document.querySelector("ul.main_menu");
let menuIcon = document.querySelector(".menu-icon");

toggleIcons.addEventListener("click", () => {
  navbar.classList.toggle("active");
  menuIcon.classList.toggle("active");
});

// Responsive drop down Menu active
let drop_down = document.querySelector(".drop_menu");
let menuA = document.querySelectorAll("ul.main_menu li .dorp_down_a");
let header = document.querySelector("header");
let nav = document.querySelector("nav");
for (let x = 0; x < menuA.length; x++) {
  menuA[x].addEventListener("click", () => {
    menuA[x].nextElementSibling.classList.toggle("active");
  });
}

// nav Scroll Animaction
window.addEventListener("scroll", () => {
  if (window.pageYOffset > nav.offsetTop + 80) {
    header.classList.add("active_nav");
  } else {
    header.classList.remove("active_nav");
  }
});

// Contact us Page Validation Start
let name = document.querySelector("#name");
let email = document.querySelector("#email");
let phone = document.querySelector("#phone");
let subject = document.querySelector("#subject");
let message = document.querySelector("#message");
let cForm = document.querySelector("#contact form");

let contactBtn = document.querySelector("#contactBtn");
if (contactBtn != null) {
  contactBtn.addEventListener("click", function (event) {
    if (!validate()) {
      event.preventDefault();
    }

    let allInput = document.querySelectorAll("#contact input");
    for (let i = 0; i < allInput.length; i++) {
      allInput[i].addEventListener("keyup", function () {
        validate();
      });
    }
  });
}

function isEmail(emailVal) {
  var atSymbol = emailVal.indexOf("@");
  if (atSymbol < 1) return false;
  var dot = emailVal.lastIndexOf(".");
  if (dot <= atSymbol + 2) return false;
  return true;
}

// define validate function
function validate() {
  let nameVal = name.value.trim();
  let emailVal = email.value.trim();
  let phoneVal = phone.value.trim();
  let subjectVal = subject.value.trim();
  let messageVal = message.value.trim();
  let error = true;
  if(nameVal == "") {
    setErrorMsg(name, "Name Can not be blank");
    error = false;
  }else {
    setSuccessMsg(name);
  }
  if (emailVal == "") {
    setErrorMsg(email, "email can not be blank");
    error = false;
  } else if (!isEmail(emailVal)) {
    setErrorMsg(email, "email not valid");
    error = false;
  } else {
    setSuccessMsg(email);
  }

  if (phoneVal == "") {
    setErrorMsg(phone, "phone number can not blank");
    error = false;
  } else if (isNaN(phoneVal)) {
    setErrorMsg(phone, "phone number not Valid");
    error = false;
  } else {
    setSuccessMsg(phone);
  }
  if (subjectVal == "") {
    setErrorMsg(subject, "select a subject");
    error = false;
  } else if (subjectVal.length < 3) {
    setErrorMsg(subject, "min 3 character input");
    error = false;
  } else {
    setSuccessMsg(subject);
  }

  if (error) {
    return true;
  } else {
    return false;
  }
}

function setErrorMsg(input, errorVal) {
  let form_control = input.parentElement;
  form_control.classList.add("error-message");
  let small = form_control.querySelector("small");
  small.innerHTML = errorVal;
}
function setSuccessMsg(input) {
  let form_control = input.parentElement;
  form_control.classList.remove("error-message");
  form_control.querySelector("small").innerHTML='';
}

let filterButton = document.querySelectorAll("#our-team .header-menu ul li");
let filterCard = document.querySelectorAll("#our-team .row .card");
function filtercardFun(e) {
  document.querySelector("#our-team .header-menu ul .active").classList.remove("active");
  e.target.classList.add("active");

filterCard.forEach((element) => {
    if(
      e.target.dataset.team === "All" ||
      e.target.dataset.team === element.dataset.team
    ) {
      element.classList.remove("hide"); 
        element.classList.add("show"); 
    } else {
      element.classList.remove("show"); 
      element.classList.add("hide"); 
    }
  });
}

// Add event listeners to filter buttons
filterButton.forEach((button) => {
  button.addEventListener("click", filtercardFun);
});

let filterButton_work = document.querySelectorAll("#our-work .header-menu ul li");
let filterCard_work = document.querySelectorAll("#our-work .row .card");

function filter_work_fun(e){
  document.querySelector("#our-work .header-menu ul .active").classList.remove("active");
  e.target.classList.add('active');
  filterCard_work.forEach((element)=>{
    if(e.target.dataset.work === 'All' || e.target.dataset.work === element.dataset.work){
      element.classList.remove('hide');
      element.classList.add('show');
    }else{
      element.classList.remove('show');
      element.classList.add('hide');
    }
  })
}

filterButton_work.forEach((button)=>{
  button.addEventListener('click',filter_work_fun)
})






// Our  Filterable Image Galler End

let acCard = document.querySelectorAll("#faqs .row .accordion_card");

for (let x = 0; x < acCard.length; x++) {
  acCard[x].addEventListener("click", function (e) {
    acCard[x].classList.toggle("active");
    console.log(acCard[x].querySelectorAll("button"));
    acCard[x].querySelector("button").classList.toggle("active");
    acCard[x].querySelector(".paragraph").classList.toggle("active");
  });
}



// about page Slider 
let about_slider_img = document.querySelectorAll('.slider .img');
about_slider_img.forEach((img,index) => {
  if(img){
    img.style.left=`${index * 100}%`;
  }
})
let counter=0;
const sliderimg = ()=>{
  if(counter > about_slider_img.length-1){
    counter=0;
  }
    about_slider_img.forEach((img,index)=>{
      if(img){
        img.style.transform=`translateX(-${counter*100}%)`
      }

    })
}
setInterval(()=>{
  counter++;
  sliderimg();
},4000)


let about_team_card = document.querySelectorAll('.slider .card');
let count_team_card = 0;

function slider_team_card_about() {

  about_team_card.forEach((value, index) => {
    value.style.transform = 'scale(0) translateY(-50%)';
  });
  setTimeout(function() {
    if (about_team_card && about_team_card.length > 0) {
      if (count_team_card === about_team_card.length) {
        count_team_card = 0;// Reset count_team_card if it exceeds array length
      }
      if (about_team_card[count_team_card]) {
        about_team_card[count_team_card].style.transform = 'scale(1) translateY(-50%)';
        count_team_card++;
      } 
    } 
  }, 600);
  

}
 slider_team_card_about();
setInterval(function() {
  slider_team_card_about();
},5000);


document.addEventListener('DOMContentLoaded', function() {
  const aboutServicesCard = document.querySelector('#scroll.services');
  let scrollAmount = 1;
  let scrollDirection_service = 'right';
  let serviceInterval;

  function services_scroll_function() {
    serviceInterval = setInterval(function() {
    if(aboutServicesCard){
      if (scrollDirection_service === 'right') {
        aboutServicesCard.scrollLeft += scrollAmount;
        if (aboutServicesCard.scrollLeft >= (aboutServicesCard.scrollWidth - aboutServicesCard.clientWidth)) {
          scrollDirection_service = 'left';
        }
      } else {
        aboutServicesCard.scrollLeft -= scrollAmount;
        if (aboutServicesCard.scrollLeft <= 0) {
          scrollDirection_service = 'right';
        }
      }
    }
    }, 15);
    
  }
  let scrollAmount_team = 1;
  let scrollDirection_team = 'right';
  let team_card = document.querySelector('.our-team .rows');
  let team_Interval
  function team_scroll_function(){
    team_Interval = setInterval(function(){
      if(team_card){
        if(scrollDirection_team === 'right'){
          team_card.scrollLeft +=scrollAmount_team;
          if(team_card.scrollLeft >= (team_card.scrollWidth - team_card.clientWidth)) {
            scrollDirection_team='left'
          }
        }else{
          team_card.scrollLeft -=scrollAmount_team;
          if(team_card.scrollLeft <= 0){
            scrollDirection_team = 'right'
          }
        }
      }
    },15)
  }
  let scrollAmount_project = 1;
  let scrollDirection_project = 'right';
  let project_card = document.querySelector('.our-work .work_rows');
  let project_Interval

  function project_scroll_function(){
    project_Interval = setInterval(function(){
      if(project_card){
        if(scrollDirection_project === 'right'){
          project_card.scrollLeft +=scrollAmount_project;
          if(project_card.scrollLeft >= (project_card.scrollWidth - project_card.clientWidth)) {
            scrollDirection_project='left'
          }
        }else{
          project_card.scrollLeft -=scrollAmount_project;
          if(project_card.scrollLeft <= 0){
            scrollDirection_project = 'right'
          }
        }
      }
    },15)
  }
  

  window.addEventListener('load', function(){
    services_scroll_function();
    team_scroll_function();
    project_scroll_function();

  });
  if(project_card){
    project_card.addEventListener('mouseleave', project_scroll_function);
    project_card.addEventListener('mouseover', function() {
      clearInterval(project_Interval);
    });
  }
  if (team_card){
    team_card.addEventListener('mouseleave', team_scroll_function);
    team_card.addEventListener('mouseover', function() {
      clearInterval(team_Interval);
    });
  } 

  if(aboutServicesCard){
    aboutServicesCard.addEventListener('mouseleave', services_scroll_function);
    aboutServicesCard.addEventListener('mouseover', function() {
      clearInterval(serviceInterval);
    });
  } 
});


document.addEventListener('DOMContentLoaded', function() {
  const counter_wrapper_main = document.querySelector('.counter_wrapper');
  let hasCounterFunctionBeenCalled = true;

  window.addEventListener('scroll', function() {
    if (counter_wrapper_main && window.scrollY + window.innerHeight  > counter_wrapper_main.offsetTop && hasCounterFunctionBeenCalled) {
      counter_function();
      hasCounterFunctionBeenCalled = false;
    }
  });

  function counter_function() {
    const counter_h4_about = document.querySelectorAll('.counter_wrapper .card h4');
    counter_h4_about.forEach((value) => {
      let counterValue = 0;
      let counter_interval_fun = setInterval(function() {
        let counter_attribute_value = value.getAttribute('data-counter-value');
        if (value) {
          value.innerHTML = counterValue;
          value.innerHTML += '<span>+</span>';
          // Example style modification:
          value.style.color = 'red'; // Modify the style property (e.g., color)
        }
        if (counterValue == counter_attribute_value) {
          clearInterval(counter_interval_fun);
        }
        counterValue++;
      }, 5);
    });
  }
  
});


// Modal 
function openModal(modalId,overlayId) {
  document.getElementById(modalId).style.display = 'block';
  document.getElementById(overlayId).style.display = 'block';
}

function closeModal(modalId,overlayId) {
  document.getElementById(modalId).style.display = 'none';
  document.getElementById(overlayId).style.display = 'none';
}




