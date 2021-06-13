const container = document.querySelector(".container");
const image = document.querySelector(".bigImage");
const thumbs = document.querySelectorAll(".thumb");
container.addEventListener("click", function (e) {
  image.src = e.target.src;
  image.classList.add("fade");

  setTimeout(function () {
    image.classList.remove("fade");
  }, 500);

  thumbs.forEach(function (thumb) {
    thumb.className = "thumb";
  });
  e.target.classList.add("active");
});
