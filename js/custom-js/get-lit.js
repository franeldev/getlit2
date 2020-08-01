//OwlCarousel
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    dotsEach: true,
    autoplay: 1000,
    autoplayHoverPause: true,
    startPosition: 2,
    responsive:{
        0:{
            items:1,
            dots: false
        },

        485:{
            items:2,
            dots: true
        },

        600:{
            items:3,
            loop: true
        },
        1000:{
            items:4.1,
            loop: true
        }
    }
})





// The data/time we want to countdown to
const countDownDate = new Date("Nov 15, 2020 5:7:52").getTime();

// Run myfunc every second
const myfunc = setInterval(function() {

const now = new Date().getTime();
const timeleft = countDownDate - now;
    
// Calculating the days, hours, minutes and seconds left
const days = Math.floor(timeleft / (1000 * 60 * 60 * 24));
const hours = Math.floor((timeleft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
const minutes = Math.floor((timeleft % (1000 * 60 * 60)) / (1000 * 60));
const seconds = Math.floor((timeleft % (1000 * 60)) / 1000);
    
// Result is output to the specific element
document.getElementById("days").innerHTML = days 
document.getElementById("hours").innerHTML = hours  
document.getElementById("mins").innerHTML = minutes 
document.getElementById("secs").innerHTML = seconds 
    
// Display the message when countdown is over
if (timeleft < 0) {
    clearInterval(myfunc);
    document.getElementById("days").innerHTML = ""
    document.getElementById("hours").innerHTML = "" 
    document.getElementById("mins").innerHTML = ""
    document.getElementById("secs").innerHTML = ""
    document.getElementById("end").innerHTML = "WHALLA!!, YOU'VE GOTTEN NOTICED!!!";
}
}, 1000);