<html>
    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Darker+Grotesque:300,400,500,600,700
        |Open+Sans:300,400,600,700,800
        |Roboto:100,300,400,500,700,900&display=swap" 
        rel="stylesheet"> 
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="./local/internal-ui.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,300i,600|Playfair+Display" rel="stylesheet">
        <style>
            * {
                box-sizing: border-box;
                /* font-family: 'Roboto', sans-serif; */
                /* font-weight: 500; */
            }
            
            body {
                display: flex;
                margin: 0 auto;
                justify-content: center;
                background-color: #000000;
                background-repeat: repeat;
                background-size: auto;
                background-attachment: fixed;
            }
            
            /* PRIMARY CONTENT WRAPPER*/
            
            #wrapper {
                font-family: 'Nunito Sans', serif;
                width: 100vw; 
                /* background-color: #333333; */
            }
            .text-space {
                height: 100px;
                width: 100%;
                padding-left: 20%;
                padding-right: 20%;
                text-align: center; 
                color: white;
            }
            
            .nav-link {
                height: 25px;
                width: 20%;
                padding-bottom: 5px;
                font-size: 20px;
                /* -webkit-transition: text-decoration 1s; */
                /* transition: text-decoration 1s; */
            }
        </style>
        <link type="text/css" href="./css-redesign/index.css" rel="stylesheet"> 
        <link type="text/css" href="./css-redesign/index-media.css" rel="stylesheet"> 
        <link type="text/css" href="./css-redesign/footer.css" rel="stylesheet"> 
    </head>
    <body onload="init()">
            <div id="wrapper" class="white">
                <div class="m-header grey">
                    <div class="top">
                        <div id="nav-div">
                            <nav >
                                <a class="nav-link inverted" href="./">HOME</a>
                                <a class="nav-link inverted" href="./product/">PRODUCT</a>
                                <a class="nav-link inverted" href="./faq/">FAQ</a>
                            </nav>
                        </div>
                    </div>
                    <div class="title-cont">
                        <span class="title inverted">
                            ZERO TIME SYSTEM
                        </span>
                    </div>
                </div>
                <div class="banner">
                    <div class="inner">
                        <div class="top">
                            <img class="logo" src="./images/intro-transparent.png"/>
                            <div id="nav-div">
                                <nav>
                                    <a class="nav-link " href="./">HOME</a>
                                    <a class="nav-link " href="./product/">PRODUCT</a>
                                    <a class="nav-link " href="./faq/">FAQ</a>
                                </nav>
                            </div>
                        </div>
                        <div class="title-cont">
                            <span class="title">
                                ZERO TIME SYSTEM
                            </span>
                        </div>
                        <div class="sub-cont">
                            <span class="text sub-1">
                                The only things we have are time and talent.
                            </span>
                            <span class="text sub-2">Don't waste time.</span>
                        </div>
                        <div class="check-cont">
                            <div class="check-inner" onclick="readMoreScroll()">
                                <span>
                                    Why Zero Time?
                                </span>
                                <div>
                                    <img class="check-img" src="./images/icons/down-chevron-icon-wide.png">
                                </div>
                            </div>             
                        </div>
                    </div>
                    <img id="bannerImg" />
                    <!-- <img id="bannerImg" src="./images/models/new//optimized/hair2.jpg"/> -->
                    <!-- <img style="content: url('./images/models/new/hair2.jpg')"/> -->
                </div>
                <div id="imgOverlay2" class="img-and-over-2 grey">
                    <img id="overImg" src="./images/models/new/optimized/hair7.png"/>
                    <div class="inner">
                        <section class="list inverted">
                            <h2>
                                <span class="text large">
                                    The Zero Time System is a hair color brush that: 
                                </span>
                            </h2>
                            <ul class="brush">
                                <li>
                                    <img class="chev" src="./images/icons/right-chev-white.png">
                                    <span class="text large">
                                        Reduces Overlap
                                    </span>
                                </li>
                                <li>
                                    <img class="chev" src="./images/icons/right-chev-white.png">
                                    <span class="text large">
                                        Uses less product
                                    </span>                            
                                </li>
                                <li>
                                    <img class="chev" src="./images/icons/right-chev-white.png">
                                    <span class="text large">
                                        Takes less time
                                    </span>
                                </li>
                            </ul>
                        </section>
                    
                </div>
            </div>

            <!-- FIRST NON-IMAGE CONT -->
            <!-- <div class="cont grey">
                <div class="clear"></div>
                <section class="list inverted">

                    <div class="ul-and-bttn">
                        <div class="ul-cont">
                            <h2>
                                <span class="text large">
                                    The Zero Time System is a hair color brush that: 
                                </span>
                            </h2>
                            <ul class="brush">
                                <li>
                                    <img class="chev" src="./images/icons/right-chev-white.png">
                                    <span class="text large">
                                        Reduces Overlap
                                    </span>
                                </li>
                                <li>
                                    <img class="chev" src="./images/icons/right-chev-white.png">
                                    <span class="text large">
                                        Uses less product
                                    </span>                            
                                </li>
                                <li>
                                    <img class="chev" src="./images/icons/right-chev-white.png">
                                    <span class="text large">
                                        Takes less time
                                    </span>
                                </li>
                            </ul>
                        </div>




                        <div class="dn-arr-bttn-cont">
                            <div class="dn-arr-bttn inverted">
                                <span>
                                    Read Further
                                </span>
                                <div>
                                    <img src="./images/icons/down-chevron-icon-white-wide.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>  
                <div class="clear"></div>
            </div> -->


            <div class="dual-cont text-img white">

                <div class="half text-hf ">
                    <div class="border"></div>
                    <div class="text-cont">
                        <span class="text">
                            <span class="indent">Zero Time</span> was inspired by the need for innovation in the field of hair design.  Over 20 years of personal experience illuminated
                            the opportunity to build a bigger better brush to improve efficiency. A smaller brush requires more strokes which leads to waste of time through overlap.
                        </span>
                        <!-- <div class="C"></div> -->
                        <div class="vert-space"></div>
                        <div class="clear"></div>
                        <span class="text">
                            <span class="indent">After extensive testing</span> in-house, we decided to have a professional study done by Bria Institute.
                        </span>
                        <div class="clear-button-cont">
                            <a href="./product/" class="clear-button">
                                <span>
                                    CHECK OUT THE STUDY
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="border"></div>
                </div>


                <div class="half img-hf">
                    <div class="img-cont vert">
                        <img src="./images/models/new/optimized/hair8.jpg"/>
                    </div>
                </div>
                
            </div>


            <div class="dual-cont text-img m-flip white">

                <div class="half img-hf">
                    <div class="img-cont vert">
                        <img src="./images/models/new/optimized/hair4.jpg"/>
                    </div>
                </div>
                
                <div class="half text-hf">
                    <div class="border"></div>
                    <div class="text-cont single-paragraph">
                        <span class="text">
                            <span class="indent">Initially</span> the goal was to save time through a brush that could cover more surface area at once, but 
                            it manifested in also saving product, culminating in significant fiscal savings as well. Being 
                            ergonomic and curved helps with fatigue. Due to the large brush and soft bristles, the client also gets the 
                            bonus of a mini head massage!
                        </span>
                    </div>
                    <div class="border"></div>
                </div>
            </div>

            <?php include('./new_footer.php'); ?>

        </div>
   
    </body>
</html>