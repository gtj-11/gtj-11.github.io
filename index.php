<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Bunker H</title>

  <link href="https://fonts.googleapis.com/css2?family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-IIED/eyOkM6ihtOiQsX2zizxFBphgnv1zbe1bKA+njdFzkr6cDNy16jfIKWu4FNH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
  <link rel="stylesheet" href="css/spectre.min.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/animate.css">

  <style>

    .vertical {
      border: 2px solid lightcoral;
      min-width: 70px;
      width: 5vw;
      height: 100vh;
      position: fixed;
    }

    .vertical a {
      position: relative;
      top: 50%;
      transform-origin: center center;
      transform: rotateZ(-90deg) translateY(-50%);

    }

    .vertical ul {
      list-style-type: none;
    }

    .vertical li {
      display: inline-block;
    }

  </style>

</head>

<body>


  <div class="vertical-menu">
    <div class="top-lng">
    <i class="fas fa-globe-europe"></i>
    <a href="#eng" class="" id="eng">ENG</a>
    <a href="#it" class="" id="it">IT</a>
    <a href="#de" class="" id="de">DE</a>
    </div>

    <div class="logo-container">
    <a>Bunker H</a>
    </div>

    <div class="button-container">
      <i class="fad fa-comments"></i>
    </div>
  </div>

  <div class="section" id="intro">


    <nav class="navbar">
            <a class="logo-mobile">Bunker H</a>
            <span class="navbar-toggle" id="js-navbar-toggle">
              <i class="far fa-bars"></i>
            </span>
            <div class="nav-wrapper" id="js-menu">
              <ul class="main-nav">
                  <li>
                      <a href="#about" class="nav-links" id="js-navbar-toggle1">Project</a>
                  </li>
                  <li>
                      <a href="#interact-waypoint" class="nav-links" id="js-navbar-toggle2">Visions</a>
                  </li>
                  <li>
                      <a href="#participate" class="nav-links" id="js-navbar-toggle3">Participate</a>
                  </li>

                  <li class="hide-desk break"><i class="fas fa-globe-europe nav-links"></i>Language</li>
                  <li class="hide-desk"><a href="#de" class="nav-links" id="de">Deutsch</a></li>
                  <li class="hide-desk"><a href="#it" class="nav-links" id="it">Italiano</a></li>
                  <li class="hide-desk"><a href="#eng" class="nav-links" id="eng">English</a></li>

            </div>
    </nav>


    <div class="columns">
      <div class="colum title">
        <div class="hero">
          <h2 class="lng" key="intro_h2">7000 Squaremeters of Space</h2>
          <h1 class="lng" key="intro_h1">What would you do with it?</h1>
          <a href="#participate" class="button lng" key="intro_btn">Hook me up!</a>
          </div>
        </div>
      </div>
    </div>

    <div class="section" id="about">
      <div class="columns crop">
        <div  id="about-waypoint" class="column col-5 col-lg-12 animate__animated">
            <h1>The Project</h1>
            <p>
              Imagine a place, with unique spatial properties, where different people come together to share their ideas, knowledge and time in order to build up an exceptional space for creativity and culture, otherness, diversity and freedom.
              A place to foster collaborations and build up networks, open for marginalized ideas and groups –  Sounds nice, right?
            </p>
             <p>
               That’s what we want to reach with our project: Our aim is to develop an image forming vision in a participatory way to show the potential of space and bring financial support, as well as other commited people to the Bunker H in Bolzano.
            </p>
            <p>
              Therefore we held some workshops where we already gathered some first ideas. Discover the Bunker to see how the future might look like!
            </p>
          </div>
          <div class="column col-1"></div>
          <div id="about-waypoint2" class="column col-5 col-ml-auto col-lg-12 imgdiv animate__animated">
            <img src="img/concept.png" alt="The Bunker Concepts" class="centered">
          </div>
        </div>
      </div>

      <!-- id="interact" WAS at section below -->

        <div class="section animate__animated" id="interact-waypoint">
          <div class="columns crop">
            <div class="column col-5 col-lg-12">
            </div>
            <div class="column col-2"></div>
            <div class="column col-4 col-lg-12">
              <h1>The Place</h1>
            </div>
          </div>
          <div class="columns crop big">


            <div class="column col-5 col-lg-12 flexcolumn">

                    <div class="columns tabs">
                    <div class="column col-3 col-xl-6 tablinks btnactive" rel="div_room1" rel2="svg_room1"><span>Idea 1</span></div>
                    <div class="column col-3 col-xl-6 tablinks" rel="div_room2" rel2="svg_room2">Idea 2</div>
                    <div class="column col-3 col-xl-6 tablinks" rel="div_room1" rel2="svg_room1">Idea 3</div>
                    <div class="column col-3 col-xl-6 tablinks" rel="div_room1" rel2="svg_room1">Idea 4</div>

                    </div>


                    <div id="div_room1" class="tabcontent tabactive">
                      <p>Sustainable ennui organic sint umami mlkshk vape bicycle rights. Glossier blue bottle enim officia in actually incididunt velit esse dreamcatcher cornhole tbh leggings bushwick ut.</p>
                      <p>Proident before they sold out hoodie, fingerstache gentrify la croix incididunt nulla enamel pin knausgaard sed microdosing activated charcoal. Slow-carb incididunt etsy squid proident.</p>
                      <div class="tabimgdiv">
                        <img src="img/idea_1.jpg" alt="The Bunker Concepts" class="centered">
                      </div>
                    </div>

                    <div id="div_room2" class="tabcontent">
                      <p>Labore aliquip quis sed, paleo tousled deserunt sriracha in pitchfork copper mug. Chartreuse activated charcoal nulla chia gentrify.</p>
                      <p>Neutra lo-fi viral drinking vinegar, chartreuse marfa trust fund cloud bread helvetica mumblecore knausgaard deep v kitsch cliche vaporware. Fanny pack plaid deserunt, pug pop-up master cleanse anim kitsch deep v typewriter.</p>
                      <div class="tabimgdiv">
                        <img src="img/idea_2.jpg" alt="The Bunker Concepts" class="centered">
                      </div>
                    </div>

                    <div id="div_room3" class="tabcontent">
                      <p>Labore aliquip quis sed, paleo tousled deserunt sriracha in pitchfork copper mug. Chartreuse activated charcoal nulla chia gentrify.</p>
                      <p>Neutra lo-fi viral drinking vinegar, chartreuse marfa trust fund cloud bread helvetica mumblecore knausgaard deep v kitsch cliche vaporware. Fanny pack plaid deserunt, pug pop-up master cleanse anim kitsch deep v typewriter.</p>
                      <div class="tabimgdiv">
                        <img src="img/idea_3.jpg" alt="The Bunker Concepts" class="centered">
                      </div>
                    </div>

              </div>

            <div class="column col-2"></div>

            <div class="column col-5 col-ml-auto col-lg-12 imgdiv">
              <svg id="Ebene_1" class="centered" data-name="Ebene 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 409.12 992.61"><defs><style>.cls-1,.cls-2,.cls-3{fill:none;stroke-miterlimit:10;}.cls-1{stroke-width:0.5px;}.cls-2{stroke-width:3px;}.cls-3{stroke-width:3px;}</style></defs><title>map_vertical</title><path id="BaseMap" class="cls-1" d="M268.41,985.4l104.48-45.34L384.12,963l14.25-8.64L387.14,934l16.41-10.79-3.46-19.86-26.33,7.34-5.18-19,26.33-9.5-11.65-25.47-22.89,4.31-4.74-18.56,25.9-9.5-8.64-21.59-23.74,3.89-5.61-23.75,24.17-4.75-8.2-25-24.61,1.3-3.88-19,22.88-9.93-8.21-29.36-32.81,5.61-5.18-18.13L341,683.17,334,657.27l-19,4.32-6.48-20.29,18.14-5.19-6.05-24.61-24.17,7.34-2.59-18.56,19.86-5.61-.87-6.48-26.33,9.93-6.48-16,3-1.73-1.73-8.64-3.88,1.73-1.3,6.48L262.8,585.6l3.45,8.2,9.93-2.59,1.3,10.8-30,11.65,2.38,6.91,10.79,3,8.2,31.52L229.12,665.9l-4.31-19.42,31.95-9.5-3.46-8.64-13.38,4.32-6.48-16.84L171.7,640l-.86,6.48-9.93,3-5.18-23.32,9.49-2.59,1.73,6.48,87.21-33.24-4.31-26.77,41.88-14.25,8.63,16.84,9.5-3.46-9.5-19.86,15.54-3.88,20.73,67.78,52.24-11.66L375.92,498.39,306,499.68l-31.08,14.68,3,31.09-19.43,3.69L249,531.2l-22.93-3-3.88-18.57,34.18-7.4-2.84-19.15-24,4.32-3.45-17.27,61.69-15.33L287.41,431l-64.76,17.71-.43,5.61-1.73,7.77-8.2,3.89-7.34-1.3-7.78-5.18-58.28,14.68L135,462.12,199.33,450l-5.18-22.45-7.34-71.67-11.65,1.3L170,365.84l-13.38.86-5.18-3.88L157,410.31l8.2-.43V448.3H149.68l-55.26,8.21-11.66-.87L80.6,447,100,448.74,97.87,441l33.25-7.34-17.7-146.8L81.9,290.72l-.43-8.21-38,5.62v-9.07L81,276.9l-.43-9.5,58.29-4.75,1.29,6.05,9.5,1.29,3.89,10.8,25.9-3.46L163.5,153l-25.91,6.91L126.8,138.31l-12.09-2.16.43,27.2L69,178l-3-8.2,8.64-.87,30.65-13.38.87-32,17.7,1.3,13.38,3,8.2,15.54,35.84-14.68,21.59,158,12.52.43,1.29,15.55H205l16.83,134.7,30.23-6,6.9-13,24.61-3,1.3-30.65L237.33,387l-.44-18.14,39.73-6-3.46-25.91-41,5.19-2.16-19,44-4.75-2.15-20.29-32.82,3-.43-22.45,30.22-3.46-5.18-25.47-41.44,4.75.43-21.15,40.15-8.21-3-22.45-41,2.59-1.29-22.45,41-4.32-.86-22-42.31,1.73V138.31l36.7-3V114.13H213.58l-28.06-36.7-133,48.36V113.7L189,64.05,217,98.16l35,1.29,8.2-5.61L232.15,42l21.58-13,27.2,53.54L305.11,74l-25.9-56.56,20.72-9.06,26.34,54,49.22-22,9.06,15.12-6,5.61,19.43,34.11L404,194h-6l-11.23-91.53L364.26,66.21l-94.12,46.2H309v13.81l-42.75,7.34,5.18,24.61,40.16-3.88,1.29,19L271.43,178l3.46,25.91,41.88-4.75,2.16,19.43-41.88,4.31.86,25.91L321.09,245l1.29,23.75-41,4.32,2.6,21.15,40.58-3.45,1.73,20.72-39.72,3.46,2.59,27.63,43.17-4.75L334,358.93l39.29-3.45L376.78,368l-31.95,8.2,1.3,22.45-49.22,7.78,2.59,19.42L379.37,406l15.11-166.22h7.77l-9.93,123.48L431.61,368l-3,13.82H392.32l-3,31.51,3.46,48.36H378.94l.43-45.77L350,425.42l-2.59,14.68-47.06,12.52L303,476.37l39.29-.43-.43-5.18h52.67l18.14,149L341,634.39l5.61,22.88,38-9.5,4.32,21.16-34.11,8.63,3,25,37.57-8.2,4.31,16.41L363.18,721.6l9.28,35.4,36.7-7.34,3.46,15.55-33.25,9.93,7.34,29.36,51.81-9.93,4.32,16.4-5.61,2.59,14.24,47.06L406.14,875.3l5.61,25.47,35.41-8.63L451.47,909l-32,13.81v6.91l-11.65,12.52,6.9,19-36.26,16.62L366.42,956l-91.53,43.6ZM395.78,832.56,401.39,849l27.2-8.21-3.89-15.54ZM296.62,368.65V382.9l32.81-4.75v-16Z" transform="translate(-42.97 -7.7)"/>
              <polygon id="svg_room2" class="cls-2 tabsvg" points="183.18 462.4 257.39 443.93 263 491.98 231.92 506.66 234.94 537.74 215.51 541.43 206.06 523.5 183.13 520.47 179.24 501.91 213.43 494.51 210.59 475.36 186.63 479.67 183.18 462.4"/>
              <path id="svg_room1" class="cls-3 tabsvg tabactive" d="M346.56,657.27l38-9.27,4.27,20.93-34.11,8.63,3,25,37.57-8.2,4.31,16.41L363.18,721.6l9.28,35.4,36.7-7.34,3.46,15.55-33.25,9.93,7.34,29.36,51.81-9.93,4.32,16.4-5.61,2.59,14.24,47.06L406.14,875.3l5.61,25.47,35.41-8.63L451.47,909l-32,13.81-16,.44-3.46-19.86-26.33,7.34-5.18-19,26.33-9.5-11.65-25.47-22.89,4.31-4.74-18.56,25.9-9.5-8.64-21.59-23.74,3.89-5.61-23.75,24.17-4.75-8.2-25-24.61,1.3-3.88-19,22.88-9.93-8.21-29.36-32.81,5.61-5.18-18.13L341,683.17,334,657.27l-19,4.32-6.48-20.29,18.14-5.19L341,634.39Zm49.22,175.29L401.39,849l27.2-8.21-3.89-15.54Z" transform="translate(-42.97 -7.7)"/></svg>

            </div>
          </div>
        </div>


          <div class="section" id="participate">
            <div class="columns crop">

              <div class="column col-5 col-ml-auto col-lg-12 row">
                <div class="column">
                  <h1>Participate</h1>
                  <p>Gluten-free craft beer fanny pack, single-origin coffee marfa organic wolf artisan kinfolk. Street art wolf godard migas hexagon stumptown. Austin tbh knausgaard viral, hell of raw denim vaporware occupy. Palo santo messenger bag cronut adaptogen waistcoat bicycle rights.
                  </p>
                  <p>
                    Godard irony fixie banjo normcore poutine austin. Snackwave yuccie retro vinyl pabst tumblr swag intelligentsia jean shorts chambray venmo.
                  </p>
                </div>
                <div class="column reverse">
                  <form class="feedback-form" action="php/feedbackform.php" method="post" id="questionaire1">
                  <button type="submit" name="submit" class="button-left">Send Feedback</button>
                  </form>
                  <textarea form="questionaire1" name="feedback" placeholder="Type away (max. 750 signs please)" id="textarea1" class="input"></textarea>
                  <input form="questionaire1" type="text" name="mail" class="input" placeholder="Please enter your email">
                </div>
              </div>

                <div class="column col-1">
                </div>

                <div id="about-waypoint3" class="column col-5 col-ml-auto col-lg-12 imgdiv animate__animated">
                  <img src="img/participate.jpg" alt="Got Ideas?" class="centered">
                </div>

              </div>
            </div>










</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="jquery/waypoint/lib/jquery.waypoints.min.js"></script>
<script src="js/main.js"></script>


</html>
