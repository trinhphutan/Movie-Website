const toggle = document.getElementById('toggleDark');
const content = document.getElementById('content-dark');
const footer = document.getElementById('footer-dark');
const separation = document.querySelectorAll('.separation');
const question = document.querySelectorAll('.question')
const btnSignInEl = document.getElementById('btn-sign-in');
const btnSignUpEl = document.getElementById('btn-sign-up');
const answer = document.querySelectorAll('.answer');

const answer1 = document.querySelector('.answer1');
const answer2 = document.querySelector('.answer2');
const answer3 = document.querySelector('.answer3');
const answer4 = document.querySelector('.answer4');
const answer5 = document.querySelector('.answer5');
const answer6 = document.querySelector('.answer6');

// btnSignInEl.addEventListener('click', () => {
//     window.location = 'login.php';
// })

// btnSignUpEl.addEventListener('click', () => {
//     window.location = 'register.php';
// })

//Handle answer question

for (let i = 0; i < question.length; i++) {
    let show = false;
    question[0].addEventListener('click', function () {
        if (show) {
            answer1.style.display = 'none';
            show = false;
        } else {
            answer1.style.display = 'block';
            show = true;
        }
    })
    question[1].addEventListener('click', function () {
        if (show) {
            answer2.style.display = 'none';
            show = false;
        } else {
            answer2.style.display = 'block';
            show = true;
        }
    })
    question[2].addEventListener('click', function () {
        if (show) {
            answer3.style.display = 'none';
            show = false;
        } else {
            answer3.style.display = 'block';
            show = true;
        }
    })
    question[3].addEventListener('click', function () {
        if (show) {
            answer4.style.display = 'none';
            show = false;
        } else {
            answer4.style.display = 'block';
            show = true;
        }
    })
    question[4].addEventListener('click', function () {
        if (show) {
            answer5.style.display = 'none';
            show = false;
        } else {
            answer5.style.display = 'block';
            show = true;
        }
    })
    question[5].addEventListener('click', function () {
        if (show) {
            answer6.style.display = 'none';
            show = false;
        } else {
            answer6.style.display = 'block';
            show = true;
        }
    })
}


// Handle interface color change
toggle.addEventListener('click', function () {
    this.classList.toggle('fa-moon');
    if (this.classList.toggle('sun')) {
        content.style.background = 'white';
        content.style.color = 'black';
        content.style.transition = '2s';
        footer.style.background = 'white';
        footer.style.transition = '2s';

        for (let i = 0; i < question.length; i++) {
            question[i].style.color = 'black';
            question[i].style.background = '#ccc';
        }

        for (let i = 0; i < answer.length; i++) {
            answer[i].style.color = 'black';
            answer[i].style.background = '#ccc';
        }

        for (let i = 0; i < separation.length; i++) {
            separation[i].style.background = '#e3ce41';
            separation[i].style.transition = '2s';
        }

    } else {
        content.style.background = 'black';
        content.style.color = 'white';
        content.style.transition = '2s';
        footer.style.background = 'black';
        footer.style.transition = '2s';

        for (let i = 0; i < question.length; i++) {
            question[i].style.color = 'white';
            question[i].style.background = 'rgba(48, 48, 48)';
        }

        for (let i = 0; i < answer.length; i++) {
            answer[i].style.color = 'white';
            answer[i].style.background = 'rgba(48, 48, 48)';
        }

        for (let i = 0; i < separation.length; i++) {
            separation[i].style.background = '#737373';
            separation[i].style.transition = '2s';
        }
    }
})

