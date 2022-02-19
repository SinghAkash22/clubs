// const waypoint = new Waypoint({
//     element: document.getElementById('px-offset-waypoint'),
//     handler: function (direction) {
//         Atomics.notify('I am 20px from the top of the window')
//     },
//     offset: 20
// });
$(document).ready(function (){
    $('.left1').waypoint(function (direction){
        $('.left1').addClass('animate__animated animate__fadeInLeft')
    },{
        offset:'70%'
    })
});
$(document).ready(function (){
    $('.right1').waypoint(function (direction){
        $('.right1').addClass('animate__animated animate__fadeInRight')
    },{
        offset:'70%'
    })
});
$(document).ready(function (){
    $('.left2').waypoint(function (direction){
        $('.left2').addClass('animate__animated animate__fadeInLeft')
    },{
        offset:'70%'
    })
});
$(document).ready(function (){
    $('.left3').waypoint(function (direction){
        $('.left3').addClass('animate__animated animate__fadeInLeft')
    },{
        offset:'70%'
    })
});
$(document).ready(function (){
    $('.left4').waypoint(function (direction){
        $('.left4').addClass('animate__animated animate__fadeInLeft')
    },{
        offset:'70%'
    })
});
$(document).ready(function (){
    $('.right2').waypoint(function (direction){
        $('.right2').addClass('animate__animated animate__fadeInRight')
    },{
        offset:'70%'
    })
});
$(document).ready(function (){
    $('.right3').waypoint(function (direction){
        $('.right3').addClass('animate__animated animate__fadeInRight')
    },{
        offset:'70%'
    })
});
$(document).ready(function (){
    $('.right4').waypoint(function (direction){
        $('.right4').addClass('animate__animated animate__fadeInRight')
    },{
        offset:'70%'
    })
});
$(document).ready(function (){
    $('.zom').waypoint(function (direction){
        $('.zom').addClass('animate__animated animate__zoomIn')
    },{
        offset:'70%'
    })
});
let link=document.getElementsByClassName('nav-white');
window.addEventListener('scroll',function (){
    let nav=document.querySelector('nav');
    let windolength=window.scrollY>170;
    nav.classList.toggle('scroling',windolength);
})
$(document).ready(function() {
    $('li').click(function () {
        $("li.active").removeClass("active");
        $(this).addClass('active');
    });
})