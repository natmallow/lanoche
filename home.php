<?php
session_start();

$imageGallery = array(
    'come-fest' => array(
        array('src' => '/image/come-fest/1.jpg', 'title' => 'COME Festival Internacional de Sabores Jalisco'),
        array('src' => '/image/come-fest/2.jpg', 'title' => 'COME Festival Internacional de Sabores Jalisco'),
        array('src' => '/image/come-fest/3.jpg', 'title' => 'COME Festival Internacional de Sabores Jalisco'),
        array('src' => '/image/come-fest/4.jpg', 'title' => 'COME Festival Internacional de Sabores Jalisco'),
        array('src' => '/image/come-fest/5.jpg', 'title' => 'COME Festival Internacional de Sabores Jalisco'),
        array('src' => '/image/come-fest/6.jpg', 'title' => 'COME Festival Internacional de Sabores Jalisco'),
        array('src' => '/image/come-fest/7.jpg', 'title' => 'COME Festival Internacional de Sabores Jalisco'),
        array('src' => '/image/come-fest/8.jpg', 'title' => 'COME Festival Internacional de Sabores Jalisco'),
        array('src' => '/image/come-fest/9.jpg', 'title' => 'COME Festival Internacional de Sabores Jalisco'),
        array('src' => '/image/come-fest/a1.jpg', 'title' => 'COME Festival Internacional de Sabores Jalisco'),
        array('src' => '/image/come-fest/a2.jpg', 'title' => 'COME Festival Internacional de Sabores Jalisco')),
    'fancy-show' => array(
        array('src' => '/image/fancy-ny/1.jpg', 'title' => '61st Summer Fancy Food Show New York'),
        array('src' => '/image/fancy-ny/2.jpg', 'title' => '61st Summer Fancy Food Show New York'),
        array('src' => '/image/fancy-ny/3.jpg', 'title' => '61st Summer Fancy Food Show New York'),
        array('src' => '/image/fancy-ny/4.jpg', 'title' => '61st Summer Fancy Food Show New York'),
        array('src' => '/image/fancy-ny/5.jpg', 'title' => '61st Summer Fancy Food Show New York'),
        array('src' => '/image/fancy-ny/6.jpg', 'title' => '61st Summer Fancy Food Show New York'),
        array('src' => '/image/fancy-ny/7.jpg', 'title' => '61st Summer Fancy Food Show New York'),
        array('src' => '/image/fancy-ny/8.jpg', 'title' => '61st Summer Fancy Food Show New York')),
    'thai-fest' => array(
        array('src' => '/image/thailand/1.jpg', 'title' => 'THAIFEX World Food Asia'),
        array('src' => '/image/thailand/2.jpg', 'title' => 'THAIFEX World Food Asia'),
        array('src' => '/image/thailand/3.jpg', 'title' => 'THAIFEX World Food Asia'),
        array('src' => '/image/thailand/4.jpg', 'title' => 'THAIFEX World Food Asia'),
        array('src' => '/image/thailand/5.jpg', 'title' => 'THAIFEX World Food Asia'),
        array('src' => '/image/thailand/6.jpg', 'title' => 'THAIFEX World Food Asia'),
        array('src' => '/image/thailand/7.jpg', 'title' => 'THAIFEX World Food Asia'),
        array('src' => '/image/thailand/8.jpg', 'title' => 'THAIFEX World Food Asia'),
        array('src' => '/image/thailand/9.jpg', 'title' => 'THAIFEX World Food Asia'),
        array('src' => '/image/thailand/a1.jpg', 'title' => 'THAIFEX World Food Asia'),
        array('src' => '/image/thailand/a5.jpg', 'title' => 'THAIFEX World Food Asia'),
        array('src' => '/image/thailand/a6.jpg', 'title' => 'THAIFEX World Food Asia'),
        array('src' => '/image/thailand/a7.jpg', 'title' => 'THAIFEX World Food Asia'),
        array('src' => '/image/thailand/a8.jpg', 'title' => 'THAIFEX World Food Asia'),
        array('src' => '/image/thailand/a9.jpg', 'title' => 'THAIFEX World Food Asia'),
        array('src' => '/image/thailand/b1.jpg', 'title' => 'THAIFEX World Food Asia'),
        array('src' => '/image/thailand/b2.jpg', 'title' => 'THAIFEX World Food Asia'),
        array('src' => '/image/thailand/b3.jpg', 'title' => 'THAIFEX World Food Asia')),
//    'feria-show' => array()
);


$laNocheFans = array(
    array('src' => '/image/testimonials/angelica.jpg', 'alt' => 'Angelica La Noche Tequila', 'title' => 'Angelica, Mexico City', 'quote' => 'La Noche, has replaced red wine for me.'),
    array('src' => '/image/testimonials/geoffrey-party.jpg', 'alt' => 'Geoffrey La Noche Tequila', 'title' => 'Geoffrey and friends, Garden Grove', 'quote' => 'La Noche, We love you long time!'),
    array('src' => '/image/testimonials/ilda-belia.jpg', 'alt' => 'Ilda and Belia La Noche Tequila', 'title' => 'Ilda and Belia, San Diego', 'quote' => 'Wow!'),
    array('src' => '/image/testimonials/juan.jpg', 'alt' => 'JUAN La Noche Tequila', 'title' => 'Juan, Ikal Restaurant', 'quote' => 'La Noche is one of our best sellers.'),
    array('src' => '/image/testimonials/judy-heidi.jpg', 'alt' => 'Judy and Heidi La Noche Tequila', 'title' => 'Judy and Heidi, Laguna Niguel', 'quote' => 'OC wifes oh yeah!'),
    array('src' => '/image/testimonials/marcela.jpg', 'alt' => 'Marcela La Noche Tequila', 'title' => 'Marcela, Guadalajara', 'quote' => 'Who needs a boyfriend when you have La Noche.'),
    array('src' => '/image/testimonials/maribel.jpg', 'alt' => 'Maribel Night Club La Noche Tequila', 'title' => 'Maribel, Night Clubing', 'quote' => 'Trust me you can dance - La Noche'),
    array('src' => '/image/testimonials/monse.jpg', 'alt' => 'Monse Party La Noche Tequila', 'title' => 'Monse, Girls Night Out', 'quote' => 'I have mixed drinks about feelings.'),
    array('src' => '/image/testimonials/paella-fest.jpg', 'alt' => 'Paella Festival La Noche Tequila', 'title' => 'Paella Festival, Come get some!', 'quote' => 'One, Two, Three... La Noche!'),
    array('src' => '/image/testimonials/paul-hayes.jpg', 'alt' => 'Paul Hayes Marry Me La Noche Tequila', 'title' => 'Paul Hayes, New York', 'quote' => 'I have traveled all over the world... best thing I have ever tasted.'),
    array('src' => '/image/testimonials/rebeca.jpg', 'alt' => 'Rebeca Asian La Noche Tequila', 'title' => 'Rebeca, Girls Night In', 'quote' => 'I am on a La Noche diet come try some... hmmmm.'),
    array('src' => '/image/testimonials/thai-chef-ass.jpg', 'alt' => 'Food Pairing La Noche Tequila', 'title' => 'Thai Chef Food Pairing', 'quote' => 'Goes great with chicken!'),
    array('src' => '/image/testimonials/bernie-and-pals.jpg', 'alt' => 'Bernie with friends', 'title' => 'Bernie and pals', 'quote' => 'Well played La Noche. Well played.'),
);
?>

<!DOCTYPE html>
<html lang="en">

    <head>

        <!-- Meta Tag -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- SEO -->
        <meta name="description" content="La noche tequila">
        <meta name="author" content="Nathanael Mallow">
        <meta name="url" content="http://www.drinklanoche.com">
        <meta name="copyright" content="La Noche">
        <meta name="robots" content="index,follow">


        <title>La Noche Tequila Liqueur</title>

        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.ico">

        <!-- All CSS Plugins -->
        <link rel="stylesheet" type="text/css" href="css/plugin.css">

        <!-- Main CSS Stylesheet -->
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <!--        <link rel="stylesheet" href="/css/main.css" />-->

        <!-- Google Web Fonts  -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700">

        <!-- HTML5 shiv and Respond.js support IE8 or Older for HTML5 elements and media queries -->
        <!--[if lt IE 9]>
               <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
               <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->


    </head>

    <body>

        <div id="fb-root"></div>
        <script>(function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.1';
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>

        <!-- Preloader Start -->
        <div class="preloader">
            <p>Loading...</p>
        </div>
        <!-- Preloader End -->


        <div class="container">
            <!-- Menu Section Start -->
            <header id="home">

                <div class="header-top-area  navigation-background">

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="navigation-menu center">
                                <div class="navbar">
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>
                                    <div class="navbar-collapse collapse"  style=" line-height: 9px; padding-top: 15px;">
                                        <div id="navigation-vis" style="" class="">
                                            <div class="col-sm-5 no-padding">
                                                <div class="fb-share-button" data-href="http://www.drinklanoche.com/" data-layout="button" data-size="large" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.drinklanoche.com%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>
                                                <div style="display: inline-block;"><a href="https://twitter.com/intent/tweet?button_hashtag=drinklanoche&ref_src=twsrc%5Etfw" class="twitter-hashtag-button" data-size="large" data-text="La Noche Tequila! " data-url="http://www.drinklanoche.com/" data-show-count="false">Tweet #drinklanoche</a></div> 
                                                <div class="g-plus" data-action="share" data-height="28" data-href="http://www.drinklanoche.com/"></div>
                                            </div> 
                                            <div class="col-sm-7 text-right no-padding" style="line-height: 20px;">
                                                <a class="smoth-scroll" href="#home">Home</a> |
                                                <a class="smoth-scroll" href="#la-noche-products">La Noche</a> |
                                                <a class="smoth-scroll" href="#recipes">Recipes</a> | 
                                                <a class="smoth-scroll" href="#news">News-Feeds</a> |
                                                <a class="smoth-scroll" href="#friends-testimonials">Friends</a>

                                                <a class="button-red-sm smoth-scroll" href="#contact">Contact</a>
                                                <a class="button-red-sm smoth-scroll" 
                                                   href="http://www.oldtowntequila.com/brands/La-Noche-Tequila.html" target="_blank" rel="no-follow">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </header>
            <!-- Menu Section End -->  


            <!-- Home Section Start -->
            <section class="home-section">

                <div class="full-row">
                    <div class="col-md-12 home-section-bg" style="" alt="">
                        <video width="100%" preload="auto" playsinline="" autoplay="" loop="" muted="">
                            <source src="video/short.mp4" type="video/mp4">
                        </video>
<!--                        <div class="col-md-offset-7 col-md-4 text-right home-section-txt" >
                            <a class="button-red button-buy smoth-scroll" 
                               href="http://www.oldtowntequila.com/brands/La-Noche-Tequila.html" 
                               target="_blank" rel="no-follow"><span>Buy Now</span></a><br />
                            <a class="button-red button-phone" rel="nofollow" href="tel:+18506484200"><span>850-648-4200</span></a>   
                            <a class="button-red button-contact smoth-scroll" href="#contact"><span>Contact</span></a><br />

                            <a class="button-trq smoth-scroll" href="#home"><span>Home</span></a><br />
                            <a class="button-trq smoth-scroll" href="#la-noche-products"><span>La Noche</span></a><br />
                            <a class="button-trq smoth-scroll" href="#recipes"><span>Recipes</span></a><br />
                            <a class="button-trq smoth-scroll" href="#news"><span>News-Feeds</span></a><br />
                            <a class="button-trq smoth-scroll" href="#friends-testimonials"><span>Friends</span></a>

                        </div>-->

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <img class="blue-divider-top" src="images/bg/divider.png" alt=""/>
                    </div>
                </div>
            </section>
            <!-- Home Section End -->

            <!-- Home summary Start -->
            <section class="call-to-action bg-cover section-space-padding-sm text-center">

                <div class="row">
                    <div class="col-md-12">
                        <h4 class="">
                            Thank you for visiting our <font class="pop">La Noche</font> Tequila web site. 
                            We are pleased to announce the availability of our flagship product La Noche <font class="pop">Pomegranate</font> Tequila <font class="pop">liqueur</font>. 
                            We invite you to enjoy the <font class="pop">100% all Natural</font> flavor of smooth <font class="pop">Silver Tequila</font> and Pomegranate. 
                            It will warm you in winter and cool you in summer. 
                            The drink for all occasions!  
                            This is the most <font class="pop">Dangerously Seductive</font> drink you will ever try! 
                            So we invite you to <font class="pop">come</font> and <font class="pop">have some</font>! 
                        </h4>
                    </div>
                    <!--                    <div class="col-md-4">
                                            <div class="text-center">
                                                <a class="button button-style button-style-color-2 smoth-scroll" href="#contact">Contact Us</a>
                                            </div>
                                        </div>    -->
                </div>

            </section>
            <!-- Home summary End -->        


            <!-- About/ History Start -->
            <section id="about" class="about">

                <div class="row">



                    <div class="col-md-12">
                        <div class="about-me-text">
                            <img src="images/bg/history.jpg" class="image-left" alt="mama y papa y mi" style="max-width: 403px;"/>
                            <p>

                                The recipe for La Noche was discovered in 1868, when tequila and pomegranate were first combined in the Sierra Del Tigre Mountain range of Jalisco, Mexico.  This perfect marriage created a delicately balanced and delicious pomegranate tequila liqueur.  It is an age-old family recipe handed down and refined over the course of 150 years and 7 generations.
                            </p>
                            <p>La Noche is heavily rooted in culture and tradition.  This delicious libation was so highly regarded, it was often used as a ceremonial offering by a bridegroom and presented to the parents when asking for a woman’s hand in marriage.  It has since become known as a premium, smooth alcoholic beverage, now enjoyed by men and women for all occasions.

                            </p>
                            <p>The Jalisco-based company is family owned and operated. Over the past six years, La Noche's market has expanded beyond its birthplace and is now spread throughout the entire country of Mexico, expanding as well, internationally.  As we continue to grow, our objective has become to reach markets across the planet. 

                            </p>
                            <p>La Noche is 100% natural.  It is made using only the purest silver Tequila as well as pure, fresh pomegranate juice.  While pomegranate is considered, by many, to be the healthiest fruit on earth, it is also a powerful antioxidant.  Lauded as a ‘superfood’, it reduces risk of various diseases, is an important ally in anti-aging and boosts the immune system.

                            </p>
                            <p>Every bottle is batched immediately to preserve the bright red color and fruity, crisp aroma. 
                                La Noche's 15% ABV is key to its sweet, soft taste.  With its romantic allure and vibrant flavor, La Noche is well on its way to becoming one of the finest premium Tequila liqueurs on the market, today.

                            </p>
                            <p>Here at La Noche, we strive to partner with reputable corporations, 
                                like Hilton, recognized for high-quality service and upstanding business practices.  
                                We are confident you and your customers will love our product and I would love to 
                                send you a sample for your consideration. <a class="smoth-scroll" href="#contact"><strong>Contact!</strong></a>

                            </p>
                        </div>
                    </div>

                    <!--                                        <div class="col-md-6">
                                                                <div class="about-me-text pattern-bg margin-top-50 margin-bottom-50">
                                                                    <div class="text-center">
                                                                        <a class="button button-style button-style-dark button-style-color-2" data-toggle="modal" data-target="#subscribemodal" href="#">Subscribe</a>
                                                                    </div>
                                                                </div>
                                                            </div>-->
                    <div class="col-md-12 col-sm-12 padding-bottom-30 padding-top-20" style="text-align: center;">

                        <h3>  I
                            <svg class="heart" viewBox="0 0 32 29.6">
                            <path d="M23.6,0c-3.4,0-6.3,2.7-7.6,5.6C14.7,2.7,11.8,0,8.4,0C3.8,0,0,3.8,0,8.4c0,9.4,9.5,11.9,16,21.2
                                  c6.1-9.3,16-12.1,16-21.2C32,3.8,28.2,0,23.6,0z"/>
                            </svg> 
                            La Noche!</h3>



                    </div>


                </div>
            </section>
            <!-- About/ History End -->

            <!-- Product Start -->
            <section id="la-noche-products" class="recipes services-section">

                <div class="row">
                    <div class="col-md-12 services-section-bg" style="">
                        <img class="blue-divider" style="" src="images/bg/divider.png" alt=""/>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12">
                    <h3 class="tits">La Noche</h3>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <p>
                        <h4>Tequila - benefits</h4>
                        <ol>
                            <li>It can help you lose weight
                            <li>It aids digestion
                            <li>It’s probiotic
                            <li>It’s prebiotic
                            <li>It may help fight osteoporosis
                            <li>It may help prevent Type 2 Diabetes
                            <li>It may lower chances of developing dementia
                            <li>It helps necessary drugs make it to the colon 
                            <li>It helps curb insomnia
                        </ol>
                        </p>
                        <br />
                        <div class="services-detail">
                            <br />
                            <a href="http://www.oldtowntequila.com/brands/La-Noche-Tequila.html" target="_blank" rel="no-follow">
                                <img src="/images/bg/la-noche-hearts.jpg" alt="la noche fancy white" title="la noche fancy white" /></a>
                            <!--                            <h3>La Noche Fancy</h3>
                                                        <hr>-->
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <img class="hide-me" src="/images/bg/tequila-on-white.jpg" alt="tequila-on-white"/>
                        <h4>All Natural Pomegranate</h4>

                        <ol>
                            <li>Antioxidants - 3 x more antioxidants than red wine and green tea. 
                            <li>Vitamin C - A single pomegranate has more than 40% of your daily requirement of vitamin C. 
                            <li> Cancer prevention 
                            <li> Alzheimer's disease protection
                            <li> Digestion
                            <li> Anti-inflammatory
                            <li> Arthritis
                            <li> Heart disease 
                            <li> Blood pressure
                            <li> Antiviral
                            <li> Vitamin-rich
                            <li> Memory
                            <li> Sexual performance and fertility
                            <li> Endurance and sports performance
                        </ol>
                    </div>
                    <!--                    <div class="col-md-6 col-sm-6">
                                            <div class="services-detail">                           
                                                <img src="/image/la-noche-bottle-classic-white.jpg" alt="la noche classic white" title="la noche classic white" />
                                                <h3>La Noche Classic</h3>
                                                <hr>
                                            </div>
                                        </div>-->
                    <div class="col-md-12 col-sm-12 sm-white">
                        <div class="col-md-8 col-sm-8 no-padding">
                            <h2 style="color:#c01a33; padding-top: 20px;">More... Coming soon like magic </h2>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <img class="hide-me" src="/images/bg/poof.png" alt=""/>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <img class="hide-reg" src="/images/bg/comming-soon-sm.jpg" alt=""/>    
                        </div>              
                        <div class="col-md-3 col-sm-3 text-center">
                            <img class="bottle-m hide-me" src="images/bg/bottles-blueberry.png" alt=""/><br>
                            <h4 class="phf">Blueberry</h4>
                        </div>
                        <div class="col-md-3 col-sm-3 text-center">
                            <img class="bottle-m hide-me" src="images/bg/bottles-lemon.png" alt=""/><br>
                            <h4 class="phf">Lemon</h4>
                        </div>
                        <div class="col-md-3 col-sm-3 text-center">
                            <img class="bottle-m hide-me" src="images/bg/bottles-peach.png" alt=""/><br>
                            <h4 class="phf">Peach</h4>
                        </div>
                        <div class="col-md-3 col-sm-3 text-center">
                            <img class="bottle-m hide-me" src="images/bg/bottles-strawberry.png" alt=""/><br>
                            <h4 class="phf">Strawberry</h4>
                        </div>
                    </div>



                </div>
            </section>
            <!-- Product End -->
            <!-- recipes start -->
            <section id="recipes" class="recipes section-space-padding">

                <div class="row">
                    <div class="col-md-12" style="
                         background:url(../images/bg/together-4-la-noche.jpg) no-repeat; 
                         background-position:center top;
                         height:264px;">
                        <img style="position: absolute; bottom: -20px; left: 0px; " src="images/bg/divider-w.png" alt=""/>
                    </div>


                    <div class="col-md-12 col-sm-12">
                        <h3 class="tits">Recipes</h3>
                    </div>
                    <div class="col-md-8 col-sm-8 ">
                        <h4>La Noche Margarita (basic)</h4>
                        <ul>
                            <li>1.5 oz LN
                            <li>.5 oz Triple Sec
                            <li>splash OJ
                            <li>splash sprite
                            <li>fill with sweet n sour
                            <li>shake on Rx, pour in Marg glass
                            <li>rim margarita glass with Kosher salt
                            <li>garnish with lime wedge
                        </ul> 
                        <h4>La Noche Signature Fire Margarita</h4>
                        <ul>
                            <li>1.5 oz LN
                            <li>.5 oz Cuantreau
                            <li>muddle sliced jalapeno and cilantro
                            <li>shake on Rx
                            <li>rim Margarita glass with Tajin or chili lime salt
                            <li>garnish with lime and jalapeno slice
                        </ul> 
                        <h4>La Noche Winegarita</h4>
                        <ul>
                            <li> 1.5 oz LN
                            <li>.5 oz Triple sec
                            <li>187ml bottle of Barefoot Sweet Red Blend wine
                            <li>fill with sweet n sour
                            <li>shake on Rx, pour in Marg glass
                            <li>rim with Kosher salt
                            <li>garnish with lime wedge  
                        </ul> 
                        <h4>La Noche Cosmo</h4>
                        <ul>
                            <li>1.5 oz Ln
                            <li>.5 oz Grand Marnier
                            <li>shake on Rx and strain in martini glass
                            <li>garnish with pomegranate seeds
                        </ul> 

                        <h4>La Noche Sangria</h4>
                        <ul>
                            <li>2 oz LN
                            <li>splash OJ, Pineapple, cranberry
                            <li>fill with sprite
                            <li>shake on Rx
                            <li>garnish with lime, orange and cherry
                        </ul>               
                    </div>                  
                    <div class="col-md-4 col-sm-4 ">
                        <img class="box-mini hide-me" src="images/bg/lanoche-mini-pack.jpg" alt=""/>
                        <h4>La Noche Mule</h4>
                        <ul>
                            <li>1.5 oz LN
                            <li>.5 oz fresh lime juice
                            <li>fill with ginger beer
                            <li>garnish with lime wedge
                        </ul> 

                        <h4>La Noche Mimosa</h4>
                        <ul>
                            <li>2 oz LN
                            <li>fill with Champagne
                            <li>pour in Champagne glass 
                            <li>garnish with pomegranate seeds
                        </ul> 
                    </div>

                </div>
            </section>
            <!-- recipes end -->

            <!-- News Start -->
            <section id="news" 

                     style="background:url(../images/bg/newspaper.jpg) no-repeat; 
                     background-position:center top;">
                <div class="news-container container ">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <h3 class="tits">News & Feeds</h3>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-12 col-sm-12">
                            <div class="news">
                                <div class="col-md-6 col-sm-6">
                                    <div class="fb-page" data-href="https://www.facebook.com/drinklightyourinnerfire/" data-tabs="timeline" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true">
                                        <blockquote cite="https://www.facebook.com/drinklightyourinnerfire/" class="fb-xfbml-parse-ignore">
                                            <a href="https://www.facebook.com/drinklightyourinnerfire/">La Noche, Premium Tequila Liquor</a>
                                        </blockquote>
                                    </div>

                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <h4>
                                                <a href="http://www.womenstradecenter.com/" target="_blank" rel="no-follow">Congratulation! To La Noche!</a>
                                            </h4>
                                            <p>
                                                La Noche earned first place in the <a href="http://www.womenstradecenter.com/" target="_blank" rel="no-follow">Global Women</a> competition!
                                                Special thanks goes to the following people for their guidance and support:
                                                <br><br> 
                                                Gina Tello, MANOS CREATIVAS AC, The amazing women entrepreneurs
                                                , WOMEN TRADE CENTER Guadalajara, 1st Generation.
                                                , Mauricio Andrade, CAMARA DE COMERCIO TLAQUEPAQUE
                                                , Esther Segura, MUJERES GLOBALES
                                                , Lic. Clara Ibanez, COMCE DE OCCIDENTE
                                                , Sofia Elguero, PROMEXICO
                                                , Dad (Ramiro) Mom (Juana) Ramiro Jr
                                                , Victor Hugo, Araceli, Marcela, Juan, Gela, Nathanael, Lupita.
                                            </p>
                                        </div>
                                    </div>
<!--                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <h4>
                                                <a href="http://www.womenstradecenter.com/" target="_blank" rel="no-follow">Global Women</a>
                                            </h4>
                                            <p>
                                                We got into the Global Women initiative in Mexico. They guide and advise entrepreneurs to export, invest and create strategic links in the United States, Canada, Mexico and Latin America.
                                            </p>
                                        </div>
                                    </div>-->



                                    <!--                                <div class="news-item">
                                                                        <div class="news-circle">
                                                                            <i class="icon-event"></i> 
                                                                            <p>May-Aug 2018</p>
                                                                        </div>
                                                                        <div class="news-content news-color-blue">
                                                                            <h4><a href="http://www.womenstradecenter.com/" target="_blank" rel="no-follow">Global Women</a></h4>
                                                                            <p>
                                                                                They guide and advise entrepreneurs to export, invest and create strategic links in the United States, Canada, Mexico and Latin America.
                                                                            </p>
                                                                        </div>
                                                                    </div>-->


                                </div>

                            </div>

                        </div>
                    </div>
            </section>
            <!-- News End -->

            <!-- Experience Start -->
    <!--        <section class="experience-bg section-space-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="section-title">
                                <h2>La Noche Team</h2>
                                <div class="divider dark">
                                    <i class="icon-graduation"></i>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                            </div>
                        </div>
                    </div>
    
                    <div class="row">
    
                        <div class="col-md-6 col-sm-6">
                            <div class="experience">
    
                                <div class="experience-item">
                                    <div class="experience-circle">
                                        <i class="icon-graduation"></i> 
                                        <p>8, Nov 2016</p>
                                    </div>
                                    <div class="experience-content experience-color-blue">
                                        <h4>Master Degree in Java</h4>
                                        <h6>College Name here</h6>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eleifend risus sed feugiat faucibus.</p>
                                    </div>
                                </div>
    
                                <div class="experience-item">
                                    <div class="experience-circle">
                                        <i class="icon-trophy"></i> 
                                        <p>8, Nov 2016</p>
                                    </div>
                                    <div class="experience-content experience-color-blue">
                                        <h4>Diploma in Web Designing</h4>
                                        <h6>Institute Name here</h6>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eleifend risus sed feugiat faucibus.</p>
                                    </div>
                                </div>
    
                                <div class="experience-item">
                                    <div class="experience-circle">
                                        <i class="icon-book-open"></i> 
                                        <p>8, Nov 2016</p>
                                    </div>
                                    <div class="experience-content experience-color-blue">
                                        <h4>High School Education</h4>
                                        <h6>School Name here</h6>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eleifend risus sed feugiat faucibus.</p>
                                    </div>
                                </div>
    
                            </div>
                        </div>
    
                        <div class="col-md-6 col-sm-6">
                            <div class="experience">
    
                                <div class="experience-item">
                                    <div class="experience-circle experience-company pink-color-bg">
                                        <i class="icon-energy"></i>
                                    </div>
                                    <div class="experience-content">
                                        <h4>DevBlog System PVT. LTD.</h4>
                                        <h6>Currently Working, SEO Executive</h6>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eleifend risus sed feugiat faucibus.</p>
                                    </div>
                                </div>
    
                                <div class="experience-item">
                                    <div class="experience-circle experience-company pink-color-bg">
                                        <i class="icon-ghost"></i>
                                    </div>
                                    <div class="experience-content">
                                        <h4>Rolling System PVT. LTD.</h4>
                                        <h6>2008-2015, Senior Developer</h6>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eleifend risus sed feugiat faucibus.</p>
                                    </div>
                                </div>
    
                                <div class="experience-item">
                                    <div class="experience-circle experience-company pink-color-bg">
                                        <i class="icon-compass"></i>
                                    </div>
                                    <div class="experience-content">
                                        <h4>WebRec System PVT. LTD.</h4>
                                        <h6>2005-2007, Senior Designer</h6>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eleifend risus sed feugiat faucibus.</p>
                                    </div>
                                </div>
    
                            </div>
                        </div>
    
                    </div>
                </div>
            </section>-->
            <!-- Experience End -->



            <!-- Skills Modal Start -->
            <div class="modal fade padding-top-70" id="skillmodal" role="dialog">
                <div class="modal-dialog">


                    <div class="modal-content pattern-bg">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="section-title margin-top-30">
                                        <button type="button" class="btn pull-right" data-dismiss="modal"><i class="fa fa-close"></i></button>
                                        <h2>My Skills.</h2>
                                        <div class="divider dark">
                                            <i class="icon-energy"></i>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-offset-2 col-xs-offset-0 col-md-8 col-sm-8">

                                    <div class="my-skill margin-bottom-50">
                                        <strong>Graphic Design</strong>
                                        <span class="pull-right">80%</span>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                                            </div>
                                        </div>

                                        <strong>Website Design</strong>
                                        <span class="pull-right">99%</span>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="99" aria-valuemin="0" aria-valuemax="100" style="width: 99%;">
                                            </div>
                                        </div>

                                        <strong>HTML5/CSS3</strong>
                                        <span class="pull-right">85%</span>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">
                                            </div>
                                        </div>

                                        <strong>Javascript</strong>
                                        <span class="pull-right">90%</span>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Skills Modal End -->



            <!-- Subscribe Modal Start -->
            <div class="modal fade subscribe padding-top-120" id="subscribemodal" role="dialog">
                <div class="modal-dialog">


                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="section-title margin-top-30">
                                        <button type="button" class="btn pull-right" data-dismiss="modal"><i class="fa fa-close"></i></button>
                                        <h2>Subscribe.</h2>
                                        <div class="divider dark">
                                            <i class="icon-envelope-letter"></i>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-offset-2 col-xs-offset-0 col-md-8 col-sm-8">

                                    <div class="margin-bottom-50">
                                        <form id="mc-form" method="post" action="">

                                            <div class="subscribe-form">
                                                <input id="mc-email" type="email" placeholder="Email Address" class="text-input">
                                                <button class="submit-btn" type="submit">Submit</button>
                                            </div>
                                            <label for="mc-email" class="mc-label"></label>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Subscribe Modal End -->
            <!-- About End -->













            <!-- Gallery Start -->
    <!--        <section id="gallery" class="gallery section-space-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12" style="
                             background:url(../images/bg/friends-colorful-drinks.jpg) no-repeat; 
                             background-position:center top;
                             height:264px;">
                            <img class="blue-divider" src="images/bg/divider.png" alt=""/>
                        </div>
                                            <div class="col-md-12 col-sm-12">
                                                <h3 class="tits">La Noche, friends and more!</h3>
                                            </div>
    
                        <div class="col-md-12 col-sm-12">
                            <br>
                            <h4 class="tits">Gallery</h4>
                        </div>
                        <div class="col-md-2">
                            <ul class="gallery">
                                <li class="filter" data-filter="all">all</li>
                                <li class="filter" data-filter=".thai-fest">Thai-Fest</li>
                                <li class="filter" data-filter=".come-fest">COME Festival</li>
                                <li class="filter" data-filter=".fancy-show">Fancy Show NY</li>
                            </ul>
                        </div>
    
                        <div class="col-md-10">
                            <div class="gallery-inner margin-top-30">
            <?php foreach ($imageGallery as $key => $value): ?>
                <?php foreach ($value as $keyy): ?>   
                                                                                                                                                        <div class="col-md-2 col-sm-3 col-xs-6 mix <?php echo $key; ?>">
                                                                                                                                                            <div class="item">
                                                                                                                                                                <a href="<?php echo $keyy['src']; ?>" class="gallery-popup" title="<?php echo $keyy['title']; ?>" >
                                                                                                                                                                    <img src="<?php echo $keyy['src']; ?>" alt="<?php echo $keyy['title']; ?>">
                                                                                                                                                                </a>
                                                                                                                                                            </div>
                                                                                                                                                        </div>
                                                                                                                    
                <?php endforeach; ?>  
            <?php endforeach; ?>                            
                            </div>
                        </div>
                    </div>
                </div>
            </section>-->
            <!-- Gallery End -->

















            <!-- Testimonial Start -->
            <section id="friends-testimonials" class="testimonial-section section-space-padding">

                <div class="row">
                    <div class="col-md-12" style="
                         background:url(../images/bg/friends-colorful-drinks.jpg) no-repeat; 
                         background-position:center top;
                         height:264px;">
                        <img class="blue-divider" src="images/bg/divider.png" alt=""/>
                    </div>                    
                    <div class="col-md-12 col-sm-12">
                        <br>
                        <h4 class="tits">Friends!</h4>
                        <p>Friends, Family, Neighbors and La Noche equals good times!</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-offset-3 col-sm-offset-2 col-md-6 col-sm-8">
                        <div class="testimonial-carousel-list margin-top-20">

                            <?php foreach ($laNocheFans as $key): ?>
                                <div class="testimonial-word text-center">
                                    <div class="testimonial-img-container">
                                        <img src="<?php echo $key['src'] ?>" class="img-responsive" alt="<?php echo $key['alt'] ?>">
                                    </div>
                                    <h2><?php echo $key['title'] ?></h2>
                                    <p><?php echo $key['quote'] ?></p>
                                </div>
                            <?php endforeach; ?>

                        </div>
                    </div>

                </div>
            </section>
            <!-- Testimonial End -->



            <!-- statistics -->
            <section class="statistics-section section-space-padding bg-cover text-center">


                <div class="row">
                    <!--
                                        <div class="col-md-3 col-sm-6 col-xs-6">
                                            <div class="statistics bg-color-1">
                                                <div class="statistics-icon"><i class="icon-mustache"></i>
                                                </div>
                                                <div class="statistics-content">
                                                    <h5><span data-count="2025" class="statistics-count">2025</span></h5><span>Projects Done</span>
                                                </div>
                                            </div>
                                        </div>
                    -->
                    <div class="col-md-offset-3 col-sm-offset-3 col-xs-offset-1 col-md-6 col-sm-6 col-xs-10 no-padding">
                        <div class="statistics bg-color-6">
                            <div class="statistics-icon"><i class="icon-screen-desktop"></i>
                            </div>
                            <div class="statistics-content ">
                                <span>Media Spots</span>
                                <div class="videoWrapper">
                                    <iframe width="560" height="349" src="https://www.youtube.com/embed/_pydDjTRC_U" frameborder="0" allowfullscreen></iframe>  
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--                    <div class="col-md-3 col-sm-6 col-xs-6">
                                            <div class="statistics bg-color-4">
                                                <div class="statistics-icon"><i class="icon-hourglass"></i>
                                                </div>
                                                <div class="statistics-content">
                                                    <h5><span data-count="8000" class="statistics-count">8000</span></h5><span>Hours of Work</span>
                                                </div>
                                            </div>
                                        </div>
                    
                                        <div class="col-md-3 col-sm-6 col-xs-6">
                                            <div class="statistics bg-color-5">
                                                <div class="statistics-icon"><i class="icon-cup"></i>
                                                </div>
                                                <div class="statistics-content">
                                                    <h5><span data-count="4000" class="statistics-count">4000</span></h5><span>Cup of Coffee</span>
                                                </div>
                                            </div>
                                        </div>-->


                </div>
            </section>
            <!-- statistics end -->











            <!--         Services Start 
                    <section id="services" class="services-section section-space-padding">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="section-title">
                                        <h2>My Services.</h2>
                                        <div class="divider dark">
                                            <i class="icon-drop"></i>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                                    </div>
                                </div>
                            </div>
            
                            <div class="row margin-top-30">
            
                                <div class="col-md-4 col-sm-6">
                                    <div class="services-detail">
                                        <i class="icon-screen-smartphone color-1"></i>
                                        <h3>Mobile Design</h3>
                                        <hr>
                                    </div>
                                </div>
            
                                <div class="col-md-4 col-sm-6">
                                    <div class="services-detail">
                                        <i class="icon-screen-tablet color-2"></i>
                                        <h3>Tablet Design</h3>
                                        <hr>
                                    </div>
                                </div>
            
                                <div class="col-md-4 col-sm-6">
                                    <div class="services-detail">
                                        <i class="fa fa-code color-3"></i>
                                        <h3>Clean Code</h3>
                                        <hr>
                                    </div>
                                </div>
            
                                <div class="col-md-4 col-sm-6">
                                    <div class="services-detail">
                                        <i class="icon-support color-4"></i>
                                        <h3>Full Support</h3>
                                        <hr>
                                    </div>
                                </div>
            
                                <div class="col-md-4 col-sm-6">
                                    <div class="services-detail">
                                        <i class="fa fa-html5 color-5"></i>
                                        <h3>HTML5 Design</h3>
                                        <hr>
                                    </div>
                                </div>
            
                                <div class="col-md-4 col-sm-6">
                                    <div class="services-detail">
                                        <i class="icon-bulb color-6"></i>
                                        <h3>CSS3 Design</h3>
                                        <hr>
                                    </div>
                                </div>
            
                            </div>
                        </div>
                    </section>
                     Services End -->








            <!-- Contact Start -->
            <section id="contact" class="contact-us-container section-space-padding">

                <div class="row">
                    <div class="col-md-12" style="
                         background:url(../images/bg/cartoon-la-noche-love.jpg) no-repeat; 
                         background-position:center top;
                         height:264px;">
                        <img class="blue-divider" src="images/bg/divider.png" alt=""/>
                    </div>


                    <div class="col-md-12 col-sm-12">
                        <h3 class="tits">Contact</h3>
                    </div>

                    <div class="col-md-offset-2 col-sm-offset-2 col-md-8 col-sm-8">
                        <div class="contact-us-detail"><a href="mailto:lanochedrink@gmail.com">lanochedrink@gmail.com</a></div>
                        <form class="contact-us pattern-bg" action="email.php" method="post">

                            <?php if (isset($_SESSION['emailResponse'])): ?>

                                <div class="error-bd">
                                    <?php
                                    echo $_SESSION['emailResponse'];
                                    unset($_SESSION['emailResponse']);
                                    ?>
                                </div>


                            <?php endif; ?>


                            <div class="form-group">
                                <input type="text" name="name" id="name" class="form-control" placeholder="Your Name">
                            </div>

                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control" placeholder="Your Email">
                            </div>

                            <div class="form-group">
                                <input type="text" name="address" id="address" class="form-control" placeholder="Where are You From?">
                            </div>

                            <select id="subject" name="emailSubject" class="form-group form-control">
                                <option value="" selected disabled>Subject</option>
                                <option>Inquiries about fund raisers</option>
                                <option>Investment</option>
                                <option>Distribution</option>
                                <option>Purchase / Orders</option>
                                <option>Other</option>
                            </select>

                            <div class="textarea-message form-group">
                                <textarea id="comments" name="comments" class="textarea-message form-control" placeholder="Your Message" rows="5"></textarea>
                            </div>



                            <div class="text-center">      
                                <button type="submit" name="submitted" value="yes" class="button button-style button-style-dark button-style-color-2">Submit</button>
                            </div>

                        </form>

                    </div>




                </div>
            </section>
            <!-- Contact End -->




            <!-- Footer Start -->
            <footer class="pattern-pom-bg " style="padding-top:40px;">

                <div class="row">

                    <div class="col-md-12">
                        <ul class="social-icon margin-bottom-30">
                            <li><a href="https://www.facebook.com/drinklightyourinnerfire" target="_blank" class="facebook"><i class="icon-social-facebook"></i></a></li>
                            <li><a href="https://twitter.com/drinklanoche" target="_blank" class="twitter"><i class="icon-social-twitter"></i></a></li>
                            <li><a href="https://www.instagram.com/drinklanoche/?hl=en" target="_blank" class="instagram"><i class="icon-social-instagram"></i></a></li>
                        </ul>
                    </div>

                    <!--                    <div class="col-md-12 uipasta-credit">
                                            <p>Design By UiPasta</p>
                                        </div>-->


                </div>
            </footer>
            <!-- Footer End -->
        </div>

        <!-- Back to Top Start -->
        <a href="#" class="scroll-to-top"><i class="icon-arrow-up-circle"></i></a>
        <!-- Back to Top End -->


        <!-- All Javascript Plugins  -->
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugin.js"></script>

        <!-- Main Javascript File  -->
        <script type="text/javascript" src="js/scripts.js"></script>


        <!-- Face Book Stuff -->
        <div id="fb-root"></div>
        <script>(function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0';
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>

        <!-- Place this tag in your head or just before your close body tag. -->
        <script src="https://apis.google.com/js/platform.js" async defer></script>

        <!-- twitter --> 
        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </body>
</html>