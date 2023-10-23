object = JSON.parse(localStorage.getItem("chooseProduct"));
list = JSON.parse(localStorage.getItem("movieList"));

// href
const logoNode = document.querySelector(".logo");
window.location = `title.php#movieName:${object.movieName}?id:${object.id}`;

logoNode.addEventListener("click", () => {
  window.location = "app.php";
});

const pageWatchLaterNode = document.querySelector(".watch-later-page");
pageWatchLaterNode.addEventListener("click", () => {
  window.location = "watch-later.php";
});

upcomingBtn.addEventListener("click", () => {
  let scrollNode = 4;
  localStorage.setItem("scrollNode", JSON.stringify(scrollNode));
  window.location = "app.php";
});

tvSeriesBtn.addEventListener("click", () => {
  let scrollNode = 3;
  localStorage.setItem("scrollNode", JSON.stringify(scrollNode));
  window.location = "app.php";
});

moviesBtn.addEventListener("click", () => {
  let scrollNode = 2;
  localStorage.setItem("scrollNode", JSON.stringify(scrollNode));
  window.location = "app.php";
});

cartoonBtn.addEventListener("click", () => {
  let scrollNode = 5;
  localStorage.setItem("scrollNode", JSON.stringify(scrollNode));
  window.location = "app.php";
});

comedyBtn.addEventListener("click", () => {
  let scrollNode = 6;
  localStorage.setItem("scrollNode", JSON.stringify(scrollNode));
  window.location = "app.php";
});

actionBtn.addEventListener("click", () => {
  let scrollNode = 7;
  localStorage.setItem("scrollNode", JSON.stringify(scrollNode));
  window.location = "app.php";
});

fantasyBtn.addEventListener("click", () => {
  let scrollNode = 8;
  localStorage.setItem("scrollNode", JSON.stringify(scrollNode));
  window.location = "app.php";
});

homeBtn.addEventListener("click", () => {
  let scrollNode = 1;
  localStorage.setItem("scrollNode", JSON.stringify(scrollNode));
  window.location = "app.php";
});

const listAdd = JSON.parse(localStorage.getItem("listAdd")) || [];

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

const pageProductNode = document.querySelector(".page-product");
pageProductNode.innerHTML = `
            <div class="content-page-product">
            <div class="info-film">
                <div class="img-info">
                    <div class="img-film">
                        <img src="${object.img}">
                        <div class="watch-now">
                            <div class="shadow-watch-now"></div>
                            <div class="click-watch-now">
                                <div class="watch">Watch now</div>
                                <div class="later">Watch later</div>
                            </div>
                        </div>
                    </div>
                    <div class="info-details">
                        <h1>${object.movieName}</h1>
                        <div class="info-details-film">
                            <div class="item-details">
                                <div class="weight">Director:</div>
                                <div>${object.author}</div>
                            </div>
                            <div class="item-details">
                                <div class="weight">Nation:</div>
                                <div>${object.nation}</div>
                            </div>
                            <div class="item-details">
                                <div class="weight">Year of manufacture:</div>
                                <div>${object.year}</div>
                            </div>
                            <div class="item-details">
                                <div class="weight">Performer:</div>
                                <div>${object.actor}</div>
                            </div>
                            <div class="item-details">
                                <div class="weight">Time:</div>
                                <div>${object.time}</div>
                            </div>
                            <div class="item-details">
                                <div class="weight">Resolution:</div>
                                <div>${object.resolution}</div>
                            </div>
                            <div class="item-details">
                                <div class="weight">Category:</div>
                                <div>${object.category}</div>
                            </div>
                            <div class="item-details">
                                <div class="weight">View:</div>
                                <div>${object.view}</div>
                            </div>
                            <div class="description">
                                <div class="weight">Describe:</div>
                                <div>${object.description}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="comment-div">
                <h2>Comment:</h2>
                <div class="input-user-comment">
                    <div class="img-user">
                        <img src="data:image/png;base64,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">
                    </div>
                    <div class="comment">
                        <input class="input-cmt" type="text" placeholder="Your comment...">
                        <div class="save-cmt">
                            <button>Save</button>
                        </div>
                    </div>
                </div>
                 
                
            </div>
            
            <div class="suggest-film">
                <h2>Suggest:</h2>
                <div class="img-suggest">
                    
                </div>
            </div>
        </div>

        <div class="top-view-movie">
            <div class="title-trending">
                <h2>Trending:</h2>
            </div>
            
        </div>
`;

//suggest
list.map((item) => {
  if (item.category === object.category) {
    const imgSuggestNode = document.querySelector(".img-suggest");
    const imgSugestFilm = document.createElement("div");
    imgSugestFilm.classList.add("img-suggest-film");
    imgSuggestNode.appendChild(imgSugestFilm);
    imgSugestFilm.innerHTML = `
            <img src="${item.img}">
            `;
    imgSugestFilm.addEventListener("click", () => {
      products(item);
      window.location = "title.php";
    });
  }
});

const sortedList = list.sort((a, b) => b.view - a.view);
const top8Items = sortedList.slice(0, 8);
top8Items.map((item) => {
  const topViewMovieNode = document.querySelector(".top-view-movie");
  const filmTrendingNode = document.createElement("div");
  filmTrendingNode.classList.add("film-trending");
  topViewMovieNode.appendChild(filmTrendingNode);
  filmTrendingNode.innerHTML = `
    <div class="item-film-trending">
    <div class="img-film-trending">
        <img src="${item.img}">
    </div>
    <div class="conent-film-trending">
        <div class="name-film-trending">${item.movieName}</div>
        <div class="view-film-trending">
            <div class="svg-view-film-trending">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>                                              
            </div>
            <div>${item.view}</div>
        </div>
    </div>
    `;
  filmTrendingNode.addEventListener("click", () => {
    products(item);
    window.location = "title.php";
  });
});

let temp = 0;
const watchLaterNode = document.querySelector(".later");
watchLaterNode.addEventListener("click", () => {
  listAdd.map((item) => {
    if (item.id === object.id && temp === 0) {
      temp += 1;
      alert(`Movie '${object.movieName}' already exists`);
      return temp;
    }
  });
  if (temp === 0) {
    listAdd.push(object);
    // localStorage.setItem('chooseProduct',JSON.stringify(object));
    localStorage.setItem("listAdd", JSON.stringify(listAdd));
    // window.location = `watch-later.html`;
    alert(`Movie '${object.movieName}' added to WATCH LATER`);
  }
});

const watchNowNode = document.querySelector(".watch");
const movieBoxShadow = document.querySelector(".movie");
const boxVideo = document.querySelector(".box-video");
const videoMovie = document.querySelector(".video");
watchNowNode.addEventListener("click", () => {
  movieBoxShadow.style.visibility = "visible";
  boxVideo.style.visibility = "visible";
  videoMovie.style.visibility = "visible";
  list.map((item) => {
    if (item.id === object.id) {
      console.log(item.view);
      object.view = Number(item.view) + 1;
      item.view = Number(item.view) + 1;
      listAdd.map((itemm) => {
        if (itemm.id === object.id) {
          itemm.view = Number(itemm.view) + 1;
        }
        localStorage.setItem("listAdd", JSON.stringify(listAdd));
      });
    }
    localStorage.setItem("movieList", JSON.stringify(list));
    localStorage.setItem("chooseProduct", JSON.stringify(object));
  });
});

// localStorage.setItem('movieList',JSON.stringify(list));
// localStorage.setItem('chooseProduct',JSON.stringify(object));

boxVideo.addEventListener("click", (event) => {
  if (event.target !== videoMovie && !videoMovie.contains(event.target)) {
    movieBoxShadow.style.visibility = "hidden";
    boxVideo.style.visibility = "hidden";
    videoMovie.style.visibility = "hidden";
    window.location.reload();
    videoMovie.pause();
  }
});

//cmt
let userCmt = {
  id: "",
  name: "",
  date: "",
  time: "",
};

const userName = document.querySelector(".user-name").innerText;
// const userName =
const saveNode = document.querySelector(".save-cmt");
let userCmtList = JSON.parse(localStorage.getItem("userCmtList"));
if (userCmtList === null) userCmtList = [];
localStorage.setItem("userCmtList", JSON.stringify(userCmtList));

saveNode.addEventListener("click", () => {
  const contentCmt = document.querySelector(".input-cmt").value;
  if (contentCmt === "") {
    alert("Your comment is empty. Try again!");
  } else {
    const id = object.id;
    userCmt.id = id;
    userCmt.cmt = contentCmt;
    let name = userName;
    userCmt.name = name;
    let today = new Date();
    let day = today.getDate();
    let month = today.getMonth() + 1;
    let year = today.getFullYear();
    let date = day + "-" + month + "-" + year;
    userCmt.date = date;
    let time =
      today.getHours() +
      "h-" +
      today.getMinutes() +
      "m-" +
      today.getSeconds() +
      "s";
    userCmt.time = time;
    userCmtList.push(userCmt);
    localStorage.setItem("userCmt", JSON.stringify(userCmt));
    localStorage.setItem("userCmtList", JSON.stringify(userCmtList));
    window.location.reload();
  }
});
userCmtList = JSON.parse(localStorage.getItem("userCmtList"));
userCmtList.map((item, i) => {
  if (item.id === object.id) {
    const commentDivNode = document.querySelector(".comment-div");
    const outPutUserCmtNode = document.createElement("div");
    outPutUserCmtNode.classList.add("output-user-comment");
    commentDivNode.appendChild(outPutUserCmtNode);
    outPutUserCmtNode.innerHTML = `
    <div class="img-user">
    <img src="data:image/png;base64,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">
</div>
<div class="commented">
    <div class="name-user">${item.name}</div>
    <div class="date-time-cmt">
        <div class="date">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
            </svg>      
            <div>${item.date}</div>
        </div>
        <div class="time">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>      
            <div>${item.time}</div>
        </div>
    </div>
    <div class="user-cmt">
        ${item.cmt}
    </div>
    <div class="fixes-delete">
        <div class="svg-down">
            <div class="svg">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                </svg> 
            </div> 
            <div class="popup">
                <div class="fixes">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.343 3.94c.09-.542.56-.94 1.11-.94h1.093c.55 0 1.02.398 1.11.94l.149.894c.07.424.384.764.78.93.398.164.855.142 1.205-.108l.737-.527a1.125 1.125 0 011.45.12l.773.774c.39.389.44 1.002.12 1.45l-.527.737c-.25.35-.272.806-.107 1.204.165.397.505.71.93.78l.893.15c.543.09.94.56.94 1.109v1.094c0 .55-.397 1.02-.94 1.11l-.893.149c-.425.07-.765.383-.93.78-.165.398-.143.854.107 1.204l.527.738c.32.447.269 1.06-.12 1.45l-.774.773a1.125 1.125 0 01-1.449.12l-.738-.527c-.35-.25-.806-.272-1.203-.107-.397.165-.71.505-.781.929l-.149.894c-.09.542-.56.94-1.11.94h-1.094c-.55 0-1.019-.398-1.11-.94l-.148-.894c-.071-.424-.384-.764-.781-.93-.398-.164-.854-.142-1.204.108l-.738.527c-.447.32-1.06.269-1.45-.12l-.773-.774a1.125 1.125 0 01-.12-1.45l.527-.737c.25-.35.273-.806.108-1.204-.165-.397-.505-.71-.93-.78l-.894-.15c-.542-.09-.94-.56-.94-1.109v-1.094c0-.55.398-1.02.94-1.11l.894-.149c.424-.07.765-.383.93-.78.165-.398.143-.854-.107-1.204l-.527-.738a1.125 1.125 0 01.12-1.45l.773-.773a1.125 1.125 0 011.45-.12l.737.527c.35.25.807.272 1.204.107.397-.165.71-.505.78-.929l.15-.894z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>                                                          
                    </div>
                    <div>Edit</div>
                </div>
                <div class="delete">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>  
                    </div>
                    <div>Delete</div>
                </div>
            </div>
        </div>
    </div>
</div>
    `;
  }
});

let newListCmt = userCmtList.filter((item) => item.id === object.id);
const deleteCmtNode = document.querySelectorAll(".delete");
const editNode = document.querySelectorAll(".fixes");
let activeEditNode = null;

newListCmt.map((item, i) => {
  deleteCmtNode.forEach(function (element, index) {
    if (userName === item.name && i === index) {
      element.addEventListener("click", () => {
        userCmtList = userCmtList.filter((temp) => temp !== item);
        alert(`Comments '${item.cmt}' will be deleted`);
        localStorage.setItem("userCmtList", JSON.stringify(userCmtList));
        element.closest(".output-user-comment").remove();
      });
    }
  });
  editNode.forEach(function (element, index) {
    if (userName === item.name && i === index) {
      element.addEventListener("click", () => {
        if (activeEditNode !== null && activeEditNode !== element) {
          // activeEditNode.parentElement.parentElement.parentElement.parentElement.children[2].classList.remove('user-edit');
          activeEditNode.parentElement.parentElement.parentElement.parentElement.children[2].innerHTML = `
                        ${activeEditNode.parentElement.parentElement.parentElement.parentElement.children[2].children[0].value}
                    `;
        }
        activeEditNode = element;
        const userEdit =
          element.parentElement.parentElement.parentElement.parentElement
            .children[2];
        userEdit.classList.add("user-edit");
        userEdit.innerHTML = `
                    <input type="text" value="${item.cmt}" class="cmted" id="${index}"/>
                    <div class="update-cancer-cmt">
                        <div class="update-cmt">Update</div>
                        <div class="cancer-update-cmt">Cancel</div>
                    </div>
                `;
        const updateCmtNode = document.querySelector(".update-cmt");
        const newCmt = document.querySelector(".cmted");
        updateCmtNode.addEventListener("click", () => {
          if (Number(newCmt.id) === index) {
            item.cmt = newCmt.value;
            localStorage.setItem("userCmtList", JSON.stringify(userCmtList));
            userEdit.innerHTML = item.cmt;
            activeEditNode = null;
          }
        });

        const cancerUpdateCmtNode =
          document.querySelector(".cancer-update-cmt");
        cancerUpdateCmtNode.addEventListener("click", () => {
          if (Number(newCmt.id) === index) {
            userEdit.innerHTML = `${item.cmt}`;
            activeEditNode = null;
          }
        });
      });
    }
  });
});
