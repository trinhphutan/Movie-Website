let chooseProduct = {
    id: '',
    movieName: '',
    nation: '',
    time: '',
    resolution: '',
    view: '',
    author: '',
    actor: '',
    img: '',
    description: '',
    category: '',
    year: ''
}

const logoNode = document.querySelector('.logo');
logoNode.addEventListener('click', () => {
    window.location = 'app.php';
})

const pageWatchLaterNode = document.querySelector(".watch-later-page")
pageWatchLaterNode.addEventListener('click', () => {
    window.location = 'watch-later.php';
})



object = JSON.parse(localStorage.getItem('chooseProduct'));
listAdd = JSON.parse(localStorage.getItem('listAdd'));
const contentPage = document.querySelector('.content-page-later')
listAdd.map((item,i) => {
    const element = document.createElement('div');
    element.classList.add('element-added');
    contentPage.appendChild(element)
    element.innerHTML = `
    <div class="img-element">
        <img src="${item.img}">
        <div class="watch-now">
            <div class="shadow-watch-now"></div>
            <div class="click-watch-now">
                <div class="watch">Watch now</div>
                <div class="delete-element">Delete</div>
            </div>
        </div>
    </div>
    <div class="content-film">
        <h2 class="name-movie-added">${item.movieName}</h2>
    <div class="info-details-film">
        <div class="item-details">
            <div class="weight">Director:</div>
            <div>${item.author}</div>
        </div>
        <div class="item-details">
            <div class="weight">Nation:</div>
            <div>${item.nation}</div>
        </div>
        <div class="item-details">
            <div class="weight">Year of manufacture:</div>
            <div>${item.year}</div>
        </div>
        <div class="item-details">
            <div class="weight">Performer:</div>
            <div>${item.actor}</div>
        </div>
        <div class="item-details">
            <div class="weight">Time:</div>
            <div>${item.time}</div>
        </div>
        <div class="item-details">
            <div class="weight">Resolution:</div>
            <div>${item.resolution}</div>
        </div>
        <div class="item-details">
            <div class="weight">Category:</div>
            <div>${item.category}</div>
        </div>
        <div class="item-details">
            <div class="weight">View:</div>
            <div>${item.view}</div>
        </div>
        <div class="description">
            <div class="weight">Describe:</div>
            <div>${item.description}</div>
        </div>
</div>
</div> 
    `; 
    const watchNow = document.querySelectorAll('.watch');
    watchNow.forEach(function(element, index) {
        if(i === index) {
            element.addEventListener('click', () => {
                chooseProduct.id = item.id;
                chooseProduct.movieName = item.movieName;
                chooseProduct.nation =  item.nation;
                chooseProduct.time =  item.time;
                chooseProduct.resolution =  item.resolution;
                chooseProduct.view =  item.view;
                chooseProduct.author =  item.author;
                chooseProduct.actor =  item.actor;
                chooseProduct.img =  item.img;
                chooseProduct.description =  item.description;
                chooseProduct.category =  item.category;
                chooseProduct.year =  item.year;
                localStorage.setItem('chooseProduct',JSON.stringify(chooseProduct));
                window.location = 'title.php';
            })
        }
    })

    const deleteElementNode = document.querySelectorAll('.delete-element');
    deleteElementNode.forEach(function(element, index) {
        if(i === index) {
            element.addEventListener('click', () => {
               listAdd = listAdd.filter(temp => temp !== item)
               localStorage.setItem('listAdd',JSON.stringify(listAdd));
               window.location.reload()
            })
        }
    })
    
})


