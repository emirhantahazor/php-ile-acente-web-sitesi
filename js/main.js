$(document).ready(function() {
  $(".dropdown-trigger").dropdown({
    closeOnClick: true // Menüyü tıkladığınızda otomatik olarak kapatır
  });
});

  $(document).ready(function() {
    $('.owl-carousel').owlCarousel({
      items: 1,
      loop: true,
      autoplay: true,
      autoplayTimeout: 10000,
      autoplayHoverPause: true,
      nav: true,
      navText: ["<i class='material-icons'>keyboard_arrow_left</i>", "<i class='material-icons'>keyboard_arrow_right</i>"],
      dots: false
    });
  });

  window.addEventListener("load", function() {
    var slider = document.querySelector(".slider");
    var sliderWidth = slider.scrollWidth;
    var containerWidth = document.querySelector(".slider-container").offsetWidth;
    var duration = (sliderWidth + containerWidth) / 100; // Hesaplanan süre

    slider.style.animationDuration = duration + "s";
  });
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, {});
  });

  // Initialize collapsible (uncomment the lines below if you use the dropdown variation)
  // var collapsibleElem = document.querySelector('.collapsible');
  // var collapsibleInstance = M.Collapsible.init(collapsibleElem, options);

  // Or with jQuery

  document.addEventListener('DOMContentLoaded', function() {
    var menuItems = document.querySelectorAll('.menu-item');
    var sayfaBaslik = document.querySelector('.sayfabaslik');

    menuItems.forEach(function(item) {
      item.addEventListener('click', function() {
        var itemId = this.id;
        sayfaBaslik.innerText = (itemId === 'hakkimizda') ? ' / Hakkımızda' : '/ ' + itemId.charAt(0).toUpperCase() + itemId.slice(1);

        menuItems.forEach(function(menuItem) {
          menuItem.classList.remove('active');
        });
        this.classList.add('active');
      });
    });
  });