function showcat() {
  var x = document.getElementById("head");
  if (x.style.display === "none") {
    x.style.display = "block";
    location.replace("#head");
  } else {
    x.style.display = "none";
    location.replace("#head");
  }
}
var swiper = new Swiper(".home-slider", {
  spaceBetween: 30,
  centeredSlides: true,
  autoplay: {
    delay: 7500,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  loop: true,
});
function active() {
  const i = document.querySelector(".active");
  i.classList.remove("active");
}
//
// conter
// var v = false;
// while (!v) {
//   window.onscroll = () => {
//     $(document).ready(function () {
//       $(".counter").each(function () {
//         $(this)
//           .prop("Counter", 0)
//           .animate(
//             {
//               Counter: $(this).text(),
//             },
//             {
//               duration: 6000,
//               easing: "swing",
//               step: function (now) {
//                 $(this).text(Math.ceil(now));
//               },
//             }
//           );
//       });
//     });
//     v = true;
//   };
// }
// second;
// $(document).ready(function () {
//   $(".counter").counterUp({
//     delay: 10,
//     time: 1200,
//   });
// });
