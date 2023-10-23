const signOutEL = document.getElementById("sign-out");
const pauseIconEl = document.getElementById("pause-icon");
const upcomingBtn = document.getElementById("upcomingBtn");
const upcomingMovie = document.getElementById("upcoming");
const tvSeriesBtn = document.getElementById("tvSeriesBtn");
const tvSeriesMovie = document.getElementById("tvSeries");
const moviesBtn = document.getElementById("moviesBtn");
const movies = document.getElementById("movies");
const cartoonBtn = document.getElementById("cartoonBtn");
const cartoon = document.getElementById("cartoon");
const comedyBtn = document.getElementById("comedyBtn");
const comedy = document.getElementById("comedy");
const actionBtn = document.getElementById("actionBtn");
const action = document.getElementById("action");
const fantasyBtn = document.getElementById("fantasyBtn");
const fantasy = document.getElementById("fantasy");
const homeBtn = document.getElementById("homeBtn");
const appEl = document.getElementById("app");
const boxHeadingBtn = document.querySelectorAll(".box-heading");
const movieDescription_1 = document.querySelector(".movie-description-1");
const movieDescription_2 = document.querySelector(".movie-description-2");
const movieDescription_3 = document.querySelector(".movie-description-3");
const movieDescription_4 = document.querySelector(".movie-description-4");
const movieDescription_5 = document.querySelector(".movie-description-5");
const movieDescription_6 = document.querySelector(".movie-description-6");
const movieDescription_7 = document.querySelector(".movie-description-7");
const movieDescription_8 = document.querySelector(".movie-description-8");

const pageWatchLater = document.querySelector(".watch-later-page");
pageWatchLater.addEventListener("click", () => {
  window.location = "watch-later.php";
});

const logoNode = document.querySelector(".logo");
logoNode.addEventListener("click", () => {
  window.location = "app.php";
});

for (let i = 0; i < boxHeadingBtn.length; i++) {
  let show = false;
  boxHeadingBtn[0].addEventListener("click", function () {
    if (show) {
      boxHeadingBtn[0].style.color = "#fff";
      movieDescription_1.style.display = "none";
      show = false;
    } else {
      boxHeadingBtn[0].style.color = "#e7d666";
      movieDescription_1.style.display = "block";
      show = true;
    }
  });
  boxHeadingBtn[1].addEventListener("click", function () {
    if (show) {
      boxHeadingBtn[1].style.color = "#fff";
      movieDescription_2.style.display = "none";
      show = false;
    } else {
      boxHeadingBtn[1].style.color = "#e7d666";
      movieDescription_2.style.display = "block";
      show = true;
    }
  });
  boxHeadingBtn[2].addEventListener("click", function () {
    if (show) {
      boxHeadingBtn[2].style.color = "#fff";
      movieDescription_3.style.display = "none";
      show = false;
    } else {
      boxHeadingBtn[2].style.color = "#e7d666";
      movieDescription_3.style.display = "block";
      show = true;
    }
  });
  boxHeadingBtn[3].addEventListener("click", function () {
    if (show) {
      boxHeadingBtn[3].style.color = "#fff";
      movieDescription_4.style.display = "none";
      show = false;
    } else {
      boxHeadingBtn[3].style.color = "#e7d666";
      movieDescription_4.style.display = "block";
      show = true;
    }
  });
  boxHeadingBtn[4].addEventListener("click", function () {
    if (show) {
      boxHeadingBtn[4].style.color = "#fff";
      movieDescription_5.style.display = "none";
      show = false;
    } else {
      boxHeadingBtn[4].style.color = "#e7d666";
      movieDescription_5.style.display = "block";
      show = true;
    }
  });
  boxHeadingBtn[5].addEventListener("click", function () {
    if (show) {
      boxHeadingBtn[5].style.color = "#fff";
      movieDescription_6.style.display = "none";
      show = false;
    } else {
      boxHeadingBtn[5].style.color = "#e7d666";
      movieDescription_6.style.display = "block";
      show = true;
    }
  });
  boxHeadingBtn[6].addEventListener("click", function () {
    if (show) {
      boxHeadingBtn[6].style.color = "#fff";
      movieDescription_7.style.display = "none";
      show = false;
    } else {
      boxHeadingBtn[6].style.color = "#e7d666";
      movieDescription_7.style.display = "block";
      show = true;
    }
  });
  boxHeadingBtn[7].addEventListener("click", function () {
    if (show) {
      boxHeadingBtn[7].style.color = "#fff";
      movieDescription_8.style.display = "none";
      show = false;
    } else {
      boxHeadingBtn[7].style.color = "#e7d666";
      movieDescription_8.style.display = "block";
      show = true;
    }
  });
}
let scrollNode = JSON.parse(localStorage.getItem("scrollNode"));

window.addEventListener("load", () => {
  if (scrollNode === 4) {
    upcomingMovie.scrollIntoView({ behavior: "smooth" });
    scrollNode = 0;
    localStorage.setItem("scrollNode", JSON.stringify(scrollNode));
  }
  if (scrollNode === 3) {
    tvSeriesMovie.scrollIntoView({ behavior: "smooth" });
    scrollNode = 0;
    localStorage.setItem("scrollNode", JSON.stringify(scrollNode));
  }
  if (scrollNode === 2) {
    movies.scrollIntoView({ behavior: "smooth" });
    scrollNode = 0;
    localStorage.setItem("scrollNode", JSON.stringify(scrollNode));
  }
  if (scrollNode === 5) {
    cartoon.scrollIntoView({ behavior: "smooth" });
    scrollNode = 0;
    localStorage.setItem("scrollNode", JSON.stringify(scrollNode));
  }
  if (scrollNode === 6) {
    comedy.scrollIntoView({ behavior: "smooth" });
    scrollNode = 0;
    localStorage.setItem("scrollNode", JSON.stringify(scrollNode));
  }
  if (scrollNode === 7) {
    action.scrollIntoView({ behavior: "smooth" });
    scrollNode = 0;
    localStorage.setItem("scrollNode", JSON.stringify(scrollNode));
  }
  if (scrollNode === 8) {
    fantasy.scrollIntoView({ behavior: "smooth" });
    scrollNode = 0;
    localStorage.setItem("scrollNode", JSON.stringify(scrollNode));
  }
  if (scrollNode === 1) {
    appEl.scrollIntoView({ behavior: "smooth" });
    scrollNode = 0;
    localStorage.setItem("scrollNode", JSON.stringify(scrollNode));
  }
});

upcomingBtn.addEventListener("click", () => {
  upcomingMovie.scrollIntoView({ behavior: "smooth" });
});

tvSeriesBtn.addEventListener("click", () => {
  tvSeriesMovie.scrollIntoView({ behavior: "smooth" });
});

moviesBtn.addEventListener("click", () => {
  movies.scrollIntoView({ behavior: "smooth" });
});

cartoonBtn.addEventListener("click", () => {
  cartoon.scrollIntoView({ behavior: "smooth" });
});

comedyBtn.addEventListener("click", () => {
  comedy.scrollIntoView({ behavior: "smooth" });
});

actionBtn.addEventListener("click", () => {
  action.scrollIntoView({ behavior: "smooth" });
});

fantasyBtn.addEventListener("click", () => {
  fantasy.scrollIntoView({ behavior: "smooth" });
});

homeBtn.addEventListener("click", () => {
  appEl.scrollIntoView({ behavior: "smooth" });
});

const spacePoliceEl = document.getElementById("spacePolice");
const btnPauseEL = document.getElementById("btn-pause");

btnPauseEL.addEventListener("click", () => {
  if (spacePoliceEl.paused) {
    spacePoliceEl.play();
    btnPauseEL.innerHTML = `<i class="fa-solid fa-pause"></i> Pause`;
  } else {
    spacePoliceEl.pause();
    btnPauseEL.innerHTML = `<i class="fa-solid fa-play"></i> Play`;
  }
});

let chooseProduct = {
  id: "",
  movieName: "",
  nation: "",
  time: "",
  resolution: "",
  view: "",
  author: "",
  actor: "",
  img: "",
  description: "",
  category: "",
  year: "",
};

const pageWatchLaterNode = document.querySelector(".watch-later-page");
pageWatchLaterNode.addEventListener("click", () => {
  window.location = "watch-later.php";
});

let movieDb = JSON.parse(localStorage.getItem("movieList"));

function products(item) {
  chooseProduct.id = item.id;
  chooseProduct.movieName = item.movieName;
  chooseProduct.nation = item.nation;
  chooseProduct.time = item.time;
  chooseProduct.resolution = item.resolution;
  chooseProduct.view = item.view;
  chooseProduct.author = item.author;
  chooseProduct.actor = item.actor;
  chooseProduct.img = item.img;
  chooseProduct.description = item.description;
  chooseProduct.category = item.category;
  chooseProduct.year = item.year;
  localStorage.setItem("chooseProduct", JSON.stringify(chooseProduct));
}

const sortedList = movieDb.sort((a, b) => b.view - a.view);
const top8Items = sortedList.slice(0, 8);
top8Items.map((item) => {
  const homeNode = document.querySelector(".trending-movie-list");
  const imgHome = document.createElement("div");
  imgHome.classList.add("img-trending");
  homeNode.appendChild(imgHome);
  imgHome.innerHTML = `
        <img src="${item.img}">
    `;
  imgHome.addEventListener("click", () => {
    products(item);
    window.location = `title.php#${chooseProduct.movieName}?${chooseProduct.id}`;
  });
});

movieDb.map((item) => {
  if (item.home === "movie") {
    const moviesNode = document.querySelector(".movies-list");
    const imgMovies = document.createElement("div");
    imgMovies.classList.add("img-movies");
    moviesNode.appendChild(imgMovies);
    imgMovies.innerHTML = `
        <img src="${item.img}">
        `;
    imgMovies.addEventListener("click", () => {
      products(item);
      window.location = "title.php";
    });
  }

  if (item.home === "tv") {
    const tvNode = document.querySelector(".tvSeries-movie-list");
    const imgTv = document.createElement("div");
    imgTv.classList.add("img-tv");
    tvNode.appendChild(imgTv);
    imgTv.innerHTML = `
        <img src="${item.img}">
        `;
    imgTv.addEventListener("click", () => {
      products(item);
      window.location = "title.php";
    });
  }

  if (item.home === "upcoming") {
    const upcomingNode = document.querySelector(".upcoming-movie-list");
    const imgUpcoming = document.createElement("div");
    imgUpcoming.classList.add("img-upcoming");
    upcomingNode.appendChild(imgUpcoming);
    imgUpcoming.innerHTML = `
        <img src="${item.img}">
        `;
    imgUpcoming.addEventListener("click", () => {
      products(item);
      window.location = "title.php";
    });
  }

  if (item.category === "Cartoon") {
    const cartoonNode = document.querySelector(".cartoon-movie-list");
    const imgCartoon = document.createElement("div");
    imgCartoon.classList.add("img-cartoon");
    cartoonNode.appendChild(imgCartoon);
    imgCartoon.innerHTML = `
        <img src="${item.img}">
        `;
    imgCartoon.addEventListener("click", () => {
      products(item);
      window.location = "title.php";
    });
  }

  if (item.category === "Comeny") {
    const comedyNode = document.querySelector(".comedy-movie-list");
    const imgComedy = document.createElement("div");
    imgComedy.classList.add("img-comedy");
    comedyNode.appendChild(imgComedy);
    imgComedy.innerHTML = `
        <img src="${item.img}">
        `;
    imgComedy.addEventListener("click", () => {
      products(item);
      window.location = "title.php";
    });
  }

  if (item.category === "Action") {
    const actionNode = document.querySelector(".action-movie-list");
    const imgAction = document.createElement("div");
    imgAction.classList.add("img-action");
    actionNode.appendChild(imgAction);
    imgAction.innerHTML = `
        <img src="${item.img}">
        `;
    imgAction.addEventListener("click", () => {
      products(item);
      window.location = "title.php";
    });
  }

  if (item.category === "fantasy") {
    const fantasyNode = document.querySelector(".fantasy-movie-list");
    const imgFantasy = document.createElement("div");
    imgFantasy.classList.add("img-fantasy");
    imgFantasy.classList.add(`${item.id}`);
    fantasyNode.appendChild(imgFantasy);
    imgFantasy.innerHTML = `
        <img src="${item.img}">
        `;
    imgFantasy.addEventListener("click", () => {
      products(item);
      window.location = "title.php";
    });
  }
});
