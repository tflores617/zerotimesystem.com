'use strict';
// - CREATE INTRO SCREEN DIV
// - POPULATE IT
// - APPEND IT TO THE BODY
let introScreen = document.createElement('DIV');
/*
introScreen.id = "dt-scroll-div";
introScreen.innerHTML =
   '<div id="intro-dt-cont" class="">'
 + '<div class="dt-intro-hf">'
 + '<img id="intro-logo" class="" src="/images/intro-logo2.png" />'
 + '</div>'
 + '<div class="dt-intro-hf">'
 + '<img id="intro-text" class="" src="/images/intro-zero-time.jpeg" />'
 + '</div>'
 + '</div>'
 + '<div id="dt-bottom-div"></div>'
 + '</div>'
 + ''
 + '';
 document.body.appendChild(introScreen);
 */

 introScreen.id = "intro-dt-cont";
 introScreen.innerHTML =
    '<div class="dt-intro-hf">'
  + '<img id="intro-logo" class="" src="./images/intro-logo2.png" onload="closeIntro()" />'
  + '</div>'
  + '<div class="dt-intro-hf">'
  + '<img id="intro-text" class="" src="./images/intro-zero-time.jpeg" />'
  + '</div>';



  document.body.insertBefore(introScreen, document.body.childNodes[0]);






async function closeIntro() {

    setTimeout(function(){
        if (screen.width > 793) {
            $('html, body').animate({
                scrollTop: $("#wrapper").offset().top
            }, 1000, 'swing', function(){

                document.querySelector('body').style.display = "flex";
                document.querySelector('body').style.height = "auto";
                document.querySelector('body').style.width = "auto";
                document.querySelector('body').style.overflow = "auto";


                console.log(document.body.childNodes[0]);
                console.log(document.querySelectorAll('#intro-dt-cont')[0]);
                document.body.removeChild(document.querySelectorAll('#intro-dt-cont')[0]);
                document.querySelector('#wrapper').focus();
            });
        }
    }, 5000);
}
