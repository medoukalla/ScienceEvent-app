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


document.querySelector('.mobile-filter-btn').addEventListener('click', function () {
    document.querySelector('.formations-filter').style.display = 'block';
    document.querySelector('.overlay').style.display = 'block';
});

document.querySelector('.close-bar button').addEventListener('click', function () {
    document.querySelector('.formations-filter').style.display = 'none';
    document.querySelector('.overlay').style.display = 'none';
});

// لإغلاق الفلتر عند النقر على الخلفية
document.querySelector('.overlay').addEventListener('click', function () {
    document.querySelector('.formations-filter').style.display = 'none';
    this.style.display = 'none';
});


document.querySelector('.close-bar button').addEventListener('click', function () {
    document.querySelector('.formations-filter').style.display = 'none';
});