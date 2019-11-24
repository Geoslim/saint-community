function shiftLeft() {
    const boxes = document.querySelectorAll(".box");
    const tmpNode = boxes[0];
    boxes[0].className = "box move-out-from-left";

    setTimeout(function() {
        if (boxes.length > 5) {
            tmpNode.classList.add("box--hide");
            boxes[5].className = "box move-to-position5-from-left";
        }
        boxes[1].className = "box move-to-position1-from-left";
        boxes[2].className = "box move-to-position2-from-left";
        boxes[3].className = "box move-to-position3-from-left";
        boxes[4].className = "box move-to-position4-from-left";
        boxes[0].remove();

        document.querySelector(".cards__container").appendChild(tmpNode);

    }, 500);
    nextSlider();
}

function shiftRight() {
    const boxes = document.querySelectorAll(".box");
    boxes[4].className = "box move-out-from-right";
    setTimeout(function() {
        const noOfCards = boxes.length;
        if (noOfCards > 4) {
            boxes[4].className = "box box--hide";
        }

        const tmpNode = boxes[noOfCards - 1];
        tmpNode.classList.remove("box--hide");
        boxes[noOfCards - 1].remove();
        let parentObj = document.querySelector(".cards__container");
        parentObj.insertBefore(tmpNode, parentObj.firstChild);
        tmpNode.className = "box move-to-position1-from-right";
        boxes[0].className = "box move-to-position2-from-right";
        boxes[1].className = "box move-to-position3-from-right";
        boxes[2].className = "box move-to-position4-from-right";
        boxes[3].className = "box move-to-position5-from-right";
    }, 500);
    previousSlider();
}


let sliderInnerWrapper = $(".media__book_details_inner_container");
let next = document.querySelector(".next");
let previous = document.querySelector(".previous");
let slider = $(".media__book_details_in_container");

// console.log(slider.length);



    let widthOfInnerContainer = slider.length * 100;
    let finalWidth = widthOfInnerContainer + "%";
    sliderInnerWrapper.css("width", finalWidth);
    sliderInnerWrapper.css("left", "-200%");



function nextSlider() {
    sliderInnerWrapper.animate({ left: '-300%' }, 900, function () {
        sliderInnerWrapper.css('left', '-200%');
        $('.media__book_details_in_container').last().after($('.media__book_details_in_container').first());
       
    });
}

function previousSlider() {
    sliderInnerWrapper.animate({ left: '-100%' }, 900, function () {
        sliderInnerWrapper.css('left', '-200%');
        $('.media__book_details_in_container').first().before($('.media__book_details_in_container').last());
    });
}


let downloadBtn = document.querySelector(".media__download");
downloadBtn.addEventListener("mouseover", function () {
    downloadBtn.classList.add("animated");
    downloadBtn.classList.add("animated");
});
downloadBtn.addEventListener("mouseout", function () {
    downloadBtn.classList.remove("animated");
    downloadBtn.classList.remove("animated");
});

$(document).ready(function () {
    let owl = $(".owl-two");
    owl.owlCarousel({
        items: 3
    });

    $('.home__next').click(function () {
        owl.trigger('next.owl.carousel');
    })


    $('.home__previous').click(function () {
        owl.trigger('prev.owl.carousel');
    })
});

