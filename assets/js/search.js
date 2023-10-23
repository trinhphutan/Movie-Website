list = JSON.parse(localStorage.getItem("movieList"));
const inputTextNode = document.querySelector(".input-text");
const formSearchNode = document.querySelector(".form-search");
inputTextNode.addEventListener("input", () => {
  const searchText = inputTextNode.value.toLowerCase();
  let results;
  if (searchText !== "") {
    results = list.filter(function (item) {
      return item.movieName.toLowerCase().includes(searchText);
    });
  }
  formSearchNode.innerHTML = ``;
  if (results.length === 0) {
    formSearchNode.innerHTML = `
            <div class="no-results">No results found.</div>
        `;
  } else {
    results.map((item) => {
      const itemSearched = document.createElement("div");
      itemSearched.classList.add("item-searched");
      formSearchNode.appendChild(itemSearched);
      itemSearched.innerHTML = `
            <div class="img-item-searched">
            <img src="${item.img}">
            </div>
            <div class="title-film-searched"> 
            <div class="name-film-searched">${item.movieName}</div>
            <div class="view-film-searched">
                <div class="icon-eye-view">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>                                      
                </div>
                <div class="view-item">${item.view}</div>
            </div>
            </div>
            `;
      itemSearched.addEventListener("click", () => {
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
        window.location = "title.php";
      });
    });
  }
});
