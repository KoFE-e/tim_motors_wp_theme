//dropdown_menu

const dropdowns = document.querySelectorAll('.promo__search__item');

dropdowns.forEach(dropdown => {
    const select = dropdown.querySelector('.promo__search__select');
    const menu = dropdown.querySelector('.dropdown__list');
    const options = dropdown.querySelectorAll('.dropdown__item');
    const selected = dropdown.querySelector('.selected_dropdown');

    select.addEventListener('click', () => {
        if (getComputedStyle(menu).display == "none") {
            fadeIn(menu, 300);
        }
        else {
            fadeOut(menu, 300);
        };
    });

    document.addEventListener('click', event => {
        if (event.target != select) {
            fadeOut(menu, 300);
        };
    });

    options.forEach(option => {
        option.addEventListener('click', () => {
            selected.innerHTML = option.innerHTML;
            fadeOut(menu, 300);
        });
    });
});

//questions_expand

const questions = document.querySelectorAll('.questions__item');

questions.forEach(question => {
    const answer = question.querySelector('.questions__answer');
    const vertical = question.querySelector('.vertical');
    const horizontal = question.querySelector('.horizontal');
    const title = question.querySelector('.questions__title');
    const questionMaxHeight = getComputedStyle(question).maxHeight;

    title.addEventListener('click', () => {
        if (!answer.classList.contains('expanded')) {
            answer.classList.add('expanded');
            fadeIn(answer, 500);
            fadeOut(vertical, 500);
            horizontal.style.transform = "rotate(180deg)";
            question.style.maxHeight = "500px";
        }
        else {
            answer.classList.remove('expanded');
            fadeOut(answer, 500);
            fadeIn(vertical, 500);
            horizontal.style.transform = "rotate(-180deg)";
            question.style.maxHeight = questionMaxHeight;
        };
    });
});

//jquery scripts
$(document).ready(function(){

    $('.deals__inner').slick({
        speed: 1200,
        adaptiveHeight: true,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 5000,
        swipe: false,
        dots: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        swipe: true,
        responsive: [
            {
                breakpoint: 1440,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    autoplaySpeed: 2000
                }
            }
        ]
    });
});

var searchParams = new URLSearchParams('?');

//search
const dropdownBrands = document.querySelectorAll('.dropdown__brand'),
      dropdownYears = document.querySelectorAll('.dropdown__year');

dropdownBrands.forEach(item => {
    item.addEventListener('click', () => {
        searchParams.delete('data-brand');
        if(!searchParams.has('data-brand')) {
            searchParams.append('data-brand', item.getAttribute('data-brand'));
        }
    });
});

dropdownYears.forEach(item => {
    item.addEventListener('click', () => {
        searchParams.delete('min-year');
        if(!searchParams.has('min-year')) {
            searchParams.append('min-year', parseInt(item.innerHTML));
        }
    });
});

//youtube_mobile_video_autoplay

// 2. This code loads the IFrame Player API code asynchronously.
var tag = document.createElement('script');
        
tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

// 3. This function creates an <iframe> (and YouTube player)
//    after the API code downloads.
var player;
function onYouTubeIframeAPIReady() {
player = new YT.Player('team__video__iframe', {
    videoId: '2ZMscv1rHP4',
    playerVars: { 'autoplay': 1, 'playsinline': 1,
                    'version': 3, 'controls': 0,
                    'showinfo': 0, 'mute': 1,
                    'loop': 1, 'playlist': '2ZMscv1rHP4',
                    'disablekb': 1, 'modestbranding': 1,
                    'rel': 0
                },
    events: {
    'onReady': onPlayerReady
    }
});
}

// 4. The API will call this function when the video player is ready.
function onPlayerReady(event) {
event.target.mute();
event.target.playVideo();
}