let buttonCarousel = document.getElementsByClassName('button_carousel');
let card = document.getElementsByClassName('card')
let card_page = Math.ceil(card.length/2);
let l = 0;
let movePer = 25.34;
let maxMove = 203;
// mobile_view	
let mob_view = window.matchMedia("(max-width: 768px)");
if (mob_view.matches)
    {
    movePer = 50.36;
    maxMove = 504;
    }

let right_mover = ()=>{
    l = l + movePer;
    if (card == 1){l = 0}
    for(const i of card)
    {
        if (l > maxMove){l = l - movePer;}
        i.style.left = '-' + l + '%';
    }

}
let left_mover = ()=>{
    l = l - movePer;
    if (l<=0){l = 0}
    for(const i of card){
        if (card_page>1){
            i.style.left = '-' + l + '%';
        }
    }
}
buttonCarousel[1].onclick = ()=>{right_mover();}
buttonCarousel[0].onclick = ()=>{left_mover();}

// SECTION MENU MOBILE 

let toggle = document.querySelector('.toggle');
let body = document.querySelector('body');

toggle.addEventListener('click', function() {
    body.classList.toggle('open');
})