let previousWidth; 
function init() {
    previousWidth = window.innerWidth;
    resizeDualContTexts();
    setTimeout(()=>{
        document.querySelector('.sub-1').classList.add('sub-active-1');
    }, 500);
    setTimeout(()=>{
        document.querySelector('.sub-2').classList.add('sub-active-2');
    }, 1250);
    selectBanner();
    selectOverImg();
    console.log('window.innerWidth : ' + window.innerWidth);
}

let shift = () => {
    resizeDualContTexts();
    // console.log('selectBanner');
    selectBanner();
    selectOverImg();
    previousWidth = window.innerWidth;
}

let selectBanner = () =>{
    let width = window.innerWidth,
        base = './images/models/new/',
        img = document.querySelector('#bannerImg');
    // console.log(width);
    // console.log(img.src)
    if (width <= 790) {
        if (img.src == base + 'hair2.jpg' || img.src == '') {
            img.src = base + 'hair2-mobile.jpg';
        }
    } else {
        if (img.src == base + 'hair2-mobile.jpg' || img.src == '') {
            img.src = base + 'hair2.jpg';
        }
    }
    // console.log(img.src);
}

let selectOverImg = () => {
    let width = window.innerWidth,
        base = './images/models/new/',
        img = document.querySelector('#overImg');
    if (width <= 752) {
        // console.log(img.src);
        // console.log(base + 'hair6-v2-gradient.png');
        if (img.src == base + 'hair6-v2-gradient.png' || img.src == '') {
            console.log('match');
            img.src = base + 'hair6-v2-gradient-mobile.png';
        }
    } else {
        if (img.src == base + 'hair6-v2-gradient-mobile.png' || img.src == '') {
            img.src = base + 'hair6-v2-gradient.png';
        }
    }
}
let resizeDualContTexts = () => {
    if (window.innerWidth >= 720) {
        document.querySelectorAll('.dual-cont.text-img').forEach((cont)=>{
            let h = cont.querySelector('.half.img-hf').clientHeight;
            cont.querySelector('.half.text-hf').style.height = `${(h - 1)}px`;
        });
    } else {
        if (previousWidth >= 720) {
            console.log('previousWidth >= 720');
            console.log('pW : ' + previousWidth);
            document.querySelectorAll('.dual-cont.text-img').forEach((cont)=>{
                cont.querySelector('.half.text-hf').style.height = 'auto';
            });
        }
    }

}

function readMoreScroll(){
        $('html, body').animate({
            scrollTop: $('#imgOverlay2').offset().top - 20 //#DIV_ID is an example. Use the id of your destination on the page
        }, 'slow');
}



window.addEventListener('resize', shift);