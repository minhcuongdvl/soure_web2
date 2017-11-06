$(document).ready(function () {
    var type = new Typed('#typed-1',{
            strings: ["success.", "advance.", "progress."],
            typeSpeed: 35,
            backSpeed: 25,
            startDelay: 200,
            backDelay: 1500,
            loop: true,
            loopCount: false,
            showCursor: true,
            cursorChar: "|",
            attr: null
        });

//    setInterval(function(){
//        var cursor = document.getElementById("typed-cursor");
//        cursor.style.opacity = cursor.style.opacity == 1 ? 0 : 1;
//        cursor.style.transition = "0.4s";
//    }, 400);
});