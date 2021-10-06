window.position = 1;
setInterval(changePage, 15000);
function changePage() {
    let picAndText = position;
    picAndText++;
    if(picAndText >= 4) {
        picAndText = 0;
    }
    position = picAndText;
    console.log(position);
    changePicture();
    changeText();
}

function changePicture() {
    var currImage = document.getElementById('currentImage');
    if(position == 0) {
        currImage.src = "images/schauer_Tower_4.jpg";
    }

    if(position == 1) {
        currImage.src = "images/schauer_Tower_3.jpg";
    }

    if(position == 2) {
        currImage.src = "images/schauer_Tower_2.jpg";
    }

    if(position == 3) {
        currImage.src = "images/schauer_Tower_1.jpg";
    }
}

function changeText() {
    var currText = document.getElementById('text');
    if(position == 0) {
        currText.innerHTML = "Come stay at one of our luxury resorts in the South Pacific. Affordable and relaxing, nothing can beat that. We will fly you and house you.";
    }

    if(position == 1) {
        currText.innerHTML = "Take a whisky tour at one of our world-renowned distilleries. Just make sure you leave the kids home";
    }

    if(position == 2) {
        currText.innerHTML = "Need a weekend getaway?";
    }

    if(position == 3) {
        currText.innerHTML = "Fishing trip anybody?";
    }


}