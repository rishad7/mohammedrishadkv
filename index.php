<?php $base_url = $_SERVER['REQUEST_URI']; ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Mohammed Rishad</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="theme/css/css1.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
            .w3-row-padding img {margin-bottom: 12px}
            .w3-sidebar {width: 120px;background: #222;}
            #main {margin-left: 120px}
            @media only screen and (max-width: 600px) {#main {margin-left: 0}}
        </style>
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({
                google_ad_client: "ca-pub-5803845507529097",
                enable_page_level_ads: true
            });
        </script>
    </head>
    <body class="w3-black">
        <nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
            <img src="<?php echo $base_url; ?>theme/pictures/rishad3.jpg" style="width: 35%;height: 75px;">
            <a href="#" class="w3-bar-item w3-button w3-padding-large w3-black">
                <i class="fa fa-home w3-xxlarge"></i>
                <p>HOME</p>
            </a>
            <a href="#about" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
                <i class="fa fa-user w3-xxlarge"></i>
                <p>ABOUT</p>
            </a>
            <a href="#photos" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
                <i class="fa fa-eye w3-xxlarge"></i>
                <p>PHOTOS</p>
            </a>
            <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
                <i class="fa fa-envelope w3-xxlarge"></i>
                <p>CONTACT</p>
            </a>
        </nav>
        <div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
            <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
                <a href="#" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
                <a href="#about" class="w3-bar-item w3-button" style="width:25% !important">ABOUT</a>
                <a href="#photos" class="w3-bar-item w3-button" style="width:25% !important">PHOTOS</a>
                <a href="#contact" class="w3-bar-item w3-button" style="width:25% !important">CONTACT</a>
            </div>
        </div>
        <div class="w3-padding-large" id="main">
            <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
                <h1 class="w3-jumbo"><span class="w3-hide-small">I'm</span> Rishad.</h1>
                <p>Photographer and PHP Developer.</p>
                <img style="height: 500px;" src="<?php echo $base_url; ?>theme/pictures/rishad1.jpg" alt="boy" class="w3-image">
            </header>
            <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="about">
                <h2 class="w3-text-light-grey">Mohammed Rishad</h2>
                <hr style="width:200px" class="w3-opacity">
                <p>I am Mohammed Rishad from Kerala,India. I mingle with people very easily and have strong interpersonal skills. I come up with creative solutions to challenges in job. I did my education from PAACET and am currently working at <a href="http://www.ioss.in" target="_blank">IOSS</a>.
                    I have an experience of 2 years of working as php developer and would like to continue with the same profession. I believe that I will get a lot of opportunities in this field and success. My interests are to play football, magic, watch movies, interact with new people and make fun with friends.</p>
                <h3 class="w3-padding-16 w3-text-light-grey">My Skills</h3>
                <p class="w3-wide">Development</p>
                <div class="w3-white">
                    <div class="w3-dark-grey" style="height:28px;width:95%"></div>
                </div>
                <p class="w3-wide">Web Design</p>
                <div class="w3-white">
                    <div class="w3-dark-grey" style="height:28px;width:85%"></div>
                </div>
                <p class="w3-wide">Photography</p>
                <div class="w3-white">
                    <div class="w3-dark-grey" style="height:28px;width:80%"></div>
                </div><br>
                <div class="w3-row w3-center w3-padding-16 w3-section w3-light-grey">
                    <div class="w3-quarter w3-section">
                        <span class="w3-xlarge">11+</span><br>
                        Partners
                    </div>
                    <div class="w3-quarter w3-section">
                        <span class="w3-xlarge">55+</span><br>
                        Projects Done
                    </div>
                    <div class="w3-quarter w3-section">
                        <span class="w3-xlarge">89+</span><br>
                        Happy Clients
                    </div>
                    <div class="w3-quarter w3-section">
                        <span class="w3-xlarge">150+</span><br>
                        Meetings
                    </div>
                </div>
                <button class="w3-button w3-light-grey w3-padding-large w3-section">
                    <i class="fa fa-download"></i> Download Resume
                </button>
                <h3 class="w3-padding-16 w3-text-light-grey">My Price</h3>
                <div class="w3-row-padding" style="margin:0 -16px">
                    <div class="w3-half w3-margin-bottom">
                        <ul class="w3-ul w3-white w3-center w3-opacity w3-hover-opacity-off">
                            <li class="w3-dark-grey w3-xlarge w3-padding-32">Basic</li>
                            <li class="w3-padding-16">Web Design</li>
                            <li class="w3-padding-16">Photography</li>
                            <li class="w3-padding-16">5GB Storage</li>
                            <li class="w3-padding-16">Mail Support</li>
                            <li class="w3-padding-16">
                                <h2>$ 10</h2>
                                <span class="w3-opacity">per month</span>
                            </li>
                            <li class="w3-light-grey w3-padding-24">
                                <button class="w3-button w3-white w3-padding-large w3-hover-black">Sign Up</button>
                            </li>
                        </ul>
                    </div>
                    <div class="w3-half">
                        <ul class="w3-ul w3-white w3-center w3-opacity w3-hover-opacity-off">
                            <li class="w3-dark-grey w3-xlarge w3-padding-32">Pro</li>
                            <li class="w3-padding-16">Web Design</li>
                            <li class="w3-padding-16">Photography</li>
                            <li class="w3-padding-16">50GB Storage</li>
                            <li class="w3-padding-16">Endless Support</li>
                            <li class="w3-padding-16">
                                <h2>$ 25</h2>
                                <span class="w3-opacity">per month</span>
                            </li>
                            <li class="w3-light-grey w3-padding-24">
                                <button class="w3-button w3-white w3-padding-large w3-hover-black">Sign Up</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="w3-padding-64 w3-content" id="photos">
                <h2 class="w3-text-light-grey">My Photos</h2>
                <hr style="width:200px" class="w3-opacity">
                <div class="w3-row-padding" style="margin:0 -16px">
                    <div class="w3-half">
                        <a target="_blank" href="https://www.instagram.com/p/BU6rNxMg0AW/?hl=en&taken-by=mohammed_rishad_7"><img src="<?php echo $base_url; ?>theme/pictures/photos3.jpg" style="width:100%"></a>
                        <a target="_blank" href="https://www.instagram.com/p/BRTEEqAg9aK/?taken-by=mohammed_rishad_7"><img src="<?php echo $base_url; ?>theme/pictures/photos5.jpg" style="width:100%"></a>                        <a target="_blank" href="https://www.instagram.com/p/BJ1o3XFjHtE/?taken-by=mohammed_rishad_7"><img src="<?php echo $base_url; ?>theme/pictures/photos7.jpg" style="width:100%"></a>
                    </div>
                    <div class="w3-half">
                        <a target="_blank" href="https://www.instagram.com/p/BNmU6zjBJ2U/?taken-by=mohammed_rishad_7"><img src="<?php echo $base_url; ?>theme/pictures/photos1.jpg" style="width:100%"></a>
                        <a target="_blank" href="https://www.instagram.com/p/BXadfgZgKFO/?hl=en&taken-by=mohammed_rishad_7"><img src="<?php echo $base_url; ?>theme/pictures/photos2.jpg" style="width:100%"></a>
                        <a target="_blank" href="https://www.instagram.com/p/BUCEygKATTR/?taken-by=mohammed_rishad_7"><img src="<?php echo $base_url; ?>theme/pictures/photos4.jpg" style="width:100%"></a>
                    </div>
                </div>
            </div>
            <div class="w3-padding-64 w3-content w3-text-grey" id="contact">
                <h2 class="w3-text-light-grey">Contact Me</h2>
                <hr style="width:200px" class="w3-opacity">
                <div class="w3-section">
                    <p><i class="fa fa-map-marker fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Malappuram, Kerala, India</p>
                    <p><i class="fa fa-phone fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Phone: +919746563367</p>
                    <p><i class="fa fa-envelope fa-fw w3-text-white w3-xxlarge w3-margin-right"> </i> Email: mohammedrishad17@gmail.com</p>
                </div><br>
                <p>Lets get in touch. Send me a message:</p>
                <form action="/action_page.php" target="_blank">
                    <p><input class="w3-input w3-padding-16" type="text" placeholder="Name" required name="Name"></p>
                    <p><input class="w3-input w3-padding-16" type="text" placeholder="Email" required name="Email"></p>
                    <p><input class="w3-input w3-padding-16" type="text" placeholder="Subject" required name="Subject"></p>
                    <p><input class="w3-input w3-padding-16" type="text" placeholder="Message" required name="Message"></p>
                    <p>
                        <button class="w3-button w3-light-grey w3-padding-large" type="submit">
                            <i class="fa fa-paper-plane"></i> SEND MESSAGE
                        </button>
                    </p>
                </form>
            </div>
            <footer class="w3-content w3-padding-64 w3-text-grey w3-xlarge">
                <i class="fa fa-facebook-official w3-hover-opacity"></i>
                <i class="fa fa-instagram w3-hover-opacity"></i>
                <i class="fa fa-snapchat w3-hover-opacity"></i>
                <i class="fa fa-pinterest-p w3-hover-opacity"></i>
                <i class="fa fa-twitter w3-hover-opacity"></i>
                <i class="fa fa-linkedin w3-hover-opacity"></i>
                <p class="w3-medium">Powered by <a href="http://www.rishadkv.com" target="_blank" class="w3-hover-text-green">rishadkv.com</a></p>
            </footer>
        </div>
    </body>
</html>