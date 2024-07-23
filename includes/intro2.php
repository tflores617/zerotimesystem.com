<script>
    console.log('beginAnimation');
    document.querySelector('html').style.overflowY = 'hidden';
    setTimeout(function(){
        document.querySelector('#introLogo').classList.add('anim-logo-cont-m');
        console.log('3000');
    }, 3000);
    setTimeout(function(){
        document.querySelector('#introCont').classList.add('anim-cont-dt');
        if (window.screen.width >= 600 ){
            document.querySelector('html').style.overflowY = 'auto';
        }
        document.querySelector('#betweenScreen').classList.add('anim-divider-m');
        console.log('4000');
    }, 4000);
    setTimeout(function(){
        document.querySelector('#introCont').classList.add('anim-cont-m');
        console.log('6500');
    }, 7500);
    setTimeout(function(){
        document.querySelector('#introCont').remove();
        if (window.screen.width < 600 ){
            document.querySelector('html').style.overflowY = 'auto';
        }
    }, 8500);
</script>
<style>
    .border {
        border: solid black 1px;
        box-sizing:border-box;
    }
    .intro-cont {
        position: fixed;
        z-index: 7;
        height: 100vh;
        width: 100vw;
        justify-content: space-around;
        display: flex;
        background-color: #ffffff;
    }
    
    img.intro-logo {
        max-width: 100%;
        max-height: 100%;
    }
    img.intro-text {
        max-width: 100%;
        max-height: 100%;
    }
    @media screen and (max-width: 600px) {
        .between-screen {
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            background-color: #ffffff;
            height: 100%;
            width: 100%;
            z-index: 7;
        }

        div.intro-hf {
            display: flex;
            position: absolute;
            top: 0;
            left: 0;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100%;
            
        }
        .logo-cont {
            z-index: 8;
        }
        .text-cont {
            z-index: 6;
        }

        /* ANIMATED CLASSES */

        .anim-logo-cont-m {
            -webkit-transition: opacity 1s;
            transition: opacity 1s;
            opacity: 0;
        }

        .anim-cont-m {
            -webkit-transition: opacity 1s;
            transition: opacity 1s;
            opacity: 0;
            
        }

        .anim-divider-m {
            -webkit-transition: opacity .5s;
            transition: opacity .5s;
            opacity: 0;
        }
    }
    @media screen and (min-width: 600.001px) {

        /* DESKTOP STYLES*/
        
        .between-screen {
            display: none;
        }
        div.intro-hf {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 50%;
            height: 100%;
        }

        /* CONTAINER FADE */

        .anim-cont-dt {
            transition: opacity 1s;
            -webkit-transition: opacity 1s;
            opacity: 0; 
        }
    }

</style>

<div id="introCont" class="intro-cont" onload="beginAnimation()">
    <div id="introLogo" class="intro-hf logo-cont">
        <img class="intro-logo" src="/images/intro-logo2.png"/>
    </div>
    <div id="introText" class="intro-hf text-cont">
        <img class="intro-text" src="/images/intro-zero-time.jpeg"/>
    </div>
    <div id="betweenScreen" class="between-screen">

    </div>
</div>
