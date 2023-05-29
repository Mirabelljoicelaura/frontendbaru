<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/footers/">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


</head>

<body class="overflow-x-hidden">
    @include('utils.navbar')
    @yield('content')
    @include('utils.footer')

    <script>
        let valueDisplays = document.querySelectorAll("#num");
        let interval = 5000;


        valueDisplays.forEach((valueDisplays) => {
            let startValue = 0;
            let endValue = parseInt(valueDisplays.getAttribute("data-val"));
            let duration = Math.floor(interval / endValue);
            let counter = setInterval(function() {
                startValue += 1;
                valueDisplays.textContent = startValue;
                if (startValue == endValue) {
                    clearInterval(counter);
                }
            }, duration);
        })

        //read more javascript
        $(document).ready( function () {
            var contentArray=[];
            var index="";
            var clickedIndex="";
            var minimumLength=(parseFloat(getComputedStyle(module).lineHeight))*3;
            var initialContentLength=[];
            var initialContent=[];
            var readMore=" ...<br><br><span class='read-more'><span class='glyphicon glyphicon-plus-sign'></span>Selengkapnya</span>";
            var readLess="<br><br><span class='read-less'><span class='glyphicon glyphicon-minus-sign'></span>Lebih Sedikit</span>";
                $('.read-toggle').each(function(){
                index = $(this).attr('data-id');
                contentArray[index] = $(this).html();
                initialContentLength[index] = $(this).html().length;
                if(initialContentLength[index]>minimumLength) {
                initialContent[index]=$(this).html().substr(0,minimumLength);
                }else {
                initialContent[index]=$(this).html();
                }
                $(this).html(initialContent[index]+readMore);
                //console.log(initialContent[0]);


            });
                $(document).on('click','.read-more',function(){
                $(this).fadeOut(1000, function(){
                clickedIndex = $(this).parents('.read-toggle').attr('data-id');
                $(this).parents('.read-toggle').html(contentArray[clickedIndex]+readLess);
                });
                });
            $(document).on('click','.read-less',function(){
                $(this).fadeOut(1000, function(){
                clickedIndex = $(this).parents('.read-toggle').attr('data-id');
                $(this).parents('.read-toggle').html(initialContent[clickedIndex]+readMore);
                });
                });
            });
            const wrapper = document.querySelector(".wrapper");
const carousel = document.querySelector(".carousel");
const firstCardWidth = carousel.querySelector(".card").offsetWidth;
const arrowBtns = document.querySelectorAll(".wrapper i");
const carouselChildrens = [...carousel.children];

let isDragging = false, isAutoPlay = true, startX, startScrollLeft, timeoutId;

// Get the number of cards that can fit in the carousel at once
let cardPerView = Math.round(carousel.offsetWidth / firstCardWidth);

// Insert copies of the last few cards to beginning of carousel for infinite scrolling
carouselChildrens.slice(-cardPerView).reverse().forEach(card => {
    carousel.insertAdjacentHTML("afterbegin", card.outerHTML);
});

// Insert copies of the first few cards to end of carousel for infinite scrolling
carouselChildrens.slice(0, cardPerView).forEach(card => {
    carousel.insertAdjacentHTML("beforeend", card.outerHTML);
});

// Scroll the carousel at appropriate postition to hide first few duplicate cards on Firefox
carousel.classList.add("no-transition");
carousel.scrollLeft = carousel.offsetWidth;
carousel.classList.remove("no-transition");

// Add event listeners for the arrow buttons to scroll the carousel left and right
arrowBtns.forEach(btn => {
    btn.addEventListener("click", () => {
        carousel.scrollLeft += btn.id == "left" ? -firstCardWidth : firstCardWidth;
    });
});

const dragStart = (e) => {
    isDragging = true;
    carousel.classList.add("dragging");
    // Records the initial cursor and scroll position of the carousel
    startX = e.pageX;
    startScrollLeft = carousel.scrollLeft;
}

const dragging = (e) => {
    if(!isDragging) return; // if isDragging is false return from here
    // Updates the scroll position of the carousel based on the cursor movement
    carousel.scrollLeft = startScrollLeft - (e.pageX - startX);
}

const dragStop = () => {
    isDragging = false;
    carousel.classList.remove("dragging");
}

const infiniteScroll = () => {
    // If the carousel is at the beginning, scroll to the end
    if(carousel.scrollLeft === 0) {
        carousel.classList.add("no-transition");
        carousel.scrollLeft = carousel.scrollWidth - (2 * carousel.offsetWidth);
        carousel.classList.remove("no-transition");
    }
    // If the carousel is at the end, scroll to the beginning
    else if(Math.ceil(carousel.scrollLeft) === carousel.scrollWidth - carousel.offsetWidth) {
        carousel.classList.add("no-transition");
        carousel.scrollLeft = carousel.offsetWidth;
        carousel.classList.remove("no-transition");
    }

    // Clear existing timeout & start autoplay if mouse is not hovering over carousel
    clearTimeout(timeoutId);
    if(!wrapper.matches(":hover")) autoPlay();
}

const autoPlay = () => {
    if(window.innerWidth < 800 || !isAutoPlay) return; // Return if window is smaller than 800 or isAutoPlay is false
    // Autoplay the carousel after every 2500 ms
    timeoutId = setTimeout(() => carousel.scrollLeft += firstCardWidth, 2500);
}
autoPlay();

carousel.addEventListener("mousedown", dragStart);
carousel.addEventListener("mousemove", dragging);
document.addEventListener("mouseup", dragStop);
carousel.addEventListener("scroll", infiniteScroll);
wrapper.addEventListener("mouseenter", () => clearTimeout(timeoutId));
wrapper.addEventListener("mouseleave", autoPlay);
    </script>
</body>

</html>
