if (document.getElementById('carousel-arrow-next')) {
    document.getElementById('carousel-arrow-next').addEventListener('click', carouselSwipe, false);
    document.getElementById('carousel-arrow-prev').addEventListener('click', carouselSwipe, false);
}

//Carroussel
function carouselSwipe() {

    // Récupère les numéros de l'ancienne et la nouvelle image
    var currentImg = document.getElementsByClassName('carousel-img-displayed')[0].id.substring(9);
    var newImg = parseInt(currentImg);

    // Gestion du début et de la fin de la liste d'images
    if (this.id == 'carousel-arrow-next') {
        newImg++;
        if (newImg >= document.getElementsByClassName('carousel-img').length) {
            newImg = 0;
        }
    } else if (this.id == 'carousel-arrow-prev') {
        newImg--;
        if (newImg < 0) {
            newImg = document.getElementsByClassName('carousel-img').length - 1;
        }
    }

    // Disparition progressive de l'ancienne image
    document.getElementById('carousel-' + currentImg).className = 'carousel-img carousel-img-hidden';

    // Apparition progressive de la nouvelle image
    var displayedCarousel = document.getElementById('carousel-' + newImg);
    displayedCarousel.className = 'carousel-img carousel-img-hidden';
    setTimeout(function () {
        displayedCarousel.className = 'carousel-img carousel-img-displayed';
    }, 20);

    // Disparition totale de l'ancienne image
    setTimeout(function () {
        document.getElementById('carousel-' + currentImg).className = 'carousel-img carousel-img-noDisplay';
    }, 520);
}

const imageWidth = 300;
const imageHeight = 400;

function affiche_dunkerque() {
    swal({
        title: 'Dunkerque',
        imageUrl: "../assets/img/affiches_films/dunkerque.jpg",
        imageWidth: imageWidth,
        imageHeight: imageHeight,
        imageAlt: 'Dunkerque',
        animation: false
    })
};

function affiche_inception() {
    swal({
        title: 'Inception',
        imageUrl: "../assets/img/affiches_films/inception.jpg",
        imageWidth: imageWidth,
        imageHeight: imageHeight,
        imageAlt: 'Dunkerque',
        animation: false
    })
};

function affiche_interstellar() {
    swal({
        title: 'Interstellar',
        imageUrl: "../assets/img/affiches_films/interstellar.jpg",
        imageWidth: imageWidth,
        imageHeight: imageHeight,
        imageAlt: 'Dunkerque',
        animation: false
    })
};

function affiche_justice_league() {
    swal({
        title: 'Justice League',
        imageUrl: "../assets/img/affiches_films/justice_league.jpg",
        imageWidth: imageWidth,
        imageHeight: imageHeight,
        imageAlt: 'Dunkerque',
        animation: false
    })
};

function affiche_man_of_steel() {
    swal({
        title: 'Man of Steel',
        imageUrl: "../assets/img/affiches_films/man_of_steel.jpg",
        imageWidth: imageWidth,
        imageHeight: imageHeight,
        imageAlt: 'Dunkerque',
        animation: false
    })
};

function affiche_the_dark_knight() {
    swal({
        title: 'The Dark Knight',
        imageUrl: "../assets/img/affiches_films/the_dark_knight.jpg",
        imageWidth: imageWidth,
        imageHeight: imageHeight,
        imageAlt: 'Dunkerque',
        animation: false
    })
};