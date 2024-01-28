/*===== MENU SHOW =====*/
const showMenu = (toggleId, navId) => {
  const toggle = document.getElementById(toggleId),
    nav = document.getElementById(navId);

  if (toggle && nav) {
    toggle.addEventListener("click", () => {
      nav.classList.toggle("show");
    });
  }
};
showMenu("nav-toggle", "nav-menu");

/*===== ACTIVE AND REMOVE MENU =====*/
const navLink = document.querySelectorAll(".nav__link");

function linkAction() {
  /*Active link*/
  navLink.forEach((n) => n.classList.remove("active"));
  this.classList.add("active");

  /*Remove menu mobile*/
  const navMenu = document.getElementById("nav-menu");
  navMenu.classList.remove("show");
}
navLink.forEach((n) => n.addEventListener("click", linkAction));

/*===== SCROLL REVEAL ANIMATION =====*/
const sr = ScrollReveal({
  origin: "top",
  distance: "80px",
  duration: 2000,
  reset: true,
});

/*SCROLL HOME*/
sr.reveal(".home__title", {});
sr.reveal(".button", { delay: 200 });
sr.reveal(".home__img", { delay: 400 });
sr.reveal(".home__social-icon", { interval: 200 });

/*SCROLL ABOUT*/
sr.reveal(".about__img", {});
sr.reveal(".about__subtitle", { delay: 400 });
sr.reveal(".about__text", { delay: 400 });

/*SCROLL SKILLS*/
sr.reveal(".skills__subtitle", {});
sr.reveal(".skills__text", {});
sr.reveal(".skills__data", { interval: 200 });
sr.reveal(".skills__img", { delay: 600 });

// Timeline
sr.reveal(".title-timeline", {});
sr.reveal(".timeline", {});

/*SCROLL WORK*/
sr.reveal(".work__img", { interval: 200 });

/*SCROLL CONTACT*/
// sr.reveal('.contact__input',{interval: 200});

$(function () {
  $('[data-tugle="tooltip"]').tooltip("show");
});
$(function () {
  $('[data-toggle="tooltip"]').tooltip();
});

new Typed("#typed", {
  strings: [
    "I'am Blogger",
    "I'am Junior Web Developer",
    "I'am Informatics Engineering Student",
    "at Politeknik Negeri Bandung",
  ],
  typeSpeed: 100,
  delaySpeed: 600,
  loop: true,
});

function getCv() {
  Swal.fire({
    title: "Info !!!",
    html:
      "For <b> security and privacy</b> reasons. To download my CV, please contact me via email at <b> ardinurinsan03@gmail.com.</b>" +
      '<a class="btn btn-success btn-sm mt-3" href="mailto:ardinurinsan03@gmail.com">Send Email</a>',
    icon: "warning",
    showCancelButton: true,
    showConfirmButton: false,
    cancelButtonText: "X",
    cancelButtonColor: "#C6C6C6",
  });
}
