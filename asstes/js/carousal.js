
var img = ["asstes/Imgs/sliderImgs/img05.jpg", "asstes/Imgs/sliderImgs/img04.jpg", "asstes/Imgs/sliderImgs/img03.jpg", "asstes/Imgs/sliderImgs/img02.jpg", "asstes/Imgs/sliderImgs/img01.jpg"];
let gblIncrementor = 0

function getRandomNumberBetween(min, max) {
    return Math.ceil(Math.random() * (max - min) + min);
}

function nextImage() {
    const randomIndex = getRandomNumberBetween(0, img.length - 1)
    var animateImageParent = document.getElementsByClassName("animate");
    const active = animateImageParent[1]
    const activeParent = active.getElementsByClassName('row')[0].children[1]
    const activeImage = activeParent.getElementsByClassName('animate-img__in')[0].style.backgroundImage
    for (var i = 0; i < animateImageParent.length; i++) {
        let tabImg = animateImageParent[i].getElementsByClassName('row')[0].children[1].getElementsByClassName('animate-img__in')[0].style
        if (activeImage == tabImg.backgroundImage) {
            document.getElementById('next-button').src = img[randomIndex - 1]
            document.getElementById('prev-button').src = img[randomIndex]
        }
    }
}
function backImage() {
    const randomIndex = getRandomNumberBetween(0, img.length - 1)
    var animateImageParent = document.getElementsByClassName("animate");
    const active = animateImageParent[1]
    const activeParent = active.getElementsByClassName('row')[0].children[1]
    const activeImage = activeParent.getElementsByClassName('animate-img__in')[0].style.backgroundImage
    for (var i = 0; i < animateImageParent.length; i++) {
        let tabImg = animateImageParent[i].getElementsByClassName('row')[0].children[1].getElementsByClassName('animate-img__in')[0].style
        if (activeImage == tabImg.backgroundImage) {

            gblIncrementor = i + 1
            document.getElementById('next-button').src = img[randomIndex]
            document.getElementById('prev-button').src = img[randomIndex - 1]
        }

    }

}












                // var imgElement = document.getElementsByClassName("animate-img__in");
                // var i = 0;
                // var imgLen = img.length;


                // function nextImage() {

                //     for (var i = 0; i < imgLen; i++) {

                //         imgElement[i].dataset.image = img[i + 1]
                //     }
                // }

                // function nxt() {
                //     if (i < imgLen - 1) {
                //         i = +1;
                //     } else {
                //         i = 0;
                //     }

                //     imgElement[`data-image`] = img[i];
                // }

                // function prvs() {
                //     console.log(i)
                //     if (i > 0) {
                //         i--;
                //     } else {
                //         i = imgLen - 1;
                //     }
                //     imgElement[`data-image`] = img[i];
                // }
