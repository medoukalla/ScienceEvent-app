// profile settings
function showDiv(index) {
  document.querySelectorAll('.content').forEach((div, i) => {
    div.classList.toggle('hidden', i + 1 !== index);
  });
}

//  Initialize Swiper
var swiper = new Swiper(".mySwiper", {
  slidesPerView: 3,
  spaceBetween: 30,
  loop:true,
  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});