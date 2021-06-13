// Menggunakan Jquery  External

// $(".search-button").on("click", function () {
//   $.ajax({
//     url: "http://www.omdbapi.com/?apikey=341ef28a&s=" + $(".input-keyword").val(),
//     success: (results) => {
//       const movies = results.Search;
//       let cards = "";
//       movies.forEach((movie) => {
//         cards += showCards(movie);
//       });

//       $(".movie-container").html(cards);

//       // Ketika tombol button di click
//       $(".modal-detail-button").on("click", function () {
//         $.ajax({
//           url: "http://www.omdbapi.com/?apikey=341ef28a&i=" + $(this).data("imdbid"),
//           success: (movie) => {
//             const movieDetail = showMovies(movie);

//             $(".modal-body").html(movieDetail);
//           },
//           error: (e) => {
//             console.log(e.responseText);
//           },
//         });
//       });
//     },
//     error: (e) => {
//       console.log(e.responseText);
//     },
//   });
// });

// Menggunakan Fetch Manila javascript (Manual Javascript)

// const searchButton = document.querySelector(".search-button");
// searchButton.addEventListener("click", function () {
//   const inputKeyword = document.querySelector(".input-keyword");
//   fetch("http://www.omdbapi.com/?apikey=341ef28a&s=" + inputKeyword.value)
//     .then((response) => response.json())
//     .then((response) => {
//       const movies = response.Search;
//       let cards = "";
//       movies.forEach((movies) => (cards += showCards(movies)));
//       const movieContainer = document.querySelector(".movie-container");
//       movieContainer.innerHTML = cards;

//       // Ketika Tombol Di click showMovies
//       const modalDetailButton = document.querySelectorAll(".modal-detail-button");
//       modalDetailButton.forEach((btn) => {
//         btn.addEventListener("click", function () {
//           const imdbid = this.dataset.imdbid;
//           fetch("http://www.omdbapi.com/?apikey=341ef28a&i=" + imdbid)
//             .then((response) => response.json())
//             .then((movies) => {
//               const moviesDetails = showMovies(movies);
//               const modalBody = document.querySelector(".modal-body");
//               modalBody.innerHTML = moviesDetails;
//             });
//         });
//       });
//     });
// });

// Refactoring source code Menggunakan Asyn Await

const searchButton = document.querySelector(".search-button");
searchButton.addEventListener("click", async function () {
  try {
    const inputKeyword = document.querySelector(".input-keyword");
    const movies = await getMovies(inputKeyword.value);
    updateUI(movies);
  } catch (err) {
    alert(err);
  }
});

function getMovies(keyword) {
  return fetch("http://www.omdbapi.com/?apikey=341ef28a&s=" + keyword)
    .then((response) => {
      if (!response.ok) {
        throw new Error(response.statusText);
      }
      return response.json();
    })
    .then((response) => {
      if (response.Response === "False") {
        throw new Error(response.Error);
      }
      return response.Search;
    });
}

function updateUI(movies) {
  let cards = "";
  movies.forEach((movies) => (cards += showCards(movies)));
  const movieContainer = document.querySelector(".movie-container");
  movieContainer.innerHTML = cards;
}

// Menggunakan Event Binding
document.addEventListener("click", async function (e) {
  if (e.target.classList.contains("modal-detail-button")) {
    const imdbid = e.target.dataset.imdbid;
    const movieDetails = await getMoviesDetails(imdbid);
    updateUIDetails(movieDetails);
  }
});

function getMoviesDetails(imdbid) {
  return fetch("http://www.omdbapi.com/?apikey=341ef28a&i=" + imdbid)
    .then((response) => response.json())
    .then((movie) => movie);
}
function updateUIDetails(movies) {
  const moviesDetails = showMovies(movies);
  const modalBody = document.querySelector(".modal-body");
  modalBody.innerHTML = moviesDetails;
}

function showCards(movie) {
  return `<div class="col-md-4 my-3">
    <div class="card">
        <img src="${movie.Poster}" class="card-img-top" alt="" />
            <div class="card-body">
                <h5 class="card-title">${movie.Title}</h5>
                <h6 class="card-subtitle mb-2 text-muted">${movie.Year}</h6>
                <a href="#" class="btn btn-primary modal-detail-button" data-bs-toggle="modal" data-bs-target="#movieDetailModal" data-imdbid="${movie.imdbID}">Show Details</a>
            </div>
        </div>
    </div>`;
}
function showMovies(movie) {
  return `<div class="container-fluid">
    <div class="row">
      <div class="col-md-3">
         <img src="${movie.Poster}" class="img-fluid" alt="" />
      </div>
         <div class="col-md">
            <ul class="list-group">
                <li class="list-group-item"><h4>A${movie.Title} (${movie.Year})</h4></li>
                <li class="list-group-item"><strong>Director : </strong> ${movie.Director}</li>
                <li class="list-group-item"><strong>Actors : </strong>${movie.Actors}</li>
                <li class="list-group-item"><strong>Writer : </strong>${movie.Writer}</li>
                <li class="list-group-item">
                <strong>Plot : </strong>${movie.Plot}<br /> test </li>
            </ul>
        </div>
    </div>
</div>`;
}
